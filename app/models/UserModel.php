<?php


abstract class User extends Database 
{
    protected $id;
    protected $fullname;
    protected $email;
    protected $password;
    protected $role;
    protected $createdAt;
    
    protected $pdo;

    public function __construct($pdo){
       $this->pdo = $pdo;
    }


    abstract public function login($email,$password);
    abstract public function register();

    public function __get($name) {
        if ($name === "password") {
            return null;
        } else {
            return $this->$name;
        }
    }

    public function __set($name, $value) {
        if ($name === "password") {
            return false;
        } else {
            $this->$name = $value;
            return true;
        }
    }

}
