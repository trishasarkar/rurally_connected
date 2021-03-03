<?php
include "connect.php";
if(isset($_POST['submit_login_company'])){
	// echo "in if";
	$company_emailid = $_POST['company_emailid'];
	$company_password = $_POST['company_password'];
	$query = mysqli_query($con, "SELECT * FROM companies_details WHERE company_emailid = '$company_emailid' AND company_password = '$company_password'") or die(mysqli_error($con));;
	$num_rows = mysqli_num_rows($query);
	$row = mysqli_fetch_array($query);
	if($num_rows > 0){
		$_SESSION["id"] = $row['company_id'];
		$_SESSION["success"] = 'You are now logged in';
		echo $row['company_id'];
		?>
		<script>
			alert('Successfully logged in');
			document.location = 'index.php';
		</script>
		<?php
	}else{
		?>
		<script>
			alert('Invalid Username or Password');
		</script>
		<?php
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/util.css"> 
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form method="post" class="login100-form validate-form">
					<span class="login100-form-title p-b-70">
						Welcome
					</span>
					<span class="login100-form-avatar">
						<img src="images/pngegg.png" alt="AVATAR">
					</span>

					<div class="wrap-input100 validate-input m-t-85 m-b-35">
						<input class="input100" type="email" name="company_emailid" required>
						<!-- <span class="focus-input100" data-placeholder="Username"></span> -->
					</div>

					<div class="wrap-input100 validate-input m-b-50" >
						<input class="input100" type="password" name="company_password" required>
						<!-- <span class="focus-input100" data-placeholder="Password"></span> -->
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn" name="submit_login_company">Login</button>
					</div>

					<div class="login-more p-t-190">
							<span class="txt1">
								Don’t have an account?
							</span>

							<a href="company_register.php" class="txt2">
								Sign up
							</a>
						
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	

</body>
</html>