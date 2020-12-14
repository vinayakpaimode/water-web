<html>
<body>


<!-- hello -->
<h1><i><u><center>Contact</u></i></h1>









<table>
<tr>
<th>fname</th>
<th>lname</th>
<th>mobile</th>
<th>email</th>
<th>message</th>
<tr>

<?php


$conn=mysqli_connect("localhost","root","","water");
   if($conn->connect_error)
   {
	die("connection failed : ".$conn-> connect_error);   
   }
   $sql = "SELECT fname,lname,mobile,email,message from contact";
   $result = $conn-> query($sql);
   if ($result->num_row > 0) 
   {
	   
   
	   		 

	   while($row= $result->fetch_assoc())
	   {
		   
		   echo "<table>";
		   echo "<tr><td>".$row["fname"]."</td>
		   <td>".$row['lname']."</td>
		   <td>".$row['mobile']."</td>
		   <td>".$row['email']."</td>
		   <td>".$row['message']."</td>
           </tr>;
	   }
         
    else 
	{
     echo "0 result"; 
	}
$conn-> close();
?>
 


</table>
</body>
</html>
