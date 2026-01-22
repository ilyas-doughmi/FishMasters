<?php

class CompetitionModel
{
    private int $id;
    private string $name;
    private string $type;
    private string $category;
    private string $location;
    private string $startDate;
    private string $endDate;
    private string $status;

    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getId(): int { return $this->id; }
    public function getName(): string { return $this->name; }
    public function getType(): string { return $this->type; }
    public function getCategory(): string { return $this->category; }
    public function getLocation(): string { return $this->location; }
    public function getStartDate(): string { return $this->startDate; }
    public function getEndDate(): string { return $this->endDate; }
    public function getStatus(): string { return $this->status; }

    public function setId(int $id): void { $this->id = $id; }
    public function setName(string $name): void { $this->name = $name; }
    public function setType(string $type): void { $this->type = $type; }
    public function setCategory(string $category): void { $this->category = $category; }
    public function setLocation(string $location): void { $this->location = $location; }
    public function setStartDate(string $startDate): void { $this->startDate = $startDate; }
    public function setEndDate(string $endDate): void { $this->endDate = $endDate; }
    public function setStatus(string $status): void { $this->status = $status; }

    public function listCompetition(): array
    {
        $stmt = $this->pdo->prepare("SELECT * FROM competition ORDER BY competitionStartDate DESC");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function createCompetition(): bool
    {
        $stmt = $this->pdo->prepare(
            "INSERT INTO competition
            (competitionName, competitionType, competitionCategory, competitionLocation, competitionStartDate, competitionEndDate, competitionStatus)
            VALUES (:name, :type, :category, :location, :startDate, :endDate, :status)"
        );

        return $stmt->execute([
            ':name' => $this->name,
            ':type' => $this->type,
            ':category' => $this->category,
            ':location' => $this->location,
            ':startDate' => $this->startDate,
            ':endDate' => $this->endDate,
            ':status' => $this->status ?? 'notStarted'
        ]);
    }

    public function updateCompetition(int $id): bool
    {
        $stmt = $this->pdo->prepare(
            "UPDATE competition SET
            competitionName = :name,
            competitionType = :type,
            competitionCategory = :category,
            competitionLocation = :location,
            competitionStartDate = :startDate,
            competitionEndDate = :endDate,
            competitionStatus = :status
            WHERE competitionId = :id"
        );

        return $stmt->execute([
            ':id' => $id,
            ':name' => $this->name,
            ':type' => $this->type,
            ':category' => $this->category,
            ':location' => $this->location,
            ':startDate' => $this->startDate,
            ':endDate' => $this->endDate,
            ':status' => $this->status
        ]);
    }

    public function close(int $id): bool
    {
        $stmt = $this->pdo->prepare(
            "UPDATE competition SET competitionStatus = 'done' WHERE competitionId = :id"
        );
        return $stmt->execute([':id' => $id]);
    }

    public function join(int $userId, int $competitionId): string
    {
        $stmt = $this->pdo->prepare("SELECT * FROM competitions WHERE id = :id");
        $stmt->execute([':id' => $competitionId]);
        $competition = $stmt->fetch(PDO::FETCH_OBJ);

        if (!$competition) return "Competition not found";
        if ($competition->status !== 'open') return "Competition is closed";

        $currentDate = new DateTime();
        $startDate = new DateTime($competition->start_date);
        if ($currentDate >= $startDate) return "Registration closed";

        $stmt = $this->pdo->prepare(
            "SELECT 1 FROM participants WHERE user_id = :user_id AND competition_id = :competition_id"
        );
        $stmt->execute([
            ':user_id' => $userId,
            ':competition_id' => $competitionId
        ]);

        if ($stmt->fetch()) return "Already registered";

        $stmt = $this->pdo->prepare(
            "INSERT INTO participants (user_id, competition_id, register_at, status)
             VALUES (:user_id, :competition_id, NOW(), 'confirmed')"
        );

        return $stmt->execute([
            ':user_id' => $userId,
            ':competition_id' => $competitionId
        ]) ? "Success" : "Error";
    }

    public function generateRanking(int $competitionId): array
    {
        $stmt = $this->pdo->prepare(
            "SELECT user_id, SUM(score) AS total_score
             FROM catches
             WHERE competition_id = :competition_id
             GROUP BY user_id
             ORDER BY total_score DESC"
        );
        $stmt->execute([':competition_id' => $competitionId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}