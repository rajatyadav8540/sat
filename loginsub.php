<?php
require 'common.php';
$username1=$_POST['username'];
$password1=$_POST['password'];

$select="SELECT email,password FROM members WHERE email='$username1' AND password='$password1'";
$que= mysqli_query($connection, $select) or die(mysqli_error($connection));

if(mysqli_num_rows($que)==1)
{
    echo "you are successfuly logged in";
    session_start();
    $_SESSION['email']=$username1;
    $_SESSION['id']=  mysqli_insert_id($connection);
   header('location: memberpage.php');
}
else{
    echo"Wrong information";
     header('location: login.php');
}
