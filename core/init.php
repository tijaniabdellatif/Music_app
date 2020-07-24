<?php
//Start Session
session_start();

//Helper Function Files
require_once('helpers/function.php');
//Include Configuration
require_once('config/config.php');
include_once ('config/db.php');
//Autoload Classe
spl_autoload_register(function ($class_name) {
    require_once('includes/classes/' . $class_name . '.php');
});