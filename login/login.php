<?php
session_start();
require 'ceva.php'; //contectarea la baza de date

	$type=$_POST['type'];
	$username=$_POST['username'];
	$password=$_POST['password'];



$sql= "SELECT * FROM login WHERE username ='$username' and password='$password' and type='$type'";  // selecteaza din baza de date login
$rezultat= mysqli_query($con, $sql);  //conectare si interogare

while($rand=$rezultat->fetch_assoc()) //preia coloanele intr-un array
{
	if($rand['username'] == $username && $rand['password'] == $password && $rand['type'] == 'Admin') //verificare array
	{

		$_SESSION['loggedIn'] = true;
		header("Location: admin.php"); //muta in pagina admin.php
		exit;
	}else if ($rand['username'] == $username && $rand['password'] == $password && $rand['type'] == 'User'){
		header("Location: user.php");
		exit;
	}

	
}
header("Location: index.php");

 


																							
