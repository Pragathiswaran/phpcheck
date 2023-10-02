<?php 
class connection{

    public $conn=null;
    public function connect(){

    if($this->conn==null)
    {
        $servername = "127.0.0.1";
        $username = "praga";
        $password = "password";
        $dbname = "validation";
    
        $connection = new mysqli($servername, $username, $password, $dbname);
    
        if ($connection ->connect_error)
        {
            die("Connection failed: " . $connection->connect_error);
    
        } else {
          
                  connection::$conn=$connection;
                  return connection::$conn;
          }
      } else {
        
              return connection::$conn;
            }
    }
}



?>