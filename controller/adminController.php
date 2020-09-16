<?php
ini_set("display_errors","1");
include_once('../class/class.product.php');

$prodObj = new Product();
if(isset($_GET['type'])){
	 $q=$_GET['type'];
}else{
	exit();
}

switch($q){

	case 'addProductData':
		$data = $prodObj->addProductData($_POST);
		echo $data;
		break;

	case 'productImport':
		$data = $prodObj->productImport($_FILES['importFile']);
		echo $data;
		break;

	case 'getProductDataTrf':
		$data = $prodObj->getProductData($_POST);
		echo json_encode($data);
		break;
		
	case 'TransferDataTrf':
 		$data = $prodObj->productTransfer($_POST);
 		echo json_encode($data);
		break;

	case 'receiveProduct':
		$data = $prodObj->productRcvd($_POST);
		echo json_encode($data);
		break;
		
	case 'SaleProduct':
	    $data = $prodObj->getSaleproduct($_POST);
	    echo json_encode($data);
	  // print_r($_POST);
	    break;

	case 'getTransferData':
		// print_r($_POST);
		$data = $prodObj->getTransferDataJson($_POST);
		echo json_encode($data);
		break;

	case 'getTransferQtyDetails':
		$data = $prodObj->getTransferQtyDetailsJSON($_POST['transactionID']);
		echo json_encode($data);
		break;

	case 'getAvailableQty':
		// print_r($_POST);
		$data = $prodObj->getSalesDataByShopName($_POST['shopID']);
		echo json_encode($data);
		break;

	case 'getcategory_filter':
		print_r($_POST);
		$data = $prodObj->getBigDataReport($_POST);
		echo json_encode($data);
		break;

	case 'salesVsStock':
		// print_r($_POST);
		$data = $prodObj->getBigDataReport($_POST);
		// echo json_encode($data);
		echo $data;
		break;

	case 'getcategory_filter_new':
		$data = $prodObj->getBigDataReport_new($_POST);
		echo json_encode($data);
		break;
	
	case 'searchInvoice':
		$data = $prodObj->searchProductByInvoice($_POST);
		echo json_encode($data);
		break;


	default:
		break;
}


?>