<?php 

session_start();
if(isset($_SESSION['username']))
{
 $value=false;
 if(isset($_POST['serial']) && !empty($_POST['serial'])){
 $validate = $_POST['serial'];
 $result= new validation;
 $var = $result->validate($validate);
 $value=true;
 }
 if($value){
    if($var){
      session_start();
      $_SESSION['var']= $validate;
      header('Location:libs/install.php');
      exit();
    }else{
?>
<main class="container">
  <div class="bg-light p-5 rounded mt-3">
    <h1>Signup fail</h1>
    <p class="lead">This example is a quick exercise to illustrate </p>
</div>
</main>
<?php 
}
 } else {
   ?>
 <form method="post" action="index.php">
 <h1 class="h3 mb-3 fw-normal"></h1>

 <div class="form__group field">
   <input type="text" class="form__field" placeholder="Name" name="serial">
   <label for="name" class="form__label">Name</label>
 </div>
 <div>
   <button class="btn" type="submit">
     <span>Submit</span>
   </button> 
 </div>   
 <!--<div>
 <button type="submit" name="destroy">Destroy Session</button>
 </div> -->
</form>

 <?php } 
 } else {

    header('Location:login.php');
 }
?>
