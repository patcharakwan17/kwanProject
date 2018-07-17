<?php
include("connect.php");
    if($_POST["submit"]){
        $edMail = $_POST["editMail"];
    	$edName = $_POST["editName"];
    	$edPass = $_POST["editPass"];
    	$edCountry = $_POST["editCountry"];
    	$edCity = $_POST["editCity"];
    	$edBirth = $_POST["editBirth"];

    	$name2 = $_FILES["file"]["name"];
    	$type2 = $_FILES["file"]["type"];
    	$temp2 = $_FILES["file"]["tmp_name"];
    	$size2 = $_FILES["file"]["size"];
    	$error2 = $_FILES["file"]["error"];

        $ff = move_uploaded_file($temp2, "./picture/".$name2);

        $sel3 = mysqli_query($conn, "select * from member1 where mail='$edMail'");
        $rowss3 = mysqli_fetch_array($sel3);

        $memUsername = $rowss3["Username"];
        $memPassword = $rowss3["Password"];
        $memName = $rowss3["Name"];
        $memStatus = $rowss3["Status"];
        $memImg = $rowss3["img"];
        $memCountry = $rowss3["country"];
        $memCity = $rowss3["city"];
        $memBirth = $rowss3["birth"];
        $memAge = $rowss3["age"];

        if($name2==""){
        $oldsPic = $rowss3["img"];

        $sell2 = mysqli_query($conn, "update member1 set Username='$edMail',Password='$edPass', Name='$edName', img='$memImg', country='$edCountry', city='$edCity' where mail='$edMail'");
        echo "<script>window.location='index.php';</script>";
        }else{

        $sell = mysqli_query($conn, "update member1 set Username='$edMail',Password='$edPass', Name='$edName', img='$name2', country='$edCountry', city='$edCity' where mail='$edMail'");
        
        echo "<script>window.location='index.php';</script>";
        }
    }

?>
