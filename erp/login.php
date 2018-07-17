<?php
include("connect.php");
$sel = mysqli_query($conn,"select * from member");
$rows = mysqli_fetch_array($sel);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Athiti|Black+Han+Sans|Dosis|Gamja+Flower|Gothic+A1|Raleway|Sriracha" rel="stylesheet">
    <!-- Icon application -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css" rel="stylesheet">

    <!-- font awlay some -->
    <link rel="stylesheet" type="text/css" href="webfontswithcss1/css/fontawesome-all.min.css">

    <link rel="stylesheet" type="text/css" href="style25.css">
    <style type="text/css">
    	.forgotRegis a{
    		color: gray;
    	}
    	.forgotRegis a:hover{
    		text-decoration: none;
    		color: darkblue;
    	}
    	.box-register{
    		padding: 5px 5px 25px 5px;
    		border: 5px solid #566775;
    		width: 30%;
    		background-color: #dfe1df;
    		position: absolute;
    		top: 50%;
    		left: 50%;
    		transform: translate(-50%,-50%);
    		font-family: 'Dosis', sans-serif;
    	}
    	.loginHeader1{
    		left: 50%;
    		top: 50%;
    		width: 40%;
	        height: auto;
	        background-color: #dfe1df;
	        font-family: 'Dosis', sans-serif;
	        border: 5px solid #566775;
	        font-size: 20px;
    		/*transform: translate(-50%,-50%) rotateY(0deg);*/
    	}
    	.signupform{
    		visibility: hidden;
    	}
    	.form-control{
    		margin: 5px 5px 5px 5px;
    		padding: 5px 5px 5px 5px;
    		width: 90%;
    		border: 1px solid lightgray;
    		border-radius: 3px;
    		font-family: 'Dosis', sans-serif;
    	}
    	.box-register input,.inpEmp{
    		margin: 5px 5px 5px 5px;
    		padding: 5px 5px 5px 5px;
    		width: 90%;
    		border: 1px solid lightgray;
    		border-radius: 3px;
    		font-family: 'Dosis', sans-serif;
    		color: gray;
    	}
    	.forgitt{
    		top: 20%;
    		left: 35%;
    		width: 30%;
	        height: auto;
	        background-color: #dfe1df;
	        font-family: 'Dosis', sans-serif;
	        border: 5px solid #566775;
	        font-size: 20px;
	        visibility: hidden;
	        position: absolute;

	    }
	    .putmailforgot, .submitforgot{
	    	width: 90%;
	    	margin: 5px 5px 5px 5px;
	    	border-radius: 3px;
	    	color: gray;
	    	border: 1px solid lightgray;
	    	padding: 5px 5px 5px 5px;
	    	font-size: 15px;
	    }
	    .submitforgot{
	    	background-color: #566775;
	    	color: white;
	    }
	    .submitforgot:hover{
	    	background-color: #44525d;
	    	color: white;
	    }

    </style>
    <script>
    	$(document).ready(function(){
    		$("#flipToSignUp").click(function(){
    			//$(".loginHeader").css("-webkit-animation-name","showsignup");
    			$(".loginHeader1").css("visibility","hidden");
    			$(".signupform").css("visibility","visible");
    			$("#forgotsho").css("visibility","hidden");
    		});
    		$("#forgotsho").click(function(){
    			$(".signupform").css("visibility","hidden");
    			$(".loginHeader1").css("visibility","hidden");
    			$(".forgitt").css("visibility","visible");
    		});
    		
    	});
    </script>
