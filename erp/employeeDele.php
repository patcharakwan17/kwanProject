<?php
include("connect.php");
if($_GET["mailId"]){
	$dels = mysqli_query($conn,"delete from member1 where mail='".$_GET["mailId"]."'");
	echo "<script>window.location='employee.php';</script>";
}else{
	echo "<script>alert('Something is wrong!!'); window.location='employee.php';</script>";
}
?>