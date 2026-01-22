<?php

class ParticipantModel
{
    private string $registerAt;
    private string $status;
    private int $userid;
    private int $competitionId;

    public function getRegisterAt(): string
    {
        return $this->registerAt;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getUserId(): int
    {
        return $this->userid;
    }

    public function getCompetitionId(): int
    {
        return $this->competitionId;
    }


    public function setRegisterAt(string $registerAt): void
    {
        $this->registerAt = $registerAt;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function setUserId(int $userid): void
    {
        $this->userid = $userid;
    }

    public function setCompetitionId(int $competitionId): void
    {
        $this->competitionId = $competitionId;
    }

    public function showAllParticipantPerCompetition($competitionId)
    {
        $db = Database::getInstance();

        $sql = "SELECT u.userId, u.userName
                FROM participant p
                JOIN user u ON p.userid = u.userId
                WHERE p.competitionId = ?";

        $stmt = $db->prepare($sql);
        $stmt->execute([$competitionId]);

        return $stmt->fetchAll();
    }
}
