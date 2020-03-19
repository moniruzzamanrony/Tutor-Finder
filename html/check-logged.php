<?php
$pageName = $_GET['page']; 
session_start();

if (isset($_SESSION['userId']) && $_SESSION['loggedin'] == true) {
    echo "Welcome to the member's area, " . $pageName . "!".$_SESSION['userId'];
} else {
	header("Location: ". $pageName ."");
}

?>