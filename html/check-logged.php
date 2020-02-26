<?php
$pageName = $_GET['page']; 
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome to the member's area, " . $pageName . "!";
} else {
	header("Location: ". $pageName ."");
}

?>