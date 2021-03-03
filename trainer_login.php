<?php
include "connect.php";
if(isset($_POST['submit_login_trainer'])){
	// echo "in if";
	$trainer_emailid = $_POST['trainer_emailid'];
	$trainer_password = $_POST['trainer_password'];
	$query = mysqli_query($con, "SELECT * FROM trainer WHERE trainer_email = '$trainer_emailid' AND trainer_password = '$trainer_password'") or die(mysqli_error($con));;
	$num_rows = mysqli_num_rows($query);
	$row = mysqli_fetch_array($query);
	if($num_rows > 0){
		$_SESSION["id"] = $row['trainer_id'];
		$_SESSION["success"] = 'You are now logged in';
		echo $row['trainer_id'];
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
						Welcome Trainers
					</span>
					<span class="login100-form-avatar">
						<img src="images/pngegg.png" alt="AVATAR">
					</span>

					<div class="wrap-input100 validate-input m-t-85 m-b-35">
						<input class="input100" type="email" name="trainer_emailid" required>
						<!-- <span class="focus-input100" data-placeholder="Username"></span> -->
					</div>

					<div class="wrap-input100 validate-input m-b-50" >
						<input class="input100" type="password" name="trainer_password" required>
						<!-- <span class="focus-input100" data-placeholder="Password"></span> -->
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn" name="submit_login_trainer">Login</button>
					</div>

					<div class="login-more p-t-190">
							<span class="txt1">
								Don’t have an account?
							</span>

							<a href="trainer_register.php" class="txt2">
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