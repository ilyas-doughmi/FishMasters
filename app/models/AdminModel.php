<?php

require_once 'app/models/UserModel.php';
class Admin extends User
{
    public function login($email, $password)
    {
        try {
            $sql = "SELECT * FROM users WHERE useremail = :email";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['email' => $email]);

            $row = $stmt->fetch(PDO::FETCH_OBJ);

            if (!$row) {
                return 'email_not_found';
            }

            if (!password_verify($password, $row->userpassword)) {
                if ($password !== $row->userpassword) {
                    return 'invalid_password';
                }
            }

            return $row;

        } catch (PDOException $e) {
            return 'db_error:' . $e->getMessage();
        }
    }

    public function register()
    {
        return false;
    }
}
