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

<<<<<<< HEAD
    public function setType($type)
=======
    public function add(): bool
    {   
        $sql="INSERT INTO subscribe (subscribetype,subscribeuserid,subscribecreatedat) VALUES (?,?,?)";
        $stmt=$this->pdo->prepare($sql);
        $stmt->execute([$this->type,$this->fanId,$this->createdAt]);
        return true;
    }
}

    public function remove($id): bool

    {   

        $sql="DELETE FROM subscribe where subscribeid=?  "; // safety add AND


        $sql="DELETE FROM subscribe where subscribeid=? ";

        $sql="DELETE FROM subscribe where subscribeid=?  "; // safety add AND
>>>>>>> feat-model
>>>>>>> ba26709d9ee4b9eaed57700aae24d976a86042e7
        $stmt=$this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return true;
    }

    public function __get($property)
>>>>>>> 691fae52fd3faf58f50f355a32a9a60d526ea5c9
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
<<<<<<< HEAD


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
=======


    // get subscritpion count MERYEM



    // get subscritpion count MERYEM
>>>>>>> feat-model
>>>>>>> ba26709d9ee4b9eaed57700aae24d976a86042e7
>>>>>>> 691fae52fd3faf58f50f355a32a9a60d526ea5c9
