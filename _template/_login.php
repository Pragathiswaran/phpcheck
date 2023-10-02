<?php 
$login = false;
if(isset($_POST['name']) && isset($_POST['password']) && !empty($_POST['password'])){
  $lognName=$_POST['name'];
  $logPass = $_POST['password'];
  $login = true;
  $result = null;
}
  if($login){
    if($result){
      ?>
      <main class="container">
      <div class="bg-light p-5 rounded mt-3">
        <h1>login success</h1>
        <p class="lead">This example is a quick exercise to illustrate </p>
      </div>
    </main> <?php
    } else { ?>
      <main class="container">
      <div class="bg-light p-5 rounded mt-3">
        <h1>login fail</h1>
        <p class="lead">This example is a quick exercise to illustrate </p>
      </div>
    </main>
  <?php  }
   } else {
?>
 <section class="section_form">
  <form id="consultation-form" class="feed-form" action="#">
  <span class="login100-form-title p-b-51">Login</span>
    <input required="" placeholder="Name" type="text" name="name">
    <input name="password" required="" placeholder="Password" type="password">
    <button class="button_submit">ORDER</button>
  </form>
</section>
<?php } ?>