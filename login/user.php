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

	<div class="table">
	<table width='300px' height='300px' padding-left='20px' border='1'>";
			<th>Nume</th>
			<th>Latitudine</th>
			<th>Longitudine</th>
			<th>Culoare</th>
			<th>Dimensiune</th>
<?php
$conn=mysqli_connect("localhost", "root", "") or die(mysqli_error());
mysqli_select_db($conn, "pai1");

$sql_read = "SELECT * FROM locatii2";

$result = mysqli_query($conn, $sql_read);
if(! $result )
{
  die('Could not read data: ' . mysqli_error());
}
while($row = mysqli_fetch_array($result)) {
	$name = $row['Nume'];
	$lat = $row['Latitudine'];
	$long = $row['Longitudine'];
	$cul=$row['Culoare'];
	$dim=$row['Dimensiune'];
	echo '<tr><td>' .$name . '</td><td>' .$lat . '</td><td>' .$long . '</td><td>' .$cul .  '</td><td>' .$dim . '</td><tr>' . "<br> \n";
}
echo "</table>";

?>
</div>
<div>
<form>
	
	<input type="button" value="MAP" onclick="location='MAP.php'" />
	<?php
	

	?>
</form>
</div>
</body>
</html>	