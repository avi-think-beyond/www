<?php
/**
 * PHPExcel
 *
 * Copyright (C) 2006 - 2013 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2013 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt	LGPL
 * @version    1.7.9, 2013-06-02
 */

/** Error reporting */
//error_reporting(E_ALL);

ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
if (PHP_SAPI == 'cli')
	die('This example should only be run from a Web Browser');

/** Include PHPExcel */
require_once 'Classes/PHPExcel.php';

// require_once dirname(__FILE__) . '/../Classes/PHPExcel.php';
$solar_plant_id=$plant_id=16;

include '/home/swltstawsfleximc/public_html/Source/xconfig.php';
include '/home/swltstawsfleximc/public_html/Source/web/plant/plant_id_details.php'; 
$solar_plant_name_replace_space = str_replace(" ", "_", $solar_plant_name);

// Create new PHPExcel object
$objPHPExcel = new PHPExcel();
 $objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
 $objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true)->setSize(20);

 $objPHPExcel->getActiveSheet()->getStyle('A2:BX2')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'E6B9B8'))))->getAlignment();
 $objPHPExcel->getActiveSheet()->getStyle('BY2:EZ2')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'FFFF00'))))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
 $objPHPExcel->getActiveSheet()->getStyle('FA2:FD2')->applyFromArray(array('fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'E4AD7B'))))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
 $objPHPExcel->getActiveSheet()->getStyle('A2:FB2')->getFont()->setBold(true)->setSize(11);
 $objPHPExcel->getActiveSheet()->getStyle('A:FD')->getFont()->setBold(true)->setSize(10);
 $objPHPExcel->getActiveSheet()->getStyle('A:FD')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);




// Set document properties
$objPHPExcel->getProperties()->setCreator("FlexiMC Solutions Pvt Ltd Hidayath")
							 ->setLastModifiedBy("Hidayath Shaik")
							 ->setTitle("Daily Generation Report Execl Sheet")
							 ->setSubject("Daily Generation Report Execl Sheet")
							 ->setDescription(" Solar Daily Generation Report Execl Sheet")
							 ->setKeywords(" Solar Daily Generation Report Execl Sheet")
							 ->setCategory(" Solar Daily Generation Report Execl Sheet");
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('S')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('T')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('U')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('V')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('W')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('X')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('Y')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('Z')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('AA')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('AB')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('AC')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('AD')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('AE')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('AF')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('AG')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('AH')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('AI')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('AJ')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('AK')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('AL')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('AM')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('AN')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('AO')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('AP')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('AQ')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('AR')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('AS')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('AT')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('AU')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('AV')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('AW')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('AX')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('AY')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('AZ')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('BA')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('BB')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('BC')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('BD')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('BE')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('BF')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('BG')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('BH')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('BI')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('BJ')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('BK')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('BL')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('BM')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('BN')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('BO')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('BP')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('BQ')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('BR')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('BS')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('BT')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('BU')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('BV')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('BW')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('BX')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('BY')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('BZ')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('CA')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('CB')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('CC')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('CD')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('CE')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('CF')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('CG')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('CB')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('CH')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('CI')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('CJ')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('CK')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('CL')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('CM')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('CN')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('CO')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('CP')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('CQ')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('CR')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('CS')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('CT')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('CU')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('CV')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('CW')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('CX')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('CY')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('CZ')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('DA')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('DB')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('DC')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('DD')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('DE')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('DF')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('DG')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('DH')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('DI')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('DJ')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('DK')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('DL')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('DM')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('DN')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('DO')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('DP')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('DQ')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('DR')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('DS')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('DT')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('DU')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('DV')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('DW')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('DX')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('DY')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('DZ')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('EA')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('EB')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('EC')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('ED')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('EE')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('EF')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('EG')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('EH')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('EI')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('EJ')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('EK')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('EL')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('EM')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('EN')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('EO')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('EP')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('EQ')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('ER')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('ES')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('ET')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('EU')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('EV')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('EW')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('EX')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('EY')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('EZ')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('FA')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('FB')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('FC')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('FD')->setWidth(35);


                            $objPHPExcel->setActiveSheetIndex(0)
                                ->setCellValue('A1',date("l jS \of F Y").' ENERGY PRODUCTION')
	                      	->setCellValue('A2', 'Date')
                                ->setCellValue('B2',  'Block1 Inverter1 (KWh)')
                                ->setCellValue('C2',  'Block1 Inverter2 (KWh)')
                                ->setCellValue('D2',  'Block1 Inverter3 (KWh)')
                                ->setCellValue('E2',  'Block1 Inverter4 (KWh)')
                                ->setCellValue('F2',  'Block1 Inverter5 (KWh)')
                                ->setCellValue('G2',  'Block1 Inverter6 (KWh)')
                                ->setCellValue('H2',  'Block1 Inverter7 (KWh)')
                                ->setCellValue('I2',  'Block1 Inverter8 (KWh)')
                                ->setCellValue('J2',  'Block2 Inverter1 (KWh)')
                                ->setCellValue('K2',  'Block2 Inverter2 (KWh)')
                                ->setCellValue('L2',  'Block2 Inverter3 (KWh)')
                                ->setCellValue('M2',  'Block2 Inverter4 (KWh)')
                                ->setCellValue('N2',  'Block2 Inverter5 (KWh)')
                                ->setCellValue('O2',  'Block2 Inverter6 (KWh)')
                                ->setCellValue('P2',  'Block2 Inverter7 (KWh)')
                                ->setCellValue('Q2',  'Block2 Inverter8 (KWh)')
                                ->setCellValue('R2',  'Block3 Inverter1 (KWh)')
                                ->setCellValue('S2',  'Block3 Inverter2 (KWh)')
                                ->setCellValue('T2',  'Block3 Inverter3 (KWh)')
                                ->setCellValue('U2',  'Block3 Inverter4 (KWh)')
                                ->setCellValue('V2',  'Block3 Inverter5 (KWh)')
                                ->setCellValue('W2',  'Block3 Inverter6 (KWh)')
                                ->setCellValue('X2',  'Block3 Inverter7 (KWh)')
                                ->setCellValue('Y2',  'Block3 Inverter8 (KWh)')
                                ->setCellValue('Z2',  'Block4 Inverter1 (KWh)')
                                ->setCellValue('AA2', 'Block4 Inverter2 (KWh)')
                                ->setCellValue('AB2', 'Block4 Inverter3 (KWh)')
                                ->setCellValue('AC2', 'Block4 Inverter4 (KWh)')
                                ->setCellValue('AD2', 'Block4 Inverter5 (KWh)')
                                ->setCellValue('AE2', 'Block4 Inverter6 (KWh)')
                                ->setCellValue('AF2', 'Block4 Inverter7 (KWh)')
                                ->setCellValue('AG2', 'Block4 Inverter8 (KWh)')
                                ->setCellValue('AH2', 'Block5 Inverter1 (KWh)')
                                ->setCellValue('AI2', 'Block5 Inverter2 (KWh)')
                                ->setCellValue('AJ2', 'Block5 Inverter3 (KWh)')
                                ->setCellValue('AK2', 'Block5 Inverter4 (KWh)')
                                ->setCellValue('AL2', 'Block5 Inverter5 (KWh)')
                                ->setCellValue('AM2', 'Block6 Inverter1 (KWh)')
                                ->setCellValue('AN2', 'Block6 Inverter2 (KWh)')
                                ->setCellValue('AO2', 'Block6 Inverter3 (KWh)')
                                ->setCellValue('AP2', 'Block6 Inverter4 (KWh)')
                                ->setCellValue('AQ2', 'Block6 Inverter5 (KWh)')
                                ->setCellValue('AR2', 'Block7 Inverter1 (KWh)')
                                ->setCellValue('AS2', 'Block7 Inverter2 (KWh)')
                                ->setCellValue('AT2', 'Block7 Inverter3 (KWh)')
                                ->setCellValue('AU2', 'Block7 Inverter4 (KWh)')
                                ->setCellValue('AV2', 'Block7 Inverter5 (KWh)')
                                ->setCellValue('AW2', 'Block7 Inverter6 (KWh)')
                                ->setCellValue('AX2', 'Block7 Inverter7 (KWh)')
                                ->setCellValue('AY2', 'Block7 Inverter8 (KWh)')
                                ->setCellValue('AZ2', 'Block8 Inverter1 (KWh)')
                                ->setCellValue('BA2', 'Block8 Inverter2 (KWh)')
                                ->setCellValue('BB2', 'Block8 Inverter3 (KWh)')
                                ->setCellValue('BC2', 'Block8 Inverter4 (KWh)')
                                ->setCellValue('BD2', 'Block8 Inverter5 (KWh)')
                                ->setCellValue('BE2', 'Block8 Inverter6 (KWh)')
                                ->setCellValue('BF2', 'Block8 Inverter7 (KWh)')
                                ->setCellValue('BG2', 'Block8 Inverter8 (KWh)')
                                ->setCellValue('BH2', 'Block9 Inverter1 (KWh)')
                                ->setCellValue('BI2', 'Block9 Inverter2 (KWh)')
                                ->setCellValue('BJ2', 'Block9 Inverter3 (KWh)')
                                ->setCellValue('BK2', 'Block9 Inverter4 (KWh)')
                                ->setCellValue('BL2', 'Block9 Inverter5 (KWh)')
                                ->setCellValue('BM2', 'Block9 Inverter6 (KWh)')
                                ->setCellValue('BN2', 'Block9 Inverter7 (KWh)')
                                ->setCellValue('BO2', 'Block9 Inverter8 (KWh)')
                                ->setCellValue('BP2', 'Block9 Inverter1 (KWh)')
                                ->setCellValue('BQ2', 'Block9 Inverter2 (KWh)')
                                ->setCellValue('BR2', 'Block9 Inverter3 (KWh)')
                                ->setCellValue('BS2', 'Block9 Inverter4 (KWh)')
                                ->setCellValue('BT2', 'Block9 Inverter5 (KWh)')
                                ->setCellValue('BU2', 'Block9 Inverter6 (KWh)')
                                ->setCellValue('BV2', 'Block9 Inverter7 (KWh)')
                                ->setCellValue('BW2', 'Block9 Inverter8 (KWh)')
				->setCellValue('BX2', 'Total (KWh)')
                                ->setCellValue('BY2'.$row,  'Block1 MFM1 - Enery Export (KWh)')
                                ->setCellValue('BZ2'.$row,  'Block1 MFM1 - Enery Import (KWh)')
                                ->setCellValue('CA2'.$row,  'Block1 MFM1 - Enery Export Till date (KWh)')
                                ->setCellValue('CB2'.$row,  'Block1 MFM1 - Enery Import Till date (KWh)')
                                ->setCellValue('CC2'.$row,  'Block1 MFM2 - Enery Export (KWh)')
                                ->setCellValue('CD2'.$row,  'Block1 MFM2 - Enery Import (KWh)')
                                ->setCellValue('CE2'.$row,  'Block1 MFM2 - Enery Export Till date (KWh)')
                                ->setCellValue('CF2'.$row,  'Block1 MFM2 - Enery Import Till date (KWh)')
                                ->setCellValue('CG2'.$row,  'Block2 MFM1 - Enery Export (KWh)')
                                ->setCellValue('CH2'.$row,  'Block2 MFM1 - Enery Import (KWh)')
                                ->setCellValue('CI2'.$row,  'Block2 MFM1 - Enery Export Till date (KWh)')
                                ->setCellValue('CJ2'.$row,  'Block2 MFM1 - Enery Import Till date (KWh)')
                                ->setCellValue('CK2'.$row,  'Block2 MFM2 - Enery Export (KWh)')
                                ->setCellValue('CL2'.$row,  'Block2 MFM2 - Enery Import (KWh)')
                                ->setCellValue('CM2'.$row,  'Block2 MFM2 - Enery Export Till date (KWh)')
                                ->setCellValue('CN2'.$row,  'Block2 MFM2 - Enery Import Till date (KWh)')
                                ->setCellValue('CO2'.$row,  'Block3 MFM1 - Enery Export (KWh)')
                                ->setCellValue('CP2'.$row,  'Block3 MFM1 - Enery Import (KWh)')
                                ->setCellValue('CQ2'.$row,  'Block3 MFM1 - Enery Export Till date (KWh)')
                                ->setCellValue('CR2'.$row,  'Block3 MFM1 - Enery Import Till date (KWh)')
                                ->setCellValue('CS2'.$row,  'Block3  MFM2  - Enery Export (KWh)')
                                ->setCellValue('CT2'.$row,  'Block3  MFM2  - Enery Import (KWh)')
                                ->setCellValue('CU2'.$row,  'Block3  MFM2 - Enery Export Till date (KWh)')
                                ->setCellValue('CV2'.$row,  'Block3  MFM2 - Enery Import Till date (KWh)')
                                ->setCellValue('CW2'.$row,  'Block4  MFM1  - Enery Export (KWh)')
                                ->setCellValue('CX2'.$row,  'Block4  MFM1  - Enery Import (KWh)')
                                ->setCellValue('CY2'.$row,  'Block4  MFM1 - Enery Export Till date (KWh)')
                                ->setCellValue('CZ2'.$row,  'Block4  MFM1 - Enery Import Till date (KWh)')
                                ->setCellValue('DA2'.$row,  'Block4  MFM2  - Enery Export (KWh)')
                                ->setCellValue('DB2'.$row,  'Block4  MFM2  - Enery Import (KWh)')
                                ->setCellValue('DC2'.$row,  'Block4  MFM2 - Enery Export Till date (KWh)')
                                ->setCellValue('DD2'.$row,  'Block4  MFM2 - Enery Import Till date (KWh)')
                                ->setCellValue('DE2'.$row,  'Block5  MFM1  - Enery Export (KWh)')
                                ->setCellValue('DF2'.$row,  'Block5  MFM1  - Enery Import (KWh)')
                                ->setCellValue('DG2'.$row,  'Block5  MFM1 - Enery Export Till date (KWh)')
                                ->setCellValue('DH2'.$row,  'Block5  MFM1 - Enery Import Till date (KWh)')
                                ->setCellValue('DI2'.$row,  'Block5  MFM2  - Enery Export (KWh)')
                                ->setCellValue('DJ2'.$row,  'Block5  MFM2  - Enery Import (KWh)')
                                ->setCellValue('DK2'.$row,  'Block5  MFM2 - Enery Export Till date (KWh)')
                                ->setCellValue('DL2'.$row,  'Block5  MFM2 - Enery Import Till date (KWh)')
                                ->setCellValue('DM2'.$row,  'Block6  MFM1  - Enery Export (KWh)')
                                ->setCellValue('DN2'.$row,  'Block6  MFM1  - Enery Import (KWh)')
                                ->setCellValue('DO2'.$row,  'Block6  MFM1 - Enery Export Till date (KWh)')
                                ->setCellValue('DP2'.$row,  'Block6  MFM1 - Enery Import Till date (KWh)')
                                ->setCellValue('DQ2'.$row,  'Block6  MFM2  - Enery Export (KWh)')
                                ->setCellValue('DR2'.$row,  'Block6  MFM2  - Enery Import (KWh)')
                                ->setCellValue('DS2'.$row,  'Block6  MFM2 - Enery Export Till date (KWh)')
                                ->setCellValue('DT2'.$row,  'Block6  MFM2 - Enery Import Till date (KWh)')
                                ->setCellValue('DU2'.$row,  'Block7  MFM1  - Enery Export (KWh)')
                                ->setCellValue('DV2'.$row,  'Block7  MFM1  - Enery Import (KWh)')
                                ->setCellValue('DW2'.$row,  'Block7  MFM1 - Enery Export Till date (KWh)')
                                ->setCellValue('DX2'.$row,  'Block7  MFM1 - Enery Import Till date (KWh)')
                                ->setCellValue('DY2'.$row,  'Block7  MFM2  - Enery Export (KWh)')
                                ->setCellValue('DZ2'.$row,  'Block7  MFM2  - Enery Import (KWh)')
                                ->setCellValue('EA2'.$row,  'Block7  MFM2 - Enery Export Till date (KWh)')
                                ->setCellValue('EB2'.$row,  'Block7  MFM2 - Enery Import Till date (KWh)')
                                ->setCellValue('EC2'.$row,  'Block8  MFM1  - Enery Export (KWh)')
                                ->setCellValue('ED2'.$row,  'Block8  MFM1  - Enery Import (KWh)')
                                ->setCellValue('EE2'.$row,  'Block8  MFM1 - Enery Export Till date (KWh)')
                                ->setCellValue('EF2'.$row,  'Block8  MFM1 - Enery Import Till date (KWh)')
                                ->setCellValue('EG2'.$row,  'Block8  MFM2  - Enery Export (KWh)')
                                ->setCellValue('EH2'.$row,  'Block8  MFM2  - Enery Import (KWh)')
                                ->setCellValue('EI2'.$row,  'Block8  MFM2 - Enery Export Till date (KWh)')
                                ->setCellValue('EJ2'.$row,  'Block8  MFM2 - Enery Import Till date (KWh)')
                                ->setCellValue('EK2'.$row,  'Block9  MFM1  - Enery Export (KWh)')
                                ->setCellValue('EL2'.$row,  'Block9  MFM1  - Enery Import (KWh)')
                                ->setCellValue('EM2'.$row,  'Block9  MFM1 - Enery Export Till date (KWh)')
                                ->setCellValue('EN2'.$row,  'Block9  MFM1 - Enery Import Till date (KWh)')
                                ->setCellValue('EO2'.$row,  'Block9  MFM2  - Enery Export (KWh)')
                                ->setCellValue('EP2'.$row,  'Block9  MFM2  - Enery Import (KWh)')
                                ->setCellValue('EQ2'.$row,  'Block9  MFM2 - Enery Export Till date (KWh)')
                                ->setCellValue('ER2'.$row,  'Block9  MFM2 - Enery Import Till date (KWh)')
                                ->setCellValue('ES2'.$row,  'Block10  MFM1  - Enery Export (KWh)')
                                ->setCellValue('ET2'.$row,  'Block10  MFM1  - Enery Import (KWh)')
                                ->setCellValue('EU2'.$row,  'Block10  MFM1 - Enery Export Till date (KWh)')
                                ->setCellValue('EV2'.$row,  'Block10  MFM1 - Enery Import Till date (KWh)')
                                ->setCellValue('EW2'.$row,  'Block10  MFM2  - Enery Export (KWh)')
                                ->setCellValue('EX2'.$row,  'Block10  MFM2  - Enery Import (KWh)')
                                ->setCellValue('EY2'.$row,  'Block10  MFM2 - Enery Export Till date (KWh)')
                                ->setCellValue('EZ2'.$row,  'Block10  MFM2 - Enery Import Till date (KWh)')
                                ->setCellValue('FA2'.$row,  'Irradiation today [GHI] (kWh/m2)')
			        ->setCellValue('FB2'.$row,  'Irradiation today [DNI](kWh/m2)')
			        ->setCellValue('FC2'.$row,  'Specific Yield (kWh/kWp)')
				->setCellValue('FD2'.$row,  'Performance ratio (PR)');


include '../../OpenDb.php';
$plant_id=16;
$row=3;
$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND
YEAR(today_date) = YEAR(CURDATE()) and plant_id='$plant_id' and Inverter_id='1' order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);
$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
	$row++;
	}
	$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND
