<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <button type="submit" class="tries" name="tries">Trice</button>
        <button type="button" class="back" onclick="add()" id="back">Back</button>
    </form>
<script>
    function add(){
        window.location.href = '/app/index.php'
    }
</script>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $tries = $_POST['tries'];
    if(isset($tries)){
        print("true tries");
    } else {
        print("false tries");
    }
}
?>