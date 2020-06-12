<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
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
      <section>
      <div class="card container">
        <img class="card-img-top" src="img/1.jpeg" alt="Card image">
        <div class="card-body">
          <p class="card-text">Some example text.</p>
        </div>
      </div>
      </section>
      <hr>
      <form action="" method="post" enctype="multipart/form-data">
      <input type="file" name="upload" value="">
      <input type="submit" name="submit" value="upload file">
      </form>
      <?php
      $filename=$_FILES["upload"]["name"];
      $tempname=$_FILES["upload"]["tmp_name"];
      $folder="img/".$filename;
      move_uploaded_file($tempname,$folder);
      $d="d";
      $l=date("y-m-d");
      $id=
      $sql="INSERT INTO posts (image,info,date,memberid) VALUES ('$folder','$d','$l')";
      $sqlr=mysqli_query($connection,$sql);
      
      ?>
    <?php include 'footer.php';?> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>