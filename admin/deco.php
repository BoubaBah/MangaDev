<?php
session_start();
if (isset($_SESSION['connect'])) {
    $_SESSION['connect'] = false;
    session_destroy();
    header("location:../");
} else {
    header("location:../login.php");
}
