
<!DOCTYPE html>
<html lang="en">
<head>
<title>Registration</title>
 
	<!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Space Register Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->

	<!-- css files -->
	<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
	<!-- css files -->

	<!-- Online-fonts -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
	<!-- //Online-fonts -->

</head>
<body>

	<!-- Main Content -->
	<div class="main">
		<div class="main-w3l">
			
			<div class="w3layouts-main">
				<h2><span>संपर्क  </span></h2>
					<form action="reg.php" method="post">
						<input placeholder="संपूर्ण नाव  " name="name" type="text" required="">
						<input placeholder="ई-मेल" name="email" type="email" required="">
						<input placeholder="फोन" name="phone" type="text" required="">
						<input placeholder="पासवर्ड" name="password" type="password"  id="password1" required="">
						<input placeholder="पासवर्ड पुष्टीकरण" name="password" type="password"  id="password2" required="">
						<input type="submit" value="सुरुवात करा !">
<?php
error_reporting(0);
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$pass=$_POST['password'];
if(isset($name)&&isset($email)&&isset($phone)&&isset($pass))
{
   $handel=mysql_connect("localhost","root","");
   if($handel)
   {
	mysql_select_db("water"); 
   $result=mysql_query("insert into user values('$name','$email','$phone','$pass')");
   if($result)
   {
     echo"<h3>अभिनंदन, यशस्वी नोंदणी!!!</h3><br>";
	 echo"<h4><a href='login\login.php'>साइन इन करा </a></h4>";
   }
   }
}
?>

					</form>
			</div>
			<!-- //main -->
			
			<!-- password-script -->
			<script>
				window.onload = function () {
					document.getElementById("password1").onchange = validatePassword;
					document.getElementById("password2").onchange = validatePassword;
				}

				function validatePassword() {
					var pass2 = document.getElementById("password2").value;
					var pass1 = document.getElementById("password1").value;
					if (pass1 != pass2)
						document.getElementById("password2").setCustomValidity("Passwords Don't Match");
					else
						document.getElementById("password2").setCustomValidity('');
					//empty string means no validation error
				}
			</script>
			<!-- //password-script -->

			
			
		</div>
	</div>
	<!-- //Main Content -->

</body>
</html>
