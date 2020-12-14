<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
	
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Heaven Booking Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
	/>
	<script type="application/x-javascript">
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
	</script>
	<!-- Meta tags -->
	<!--stylesheets-->
	<link href="css/style4.css" rel='stylesheet' type='text/css' media="all">
	<!--//style sheet end here-->

	<link href="//fonts.googleapis.com/css?family=Barlow:300,400,500,600" rel="stylesheet">
</head>

<body>

	<h1 class="header-w3ls">
		 आपल्यासाठी टँकर आरक्षित करा </h1>
	<!--login form-->
	<div class="hotel-bothside">
		<form action="#" method="post">
			<div class="mid-cls">
				<div class="hotel-left-w3ls">
					<h2>माहिती भरा </h2>

					<div class="main">
						<div class="form-left-to-w3l">

							<input type="text" name="name" placeholder="नाव " required="">
							<div class="clear"></div>
						</div>
						<div class="form-right-to-w3ls">

							<input type="text" name="lastname" placeholder="आडनाव " required="">
							<div class="clear"></div>
						</div>

					</div>
					<div class="main">

						<div class="form-left-to-w3l">

							<input type="text" name="phone" required="" placeholder=" फोन">
						</div>
						<div class="form-right-to-w3ls ">


							<input type="text" name="landmark" placeholder="जवळची खूण" required="">
						</div>
					</div>
					<div class="form-add-to-w3ls add">

						<input type="text" name="address" placeholder="पत्ता " required="">
						<div class="clear"></div>
					</div>


					<div class="main">
						<div class="form-left-to-w3l">

							<input type="text" name="city" placeholder="गाव " required="">
							<div class="clear"></div>
						</div>
						<div class="form-right-to-w3ls">
							<input type="text" name="pincode" placeholder="पिनकोड " required="">
							<div class="clear"></div>
						</div>
					</div>
					<div class="main">
						<<!--div class="form-left-to-w3l">

							<input class="pin-bottom" type="text" name="Pin code" placeholder="Pin code" required="">
							<div class="clear"></div>
						</div>-->
						<!--<div class="form-right-to-w3ls">

							<select class="form-control country-buttom">
												<option value="">
												Select Country</option>
													<option value="category2">Oman</option>
													<option value="category1">Australia</option>
													<option value="category3">America</option>
													<option value="category3">London</option>
													<option value="category3">Goa</option>
													<option value="category3">Canada</option>
													<option value="category3">Srilanka</option>
												</select>
						</div>-->
					</div>

					<div class="clear"></div>

				</div>
				<div class="hotel-right-w3ls">

					<h2>आरक्षित करा </h2>
					<div class="main">
						<div class="form-left-to-w3l"><center><h3 style="color:white">तारीख </h3></center>
<input type="date" name="date" id="dateofbirth" placeholder="तारीख " required="">

						<center></div>
						<div class="form-right-to-w3ls"><h3 style="color:white">वेळ</h3></center>
<input type="time" name="time" id="dateofbirth" placeholder="वेळ" required=""></center>

						</div>
					</div>
					<div class="main">
						<div class="form-right-to-w3ls">
<h3 style="color:white">टँकर बुक करण्याचे कारण</h3></center>
							<select class="form-control buttom" name="reason">
												<option value="">
											</option>
													<option value="category2">पिण्याच्या पाण्यासाठी</option>
													<option value="category1">बांधकामासाठी </option>
													<option value="category2">हॉटेल</option>
													<option value="category1">दैनंदिन वापरासाठी  </option>

												</select>
						</div>
					
					</div>
					
					<!--<div class="form-control-w3l">

						<textarea name="Message" placeholder="Any Special Request..." required=""></textarea>
					</div>-->
					<div class="clear"></div>
					<div class="btnn">
						<button type="submit">आरक्षित करा </button><br>
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
					
<?php
error_reporting(0);
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$phone=$_POST['phone'];
$landmark=$_POST['landmark'];
$address=$_POST['address'];
$city=$_POST['city'];
$pincode=$_POST['pincode'];
$date=$_POST['date'];
$time=$_POST['time'];
$reason=$_POST['reason'];
if(isset($name)&&isset($lastname)&&isset($phone)&&isset($landmark)&&isset($address)&&isset($city)&&isset($pincode)&&isset($date)&&isset($time)&&isset($reason),($dr_id))
{
   $handel=mysql_connect("localhost","root","");
   if($handel)
   {
	mysql_select_db("water"); 
   $result=mysql_query("insert into book values('$name','$lastname','$phone','$landmark','$address','$city','$pincode','$date','$time','$reason'),'$dr_id'");
   if($result)
   {
     echo  " <font color=\"white\">अभिनंदन, यशस्वी आरक्षण! </font>";
	   echo  "<font color=\"white\">होम पेज वर जा . </a></font>";
	    echo  "<font color=\"white\"> <a href=\"index.php\">--></a></font>";
   }
   }
}
?>
</div>
				</div>
			</div>
		</form>
	</div>
			</div>
			
		</div>
	</div>
	<!-- //Main Content -->
<div class="copy">
		<p>&copy;2019-2020 All Rights Reserved 
	</div>
</body>
</html>
