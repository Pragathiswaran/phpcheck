<?php 

$login = false;
if(isset($_POST['name']) && isset($_POST['password']) && !empty($_POST['password'])){
  $logName=$_POST['name'];
  $logPass = $_POST['password'];
  $result = new Signup();
  $value = $result->login($logName,$logPass);
  $login = true;
}
  if($login){
    if($value){
      $sess = new session();
      $val = $sess->userSession($logName,$logPass);
      if($val){
      header('Location:index.php');
      exit();
      }
    } else { ?>
        <h1>login fail</h1>
  <?php  }
   } else {
    session_start();
if($_SESSION['value'] == 'true'){
  destroy('true');
  session_destroy();
 } 
?>
 <section class="section_form">
  <form id="consultation-form" class="feed-form" method="post" action="login.php">
  <span class="login100-form-title p-b-51">Login</span>
    <input required="" placeholder="Name" type="text" name="name">
    <input name="password" required="" placeholder="Password" type="password">
    <button class="button_submit">Submit</button>
  </form>
</section>
<?php }
 ?>