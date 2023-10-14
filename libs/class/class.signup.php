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
        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
    
    function login($name,$pass){
        $sql = "SELECT * FROM `Signup` WHERE `username`= '$name' ";
        $result= $this->conn->query($sql);
        if($result->num_rows == 1){
            $row = $result->fetch_assoc();
            if(password_verify($pass,$row['password'])){
                //return $row['username'];
                return true;
            } else {
                return false;
            } 
        }
        else{
            return false;
        }
    }
    
}





?>