<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="en">

<head>
	<title> login Form</title>
	<!-- Meta-Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Clear login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta-Tags -->
	<!-- Stylesheets -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/style2.css" rel='stylesheet' type='text/css' />
	<!--// Stylesheets -->
	<!--fonts-->
	<!-- title -->
	<!-- body -->
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext" rel="stylesheet">
	<!--//fonts-->
</head>

<body>
<div id="home">
		
	<h1>	लॉग इन   </h1>
	<div class="w3ls-login box box--big">
		<!-- form starts here -->
		<form action="login.php" method="post">
			<div class="agile-field-txt">
				<label>
					<i class="fa fa-user" aria-hidden="true"></i> युजरनेम </label>
				<input type="text" name="email" placeholder="ई-मेल " required="" />
			</div>
			<div class="agile-field-txt">
				<label>
					<i class="fa fa-envelope" aria-hidden="true"></i> पासवर्ड</label>
				<input type="password" name="password" placeholder="पासवर्ड" required="" id="myInput" />
				<div class="agile_label">
					<input id="check3" name="check3" type="checkbox" value="show password" onclick="myFunction()">
					<label class="check" for="check3"> पासवर्ड दाखवा </label>
				</div>
			</div>
			<!-- script for show password -->
			<script>
				function myFunction() {
					var x = document.getElementById("myInput");
					if (x.type === "password") {
						x.type = "text";
					} else {
						x.type = "password";
					}
				}
			</script>
			<!-- //script ends here -->
			<div class="w3ls-bot">
				<div class="switch-agileits">
					<label class="switch">
						<input type="checkbox">
						<span class="slider round"></span>
						keep me signed in
					</label>
				</div>
				<div class="form-end">
					<input type="submit" value="लॉग इन"><br>
<?php

$e=$_POST['email'];

$p=$_POST['password'];
if(isset($e)&&isset($p))
{    $handel=mysql_connect("localhost","root","");
   if($handel)
   {
	mysql_select_db("water"); 
   $result=mysql_query("select * from user");
  
	   while($row=mysql_fetch_array($result))
	   {
		   if((strcmp($e,$row['email'])==0)&&(strcmp($p,$row['pass'])==0))
		   {
     echo"Log in done succesfully!!<br>"."<br>";
	 
	 echo"<script>window.location.assign('booking.php');</script>";
	 break;
	 
	 
   
	   }
   }
}

   }
					
?>				
					
					
				</div>
				<div class="clearfix"></div>
			</div>
		</form>
	</div>
	
	
</body>

</html>