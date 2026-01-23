<?php

require_once 'UserModel.php';

class Fisher extends User
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


    public function show($columnandvalue){

    if($columnandvalue==[]){

        try{
            $sql="SELECT * FROM fisher";
            $stmt=$this->pdo->query($sql);
            $rows=$stmt->fetchAll();
            return $rows;
        }
        catch(PDOException $e){
            echo "ERREUR SQL :".$e->getMessage(). " IN : ".$e->getFile()." LINE:".$e->getLine();
        }
        
    }
    else{

        try{
            $sql="SELECT * FROM fisher WHERE $columnandvalue[0]=?";
            $stmt=$this->pdo->prepare($sql);
            $stmt->execute([$columnandvalue[1]]);
            $rows=$stmt->fetchAll();
            return $rows;
        }
        catch(PDOException $e){
            echo "ERREUR SQL :".$e->getMessage(). " IN : ".$e->getFile()." LINE:".$e->getLine();
        }
}

}


    public function update($columnandvalueandid){ 

    try {
        $sql="UPDATE fisher SET $columnandvalueandid[0]=? WHERE userid=?";
        $stmt=$this->pdo->prepare($sql);
        $stmt->execute[[$columnandvalue[1],$columnandvalue[2]]];
        return true;
    }
    catch(PDOException $e){
    echo "ERREUR SQL :".$e->getMessage(). " IN : ".$e->getFile()." LINE:".$e->getLine();
    }


    }
}