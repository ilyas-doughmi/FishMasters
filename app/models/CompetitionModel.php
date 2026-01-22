<?php

//  2GUYS
// CREATE CLOSE GENERATE !!! SHOW EDIT JOIN !!!! // MEHDI - ILYAS

//  2GUYS
// CREATE CLOSE GENERATE !!! SHOW EDIT JOIN !!!! // MEHDI - ILYAS
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

    public function listCompetition(): array
    {
        try {
            $db = Database::getInstance();
            $query = "SELECT * FROM competition ORDER BY competitionStartDate DESC";
            $stmt = $db->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (Exception $e) {
            return [];
        }
    }

    public function createCompetition(): bool
    {
        try {
            $db = Database::getInstance();
            $query = "INSERT INTO competition 
                      (competitionName, competitionType, competitionCategory, 
                       competitionLocation, competitionStartDate, competitionEndDate, competitionStatus)
                      VALUES (:name, :type, :category, :location, :startDate, :endDate, :status)";
            $stmt = $db->prepare($query);
            $result = $stmt->execute([
                ':name' => $this->name,
                ':type' => $this->type,
                ':category' => $this->category,
                ':location' => $this->location,
                ':startDate' => $this->startDate,
                ':endDate' => $this->endDate,
                ':status' => $this->status ?? 'notStarted'
            ]);
            return $result;
        } catch (Exception $e) {
            return false;
        }
    }

    public function updateCompetition($id): bool
    {
        try {
            $db = Database::getInstance();
            $query = "UPDATE competition SET 
                      competitionName = :name,
                      competitionType = :type,
                      competitionCategory = :category,
                      competitionLocation = :location,
                      competitionStartDate = :startDate,
                      competitionEndDate = :endDate,
                      competitionStatus = :status
                      WHERE competitionId = :id";
            $stmt = $db->prepare($query);
            $result = $stmt->execute([
                ':id' => $id,
                ':name' => $this->name,
                ':type' => $this->type,
                ':category' => $this->category,
                ':location' => $this->location,
                ':startDate' => $this->startDate,
                ':endDate' => $this->endDate,
                ':status' => $this->status
            ]);
            return $result;
        } catch (Exception $e) {
            return false;
        }
    }

    public function close($id): bool
    {
        try {
            $db = Database::getInstance();
            $query = "UPDATE competition SET competitionStatus = 'done' WHERE competitionId = :id";
            $stmt = $db->prepare($query);
            return $stmt->execute([':id' => $id]);
        } catch (Exception $e) {
            return false;
        }
    }


    public function generateRanking(): array
    {
        return [];
    }
}