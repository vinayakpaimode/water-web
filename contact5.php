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
</tr>


<?php


$conn = mysqli_connect("localhost","root","","water");
   if($conn->connect_error)
   {
	die("connection failed : ".$conn-> connect_error);   
   }
   $sql = "SELECT fname,lname,mobile,email,message from contact";
   $result = $conn-> mysqli_query($sql);
   if ($result->num_rows > 0) {
    while($row= $result->mysqli_fetch_assoc($result))
	   {
		   
		   
		   echo "<tr><td>".$row["fname"]."</td>
		   <td>".$row['lname']."</td>
		   <td>".$row['mobile']."</td>
		   <td>".$row['email']."</td>
		   <td>".$row['message']."</td>
           </tr>;
	   }
	
   }
         
    
     $conn-> close();
  
  ?>
 


</table>
</body>
</html>
