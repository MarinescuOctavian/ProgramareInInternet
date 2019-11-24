<?php
require 'conectare.php';

$username= $_Post['username'];
$password= $_POST['password'];
$telefon= $_POST['telefon'];
$Nume= $_POST['Nume'];
$Prenume= $_POST['Prenume'];

$sql="INSERT INTO users (username, password, telefon, Nume, Prenume) VALUES('$username', '$password', '$telefon', '$Nume', '$Prenume')";
$results=mysqli_query($conectare, $sql);

header("Location: index.php");
