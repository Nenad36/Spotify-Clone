<?php 
include("includes/config.php");
include("includes/classes/user.php");
include("includes/classes/artist.php");
include("includes/classes/album.php");
include("includes/classes/song.php");
include("includes/classes/play_list.php");


if (isset($_SESSION['userLoggedIn'])) {
	 $userLoggedIn = new User($con, $_SESSION['userLoggedIn']);
	 $username = $userLoggedIn->getUsername();
	 echo "<script>userLoggedIn = '$username'</script>";
}
else {
	header("Location: register.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Welcome to Slotify!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="assets/js/script.js"></script>
</head>
<body>

 <div id="mainContainer">

 	<div id="topContainer">
       <?php include("includes/nav_bar_container.php"); ?>

       <div id="mainViewContainer">
       	 <div id="mainContent">