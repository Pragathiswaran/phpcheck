<?php
include "libs/load.php";

$result = new signup();
$result->Singup('thanga','458762330','thanga@gmail.com','thanga@123');

if ($result == true){
    echo "success";
} else {
    echo "fail";
}
//$result->validate("praga");
//print($result->connect());
?>