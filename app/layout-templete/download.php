<!--  real template files stored in a folder (templates/) -->

<?php
// Fetch user selection
$fileType = isset($_GET['type']) ? $_GET['type'] : '';
$leafletType = isset($_GET['leaflet']) ? $_GET['leaflet'] : '';

if (!$fileType || !$leafletType) {
    die("Invalid request.");
}

// Map file types correctly
$fileExtensions = [
    "pdf" => "pdf",
    "indesign" => "zip", // InDesign files will be provided in a ZIP format
    "psd" => "psd"
];

if (!isset($fileExtensions[$fileType])) {
    die("Invalid file format.");
}

// Define the correct file path
$filePath = "templates/" . $leafletType . "." . $fileExtensions[$fileType];

// Check if the file exists
if (!file_exists($filePath)) {
    die("Error: The requested template file is not available.");
}

// Serve the file for download
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
header('Content-Length: ' . filesize($filePath));
readfile($filePath);
exit;
?>
