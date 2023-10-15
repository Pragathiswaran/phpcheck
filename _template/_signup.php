
<?php 
$signup = false;
if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['password'])
&& !empty($_POST['password'])){
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $result = new signup();
  $value = $result->Singup($name,$phone,$email,$password);
  $signup = true; 
} 
if($signup){
  if($value){ 
    header('Location:login.php');
  } else{ ?>
        <h1>Signup fail the username is already exist</h1>
<?php }
}else { 
?>
<p id="demo"></p>
<section class="section_form">
  <form id="consultation-form" class="feed-form" method="post" action="signup.php">
  <span class="login100-form-title p-b-51">Sign Up</span>
    <input name="name"  placeholder="Name" type="text" id="tx">
    <input name="phone"  placeholder="Phone number">
    <input name="email"  placeholder="E-mail" type="email">
    <input name="password"  placeholder="Password" type="password">
    <button type="submit" class="button_submit" >Submit</button>
  </form>
  
</section>
<?php }  ?> 



