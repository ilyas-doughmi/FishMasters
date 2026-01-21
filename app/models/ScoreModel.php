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

    public function showScore(int $fisherId): float
    {
        return $this->totalPoints;
    }
    public function generateRanking(): array
    {
        return [];
    }
}
