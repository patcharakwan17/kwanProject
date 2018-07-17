<?php
session_start();
include("connect.php");
    $mm = $_SESSION["mail"];
    if($mm==""){
    	echo "<script>alert('คุณยังไม่ได้สมัครสมาชิก');</script>";
    	header( "location: login.php" );
    }else{
    $objQuery1 = mysqli_query($conn,"select * from member1 where mail='$mm'");
    $objResult = mysqli_fetch_array($objQuery1);
    $mName = $objResult["Name"];
    $mImg = $objResult["img"];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Employees</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Athiti|Black+Han+Sans|Dosis|Gamja+Flower|Gothic+A1|Raleway|Sriracha" rel="stylesheet">
    <!-- Icon application -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css" rel="stylesheet">

    <!-- font awlay some-->
    <link rel="stylesheet" type="text/css" href="webfontswithcss1/css/fontawesome-all.min.css">

    <link rel="stylesheet" type="text/css" href="style23.css">
    <style type="text/css">
        .settingProf{
            font-size: 100px;
            color: lightgray;
            margin: 5px 5px 5px 5px;
            padding: 5px 5px 5px 5px;
        }
    </style>
</head>
<body>
    <div class="headerIndex">
        <h2>ERP Factory<div class="headerIndex-login">
        
                <!--<img src="./picture/profile.jpg" class="circleProfile">-->
        
            hello, <?php echo $mName; ?></div></h2>
    </div>
	<center>

		<div class="container">
            <div class="row">
            <div class="col-sm-2" style="height: auto;">
                <div class="side-index">
                    <?php
                    include("sideManu.php");
                    ?>
                </div>
            </div>
            <div class="col-sm-10"><!--<div class="col-sm-10">-->
                <!--<i class="fas fa-cog settingProf"></i>-->
                <div class="row">
                    <div class="col-sm-6">
                        
                    </div>
                    <div class="col-sm-6"></div>
                </div>
            </div><!--<div class="col-sm-10">-->
        </div>
        </div>
    </center>
</body>
</html>