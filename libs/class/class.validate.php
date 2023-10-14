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

    function addinstall($install){
      $sql = "SELECT * FROM `validate` WHERE `serialnumber` = '$install'";
      $result = $this->conn->query($sql);
      if($result->num_rows > 0){
          $query="SELECT * FROM `validate` WHERE `tries` = '0'";
          $subresult  = $this->conn->query($query);
          if($subresult->num_rows > 0){
              $change="UPDATE `validate` SET `tries` = '1' WHERE `serialnumber` = '$install'";
              if($this->conn->query($change) === TRUE){
                  return true;
              } else {
                  return false;
              }
          } else {
          return false;
          }
            } else {
              return false;
            }
      }

    function addtries($tries){
      $sql = "SELECT * FROM `validate` WHERE `serialnumber` = '$tries'";
      $result = $this->conn->query($sql);
      if($result->num_rows > 0){
          $query="SELECT * FROM `validate` WHERE `tries` = '1'";
          $subresult  = $this->conn->query($query);
          if($subresult->num_rows > 0){
              $change="UPDATE `validate` SET `tries` = '2' WHERE `serialnumber` = '$tries'";
              if($this->conn->query($change) === TRUE){
                  return true;
              } else {
                  return false;
              }
          } else {
          return false;
          }
            } else {
              return false;
            }
      }
  }

?>