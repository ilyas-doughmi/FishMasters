<?php

class ParticipantModel
{
    private int $id;
    private string $registerAt;
    private string $status;

    public function getId(): int
    {
        return $this->id;
    }
    public function getRegisterAt(): string
    {
        return $this->registerAt;
    }
    public function getStatus(): string
    {
        return $this->status;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function setRegisterAt(string $registerAt): void
    {
        $this->registerAt = $registerAt;
    }
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }
}
