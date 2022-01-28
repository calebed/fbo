<?php 
	include('./models/Customer.php');
	$errors = array('email' =>'', 'name' => '', 'password' => '', 'password_confirm' => '');

	if(isset($_POST['submit'])) {
		if(empty($_POST['email'])) {
			$errors['email'] = 'You must provide an email.';
		} else {
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$errors['email'] = 'The email must be a valid email address';
			}
		}

		if(empty($_POST['customer_name'])) {
			$errors['name'] = 'A name is required to sign up.';
		} else {
			$name = $_POST['customer_name'];
			if(!preg_match('/^[a-zA-z\s]+$/', $name)) {
				$errors['name'] = 'Your name can only contain letters and spaces.';
			}
		}

		if(empty($_POST['password'])) {
			$errors['password'] = 'You must enter a password';
		}

		if(empty($_POST['password_confirm'])) {
			$errors['password_confirm'] = 'You must confirm your password';
		}

		if($_POST['password'] != $_POST['password_confirm']) {
			$errors['password_confirm'] = 'Your passwords do not match!';
		}

		$hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		echo $hashed_password;
		if(array_filter($errors)) {
			//
		} else {
			Customer::saveCustomer($_POST['email'], $_POST['customer_name'], $hashed_password);
			//header('Location: index.php');
		}

	}
?>


<?php include("./views/header.php") ?>

<form class="container-fluid brand-side-borders justify-content-center mt-5 mb-5" style="max-width: 460px !important; padding: 15px;" action="signup.php" 	method="POST">
	<div class="mb-3">
		<label for="signupInputEmail" class="form-label" style="color:white !important;">Email Address</label>
		<input name="email" type="email" class="form-control" id="signupInputEmail" aria-describedby="emailHelp">
		<div style="color: red;"><?php echo $errors['email'] ?></div>
	</div>
	<div class="mb-3">
		<label for="signupName" class="form-label" style="color:white !important;">Name</label>
		<input name="customer_name" type="text" class="form-control" id="signupName" placeholder="First and Last">
		<div style="color: red;"><?php echo $errors['name'] ?></div>
	</div>
	<div class="mb-3">
		<label for="signupInputPassword1" class="form-label" style="color:white !important;">Password</label>
		<input name="password" type="password" class="form-control" id="signupInputPassword1">
		<div style="color: red;"><?php echo $errors['password'] ?></div>
	</div>
	<div class="mb-3">
		<label for="signupInputPassword2" class="form-label" style="color:white !important;">Confirm Password</label>
		<input name="password_confirm" type="password" class="form-control" id="signupInputPassword2">
		<div style="color: red;"><?php echo $errors['password_confirm'] ?></div>
	</div>
	<div style="text-align: center !important;">
    	<input name="submit" type="submit" value="Sign Up" class="btn btn-secondary" style="background-color: #D78617;"></input>
  	</div>
</form>

<?php include("./views/footer.php") ?>