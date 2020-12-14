<html>
<body>
<!-- hello -->
<h1><i><u><center>Contact</u></i></h1>
<?php
error_reporting(0);
$handel=mysqli_connect("localhost","root","");
   if($handel)
   {
	   mysqli_select_db("water");  
   $result=mysqli_query("select * from contact");
 $result=mysqli_query($handle,$result);
   echo "<table border=2>";
   echo"<tr>
   <th>First name</th>
   <th>Last Name</th>
   <th>Mobile Number</th>
   <th>E-mail Id</th>
   <th>Message</th>
   </tr>";
   mysqli_query("select * from contact");
   
   
  
  
   while($z=mysqli_fetch_array())
   {
	   
	  echo"ok";
	   echo"<tr><td>".$z[0]."</td></tr>";
	    echo"<tr><td>".$z[1]."</td></tr>";
 echo"<tr><td>".$z[2]."</td></tr>";
  echo"<tr><td>".$z[3]."</td></tr>";
 echo"<tr><td>".$z[4]."</td></tr>";
	   
   }  
   }
   echo"</table>";
   
   
?> 
</body>
</html>