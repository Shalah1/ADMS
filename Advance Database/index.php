<?php

session_start();
if(isset($_SESSION["Username"])) {
    header("Location: view/home.php");
} else {
    header("Location: View/MainPage.php");
}