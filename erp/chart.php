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
	<title>Login Page</title>

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
    <link rel="stylesheet" type="text/css" href="webfontswithcss/css/fontawesome-all.min.css">

    <!-- Chart -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>

    <link rel="stylesheet" type="text/css" href="style12.css">
</head>
<body>
	<div class="headerIndex">
		<h2>ERP Factory<div class="headerIndex-login">
		
				<!--<img src="./picture/profile.jpg" class="circleProfile">-->
		
			hello, <?php echo $mName; ?></div></h2>
	</div>
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

	<div style="height: 100%;"><br>
		<center><h1 style="font-family: 'Athiti', sans-serif; border: 1px solid lightgray; padding: 5px 5px 5px 5px; background-color: #e0efef; color: #588485;">Annual profit Company</h1></center>
		<canvas id="myLineChart" width="450" height="150"></canvas><br>
	</div>
	</div><!--<div class="col-sm-10">-->

		</div>
	</div>

	<script>
		var ctx = document.getElementById("myLineChart");
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: ["2012", "2013", "2014", "2015", "2016", "2017"],
				datasets: [{
					label: 'Annual turnover',
					data: [12, 19, 3, 5, 2, 3],
					backgroundColor: [
						'rgba(1, 123, 126, 0.2)',
						'rgba(1, 123, 126, 0.2)',
						'rgba(1, 123, 126, 0.2)',
						'rgba(1, 123, 126, 0.2)',
						'rgba(1, 123, 126, 0.2)',
						'rgba(1, 123, 126, 0.2)'
					],
					borderColor: [
						'rgba(1, 123, 126, 1)',
						'rgba(1, 123, 126, 1)',
						'rgba(1, 123, 126, 1)',
						'rgba(1, 123, 126, 1)',
						'rgba(1, 123, 126, 1)',
						'rgba(1, 123, 126, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
		</script>
</body>
</html>