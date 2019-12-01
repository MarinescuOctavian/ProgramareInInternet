<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<meta charset="UTF-8">
	<title>Bun venit utilizatorule</title>
</head>
<body>
	<div>
		<h1>Bun venit utilizatorule</h1>

	</div>

	<div class="tabellatitudini">
		<table width='300px' height='300px' padding-left='20px' border='1'>";
			<th>ID</th>
			<th>Latitudine</th>
			<th>Longitudine</th>
		<?php
$conn=mysqli_connect("localhost", "root", "") or die(mysqli_error());
mysqli_select_db($conn, "pai");

$sql_read = "SELECT * FROM locatii";

$result = mysqli_query($conn, $sql_read);
if(! $result )
{
  die('Could not read data: ' . mysqli_error());
}
while($row = mysqli_fetch_array($result)) {
	$id = $row['ID'];
	$lat = $row['Latitudine'];
	$long = $row['Longitudine'];
	echo '<tr><td>' .$id . '</td><td>' . $lat . '</td><td>' . $long . '</td></tr>' . "<br>\n";
}
echo "</table>";
?>

	</div>
</body>
</html>	