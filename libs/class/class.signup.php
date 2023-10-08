<?php

class signup{

    private $conn= null;
        
    public function __construct(){
        $db = new connection();
        $this->conn = $db->connect();
    }
    public function Singup($name,$phone,$email,$pass){
        $option= [
            'cost'=> 9,
        ];
        $password=password_hash($pass,PASSWORD_BCRYPT,$option);
        $sql = "INSERT INTO `Signup` (`Username`, `Phone`, `Email`, `Password`, `Active`, `Block`)
        VALUES ('$name', '$phone', '$email', '$password','0','1');";
        print($sql);
        if ($this->conn->query($sql) === TRUE) {
           return false;
        } else {
           return true;
        }
        return false;
    }
    function authentication($name){
    
        $sql = "SELECT * FROM `Signup` WHERE `username`= '$name' ";
        $result= $this->conn->query($sql);
        if($result->num_rows == 1)
        {
            $row = $result->fetch_assoc();
            return  ;
        }
        else
        {
            return false;
        }
    }
    

}





?>