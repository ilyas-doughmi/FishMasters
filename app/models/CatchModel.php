<?php

class CatchFish
{
    private int $id;
    private float $weight;
    private float $length;
    private bool $validated;
    private float $points;

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
    public function setValidated(bool $validated): void
    {
        $this->validated = $validated;
    }
    public function setPoints(float $points): void
    {
        $this->points = $points;
    }

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
    public function isValidated(): bool
    {
        return $this->validated;
    }
    public function getPoints(): float
    {
        return $this->points;
    }
}
