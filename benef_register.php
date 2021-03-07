<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>My benef</title>
</head>

<body>
	<div class="form1">
		<div class="header">
			<h1>Registration for Beneficiaries</h1>
		</div>

		<table>
			<form method="post" name="register">

				<tr>
					<td>
						<label>Full Name</label>
					</td>
					<td>
						<input type="text" name="benef_name" required>
					</td>
				</tr>
				<tr>
					<td>
						<label>Address</label>
					</td>
					<td>
						<input type="varchar" name="benef_address" required>
					</td>
				</tr>
				<tr>
					<td><label>Email Id</label></td>
					<td><input type="email" name="benef_emailid" required></td>
				</tr>
				<tr>
					<td><label>Mobile Number</label></td>
					<td><input type="int" name="benef_mobilenumber" required></td>
				</tr>
				<tr>
					<td><label>Password</label></td>
					<td><input type="password" name="benef_password1" required></td>
				</tr>
				<tr>
					<td><label>Confirm Password</label></td>
					<td><input type="password" name="benef_password2" required></td>
				</tr>
				<tr>
					<td><label>Location</label></td>
					<td><input type="text" name="benef_location" required></td>
				</tr>
				<tr>
					<td><label>Category</label></td>
					<td>
						<select name="benef_category" id="benef_category">
							<option value="" selected>None</option>
							<option value="farmwaste" selected>Farmwaste</option>
							<option value="handicraft" selected>Handicraft</option>
							<option value="farmproduce" selected>Farm Produce</option>
							<option value="pottery" selected>Pottery</option>
						</select>
					</td>
				</tr>
		</table>
		<div><button type="submit" class="btn btn1" name="submit_register_benef">REGISTER</button></div>

		<a href="benef_login.php">Already a member? Login</a>
		</form>

	</div>
</body>

</html>
<?php
include "connect.php";
if(isset($_POST['submit_register_benef'])){
	$benef_name = $_POST['benef_name'];
	$benef_address = $_POST['benef_address'];
	$benef_emailid = $_POST['benef_emailid'];
	$benef_mobilenumber = $_POST['benef_mobilenumber'];
	$benef_password1 = $_POST['benef_password1'];
	$benef_password2 = $_POST['benef_password2'];
	$benef_location = $_POST['benef_location'];
	$benef_category = $_POST['benef_category'];

	if($benef_password1 != $benef_password2){
		?>
		<script type="text/javascript">
			alert("The passwords do not match");
		</script>
	<?php
	}else{
		$query = "INSERT INTO beneficiaries_details(benef_name,benef_address,benef_emailid,benef_mobilenumber,benef_password,benef_location,benef_category) 
		VALUES ('$benef_name','$benef_address','$benef_emailid','$benef_mobilenumber','$benef_password1','$benef_location','$benef_category')";
		echo $query;
		mysqli_query($con, $query) or die(mysqli_error($con));
		?>
		<script type="text/javascript">
			window.location = 'benef_login.php';
			alert("Successfully Added.");
		</script>
<?php
	}
}
?>