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

    <!-- font awlay some -->
    <link rel="stylesheet" type="text/css" href="webfontswithcss1/css/fontawesome-all.min.css">

    <!-- Chart -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>

    <link rel="stylesheet" type="text/css" href="style25.css">
    <style type="text/css">
    	.frmbrnlog{
    		background-color: #0a252d; border:1px solid #0a252d;
    	}
    	.frmbrnlog:hover{
    		background-color: #0a252d; border:1px solid #0a252d;
    	}
    </style>
    <script>
    	$(document).ready(function(){
    		$(".logoutt").click(function(){
    			$(".shwLogout").hide();
    		});
    	});
    </script>
</head>
<body><!--<div class="shwLogout"><p>dddddddddddddddddddddddddddddddddddddd</p></div>-->
	<div class="headerIndex">
		
		<h2>ERP Factory<div class="headerIndex-login">
			

			<!--<div class="container" >
				<div class="dropdown">
					<button type="button" class="btn btn-primary dropdown-toggle frmbrnlog" data-toggle="dropdown">-->
						<p class="logoutt">hello, <?php echo $mName; ?></p>
					<!--</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="logout.php">Log out</a>
						<a class="dropdown-item" href="setting.php">Setting</a>
					</div>
				</div>
			</div>-->
		</div></h2>
		
		


	</div>
	

	<div class="container">
		<div class="row">
			<div class="col-sm-2" style="height: auto;">
				<div class="side-index">
					<?php
					include("sideManu.php");
					?>
					<!--<button class="firstPage">Dashboard</button>
					<button class="productPage">Product</button>
					<button class="accountingPage">Accounting</button>

					<button class="employeesPage">Employees</button>

					<button class="chartPage">Chart</button>
					<button class="calenderPage">Calender</button>
					<button class="settingPage">Setting</button>
					<button class="logoutPage">Logout</button> -->
				</div>
			</div>
			<div class="col-sm-10"><!--<div class="col-sm-10">-->
				<div class="showFpage">
					<div class="container-fluid">

						<div class="row">
							<div class="col-sm-3">
								<!--<a href="index.php" id="btn1">Dashboard</a>-->
								<button class="firstPage1" id="btn1">Dashboard</button>
							</div>
							<div class="col-sm-3">
								<!--<a href="chart.php" id="btn1">Chart</a>-->
								<button class="chartPage1" id="btn1">Chart</button>
							</div>
							<div class="col-sm-3">
								<!--<a href="chart.php" id="btn1">Calender</a>-->
								<button class="calenderPage1" id="btn1">Calender</button>
							</div>
							<div class="col-sm-3">
								<!--<a href="accounting.php" id="btn1">Accounting</a>-->
								<button class="accountingPage1" id="btn1">Accounting</button>
							</div>

						</div>
						<div class="row">
							<div class="col-sm-4">
								<!--<a href="product.php" id="btn1">Product</a>-->
								<button class="productPage1" id="btn2">Product</button>
							</div>
							<div class="col-sm-4">
								<!--<a href="employees.php" id="btn1">Employees</a>-->
								<button class="employeesPage1" id="btn2">Employees</button>
							</div>
							<div class="col-sm-4">
								<!--<a href="setting.php" id="btn1">Setting</a>-->
								<button class="settingPage1" id="btn2">Setting</button>
							</div>
							
						</div>
						<br>


						<!--<div class="row"><br>
							<div class="col-sm-4" id="OverviewPieChart">
								<center><h3 class="overviewH3">Overview</h3></center>
								<canvas id="myPieChart" width="400" height="400"></canvas>
						    </div>
						    <div class="col-sm-8"><br>
						    	<div class="showProfile">
						    		<h2 class="profileName"><?php //echo "$mm"; ?>.</h2>
						    		<center><div class="profileDetail">
						    			Position: Creative Section Manager<br>
						    			working period: 6 Years<br>
						    			Birthday: 17 May 1983
						    		</div></center>
						    		<img src="./picture/profile.jpg" class="circleProfile">
						    		<img src="./picture/cloud.jpg" class="bgHeaderProfile">
						    	</div>
						    </div>
						</div> -->


						<div class="row"><br><br>
							<div class="col-sm-9" style="border: 1px solid lightgray;">
								<!--<div style="text-align: center;font-size: 120%; padding: 1% 5% 5% 1%;">Sales Report
									<hr/ style="margin-top: 2%;">
								</div>-->
								<canvas id="myLineChart" width="450" height="150"></canvas>

						    </div>
						    <div class="col-sm-3" >
						    	<br>
						    	<center><div class="btn-sales">

						    		<button class="btns2-sale-to-year" id="btns2">
						    			<i class="fas fa-dollar-sign sideGray"></i>
						    			<div class="ii" >sale  <b class="percen">70%</b></div>
						    		</button>
						    		<button class="btns2-peop-to-year" id="btns2">
						    			<i class="fas fa-eye sideGray"></i>
						    			<br><div class="ii">view  <b class="percen">50%</b></div>
						    		</button><br><!--ยอดคนเข้าเว็ยไซต์ต่อปี-->


						    		<button class="btns2-order-to-year" id="btns2">
						    			<i class="fas fa-cart-arrow-down sideGray"></i>
						    			<br><div class="ii">order  <b class="percen">45%</b></div>
						    		</button>
						    		<button class="btns2-minus-to-year" id="btns2">
						    			<i class="fas fa-frown sideGray"></i>
						    			<br><div class="ii">deficit  <b class="percen">8%</b></div>
						    		</button>
						    		<br><!--ขาดทุน-->


						    		<button class="btns2-newpartner-to-year" id="btns2">
						    			<i class="fas fa-sitemap sideGray"></i>
						    			<br><div class="ii">partner  <b class="percen">15%</b></div>
						    		</button>
						    		<button class="btns2-other-to-year" id="btns2">
						    			<i class="fas fa-align-justify sideGray"></i>
						    			<br><div class="ii">other  <b class="percen">15%</b></div>
						    		</button><br>
						    	</div></center>
						    </div>
						</div>
					</div>
				</div>
			</div><!--<div class="col-sm-10">-->

		</div>
	</div>

	<script>
		$("document").ready(function(){
			$(".firstPage1").click(function(){
				window.location.href = "index.php";
				//$(".showFpage").load("home.php");
			});

			$(".profilePage1").click(function(){
				window.location.href = "setting.php";
			});

			$(".calenderPage1").click(function(){
				window.location.href = "calender.php";
			});

			$(".employeesPage1").click(function(){
				window.location.href = "employees.php";
			});

			$(".productPage1").click(function(){
				window.location.href = "product.php";
			});

			$(".accountingPage1").click(function(){
				window.location.href = "accounting.php";
			});

			$(".chartPage1").click(function(){
				window.location.href = "chart.php";
			});

			//============================================

			$(".firstPage").click(function(){
				window.location.href = "index.php";
				//$(".showFpage").load("home.php");
			});

			$(".profilePage").click(function(){
				$(".showFpage").load("setting.php");
			});

			$(".calenderPage").click(function(){
				$(".showFpage").load("calender.php");
			});

			$(".employeesPage").click(function(){
				$(".showFpage").load("employees.php");
			});

			$(".productPage").click(function(){
				$(".showFpage").load("product.php");
			});

			$(".accountingPage").click(function(){
				$(".showFpage").load("accounting.php");
			});

			$(".chartPage").click(function(){
				$(".showFpage").load("chart.php");
			});

			$(".logoutPage").click(function(){
				window.location.href = "logout.php";
			});
		});
	</script>

	<script>
		var ctx = document.getElementById("myPieChart");
		var myChart = new Chart(ctx, {
			type: 'pie',
			data: {
				labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
				datasets: [{
					label: '# of Votes',
					data: [12, 19, 3, 5, 2, 3],
					backgroundColor: [  
						'rgba(255, 99, 132, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						'rgba(255, 206, 86, 0.2)',
						'rgba(75, 192, 192, 0.2)',
						'rgba(153, 102, 255, 0.2)',
						'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)'
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