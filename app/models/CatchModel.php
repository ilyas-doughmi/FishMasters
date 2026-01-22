<?php
// add validate and calculate point add logic !!!!  MERYEM
class CatchFish
{
    private int $id;
    private float $weight;
    private float $length;
    private string $photo;
    private bool $isReleased;
    private bool $validated;
    private string $createdAt;
    private float $catchPoints;

    public function getId(): int
    {
        return $this->id;
    }
    public function getWeight(): float
    {
        return $this->weight;
    }
    public function getLength(): float
    {
        return $this->length;
    }
    public function getPhoto(): string
    {
        return $this->photo;
    }
    public function isReleased(): bool
    {
        return $this->isReleased;
    }
    public function isValidated(): bool
    {
        return $this->validated;
    }
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    public function getCatchPoints(): string
    {
        return $this->catchPoints;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function setWeight(float $weight): void
    {
        $this->weight = $weight;
    }
    public function setLength(float $length): void
    {
        $this->length = $length;
    }
    public function setPhoto(string $photo): void
    {
        $this->photo = $photo;
    }
    public function setIsReleased(bool $isReleased): void
    {
        $this->isReleased = $isReleased;
    }
    public function setValidated(bool $validated): void
    {
        $this->validated = $validated;
    }
    public function setCreatedAt(string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
    public function setCatchPoints(string $catchPoints): void
    {
        $this->catchPoints = $catchPoints;
    }
    public function showAllCatch(): array
    {
        try {
            $db = Database::getInstance();
            $query = "SELECT * FROM catch";
            $stmt = $db->prepare($query);
            $result = $stmt->execute();
            return $result->fetchAll(pdo::FETCH_OBJ);
        } catch (Exception $e) {
            return [];
        }
    }
    public function showCatchByUser($id): array
    {
        try {
            $db = Database::getInstance();
            $query = "SELECT * FROM catch WHERE catchFisherId = :id";
            $stmt = $db->prepare($query);
            $result = $stmt->execute([':id' => $id]);
            return $result->fetchAll(pdo::FETCH_OBJ);
        } catch (Exception $e) {
            return [];
        }
    }

    public function addCatch(int $fisherId): bool
    {
        try {
            $db = Database::getInstance();
            $query = "INSERT INTO catch (catchWeight, catchLength, catchPhoto, catchIsReleased, catchValidated, catchCreatedAt, catchFisherId) VALUES (:weight, :length, :photo, :isReleased, :validated, NOW(), :fisherId)";
            $stmt = $db->prepare($query);
            return $stmt->execute([
                ':weight' => $this->weight,
                ':length' => $this->length,
                ':photo' => $this->photo,
                ':isReleased' => $this->isReleased,
                ':validated' => $this->validated,
                ':fisherId' => $fisherId
            ]);
        } catch (Exception $e) {
            return false;
        }
    }
    public function validate(int $id): bool
    {
        try {
            $db = Database::getInstance();
            $query = "UPDATE catch SET catchValidated = TRUE WHERE catchId = :id";
            $stmt = $db->prepare($query);
            $result = $stmt->execute([':id' => $id]);
            if ($result) {
                $this->validated = true;
            }
            return $result;
        } catch (Exception $e) {
            return false;
        }
    }
    public function calculatePoints($id): float
    {
        try {
            $db = Database::getInstance();
            $query = "UPDATE catch SET catchPoints = :points WHERE catchId = :id";
            $stmt = $db->prepare($query);
            $result = $stmt->execute([
                ':id' => $id,
                ':points' => $this->catchPoints
            ]);
            if ($result) {
                $this->validated = true;
            }
            return $result;
        } catch (Exception $e) {
            return false;
        }
    }
}
