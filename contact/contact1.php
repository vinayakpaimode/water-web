<html>
<body>
hello
<h1><i><u<center>Contact</u></i></h1>
<--<?php
error_reporting(0);
$handel=mysqli_connect("localhost","root","");
   if($handel)
   {
	mysqli_select_db("water"); 
   $result=mysqli_query"select * from contact";
   $result=mysqli_query($handle,$result);
   echo "<table border=2>";
   echo"<tr>
   <th>First name</th>
   <th>Last Name</th>
   <th>Mobile Number</th>
   <th>E-mail Id</th>
   <th>Message</th>
   </tr>";
    fname             | lname    | mobile      | email                          | message
   
   while($z=$result=mysqli_fetch_array($result))
   {
	  echo"ok";
	   echo"<tr><td>".$z[fname]."</td></tr>";
	    echo"<tr><td>".$z[lname]."</td></tr>";
 echo"<tr><td>".$z[mobile]."</td></tr>";
  echo"<tr><td>".$z[email]."</td></tr>";
 echo"<tr><td>".$z[message]."</td></tr>";
	   
   }   }
   echo"</table>";
   
   
?> -->
</body>
</html>