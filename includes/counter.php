<?php
$counter_name="counter.txt";
if(!file_exists($counter_name)){
	$f=fopen($counter_name,"w");
	fwrite($f,"0");
	fclose($f);
}
$f=fopen($counter_name,"r");
$counterVal=fread($f,filesize($counter_name));
fclose($f);
$counterVal++;
$f=fopen($counter_name,"w");
fwrite($f,$counterVal);
fclose($f);
echo"<center><strong>You have visited $counterVal times!</strong></center>";
?>