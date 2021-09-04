<?php
$productid=$_POST['productid'];
$prodname=$_POST['productname'];
$proddesc=$_POST['productdescription'];
$catid=$_POST['categoryid'];
$price=$_POST['unitprice'];
$modeliswearing=$_POST['modeliswearing'];
$fabric=$_POST['fabric'];
$details=$_POST['details'];
$care=$_POST['care'];
$img=$_POST['img'];
$img2=$_POST['img2'];

include("db_connect.php");
$query="update product set productname='$prodname', productdescription='$proddesc', categoryid='$catid', unitprice='$price', modeliswearing='$modeliswearing', fabric='$fabric', details='$details', care='$care', picture='$img', picture2='$img2'  where productid=$productid";
mysqli_query($conn,$query);
echo $query;
header("Location:index1.php");
?>
