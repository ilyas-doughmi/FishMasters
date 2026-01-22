<?php
// fix database and fix implementation !!!  OUSSAMA
spl_autoload_register(function ($className)) {


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

    private PDO $pdo;

    public function __construct(
        int $id,
        string $name,
        string $description
    ) {
        $this->pdo = Database::getInstance();

        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
    }

    public function showBadge(int $userId): array
    {
        $sql = "SELECT * FROM badge_user WHERE user_id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$userId]);

        return $stmt->fetchAll();
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
}