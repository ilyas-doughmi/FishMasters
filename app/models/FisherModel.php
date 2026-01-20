<?php
include_once "app/models/UserModel.php";

class fisher extends User
{
    private $photo;
    private $club;
    private $region;
    private $favouritPeche;
    public function __construct($id, $fullname, $email, $password, $role, $createdAt, $photo, $club, $region, $favouritPeche)
    {
        return parent::__construct($id, $fullname, $email, $password, $role, $createdAt);
        $this->photo = $photo;
        $this->club = $club;
        $this->region = $region;
        $this->favouritPeche = $favouritPeche;
    }
    public function login()
    {
        return true;
    }

    public function register()
    {
        return true;
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
