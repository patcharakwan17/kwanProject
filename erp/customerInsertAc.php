<?php
include("connect.php");
/*$customerId = $_POST["custId"];
$customerName = $_POST["custName"];
$customerComp = $_POST["custComp"];
$custTel = $_POST["custTels"];
$custAdd = $_POST["custAdds"];
$custDis = $_POST["custDist"];
$custProv = $_POST["custProv"];
$custZip = $_POST["custZip"];

$sels = mysqli_query($conn,"insert into customer (cust_id, cust_name, cust_comp, cust_tels, cust_adds, cust_dist, cust_prov, cust_zip) values ('$customerId', '$customerName', '$customerComp', '$custTel', '$custAdd', '$custDis', '$custProv', '$custZip')");
    echo "<script>window.location='customer.php';</script>";
    */
$customerId = $_POST["custId"];
$customerNum = $_POST["custNum"];
$customerName = $_POST["custName"];
$customerComp = $_POST["custComp"];
$custTel = $_POST["custTels"];
$custAdd1 = $_POST["custAdds1"];
$custAdd2 = $_POST["custAdds2"];
$custCurren = $_POST["custCurren"];
$custTax = $_POST["custTax"];

$sels = mysqli_query($conn,"insert into customer1 (cusID, cusNum, contacName, companyName, address1, address2, tel, currency, taxRate) values ('$customerId','$customerNum', '$customerName', '$customerComp', '$custAdd1', '$custAdd2', '$custTel', '$custCurren', '$custTax')");
    echo "<script>window.location='customer.php';</script>";

?>