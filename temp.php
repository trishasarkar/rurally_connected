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
		mysqli_query($con, $query) or die('mysqli_error($con)');
		?>
		<script type="text/javascript">
			window.location = 'login.php';
			alert("Successfully Added.");
		</script>
<?php
	}
}
?>