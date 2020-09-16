<?php 

    $objPHPExcel->getDefaultStyle()
    ->getAlignment()
    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

     $objPHPExcel->getDefaultStyle()
    ->getAlignment()
    ->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    $objPHPExcel->getActiveSheet()->freezePane('B5');


$objPHPExcel->getDefaultStyle()->getAlignment()->setWrapText(true);


$objPHPExcel->getActiveSheet()->getStyle('1:4')->getFont()->setBold(true)->setName('Gisha')->setSize(10);
$objPHPExcel->getActiveSheet()->setAutoFilter('A4:F4');


$objPHPExcel->getActiveSheet()->getStyle('D1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

 $objPHPExcel->getActiveSheet()->setShowGridlines(FALSE);



$objPHPExcel->getActiveSheet()->getStyle('A2:F2')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('A3')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();

$objPHPExcel->getActiveSheet()->getStyle('B3:F3')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();
$objPHPExcel->getActiveSheet()->getStyle('B4:E4')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'F2DDDC'))))->getAlignment();




// Set document properties
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
$objPHPExcel->getActiveSheet()->getColumnDimension(A)->setWidth(12);
$objPHPExcel->getActiveSheet()->getColumnDimension(F)->setWidth(75);


$solar_plant_cap=$solar_plant_capacity/1000;


$objPHPExcel->setActiveSheetIndex(4)
->setCellValue('A2','Grid Down Details of Plant')
->setCellValue('A3','Date')
->setCellValue('B3','Grid Down Duration in Hrs')
->setCellValue('B4','Feeder No. (' .$solar_plant_cap.' MW)')
->setCellValue('C4','From')
->setCellValue('D4','To')
->setCellValue('E4','Total')
->setCellValue('F3','Remark');

include $Source_path."OpenDb.php";

$currentmonth=date('m');
$Current_year=date('Y');
$Current_year2DIGITS=date('y');
$Current_day=date('d');
$PREVIOUSYR=$Current_year-1;
$PREVIOUSYR2DIGITS=$Current_year2DIGITS-1;

 $row=5;
 $Month_date=array();
 $cnt_da=0;
 $select_Inverter_monthly123="SELECT today_date,kwh_today ,Inverter_id,Inverter_start_time,Inverter_end_time FROM Flexi_solar_inverters_daily WHERE Plant_id=$solar_plant_id and DATE(today_date) BETWEEN '2017-01-01' and '$Current_year-$currentmonth-$Current_day' GROUP BY DATE(today_date),plant_id ORDER BY plant_id,today_date desc" ;
                $rs161=mysqli_query($conn2,$select_Inverter_monthly123) or die("error 101".mysqli_error($conn2));
                while($row161=mysqli_fetch_array($rs161))
        
               {
                
                $Month=$row161['today_date'];
                $Month_date[$cnt_da]=date('F-Y', strtotime($Month));
                $Month_date_time=date('d/m/y', strtotime($Month)); 
                $Inverter_start_time=$row161['Inverter_start_time'];
                $Inverter_end_time=$row161['Inverter_end_time'];

                $cal1=str_replace(":", "", $Inverter_start_time);
                $cal2=str_replace(":", "", $Inverter_end_time);
                $cal3=$cal1-$cal2;
                $chunks2 = str_split($cal3, 2);
                 $total = implode(':', $chunks2);
                 if ($total==0) {
                   $total='0:00';
                 }

                 $MW=$solar_plant_capacity/1000;
                
                $objPHPExcel->setActiveSheetIndex(4)->setCellValue('A'.$row, $Month_date_time);
                $objPHPExcel->setActiveSheetIndex(4)->setCellValue('B'.$row, $MW.'MW');
                $objPHPExcel->setActiveSheetIndex(4)->setCellValue('C'.$row, $Inverter_start_time);
                $objPHPExcel->setActiveSheetIndex(4)->setCellValue('D'.$row, $Inverter_end_time);
                $objPHPExcel->setActiveSheetIndex(4)->setCellValue('E'.$row, $total);
                $objPHPExcel->setActiveSheetIndex(4)->setCellValue('F'.$row, '--');
                
                $row++;
                $Month_date_time='';
                $cnt_da++;
               }
$arow=$row-1;












  







































 $objPHPExcel->getActiveSheet()->mergeCells('A2:F2');
 $objPHPExcel->getActiveSheet()->mergeCells('A3:A4');

 $objPHPExcel->getActiveSheet()->mergeCells('B2:E2');
 $objPHPExcel->getActiveSheet()->mergeCells('B3:E3');
 $objPHPExcel->getActiveSheet()->mergeCells('F3:F4');


$objPHPExcel->getActiveSheet()->getStyle('A2'.':'.'F'.$arow)->applyFromArray(array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_HAIR
                )
            )
        ));

$objPHPExcel->getActiveSheet()->getStyle('B5:D'.$arow)->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => '99CCFF'))))->getAlignment();



$objPHPExcel->setActiveSheetIndex(4);

$row='';

?>