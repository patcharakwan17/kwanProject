<?php
include("connect.php");
if($_GET["custId"]){
	$dels = mysqli_query($conn,"delete from customer where cust_id='".$_GET["custId"]."'");
	echo "<script>window.location='customer.php';</script>";
}else{
	echo "<script>alert('Something is wrong!!'); window.location='customer.php';</script>";
}
?>