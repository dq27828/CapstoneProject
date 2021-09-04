<?php
session_start();
include("db_connect.php");

$email=$_POST['email'];
$pass=$_POST['password'];
$epass=md5($pass);

$query="select * from customer where email='$email' and password='$pass'";
$result=mysqli_query($conn,$query);

$nr=mysqli_num_rows($result);

if($nr==1)
{
    $_SESSION['username']=$email;
    header("location:index.php");
}
else{
    echo "Wrong username or password";
    header("refresh:2;url=login.php");
}



?>

