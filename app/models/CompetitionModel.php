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

    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getId(): int
    {
        return $this->id;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getType(): string
    {
        return $this->type;
    }
    public function getCategory(): string
    {
        return $this->category;
    }
    public function getLocation(): string
    {
        return $this->location;
    }
    public function getStartDate(): string
    {
        return $this->startDate;
    }
    public function getEndDate(): string
    {
        return $this->endDate;
    }
    public function getStatus(): string
    {
        return $this->status;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function setType(string $type): void
    {
        $this->type = $type;
    }
    public function setCategory(string $category): void
    {
        $this->category = $category;
    }
    public function setLocation(string $location): void
    {
        $this->location = $location;
    }
    public function setStartDate(string $startDate): void
    {
        $this->startDate = $startDate;
    }
    public function setEndDate(string $endDate): void
    {
        $this->endDate = $endDate;
    }
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function createCompetition(): bool
    {
        try {
            $sql = "INSERT INTO competitions (name, type, category, location, start_date, end_date, status) 
                    VALUES (:name, :type, :category, :location, :start_date, :end_date, :status)";
            
            $stmt = $this->pdo->prepare($sql);
            
            return $stmt->execute([
                'name' => $this->name,
                'type' => $this->type,
                'category' => $this->category,
                'location' => $this->location,
                'start_date' => $this->startDate,
                'end_date' => $this->endDate,
                'status' => $this->status
            ]);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function join(int $userId, int $competitionId): string
    {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM competitions WHERE id = :id");
            $stmt->execute(['id' => $competitionId]);
            $competition = $stmt->fetch(PDO::FETCH_OBJ);

            if (!$competition) {
                return "Competition not found";
            }

            if ($competition->status !== 'open') {
                return "Competition is closed";
            }

            $currentDate = new DateTime();
            $startDate = new DateTime($competition->start_date);
            
            if ($currentDate >= $startDate) {
                return "Registration closed (started)";
            }

            $stmt = $this->pdo->prepare("SELECT * FROM participants WHERE user_id = :user_id AND competition_id = :competition_id");
            $stmt->execute([
                'user_id' => $userId,
                'competition_id' => $competitionId
            ]);
            
            if ($stmt->fetch()) {
                return "Already registered";
            }

            $sql = "INSERT INTO participants (user_id, competition_id, register_at, status) VALUES (:user_id, :competition_id, NOW(), 'confirmed')";
            $stmt = $this->pdo->prepare($sql);
            return $stmt->execute([
                'user_id' => $userId,
                'competition_id' => $competitionId
            ]) ? "Success" : "Error joining";

        } catch (PDOException $e) {
            return "Database error: " . $e->getMessage();
        }
    }

    public function getAllCompetitions(): array
    {
        try {
            $stmt = $this->pdo->query("SELECT * FROM competitions ORDER BY start_date DESC");
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            return [];
        }
    }

    public function close(int $id): bool
    {
        try {
            $sql = "UPDATE competitions SET status = 'closed' WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            return $stmt->execute(['id' => $id]);
        } catch (PDOException $e) {
            return false;
        }
    }
}
