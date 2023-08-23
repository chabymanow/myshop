<?php
    session_start();
    unset($_SESSION["username"]);
    unset($_SESSION["email"]);
    unset($_SESSION["regdate"]);
    unset($_SESSION["message"]);
    session_destroy();
    header("Location: ../index.php");
?>