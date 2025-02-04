<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['preset'] = $_POST['preset'];
    $_SESSION['product'] = $_POST['product'];
    $_SESSION['size'] = $_POST['size'];

    echo "<h2>Form Submitted Successfully</h2>";
    echo "<p><strong>Preset:</strong> " . $_SESSION['preset'] . "</p>";
    echo "<p><strong>Product:</strong> " . $_SESSION['product'] . "</p>";
    echo "<p><strong>Size:</strong> " . $_SESSION['size'] . "</p>";

    echo '<br><a href="/category">Go Back</a>';
} else {
    header("Location: /category");
}
?>
