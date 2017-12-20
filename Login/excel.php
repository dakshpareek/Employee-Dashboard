<?php
session_start();
/** Set default timezone (will throw a notice otherwise) */
date_default_timezone_set('Asia/Kolkata');

// include PHPExcel
require('../PHPExcel/Classes/PHPExcel.php');

// create new PHPExcel object
$objPHPExcel = new PHPExcel;

// set default font
$objPHPExcel->getDefaultStyle()->getFont()->setName('Calibri');

// set default font size
$objPHPExcel->getDefaultStyle()->getFont()->setSize(10);

// create the writer
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, "Excel2007");



/**

 * Define currency and number format.

 */

// currency format, € with < 0 being in red color
$currencyFormat = '#,#0.## \€;[Red]-#,#0.## \€';

// number format, with thousands separator and two decimal points.
$numberFormat = '#,#0.##;[Red]-#,#0.##';



// writer already created the first sheet for us, let's get it
$objSheet = $objPHPExcel->getActiveSheet();

// rename the sheet
$objSheet->setTitle('My sales report');



// let's bold and size the header font and write the header
// as you can see, we can specify a range of cells, like here: cells from A1 to A4
$objSheet->getStyle('A1:H1')->getFont()->setBold(true)->setSize(12);



// write header

$objSheet->getCell('A1')->setValue('Month');
$objSheet->getCell('B1')->setValue('Year');
$objSheet->getCell('C1')->setValue('Basic Salary');
$objSheet->getCell('D1')->setValue('Medical Allowance');
$objSheet->getCell('E1')->setValue('Provident Fund');
$objSheet->getCell('F1')->setValue('TDS');
$objSheet->getCell('G1')->setValue('HRA');
$objSheet->getCell('H1')->setValue('Salary in Hand');


// we could get this data from database, but here we are writing for simplicity
				  $servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dashboard";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * from employee_salary where uid=123";
$result = $conn->query($sql);

$a='A';$b='B';$c='C';$d='D';$e='E';$f='F';$g='G';$h='H';
$v=2;
if ($result->num_rows > 0) {
									while($row = $result->fetch_assoc()) 
									{  

$objSheet->getCell($a.$v)->setValue($row["month"]);
$objSheet->getCell($b.$v)->setValue($row["yr"]);
$objSheet->getCell($c.$v)->setValue($row["usalary"]);
$objSheet->getCell($d.$v)->setValue($row["uesi"]);
$objSheet->getCell($e.$v)->setValue($row["upf"]);
$objSheet->getCell($f.$v)->setValue($row["utds"]);
$objSheet->getCell($g.$v)->setValue($row["uhra"]);
$objSheet->getCell($h.$v)->setValue($row["usalhand"]);
$v=$v+1;

									}
}


// autosize the columns
$objSheet->getColumnDimension('A')->setAutoSize(true);
$objSheet->getColumnDimension('B')->setAutoSize(true);
$objSheet->getColumnDimension('C')->setAutoSize(true);
$objSheet->getColumnDimension('D')->setAutoSize(true);
$objSheet->getColumnDimension('E')->setAutoSize(true);
$objSheet->getColumnDimension('F')->setAutoSize(true);
$objSheet->getColumnDimension('G')->setAutoSize(true);
$objSheet->getColumnDimension('H')->setAutoSize(true);

//Setting the header type
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="file.xlsx"');
header('Cache-Control: max-age=0');

$objWriter->save('php://output');

/* If you want to save the file on the server instead of downloading, replace the last 4 lines by 
    $objWriter->save('file.xlsx');
*/

?>