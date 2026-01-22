<?php

class Participant
{
    private int $id;
    private string $status;

    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getId(): int
    {
        return $this->id;
    }
    public function getStatus(): string
    {
        return $this->status;
    }
}
