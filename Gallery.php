<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="dsc.css"> 
  </head>
  <body>
     <?php include 'header2.php';?> 
    <div style="height:68px;"></div>
     <section>
     <?php
      $quer="SELECT id,image,info,date FROM posts";
      $querrunner = mysqli_query($connection, $quer);
      
      
       while($num=mysqli_fetch_array($querrunner))
       {
        
        
      ?>
    <section>
      <div class="card container">
        <img class="card-img-top overflow-hidden" src="<?php echo $num[1]; ?>" alt="Card image" height="600">
        <div class="card-body">
          <p class="card-text"><?php echo $num[2];?></p>
        </div>
      </div>
      </section>
      <hr>
       <?php
        }
       ?>

     </section>
     <?php include 'footer.php';?> 
      
    </body>
</html>
