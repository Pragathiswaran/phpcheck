<?php
class session{

    private $conn= null;
        
    public function __construct(){
        $db = new connection(); 
        $this->conn = $db->connect();
    }

    public function userSession($username, $password){
        session_start();
        if(isset($_SESSION['username'])){
           return true;
        } else {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        $_SESSION['username']= time();
        return true;
        } 
    }
    

}
?>
