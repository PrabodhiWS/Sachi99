<?php

//connection

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "hotel";

$con = mysqli_connect($servername,$username,$password,$dbname);

if(!$con)
{
	die ("Connection failure". mysqli_connect_error());
}
else
{
	$Name = $_POST['user'];
	$User_Name = $_POST['userone'];
	$Password = $_POST['Password'];
	$Email_Address = $_POST['Email'];

	$sql = "INSERT INTO registraion VALUES('$Name','$User_Name','$Password','$Email_Address')";

	if(mysqli_query($con,$sql)==True)
	{
		echo "Record added successfully!";
	}
	else
	{
		echo "Error";
	}
}

?>