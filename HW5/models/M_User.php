<?php
class M_User {
    
    protected $login, $name, $email, $pass, $db;   
    public function connect(){
        $db =  new PDO (DRIVER . ':host='. SERVER . ';dbname=' . DB, LOGIN, PASS);
        
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $db;
    }
    
    public function newUser ($login, $name, $email, $pass) {
        $result = $this->connect()->prepare("INSERT INTO users (name, login, email, pass, rights) VALUES (:name, :login, :email, :pass, :rights)");
        $result -> execute(array(
            ':name'=>$name,
            ':login'=>$login,
            ':email'=>$email,
            ':pass'=>$pass,
            ':rights'=>1,
        ));  
        return true;
    }
    
    public function getUser ($login) {
        $result = $this->connect()->prepare("SELECT * FROM users WHERE login = :login");
        $result -> execute(array(
            ':login'=>$login,
        ));  
        while($row = $result->fetch())
	       {
		  $res[]=$row;
	       }
        return $res;
    }
}
