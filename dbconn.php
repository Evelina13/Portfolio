<?php

$servername="sql112.epizy.com";
$username="epiz_32550007";
$password="RT9nEY6Vob5qfhI";
$dbname="epiz_32550007_tour";
$conn=mysqli_connect($servername,$username,$password,$dbname);
mysqli_set_charset($conn,"utf8");
if($conn){
	// echo"kpav";
}else{
	echo"chkpav";
}
 ?>