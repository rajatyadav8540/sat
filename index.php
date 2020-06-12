<!doctype html>
<html lang="en">
  <head>
  <title>Satkarya</title>
    <link href="img/logo.png" rel="icon"/>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="dsc.css"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script>
      
  </head>
  <body>
    <?php 
    require 'common.php';
    include 'test.php';?>
      
      <section>
        <div id="first" class="container-fluid">
            <div class="typewriter container">
                <br><br><br><br>
                <p  style="padding: 3vw;">एक कदम मानवता की ओर   </p>
            </div>
        </div> 
      </section>
      <hr>
      <div>
      <div style="position:fixed; right:0; width:20%;" class="card ">
        <div class="card-header bg-success text-center text-light">ANNOUNCEMENT</div>
        <div class="card-body">
           <marquee behavior="scroll" direction="up">
              <ul class="list-group list-group-flush">
                <li class="list-group-item dot">Active item  jghahfdhavsjcscj,sgcscvscjhcvncvhzvjcvkshcvkscvhks</li>
                <li class="list-group-item dot">Active item  jghahfdhavsjcscj,sgcscvscjhcvncvhzvjcvkshcvkscvhks</li>
                <li class="list-group-item dot">Active item  jghahfdhavsjcscj,sgcscvscjhcvncvhzvjcvkshcvkscvhks</li>
              </ul>
             
           </marquee>
          
        </div>
      </div>
      </div>
      <section>
      <div class="container card">
      
      <p>Satkarya is going help those who are in great need ,Satkarya itself means doing something good so all the satkarya members helping needy peoples.</p>
      <div class="container text-center">
       <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/3.jpeg" class="">
          </div>
          <div class="carousel-item">
            <img src="img/1.jpeg" alt="Chicago">
          </div>
          <div class="carousel-item">
            <img src="img/2.jpeg" alt="New York">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>

        </div>
      </div>
      </div>
      

      </section>
      <hr>
      <section>
        
          <div class="card container">
            <div class="card-header bg-success">
              <h1 class="text-center ">OUR TEAM</h1>
            </div>
            <div class="card-body row">
              <div class="col-md-6 text-center">
                <img src="img/Shivam sir.jpeg" alt="" class="rounded-circle " width="200" height="200">
                <h3 class="text-center">Shivam Kumar</h3>
              </div>
              <div class="col-md-6 text-center">
                <img src="img/Sahi sir.jpeg" alt="" class="rounded-circle " width="200" height="200">
                <h3 class="text-center">Shivam Shahi</h3>
              </div>
            </div>
            <div class="card-footer text-center">
              <a href="team.php"><button class="btn btn-primary text-center">More >></button></a>
            </div>
          </div>
        
      </section>
      <hr>
      <?php
      $quer="SELECT id,image,info,date FROM posts";
      $querrunner = mysqli_query($connection, $quer);
      
      
       while($num=mysqli_fetch_array($querrunner))
       {
        
        
      ?>
    <section>
      <div class="card container">
        <img class="card-img-top" src="<?php echo $num[1]; ?>" alt="Card image" height="600">
        <div class="card-body">
          <p class="card-text"><?php echo $num[2];?></p>
        </div>
      </div>
      </section>
      <hr>
       <?php
        }
       ?>

    <?php include 'footer.php';?> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>