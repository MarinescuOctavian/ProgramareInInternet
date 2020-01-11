<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<meta charset="UTF-8">
	<title>Bun venit pe pagina de Admin</title>
</head>

<style type="text/css">

#top{
	position: relative;
	top: 40px
	right: 700px;
	width: 1700px;
  
  max-width: 360px;
  margin: 0 auto 100px;

  
  box-shadow: 0 0 25px 0 rgba(0, 0, 0, 0.2), 0 0px 25px 0 rgba(0, 0, 0, 0.5);
}

#tat{	
margin: 50px 0 0;
  font-size: 30px;
position: relative;
top: 0
right: 200px;
width:200px;

}

#test{


width: 1250px;
}


</style>

<body>
		<div id="top">

			<h1> BUN VENIT PE PAGINA Adminilor</h1>
		</div>

		<div id="tat">

			<form method="POST">
				<table>
			<tr>
				<td><input type="text" name="nume" placeholder="Introduceti numele"></td>
			</tr>
			<tr>
				<td><input type="VALUES" name="latitudine" placeholder="Introduceti latitudinea"></td>
			</tr>
			<tr>
				<td><input type="VALUES" name="longitudine" placeholder="Introduceti longitudinea"></td>
			</tr>
			<tr>
				<td><input type="VALUES" name="culoare" placeholder="Introduceti culoarea"></td>
			</tr>
			<tr>
				<td><input type="VALUES" name="dimensiune" placeholder="Introduceti dimensiunea"></td>
			</tr>
			<tr>
				<td><input type="submit" name="refacere" value="submit"></td>
			</tr>
		</table>
		</div>
		<div>
<?php

$conn=mysqli_connect("localhost", "root", "") or die(mysqli_error());
mysqli_select_db($conn, "pai1");
if (isset($_POST['name'], $_POST['lat'], $_POST['long'], $_POST['cul'], $_POST['dim'])){	
	$name = $_POST['name'];
	$lat = $_POST['lat'];
	$long = $_POST['long'];
	$cul= $_POST['cul'];
	$dim= $_POST['dim'];
}
	if(!empty($name) && !empty($lat) && !empty($long) && !empty($cul) && !empty($dim)){
$sql_insert="INSERT INTO locatii2 (name, lat, long, cul, dim) VALUES ('$name', '$lat', '$long', '$cul', '$dim')";

$retval = mysqli_query($conn, $sql_insert);
if(! $retval )
{
  die('Could not insert data: ' . mysqli_error());
}
echo "Data inserted successfully\n";
}else {
	echo "Completati toate chenarele";
}

?>

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
<div id="test">
<form>
	
	<input type="button" value="MAP" onclick="location='MAP.php'" />

</div>
</form>
</div>
    
</body>
</html>