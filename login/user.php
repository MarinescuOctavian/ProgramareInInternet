<?php
session_start();
?>
<!DOCTYPE html>
<?php
 if($_SESSION['loggedIn']){
 	?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<meta charset="UTF-8">
	<title>Bun venit utilizatorule</title>
</head>

<style type="text/css">

#top{
	 position:absolute;
    transition: .5s ease;
    top: 3%;
    left: 40%;
  
  max-width: 360px;
  margin: 0 auto 100px;

  
  box-shadow: 0 0 25px 0 rgba(0, 0, 0, 0.2), 0 0px 25px 0 rgba(0, 0, 0, 0.5);
}

#raaa{
	 position:absolute;
    transition: .5s ease;
    top:10%;
    left: 2%;
}

#test{

position:absolute;
    transition: .5s ease;
    top:50%;
    left: 10%;
}


}




</style>


<body>
	<div id="top">
		<h1>Bun venit utilizatorule</h1>

	</div>

	<div id="raaa" class="table">
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
<div id="test">
<form>
	
	<input type="button" value="MAP" onclick="location='MAP.php'" />
	<?php
	

	?>
</form>
</div>
</body>
<?php
}

 else
      header('Location: /login/index.php'); 
  ?>
</html>	