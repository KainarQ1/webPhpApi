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

      <!-- Blog Entries Column -->
      <div class="col-md-8">
         
          <?php if(isset($_GET['error'])){ ?>
         <div class="alert alert-danger" role="alert">
           Authentication error
          </div>
        <?php } ?>
      <form action = 'auth.php' method="post">
      
        <div class = 'container'>
      <div class ='col-sm-6 col-form-label'><h1 style="">Login</h1>
    
  </div>
<h1>Login</h1>
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
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" >
        <label class="form-check-label" >Save my data</label>
      </div>
      
      <input type="submit" class="btn btn-primary" value ='Sign in'>
      </div>
    </form>

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