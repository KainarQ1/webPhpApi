<?php 
include 'userModule.php'; 
if($USER_DATA==null){  

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-home.css" rel="stylesheet">

</head>

<body>

  <?php 
  include 'navigation.php';
   ?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">
	<div class ='col-sm-6 col-form-label'><h1 style="">Sign Up</h1>
		
	</div>
      <!-- Blog Entries Column -->
      <div class="col-md-8">
         
          <?php if(isset($_GET['error'])){ ?>
         <div class="alert alert-danger" role="alert">
           Register error
          </div>
        <?php } ?>
<h1>Registration</h1>
<br>
      <form action = 'to_register.php' method="post">
        <div class = 'container'>
      <div class="form-group row">
        <label class ='col-sm-3 col-form-label'>Email </label>
        <div class ='col-sm-9'>
        <input type="text" class="form-control" name="email" placeholder="Email">
      </div>
      </div>
      <div class="form-group row">
        <label class = 'col-sm-3 col-form-label'>Password</label>
        <div class ='col-sm-9'>
        <input type="password" class="form-control" name="password" placeholder="Password">
      </div>
      </div>
      <div class="form-group row">
        <label class ='col-sm-3 col-form-label'>Confirm Password</label>
        <div class ='col-sm-9'>
        <input type="password" class="form-control" name="conf_password" placeholder="Confirm Password">
      </div>
      </div>
      <div class="form-group row">
        <label class ='col-sm-3 col-form-label'>Full name</label>
        <div class ='col-sm-9'>
        <input type="text" class="form-control"  name="full_name"  placeholder="Full name">
        </div>
      </div>
      <a href="signin.php">Already Have one?</a><br><br>
      <input type="submit" class="btn btn-primary" value ='Create account'>
      </div>
    </form>
<?php 

 ?>
      </div>

     <?php 

     include 'sidebar.php';
      ?>
      

      </div>

    </div>
 

  </div>


</body>

</html>
<?php
}else{
  header('Location:index.php');
}

?>
