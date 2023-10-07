<?php
    include "load.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/phpcheck/css/<?php print(basename($_SERVER['PHP_SELF'],'.php'))?>.css" rel="stylesheet">
    
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <button type="button" class="tries" name="tries">Trice</button>
        <button type="button" class="back" onclick="add()" id="back">Back</button>
    </form>
<script>
    function add(){
        window.location.href = '/app/index.php'
    }
</script>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
$trise= $_POST['tries'];
}

?>
</body>
</html>