<?php
require('core/init.php');
$account = new Account();
include("includes/handlers/register-handler.php");
include("includes/handlers/login-handler.php");
?>

<html>

<head>
	<title><?= SITE_TITLE; ?></title>
	<link rel="stylesheet" href="assets/css/register.css">
</head>

<body>

	<div id="background">

		<div id="inputContainer">
			<form id="loginForm" action="register.php" method="POST">
			<h2>Login to your account</h2>
			<p>
				<?= $account->getError(Constants::$loginFailed); ?>
				<label for="loginUsername">Username</label>
				<input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. bartSimpson" required>
			</p>
			<p>
				<label for="loginPassword">Password</label>
				<input id="loginPassword" name="loginPassword" type="password" placeholder="Your password" required>
			</p>

			<button type="submit" name="loginButton">LOG IN</button>

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

			</form>


		</div>
	</div>



</body>

</html>