YEAR(today_date) = YEAR(CURDATE()) and plant_id='$plant_id' and Inverter_id='2' order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);
$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
	$row++;
	}
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='3' order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);
$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
	$row++;
	}
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='4' order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
	$row++;
	}
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='5' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
	$row++;
	}
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='6' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
	$row++;
	}

    $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='7' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('H'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }

    $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='8' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('I'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }


  $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='9' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('J'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
  $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='10' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('K'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }


$row=3;
$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND
YEAR(today_date) = YEAR(CURDATE()) and plant_id='$plant_id' and Inverter_id='11' order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);
$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));
//$SOLAR_IRRADIATION    =round($row16['IRRADIATION'],2);

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
    $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND
YEAR(today_date) = YEAR(CURDATE()) and plant_id='$plant_id' and Inverter_id='12' order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);
$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('M'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='13' order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);
$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('N'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='14' order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('O'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='15' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('P'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='16' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('Q'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }

    $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='17' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('R'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }

    $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='18' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('S'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }


  $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='19' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('T'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
  $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='20' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('U'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }


$row=3;
$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND
YEAR(today_date) = YEAR(CURDATE()) and plant_id='$plant_id' and Inverter_id='21' order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);
$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));
//$SOLAR_IRRADIATION    =round($row16['IRRADIATION'],2);

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('V'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
    $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND
YEAR(today_date) = YEAR(CURDATE()) and plant_id='$plant_id' and Inverter_id='22' order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);
$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('W'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='23' order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);
$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('X'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='24' order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('Y'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='25' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('Z'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='26' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AA'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }

    $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='27' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AB'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }

    $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='28' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AC'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }


  $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='29' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AD'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
  $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='30' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AE'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }


$row=3;
$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND
YEAR(today_date) = YEAR(CURDATE()) and plant_id='$plant_id' and Inverter_id='31' order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);
$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));
//$SOLAR_IRRADIATION    =round($row16['IRRADIATION'],2);

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AF'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
    $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND
YEAR(today_date) = YEAR(CURDATE()) and plant_id='$plant_id' and Inverter_id='32' order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);
$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AG'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='33' order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);
$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AH'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='34' order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AI'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='35' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AJ'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='36' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AK'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }

    $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='37' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AL'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }

    $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='38' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AM'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }


  $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='39' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AN'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
  $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='40' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AO'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }


