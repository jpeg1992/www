<?php
$con=mysqli_connect('localhost','root','sqrt4ber','PHPDB');
// test connection
if (mysqli_connect_errno())
	{
	echo "Failed to connect " .mysql_connect_error();
	}
	
$sql = "INSERT INTO Persons (FirstName, LastName, Age)
VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";

if(!mysqli_query($con,$sql))
	{
	die('Error: ' .mysql_error($con));
	}
echo "one record added";

mysqli_close($con);
?>