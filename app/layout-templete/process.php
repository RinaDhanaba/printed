<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['selected_options']['product'] = $_POST['product'];
    $_SESSION['selected_options']['size'] = $_POST['size'];
}

header("Location: " . $_SERVER['HTTP_REFERER']);
exit();
?>
