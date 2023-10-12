<?php
include "libs/load.php";

$result = new Signup();
$value = $result->login("yenga","yenga");
print($value);

if($value){
    echo "true";
} else {
    echo "false";    
}


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
/*
// Define the JSON file path
$jsonFilePath = 'count.json';

// Read the JSON file into a variable
$jsonData = file_get_contents($jsonFilePath);

// Decode the JSON data into a PHP associative array
$data = json_decode($jsonData, true);

// Check if the key you want to change exists
if (array_key_exists("key1", $data)) {
    // Change the value of the "age" key
    $data["age"] = 35;

    // Encode the modified data back to JSON
    $newJsonData = json_encode($data, JSON_PRETTY_PRINT);

    // Write the updated JSON back to the same file
    file_put_contents($jsonFilePath, $newJsonData);

    echo 'The JSON file has been updated.';
} else {
    echo 'The key "age" does not exist in the JSON data.';
}

*/







//$result->validate("praga");
//print($result->connect());
?>