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
	<title>Customer</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Athiti|Black+Han+Sans|Dosis|Gamja+Flower|Gothic+A1|Raleway|Sriracha" rel="stylesheet">

    <!-- font awlay some -->
    <link rel="stylesheet" type="text/css" href="webfontswithcss1/css/fontawesome-all.min.css">

    <!-- Chart -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>

    <link rel="stylesheet" type="text/css" href="style21.css">
</head>
<body>
	<div class="headerIndex">
		<h2>ERP Factory<div class="headerIndex-login">			
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
				<div class="row">
					<div class="col-sm-12"><center><h2>Customer</h2></center></div>
				</div>
				<div class="row">
					<div class="col-sm-6"><input type="text" name="SearchCustomer" id="SearchCustomer" placeholder="  Search Customer... " style="width: 50%; border-radius: 3px; border: 1px solid lightgray; font-size: 18px;"></div>
					<div class="col-sm-6"><a href="customerInsert.php" style="float: right; margin-right: 3%;" class="addCustomers"><i class="fas fa-plus"></i> Add new</a></div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="customerShowTable">
							<br>
							<div id="result"></div>
						</div>
					</div>
				</div>
			</div><!--<div class="col-sm-10">-->

		</div>
	</div>

	<script>
		$(document).ready(function(){
			load_data();
			function load_data(query){
				$.ajax({
					url:"fetchCustomer.php",
					method:"POST",
					data:{query:query},
					success:function(data)
				{
					$('#result').html(data);  
				}
			});
			}
			$('#SearchCustomer').keyup(function(){
				var search = $(this).val();
				if(search != '')
					{
						load_data(search);
					}
				else
					{
						load_data();
					}
				});
		});
	</script>

</body>
</html>