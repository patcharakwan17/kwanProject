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

    <link rel="stylesheet" type="text/css" href="style24.css">

    <style>
        .tableEditing input{
            border: 1px solid lightgray;
            border-radius: 5px;
            padding: 5px 8px 5px 8px;
            margin: 5px 5px 5px 5px;
        }
        .tableEditing select{
            border: 1px solid lightgray;
            border-radius: 5px;
            padding: 5px 8px 5px 8px;
            margin: 5px 5px 5px 5px;
        }
        
    </style>
</head>
<body>
    <div class="headerIndex">
        <h2>ERP Factory<div class="headerIndex-login">
        
                <!--<img src="./picture/profile.jpg" class="circleProfile">-->
        
            hello, <?php echo $mName; ?></div></h2>
    </div>
	<center>

		<div class="container">
            <div class="row">
            <div class="col-sm-2" style="height: auto;">
                <div class="side-index">
                    <?php
                    include("sideManu.php");
                    ?>
                </div>
            </div>
            <div class="col-sm-10"><!--<div class="col-sm-10">-->

                <br>
			<h2>Edit Employees</h2>
			<br>
            <?php
            $redline = mysqli_real_escape_string($conn, $_GET["mailId"]);
            $sel5 = mysqli_query($conn,"select * from member1 where mail='$redline'");
            $row5 = mysqli_fetch_array($sel5);
            $mail = $row5["mail"];
            $username = $row5["Username"];
            $name = $row5["Name"];
            $country = $row5["country"];
            $city = $row5["city"];
            $position = $row5["position"];
            $tels = $row5["tel"];
            $img = $row5["img"];
            ?>
            <form method="post" action="employeesEditAct.php" enctype="multipart/form-data">
            <table style="font-size: 14px; text-align: center;" class="tableEditing">
                <tr><td colspan="6" style="height: 150px;"><center><img src="./picture/<?php echo "$img"; ?>"  style=" height: 150px; border-radius: 50%;" id="image">
                    <script>

                            function showImage(){
                                if(this.files && this.files[0]){
                                    var obj = new FileReader();
                                    obj.onload = function(data){
                                        var image = document.getElementById("image");
                                        image.src = data.target.result;
                                        image.style.display = "block";

                                    }
                                    obj.readAsDataURL(this.files[0]);
                                }
                            }
                            $(document).ready(function(){

                            });
                        </script>
                    </center>
                </td></tr>
                <tr><td colspan="6"><input type="file" name="file" onchange="showImage.call(this)" style="border: 0px;"></td></tr>
                <tr><td colspan="6" style="height: 30px;"></td></tr>
               
                    <!--<th>Mail</th>-->
                    <th>Username</th>
                    <th>Name</th>
                    <th>Country</th>
                    <th>City</th>
                    <th>Position</th>
                    <th>Mobile</th>

                <tr>
                    <!--<td><input type="text" name="mailEdit" value="<?php //echo $mail; ?>"></td>-->
                
                    <td><input type="text" name="usrEdit" value="<?php echo $username; ?>">
                        <input type="text" name="mailEdit" value="<?php echo $mail; ?>" hidden>
                    </td>
                    <td><input type="text" name="nameEdit" value="<?php echo $name; ?>"></td>
                    <td><input type="text" name="countEdit" value="<?php echo $country; ?>"></td>
                    <td><input type="text" name="cityEdit" value="<?php echo $city; ?>"></td>
                    <td><select name="posiEdit">
                        <?php
                        if($position=="System Manager"){
                            echo "<option value='$position'>$position</option>
                            <option value='Accouting'>Accouting</option>
                                <option value='Margeting'>Margeting</option>
                                <option value='Programmer'>Programmer</option>
                                <option value='Graphic Designer'>Graphic Designer</option>
                                <option value='Store'>Store</option>
                                <option value='Human resources'>Human resources</option>
                            ";
                        }
                        else if($position=="Accouting"){
                            echo "<option value='$position'>$position</option>
                            <option value='System Manager'>System Manager</option>
                                <option value='Margeting'>Margeting</option>
                                <option value='Programmer'>Programmer</option>
                                <option value='Graphic Designer'>Graphic Designer</option>
                                <option value='Store'>Store</option>
                                <option value='Human resources'>Human resources</option>
                            ";
                        }
                        else if($position=="Margeting"){
                            echo "<option value='$position'>$position</option>
                            <option value='System Manager'>System Manager</option>
                                <option value='Accouting'>Accouting</option>
                                <option value='Programmer'>Programmer</option>
                                <option value='Graphic Designer'>Graphic Designer</option>
                                <option value='Store'>Store</option>
                                <option value='Human resources'>Human resources</option>
                            ";
                        }else if($position=="Programmer"){
                            echo "<option value='$position'>$position</option>
                            <option value='System Manager'>System Manager</option>
                                <option value='Accouting'>Accouting</option>
                                <option value='Margeting'>Margeting</option>
                                <option value='Graphic Designer'>Graphic Designer</option>
                                <option value='Store'>Store</option>
                                <option value='Human resources'>Human resources</option>
                            ";
                        }
                        else if($position=="Graphic Designer"){
                            echo "<option value='$position'>$position</option>
                            <option value='System Manager'>System Manager</option>
                                <option value='Accouting'>Accouting</option>
                                <option value='Margeting'>Margeting</option>
                                <option value='Programmer'>Programmer</option>
                                <option value='Store'>Store</option>
                                <option value='Human resources'>Human resources</option>
                            ";
                        }
                        else if($position=="Store"){
                            echo "<option value='$position'>$position</option>
                            <option value='System Manager'>System Manager</option>
                                <option value='Accouting'>Accouting</option>
                                <option value='Margeting'>Margeting</option>
                                <option value='Programmer'>Programmer</option>
                                <option value='Graphic Designer'>Graphic Designer</option>
                                <option value='Human resources'>Human resources</option>
                            ";
                        }
                        else if($position=="Human resources"){
                            echo "<option value='$position'>$position</option>
                            <option value='System Manager'>System Manager</option>
                                <option value='Accouting'>Accouting</option>
                                <option value='Margeting'>Margeting</option>
                                <option value='Programmer'>Programmer</option>
                                <option value='Graphic Designer'>Graphic Designer</option>
                                <option value='Store'>Store</option>
                            ";
                        }
                        else if($position==""){
                            echo "<option value='Null'>--- Select Position ---</option>
                                <option value='System Manager'>System Manager</option>
                                <option value='Accouting'>Accouting</option>
                                <option value='Margeting'>Margeting</option>
                                <option value='Programmer'>Programmer</option>
                                <option value='Graphic Designer'>Graphic Designer</option>
                                <option value='Store'>Store</option>
                                <option value='Human resources'>Human resources</option>
                            ";
                        }
                        ?>
                                <!--<option value="<?php //echo $position; ?>"><?php //echo $position; ?></option>
                                <option value="System Manager">Manager</option>
                                <option value="Accouting">Accouting</option>
                                <option value="Margeting">Margeting</option>
                                <option value="Programmer">Programmer</option>
                                <option value="Graphic Designer">Graphic Designer</option>
                                <option value="Store">Store</option>
                                <option value="Human resources">Human resources</option>-->
                            </select>
                    </td>
                    <td><input type="text" name="telEdit" value="<?php echo $tels; ?>"></td>
                </tr>
                <tr><td colspan="7"><br><center><input type="submit" name="submit" value=" Submit "></center></td></tr>
            </table>
            </form>
           
            <br><br>
            <a href="employees.php" style="color: black;"><i class="fas fa-angle-left"> Back to previous page.</i></a>
            </div><!--<div class="col-sm-10">-->
        </div>
        </div>
    </center>
</body>
</html>