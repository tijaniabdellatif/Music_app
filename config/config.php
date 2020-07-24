<?php

$timezone = date_default_timezone_set("Africa/Casablanca");
//DB Params
define("DB_HOST", "localhost");
define("DB_USER", "sore");
define("DB_PASS", "secret");
define("DB_NAME", "slotify_app");

define("SITE_TITLE", "Welcome To My Music Space");

//Paths
define ('BASE_URI', 'http://'.$_SERVER['SERVER_NAME']. '/slotify/');

?>