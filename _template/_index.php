<?php 
 $value=false;
 if(isset($_POST['serial']) && !empty($_POST['serial'])){
 $validate = $_POST['serial'];
 $result= new validation;
 $result->validate($validate);
 $result->triesvalidate;
 $value=true;
 }
 if($value){
      if($result->validate($validate)== TRUE ){
        print($result->validate($validate));
        $jsonString = file_get_contents("count.json");
        $data = json_decode($jsonString, true);
        if($data != null){
           $data['key1'] = "hello i am ".$validate;
        }
        $newJsonString = json_encode($data);
        file_put_contents('count.json', $newJsonString);
        header('Location: libs/tries.php');
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
</form>
 <?php } ?>
