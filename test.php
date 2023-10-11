<?php
include "libs/load.php";

/*
$result = new signup();
$result->Singup('thanga','458762330','thanga@gmail.com','thanga@123');

if ($result == true){
    echo "success";
} else {
    echo "fail";
} */

/*
$jsonString = file_get_contents("count.json");
        $data = json_decode($jsonString, true);
        print($data['key1']);
           $data['key1'] = "hello i am json";
        $newJsonString = json_encode($data);
        echo $newJsonString;
        file_put_contents("count.json",$newJsonString);
print($data['key1']);
*/
$jsonFile = "count.json";
echo file_exists($jsonFile);
if (file_exists($jsonFile)) {
   print("TRUE");
} else {
    echo "FALSE";
}







//$result->validate("praga");
//print($result->connect());
?>