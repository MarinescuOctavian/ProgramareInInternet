<?php
session_start();
?>

<!DOCTYPE html>


<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>

<style type="text/css">

#top{

	margin: 50px auto 30px;
 
  padding: 10px;
	position: fixed;
	top: 40px
	right: 1400px;
	width: 600px;


 /* max-width: 360px;
  margin: 0 auto 100px;
*/

  box-shadow: 0 0 25px 0 rgba(0, 0, 0, 0.2), 0 0px 25px 0 rgba(0, 0, 0, 0.5);
}

#tat{	
margin: 200px 0 0;
  font-size: 10px;
  padding: 10px;
position: fixed;
top: 120px
right: 600px;
width: 380px;

}

#test{

}


</style>

<body>
		<div id="top">
	<h1><strong><font size="50">Login</font></strong></h1>
</div>
		<div id="tat">
	<form action="login.php" method="POST"> 
		<table id="mytable">
			<tr>
				<td><select name="type">
				
					<option value="Admin">Admin</option>
					<option vale="User">User</option>
				</select></td>
			</tr>
			<tr>
		<td><input type="text" name="username" placeholder="Username"><br><br> </td>
			</tr>
			<tr>
		<td><input type="password" name="password" placeholder="Password"><br><br> </td>
			</tr>
			<tr>
		<td><input type="submit" value="Login" ><br><br> </td>
			</tr>
		</table>
		</form>
	</form>
</div>
</body>
</html>
