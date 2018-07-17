<?php
	session_start();
	include("connect.php");
	//mysql_connect("localhost","root");
	//mysql_select_db("jp_kwan");
	$strSQL = "SELECT * FROM member1 WHERE mail = '".mysqli_real_escape_string($conn,$_POST['txtUsername'])."' 
	and Password = '".mysqli_real_escape_string($conn,$_POST['txtPassword'])."'";
	$objQuery = mysqli_query($conn,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
			echo "<script>alert('Something is wrong !! (;-;)');window.location='login.php'</script>";
			//header("location:login.php");
	}
	else
	{
			$_SESSION["mail"] = $objResult["mail"];
			$_SESSION["Username"] = $objResult["Username"];
			$_SESSION["Status"] = $objResult["Status"];
			$_SESSION["position"] = $objResult["position"];

			session_write_close();
			if($objResult["Status"] == "ADMIN")
			{
				header("location:index.php");
			}
			else
			{  
				if($objResult["position"] == "Margeting"){
					header("location:margeting.php");
				}
				elseif($objResult["position"] == "Sales"){
					header("location:sale.php");
				}

				//header("location:index.php");
			}
	//}
			/*if($objResult["position"] == "Sales")
			{
				header("location:sale.php");
			}
			elseif($objResult["position"] == "Margeting")
			{
				header("location:margeting.php");
			}*/
	}
	mysqli_close($conn);
?>