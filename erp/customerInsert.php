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

    <link rel="stylesheet" type="text/css" href="style20.css">
    <style type="text/css">
        .customerShowTableInsert label{
        	font-family: 'Dosis', sans-serif;
        	font-size: 20px;
        	margin: 25px 5px 0px 5px;
        	float: left;
        }
        .inputCustomerIns{
        	font-family: 'Dosis', sans-serif;
        	font-size: 20px;
        	border-radius: 3px;
        	border: 1px solid lightgray;
        	width: 100%;
        	height: 40px;
        	padding: 5px 5px 5px 5px;
        	opacity: 0.6;
        }
    	.btn-custInsert{
    		float: right;
    		width: 25%; height: 40px; margin: 2% 2% 1% 0%; background-color: #00424c; border: 1px solid lightgray; border-radius: 5px;
    		color: white;
    		font-family: 'Dosis', sans-serif;
        	font-size: 20px;
        	opacity: 0.8;
    	}
    	.btn-custInsert:hover{
    		opacity: 1;
    	}
    </style>
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
					<div class="col-sm-12">
						<div><a href="customer.php" style="float: right; margin-right: 3%;"><i class="fas fa-undo-alt"></i> Back</a></div><br>
						<center><div class="customerShowTableInsert" style="width: 95%;">
							<?php
							$select = mysqli_query($conn,"select max(cusID) as maximumsId from customer1");
							$show = mysqli_fetch_array($select);
							$maximumsId = $show["maximumsId"];
							$custs = $maximumsId+1;
							?>
							<form method="post" action="customerInsertAc.php">
								<div class="row">
									<div class="col-sm-12">
										<label>Customer Id : <?php echo $custs; ?></label><br>
										<input type="text" name="custId" value="<?php echo $custs; ?>" class='inputCustomerIns' readonly style="width: 20%; float: left; border: 0px; background-color: transparent; font-size: 25px;" hidden>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-3"><label>Number</label><br>
										<input type="text" name="custNum" placeholder=" Number " class='inputCustomerIns'>
										
							<?php

							?>
							<?php
							/*$toints = substr($maximumsId, 3,4);
							$fom = number_format("$toints");
							$nm = $fom+1;

							if($fom >= 9){ 
								$codid = "cus00".$nm; 
								echo "<input type='text' name='custId' value='$codid' class='inputCustomerIns' readonly>";
							}
							elseif($fom >=99){
								$codid = "cus0".$nm;
								echo "<input type='text' name='custId' value='$codid' class='inputCustomerIns' readonly>";
							}
							elseif($fom >=999){
								$codid = "cus".$nm;
								echo "<input type='text' name='custId' value='$codid' class='inputCustomerIns' readonly>";
							}
							else{
								$codid = "cus000".$nm; 
								echo "<input type='text' name='custId' value='$codid' class='inputCustomerIns' readonly>";
							}*/
							?>
							

										<!--<input type="text" name="custId" placeholder=" Customer Id" class="inputCustomerIns">-->
									</div>
									<div class="col-sm-3"><label>Contact</label><br>
										<input type="text" name="custName" placeholder=" Contact Name" class="inputCustomerIns"></div>
									<div class="col-sm-3"><label>Company</label><br>
										<input type="text" name="custComp" placeholder=" Company Name" class="inputCustomerIns"></div>
									<div class="col-sm-3"><label>Telephone</label>
										<br><input type="text" name="custTels" placeholder=" Customer Telephone" class="inputCustomerIns"></div>
								</div>
								<div class="row">
									<div class="col-sm-3"><label>Address1</label><br>
										<textarea name="custAdds1" placeholder=" Address1" class="inputCustomerIns" style="height: 100px;"></textarea></div>
										<!--<input type="text" name="custAdds1" placeholder=" Address1" class="inputCustomerIns"></div>-->
									<div class="col-sm-3"><label>Address2</label><br>
										<textarea name="custAdds2" placeholder=" Address2" class="inputCustomerIns" style="height: 100px;"></textarea></div>
									
									<div class="col-sm-3"><label>Currency</label><br>
										<select name="custCurren" class="inputCustomerIns">
											<option value="Null">-- Please Select --</option>
											<option value="USD">USD</option>
											<option value="THB">THB</option>
											<option value="JPY">JPY</option>
											<option value="EUR">EUR</option>
											<option value="GBP">GBP</option>
											<option value="CNY">CNY</option>
										</select>
										<!--<input type="text" name="custCurren" placeholder=" Currency" class="inputCustomerIns">-->
									</div>

									<div class="col-sm-3"><label>Tax Rate</label><br>
										<select name="custTax" class="inputCustomerIns">
											<option value="3">3%</option>
											<option value="5">5%</option>
											<option value="7">7%</option>
										</select>
										<!--<input type="text" name="custZip" placeholder=" Customer Zip code" class="inputCustomerIns"></div>-->
								</div>
							</div>
								<div class="row">
									<div class="col-sm-12"><center><input type="submit" name="submit" value=" Submit " class="btn-custInsert"></center></div>
								</div>
							</form>
						</div></center>
					</div>
				</div>
			</div><!--<div class="col-sm-10">-->

		</div>
	</div>

</body>
</html>