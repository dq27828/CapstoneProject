<?php
session_start();
include("db_connect.php");

$aemail=$_POST['email'];
$pass=$_POST['password'];
$epass=md5($pass);

$query="select * from admin where email='$aemail' and password='$pass'";
$result=mysqli_query($conn,$query);

$nr=mysqli_num_rows($result);

if($nr==1)
{
    $_SESSION['admin']=$aemail;
    header("refresh:0.1;url=index1.php");
}
else{
    echo "Wrong username or password";
    header("refresh:0.5;url=admin.php");
}
?>