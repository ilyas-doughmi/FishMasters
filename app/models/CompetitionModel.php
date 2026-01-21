<?php
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










    public function createCompetition(): bool
    {
        return true;
    }
    public function close(): bool
    {
        return true;
    }
    public function generateRanking(): array
    {
        return [];
    }
}
