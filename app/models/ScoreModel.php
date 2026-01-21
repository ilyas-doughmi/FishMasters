<?php

class ScoreModel
{
    private int $id;
    private float $totalWeight;
    private float $totalPoints;
    private float $biggestCatch;
    private int $catchCount;

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




    // MEHDI

    public function showScore(int $fisherId): float
    {
        try {
            $db = Database::getInstance();
            $sql = "SELECT scoreTotalPoints from score s
                left join fisher f on f.userId = s.scoreFisherId
                where userId = :fisherId";
            $stmt = $db->prepare($sql);
            $result = $stmt->execute([
                ':fisherId' => $fisherId,
            ]);
            return $result;
        } catch (Exception $e) {
            return false;
        }
    }
    public function generateRanking(int $competitionId): array
    {
        try {
            $db = Database::getInstance();
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
                    WHERE s.scoreCompetitionId = :competitionId
                    ORDER BY s.scoreTotalPoints DESC
                    LIMIT 3";
            $stmt = $db->prepare($sql);
            $stmt->execute([
                ':competitionId' => $competitionId,
            ]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            return [];
        }
    }
}