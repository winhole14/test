<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// echo upload_tmp_dir();
// echo sys_get_temp_dir();die;
// echo upload_tmp_dir();die;

$inputFileName = __DIR__ . "/reports/hello_world".".xlsx";

/**  Identify the type of $inputFileName  **/
$inputFileType = \PhpOffice\PhpSpreadsheet\IOFactory::identify($inputFileName);
// echo $inputFileType;die;

/**  Create a new Writer of the type that has been identified  **/
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);

/**  Load $inputFileName to a Spreadsheet Object  **/
$sheet = $spreadsheet->getActiveSheet();

$highestRow = $spreadsheet->getActiveSheet()->getHighestDataRow();
$row = $highestRow + 1;
echo 'row: '.$row; echo '<br>';

$sheet->setCellValue('A'.$row, '3');
$sheet->setCellValue('B'.$row, 'Prince Ag');
$sheet->setCellValue('C'.$row, 'princeag01@gmail.com');
$sheet->setCellValue('D'.$row, 'Best wishes for your upcoming website launch');
$sheet->setCellValue('E'.$row, 'Hi buddy, what\'s up..');
$sheet->setCellValue('F'.$row, '2020-02-13 22:33:20');

$writer = new Xlsx($spreadsheet);
$writer->save($inputFileName);

echo "start from here..........";