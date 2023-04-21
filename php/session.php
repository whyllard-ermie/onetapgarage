<?php
    session_start();
    if(!isset($_SESSION["name"])) {
        header("Location: loginmodal.php");
        exit();
    }
?>