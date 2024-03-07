<?php

require_once __DIR__ . '/vendor/autoload.php';

$id = $_GET["id"]; 

$param = $id ;

// Get the content of the PHP file
ob_start();
include 'content.php';
$html = ob_get_clean();

// Define the configuration for mPDF
$mpdfConfig = [
    'mode' => 'utf-8',
    'format' => 'A4-L', // A4 landscape
    'default_font_size' => 0,
    'default_font' => '',
    'margin_left' => 10,
    'margin_right' => 10,
    'margin_top' => 15,
    'margin_bottom' => 16,
    'margin_header' => 9,
    'margin_footer' => 9,
    'orientation' => 'L', // Landscape orientation
];

$mpdfConfig = [
    'mode' => 'utf-8',
    'format' => 'A4', // A4 portrait
    'default_font_size' => 0,
    'default_font' => '',
    'margin_left' => 10,
    'margin_right' => 10,
    'margin_top' => 15,
    'margin_bottom' => 16,
    'margin_header' => 9,
    'margin_footer' => 9,
    'orientation' => 'P', // Portrait orientation
];
$mpdf = new \Mpdf\Mpdf($mpdfConfig);
$mpdf->WriteHTML($html);
$mpdf->Output();