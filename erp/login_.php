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

    <link rel="stylesheet" type="text/css" href="style19.css">
    <style type="text/css">
    	.forgotRegis a{
    		color: gray;
    	}
    	.forgotRegis a:hover{
    		text-decoration: none;
    		color: darkblue;
    	}
    	body{
    		margin: 0px;
    		padding: 0px;
    		background-color: #c0dbfc;
    	}
    	#box{
    		height: 200px;
    		width: 900px;
    		background-color: #1e3b63;
    		border-radius: 5px;
    		position: absolute;
    		top: 50%;
    		left: 50%;
    		transform: translate(-50%, -50%);
    	}
    	#main{
    		height: 300px;
    		width: 430px;
    		background-color: white;
    		border-radius: 5px;
    		position: absolute;
    		top: 50%;
    		left: 70%;
    		transform: translate(-50%,-50%);
    		z-index: 99;
    	}
        #loginform{
        	position: absolute;
        	top: 50%;
        	left: 70%;
        	transform: translate(-50%,-50%);
        	z-index: 999;
        }
        #signupform,#signupform{
        	position: absolute;
        	top: 50%;
        	left: 70%;
        	transform: translate(-50%,-50%);
        	z-index: 999;
        }
        #signupform{
        	top: 45%;
        	left: 75%;
        	visibility: hidden;
        }
        #loginform h1,#signupform h1{
        	font-size: 25px;
        	color: #1e3b63;
        	font-family: 'Dosis', sans-serif;
        }
        #loginform input,#signupform input{
        	height: 40px;
        	width: 300px;
        	border: 0px;
        	outline: none;
        	border-bottom: 1px solid black;
        	margin: 5px;
        }
        /*#loginform button,#signupform button{
        	height: 35px;
        	width: 130px;
        	background-color: #1e3b63;
        	font-size: 16px;
        	font-family: 'Dosis', sans-serif;
        	color: white;
        	border: none;
        	outline: none;
        	border-radius: 5px;
        	margin-top: 30px;
        	margin-left: 175px;
        }
        */
        .submit_login,.submit_signup{
        	height: 35px;
        	width: 130px;
        	background-color: #1e3b63;
        	font-size: 16px;
        	font-family: 'Dosis', sans-serif;
        	color: white;
        	border: none;
        	outline: none;
        	border-radius: 5px;
        	margin-top: 30px;
        	margin-left: 175px;
        }
        #login_btn,#signup_btn{
        	height: 35px;
        	width: 120px;
        	background-color: transparent;
        	color: white;
        	border: 1px solid white;
        	border-radius: 5px;
        	outline: none;
        	position: absolute;
        	left: 75%;
        	top: 65%;
        	transform: translate(-50%,-50%);
        	transition: all .5s;
        }
        #signup_btn{
        	left: 25%;
        }
        #login_btn:hover,#signup_btn:hover{
        	background-color: white;
        	color: #2d2d2d;
        	cursor: pointer;
        }
        #login_msg,#signup_msg{
        	font-family: 'Dosis', sans-serif;
        	font-size: 25px;
        	color: white;
        	position: absolute;
        	top: 30%;
        	left: 75%;
        	transform: translate(-50%,-50%);
        	z-index: 1;
        }
        #signup_msg{
        	left: 25%;
        }
    </style>
</head>
<body>


	<!--<div class="body1" >
	<center>
	<div class="container">
		<div class="center">
			<h1><i class="glyphicon glyphicon-leaf green"></i>
					<span style="color: #cc4f38;">ERP</span>
						<span style="color: white;">Factory</span>
			</h1>
			<h4 style="color: #9aadc2;">&copy; Japan System.</h4>
		</div>
		<div class="loginHeader">
	        <h3 style="color: #566775;"><i class="fas fa-coffee green" style="color: #393d45;"></i>
	        	 &nbsp; Please Enter Your Information
	        	<hr style="width: 80%;" />
	        </h3>

	        <form name="form1" method="post" action="check_login.php" class="loginForm">
	        	<label class="loginFrm">
	        		<span class="block input-icon input-icon-right">
						<input name="txtUsername" type="text" id="txtUsername" class="form-control" placeholder="E-mail Address" style="width: 250px; border: 1px solid lightgray; font-family: 'Raleway', sans-serif;"/>
						  
					</span>
				</label>

				<label class="loginFrm">
					<span>
					    <input name="txtPassword" type="password" id="txtPassword" class="form-control" placeholder="Password" style="width: 250px; border: 1px solid lightgray; font-family: 'Raleway', sans-serif;" />
						 
					</span>
				</label>
				<br>
				<label class="loginFrm" style="border: 0px;">
					<span>
						<input type="submit" name="submit" value="login" style="background-color: #566775; color: white; width: 90px; padding: 5px 5px 5px 5px; margin: 10px 10px 10px 10px; float: right; border: 0px;">
					</span>
				</label>

	        </form>

	    </div>
	</div>
    </center>-->



    <div id="box">
    	<div id="main"></div>
    		<div id="loginform">
    			<h1>Login</h1>
    			<input type="email" name="email" placeholder="E-mail"><br>
    			<input type="password" name="password" placeholder="Password"><br>
    			<input type="submit" name="submit" value=" LOG IN " class="submit_login">
    			<!--<button>LOG IN</button>-->
    		</div>
    		<div id="signupform">
    			<h1>Sign Up</h1>
    			<input type="text" name="name" placeholder="Full Name"><br>
    			<input type="email" name="email" placeholder="E-mail"><br>
    			<input type="password" name="password" placeholder="Password"><br>
    			<input type="submit" name="submit" value=" SIGN UP " class="submit_signup">
    		</div>

    		<div id="login_msg">Have an account?</div>
    		<div id="signup_msg">Don't have an account?</div>


    		<button id="login_btn">LOGIN</button>
    		<button id="signup_btn">SIGN UP</button>
    	
    </div>
    <script>
    	$(document).ready(function(){
    		$("#signup_btn").click(function(){
    			//$("#main").animate({left:"25%"},500);
    			$("#main").animate({left:"30%"},500);
    			$("#loginform").css("visibility","hidden");
    			$("#loginform").animate({left:"30%"},500);
    			
    			//$("#signupform").animate({left:"17%"},500);
    			$("#signupform").animate({left:"30%"},500);
    			$("#signupform").css("visibility","visible");

    		});
    		$("#login_btn").click(function(){
    			$("#main").animate({left:"75%"},500);
    			//$("#main").animate({left:"70%"},500);
    			$("#signupform").css("visibility","hidden");
    			$("#signupform").animate({left:"75%"}, 500);


    			$("#loginform").animate({left:"75%"},500);
    			//$("#loginform").animate({left:"70%"},500);
    			$("#loginform").css("visibility","visible");
    			//$("#main").animate({left:"20%"},1000);
    		});
    	});
    </script>
</body>
</html>