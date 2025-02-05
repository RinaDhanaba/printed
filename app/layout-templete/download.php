<?php
// Fetch user selection
$fileType = isset($_GET['type']) ? $_GET['type'] : '';
$leafletType = isset($_GET['leaflet']) ? $_GET['leaflet'] : '';

if (!$fileType || !$leafletType) {
    die("Invalid request.");
}

// Define leaflet dimensions
$leaflets = [
    "a4_dl_roll" => ["name" => "A4 folded to DL Leaflet - Roll Fold", "bleed_width" => 303, "bleed_height" => 426],
    "a4_a5" => ["name" => "A4 folded to A5 Leaflet", "bleed_width" => 154, "bleed_height" => 111],
    "a4_dl_z" => ["name" => "A4 folded to DL Leaflet - Z Fold", "bleed_width" => 426, "bleed_height" => 303]
];

if (!isset($leaflets[$leafletType])) {
    die("Invalid leaflet type.");
}

$leaflet = $leaflets[$leafletType];
$filename = $leafletType . "." . $fileType;

// Set headers for download
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . $filename . '"');

// Generate content based on file type
switch ($fileType) {
    case 'pdf':
        echo "PDF Template for " . $leaflet["name"] . " (" . $leaflet["bleed_width"] . "mm x " . $leaflet["bleed_height"] . "mm)";
        break;
    case 'indesign':
        echo "InDesign Template for " . $leaflet["name"] . " (" . $leaflet["bleed_width"] . "mm x " . $leaflet["bleed_height"] . "mm)";
        break;
    case 'psd':
        echo "Photoshop Template for " . $leaflet["name"] . " (" . $leaflet["bleed_width"] . "mm x " . $leaflet["bleed_height"] . "mm)";
        break;
    default:
        die("Invalid file format.");
}

exit;
