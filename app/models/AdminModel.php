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

class Admin extends UserModel
{
    public function login($email, $password)
    {
        try {
            $sql = "SELECT * FROM users WHERE useremail = :email";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['email' => $email]);

            $row = $stmt->fetch(PDO::FETCH_OBJ);

            if (!$row) {
                throw new Exception("User not found");
            }

            if ($password !== $row->userpassword) {
                throw new Exception("Incorrect password");
            }

            return true;

        } catch (PDOException $e) {
            echo "Database error: " . $e->getMessage();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
