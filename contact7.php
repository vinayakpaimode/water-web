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
 fname             | lname    | mobile      | email                          | message
<?php
error_reporting(0);
include 'contact6.php';
$display = "select * from contact";
$save = mysqli_query($connectio,$displsy);
while($fetch = mysqli_fetch_assoc($save)) {
	echo "<tr><td>".$fetch['fname']."</td>
		   <td>".$fetch['lname']."</td>
		   <td>".$fetch['mobile']."</td>
		   <td>".$fetch['email']."</td>
		   <td>".$fetch['message']."</td>
           </tr>";
	   }
	

?>

</table>
</body>
</html>