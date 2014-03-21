<?php
$con=mysqli_connect('localhost','root','sqrt4ber','PHPDB');
// test connection
if (mysqli_connect_errno())
	{
	echo "Failed to connect " .mysql_connect_error();
	}
$sql = "SELECT FirstName,LastName FROM Persons WHERE FirstName != ''";
	
$result = mysqli_query($con,$sql );

echo "<table border='1'>
<tr>
<th>FirstName</th>
<th>LastName</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>" .$row['FirstName'] . "</td>";
	echo "<td>" .$row['LastName'] . "</td>";
	echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>