
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <button type = "submit" name="install">Install</button>
</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

session_start();
$install = $_SESSION['var'];
$value = $_POST['install'];

if(isset($value)){
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