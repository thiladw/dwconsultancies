<?php
// Include Composer's autoloader to load dependencies
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Create a new spreadsheet
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Set values in the first row and column
$sheet->setCellValue('A1', 'Hello World!');
$sheet->setCellValue('A2', 'This is a sample Excel file using PhpSpreadsheet.');

// Write to an Excel file
$writer = new Xlsx($spreadsheet);
$writer->save('sample_excel.xlsx'); // Saves the Excel file in the current directory
