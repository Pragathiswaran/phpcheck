<?php

class signup{

    private $conn;
        
    function Singup($name,$phone,$email,$password){
        $option= [
            'cost'=> 9,
        ];
        $password=password_hash($pass,PASSWORD_BCRYPT,$option);
        $db = new connection();
        $this->conn = $db->connect();
        $sql = "INSERT INTO `Signup` (`Username`, `Phone`, `Email`, `Password`)
        VALUES ('$name', '$phone', '$email', '$password');";
        
        if ($this->conn->query($sql) === TRUE) {
           return true;
        } else {
            return false;
        }
    }
    function authentication($name){
        $db = new connection();
        $this->conn = $db->connect();
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