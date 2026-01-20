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
   abstract public function register()

   

}