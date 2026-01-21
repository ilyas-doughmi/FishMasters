<?php
include_once "app/models/UserModel.php";

class fisher extends User
{
    private $photo;
    private $club;
    private $region;
    private $favouritPeche;
    public function __construct($db)
    {
        parent::__construct($db);
        $this->role = 'fisher';
    }
    public function login($email, $password)
    {
        return true;
    }


        public function register()
    {
        try {
            $checkSql = "SELECT userId FROM users WHERE useremail = :email";
            $checkStmt = $this->pdo->prepare($checkSql);
            $checkStmt->execute([
                'email' => $this->email
            ]);

            if ($checkStmt->fetch()) {
                return 'email_exists';
            }

            $sql = "INSERT INTO users 
            (userfullname, useremail, userpassword, userrole, userphoto, userclub, userregion, userfavouritpeche)
            VALUES 
            (:fullname, :email, :password, :role, :photo, :club, :region, :favouritPeche)";

            $stmt = $this->pdo->prepare($sql);

            return $stmt->execute([
                'fullname'      => $this->fullname,
                'email'         => $this->email,
                'password'      => password_hash($this->password, PASSWORD_DEFAULT),
                'role'          => $this->role,
                'photo'         => $this->photo,
                'club'          => $this->club,
                'region'        => $this->region,
                'favouritPeche' => $this->favouritPeche
            ]);

        } catch (PDOException $e) {
            return 'db_error:' . $e->getMessage();
        }
    }
    

    public function __get($name)
    {
        if ($name === "password") {
            echo "Password cannot be accessed\n";
            return null;
        } else {
            echo "Getting property: $name\n";
            return $this->$name;
        }
    }

    public function __set($name, $value)
    {
        if ($name === "password") {
            echo "Password cannot be modified\n";
            return false;
        } else {
            $this->$name = $value;
            return true;
        }
    }
}