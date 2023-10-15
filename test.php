<?php
include "libs/load.php";
$jsonFilePath = "libs/count.json";

// Change the file permissions
if (!file_exists($jsonFilePath)) {
    echo 'File not found.';
} else {
    chmod($jsonFilePath, 0777); // Change the file permissions to allow read and write
}

// Attempt to write to the file
$jsonString = file_get_contents($jsonFilePath);
if($jsonString === false) {
    echo "Error reading count.json";
    exit;
}

$data = json_decode($jsonString, true);
if ($data !== null) {
    $data['key1'] = 'hello i am meena';
    $json = json_encode($data, JSON_PRETTY_PRINT);
    if (file_put_contents($jsonFilePath, $json) !== false) {
        echo "success";
    } else {
        echo "Error writing to count.json";
    }
} else {
    echo "Error decoding JSON";
}

?>