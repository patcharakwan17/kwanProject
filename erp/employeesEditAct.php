<?php
include("connect.php");
if($_POST["submit"]){

	$name2 = $_FILES["file"]["name"];
    $type2 = $_FILES["file"]["type"];
    $temp2 = $_FILES["file"]["tmp_name"];
    $size2 = $_FILES["file"]["size"];
    $error2 = $_FILES["file"]["error"]; 


    $maile5 = $_POST["mailEdit"];
    $usre5 = $_POST["usrEdit"];
    $namee5 = $_POST["nameEdit"];
    $counte5 = $_POST["countEdit"];
    $citye5 = $_POST["cityEdit"];
    $posie5 = $_POST["posiEdit"];
    $tele5 = $_POST["telEdit"];


    $namePictures = "Em".date("yd-his-").rand(10,100);
    $name22 = $namePictures."$name2";

    $cop = move_uploaded_file($temp2, "./picture/$namePictures".$name2);
    echo $cop;
    if($name2==""){
    	$sells = mysqli_query($conn, "update member1 set Username='$usre5', Name='$namee5', country='$counte5', city='$citye5', position='$posie5', tel='$tele5' where mail='$maile5'");
    }else{
    	$sells = mysqli_query($conn, "update member1 set Username='$usre5', Name='$namee5', img='$name22', country='$counte5', city='$citye5', position='$posie5', tel='$tele5' where mail='$maile5'");
    }
    
    echo "<script>window.location='employees.php';</script>";
}
?>