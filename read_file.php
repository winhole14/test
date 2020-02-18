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

/**  Create a new Reader of the type that has been identified  **/
$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);

/**  Load $inputFileName to a Spreadsheet Object  **/
$spreadsheet = $reader->load($inputFileName);

$highestRow = $spreadsheet->getActiveSheet()->getHighestRow();
echo 'highestRow: '.$highestRow; echo '<br>';

$highestRow = $spreadsheet->getActiveSheet()->getHighestDataRow();
echo 'highestRow: '.$highestRow; echo '<br>';

$sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
echo '<pre>';
var_dump($sheetData);

echo "start from here..........";