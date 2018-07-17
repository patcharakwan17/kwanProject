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
  <title>Employees</title>

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
    <link rel="stylesheet" type="text/css" href="webfontswithcss1/css/fontawesome-all.min.css">

    <link rel="stylesheet" type="text/css" href="style15.css">
</head>
<body>
  <table>
  <?php
  if(isset($_POST["query"])){
    $search = mysqli_real_escape_string($conn, $_POST["query"]);
    $query = mysqli_query($conn,"select * from member1 where mail like '%".$search."%' or Name like '%".$search."%'
      ");
  }else{
    $query = mysqli_query($conn,"select * from member1");
    while ($row = mysqli_fetch_array($query)) {
      ?>
      <tr>
        <td><?php echo "dd ".$row['mail']; ?></td>
        <td><?php echo $row['Username']; ?></td>
        <td><?php echo $row['Name']; ?></td>
        <td><?php echo $row['Status']; ?></td>
        <td><?php echo $row['country']; ?></td>
        <td><?php echo $row['city']; ?></td>
        <form method="post" action="employeesEdit.php">
        <td><input type="submit" name="submit"></td>
        </form>
      </tr>
      <?php
    }
  }
  ?></table>
</body>
</html>