<?php


abstract class User
{
    protected $id;
    protected $fullname;
    protected $email;
    protected $password;
    protected $role;
    protected $createdAt;

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }


    abstract public function login($email, $password);
    abstract public function register();

    public function __get($name)
    {
        return  $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
}