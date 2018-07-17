<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	.side{
		width: 200px;
		background-color: #0d303a;
		height: 100%;
		text-align: center;
	}
	.side a{
		text-decoration: none;
		color: #e7eaec;
		width: 100%;
		font-size: 18px;
		/*padding: 10px 10px 10px 10px; */
	}
	.side a:hover{
		color: #b2d7d8;
		text-decoration: none;
	}
	.btn-side-index{
		padding: 10px 10px 10px 10px;
	}
	.btn-side-produ{
		padding: 10px 10px 10px 10px;
	}
	.btn-side-accou{
		padding: 10px 10px 10px 10px;
	}
	.btn-side-emplo{
		padding: 10px 10px 10px 10px;
	}
	.btn-side-chart{
		padding: 10px 10px 10px 10px;
	}
	.btn-side-calen{
		padding: 10px 10px 10px 10px;
	}
	.btn-side-setti{
		padding: 10px 10px 10px 10px;
	}
	.btn-side-logou{
		padding: 10px 10px 10px 10px;
	}
	.btn-side-custo{
		padding: 10px 10px 10px 10px;
	}
	    /*.btn-side{
			width: 200px;
			height: 30px;
			border: 1px solid lightgray;
			
			font-family: 'Athiti', sans-serif;
			
			color: 
			
			border: 1px solid #0a252d;
		} */
		/*========================================
		.btn-side-produ{
			display: inline-block;
			position: relative;
		}
		.btn-side-produ .dropp1{
			background-color: #25444d;
			z-index: 1;
			visibility: hidden;
			position: absolute;
		}
		.btn-side-produ:hover .dropp1{
			visibility: visible;
			margin-left: auto;
			width: 250px;
		}
		..dropp1{
			display: block;
			color: black;
		} */
	</style>
</head>
<body>
	<div class="side"><br>
		<div class="btn-side-index"><a href="index.php" >Dashboard</a><br></div>
		<div class="btn-side-custo"><a href="customer.php">Customer</a></div>
		<div class="btn-side-produ"><a href="product.php">Product</a>
			<!--<div class="dropp1">
				<a href="productOrder.php" class="dropProduct">Order</a><br>
				<a href="productNew.php" class="dropProduct">New product</a>
			</div>-->
		</div>
		<div class="btn-side-accou"><a href="accounting.php">Accounting</a></div>
		<div class="btn-side-emplo"><a href="employees.php">Employees</a></div>
		<div class="btn-side-chart"><a href="chart.php">Chart</a></div>
		<!--<div class="btn-side-calen"><a href="calender.php">Calender</a></div>-->
		<div class="btn-side-setti"><a href="setting.php">Setting</a></div>
		<div class="btn-side-logou"><a href="logout.php">Logout</a></div>

	</div><br>
</body>
</html>