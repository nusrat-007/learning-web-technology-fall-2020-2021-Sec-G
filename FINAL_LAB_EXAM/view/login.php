<!DOCTYPE html>
<html>
<head>
	<title>webage</title>
</head>
<body>
	<form method="post" action="../php/logincheck.php">
		<fieldset>
			<legend>LOGIN</legend>
			<table>
				<tr>
					<td>Username</td>
					<td>
                        <input type="text" name="username">
                    </td>
				</tr>
				<tr>
					<td>Password</td>
					<td>
                        <input type="password" name="password">
                    </td>
				</tr>
				
				<tr>
					<td></td>
					<td>
                        <input type="submit" name="submit" value="Submit">
                    </td>
				</tr>
			</table>
		</fieldset>
    </form>
    
</body>
</html>

<?php

	if(isset($_GET['msg'])){
		
        if($_GET['msg'] == "invalid_user")
        {
			echo "Invalid Username or Password!";
		}

        if($_GET['msg'] == "null_username")
        {
			echo "Username is empty!!!";
		}

        if($_GET['msg'] == "null_password")
        {
			echo "Password is empty!!!";
		}

        if($_GET['msg'] == "user_deleted")
        {
			echo "User deleted! Register again.";
			include('../php/logout.php');
		}
	}
?>
