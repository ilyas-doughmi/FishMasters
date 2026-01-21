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

class Notification extends Database
{
    private int $id;
    private string $message;
    private bool $isRead;
    private string $createdAt;
    private int $userId;

    public function __construct(
        $id = null,
        $message = '',
        $isRead = false,
        $createdAt = null,
        $userId = null
    ) {
        $this->id = $id;
        $this->message = $message;
        $this->isRead = $isRead;
        $this->createdAt = $createdAt ?? date('Y-m-d H:i:s');
        $this->userId = $userId;

        $this->table = "notifications";
        $this->columns = ["message", "isRead", "createdAt", "userId"];
    }

    public function showNotification($userId): array
    {
        $sql="SELECT * FROM notifications where user_id=?";
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
