<?php
require('core/init.php');
include("includes/handlers/login-handler.php");

if (isset($_SESSION['userloggedIn'])) {

	$userLoggedIn = $_SESSION['userloggedIn'];

} else {

	header('Location: register.php');
}

?>


<html>

<head>
	<title>
		<?= SITE_TITLE ?>
	</title>
	<?php include('includes/components/head.php') ?>
	<link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

	<!--The main Container-->
	<div id="main-container">

		<!--The top Container-->
		<div id="top-container">
			<div id="navbar-container">

				<nav class="navbar">

					<a href="index.php" class="logo">
						<img src="assets/images/logo.png">
					</a>
					<div class="group">
						<div class="navItem">
							<a href="search.php" class="nav-itemlink">Search
                               <img src="assets/images/icons/search2.png">


							</a>
						</div>

					</div>
					<div class="group">
						<div class="navItem">
							<a href="browse.php" class="nav-itemlink">Browse</a>
						</div>
						<div class="navItem">
							<a href="music.php" class="nav-itemlink">Your Music</a>
						</div>
						<div class="navItem">
							<a href="profile.php" class="nav-itemlink">Profile</a>
						</div>
					</div>
				</nav>
			</div>
		</div>
		<!--End top Container-->


		<!--Bottom Container-->
		<div id="PlayContainer">
			<div id="PlayBar">
				<div id="PlayLeft">
					<div class="content">
						<span class="albumLink">
							<img src="https://jooinn.com/images/square-4.jpg" class="albumArtwork">
						</span>
						<div class="trackInfo">
							<span class="trackName">
								<span>Gimme the loot</span>
							</span>
							<span class="artistName">
								<span>Notorious Big</span>
							</span>
						</div>
					</div>
				</div>
				<div id="PlayCenter">
					<div class="content playerControls">

						<div class="buttons">

							<button class="controlButton shuffle" title="Shuffle">
								<img src="assets/images/icons/shuffle.png" alt="Shuffle">
							</button>
							<button class="controlButton previous" title="previous">
								<img src="assets/images/icons/previous.png" alt="play">
							</button>
							<button class="controlButton play" title="play">
								<img src="assets/images/icons/play.png" alt="play">
							</button>
							<button class="controlButton pause" title="pause" style="display:none;">
								<img src="assets/images/icons/pause.png" alt="pause">
							</button>
							<button class="controlButton next" title="next">
								<img src="assets/images/icons/next.png" alt="next">
							</button>
							<button class="controlButton repeat" title="repeat">
								<img src="assets/images/icons/repeat.png" alt="repeat">
							</button>

						</div>
						<div class="playbackbar">
							<span class="progressTime current">0.00</span>

							<div class="progressBar">

								<div class="progressBg">

									<div class="progress"></div>

								</div>

							</div>
							<span class="progressTime remaining">0.00</span>
						</div>
					</div>
				</div>
				<div id="PlayRight">
					<div class="volumeBar">
						<button class="controlButton volume" title="Volume">
							<img src="assets/images/icons/volume.png" alt="Volume">
						</button>
						<div class="progressBar">
							<div class="progressBg">
								<div class="progress"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end Bottom Container-->
	</div>
	<!--End main Container-->
</body>

</html>