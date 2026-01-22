<?php

class SubscribeModel
{
    private int $fanId;
    private int $targetId;
    private string $type;
    private string $createdAt;

    public function __construct()
    {
        $this->createdAt = date('Y-m-d H:i:s');
    }

    public function setFanId($fanId)
    {
        $this->fanId = $fanId;
    }

    public function setTargetId($targetId)
    {
        $this->targetId = $targetId;
    }

    public function setType($type)
    {
        $this->type = $type;
    }


    public function subscribe()
    {
        $db = Database::getInstance();

        $sql = "INSERT INTO subscribe (fanId, targetId, subscribeType, createdAt)
                VALUES (?, ?, ?, ?)";

        $stmt = $db->prepare($sql);
        return $stmt->execute([
            $this->fanId,
            $this->targetId,
            $this->type,
            $this->createdAt
        ]);
    }


    public function unsubscribe()
    {
        $db = Database::getInstance();

        $sql = "DELETE FROM subscribe
                WHERE fanId = ? AND targetId = ? AND subscribeType = ?";

        $stmt = $db->prepare($sql);
        return $stmt->execute([
            $this->fanId,
            $this->targetId,
            $this->type
        ]);
    }

    public function getSubscribeCountPerFisher($fisherId)
    {
        $db = Database::getInstance();

        $sql = "SELECT COUNT(*) FROM subscribe
                WHERE targetId = ? AND subscribeType = 'fisher'";

        $stmt = $db->prepare($sql);
        $stmt->execute([$fisherId]);

        return $stmt->fetchColumn();
    }
}
