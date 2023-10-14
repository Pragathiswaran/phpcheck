<?php

include "class/class.connect.php";
include "class/class.validate.php";
include "class/class.signup.php";
//include "count.json";


    function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT']."/phpcheck/_template/$name.php";
}


/*
function validation($value){ 
    if($value == "praga"){
        return true;
    } else {
       return false;
    }
}
*/
//$inputValue = $_POST["tx"];
/*
$result1 = new connection;
$conn=$result1->connect();
$query = "SELECT * FROM `signup` WHERE username = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $inputValue);
$stmt->execute();
$result = $stmt->get_result();

// Prepare the response
$response = ["exists" => false];
if ($result->num_rows > 0) {
  $response["exists"] = true;
}

// Return the response as JSON
header("Content-Type: application/json");
echo json_encode($response);
*/
?>