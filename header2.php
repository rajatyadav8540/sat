<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <link href="img/logo.png" rel="icon"/>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="dsc.css">              
  </head>
  <body>
  <?php require 'common.php'; ?>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top p-0 my-0 bg-black" id="head2">
          <img src="img/logo.png" class="img-fluid mx-1 p-0 my-0" style="width:70px;">
          <a class="navbar-brand p-0 my-0 mx-1" href="index.php"> <p id="satkarya2" class="p-0 my-0">सत्कार्य</p></a>
          <button class="navbar-toggler p-0 my-0" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon  p-0 my-0"></span>
          </button>
          <div class="collapse navbar-collapse p-0 my-0" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto p-0 my-auto">
                  <li class="mx-2 nav-item active "><a href="index.php" class="nav-link"><i class="fas fa-home"></i> Home</a></li>
                  <li class="mx-2 nav-item active"><a href="About.php"class="nav-link"><i class="fas fa-th"></i> About Us</a></li>
                  <li class="mx-2 nav-item active"><a href="Gallery.php" class="nav-link"><i class="fas fa-galery"></i>Gallery</a></li>
                  <li class="mx-2 nav-item active"><a href="donation.php" class="nav-link"><i class="fas fa-th"></i> Events</i></a></li>
                  <?php
                     
                     if (isset($_SESSION['email'])) {
                        $join=$_SESSION['email'];
                    $nq="SELECT * FROM members WHERE email='$join'";
                    $nqr=mysqli_query($connection,$nq) or die(mysqli_error($connection));
                    $nqrfe=mysqli_fetch_array($nqr);
                   
                        ?>
                         <li class="nav-item mx-2 active"><a href="memberpage.php" class="nav-link"><img src="<?php echo $nqrfe['image']; ?>" alt="" class="rounded-circle img-fluid text-center" width="50"></a></li>
                     <?php }else{ ?>
                  <li class="nav-item mx-2 active "><a href="login.php" class="nav-link"><i class="fas fa-login"></i> Login</a></li>  
                     <?php } ?>    
              </ul>
          </div>  
      </nav>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>