$row=3;
$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND
YEAR(today_date) = YEAR(CURDATE()) and plant_id='$plant_id' and Inverter_id='41' order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);
$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));
//$SOLAR_IRRADIATION    =round($row16['IRRADIATION'],2);

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AP'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
    $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND
YEAR(today_date) = YEAR(CURDATE()) and plant_id='$plant_id' and Inverter_id='42' order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);
$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AQ'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='43' order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);
$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AR'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='44' order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AS'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='45' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AT'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='46' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AU'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }

    $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='47' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AV'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }

    $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='48' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AW'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }


  $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='49' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AX'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
  $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='50' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AY'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }


$row=3;
$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND
YEAR(today_date) = YEAR(CURDATE()) and plant_id='$plant_id' and Inverter_id='51' order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);
$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));
//$SOLAR_IRRADIATION    =round($row16['IRRADIATION'],2);

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AZ'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
    $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND
YEAR(today_date) = YEAR(CURDATE()) and plant_id='$plant_id' and Inverter_id='52' order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);
$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('BA'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='53' order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);
$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('BB'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='54' order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('BC'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='55' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('BD'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='56' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('BE'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }

    $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='57' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('BF'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }

    $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='58' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('BG'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }


  $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='59' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('BH'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
  $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='60' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('BI'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }


$row=3;
$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND
YEAR(today_date) = YEAR(CURDATE()) and plant_id='$plant_id' and Inverter_id='61' order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);
$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));
//$SOLAR_IRRADIATION    =round($row16['IRRADIATION'],2);

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('BJ'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
    $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND
YEAR(today_date) = YEAR(CURDATE()) and plant_id='$plant_id' and Inverter_id='62' order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);
$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('BK'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='63' order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);
$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('BL'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='64' order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('BM'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='65' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('BN'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='66' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('BO'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }

    $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='67' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('BP'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }

    $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='68' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('BQ'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }


  $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='69' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('BR'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
  $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='70' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('BS'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }


$row=3;
$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND
YEAR(today_date) = YEAR(CURDATE()) and plant_id='$plant_id' and Inverter_id='71' order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);
$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));
//$SOLAR_IRRADIATION    =round($row16['IRRADIATION'],2);

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('BT'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
    $row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND
YEAR(today_date) = YEAR(CURDATE()) and plant_id='$plant_id' and Inverter_id='72' order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);
$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('BU'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='73' order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);
$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('BV'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
$row = 3;

$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='74' order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('BW'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }







$row = 3;


$select_Inverter="SELECT SUM(kwh_today) AS ENERGY_Generated_today,kwh_till_date, Time_of_use_today, today_date FROM Flexi_solar_inverters_daily
WHERE MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())  and plant_id='$plant_id' GROUP BY DATE(today_date) order by today_date DESC";

$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{


$ENERGY_Generated_today=round($row16['ENERGY_Generated_today'],2);
$today_date=$row16['today_date'];$Time_of_use_today=round($row16['Time_of_use_today'],2);
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('BX'.$row, $ENERGY_Generated_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
	$row++;
	}
	$row = 3;
	$select_Irr="SELECT irradiation,Global_irradiation,today_date FROM Flexi_solar_wms_daily
	WHERE MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE()) and wms_id='1' and plant_id='$plant_id' order by today_date DESC";
	$rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
	while($row16=mysqli_fetch_array($rs16))
	{
	$irr_today_date=$row16['today_date'];
	$irr_date_time=date('dMY', strtotime($irr_today_date));
	 $irradiation=round($row16['irradiation'],2);
	$irradiation_tilt1=round($row16['Global_irradiation'],2);
	 $irrarr[$irr_date_time]=$irradiation;
		$irrarr1[$irr_date_time]=$irradiation_tilt1;

	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('FA'.$row, $irradiation);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('FB'.$row, $irradiation_tilt1);
	$server_date_time='';
	$Meter_id='';
	$kwh_today='';
	 $irradiation='';
	$irradiation_tilt1='';
	$module1_tmp_AVG='';
	$module2_tmp_AVG='';
	$room_temperature_AVG='';
	$row++;
		}

    $row = 3;
$select_Irr="SELECT Energy_Export_today,Energy_Export_total,Energy_import_today,Energy_import_total,today_date FROM Flexi_solar_MFM_daily
WHERE MONTH(today_date) = MONTH(CURRENT_DATE)AND YEAR(today_date) = YEAR(CURDATE())  and M_id='1' and plant_id='$plant_id' order by today_date DESC";
$rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$mfm_today_date=$row16['today_date'];
$mfm_date_time=date('dMY', strtotime($mfm_today_date));
 $irr_today=$irrarr[$mfm_date_time];

$Energy_Export_today=round($row16['Energy_Export_today'],2);
$Energy_import_today=round($row16['Energy_import_today'],2);
$Energy_Export_total=round($row16['Energy_Export_total'],2);
$Energy_import_total=round($row16['Energy_import_total'],2);


$server_date_time=date('d-M-Y', strtotime($mfm_today_date));


$objPHPExcel->setActiveSheetIndex(0)->setCellValue('BY'.$row, $Energy_Export_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('BZ'.$row, $Energy_import_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('CA'.$row, $Energy_Export_total);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('CB'.$row, $Energy_import_total);

$Energy_Export_today='';
$Energy_import_today='';
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }      


     $row = 3;
$select_Irr="SELECT Energy_Export_today,Energy_Export_total,Energy_import_today,Energy_import_total,today_date FROM Flexi_solar_MFM_daily
WHERE MONTH(today_date) = MONTH(CURRENT_DATE)AND YEAR(today_date) = YEAR(CURDATE())  and M_id='2' and plant_id='$plant_id' order by today_date DESC";
$rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$mfm_today_date=$row16['today_date'];
$mfm_date_time=date('dMY', strtotime($mfm_today_date));
 $irr_today=$irrarr[$mfm_date_time];

$Energy_Export_today=round($row16['Energy_Export_today'],2);
$Energy_import_today=round($row16['Energy_import_today'],2);
$Energy_Export_total=round($row16['Energy_Export_total'],2);
$Energy_import_total=round($row16['Energy_import_total'],2);


$server_date_time=date('d-M-Y', strtotime($mfm_today_date));


$objPHPExcel->setActiveSheetIndex(0)->setCellValue('CC'.$row, $Energy_Export_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('CD'.$row, $Energy_import_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('CE'.$row, $Energy_Export_total);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('CF'.$row, $Energy_import_total);

$Energy_Export_today='';
$Energy_import_today='';
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }      
         
      $row = 3;
$select_Irr="SELECT Energy_Export_today,Energy_Export_total,Energy_import_today,Energy_import_total,today_date FROM Flexi_solar_MFM_daily
WHERE MONTH(today_date) = MONTH(CURRENT_DATE)AND YEAR(today_date) = YEAR(CURDATE())  and M_id='4' and plant_id='$plant_id' order by today_date DESC";
$rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$mfm_today_date=$row16['today_date'];
$mfm_date_time=date('dMY', strtotime($mfm_today_date));
 $irr_today=$irrarr[$mfm_date_time];

$Energy_Export_today=round($row16['Energy_Export_today'],2);
$Energy_import_today=round($row16['Energy_import_today'],2);
$Energy_Export_total=round($row16['Energy_Export_total'],2);
$Energy_import_total=round($row16['Energy_import_total'],2);


$server_date_time=date('d-M-Y', strtotime($mfm_today_date));


$objPHPExcel->setActiveSheetIndex(0)->setCellValue('CG'.$row, $Energy_Export_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('CH'.$row, $Energy_import_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('CI'.$row, $Energy_Export_total);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('CJ'.$row, $Energy_import_total);

$Energy_Export_today='';
$Energy_import_today='';
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }      
          
    $row = 3;
$select_Irr="SELECT Energy_Export_today,Energy_Export_total,Energy_import_today,Energy_import_total,today_date FROM Flexi_solar_MFM_daily
WHERE MONTH(today_date) = MONTH(CURRENT_DATE)AND YEAR(today_date) = YEAR(CURDATE())  and M_id='5' and plant_id='$plant_id' order by today_date DESC";
$rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$mfm_today_date=$row16['today_date'];
$mfm_date_time=date('dMY', strtotime($mfm_today_date));
 $irr_today=$irrarr[$mfm_date_time];

$Energy_Export_today=round($row16['Energy_Export_today'],2);
$Energy_import_today=round($row16['Energy_import_today'],2);
$Energy_Export_total=round($row16['Energy_Export_total'],2);
$Energy_import_total=round($row16['Energy_import_total'],2);


$server_date_time=date('d-M-Y', strtotime($mfm_today_date));


$objPHPExcel->setActiveSheetIndex(0)->setCellValue('CK'.$row, $Energy_Export_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('CL'.$row, $Energy_import_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('CM'.$row, $Energy_Export_total);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('CN'.$row, $Energy_import_total);

$Energy_Export_today='';
$Energy_import_today='';
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }      
     $row = 3;
$select_Irr="SELECT Energy_Export_today,Energy_Export_total,Energy_import_today,Energy_import_total,today_date FROM Flexi_solar_MFM_daily
WHERE MONTH(today_date) = MONTH(CURRENT_DATE)AND YEAR(today_date) = YEAR(CURDATE())  and M_id='7' and plant_id='$plant_id' order by today_date DESC";
$rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$mfm_today_date=$row16['today_date'];
$mfm_date_time=date('dMY', strtotime($mfm_today_date));
 $irr_today=$irrarr[$mfm_date_time];

$Energy_Export_today=round($row16['Energy_Export_today'],2);
$Energy_import_today=round($row16['Energy_import_today'],2);
$Energy_Export_total=round($row16['Energy_Export_total'],2);
$Energy_import_total=round($row16['Energy_import_total'],2);


$server_date_time=date('d-M-Y', strtotime($mfm_today_date));


$objPHPExcel->setActiveSheetIndex(0)->setCellValue('CO'.$row, $Energy_Export_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('CP'.$row, $Energy_import_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('CQ'.$row, $Energy_Export_total);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('CR'.$row, $Energy_import_total);

$Energy_Export_today='';
$Energy_import_today='';
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }  

      $row = 3;
$select_Irr="SELECT Energy_Export_today,Energy_Export_total,Energy_import_today,Energy_import_total,today_date FROM Flexi_solar_MFM_daily
WHERE MONTH(today_date) = MONTH(CURRENT_DATE)AND YEAR(today_date) = YEAR(CURDATE())  and M_id='8' and plant_id='$plant_id' order by today_date DESC";
$rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$mfm_today_date=$row16['today_date'];
$mfm_date_time=date('dMY', strtotime($mfm_today_date));
 $irr_today=$irrarr[$mfm_date_time];

$Energy_Export_today=round($row16['Energy_Export_today'],2);
$Energy_import_today=round($row16['Energy_import_today'],2);
$Energy_Export_total=round($row16['Energy_Export_total'],2);
$Energy_import_total=round($row16['Energy_import_total'],2);


$server_date_time=date('d-M-Y', strtotime($mfm_today_date));


$objPHPExcel->setActiveSheetIndex(0)->setCellValue('CS'.$row, $Energy_Export_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('CT'.$row, $Energy_import_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('CU'.$row, $Energy_Export_total);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('CV'.$row, $Energy_import_total);

$Energy_Export_today='';
$Energy_import_today='';
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }  
    

      $row = 3;
$select_Irr="SELECT Energy_Export_today,Energy_Export_total,Energy_import_today,Energy_import_total,today_date FROM Flexi_solar_MFM_daily
WHERE MONTH(today_date) = MONTH(CURRENT_DATE)AND YEAR(today_date) = YEAR(CURDATE())  and M_id='10' and plant_id='$plant_id' order by today_date DESC";
$rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$mfm_today_date=$row16['today_date'];
$mfm_date_time=date('dMY', strtotime($mfm_today_date));
 $irr_today=$irrarr[$mfm_date_time];

$Energy_Export_today=round($row16['Energy_Export_today'],2);
$Energy_import_today=round($row16['Energy_import_today'],2);
$Energy_Export_total=round($row16['Energy_Export_total'],2);
$Energy_import_total=round($row16['Energy_import_total'],2);


$server_date_time=date('d-M-Y', strtotime($mfm_today_date));


$objPHPExcel->setActiveSheetIndex(0)->setCellValue('CW'.$row, $Energy_Export_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('CX'.$row, $Energy_import_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('CY'.$row, $Energy_Export_total);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('CZ'.$row, $Energy_import_total);

$Energy_Export_today='';
$Energy_import_today='';
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }           	
    $row = 3;
$select_Irr="SELECT Energy_Export_today,Energy_Export_total,Energy_import_today,Energy_import_total,today_date FROM Flexi_solar_MFM_daily
WHERE MONTH(today_date) = MONTH(CURRENT_DATE)AND YEAR(today_date) = YEAR(CURDATE())  and M_id='11' and plant_id='$plant_id' order by today_date DESC";
$rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$mfm_today_date=$row16['today_date'];
$mfm_date_time=date('dMY', strtotime($mfm_today_date));
 $irr_today=$irrarr[$mfm_date_time];

$Energy_Export_today=round($row16['Energy_Export_today'],2);
$Energy_import_today=round($row16['Energy_import_today'],2);
$Energy_Export_total=round($row16['Energy_Export_total'],2);
$Energy_import_total=round($row16['Energy_import_total'],2);


$server_date_time=date('d-M-Y', strtotime($mfm_today_date));


$objPHPExcel->setActiveSheetIndex(0)->setCellValue('DA'.$row, $Energy_Export_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('DB'.$row, $Energy_import_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('DC'.$row, $Energy_Export_total);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('DD'.$row, $Energy_import_total);

$Energy_Export_today='';
$Energy_import_today='';
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }  
    $row = 3;
$select_Irr="SELECT Energy_Export_today,Energy_Export_total,Energy_import_today,Energy_import_total,today_date FROM Flexi_solar_MFM_daily
WHERE MONTH(today_date) = MONTH(CURRENT_DATE)AND YEAR(today_date) = YEAR(CURDATE())  and M_id='13' and plant_id='$plant_id' order by today_date DESC";
$rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$mfm_today_date=$row16['today_date'];
$mfm_date_time=date('dMY', strtotime($mfm_today_date));
 $irr_today=$irrarr[$mfm_date_time];

$Energy_Export_today=round($row16['Energy_Export_today'],2);
$Energy_import_today=round($row16['Energy_import_today'],2);
$Energy_Export_total=round($row16['Energy_Export_total'],2);
$Energy_import_total=round($row16['Energy_import_total'],2);


$server_date_time=date('d-M-Y', strtotime($mfm_today_date));


$objPHPExcel->setActiveSheetIndex(0)->setCellValue('DE'.$row, $Energy_Export_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('DF'.$row, $Energy_import_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('DG'.$row, $Energy_Export_total);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('DH'.$row, $Energy_import_total);

$Energy_Export_today='';
$Energy_import_today='';
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }  



    $row = 3;
$select_Irr="SELECT Energy_Export_today,Energy_Export_total,Energy_import_today,Energy_import_total,today_date FROM Flexi_solar_MFM_daily
WHERE MONTH(today_date) = MONTH(CURRENT_DATE)AND YEAR(today_date) = YEAR(CURDATE())  and M_id='14' and plant_id='$plant_id' order by today_date DESC";
$rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$mfm_today_date=$row16['today_date'];
$mfm_date_time=date('dMY', strtotime($mfm_today_date));
 $irr_today=$irrarr[$mfm_date_time];

$Energy_Export_today=round($row16['Energy_Export_today'],2);
$Energy_import_today=round($row16['Energy_import_today'],2);
$Energy_Export_total=round($row16['Energy_Export_total'],2);
$Energy_import_total=round($row16['Energy_import_total'],2);


$server_date_time=date('d-M-Y', strtotime($mfm_today_date));


$objPHPExcel->setActiveSheetIndex(0)->setCellValue('DI'.$row, $Energy_Export_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('DJ'.$row, $Energy_import_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('DK'.$row, $Energy_Export_total);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('DL'.$row, $Energy_import_total);

$Energy_Export_today='';
$Energy_import_today='';
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }  

      $row = 3;
$select_Irr="SELECT Energy_Export_today,Energy_Export_total,Energy_import_today,Energy_import_total,today_date FROM Flexi_solar_MFM_daily
WHERE MONTH(today_date) = MONTH(CURRENT_DATE)AND YEAR(today_date) = YEAR(CURDATE())  and M_id='16' and plant_id='$plant_id' order by today_date DESC";
$rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$mfm_today_date=$row16['today_date'];
$mfm_date_time=date('dMY', strtotime($mfm_today_date));
 $irr_today=$irrarr[$mfm_date_time];

$Energy_Export_today=round($row16['Energy_Export_today'],2);
$Energy_import_today=round($row16['Energy_import_today'],2);
$Energy_Export_total=round($row16['Energy_Export_total'],2);
$Energy_import_total=round($row16['Energy_import_total'],2);


$server_date_time=date('d-M-Y', strtotime($mfm_today_date));


$objPHPExcel->setActiveSheetIndex(0)->setCellValue('DM'.$row, $Energy_Export_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('DN'.$row, $Energy_import_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('DO'.$row, $Energy_Export_total);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('DP'.$row, $Energy_import_total);

$Energy_Export_today='';
$Energy_import_today='';
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }        
    $row = 3;
$select_Irr="SELECT Energy_Export_today,Energy_Export_total,Energy_import_today,Energy_import_total,today_date FROM Flexi_solar_MFM_daily
WHERE MONTH(today_date) = MONTH(CURRENT_DATE)AND YEAR(today_date) = YEAR(CURDATE())  and M_id='17' and plant_id='$plant_id' order by today_date DESC";
$rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$mfm_today_date=$row16['today_date'];
$mfm_date_time=date('dMY', strtotime($mfm_today_date));
 $irr_today=$irrarr[$mfm_date_time];

$Energy_Export_today=round($row16['Energy_Export_today'],2);
$Energy_import_today=round($row16['Energy_import_today'],2);
$Energy_Export_total=round($row16['Energy_Export_total'],2);
$Energy_import_total=round($row16['Energy_import_total'],2);


$server_date_time=date('d-M-Y', strtotime($mfm_today_date));


$objPHPExcel->setActiveSheetIndex(0)->setCellValue('DQ'.$row, $Energy_Export_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('DR'.$row, $Energy_import_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('DS'.$row, $Energy_Export_total);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('DT'.$row, $Energy_import_total);

$Energy_Export_today='';
$Energy_import_today='';
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }  


      $row = 3;
$select_Irr="SELECT Energy_Export_today,Energy_Export_total,Energy_import_today,Energy_import_total,today_date FROM Flexi_solar_MFM_daily
WHERE MONTH(today_date) = MONTH(CURRENT_DATE)AND YEAR(today_date) = YEAR(CURDATE())  and M_id='19' and plant_id='$plant_id' order by today_date DESC";
$rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$mfm_today_date=$row16['today_date'];
$mfm_date_time=date('dMY', strtotime($mfm_today_date));
 $irr_today=$irrarr[$mfm_date_time];

$Energy_Export_today=round($row16['Energy_Export_today'],2);
$Energy_import_today=round($row16['Energy_import_today'],2);
$Energy_Export_total=round($row16['Energy_Export_total'],2);
$Energy_import_total=round($row16['Energy_import_total'],2);


$server_date_time=date('d-M-Y', strtotime($mfm_today_date));


$objPHPExcel->setActiveSheetIndex(0)->setCellValue('DU'.$row, $Energy_Export_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('DV'.$row, $Energy_import_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('DW'.$row, $Energy_Export_total);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('DX'.$row, $Energy_import_total);

$Energy_Export_today='';
$Energy_import_today='';
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }  
    
      $row = 3;
$select_Irr="SELECT Energy_Export_today,Energy_Export_total,Energy_import_today,Energy_import_total,today_date FROM Flexi_solar_MFM_daily
WHERE MONTH(today_date) = MONTH(CURRENT_DATE)AND YEAR(today_date) = YEAR(CURDATE())  and M_id='20' and plant_id='$plant_id' order by today_date DESC";
$rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$mfm_today_date=$row16['today_date'];
$mfm_date_time=date('dMY', strtotime($mfm_today_date));
 $irr_today=$irrarr[$mfm_date_time];

$Energy_Export_today=round($row16['Energy_Export_today'],2);
$Energy_import_today=round($row16['Energy_import_today'],2);
$Energy_Export_total=round($row16['Energy_Export_total'],2);
$Energy_import_total=round($row16['Energy_import_total'],2);


$server_date_time=date('d-M-Y', strtotime($mfm_today_date));


$objPHPExcel->setActiveSheetIndex(0)->setCellValue('DY'.$row, $Energy_Export_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('DZ'.$row, $Energy_import_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('EA'.$row, $Energy_Export_total);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('EB'.$row, $Energy_import_total);

$Energy_Export_today='';
$Energy_import_today='';
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }  
    
       $row = 3;
$select_Irr="SELECT Energy_Export_today,Energy_Export_total,Energy_import_today,Energy_import_total,today_date FROM Flexi_solar_MFM_daily
WHERE MONTH(today_date) = MONTH(CURRENT_DATE)AND YEAR(today_date) = YEAR(CURDATE())  and M_id='22' and plant_id='$plant_id' order by today_date DESC";
$rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$mfm_today_date=$row16['today_date'];
$mfm_date_time=date('dMY', strtotime($mfm_today_date));
 $irr_today=$irrarr[$mfm_date_time];

$Energy_Export_today=round($row16['Energy_Export_today'],2);
$Energy_import_today=round($row16['Energy_import_today'],2);
$Energy_Export_total=round($row16['Energy_Export_total'],2);
$Energy_import_total=round($row16['Energy_import_total'],2);


$server_date_time=date('d-M-Y', strtotime($mfm_today_date));


$objPHPExcel->setActiveSheetIndex(0)->setCellValue('EC'.$row, $Energy_Export_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('ED'.$row, $Energy_import_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('EE'.$row, $Energy_Export_total);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('EF'.$row, $Energy_import_total);

$Energy_Export_today='';
$Energy_import_today='';
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }  
    

       $row = 3;
$select_Irr="SELECT Energy_Export_today,Energy_Export_total,Energy_import_today,Energy_import_total,today_date FROM Flexi_solar_MFM_daily
WHERE MONTH(today_date) = MONTH(CURRENT_DATE)AND YEAR(today_date) = YEAR(CURDATE())  and M_id='23' and plant_id='$plant_id' order by today_date DESC";
$rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$mfm_today_date=$row16['today_date'];
$mfm_date_time=date('dMY', strtotime($mfm_today_date));
 $irr_today=$irrarr[$mfm_date_time];

$Energy_Export_today=round($row16['Energy_Export_today'],2);
$Energy_import_today=round($row16['Energy_import_today'],2);
$Energy_Export_total=round($row16['Energy_Export_total'],2);
$Energy_import_total=round($row16['Energy_import_total'],2);


$server_date_time=date('d-M-Y', strtotime($mfm_today_date));


$objPHPExcel->setActiveSheetIndex(0)->setCellValue('EG'.$row, $Energy_Export_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('EH'.$row, $Energy_import_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('EI'.$row, $Energy_Export_total);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('EJ'.$row, $Energy_import_total);

$Energy_Export_today='';
$Energy_import_today='';
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }  
    
      $row = 3;
$select_Irr="SELECT Energy_Export_today,Energy_Export_total,Energy_import_today,Energy_import_total,today_date FROM Flexi_solar_MFM_daily
WHERE MONTH(today_date) = MONTH(CURRENT_DATE)AND YEAR(today_date) = YEAR(CURDATE())  and M_id='25' and plant_id='$plant_id' order by today_date DESC";
$rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$mfm_today_date=$row16['today_date'];
$mfm_date_time=date('dMY', strtotime($mfm_today_date));
 $irr_today=$irrarr[$mfm_date_time];

$Energy_Export_today=round($row16['Energy_Export_today'],2);
$Energy_import_today=round($row16['Energy_import_today'],2);
$Energy_Export_total=round($row16['Energy_Export_total'],2);
$Energy_import_total=round($row16['Energy_import_total'],2);


$server_date_time=date('d-M-Y', strtotime($mfm_today_date));


$objPHPExcel->setActiveSheetIndex(0)->setCellValue('EK'.$row, $Energy_Export_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('EL'.$row, $Energy_import_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('EM'.$row, $Energy_Export_total);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('EN'.$row, $Energy_import_total);

$Energy_Export_today='';
$Energy_import_today='';
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }  
    

      $row = 3;
$select_Irr="SELECT Energy_Export_today,Energy_Export_total,Energy_import_today,Energy_import_total,today_date FROM Flexi_solar_MFM_daily
WHERE MONTH(today_date) = MONTH(CURRENT_DATE)AND YEAR(today_date) = YEAR(CURDATE())  and M_id='26' and plant_id='$plant_id' order by today_date DESC";
$rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$mfm_today_date=$row16['today_date'];
$mfm_date_time=date('dMY', strtotime($mfm_today_date));
 $irr_today=$irrarr[$mfm_date_time];

$Energy_Export_today=round($row16['Energy_Export_today'],2);
$Energy_import_today=round($row16['Energy_import_today'],2);
$Energy_Export_total=round($row16['Energy_Export_total'],2);
$Energy_import_total=round($row16['Energy_import_total'],2);


$server_date_time=date('d-M-Y', strtotime($mfm_today_date));


$objPHPExcel->setActiveSheetIndex(0)->setCellValue('EO'.$row, $Energy_Export_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('EP'.$row, $Energy_import_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('EQ'.$row, $Energy_Export_total);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('ER'.$row, $Energy_import_total);

$Energy_Export_today='';
$Energy_import_today='';
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }  
    

      $row = 3;
$select_Irr="SELECT Energy_Export_today,Energy_Export_total,Energy_import_today,Energy_import_total,today_date FROM Flexi_solar_MFM_daily
WHERE MONTH(today_date) = MONTH(CURRENT_DATE)AND YEAR(today_date) = YEAR(CURDATE())  and M_id='28' and plant_id='$plant_id' order by today_date DESC";
$rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$mfm_today_date=$row16['today_date'];
$mfm_date_time=date('dMY', strtotime($mfm_today_date));
 $irr_today=$irrarr[$mfm_date_time];

$Energy_Export_today=round($row16['Energy_Export_today'],2);
$Energy_import_today=round($row16['Energy_import_today'],2);
$Energy_Export_total=round($row16['Energy_Export_total'],2);
$Energy_import_total=round($row16['Energy_import_total'],2);


$server_date_time=date('d-M-Y', strtotime($mfm_today_date));


$objPHPExcel->setActiveSheetIndex(0)->setCellValue('ES'.$row, $Energy_Export_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('ET'.$row, $Energy_import_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('EU'.$row, $Energy_Export_total);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('EV'.$row, $Energy_import_total);

$Energy_Export_today='';
$Energy_import_today='';
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }              
$row = 3;
//print_r($irrarr);
$select_Irr="SELECT Energy_Export_today,Energy_Export_total,Energy_import_today,Energy_import_total,today_date FROM Flexi_solar_MFM_daily
WHERE MONTH(today_date) = MONTH(CURRENT_DATE)AND YEAR(today_date) = YEAR(CURDATE())  and M_id='29' and plant_id='$plant_id' order by today_date DESC";
$rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$mfm_today_date=$row16['today_date'];
$mfm_date_time=date('dMY', strtotime($mfm_today_date));
 $irr_today=$irrarr[$mfm_date_time];

$Energy_Export_today=round($row16['Energy_Export_today'],2);
$Energy_import_today=round($row16['Energy_import_today'],2);
$Energy_Export_total=round($row16['Energy_Export_total'],2);
$Energy_import_total=round($row16['Energy_import_total'],2);
// $solar_plant_dc_capacity=5600;
$specific_yield = round(($Energy_Export_today/$solar_plant_dc_capacity),2);
if($irr_today!=0){
// $PR=round(($specific_yield/$irr_today)*100);
 $PR=round(($Energy_Export_today/($irr_today*$solar_plant_dc_capacity))*100);
}
else {
$PR=0;
}



//$SOLAR_IRRADIATION	=round($row16['IRRADIATION'],2);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('EW'.$row, $Energy_Export_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('EX'.$row, $Energy_import_today);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('EY'.$row, $Energy_Export_total);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('EZ'.$row, $Energy_import_total);
// $objPHPExcel->setActiveSheetIndex(0)->setCellValue('FC'.$row, $specific_yield);
// $objPHPExcel->setActiveSheetIndex(0)->setCellValue('FD'.$row, $PR);
$Energy_Export_today='';
$Energy_import_today='';
$server_date_time='';
$Meter_id='';
$kwh_today='';
	$row++;
	}


 $row = 3;
//print_r($irrarr);
$select_Irr="SELECT SUM(Energy_Export_today) as sum_EE,today_date FROM Flexi_solar_MFM_daily 
WHERE MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())  and MFM_Cumulative='1' and plant_id='$plant_id' group by DATE(today_date) order by today_date DESC";
$rs16=mysqli_query($conn2,$select_Irr) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{
$mfm_today_date=$row16['today_date'];
$mfm_date_time=date('dMY', strtotime($mfm_today_date));
 $irr_today=$irrarr[$mfm_date_time];

$Energy_Export_today=round($row16['sum_EE'],2);
//$solar_plant_dc_capacity=5600;
$specific_yield = round(($Energy_Export_today/$solar_plant_dc_capacity),2);
if($irr_today!=0){
//$PR=round(($specific_yield/$irr_today)*100);
$PR=round(($Energy_Export_today/($irr_today*$solar_plant_dc_capacity))*100);
}
else {
$PR=0;  
}
$server_date_time=date('d-M-Y', strtotime($mfm_today_date));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row, $server_date_time);

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('FC'.$row, $specific_yield);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('FD'.$row, $PR);

$Energy_Export_today='';
$Energy_import_today='';
$server_date_time='';
$Meter_id='';
$kwh_today='';
    $row++;
    }
/*
$select_Inverter="select Inverter_id,kwh_today,today_date from Flexi_solar_inverters_daily  where MONTH(today_date) = MONTH(CURRENT_DATE) AND YEAR(today_date) = YEAR(CURDATE())
and plant_id='$plant_id' and Inverter_id='14' order by today_date DESC";


$rs16=mysqli_query($conn2,$select_Inverter) or die("error 101".mysqli_error($conn2));
while($row16=mysqli_fetch_array($rs16))
{

$_id=$row16['id'];
$Inverter_id=$row16['Inverter_id'];
$kwh_today=round($row16['kwh_today'],2);$today_date=$row16['today_date'];
$server_date_time=date('d-M-Y', strtotime($today_date));
$query_wms_date=date('Y-m-d H', strtotime($server_date_time));

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('O'.$row, $kwh_today);
$server_date_time='';
$Meter_id='';
$kwh_today='';
	$row++;
	}
$row = 3;
*/
// Rename worksheet





$objPHPExcel->getActiveSheet()->mergeCells('A1:FD1');
$objPHPExcel->getActiveSheet()->setTitle(date('F-Y'));


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


$file_down_name= date('j-F-Y').'_'.$solar_plant_name_replace_space.'_report.xls';

// $file_down_name= date('j-F-Y').'_report.xls';
// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="'.$file_down_name.'"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('/home/swltstawsfleximc/public_html/zemail_data/'.$file_down_name);
$objWriter->save('php://output');?>
