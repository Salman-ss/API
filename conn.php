<?php 

$server="localhost";
$user="root";
$pass="";
$db="users";



$con=mysqli_connect($server,$user,$pass,$db);

if (!($con))
{
	echo "Somthing Wrong";
}




?>