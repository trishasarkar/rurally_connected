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
<?php
include "connect.php";
if(isset($_POST['submit_register_trainer'])){
	$trainer_name = $_POST['trainer_name'];
	$trainer_emailid = $_POST['trainer_emailid'];
	$trainer_mobilenumber = $_POST['trainer_mobilenumber'];
	$trainer_password1 = $_POST['trainer_password1'];
	$trainer_password2 = $_POST['trainer_password2'];
	$trainer_location = $_POST['trainer_location'];
	$trainer_skills = $_POST['trainer_skills'];

	if($trainer_password1 != $trainer_password2){
		?>
		<script type="text/javascript">
			alert("The passwords do not match");
		</script>
	<?php
	}else{
		$query = "INSERT INTO trainer(trainer_name,trainer_email,trainer_number,trainer_password,trainer_location,trainer_skills) 
		VALUES ('$trainer_name','$trainer_emailid','$trainer_mobilenumber','$trainer_password1','$trainer_location','$trainer_skills')";
		mysqli_query($con, $query) or die(mysqli_error($con));
		?>
		<script type="text/javascript">
			window.location = 'trainer_login.php';
			alert("Successfully Added.");
		</script>
<?php
	}
}
?>