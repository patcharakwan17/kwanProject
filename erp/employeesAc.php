<?php
include("connect.php");
if(isset($_POST["submit"])){


	$mails = $_POST["insMail"];
	$usernames = $_POST["insUsrn"];
	$passwords = $_POST["insPass"];
	$names = $_POST["insName"];
	$satuss = $_POST["insStatus"];

	$name2 = $_FILES["file"]["name"];
    $type2 = $_FILES["file"]["type"];
    $temp2 = $_FILES["file"]["tmp_name"];
    $size2 = $_FILES["file"]["size"];
    $error2 = $_FILES["file"]["error"]; 

    $countrys = $_POST["insCountry"];
    $citys = $_POST["insCity"];
    //$births = $_POST["insDate"];
    $positions = $_POST["insPosition"];
    $tels = $_POST["insTel"];

    $namePictures = "Em".date("yd-his-").rand(10,100);
    $name2 = $namePictures;
    //$cop = copy($name2, "./picture/$namePictures");
    //$ff = move_uploaded_file($temp2, "./picture/".$name2.".jpg");

    //echo $mails."<br>".$usernames."<br>".$passwords."<br>".$names."<br>".$satuss."<br>".$name2."<br>".$countrys."<br>".$citys."<br>".$births."<br>".$positions."<br>".$tels."<br>";
    $inserts = mysqli_query($conn, "insert into member1 (mail,Username,Password,Name,Status,img,country,city,birth,age,position,tel) VALUES ('$mails','$usernames','$passwords','$names','$satuss','$name2','$countrys','$citys','','0','$positions','$tels')");
    //$ins = mysqli_query($conn, "insert into member1 ('mail', 'Username', 'Password', 'Name', 'Status', 'img', 'country', 'city', 'birth', 'age', 'position', 'tel') value ('$mails','$usernames','$passwords','$names','$satuss','$name2','$countrys','$citys','births','0','$positions','$tels')");
    echo "<script>window.location='employees.php';</script>";
}else{
    echo "<script>alert('Error!');window.location='employees.php';</script>";
}
?>