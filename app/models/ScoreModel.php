<?php

class ScoreModel
{
    private int $id;
    private float $totalWeight;
    private float $totalPoints;
    private float $biggestCatch;
    private int $catchCount;

    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getId(): int { return $this->id; }
    public function getTotalWeight(): float { return $this->totalWeight; }
    public function getTotalPoints(): float { return $this->totalPoints; }
    public function getBiggestCatch(): float { return $this->biggestCatch; }
    public function getCatchCount(): int { return $this->catchCount; }

    public function setId(int $id): void { $this->id = $id; }
    public function setTotalWeight(float $totalWeight): void { $this->totalWeight = $totalWeight; }
    public function setTotalPoints(float $totalPoints): void { $this->totalPoints = $totalPoints; }
    public function setBiggestCatch(float $biggestCatch): void { $this->biggestCatch = $biggestCatch; }
    public function setCatchCount(int $catchCount): void { $this->catchCount = $catchCount; }

    public function showScore(int $fisherId): float
    {
        try {
            $sql = "SELECT COALESCE(SUM(s.scoreTotalPoints), 0) AS total
                    FROM score s
                    WHERE s.scoreFisherId = :fisherId";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([':fisherId' => $fisherId]);
            $result = $stmt->fetch(PDO::FETCH_OBJ);
            return (float)$result->total;
        } catch (PDOException $e) {
            return 0.0;
        }
    }

    public function generateRanking(int $competitionId): array
    {
        try {
            $sql = "SELECT 
                        s.scoreId,
                        s.scoreTotalPoints,
                        s.scoreTotalWeight,
                        s.scoreBiggestCatch,
                        s.scoreCatchCount,
                        s.scoreCompetitionId,
                        s.scoreFisherId,
                        u.userFullName,
                        f.userClub,
                        f.userRegion
                    FROM score s
                    LEFT JOIN fisher f ON f.userId = s.scoreFisherId
                    LEFT JOIN users u ON u.userId = f.userId
                    WHERE s.scoreCompetitionId = :competitionId
                    ORDER BY s.scoreTotalPoints DESC";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([':competitionId' => $competitionId]);
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            return [];
        }
    }
}
