<?php
//fetch.php
include("connect.php");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($conn, $_POST["query"]);
 $query = "
  SELECT * FROM customer1
  WHERE cusID LIKE '%".$search."%'
  OR contacName LIKE '%".$search."%' 
  OR companyName LIKE '%".$search."%' 
 ";
}
else
{
 $query = "
  SELECT * FROM customer1";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <center><div class="table-responsive" style="height: 480px;">
   <table class="table table-striped" style="font-size:12px; width: 95%;">
    <tr>
     <th>Customer Id</th>
     <th>Customer Number</th>
     <th>Name</th>
     <th>Company</th>
     <th>Address1</th>
     <th>Address2</th>
     <th>Telephone</th>
     <th>Currency</th>
     <th>Tax Rate</th>
     <th>Eidt</th>
     <th>Delete</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["cusID"].'</td>
    <td>'.$row["cusNum"].'</td>
    <td>'.$row["contacName"].'</td>
    <td>'.$row["companyName"].'</td>
    <td>'.$row["address1"].'</td>
    <td>'.$row["address2"].'</td>
    <td>'.$row["tel"].'</td>
    <td>'.$row["currency"].'</td>
    <td>'.$row["taxRate"].'</td>
    <td><a href="customerEdit.php?custId='.$row["cusID"].'"><i class="fas fa-user-edit editProfile"></i></a></td>
    <td><center><a href="customerDele.php?custId='.$row["cusID"].'"><i class="far fa-trash-alt delProfile"></i></a></center></td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo '
 <div class="table-responsive">
   <table class="table table-striped" style="font-size:12px; width: 95%;">
    <tr>
     <th>Customer Id</th>
     <th>Customer Number</th>
     <th>Name</th>
     <th>Company</th>
     <th>Address1</th>
     <th>Address2</th>
     <th>Telephone</th>
     <th>Currency</th>
     <th>Tax Rate</th>
     <th>Eidt</th>
     <th>Delete</th>
    </tr>
 <tr><td colspan="10" style="border: 1px solid lightgray;"><center>Data Not Found</center></td></tr></table></div><center>';
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

    <link rel="stylesheet" type="text/css" href="style22.css">
</head>
<body>

</body>
</html>