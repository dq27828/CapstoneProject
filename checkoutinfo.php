<?php

session_start();
include("db_connect.php");

$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$eadd=$_POST['eaddress'];
$add=$_POST['address'];
$city=$_POST['city'];
$pcode=$_POST['postal'];
$cname=$_POST['cardname'];
$expmonth=$_POST['expmonth'];
$expyear=$_POST['expyear'];
$cnumber=$_POST['cardnumber'];
$cvc=$_POST['cvc'];
$sessionid=session_id();


$query="insert into payment values(NULL,'$fname','$lname','$eadd','$add','$city','$pcode','$cname','$expmonth','$expyear','$cnumber','$cvc','$sessionid')";
mysqli_query($conn,$query);
echo "<h2> Your order was successful. </h2>";
header("refresh:2;url=index.php");





?>