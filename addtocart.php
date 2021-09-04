<?php
session_start();
include("db_connect.php");
$pid=$_GET['productid'];
$orderdate=date("Y-m-d H:i:s");
$sessionid = session_id();

$query="insert into orderdetails(orderdetailid, productid, date, sessionid) values(NULL,$pid,'$orderdate','$sessionid')";
echo $query;
mysqli_query($conn,$query);
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>