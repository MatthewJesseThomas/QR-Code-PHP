<?php
echo "Generating QR Code";

require_once("phpqrcode/qrlib.php");

// How to save PNG codes to the server
$tempDir = "qrcodes/";

$codeContents = 'https://my-portfolio-vuejs-28cb2.firebaseapp.com/';

// Generate a filename using md5 hash
$fileName = '005_file_' . md5($codeContents) . '.png';

$pngAbsoluteFilePath = $tempDir . $fileName;
$urlRelativeFilePath = $tempDir . $fileName;

// Generating
if (!file_exists($pngAbsoluteFilePath)) {

    echo 'File generated!';
    echo '<hr />';
} else {
    echo 'File already generated! We can use this cached file to speed up the site on common codes!';
    echo '<hr />';
}

echo 'Server PNG File: ' . $pngAbsoluteFilePath;
echo '<hr />';

// Displaying
echo '<img src="' . $urlRelativeFilePath . '" />';