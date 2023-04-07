<?php
// Include mPDF library using CDN link
require_once('https://cdnjs.cloudflare.com/ajax/libs/mpdf/8.0.10/autoload.php');

// Start output buffering
ob_start();

// Include your PHP page
include 'displaydetails.php';

// Get the output
$html = ob_get_clean();

// Create new mPDF object
$mpdf = new \Mpdf\Mpdf();

// Generate PDF from HTML content
$mpdf->WriteHTML($html);

// Output the PDF file and prompt the user to download it
$mpdf->Output('my_pdf_file.pdf', 'D');
?>