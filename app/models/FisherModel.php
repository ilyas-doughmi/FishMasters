<?php
include_once "app/models/UserModel.php";

class fisher extends User
{
    protected $photo;
    protected $club;
    protected $region;
    protected $favouritPeche;
    public function __construct($pdo)
    {
        parent::__construct($pdo);
        $this->role = 'fisher';
    }
    public function login($email, $password)
    {
        return true;
    }

    public function register()
    {
        try {
            $checkSql = "SELECT * FROM users WHERE useremail = :email";
            $checkStmt = $this->pdo->prepare($checkSql);
            $checkStmt->execute([
                'email' => $this->email
            ]);

            if ($checkStmt->fetch()) {
                return 'email_exists';
            }

            $sql = "INSERT INTO users 
(userfullname, useremail, userpassword, userrole)
VALUES 
(:fullname, :email, :password, :role)";


            $stmt = $this->pdo->prepare($sql);

            $password_hash = password_hash($this->password, PASSWORD_DEFAULT);

            $result = $stmt->execute([
                ':fullname'      => $this->fullname,
                ':email'         => $this->email,
                ':password'      => $password_hash,
                ':role'          => 'fisher'
            ]);


            if (!$result) {
                return false;
            }

            return true;
        } catch (PDOException $e) {
            return 'db_error:' . $e->getMessage();
        }
    }

}
