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



class Fan extends User
{
    public function login($email, $password)
    {
        try {
            $sql = "SELECT * FROM users WHERE useremail = :email";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['email' => $email]);

            $row = $stmt->fetch();

            if (!$row) {
                throw new Exception("User not found");
            }

            if (!password_verify($password, $row->userpassword)) {
                throw new Exception("Incorrect password");
            }

            return true;

        } catch (PDOException $e) {
            error_log($e->getMessage());
            echo "A database error occurred.";
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    private function hashPassword() {
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
    }

    public function inscription() {

        $stmt = $this->pdo->prepare("SELECT COUNT(*) FROM user WHERE email = ?");
        $stmt->execute([$this->email]);

        if ($stmt->fetchColumn() > 0) {
            throw new Exception("Email déjà utilisé");
        }

        $this->hashPassword();

        $stmt = $this->pdo->prepare(
            "INSERT INTO user (nom, prenom, email, password, role)
             VALUES (?, ?, ?, ?, ?)"
        );

        return $stmt->execute([
            $this->nom,
            $this->prenom,
            $this->email,
            $this->password, 
            $this->role
        ]);
    }
}
?>