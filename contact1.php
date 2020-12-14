<html>
<body>
<h1><i><u<center>Contact</u></i></h1>
<?php
$handel=mysql_connect("localhost","root","");
   if($handel)
   {
	mysql_select_db("water"); 
   $result=mysql_query("select * from contact");
   echo "<table border=2>";
   echo"<tr><th>First name</th>
   <th>Last Name</th>
   <th>Mobile Number</th>
   <th>E-mail Id</th>
   <th>Message</th>
   </tr>"
   while($z=$result->fetch_assoc())
   {
	   echo"<tr><td>".$z[0]."</td></tr>";
	    echo"<tr><td>".$z[1]."</td></tr>";
 echo"<tr><td>".$z[2]."</td></tr>";
  echo"<tr><td>".$z[3]."</td></tr>";
 echo"<tr><td>".$z[4]."</td></tr>";
	   
   }   }
   echo"</table>";
   
   
?>
</body>
</html>