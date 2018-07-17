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

    <link rel="stylesheet" type="text/css" href="employeeStyle1.css">
</head>
<body>
    <div class="headerIndex">
        <h2>ERP Factory<div class="headerIndex-login">        
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
                <div class="centerDetailEmployee" style="width: 90%;">
                <br>
			<h2 style="font-family: 'Dosis', sans-serif;">Employees</h2>
            <div class="viewer">
            <button class="tableView" style="border:1px solid lightgray;"><i class="fas fa-table viewerIcon"></i></button>
            <button class="groupView" style="border:1px solid lightgray;"><i class="fas fa-users viewerIcon"></i></button>
            </div>
            <br>
			<tr>
				<td colspan="10">
					<center>
						<input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" style="width: 30%; float: left;" />
    
						<button class="brn-addEmp" style="float: right;"><i class="fas fa-plus plusColor"></i></button>
						
					</center>
					<br><br>
				</td>
            </tr>
            <div class="addEmp">
                <div class="row"><div class="col-sm-12" style="background-color: #668b97; border-radius: 8px 8px 0px 0px; padding: 5px 5px 5px 5px;">
                    <div style="color: #fff; font-family: 'Raleway', sans-serif; float: left;">&nbsp;&nbsp;Add Employees</div></div></div>
            <form method="post" enctype="multipart/form-data" action="employeesAc.php">

                <div class="row" style="background-color: #f2f8f7;">
                    <div class="col-sm-12" style="height: 180px;"><br>
                        <img src="" style="display: none; height: 150px;" id="image">
                    </div>
                </div>
                <div class="row" style="background-color: #f2f8f7;">
                    <div class="col-sm-12">
                        <input type="file" name="file" onchange="showImage.call(this)" style="bottom:0px;">
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
                        </script>
                    </div>                    
                </div>


                <div class="row" style="background-color: #f2f8f7;">
                    <div class="col-sm-4">
                        <label>Email</label><br>
                        <input type="mail" name="insMail" placeholder="Email" class="inpEmp">
                    </div>
                    <div class="col-sm-4">
                        <label>Username</label><br>
                        <input type="text" name="insUsrn" placeholder="Username" class="inpEmp">
                    </div>
                    <div class="col-sm-4">
                        <label>Password</label><br>
                        <label style="color: gray; border: 1px solid lightgray; width: 170px; height: 30px; background-color: #fff; width: 100%;" class="inpEmp"><div style="float: left;">user</div></label>
                        <input type="text" name="insPass" value="user" hidden>
                    </div>
                    
                </div>

                <div class="row" style="background-color: #f2f8f7;">
                    <div class="col-sm-4">
                        <label>Name</label><br>
                        <input type="text" name="insName" class="inpEmp" placeholder="Your name">
                    </div>
                    <div class="col-sm-4">
                        <label>Status</label><br>
                        <select name="insStatus" class="inpEmp">
                            <option value="USER">USER</option>
                            <option value="ADMIN">ADMIN</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <label>Country</label><br>
                        <input type="text" name="insCountry" class="inpEmp" placeholder="Your country">
                    </div>
                </div>
                <div class="row" style="background-color: #f2f8f7;">
                    <div class="col-sm-4">
                        <label>City</label><br>
                        <input type="text" name="insCity" class="inpEmp" placeholder="Your city">                    
                    </div>
                    <div class="col-sm-4">
                        <label>Position</label><br>
                        <select name="insPosition" class="inpEmp">
                                <option value="Null">--- Select your position. ---</option>
                                <option value="System Manager">Manager</option>
                                <option value="Accouting">Accouting</option>
                                <option value="Margeting">Margeting</option>
                                <option value="Programmer">Programmer</option>
                                <option value="Graphic Designer">Graphic Designer</option>
                                <option value="Store">Store</option>
                                <option value="Human resources">Human resources</option>
                            </select>
                    </div>
                    <div class="col-sm-4">
                        <label>Phone</label><br>
                        <input type="text" name="insTel" class="inpEmp" placeholder="Your Telephone">                    
                    </div>
                </div>
                


                <div class="row" style="background-color: #f2f8f7;">
                    <div class="col-sm-12"><center><input type="submit" name="submit" value="Submit" class="submitEditEmployee"></center></div>
                </div>
            </form></div><br>

            <div id="result"></div>

            <div id="groupViewShow" style="margin-top: -5%;">
                <div class="showSM" style="padding: 5px 3px 5px 3px; display: inline;">

                    <div class="row"><!--<div class="row"> -->


                    <div class="col-sm-4">
                        <div class="Manager1" id="boxEmployee">
                        <i class="fas fa-user-tie" style="font-size: 40px; color: #8e4cc7;"></i>
                    <h5>Manager</h5>
                    <?php
                    $selmember = mysqli_query($conn,"select * from member1 where position='System Manager'");
                    $num = mysqli_num_rows($selmember);
                    if($num==0){
                        echo "<i style='color: gray;'>Not have an Employees...</i>";
                    }else{
                    while ($shSm = mysqli_fetch_array($selmember)){
                        echo "K.".$shSm["Name"]."<br>";
                    } 
                    }
                    ?>
                        </div>
                    </div>

                    
                    <div class="col-sm-4">
                        <div class="Accouting1" id="boxEmployee">
                        <i class="fab fa-bitcoin" style="font-size: 40px; color: #fb9692;"></i>
                    <h5>Accouting</h5>
                    <?php
                    $selmember = mysqli_query($conn,"select * from member1 where position='Accouting'");
                    $num = mysqli_num_rows($selmember);
                    if($num==0){
                        echo "<i style='color: gray;'>Not have an Employees...</i>";
                    }else{
                    while ($shSm = mysqli_fetch_array($selmember)){
                        echo "K.".$shSm["Name"]."<br>";
                    } 
                    }
                    ?>
                    </div>
                    </div>

                    
                    <div class="col-sm-4">
                        <div class="Margeting1" id="boxEmployee">
                        <i class="fas fa-bullhorn" style="font-size: 40px; color: #fab297;"></i>
                    <h5>Margeting</h5>
                    <?php
                    $selmember = mysqli_query($conn,"select * from member1 where position='Margeting'");
                    $num = mysqli_num_rows($selmember);
                    if($num==0){
                        echo "<i style='color: gray;'>Not have an Employees...</i>";
                    }else{
                    while ($shSm = mysqli_fetch_array($selmember)){
                        echo "K.".$shSm["Name"]."<br>";
                    } 
                    }
                    ?>
                    </div>
                    </div>


                    </div><!--<div class="row">-->


                    <div class="row"><!--<div class="row"> -->


                    <div class="col-sm-3">
                    <div class="Programmer1" id="boxEmployee">
                        <i class="fas fa-code" style="font-size: 40px; color: #afd7b4;"></i>
                    <h5>Programmer</h5>
                    <?php
                    $selmember = mysqli_query($conn,"select * from member1 where position='Programmer'");
                    $num = mysqli_num_rows($selmember);
                    if($num==0){
                        echo "<i style='color: gray;'>Not have an Employees...</i>";
                    }else{
                    while ($shSm = mysqli_fetch_array($selmember)) {
                        echo "K.".$shSm["Name"]."<br>";
                    } 
                    }
                    ?></div>
                    </div>


                    <div class="col-sm-3">
                        <div class="graphicdesign1" id="boxEmployee">
                        <i class="far fa-lightbulb" style="font-size: 40px; color: #eab041;"></i>
                    <h5>Graphic designer</h5>
                    <?php
                    $selmember = mysqli_query($conn,"select * from member1 where position='Graphic designer'");
                    $num = mysqli_num_rows($selmember);
                    if($num==0){
                        echo "<i style='color: gray;'>Not have an Employees...</i>";
                    }else{
                        while ($shSm = mysqli_fetch_array($selmember)) {
                        echo "K.".$shSm["Name"]."<br>";
                        }
                    }
                    ?></div>
                    </div>


                    <div class="col-sm-3">
                        <div class="store1" id="boxEmployee">
                        <i class="fas fa-cart-arrow-down" style="font-size: 40px; color: #a78955;"></i>
                    <h5>Store</h5>
                    <?php
                    $selmember = mysqli_query($conn,"select * from member1 where position='Store'");
                    $num = mysqli_num_rows($selmember);
                    if($num==0){
                        echo "<i style='color: gray;'>Not have an Employees...</i>";
                    }else{
                        while ($shSm = mysqli_fetch_array($selmember)) {
                        echo "K.".$shSm["Name"]."<br>";
                        }
                    }
                    ?></div>
                    </div>


                    <div class="col-sm-3">
                        <div class="Human resources1" id="boxEmployee">
                        <i class="far fa-address-card" style="font-size: 40px; color: #4fb3d0;"></i>
                    <h5>HR</h5>
                    <?php
                    $selmember = mysqli_query($conn,"select * from member1 where position='Human resources'");
                    $num = mysqli_num_rows($selmember);
                    if($num==0){
                        echo "<i style='color: gray;'>Not have an Employees...</i>";
                    }else{
                        while ($shSm = mysqli_fetch_array($selmember)) {
                        echo "K.".$shSm["Name"]."<br>";
                        }
                    }
                    ?></div>
                    </div>
               
            </div>
            <br><br>
        </div>
            </div><!--<div class="col-sm-10">--><br><br>
        </div>
        </div>
    </div>
    </center>
    <script>
		$("document").ready(function(){
			$(".addEmp").hide();
			$(".brn-addEmp").click(function(){
				$(".addEmp").toggle("1000");
			});

            $("#groupViewShow").hide();
            $(".tableView").click(function(){
                $("#groupViewShow").hide();
                $(".form-control").show();
                $(".brn-addEmp").show();
                $("#result").show();
            });
            $(".groupView").click(function(){
                $("#groupViewShow").show();
                $("#result").hide();
                $(".form-control").hide();
                $(".brn-addEmp").hide();
            });
		});
	</script>

    <script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
</body>
</html>