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







    public function addCatch(int $fisherId): bool
    {
        return true;
    }
    public function validate(): bool
    {
        $this->validated = true;
        return true;
    }
    public function calculatePoints($rule): float
    {
        return 0;
    }
}
