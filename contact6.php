







<?php

$servername = "localhost";
$username = "root";
$passward = "";
$databasename = "water";


$connection  = mysqli_connect($servername,$username,$passward,$databasename);

if(!$connection){
echo "connection failed:".mysqli_connect_error();
} 
else{
echo "connection  sucessfull.....";
}


 



?>