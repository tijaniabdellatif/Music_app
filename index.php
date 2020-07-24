<?php
require('core/init.php');
include("includes/handlers/login-handler.php");

if(isset($_SESSION['userloggedIn'])){

	$userLoggedIn = $_SESSION['userloggedIn'];
}

else{

	header('Location: register.php');
}

?>


<html>
<head>
	<title>Welcome to Slotify!</title>
</head>

<body>
	Hello!
</body>

</html>