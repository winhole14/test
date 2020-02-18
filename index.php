<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// echo upload_tmp_dir();
// echo sys_get_temp_dir();die;
// echo upload_tmp_dir();die;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->getColumnDimension('A')->setWidth(5);
$sheet->getColumnDimension('B')->setWidth(20);
$sheet->getColumnDimension('C')->setWidth(30);
$sheet->getColumnDimension('D')->setWidth(40);
$sheet->getColumnDimension('E')->setWidth(50);
$sheet->getColumnDimension('F')->setWidth(20);
# cell headers
$sheet->setCellValue('A1', 'Id');
$sheet->setCellValue('B1', 'Name');
$sheet->setCellValue('C1', 'Email');
$sheet->setCellValue('D1', 'Subject');
$sheet->setCellValue('E1', 'Message');
$sheet->setCellValue('F1', 'Date');
# cell values
$sheet->setCellValue('A2', '1');
$sheet->setCellValue('B2', 'Prince Ag');
$sheet->setCellValue('C2', 'princeag01@gmail.com');
$sheet->setCellValue('D2', 'Best wishes for your upcoming website launch');
$sheet->setCellValue('E2', 'Hi buddy, what\'s up..');
$sheet->setCellValue('F2', '2020-02-13 22:33:20');
// echo __DIR__;die;
$filepath = __DIR__ . "/reports/hello_world".".xlsx";
$writer = new Xlsx($spreadsheet);
$writer->save($filepath);


echo "start from here..........";