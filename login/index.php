
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<h1><strong>Login</strong></h1>
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
		<td><input type="submit" name="login" value="Login"><br><br> </td>
			</tr>
		</table>
		</form>
	</form>
	
</body>
</html>
