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

class Badge 
{
    private int $id;
    private string $name;
    private string $description;

    public function __construct(
        int $id,
        string $name,
        string $description
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
    }

     public function showBadge($userId): array
    {
        $sql="SELECT * FROM badge_user where user_id=?";
        $stmt=$this->pdo->prepare($sql);
        $rows=$stmt->execute([$userId]);
        return $rows;
        
    }

    public function __get($property)
    {
        return $this->$property;
    }

    public function __set($property, $value)
    {
        $this->$property = $value;
    }
}
