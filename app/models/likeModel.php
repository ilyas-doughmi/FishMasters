<?php
<<<<<<< HEAD
// GET LIKE AND FIXING IMPLEMENATION OF CLASS !!! ILYAS
=======
<<<<<<< HEAD

=======
// GET LIKE AND FIXING IMPLEMENATION OF CLASS !!! ILYAS
>>>>>>> feat-model
>>>>>>> ba26709d9ee4b9eaed57700aae24d976a86042e7

spl_autoload_register(function ($className) {

    $path = "models/";
    $extension = ".php";
    $fullpath = $path . $className . $extension;

    if (!file_exists($fullpath)) {
        return false;
    }

    require_once $fullpath;
});


class Like extends Database
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
        $sql="INSERT INTO likes (liketype,likeuserid,likecreatedat) VALUES (?,?,?)";
        $stmt=$this->pdo->prepare($sql);
        $stmt->execute([$this->type,$this->fanId,$this->createdAt]);
        return true;
    }

    public function remove($id): bool
    {   
        $sql="DELETE FROM subscribe where likeid=? ";
        $stmt=$this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return true;
    }
<<<<<<< HEAD
    // get like count   
=======
<<<<<<< HEAD
=======
    // get like count   
>>>>>>> feat-model
>>>>>>> ba26709d9ee4b9eaed57700aae24d976a86042e7


    public function __get($property)
    {
        return $this->$property;
    }

    public function __set($property, $value)
    {
        $this->$property = $value;
    }
}
