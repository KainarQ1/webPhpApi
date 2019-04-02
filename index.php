<?php 
include 'userModule.php';
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
<br><br>
        <h1 class="my-4">Welcome!!!
        
        </h1>
       <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="image/video-back.jpg" alt="Card image cap">
          <div class="card-body">
         
            <p class="card-text">IT экосистема для E-commerce 
Продажи товаров и услуг напрямую от производителя!</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2019 by
            <a href="#">Kai</a>
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="image/aidaservice.jpg" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Aida Service</h2>
            <p class="card-text">Это автоматизированный сервис для осуществления продаж товаров и споуствующих услуш без посредников, пользоватеями которой являются: Заказчики, Пройзводители, Логисты, Склады и Партнеры сети.</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2019 by
            <a href="#">Kai</a>
          </div>
        </div>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="image/dcbb114d6af616118b35c0bc367fe764_0x0w.png" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Тестовое задание</h2>
            <p class="card-text">для того чтобы посмотреть каталог авторизуйтесь!!</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2019 by
            <a href="#">Kai</a>
          </div>
        </div>

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

      </div>

     <?php include 'sidebar.php'; ?>

      </div>

    </div>


  </div>


  <?php 

  include 'footer.php';
   ?>

</body>

</html>
