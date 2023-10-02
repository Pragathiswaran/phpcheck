
<?php /*
$sign = false;
//print_r($_POST);
if(isset($_POST['name'])){
  $var = $_POST['name'];
  $result = new get();
  $result->getdata($var);
  $sign = true;
}
$check = null;
if($sign){
  if($result==true){
    $check = $result->getdata($var);
  ?>
  <script>
        var data = "<?php print $check; ?>";
        if(data ==1){
          document.getElementById("demo").innerHTML=data + "success";
        }
        
    </script>
  <?php
  } else {
    echo "fail";
  }
}else {
 

/*$signup = false;
if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['password'])
&& !empty($_POST['password'])){
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  //echo $name.$phone.$email.$password;
  //$error = new signup;
 // $error->authentication($name);
  //$error->Singup($name,$phone,$email,$password);
  $signup = true; 
} 
if($signup){
  if(!$error){ ?>
    <main class="container">
      <div class="bg-light p-5 rounded mt-3">
        <h1>Signup success</h1>
        <p class="lead">This example is a quick exercise to illustrate </p>
      </div>
    </main>
  <?php } else { ?>
    <main class="container">
      <div class="bg-light p-5 rounded mt-3">
        <h1>Signup fail</h1>
        <p class="lead"><?php echo $error ?>  </p>
      </div>
    </main>
<?php/* }
}else { */
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
<?php //}  ?> 

<script>
    document.getElementById("consultation-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the default form submission
    checkValue(); // Call your add() function
  });

  function checkValue() {
            const inputValue = document.getElementById("tx").value;
            
            // Make an AJAX request to the server-side script
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "load.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Handle the response from the server
                    const response = JSON.parse (xhr.responseText);
                    const resultDiv = document.getElementById("demo");
                    
                    if (response.exists) {
                        // The value exists in the database
                        resultDiv.innerHTML = "Value already exists in the database.";
                    } else {
                        // The value does not exist in the database
                        resultDiv.innerHTML = "Value does not exist in the database.";
                    }
                }
            };
            xhr.send("tx=" + encodeURIComponent(inputValue));
        }
    </script>




