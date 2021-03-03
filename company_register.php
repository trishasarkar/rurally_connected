<?php
include('connect.php');
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>My Company</title>
</head>

<body>
	<div class="form1">
		<div class="header">
			<h1>Registration for Companies</h1>
		</div>

		<table>
			<form method="post" name="register">

				<tr>
					<td>
						<label>Full Name</label>
					</td>
					<td>
						<input type="text" name="company_name" required>
					</td>
				</tr>

				<tr>
					<td>
						<label>Address</label>
					</td>
					<td>
						<input type="varchar" name="company_address" required>
					</td>
				</tr>
				<tr>
					<td><label>Email Id</label></td>
					<td><input type="email" name="company_emailid" required></td>
				</tr>
				<tr>
					<td><label>Mobile Number</label></td>
					<td><input type="int" name="company_number" required></td>
				</tr>
				<tr>
					<td><label>Password</label></td>
					<td><input type="password" name="company_password1" required></td>
				</tr>
				<tr>
					<td><label>Confirm Password</label></td>
					<td><input type="password" name="company_password2" required></td>
				</tr>
				<tr>
					<td><label>Location</label></td>
					<td><input type="text" name="company_location" required></td>
				</tr>
				<tr>
					<td><label>Category</label></td>
					<td>
						<select name="company_category" id="company_category">
							<option value="" selected>None</option>
							<option value="farmwaste" selected>Farmwaste</option>
							<option value="handicraft" selected>Handicraft</option>
							<option value="farmproduce" selected>Farm Produce</option>
							<option value="pottery" selected>Pottery</option>
						</select>
					</td>
				</tr>
		</table>
		<div><button type="submit" class="btn btn1" name="submit_register_company">REGISTER</button></div>

		<a href="company_login.php">Already a member? Login</a>
		</form>

	</div>
</body>

</html>
<?php
include "connect.php";
if(isset($_POST['submit_register_company'])){
	$company_name = $_POST['company_name'];
	$company_address = $_POST['company_address'];
	$company_emailid = $_POST['company_emailid'];
	$company_number = $_POST['company_number'];
	$company_password1 = $_POST['company_password1'];
	$company_password2 = $_POST['company_password2'];
	$company_location = $_POST['company_location'];
	$company_category = $_POST['company_category'];

	if($company_password1 != $company_password2){
		?>
		<script type="text/javascript">
			alert("The passwords do not match");
		</script>
	<?php
	}else{
		$query = "INSERT INTO companies_details(company_name,company_address,company_emailid,company_number,company_password,company_location,company_category) 
		VALUES ('$company_name','$company_address','$company_emailid','$company_number','$company_password1','$company_location','$company_category')";
		mysqli_query($con, $query) or die(mysqli_error($con));
		?>
		<script type="text/javascript">
			window.location = 'login.php';
			alert("Successfully Added.");
		</script>
<?php
	}
}
?>