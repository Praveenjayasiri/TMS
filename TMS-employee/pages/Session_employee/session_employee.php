<?php
session_start();

if (!isset($_SESSION['email']) && !isset($_SESSION['emp_id']) || ($_SESSION['email']) == 'admin@gmail.com') {
    header("Location: http://localhost/TMS/index.php");
    exit();
}
?>
