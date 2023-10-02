<?php 

class triesvalue {
   private $conn = null;
   function __construct(){
      $db = new connection();
        $this->conn = $db->connect();
   }
    function addtries($value,$trice){
      if(isset($trice) & isset($value)){
         $sql = "SELECT * FROM `tries` WHERE `serialnumber` = '$value'";
         $result = $this->conn->query($sql);
         if($result->num_rows > 0){
               $query="UPDATE `tries` SET `tries` = `tries` + 1 WHERE `serialnumeber` = '$value'";
               if($this->conn->query($query)===TRUE){
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