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
    $pass = $objResult["Password"];
    $mName = $objResult["Name"];
    $mImg = $objResult["img"];
    $country = $objResult["country"];
    $city = $objResult["city"];
    $birth = $objResult["birth"];
    $age = $objResult["age"];
    $position = $objResult["position"];
    $tel = $objResult["tel"];
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

    <!--<link rel="stylesheet" type="text/css" href="style25.css">-->

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
  .inpt{
    border: 1px solid lightgray;
    width: 100%;
    border-radius: 5px;
    padding: 5px 8px 5px 8px;
    margin: 3px 0px 3px 0px;
  }
  .submits{
    width: 100%;
    border-radius: 5px;
    border: 1px solid lightgray;
    margin-top: 5px;
    height: 40px;
  }
  .submits:hover{
    background-color: #999999;
    color: white;
    cursor: pointer;
  }
  </style>
</head>
<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="margeting.php">Margeting Page.</a>
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
	<center>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <form method="post" action="employeesEditAc_.php">
                    <table class="tbl-empEdit">
                        <tr><br>
                            <td colspan="2" style="height: 200px;"><center><img src="./picture/<?php echo $mImg; ?>" style="height: 190px;border-radius: 10px;"></center></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="file" name="file"></td>
                        </tr>
                        <tr>
                            <td>E-mail</td>
                            <td><input type="email" name="email" value="<?php echo $mm; ?>" readonly class="inpt"></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" name="name" value="<?php echo $mName; ?>" class="inpt"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="text" name="password" value="<?php echo $pass; ?>" class="inpt"></td>
                        </tr>
                        <tr>
                            <td>Country</td>
                            <td><input type="text" name="country" value="<?php echo $country; ?>" class="inpt"></td>
                        </tr>
                        <tr>
                            <td>city</td>
                            <td><input type="text" name="city" value="<?php echo $city; ?>" class="inpt"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" name="submit" value="Submit" class="submits"></td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    </center>
</body>
</html>