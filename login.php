<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="css/style-login.css">
  <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
</head>

<body>


<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form method="POST" action="signup_action.php">
			<h1>Create Account</h1>
			<input type="text" placeholder="Name" name="name"/>
			<input type="email" placeholder="Email" name="email"/>
			<input type="password" placeholder="Password" name="pass"/>
			<input type="submit" href="login.php" value="Sign Up">
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form method="POST" action="login_action.php">
			<h1>Sign in</h1>			
			<input type="name" placeholder="Name" name="name"/>
			<input type="password" placeholder="Password" name="pass"/>
			<a href="#">Forgot your password?</a>
			<input type="submit" value="Sign In">
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal details</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hi There!</h1>
				<p>Enter your personal details to open an account with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<script src="js/script-login.js" charset="utf-8"></script>
</body>

</html>
