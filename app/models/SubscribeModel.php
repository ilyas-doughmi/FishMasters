<?php

spl_autoload_register(function ($className) {

    $path = "models/";
    $extension = ".php";
    $fullpath = $path . $className . $extension;

    if (!file_exists($fullpath)) {
        return false;
    }

    require_once $fullpath;
});

class Subscribe extends Database
{
    private int $id;
    private string $type;
    private DateTime $createdAt;
    private int $fanId;
    private int $targetId;

    public function __construct(
        int $id,
        string $type,
        DateTime $createdAt,
        int $fanId,
        int $targetId
    ) {
        $this->id = $id;
        $this->type = $type;
        $this->createdAt = $createdAt;
        $this->fanId = $fanId;
        $this->targetId = $targetId;
    }

    public function add(): bool
    {   
        $sql="INSERT INTO subscribe (subscribetype,subscribeuserid,subscribecreatedat) VALUES (?,?,?)";
        $stmt=$this->pdo->prepare($sql);
        $stmt->execute([$this->type,$this->fanId,$this->createdAt]);
        return true;
    }

    public function remove($id): bool
    {   

        $sql="DELETE FROM subscribe where subscribeid=?  "; // safety add AND

        $stmt=$this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return true;
    }

    public function __get($property)
    {
        return $this->$property;
    }

    public function __set($property, $value)
    {
        $this->$property = $value;
    }


    // get subscritpion count MERYEM

}