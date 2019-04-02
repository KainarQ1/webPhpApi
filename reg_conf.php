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

      <h1>You have successfully registered!</h1>

      </div>

     <?php 

     include 'sidebar.php';
      ?>
      

      </div>

    </div>
 

  </div>


  <?php 

  include 'footer.php';
   ?>

</body>

</html>
<?php
}else{
  header('Location:index.php');
}

?>