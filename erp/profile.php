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
    $mPass = $objResult["Password"];
    $mCountry = $objResult["country"];
    $mCity = $objResult["city"];
    $mBirth = $objResult["birth"];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Athiti|Black+Han+Sans|Dosis|Gamja+Flower|Gothic+A1|Raleway|Sriracha" rel="stylesheet">
    <!-- Icon application -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css" rel="stylesheet">

    <!-- icon -->
    <link rel="stylesheet" href="webfontswithcss1/css/fontawesome-all.min.css">

    <link rel="stylesheet" type="text/css" href="style_profile1.css">
</head>
<body>
	<div class="container"><br>
		<div class="row">
			<div class="col-sm-12">
				<div class="shDetailProfile">
				<div class="profileShowPict">
					<center>
						<h2 style="font-family: 'Athiti', sans-serif;"><?php echo $mName; ?></h2>
					<img src="./picture/<?php echo $mImg; ?>"><br>
					<button class="btnProfileEdit">Edit Profile</button>
					</center>
				</div>
				<br>
			<center>
				<div class="textProfileSh">
				<div class="profileEmail"><b>Email:</b> <?php echo $mm; ?></div>
				<div class="profilePassw"><b>Password:</b> <?php echo $mPass; ?></div>
				<div class="profileAddre"><b>Country:</b> <?php echo $mCountry." <b>City:</b> ".$mCity; ?></div>
				<div class="profileBirth"><b>Birthday:</b> <?php echo $mBirth; ?></div>
			    </div>
			</center><br><br>
			</div>
			</div>		
		</div>
	</div>

	<script>
		$("document").ready(function(){
			$(".btnProfileEdit").click(function(){
				$(".shDetailProfile").load("profile_edit.php");
			});
		});
	</script>
</body>
</html>