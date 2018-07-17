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

    <link rel="stylesheet" type="text/css" href="style23.css">
    <style type="text/css">
        .editFrm label{
    		float: left;
    		margin: 5px 0px 0px 0px;
    	}
    	.editFrm input{
    		padding: 3px 3px 3px 8px;
    		border-radius: 5px;
    		border: 1px solid lightgray;
    		color: gray;
    		float: left;
    		width: 100%;
    	}
    	.editFrm input:hover{
    		color: black;
    	}
    	.customerShowTable .editCustSubm{
    		border: 1px solid lightgray;
    		margin: 15px 10px 15px 10px;
    		padding: 8px 8px 8px 8px;
    		background-color: #254c7f;
    		border-radius: 0px;
    		color: #fff;
    		float: right;
    		width: 30%;
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
					<div class="col-sm-12"><div><a href="customer.php" style="float: right; margin-right: 3%;"><i class="fas fa-undo-alt"></i> Back</a></div><br></div>
				</div>
				<div class="row">
					<div class="col-sm-12"><center>
						<div class="customerShowTable" style="width: 70%;">
							<?php
							if($_GET["custId"]){
								$customId = $_GET["custId"];
								$selEdit = mysqli_query($conn,"select * from customer1 where cusID='$customId'");
								$rowsEdit = mysqli_fetch_array($selEdit);

								/*$custNamess = $rowsEdit["cusID"];
								$custCompss = $rowsEdit["cust_comp"];
								$custTeless = $rowsEdit["cust_tels"];
								$custAddres = $rowsEdit["cust_adds"];
								$custdistss = $rowsEdit["cust_dist"];
								$custProvss = $rowsEdit["cust_prov"];
								$custZippss = $rowsEdit["cust_zip"]; */

								$customerId = $rowsEdit["custId"];
								$customerNum = $rowsEdit["custNum"];
								$customerName = $rowsEdit["custName"];
								$customerComp = $rowsEdit["custComp"];
								$custTel = $rowsEdit["custTels"];
								$custAdd1 = $rowsEdit["custAdds1"];
								$custAdd2 = $rowsEdit["custAdds2"];
								$custCurren = $rowsEdit["custCurren"];
								$custTax = $rowsEdit["custTax"];
								?>
								<div class="row">
									<div class="col-sm-4">
										<div class="editFrm"><label>customer Id</label><br>
											<input type="text" name="custEditId" value="<?php echo $customId; ?>" readonly>
										</div>
									</div>

                                    <div class="col-sm-4">
								        <div class="editFrm"><label>customer Name</label><br>
								        	<input type="text" name="custEditName" value="<?php echo $custNamess; ?>">
								        </div>
							        </div>

							        <div class="col-sm-4">
								        <div class="editFrm"><label>Company</label><br>
								        	<input type="text" name="custEditComp" value="<?php echo $custCompss; ?>">
								        </div>
							        </div>
								</div>

								<div class="row">
									<div class="col-sm-4">
										<div class="editFrm"><label>Telephone</label><br>
											<input type="text" name="custEditTel" value="<?php echo $custTeless; ?>">
										</div>
									</div>

                                    <div class="col-sm-4">
								        <div class="editFrm"><label>Address</label><br>
								        	<input type="text" name="custEditAdd" value="<?php echo $custAddres; ?>">
								        </div>
							        </div>

							        <div class="col-sm-4">
								        <div class="editFrm"><label>Distric</label><br>
								        	<input type="text" name="custEditDist" value="<?php echo $custdistss; ?>">
								        </div>
							        </div>
								</div>

								<div class="row">
									<div class="col-sm-6">
										<div class="editFrm"><label>Province</label><br>
											<input type="text" name="custEditPro" value="<?php echo $custProvss; ?>">
										</div>
									</div>

                                    <div class="col-sm-6">
								        <div class="editFrm"><label>Zip Code</label><br>
								        	<input type="text" name="custEditzip" value="<?php echo $custZippss; ?>">
								        </div>
							        </div>

								</div>

								<div class="row">
							        <div class="col-sm-12"><input type="submit" name="submit" value="Submit" class="editCustSubm"></div>
							    </div>
								<?php
								//echo $_GET["custId"]." ddd";
							}else{
								echo "Oh, God!! Something has wrong!!<br><a href='customer.php'>Back</a>";
							}
							?>
						</div>
					</div></center>
				</div>
			</div><!--<div class="col-sm-10">-->

		</div>
	</div>
</body>
</html>