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
    <script src="assets/js/classes/Audio.js"></script>
</head>

<body>
    <!--The main Container-->
    <div id="main-container">
        <!--The top Container-->
        <div id="top-container">
            <?php include 'includes/components/nav.php'; ?>
            <div id="main-view">
                <div id="main-content">