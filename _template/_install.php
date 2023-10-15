
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <button type = "submit" name="install">Install</button>
</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

session_start();
$install = $_SESSION['var'];
$value = $_POST['install'];

if(isset($value)){
    $jsonString = file_get_contents("count.json");
      $data = json_decode($jsonString, true);
      if($data != null){
        $data1=$data;
        $data1['key1'] = "hello i am ".$install; 
        $newJsonString = json_encode($data1, JSON_PRETTY_PRINT);    
        if(file_put_contents('count.json', $newJsonString) !== false) {
           echo "success";
        } else {
            echo "Error writing to count.json";
        }
    }
    $result = new validation();
    $res = $result->addinstall($install);
    if($res){
        header('Location:tries.php');
    }else{
        return false;
    }
} else {
    return false;
}

}
?>