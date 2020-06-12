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
     <script>
        window.onscroll=function(){scroll()};

        function scroll(){
            if(document.body.scrollTop>50||document.documentElement.scrollTop>50)
            {
                document.getElementById("head").id="head2";
                document.getElementById("satkarya").id="satkarya2";
                
            }
            else{           
                 document.getElementById("head2").id="head";
                 document.getElementById("satkarya2").id="satkarya";
            }
        }
        </script>               
</head>
<body>
    <?php 
    require 'common.php';
    
    ?>
   <div id="head" class=" container " >
             <div id="logo"> <img src="img/logo.png" class="headimg">  </div>
            <center> <div class=" container-fluid headimg ">
               
                    <h1 id="satkarya"> सत्कार्य </h1>
                </div>
          
           <ul class="nav navbar-nav navbar-right">                
               
                  
                   <li><a href="index.php"><div style="margin:10px;"><span class="glyph glyphicon glyphicon-home"></span></div>Home</a></li>
                    <?php
                     
                     if (isset($_SESSION['email'])) {
                        $join=$_SESSION['email'];
                    $nq="SELECT * FROM members WHERE email='$join'";
                    $nqr=mysqli_query($connection,$nq) or die(mysqli_error($connection));
                    $nqrfe=mysqli_fetch_array($nqr);
                   
                        ?>
                   <li><a href="logout.php"><div style="margin:10px;" class="glyphover"><span class="glyph glyphicon glyphicon-log-out"></span></div></a></li>
                   <li><a href="memberpage.php" ><div style="" id="profile"><img src="<?php echo $nqrfe['link']; ?>" class="img-circle" height="45px" width="45px"></div></a></li>
                   <?php
                     }else{
                   ?>
                    <li><a href="login.php" data-toggle="tooltip" title="Only for members"><div style="margin:10px;"><span class="glyph glyphicon glyphicon-log-in"></span></div></a></li> 
                   <?php
                     }
                   ?>
                    <li class="dropdown">
                       <div style="margin:10px; " class="glyphover"> <span class="glyph glyphicon glyphicon-menu-hamburger" ></span></div>
               <div class="dropdown-content">
                   <ul class="list-group" >
                       <li class="list-group-item" style="color: black;">ABOUT US</li> 
                       <li class="list-group-item" style="color: black;"><a href="members.php">MEMBERS</a></li> 
                       <li class="list-group-item" style="color: black;">EVENTS</li> 
                       <li class="list-group-item" style="color: black;"><a href="logout.php">LOGOUT</a></li> 
                       <li class="list-group-item" style="color: black;"><a href="Gallery.php" style="text-decoration: none;">GALLERY</a></li> 
                       <li class="list-group-item" style="color: black;"><a href="Gallery.php" style="text-decoration: none;">DONATIONS</a></li> 
                        
                   </ul>
                  
           </div>
                      
                   </li>  
            </ul>
        </div> 
        <?php include 'footer.php';?>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
