<?php
//fetch.php
include("connect.php");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($conn, $_POST["query"]);
 $query = "
  SELECT * FROM member1 
  WHERE mail LIKE '%".$search."%'
  OR Name LIKE '%".$search."%' 
  OR City LIKE '%".$search."%' 
  OR position LIKE '%".$search."%' 
  OR Country LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM member1";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive" style="height: 390px;">
   <table class="table table-striped" style="font-size:12px;">
    <tr>
     <th>Mail</th>
     <th>Username</th>
     <th>Name</th>
     <th>Country</th>
     <th>City</th>
     <th>Position</th>
     <th>Telephone</th>
     <th>Picture</th>
     <th>Edit</th>
     <th>Delete</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["mail"].'</td>
    <td>'.$row["Username"].'</td>
    <td>'.$row["Name"].'</td>
    <td>'.$row["country"].'</td>
    <td>'.$row["city"].'</td>
    <td>'.$row["position"].'</td>
    <td>'.$row["tel"].'</td>
    <td><div class="kpicc">'.'<img src="./picture/'.$row["img"].'" style="width: 35px; height: 30px;" class="profilePic1"></div></td>
    <td><a href="employeesEdit.php?mailId='.$row["mail"].'"><i class="fas fa-user-edit editProfile"></i></a></td>
    <td><center><a href="employeeDele.php?mailId='.$row["mail"].'"><i class="far fa-trash-alt delProfile"></i></a></center></td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo '
 <div class="table-responsive" style="width: 98%;">
   <table class="table table-striped" style="font-size:12px; width:99%;">
    <tr>
     <th>Mail</th>
     <th>Username</th>
     <th>Name</th>
     <th>Country</th>
     <th>City</th>
     <th>Position</th>
     <th>Telephone</th>
     <th>picture</th>
     <th>Edit</th>
     <th>delete</th>
    </tr>
 <tr><td colspan="9" style="border: 1px solid lightgray;"><center>Data Not Found</center></td></tr></table></div>';
}

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
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

    <link rel="stylesheet" type="text/css" href="style23.css">
    <style type="text/css">
      .kpicc img{
        width: 70px;
        height: 50px;
        position: inherit;
        border-radius: 50%;
      }
    </style>
</head>
<body>
  <div class="showPicZoom"></div>
</body>
</html>