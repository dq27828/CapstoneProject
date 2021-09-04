<?php
$categoryid=$_POST['categoryid'];
$cname=$_POST['cname'];

include("db_connect.php");
$query="update category set categoryname='$cname' where categoryid=$categoryid";
mysqli_query($conn,$query);

header("Location:index1.php");

?>