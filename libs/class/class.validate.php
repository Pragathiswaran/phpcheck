<?php

class validation{
 
    private $conn=null;
   public function __construct(){
        $db = new connection();
        $this->conn = $db->connect();
    } 
    public function validate($value){
  
        $sql = "SELECT * FROM `validate` WHERE `serialnumber` = '$value' ";
        //print($sql);
        $result = $this->conn->query($sql);
        if($result && $result->num_rows > 0 ){
         
            $query="UPDATE `validate` SET `active` = '1' WHERE `serialnumber` = '$value'";
           // print($query);
            if($this->conn->query($query)){
                return true;
             } else {
               return false;
            }
        } else {
            return false;
        }
    }

    function login($user , $password ){
        if($result->num_rows == 1)
  {
    $row = $result->fetch_assoc();
    if(password_verify($password,$row['password']))
    {
      return $row['username'] ;
    }
    else
    {
      return false;
    }
  }
  else
  {
    return false;
  }
    }
}










?>