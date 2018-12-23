<!DOCTYPE html>
<?php
include "includes/config.php";

// session_destroy(); LOGOUT

if (isset($_SESSION['userLoggedIn'])) {
    $userLoggedIn = $_SESSION['userLoggedIn'];
} else {
    if (!isset($_SESSION['userLoggedIn'])) {
        header("Location: register.php");
    }
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="includes/assets/css/style.css">
    <title>Welcome to Xamppify</title>
</head>
<body>
    <div id="nowPlayingBarContainer">

        <div id="nowPlayingBar">

        </div>
        
    </div>
</body>
</html>