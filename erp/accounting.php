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

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <link rel="stylesheet" type="text/css" href="style18.css">
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
				<div id="myfirstchart" style="height: 250px;"></div>
			</div><!--<div class="col-sm-10">-->

		</div>
	</div>

	<script type="text/javascript">
		/*Morris.Bar({
  element: 'myfirstchart',
  data: [
    { y: '2006', a: 100, b: 90 },
    { y: '2007', a: 75,  b: 65 },
    { y: '2008', a: 50,  b: 40 },
    { y: '2009', a: 75,  b: 65 },
    { y: '2010', a: 50,  b: 40 },
    { y: '2011', a: 75,  b: 65 },
    { y: '2012', a: 100, b: 90 }
  ],
  xkey: 'y',
  ykeys: ['a', 'b'],
  labels: ['Series A', 'Series B']
});   

		Morris.Donut({
  element: 'myfirstchart',
  data: [
    {label: "Download Sales", value: 12, color: "red"},
    {label: "In-Store Sales", value: 30},
    {label: "Mail-Order Sales", value: 20}
  ]
}); */

	</script>
</body>
</html>