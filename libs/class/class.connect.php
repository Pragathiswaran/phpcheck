<?php 
class connection{

    public $conn=null;
    public function connect(){

     if($this->conn==null){

        $servername = "172.31.96.1";
        $username = "praga";
        $password = "password";
        $dbname = "validation";
    
        $connection = new mysqli($servername, $username, $password, $dbname);
    
        if ($connection ->connect_error)
        {
            die("Connection failed: " . $connection->connect_error);
    
        } else {
                echo "success";
                  connection::$conn=$connection;
                  return connection::$conn;
          }
      } else {
        
              return connection::$conn;
            }
    }
}



?>