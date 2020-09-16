<?php 
  $objPHPExcel->getDefaultStyle()
    ->getAlignment()
    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

     $objPHPExcel->getDefaultStyle()
    ->getAlignment()
    ->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    $objPHPExcel->getActiveSheet()->freezePane('B3');


$objPHPExcel->getDefaultStyle()->getAlignment()->setWrapText(true);


$objPHPExcel->getActiveSheet()->getStyle('1:2')->getFont()->setBold(true)->setName('Trebuchet MS')->setSize(10);

$objPHPExcel->getActiveSheet()->setAutoFilter('A2:k2');

$objPHPExcel->getActiveSheet()->getStyle('B1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

 $objPHPExcel->getActiveSheet()->setShowGridlines(FALSE);


$objPHPExcel->getActiveSheet()->getStyle('A2:k2')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();



$objPHPExcel->getProperties()->setCreator("FlexiMC Solutions Pvt Ltd Hidayath")
                             ->setLastModifiedBy("Hidayath Shaik")
                             ->setTitle("Daily Generation Report Execl Sheet")
                             ->setSubject("Daily Generation Report Execl Sheet")
                             ->setDescription(" Solar Daily Generation Report Execl Sheet")
                             ->setKeywords(" Solar Daily Generation Report Execl Sheet")
                             ->setCategory(" Solar Daily Generation Report Execl Sheet");


                             for ($i=0; $i<count($alpa); $i++) { 
                                $objPHPExcel->getActiveSheet()->getColumnDimension($alpa[$i])->setWidth(20);
                               }


                                $objPHPExcel->getActiveSheet()->getColumnDimension(K)->setWidth(50);
                                $objPHPExcel->getActiveSheet()->getColumnDimension(L)->setWidth(75);
$objPHPExcel->getActiveSheet()->getColumnDimension(A)->setWidth(8);

$objPHPExcel->setActiveSheetIndex(3)
->setCellValue('A1','Breakdo ')
->setCellValue('B1','wn Details')
->setCellValue('A2','Job Cart Number')
->setCellValue('B2','Date')
->setCellValue('C2','Equipment Name/Id')

->setCellValue('D2','Error Full Text')
->setCellValue('E2','From (Time)')
->setCellValue('F2','To (Time)')
->setCellValue('G2','Total Breakdown Hrs.(hh:mm)')
->setCellValue('H2','Total Breakdown Hrs.')
->setCellValue('I2','Energy Loss.')

->setCellValue('J2','Breakdown Details')
->setCellValue('K2','Action Taken');


include $Source_path."OpenDb.php";

$currentmonth=date('m');
$Current_year=date('Y');
$Current_year2DIGITS=date('y');
$Current_day=date('d');
$PREVIOUSYR=$Current_year-1;
$PREVIOUSYR2DIGITS=$Current_year2DIGITS-1;

 $row=3;
 $Month_date=array();
 $cnt_da=1;
 $select_Inverter_monthly123="SELECT today_date,kwh_today ,Inverter_id,Inverter_start_time,Inverter_end_time FROM Flexi_solar_inverters_daily WHERE Plant_id=$solar_plant_id and DATE(today_date) BETWEEN '2017-01-01' and '$Current_year-$currentmonth-$Current_day' GROUP BY DATE(today_date),plant_id ORDER BY plant_id,today_date desc" ;
                $rs161=mysqli_query($conn2,$select_Inverter_monthly123) or die("error 101".mysqli_error($conn2));
                while($row161=mysqli_fetch_array($rs161))
        
               {
                
                $Month=$row161['today_date'];
                $Month_date[$cnt_da]=date('F-Y', strtotime($Month));
                $Month_date_time=date('d/m/y', strtotime($Month)); 
                $objPHPExcel->setActiveSheetIndex(3)->setCellValue('A'.$row, $cnt_da);
                $objPHPExcel->setActiveSheetIndex(3)->setCellValue('B'.$row, $Month_date_time);
                $objPHPExcel->setActiveSheetIndex(3)->setCellValue('C'.$row, '--');
                $objPHPExcel->setActiveSheetIndex(3)->setCellValue('D'.$row, '--');
                $objPHPExcel->setActiveSheetIndex(3)->setCellValue('E'.$row, '--');
                $objPHPExcel->setActiveSheetIndex(3)->setCellValue('F'.$row, '--');
                $objPHPExcel->setActiveSheetIndex(3)->setCellValue('G'.$row, '--');
                $objPHPExcel->setActiveSheetIndex(3)->setCellValue('H'.$row, '--');
                $objPHPExcel->setActiveSheetIndex(3)->setCellValue('I'.$row, '--');
                $objPHPExcel->setActiveSheetIndex(3)->setCellValue('J'.$row, '--');
                $objPHPExcel->setActiveSheetIndex(3)->setCellValue('K'.$row, '--');
                

                
                $row++;
                $Month_date_time='';
                $cnt_da++;
               }


$lastrow=$row-1;













  
































$objPHPExcel->getActiveSheet()->getStyle('A2'.':'.'K'.$lastrow)->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));

$objPHPExcel->getActiveSheet()->getStyle('B3:C'.$lastrow)->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D7E4BC'))))->getAlignment();

$objPHPExcel->getActiveSheet()->getStyle('E3:E'.$lastrow)->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D7E4BC'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('G3:H'.$lastrow)->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D7E4BC'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('J3:K'.$lastrow)->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'D7E4BC'))))->getAlignment();







$objPHPExcel->setActiveSheetIndex(3);
$row='';

?>