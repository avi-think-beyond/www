<?php 
  $objPHPExcel->getDefaultStyle()
    ->getAlignment()
    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

     $objPHPExcel->getDefaultStyle()
    ->getAlignment()
    ->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    $objPHPExcel->getDefaultStyle()->getAlignment()->setWrapText(true);

    $objPHPExcel->getActiveSheet()->freezePane('E3');

$objPHPExcel->getActiveSheet()->setAutoFilter('A2:R2');

$objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(30);

$objPHPExcel->getActiveSheet()->getStyle('1:3')->getFont()->setBold(true)->setName('Calibri')->setSize(11);

$objPHPExcel->getActiveSheet()->getStyle('D1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

 $objPHPExcel->getActiveSheet()->setShowGridlines(FALSE);



$objPHPExcel->getActiveSheet()->getStyle('N1:R1')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'CCCCFF'))))->getAlignment();

$solar_plant_cap=$solar_plant_capacity/1000;


// Set document properties
$objPHPExcel->getProperties()->setCreator("FlexiMC Solutions Pvt Ltd Hidayath")
                             ->setLastModifiedBy("Hidayath Shaik")
                             ->setTitle("Daily Generation Report Execl Sheet")
                             ->setSubject("Daily Generation Report Execl Sheet")
                             ->setDescription(" Solar Daily Generation Report Execl Sheet")
                             ->setKeywords(" Solar Daily Generation Report Execl Sheet")
                             ->setCategory(" Solar Daily Generation Report Execl Sheet");


                              for ($i=0; $i<count($alpa); $i++) { 
                                $objPHPExcel->getActiveSheet()->getColumnDimension($alpa[$i])->setWidth(15);
                               }
                              
                               $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(18);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(18);
                              
                               $objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(25);
                               $objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(30);
                               
                               $objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(25);
                              






$objPHPExcel->setActiveSheetIndex(5)
->setCellValue('A1','Date')
->setCellValue('C1','Feeder (' .$solar_plant_cap.' MW)')
->setCellValue('D1','Plant details')
->setCellValue('E1','Block')
->setCellValue('F1','Inverter')
->setCellValue('G1','Details of Load under Shut Down')
->setCellValue('G2','Module Type')
->setCellValue('H2','DC Capacity in KW')
->setCellValue('I1','Shut Down Duration')
->setCellValue('I2','From')
->setCellValue('J2','To')
->setCellValue('K2','Duration (in min)')
->setCellValue('L1','Reason')
->setCellValue('M2','Reference Inverter Details for Generation Loss  Calculation')
->setCellValue('N1','Calculation of Generation loss due to load shedding')
->setCellValue('N2','Type of Module/Total DC Capacity')
->setCellValue('O2','Starting Generation')
->setCellValue('P2','End Generation')
->setCellValue('Q2','Total Generation')
->setCellValue('R2','Approx Generation Loss due to Load Shedding');



include $Source_path."OpenDb.php";


$currentmonth=date('m');
$Current_year=date('Y');
$Current_year2DIGITS=date('y');
$Current_day=date('d');
$PREVIOUSYR=$Current_year-1;
$PREVIOUSYR2DIGITS=$Current_year2DIGITS-1;

 $row=3;
 $Month_date=array();
 $cnt_da=0;
 $select_Inverter_monthly123="SELECT today_date,kwh_today ,Inverter_id,Inverter_start_time,Inverter_end_time FROM Flexi_solar_inverters_daily WHERE Plant_id=$solar_plant_id and DATE(today_date) BETWEEN '2017-01-01' and '$Current_year-$currentmonth-$Current_day' GROUP BY DATE(today_date),plant_id ORDER BY plant_id,today_date DESC" ;
                $rs161=mysqli_query($conn2,$select_Inverter_monthly123) or die("error 101".mysqli_error($conn2));
                while($row161=mysqli_fetch_array($rs161))
        
               {
                
                $Month=$row161['today_date'];
                $Month_date[$cnt_da]=date('F-Y', strtotime($Month));
                $Month_date_time=date('d/m/y', strtotime($Month)); 
                
                
                $objPHPExcel->setActiveSheetIndex(5)->setCellValue('A'.$row, $Month_date_time);
                
                $row++;
                $Month_date_time='';
                $cnt_da++;
               }

$arow=$row-1;


















  









$objPHPExcel->getActiveSheet()->getStyle('A1'.':'.'R'.$arow)->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN
                )
            )
        ));


$objPHPExcel->getActiveSheet()->getStyle('A3'.':'.'J'.$arow)->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => '99CCFF'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('L3'.':'.'P'.$arow)->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => '99CCFF'))))->getAlignment();
























 $objPHPExcel->getActiveSheet()->mergeCells('C1:C2');
 $objPHPExcel->getActiveSheet()->mergeCells('D1:D2');

 $objPHPExcel->getActiveSheet()->mergeCells('E1:E2');
 $objPHPExcel->getActiveSheet()->mergeCells('F1:F2');
  $objPHPExcel->getActiveSheet()->mergeCells('G1:H1');
 $objPHPExcel->getActiveSheet()->mergeCells('I1:K1');

 
 $objPHPExcel->getActiveSheet()->mergeCells('L1:L2');
 $objPHPExcel->getActiveSheet()->mergeCells('N1:R1'); 
 // $objPHPExcel->getActiveSheet()->mergeCells('H2:AT2');
 //  $objPHPExcel->getActiveSheet()->mergeCells('G2:G4');

//  // $objPHPExcel->getActiveSheet()->mergeCells('H3:J3');
//   $objPHPExcel->getActiveSheet()->mergeCells('K3:M3');
// $objPHPExcel->getActiveSheet()->mergeCells('N3:P3');
// $objPHPExcel->getActiveSheet()->mergeCells('Q3:S3');
// $objPHPExcel->getActiveSheet()->mergeCells('T3:V3');
// $objPHPExcel->getActiveSheet()->mergeCells('W3:Y3');
// $objPHPExcel->getActiveSheet()->mergeCells('Z3:AB3');
// $objPHPExcel->getActiveSheet()->mergeCells('AC3:AE3');
// $objPHPExcel->getActiveSheet()->mergeCells('AF3:AH3');
// $objPHPExcel->getActiveSheet()->mergeCells('AI3:AK3');
// $objPHPExcel->getActiveSheet()->mergeCells('AL3:AN3');
// $objPHPExcel->getActiveSheet()->mergeCells('AO3:AQ3');
// $objPHPExcel->getActiveSheet()->mergeCells('AR3:AT3');

// $objPHPExcel->getActiveSheet()->mergeCells('AV2:AV4');
// $objPHPExcel->getActiveSheet()->mergeCells('AW3:AY3');
// $objPHPExcel->getActiveSheet()->mergeCells('AZ3:BB3');
// $objPHPExcel->getActiveSheet()->mergeCells('BC3:BE3');
// $objPHPExcel->getActiveSheet()->mergeCells('AW2:BE2');






 // $objPHPExcel->getActiveSheet()->mergeCells('W2:W3');


 // $objPHPExcel->getActiveSheet()->mergeCells('Y2:Y3');
 // $objPHPExcel->getActiveSheet()->mergeCells('AA2:AN2');
 // $objPHPExcel->getActiveSheet()->mergeCells('AP2:AV2');


$objPHPExcel->setActiveSheetIndex(5);



?>