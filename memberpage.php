<!doctype html>
<html lang="en">
  <head>
  <title>Satkarya</title>
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
  <?php 
  require 'common.php';
  include 'header2.php';?> 
  <div style="height:68px;"></div>
  <?php
  $join=$_SESSION['email'];
                    $nq="SELECT * FROM members WHERE email='$join'";
                    $nqr=mysqli_query($connection,$nq) or die(mysqli_error($connection));
                    $nqrfe=mysqli_fetch_array($nqr);
                    
   ?>  
    <a href="logout.php"><button class="btn btn-primary float-right fixed" style="position:fixed; right:0;">Logout</button></a>
    <div class="container card shadow" style="background:linear-gradient(green,transparent);">
    <div class="card-body">
    <div class="text-center">
    <img src="<?php echo $nqrfe['image'];?>" alt="img" class="rounded img-fluid" width="300">
    <h2 class="text-center"><span class="badge badge-primary  "><?php echo $nqrfe['name'];?></span></h2>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
      <input type="text" name="info">
      <input type="file" name="upload" value="">
      <input type="submit" name="submit" value="upload file">
      </form>
    </div>
    </div>
    <?php
      $filename=$_FILES["upload"]["name"];
      $tempname=$_FILES["upload"]["tmp_name"];
      $folder="img/".$filename;
      move_uploaded_file($tempname,$folder);
      $d=$_POST["info"];
      $l=date("y-m-d");
      $id=$nqrfe['id'];
      if($filename!=""){
      $sql="INSERT INTO posts (image,info,date,memberid) VALUES ('$folder','$d','$l','$id')";
      $sqlr=mysqli_query($connection,$sql);
      }
      
      ?>

    <hr>
    <div class="d-flex flex-column">
    <?php
      $quer="SELECT id,image,info,date FROM posts WHERE memberid=$id";
      $querrunner = mysqli_query($connection, $quer);
      
      
      while($num=mysqli_fetch_array($querrunner))
      {
        
        
        ?>
    <section>
      <div class="card container">
      <div class="card-header"><?php echo $num[3]; ?></div>
        <img class="card-img-top img-fluid" src="<?php echo $num[1]; ?>" alt="Card image" width="500" height="500">>
        <div class="card-body">
          <p class="card-text"><?php echo $num[2];?></p>
        </div>
      </div>
      </section>
      <hr>
       <?php
        }
        ?>
        </div>
   
    <?php include 'footer.php';?> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>