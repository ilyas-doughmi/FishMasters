
<?php

spl_autoload_register($className){

    $path="models";
    $extension="./php";
    $fullpath=$path.$className.$extension;

    if(!file_exists($fullpath)){
        return false;
    }

    require_once "$fullpath";
}

class Admin extends UserModel

{
    public function login($email,$password){

    try {

        $sql="SELECT * FROM users where useremail=$email";
        $stmt=$this->pdo->prepare($sql);
        $rows=$stmt->execute($sql);
    } 

    catch (PDOexception $e){
        echo $e->getMessage();
    }

    }

} 