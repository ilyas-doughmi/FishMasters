<?php

abstract class User 
{
    protected $id;
    protected $fullname;
    protected $email;
    protected $password;
    protected $role;
    protected $createdAt;

    abstract public function login();
    abstract public function register();

    public function __get($name) {
        if ($name === "password") {
            echo "Password cannot be accessed\n";
            return null;
        } else {
            echo "Getting property: $name\n";
            return $this->$name;
        }
    }

    public function __set($name, $value) {
        if ($name === "password") {
            echo "Password cannot be modified\n";
            return false;
        } else {
            $this->$name = $value;
            return true;
        }
    }
}
