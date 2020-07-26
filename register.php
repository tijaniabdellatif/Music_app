<?php
require('core/init.php');
$account = new Account();
include("includes/handlers/login-handler.php");
include("includes/handlers/register-handler.php");

?>

<html>

<head>
	<title><?= SITE_TITLE; ?></title>
	<?php include 'includes/components/head.php'; ?>
	<link rel="stylesheet" href="assets/css/register.css">
	<link rel="stylesheet" href="assets/css/animate.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/script.js"></script>
</head>

<body>

	<?php
	if (isset($_POST['registerButton'])) : ?>
		<script>
			$(document).ready(function() {
				$('#loginForm').hide();
				$('#registerForm').show();
			});
		</script>
	<?php endif; ?>

	<?php
	if (isset($_POST['loginButton'])) : ?>
		<script>
			$(document).ready(function() {
				$('#loginForm').show();
				$('#registerForm').hide();
			});
		</script>
	<?php endif; ?>

	<div id="background">

		<div id="loginContainer">

			<div id="inputContainer">
				<form id="loginForm" action="register.php" method="POST">
					<h2>Login to your account</h2>
					<p>
						<?= $account->getError(Constants::$loginFailed); ?>
						<label for="loginUsername">Username</label>
						<input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. bartSimpson" value="<?php getInputValue('loginUsername'); ?>" required>
					</p>
					<p>
						<label for="loginPassword">Password</label>
						<input id="loginPassword" name="loginPassword" type="password" placeholder="Your password" required>
					</p>

					<button type="submit" name="loginButton">LOG IN</button>

					<div class="hasAccountText">
						<span id="hideLogin">Don't have an account yet ? Signup here.</span>
					</div>

				</form>

				<form id="registerForm" action="register.php" method="POST">
					<h2>Create your free account</h2>
					<p>

						<?= $account->getError(Constants::$us_err_le); ?>
						<?= $account->getError(Constants::$usernameTaken); ?>
						<label for="username">Username</label>
						<input id="username" name="username" type="text" placeholder="e.g. bartSimpson" value="<?php getInputValue('username'); ?>" required>
					</p>

					<p>
						<?= $account->getError(Constants::$fn_err_le); ?>
						<label for="firstName">First name</label>
						<input id="firstName" name="firstName" type="text" placeholder="e.g. Bart" value="<?php getInputValue('firstName'); ?>" required>
					</p>

					<p>
						<?= $account->getError(Constants::$ln_err_le); ?>
						<label for="lastName">Last name</label>
						<input id="lastName" name="lastName" type="text" placeholder="e.g. Simpson" value="<?php getInputValue('lastName'); ?>" required>
					</p>

					<p>
						<?= $account->getError(Constants::$email_err_ma); ?>
						<?= $account->getError(Constants::$email_err_va); ?>
						<?= $account->getError(Constants::$emailTaken); ?>
						<label for="email">Email</label>
						<input id="email" name="email" type="email" placeholder="e.g. bart@gmail.com" value="<?php getInputValue('email'); ?>" required>
					</p>

					<p>

						<label for="email2">Confirm email</label>
						<input id="email2" name="email2" type="email" placeholder="e.g. bart@gmail.com" value="<?php getInputValue('email2'); ?>" required>
					</p>

					<p>
						<?= $account->getError(Constants::$pass_err_ma); ?>
						<?= $account->getError(Constants::$pass_err_co); ?>
						<?= $account->getError(Constants::$pass_err_le); ?>
						<label for="password">Password</label>
						<input id="password" name="password" type="password" placeholder="Your password" required>
					</p>

					<p>

						<label for="password2">Confirm password</label>
						<input id="password2" name="password2" type="password" placeholder="Your password" required>
					</p>

					<button type="submit" name="registerButton">SIGN UP</button>

					<div class="hasAccountText">
						<span id="hideRegister">Already have an account? Log in here.</span>
					</div>

				</form>


			</div>

			<div id="loginText">
				<h1 class="ml3">Get great music</h1>
				<h2 class="m12">Listen to loads of songs for free</h2>
				<ul>
					<li>Discover Music World</li>
					<li>Create your own playlist</li>
					<li>Follow artists</li>
				</ul>
			</div>


		</div>
	</div>


	<script src="assets/js/animate.js"></script>
	<script src="assets/js/error.js"></script>
</body>

</html>