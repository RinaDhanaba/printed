<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['selected_options']['product'] = $_POST['product'] ?? $_SESSION['selected_options']['product'];
    $_SESSION['selected_options']['size'] = $_POST['size'] ?? $_SESSION['selected_options']['size'];
    $_SESSION['selected_options']['paper'] = $_POST['paper'] ?? $_SESSION['selected_options']['paper'];
}

// Redirect back to the previous page
$redirect_url = $_SERVER['HTTP_REFERER'] ?? '/category'; // Fallback to index.php if no referrer is found
header("Location: $redirect_url");
exit();
