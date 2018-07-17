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
	<div class="shDetailProfile2">
    <center>
	<form name="frm" method="post" enctype="multipart/form-data" action="profile_editAc.php">
		<table class="tbl-editProf">
			<tr class="profileShowPict">
				<td colspan="2"><center><label><img src="./picture/<?php echo $mImg ?>"></label></center></td>
		    </tr>
		    <tr>
			    <td colspan="2"><center><input type="file" name="file"></center></td>
		    </tr>
			<tr>
				<td class="lefts">E-mail</td>
			    <td><center><label class="rights"><?php echo $mm; ?></label><input type="text" name="editMail" value="<?php echo $mm; ?>" hidden></center></td>
		    </tr>
		    <tr>
				<td><center><label class="lefts">Name</label></center></td>
			    <td><center><input class="rights" type="text" name="editName" value="<?php echo $mName; ?>"></center></td>
		    </tr>
		    <tr>
				<td><center><label class="lefts">Password</label></center></td>
			    <td><center><input class="rights" type="text" name="editPass" value="<?php echo $mPass; ?>"></center></td>
		    </tr>
		    <tr>
		    	<td><center><label class="lefts">Country</label></center></td>
		    	<td><center><input class="rights" type="text" name="editCountry" value="<?php echo $mCountry; ?>"></center></td>
		    </tr>
		    <tr>
		    	<td><center><label class="lefts">City</label></center></td>
		    	<td><center><input class="rights" type="text" name="editCity" value="<?php echo $mCity; ?>"></center></td>
		    </tr>
		    <tr>
		    	<td><center><label class="lefts">Birth</label></center></td>
		    	<td><center><input class="rights" type="text" name="editBirth" value="<?php echo $mBirth; ?>"></center></td>
		    </tr>
		    <tr>
		    	<td colspan="2"><center><input type="submit" name="submit" class="submits" value="Enter"></center></td>
		    </tr>
	    </table>
	</form>
    </center>
    </div>

</body>
</html>