</head>
<body><div class="body1" >
	<center>
	<div class="container">
		<div class="center">
			<h1><i class="glyphicon glyphicon-leaf green"></i>
					<span style="color: #cc4f38;">ERP</span>
						<span style="color: white;">Factory</span>
			</h1>
			<h4 style="color: #9aadc2;">&copy; Japan System.</h4>
		</div>
		<div class="loginHeader1">
	        <h3 style="color: #566775;"><i class="fas fa-coffee green" style="color: #393d45;"></i>
	        	 &nbsp; Please Enter Your Information
	        	<hr style="width: 80%;" />
	        </h3>

	        <form name="form1" method="post" action="check_login.php" class="loginForm">
	        	<label class="loginFrm">
	        		<span class="block input-icon input-icon-right">
						<input name="txtUsername" type="text" id="txtUsername" class="form-control" placeholder="E-mail Address" style="width: 320px;" />
						    <!--<i class="glyphicon glyphicon-envelope gray"></i>-->
					</span>
				</label><br>

				<label class="loginFrm">
					<span>
					    <input name="txtPassword" type="password" id="txtPassword" class="form-control" placeholder="Password" style="width: 320px;"/>
						    <!--<i class="glyphicon glyphicon-lock gray"></i>-->
					</span>
				</label>
				<br>
				<label class="loginFrm" style="border: 0px;">
					<span>
						<input type="submit" name="submit" value="login" style="background-color: #566775; color: white; padding: 5px 5px 5px 5px; margin: 10px 10px 10px 10px; float: right; border: 0px; width: 320px;">
					</span>
				</label>

	        </form>

	        <div>
	        	<center>
	        		<div style="font-family: 'Raleway', sans-serif; color: gray;">

	        			<div style="font-size: 2px; color: gray; display: inline;">------------------------------------------------------------------</div> 
	        			
	        			<!--<div style="font-size: 2px; color: gray; display: inline;">--------------</div>-->
	        		</div>

	        		<div style="margin: 5px 5px 20px 5px; font-size: 14px; color: gray;" class="forgotRegis">
	        			<span style="padding: 5px 85px 0px 0px;"><a id="forgotsho" style="cursor: pointer;">Forgot password..</a></span>&nbsp;&nbsp;
	        			<span><a id="flipToSignUp" style="cursor: pointer;">I want to Register</a></span>
	        		</div>
	        		<!--
	        		<!--<i class="fab fa-twitter circle" style="background: #4099FF;color: #FFFFFF;padding: 10px 10px 9px 10px;"></i>
	        		<i class="fab fa-facebook-f circle" style="background: #3B5998;color: #FFFFFF;padding: 10px 20px 10px 20px;"></i>
	        		<i class="fab fa-google-plus-g circle" style="background: #dd4b39;color: #FFFFFF;padding: 10px 7px 10px 7px;"></i>-->
	        	   
	        	</center>
	        </div>
	    </div>

	    <div class="signupform">
	    	<div class="box-register" style="top: 43%; width: 28.5%;">
	    		<h3 style="color: #566775;"><i class="fas fa-registered green" style="color: #393d45; font-size: 25px;"></i>
	        	 &nbsp;Input Your Register To Form
	        	<hr style="width: 80%;"/>
	        </h3>
	        <form action="register.php" method="post">
	    		<input type="email" name="email" placeholder="E-mail"><br>
	    		<input type="text" name="name" placeholder="Full Name..."><br>
	    		<input type="password" name="password" placeholder="Password"><br>
	    		<center><select name="insPosition" class="inpEmp">
                    <option value="Null">----------------- Select your position. -----------------</option>
                    <option value="System Manager"> Manager</option>
                    <option value="Accouting"> Accouting</option>
                    <option value="Margeting"> Margeting</option>
                    <option value="Programmer"> Programmer</option>
                    <option value="Graphic Designer"> Graphic Designer</option>
                    <option value="Store"> Store</option>
                    <option value="Human resources"> Human resources</option>
                </select>
                </center>
	    		<!--<input type="text" name="position" placeholder="Position">--><br>
	    		<a href="login.php" style="float: left;height: 35px;width: 30%;margin-top: 15px;font-size: 12px;">
	    			<i class="fas fa-undo-alt"></i> Back</a>
	    			<input type="submit" name="submit" value="SIGN UP" style="width: 225px;height: 35px; margin-right: 10px;background-color: #566775;color: white;">
	    	</form>
	    	</div>
	    </div>


	    <div class="forgitt">
	    	<h3 style="color: #566775;"><i class="fas fa-unlock-alt" style="color: #44525d; font-size: 25px;"></i>
	        	 &nbsp;Please Enter Your E-mail
	        	<hr style="width: 80%;" />
	        	<input type="email" name="mailForgot" placeholder="Enter your email..." class="putmailforgot"><br>
	        	<input type="submit" name="submit" value="Send" class="submitforgot"><br>
	        	<a href="login.php" style="float: left;height: 40px;width: 30%;margin-top: 15px;font-size: 12px;">
	    			<i class="fas fa-undo-alt"></i> Back</a>
	    </div>
	</div>
    </center>
</body></div>
</html>