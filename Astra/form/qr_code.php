<?php
// Include the library
require_once 'path/to/BaconQrCode/src/BaconQrCode/Writer.php';
require_once 'path/to/BaconQrCode/src/BaconQrCode/Renderer/ImageRenderer.php';
require_once 'path/to/BaconQrCode/src/BaconQrCode/Renderer/Image/Png.php';

use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\Png;
use BaconQrCode\Writer;

// Function to generate QR code
function generateQRCode($data, $outputPath)
{
    // Create a QR code writer
    $writer = new Writer(new ImageRenderer(new Png()));

    // Generate QR code from data
    $qrCode = $writer->writeString($data);

    // Save the QR code image to the output path
    file_put_contents($outputPath, $qrCode);
}

// Example usage
$data = "Hello, World!"; // Replace with your data
$outputPath = "path/to/save/qrcode.png"; // Replace with your desired output path

generateQRCode($data, $outputPath);

echo "QR code generated successfully!";
?>
