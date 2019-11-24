<?php
require 'conectare.php';

$ID=$_POST['ID'];
$password=$_POST['password'];

$sql="UPDATE users SET password='$password' Where ID='$ID'";
$results=mysqli_query($conectare,$sql);

header("Location: index.php");








