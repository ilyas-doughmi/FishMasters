<?php

class ScoreModel
{
    private int $id;
    private float $totalWeight;
    private float $totalPoints;
    private float $biggestCatch;
    private int $catchCount;

    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getId(): int
    {
        return $this->id;
    }
    public function getTotalWeight(): float
    {
        return $this->totalWeight;
    }
    public function getTotalPoints(): float
    {
        return $this->totalPoints;
    }
    public function getBiggestCatch(): float
    {
        return $this->biggestCatch;
    }
    public function getCatchCount(): int
    {
        return $this->catchCount;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function setTotalWeight(float $totalWeight): void
    {
        $this->totalWeight = $totalWeight;
    }
    public function setTotalPoints(float $totalPoints): void
    {
        $this->totalPoints = $totalPoints;
    }
    public function setBiggestCatch(float $biggestCatch): void
    {
        $this->biggestCatch = $biggestCatch;
    }
    public function setCatchCount(int $catchCount): void
    {
        $this->catchCount = $catchCount;
    }




    public function showScore(int $fisherId): float
    {
        try {
            $sql = "SELECT SUM(s.scoreTotalPoints) as total
                    FROM score s
                    WHERE s.scoreId IN (
                        SELECT DISTINCT c.catchScoreId 
                        FROM catch c 
                        WHERE c.catchFisherId = :fisherId
                    )";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['fisherId' => $fisherId]);
            $result = $stmt->fetch(PDO::FETCH_OBJ);
            
            return $result->total ? (float)$result->total : 0.0;
        } catch (PDOException $e) {
            return 0.0;
        }
    }

    public function generateRanking(): array
    {
        try {
           
            $sql = "SELECT 
                        f.userFullName, 
                        f.userPhoto, 
                        f.userClub, 
                        f.userRegion,
                        COALESCE(SUM(distinct_scores.scoreTotalPoints), 0) as totalPoints
                    FROM fisher f
                    LEFT JOIN (
                        SELECT DISTINCT c.catchFisherId, s.scoreId, s.scoreTotalPoints
                        FROM catch c
                        JOIN score s ON c.catchScoreId = s.scoreId
                    ) distinct_scores ON f.userId = distinct_scores.catchFisherId
                    GROUP BY f.userId, f.userFullName, f.userPhoto, f.userClub, f.userRegion
                    ORDER BY totalPoints DESC";

            $stmt = $this->pdo->query($sql);
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            return [];
        }
    }
}
