<?php

class SpeciesModel
{
    private int $id;
    private string $name;
    private float $minSize;
    private float $coefficient;

    public function getId(): int
    {
        return $this->id;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getMinSize(): float
    {
        return $this->minSize;
    }
    public function getCoefficient(): float
    {
        return $this->coefficient;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function setMinSize(float $minSize): void
    {
        $this->minSize = $minSize;
    }
    public function setCoefficient(float $coefficient): void
    {
        $this->coefficient = $coefficient;
    }
}
