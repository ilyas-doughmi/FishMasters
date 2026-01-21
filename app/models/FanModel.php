<?php
class Fan extends User
{
    protected $photo;
    protected $club;
    protected $region;
    protected $favouritPeche;

    public function __construct($db)
    {
        parent::__construct($db);
        $this->role = 'fan';
    }

    public function register()
    {
        try {
            $checkSql = "SELECT userId FROM users WHERE useremail = :email";
            $checkStmt = $this->pdo->prepare($checkSql);
            $checkStmt->execute(['email' => $this->email]);

            if ($checkStmt->fetch()) {
                return 'email_exists';
            }

            $sql = "INSERT INTO users 
            (userfullname, useremail, userpassword, userrole)
            VALUES 
            (:fullname, :email, :password, :role)";

            $stmt = $this->pdo->prepare($sql);

            return $stmt->execute([
                'fullname'      => $this->fullname,
                'email'         => $this->email,
                'password'      => password_hash($this->password, PASSWORD_DEFAULT),
                'role'          => $this->role,
            ]);

        } catch (PDOException $e) {
            return 'db_error:' . $e->getMessage();
        }
    }
    public function login($email, $password)
    {
        throw new \Exception('Not implemented');
    }
}