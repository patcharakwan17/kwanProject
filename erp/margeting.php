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

  <style>
  .fakeimg {
      height: 200px;
      background: #aaa;
  }
  #logouts{
    color: #a3a3a3;
  }
   #logouts:hover{
    color: lightgray;
  }
  .showPic img{
    width: 60%;
    border-radius: 10px;
  }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="sale.php">Margeting Page.</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar" >
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="employeesEdit_.php">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="customer_.php">Customer</a>
      </li>
          
    </ul>
    
        <div><a class="nav-link" href="logout.php" id="logouts">logout</a></div>
     
  </div>  
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
    	<div class="jumbotron text-center" style="margin-bottom:0">
    		<h1>Hello K. <?php echo $mName; ?></h1>
    		<div class="showPic">
          <img src="./picture/<?php echo $mImg; ?>">
        </div><br><center>
        <!--<div style="width: 60%; height: 40px; border:1px solid lightgray; padding: 8px 8px 8px 8px;"><a href="employeesEdit_.php" >Edit Profle</a></div>-->
        </center>
    	</div>
    </div>
    <div class="col-sm-8">
      <p>Resize this responsive page to see the effect!Resize this responsive page to see the effectResize this responsive page to see the effectResize this responsive page to see the effectResize this responsive page to see the effectResize this responsive page to see the effectResize this responsive page to see the effectResize this responsive page to see the effect</p>
      <p>Resize this responsive page to see the effect!Resize this responsive page to see the effectResize this responsive page to see the effectResize this responsive page to see the effectResize this responsive page to see the effectResize this responsive page to see the effectResize this responsive page to see the effectResize this responsive page to see the effect</p>
    </div>
  </div>
</div>

</body>
</html>
