<?php

class LikeModel{
    private int $id;
    private string $type;
    private int $targetId;
    private int $userId;

    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getTargetId(): int
    {
        return $this->targetId;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setType(string $type): void
    {
        $validTypes = ['fisherman', 'catch', 'competition'];
        if (in_array($type, $validTypes)) {
            $this->type = $type;
        }
    }

    public function setTargetId(int $targetId): void
    {
        $this->targetId = $targetId;
    }

    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    public function add()
    {
        try {
            $sql = "INSERT INTO likes (likeType, likeTypeId, likeUserId) VALUES (:type, :targetId, :userId)";
            $stmt = $this->pdo->prepare($sql);
            return $stmt->execute([
                'type' => $this->type,
                'targetId' => $this->targetId,
                'userId' => $this->userId
            ]);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function remove()
    {
        try {
            $sql = "DELETE FROM likes WHERE likeType = :type AND likeTypeId = :targetId AND likeUserId = :userId";
            $stmt = $this->pdo->prepare($sql);
            return $stmt->execute([
                'type' => $this->type,
                'targetId' => $this->targetId,
                'userId' => $this->userId
            ]);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function exists(): bool
    {
        try {
            $sql = "SELECT likeId FROM likes WHERE likeType = :type AND likeTypeId = :targetId AND likeUserId = :userId";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                'type' => $this->type,
                'targetId' => $this->targetId,
                'userId' => $this->userId
            ]);
            return $stmt->fetch() !== false;
        } catch (PDOException $e) {
            return false;
        }
    }
}