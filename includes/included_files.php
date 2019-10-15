<?php

if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
	include("includes/config.php");
	include("includes/classes/user.php");
	include("includes/classes/artist.php");
	include("includes/classes/album.php");
	include("includes/classes/song.php");
	include("includes/classes/play_list.php");
    
    if (isset($_GET['userLoggedIn'])) {
        $userLoggedIn = new User($con, $_GET['userLoggedIn']);
    }
    else {
    	echo "Username variable was not passed into page. Check the openPage JS function";
    	exit();
    }

}
else {
	include("includes/header.php");
	include("includes/footer.php");

	$url = $_SERVER['REQUEST_URI'];
	echo "<script>openPage('$url')</script>";
	exit();
}

?>