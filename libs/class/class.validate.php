<?php

class validation{
 
    private $conn;
    public $triesvalidate=null;

    public function __construct(){
        $db = new connection();
        $this->conn = $db->connect();
       // echo "success";
    }
    public function validate($value){
        
        $this->triesvalidate=$value;
        $sql = "SELECT * FROM `validate` WHERE `serialnumber` = '$value' ";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0){
            $query="UPDATE `validate` SET `active` = '1' WHERE `serialnumber` = '$value'";
            if($this->conn->query($query)===TRUE){
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
        
    }
}










?>