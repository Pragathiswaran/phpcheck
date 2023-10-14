    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <button type="submit" class="tries" name="tries">Retry</button>
        <button type="button" class="back" onclick="add()" id="back">Back</button>
    </form>
<script>
    function add(){
    window.location.href = '/phpcheck/index.php';
    }
</script>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
   session_start();
   $tries = $_SESSION['var'];
   $value = $_POST['tries'];
   if (isset($value)){
     $result = new validation();
     $con = $result->addtries($tries);
        if($con ===TRUE){
            return true;
        } else {
            return false;
   }
   } else {
        return false;
   }
   
}
?>