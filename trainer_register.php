<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>My trainer</title>
</head>

<body>
<div class="form1">
		<div class="header">
			<h1>Registration for Trainer</h1>
		</div>

		<table>
			<form method="post" name="register">

				<tr>
					<td>
						<label>Full Name</label>
					</td>
					<td>
						<input type="text" name="trainer_name" required>
					</td>
				</tr>
				<tr>
					<td><label>Email Id</label></td>
					<td><input type="email" name="trainer_emailid" required></td>
				</tr>
				<tr>
					<td><label>Mobile Number</label></td>
					<td><input type="int" name="trainer_mobilenumber" required></td>
				</tr>
				<tr>
					<td><label>Password</label></td>
					<td><input type="password" name="trainer_password1" required></td>
				</tr>
				<tr>
					<td><label>Confirm Password</label></td>
					<td><input type="password" name="trainer_password2" required></td>
				</tr>
                <tr>
					<td><label>Location</label></td>
					<td><input type="text" name="trainer_location" required></td>
				</tr>
                <tr>
					<td><label>Skills</label></td>
					<td><input type="text" name="trainer_skills" required></td>
				</tr>
		</table>
		<div><button type="submit" class="btn btn1" name="submit_register_trainer">REGISTER</button></div>

		<a href="trainer_login.php ">Already a member? Login</a>
		</form>

	</div>
</body>

</html>