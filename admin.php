<?php 
	// Include header file
	include ('include/adminheader.php');
	
	if(isset($_POST['SignIn'])) {

		if(isset($_POST['adminname']) && !empty($_POST['adminname'])) {
			$adminname = $_POST['adminname'];
		} else {
			$adminnameError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Please enter the admin name.</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  			<span aria-hidden="true">&times;</span>
					</button>
	  				</div>';
		}

		if(isset($_POST['password']) && !empty($_POST['password'])) {
			$password = $_POST['password'];
			$password = md5($password);
		} else {
			$passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Please enter the password.</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  			<span aria-hidden="true">&times;</span>
					</button>
	  				</div>';
		}

		//login query

		if(isset($adminname) && isset($password)) {
			if ($adminname === 'aditya' && $password === md5('aytida')) {
				$_SESSION['admin_id'] = 1; // Set a dummy admin ID, you might retrieve it from the database in a real scenario
				header('Location: admindashboard.php'); // Redirect to admindashboard.php
				exit; // Stop script execution after redirection
			} else {
				$submitError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Sorry no match found please enter valid admin name or password.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
				  </div>';
			}
		}
	}
?>

<style>
	/* Your CSS styles */
</style>

<div class="container size">
	<div class="row">
		<div class="col-md-6 offset-md-3 form-container">
			<hr class="red-bar">
		
			<?php if(isset($submitError)) echo $submitError; ?>
			<!-- Error Messages -->

			<form action="" method="post">
				<div class="form-group">
					<label for="adminname">Admin Name</label>
					<input type="text" name="adminname" class="form-control" placeholder="Admin Name" required>
					<?php if(isset($adminnameError)) echo $adminnameError; ?>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" placeholder="Password" required class="form-control">
					<?php if(isset($passwordError)) echo $passwordError; ?>
				</div>
				<div class="form-group">
					<button class="btn btn-danger btn-lg center-aligned" type="submit" name="SignIn">SignIn</button>
				</div>
			</form>
		</div>
	</div>
</div>

<?php include 'include/footer.php'; ?>
