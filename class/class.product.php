<?php
ini_set('display_errors','1');
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
session_start();
include_once("../connection.php");
include_once("class.transaction.php");
include_once("class.actors.php");
include_once("../PHPExcel/Classes/PHPExcel/IOFactory.php");
class Product{

    private $conn_1;
    // private $transact;
    function __construct(){
        global $conn;
        $this->conn_1 = $conn;
        // $this->transact = new Transaction();
    }

    public function addProductData($params){
        extract($params);
        // print_r($params);
        // exit();
        $transactObj = new Transaction();
        $deadStockDate = date('Y-m-d', strtotime("+3 months", strtotime($mfg_date)));
        // print_r($_SESSION);
        if(!is_numeric($product_name)){
            $product_name =$this->getProductCatID($product_name);
        }
        if(!is_numeric($sub_product)){
            $sub_product = $this->getSubProductCatID($prod_sub_cat,$prodID);
        }
        if(!is_numeric($size)){
            $size = $this->getSizeID($size);
        }
        if(!is_numeric($color)){
            $color = $this->getColorID($color);
        }
        if(!is_numeric($material)){
            $material = $this->getMaterialID($material);
        }
        $selectStmt = "SELECT * FROM purchase_order WHERE 
        product_cat LIKE '$product_name' AND 
        product_subcat LIKE '$sub_product' AND
        vendor_id LIKE '$vendor' AND
        size LIKE '$size' AND
        color LIKE '$color' AND
        material LIKE '$material' AND
        design_number LIKE 'design_no' AND
        hsn LIKE '$hsn_code' AND
        gst LIKE '$gst' AND
        purchase_price LIKE '$purchase_price'
        wsp LIKE '$wsp' AND
        mrp LIKE '$mrp' AND
        gender LIKE '$gender'
        order by ID desc LIMIT 0,1
        ";
        $selectQuery = mysqli_query($this->conn_1,$stmt);
        if(mysqli_num_rows($selectQuery) > 0){
            $result = mysqli_fetch_assoc($query);
            $prod_id = $result['ID'];
            $old_qty = $result['qty'];
            $updated_qty = $qty;
            $stmt = "UPDATE purchase_order set qty = '$updated_qty', mfg_date = '$mfg_date' dead_stock_date = $deadStockDate dead_stock_flag = 0, flag = 1 WHERE ID = $prod_id";
            $query = mysqli_query($this->conn_1,$stmt);

        }else{
            $stmt = "INSERT INTO purchase_order (product_cat,product_subcat,vendor_id,size,color,material,design_number,hsn,gst,purchase_price,wsp,mrp,qty,gender,discount,mfg_date,remarks,dead_stock_date,dead_stock_flag,flag)  VALUES ('$product_name','$sub_product','$vendor','$size','$color','$material','$design_no','$hsn_code','$gst','$purchase_price','$wsp','$mrp','$qty','$gender','$discount','$mfg_date','$remarks','$deadStockDate',0,1)";
            

            // echo $stmt;
            // exit();
            $query = mysqli_query($this->conn_1,$stmt);
            $prod_id = mysqli_insert_id($this->conn_1);
            $randProdCode = rand(0000000000,9999999999);
            $stmtUpdate = "UPDATE purchase_order SET product_code = $randProdCode WHERE ID = $prod_id";
            $query1 = mysqli_query($this->conn_1,$stmtUpdate);

        }
        if($query){
            $admin_id = $_SESSION['uid'];
            $transactObj->transactionDetails(Actors::VENDOR,$vendor,Actors::ADMIN,$admin_id,$prod_id,$qty);
            // echo "Success <br/>";
            $status="Success";
            $message = "Product Added";

        }else{
            // echo "Failed <br/>";
            $status="Failed";
            $message="Failed to add product Data";
        }
        $d = array("status"=>$status,"message"=>$message);
        return json_encode($d);
        // print_r($params);
    }



    public function getVendor(){
        $stmt = "SELECT * FROM vendor_master WHERE flag = 1";
        $query = mysqli_query($this->conn_1,$stmt);
        $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
    }

    public function getSubProductCat(){
        $stmt = "SELECT * FROM subproduct_master WHERE flag = 1";
        $query = mysqli_query($this->conn_1,$stmt);
        $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
    }

    public function getProductCat(){
        $stmt = "SELECT * FROM productcat_master WHERE flag = 1";
        $query = mysqli_query($this->conn_1,$stmt);
        $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
    }

    public function getSize(){
        $stmt = "SELECT * FROM size";
        $query = mysqli_query($this->conn_1,$stmt);
        $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
    }

    public function getColor(){
        $stmt = "SELECT * FROM color";
        $query = mysqli_query($this->conn_1,$stmt);
        $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
    }

    public function getGender(){
        $stmt = "SELECT * FROM gender_master";
        $query = mysqli_query($this->conn_1,$stmt);
        $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;   
    }

    public function getMaterial(){
        $stmt = "SELECT * FROM material_master";
        $query = mysqli_query($this->conn_1,$stmt);
        $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;   
    }


    public function productImport($Excel){
        $type= $Excel['type'];
        $tmpName = $Excel['tmp_name'];
        $mimes = array('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        PHPExcel_Settings::setZipClass(PHPExcel_Settings::PCLZIP);
        $excelReader = PHPExcel_IOFactory::createReaderForFile($tmpName);
        $excelObj = $excelReader->load($tmpName);
        $worksheet = $excelObj->getSheet(0);
        $TotalRows = $worksheet->getHighestRow();
        $TotalColumn = PHPExcel_Cell::columnIndexFromString($worksheet->getHighestColumn());
        for($row=2;$row<=$TotalRows;$row++){
            // $ltr = PHPExcel_Cell::stringFromColumnIndex($col);
            $used_by = $worksheet->getCellByColumnAndRow(0, $row);
            $vendor_name = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
            $prod_cat = $worksheet->getCellByColumnAndRow(2, $row);
            $prod_sub_cat = $worksheet->getCellByColumnAndRow(3, $row);
            $design_number = $worksheet->getCellByColumnAndRow(4, $row);
            $size = $worksheet->getCellByColumnAndRow(5, $row);
            $color = $worksheet->getCellByColumnAndRow(6, $row);
            $material = $worksheet->getCellByColumnAndRow(7, $row);
            $hsn_code = $worksheet->getCellByColumnAndRow(8, $row);
            $gst = $worksheet->getCellByColumnAndRow(9, $row);
            $purchase_price = $worksheet->getCellByColumnAndRow(10, $row);
            $wsp = $worksheet->getCellByColumnAndRow(11, $row);
            $mrp = $worksheet->getCellByColumnAndRow(12, $row);
            $qty = $worksheet->getCellByColumnAndRow(13, $row)->getValue();
            $discount = $worksheet->getCellByColumnAndRow(14, $row);
            $cell_value = $worksheet->getCellByColumnAndRow(15, $row);
            $remarks = $worksheet->getCellByColumnAndRow(16, $row)->getValue();
            $mfg_date = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($cell_value->getValue()));
            $this->uploadData($vendor_name,$prod_cat,$prod_sub_cat,$design_number,$size,$color,$material,$hsn_code,$gst,$purchase_price,$wsp,$mrp,$qty,$used_by,$discount,$mfg_date,$remarks);
        }
        // echo 'success';
    }

    private function uploadData($vendor_name,$prod_cat,$prod_sub_cat,$design_number,$size,$color,$material,$hsn_code,$gst,$purchase_price,$wsp,$mrp,$qty,$used_by,$discount,$mfg_date,$remarks){
        // echo "in uploadData function".PHP_EOL;
        $error_arr = array(); 
        $vendorID = $this->getVendorID($vendor_name);
        $prodID =$this->getProductCatID($prod_cat);
        $subProdID = $this->getSubProductCatID($prod_sub_cat,$prodID);
        $sizeID = $this->getSizeID($size);
        $colorID = $this->getColorID($color);
        $materialID = $this->getMaterialID($material);
        $usedByID = $this->getUsedByID($used_by);
        // echo $usedByID;
        // exit();

        // exit();
        $d = $this->insertProductData($vendorID,$prodID,$subProdID,$design_number,$sizeID,$colorID,$materialID,$hsn_code,$gst,$purchase_price,$wsp,$mrp,$qty,$usedByID,$discount,$mfg_date,$remarks);
        return $d;

    }

    private function insertProductData($vendorID,$prodID,$subProdID,$design_number,$sizeID,$colorID,$materialID,$hsn_code,$gst,$purchase_price,$wsp,$mrp,$qty,$usedByID,$discount,$mfg_date,$remarks){
        // echo "in InsertProductData function".PHP_EOL;
        $transactObj = new Transaction();
        // $gst = $gst * 100;
        // $discount = $discount * 100;
        if($gst=='')
        {
            $gst=0;
        }
        if($discount=='')
        {
            $discount=0;
        }
        $deadStockDate = date('Y-m-d', strtotime("+3 months",strtotime($mfg_date)));
        $stmtSelect = "SELECT * FROM purchase_order WHERE
        product_cat = $prodID AND
        product_subcat = $subProdID AND
        vendor_id = $vendorID AND
        size = $sizeID AND
        color = $colorID AND
        material = $materialID AND
        design_number LIKE '$design_number' AND
        hsn LIKE '$hsn_code' AND
        gst LIKE '$gst' AND
        purchase_price LIKE '$purchase_price' AND
        wsp LIKE '$wsp' AND
        mrp LIKE '$mrp' AND
        gender LIKE '$usedByID' AND
        discount LIKE $discount ORDER BY ID LIMIT 0,1";
        $selectQuery = mysqli_query($this->conn_1,$stmtSelect);
        // echo $stmtSelect;
        // exit();

        if(mysqli_num_rows($selectQuery) > 0){
            // echo 'data already exist';
            $result = mysqli_fetch_assoc($selectQuery);
            $prod_id = $result['ID'];
            $lastQty = (int)$result['qty'];
            // echo $lastQty;
            echo (int)$qty;
            $updated_qty = ($lastQty + (int)$qty);
            // echo $updated_qty;
            $stmt = "UPDATE purchase_order SET qty = '$updated_qty', dead_stock_date = '$deadStockDate', dead_stock_flag = 0 WHERE ID = $prod_id";
            // echo $stmt;
            $query = mysqli_query($this->conn_1,$stmt);
        }else{
            $stmt = "INSERT INTO purchase_order (product_cat,product_subcat,vendor_id,size,color,material,design_number,hsn,gst,purchase_price,wsp,mrp,qty,gender,discount,mfg_date,remarks,dead_stock_date,dead_stock_flag,flag)  VALUES ($prodID,$subProdID,$vendorID,$sizeID,$colorID,$materialID,'$design_number','$hsn_code','$gst','$purchase_price','$wsp','$mrp','$qty','$usedByID','$discount','$mfg_date','$remarks','$deadStockDate',0,1)";
            // echo $stmt;
            $query = mysqli_query($this->conn_1,$stmt) or die(mysqli_error($this->conn_1));
            $prod_id = mysqli_insert_id($this->conn_1);
            $randProdCode = rand(0000000000,9999999999);
            $stmtUpdate = "UPDATE purchase_order SET product_code = $randProdCode WHERE ID = $prod_id";
            $query1 = mysqli_query($this->conn_1,$stmtUpdate);
        }
         
        if($query){
            $admin_id = $_SESSION['uid'];
            echo '<pre>';
            print_r($_SESSION);
            
            $transactObj->transactionDetails(Actors::VENDOR,$vendorID,Actors::ADMIN,$admin_id,$prod_id,$qty);
            // echo "Success <br/>";
            $status="Success";
            $message = "Product Added";
        }else{
            // echo "Failed <br/>";
            $status="Failed";
            $message="Failed to add product Data";
        }
        $d = array("status"=>$status,"message"=>$message);
        return $d;
    }

    private function getVendorID($vendor_name){
        $stmt = "SELECT * FROM vendor_master WHERE vendor_name LIKE '$vendor_name' AND flag=1 ORDER BY ID LIMIT 0,1";
        $query = mysqli_query($this->conn_1,$stmt);
        // echo $stmt;
        if(mysqli_num_rows($query) > 0){
            $result = mysqli_fetch_assoc($query);
            $vendor_ID = $result['ID'];
        }else{
            $stmtInsert = "INSERT INTO vendor_master (vendor_name,flag) values ('$vendor_name',1)";
            $query1 = mysqli_query($this->conn_1,$stmtInsert);
            // echo $stmtInsert;
            $vendor_ID = mysqli_insert_id($this->conn_1);
        }
        return $vendor_ID;
    }

    private function getProductCatID($product_cat){
        $stmt ="SELECT * FROM productcat_master WHERE product_cat LIKE '$product_cat' AND flag = 1 LIMIT 0,1";
        $query = mysqli_query($this->conn_1,$stmt);
        if(mysqli_num_rows($query) > 0){
            $result = mysqli_fetch_assoc($query);
            $prod_ID = $result['ID'];
        }else{
            $stmtInsert = "INSERT INTO productcat_master (product_cat,flag) VALUES ('$product_cat',1)";
            $query1 = mysqli_query($this->conn_1,$stmtInsert);
            $prod_ID = mysqli_insert_id($this->conn_1);
        }
        return $prod_ID;
    }

    private function getSubProductCatID($prod_sub_cat,$prod_id){
        $stmt = "SELECT * FROM subproduct_master WHERE subProductName LIKE '$prod_sub_cat' AND product_ID = $prod_id AND flag=1 LIMIT 0,1";
        $query = mysqli_query($this->conn_1,$stmt);
        // echo $stmt;
        if(mysqli_num_rows($query)>0){
            $result = mysqli_fetch_assoc($query);
            $subProd_ID = $result['ID'];
        }else{
            $stmtInsert= "INSERT INTO subproduct_master (subProductName,product_ID,flag) VALUES ('$prod_sub_cat',$prod_id,1)";
            $query1 = mysqli_query($this->conn_1,$stmtInsert);
            $subProd_ID = mysqli_insert_id($this->conn_1);
        }
        return $subProd_ID;
    }

    private function getSizeID($size){
        $stmt = "SELECT * FROM size WHERE size LIKE '$size' LIMIT 0,1";
        $query = mysqli_query($this->conn_1,$stmt);
        if(mysqli_num_rows($query) > 0){
            $result = mysqli_fetch_assoc($query);
            $sizeID = $result['id'];
        }else{
            $stmtInsert="INSERT INTO size (size) VALUES ('$size')";
            $query1 = mysqli_query($this->conn_1,$stmtInsert);
            $sizeID = mysqli_insert_id($query1);
        }
        return $sizeID;
    }

    private function getColorID($color){
        $stmt = "SELECT * FROM color WHERE color_name LIKE '$color' LIMIT 0,1";
        $query = mysqli_query($this->conn_1,$stmt);
        // echo $stmt;
        if(mysqli_num_rows($query) > 0){
            $result = mysqli_fetch_assoc($query);
            $colorID = $result['id'];
        }else{
            $stmtInsert = "INSERT INTO color (color_name) VALUES ('$color')";
            // echo $stmtInsert;
            $query1 = mysqli_query($this->conn_1,$stmtInsert);
            $colorID = mysqli_insert_id($this->conn_1);
        }
        return $colorID;
    }

    private function getMaterialID($material){
        $stmt ="SELECT * FROM material_master WHERE material LIKE '$material' AND flag = 1 LIMIT 0,1";
        $query = mysqli_query($this->conn_1,$stmt);
        if(mysqli_num_rows($query) > 0){
            $result = mysqli_fetch_assoc($query);
            $materialID = $result['ID'];
        }else{
            $stmtInsert =  "INSERT INTO material_master (material,flag) VALUES ('$material',1)";
            $query1 = mysqli_query($this->conn_1,$stmtInsert);
            $materialID = mysqli_insert_id($this->conn_1);
        }
        return $materialID;
    }

    private function getUsedByID($usedBy){
        $stmt = "SELECT * FROM gender_master WHERE name LIKE '$usedBy' AND flag = 1 LIMIT 0,1";
        $query = mysqli_query($this->conn_1,$stmt);
        if(mysqli_num_rows($query) > 0){
            $result = mysqli_fetch_assoc($query);
            $genderID = $result['ID'];
        }else{
            $stmtInsert = "INSERT INTO gender_master (name,flag) VALUES ('$usedBy',1)";;
            $query1 = mysqli_query($this->conn_1,$stmtInsert);
            $genderID = mysqli_insert_id($this->conn_1);
        }
        return $genderID;
    }

    public function getProductData($params){
        extract($params);
        $stmt=" SELECT po.ID,po.gst,po.purchase_price,po.wsp,po.mrp,po.qty,po.product_code,po.discount,po.mfg_date,po.remarks,po.dead_stock_date,pm.product_cat,sm.subProductName,v.vendor_name,s.size,c.color_name,m.material,g.name
            FROM purchase_order po
            LEFT JOIN productcat_master pm ON pm.ID = po.product_cat
            LEFT JOIN subproduct_master sm ON sm.ID = po.product_subcat
            LEFT JOIN vendor_master v ON v.ID = po.vendor_id
            LEFT JOIN size s ON s.id = po.size
            LEFT JOIN color c ON c.id = po.color
            LEFT JOIN material_master m ON m.ID = po.material
            LEFT JOIN gender_master g ON g.ID = po.gender WHERE product_code='$barcode' LIMIT 0,1";
            $query = mysqli_query($this->conn_1,$stmt);
            $data = mysqli_fetch_assoc($query);
            $avl_qty = $this->getProductQty($barcode,$actorType,$actorID);
            $prod_ID = $data['ID'];
            $d = array("qty"=>1,"prodID"=>$prod_ID,"a_qty"=>$avl_qty,'prod_data'=>$data);
            return $d;
    }

    public function getProductQty($barcode,$actorType,$actorID){
        $stmt = "SELECT SUM(qt.cr_qty)-SUM(qt.dr_qty) as available_qty FROM qty_tracker qt 
        LEFT JOIN purchase_order po ON po.ID = qt.prod_id
        WHERE po.product_code LIKE '$barcode' AND qt.actor_type = $actorType AND qt.actor_id = $actorID GROUP BY qt.prod_id" ;
        $query = mysqli_query($this->conn_1,$stmt);
        // echo $stmt;
        $data = mysqli_fetch_assoc($query);
        return $data['available_qty'];
    }
    
    public function productTransfer($params)
    {
        $transactObj = new Transaction();
        extract($params);
        // print_r($params);
        $trf_date = date('Y-m-d');
        $sql="INSERT INTO transfer_product(from_actor,from_actor_id,to_actor,to_actor_id,transfer_date,flag) VALUES('$fromActorType','$userID','$toActorType','$shop','$trf_date','1')";
        $query = mysqli_query($this->conn_1,$sql);
        $trf_id = mysqli_insert_id($this->conn_1);
        foreach($pro_id as $key=> $value)
        {
            $tpdID = $this->insertTransferProductDetails($trf_id,$pro_id[$key],$qty[$key]);
            $transaction_ID = $transactObj->oneWayTransaction($fromActorType,$userID,$toActorType,$shop,$pro_id[$key],$qty[$key]);
            $stmtUpdateTrn = "UPDATE transfer_product_details SET transaction_id = $transaction_ID WHERE ID = $tpdID";
            $q2 = mysqli_query($this->conn_1,$stmtUpdateTrn);
            if(mysqli_affected_rows($this->conn_1))
            {   
                $status="Success";
                $message = "Product Transfer Successfully";             
            }
            else
            {
                $status="Failed";
                $message = "Product Transfer Failed";
            }
            echo $status;
            
        }

        // $d = array("status"=>$status,)
        // return 
        
    }

    public function insertTransferProductDetails($trf_id,$prod,$qty){
            $stmt="INSERT INTO transfer_product_details(transfer_id,product_id,t_qty,flag) VALUES($trf_id,'$prod','$qty','1')";
            $query = mysqli_query($this->conn_1,$stmt);
            echo $stmt;
            $tpdID = mysqli_insert_id($this->conn_1);
            if($query){
                $stmtFetch = "SELECT * FROM purchase_order WHERE ID = $prod AND flag = 1";
                $q1 = mysqli_query($this->conn_1,$stmtFetch);
                $stmtData = mysqli_fetch_assoc($q1);
                $updated_qty = $stmtData['qty']-$qty;
                $stmtUpdate = "UPDATE purchase_order SET qty = $updated_qty WHERE ID = $prod";
                $q2 = mysqli_query($this->conn_1,$stmtUpdate);
            }
            return $tpdID;
    }

    public function getReceivedDetails($shop){
        $to_actor = Actors::SHOP;
        $stmt = "SELECT * FROM transfer_product WHERE to_actor = $to_actor AND to_actor_id = $shop AND flag = 1";
        $query = mysqli_query($this->conn_1,$stmt);
        // echo $stmt;
        $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
    }

    public function getReceivedData($trf_ID){
        $toActorType = Actors::SHOP;
        $stmt = "SELECT tp.ID as tbl_id, tp.product_id,tp.t_qty as trfQty,tp.r_qty as rcvdQty,po.gst,po.purchase_price,po.wsp,po.mrp,po.product_code,po.discount,po.mfg_date,po.remarks,po.dead_stock_date,pm.product_cat,sm.subProductName,v.vendor_name,s.size,c.color_name,m.material,g.name 
        FROM transfer_product_details tp
        LEFT JOIN purchase_order po ON po.ID = tp.product_id
        LEFT JOIN productcat_master pm ON pm.ID = po.product_cat
        LEFT JOIN subproduct_master sm ON sm.ID = po.product_subcat
        LEFT JOIN vendor_master v ON v.ID = po.vendor_id
        LEFT JOIN size s ON s.id = po.size
        LEFT JOIN color c ON c.id = po.color
        LEFT JOIN material_master m ON m.ID = po.material
        LEFT JOIN gender_master g ON g.ID = po.gender
        WHERE tp.transfer_id = $trf_ID AND tp.flag = 1";
        // echo $stmt;
        $query = mysqli_query($this->conn_1,$stmt);
        $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
    }
    
    public function getTransferData()
    {
        $sql="SELECT * FROM transfer_product";
        $query=mysqli_query($conn_1,$sql);
        $data=mysqli_fetch_assoc($query);
        return $data;
    }

    public function getTransferQtyDetailsJSON($trnID){
        $stmt = "SELECT td.*,po.purchase_price,po.wsp,po.mrp,po.product_code,po.discount,po.hsn,po.mfg_date,po.remarks,po.dead_stock_date,pm.product_cat,sm.subProductName,v.vendor_name,s.size,c.color_name,m.material,g.name FROM  transfer_product_details td
            LEFT JOIN purchase_order po ON po.ID = td.product_id
            LEFT JOIN productcat_master pm ON pm.ID = po.product_cat
            LEFT JOIN subproduct_master sm ON sm.ID = po.product_subcat
            LEFT JOIN vendor_master v ON v.ID = po.vendor_id
            LEFT JOIN size s ON s.id = po.size
            LEFT JOIN color c ON c.id = po.color
            LEFT JOIN material_master m ON m.ID = po.material
            LEFT JOIN gender_master g ON g.ID = po.gender WHERE td.transfer_id = $trnID";
        $query = mysqli_query($this->conn_1,$stmt);
        // echo $stmt;
        $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
    }

    public function getTransferDataJson($params){
        extract($params);
       // print_r($params);
        $stmt = "SELECT tp.ID, DATE_FORMAT(tp.transfer_date,'%d %M %Y') as transfer_date,DATE_FORMAT(tp.receive_date,'%d %M %Y') as receive_date,tp.flag,u.user_name as receivedBy,u1.user_name as fromName, u2.shop_name as toName FROM transfer_product tp
        LEFT JOIN users u ON u.id = tp.receive_by
        LEFT JOIN users u1 ON u1.id = tp.from_actor_id
        LEFT JOIN shop u2 ON u2.id = tp.to_actor_id
        WHERE from_actor = $fromType AND from_actor_id = $fromID AND to_actor = $toType AND to_actor_id = $toID";
        $query = mysqli_query($this->conn_1,$stmt);
        // echo $stmt;
        $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
    }

    public function getShopNameByID($shopID){
        $stmt = "SELECT * FROM shop WHERE id = $shopID";
        $query = mysqli_query($this->conn_1,$stmt);
        $data = mysqli_fetch_assoc($query);
        return $data;
    }

    public function productRcvd($params){
        extract($params);
        $transactObj = new Transaction();
        // print_r($params);
        $statusArr=array();
        for($i=0;$i<count($prod_id);$i++){
            $stmtSelect = "SELECT * FROM transfer_product_details WHERE ID = $tbl_id[$i] LIMIT 0,1";
            $q1 = mysqli_query($this->conn_1,$stmtSelect);
            $tblData = mysqli_fetch_assoc($q1);
            $flag=1;
            if($tblData['t_qty']==$received_qty[$i]){
                $flag = 2;
            }
            $stmtUpdate = "UPDATE transfer_product_details SET r_qty = $received_qty[$i],flag=$flag WHERE ID = $tbl_id[$i]";
            $query = mysqli_query($this->conn_1,$stmtUpdate);
            if($query){
                $trn_ID = $tblData['transaction_id'];
                $qty = $received_qty[$i];
                $transactObj->oneWayTransactionSucceed($trn_ID,$qty);
            }
        }
        $status = "";
        $stmt = "SELECT * FROM transfer_product_details WHERE transfer_id = $trf_ID AND flag = 1"; 
        $q2 = mysqli_query($this->conn_1,$stmt);
        if(mysqli_num_rows($q2) < 1){
            $rcvd_date = date('Y-m-d');
            $stmtUpdate1 = "UPDATE transfer_product SET receive_date = '$rcvd_date', receive_by = $userID, flag =2 WHERE ID = $trf_ID";
            $q3 = mysqli_query($this->conn_1,$stmtUpdate1); 
            $status ="All Products recevied";
        }else{
            $status ="Partly products received";
        }
        return $status;
    }
    
     public function getSaleproduct($params){
        extract($params);
         $stmt="SELECT SUM(qt.cr_qty)-SUM(qt.dr_qty) as avl_qty,qt.prod_id,po.gst,po.purchase_price,po.wsp,po.mrp,po.product_code,po.discount,po.hsn,
                    po.mfg_date,po.remarks,po.dead_stock_date,pm.product_cat,sm.subProductName,v.vendor_name,s.size,c.color_name,m.material,g.name
                    FROM qty_tracker as qt LEFT JOIN purchase_order po ON po.ID = qt.prod_id
                    LEFT JOIN productcat_master pm ON pm.ID = po.product_cat
                    LEFT JOIN subproduct_master sm ON sm.ID = po.product_subcat
                    LEFT JOIN vendor_master v ON v.ID = po.vendor_id
                    LEFT JOIN size s ON s.id = po.size
                    LEFT JOIN color c ON c.id = po.color
                    LEFT JOIN material_master m ON m.ID = po.material
                    LEFT JOIN gender_master g ON g.ID = po.gender WHERE qt.actor_type='$actorType' AND qt.actor_id='$actorID' AND product_code='$barcode'";
            $query = mysqli_query($this->conn_1,$stmt) or die(mysqli_error($conn_1));
            $data = mysqli_fetch_assoc($query);
            $avl_qty = $this->getProductQty($barcode,$actorType,$actorID);
            $prod_ID = $data['prod_id'];
            $d = array("qty"=>1,"prodID"=>$prod_ID,"a_qty"=>$avl_qty,'prod_data'=>$data);
            return $d;
    }

       public function getAvailableQty($actorType,$actorID,$toDate=null,$fromDate=null){
        $current_date=date('Y-m-d'); // added by sandeep
        $stmt ="SELECT SUM(qt.cr_qty) as cr_qty ,SUM(qt.dr_qty) as dr_qty,qt.prod_id,po.gst,po.hsn,po.purchase_price,po.wsp,po.mrp,po.qty,po.product_code,po.design_number,po.discount,po.mfg_date,po.remarks,po.dead_stock_date,pm.product_cat,sm.subProductName,v.vendor_name,s.size,c.color_name,m.material,g.name
            FROM qty_tracker as qt LEFT JOIN purchase_order po ON po.ID = qt.prod_id
            LEFT JOIN productcat_master pm ON pm.ID = po.product_cat
            LEFT JOIN subproduct_master sm ON sm.ID = po.product_subcat
            LEFT JOIN vendor_master v ON v.ID = po.vendor_id
            LEFT JOIN size s ON s.id = po.size
            LEFT JOIN color c ON c.id = po.color
            LEFT JOIN material_master m ON m.ID = po.material
            LEFT JOIN gender_master g ON g.ID = po.gender
            WHERE qt.actor_type='$actorType' AND qt.actor_id='$actorID' AND po.dead_stock_date>'$current_date' GROUP BY qt.prod_id";// update by sandeep
        $query = mysqli_query($this->conn_1,$stmt);
        $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
    }
    // added by sandeep
    public function getexpired_product($actorType,$actorID,$toDate=null,$fromDate=null){
    $current_date=date('Y-m-d');
    $stmt ="SELECT SUM(qt.cr_qty) as cr_qty ,SUM(qt.dr_qty) as dr_qty,qt.prod_id,po.gst,po.hsn,po.purchase_price,po.wsp,po.mrp,po.qty,po.product_code,po.design_number,po.discount,po.mfg_date,po.remarks,po.dead_stock_date,pm.product_cat,sm.subProductName,v.vendor_name,s.size,c.color_name,m.material,g.name
        FROM qty_tracker as qt LEFT JOIN purchase_order po ON po.ID = qt.prod_id
        LEFT JOIN productcat_master pm ON pm.ID = po.product_cat
        LEFT JOIN subproduct_master sm ON sm.ID = po.product_subcat
        LEFT JOIN vendor_master v ON v.ID = po.vendor_id
        LEFT JOIN size s ON s.id = po.size
        LEFT JOIN color c ON c.id = po.color
        LEFT JOIN material_master m ON m.ID = po.material
        LEFT JOIN gender_master g ON g.ID = po.gender
        WHERE qt.actor_type='$actorType' AND qt.actor_id='$actorID' AND po.dead_stock_date<'$current_date' GROUP BY qt.prod_id";
    $query = mysqli_query($this->conn_1,$stmt);
    $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
    return $data;
    }
    // end

    public function getSalesDataByShopName($shopID){
        $stmt ="SELECT td.product_id,SUM(td.qty) as saleqty,po.purchase_price,po.wsp,po.mrp,po.qty,po.product_code,po.discount,po.mfg_date,po.remarks,po.dead_stock_date,pm.product_cat,sm.subProductName,v.vendor_name,s.size,c.color_name,m.material,g.name
            FROM transaction_details as td 
            LEFT JOIN purchase_order po ON po.ID = td.product_id
            LEFT JOIN productcat_master pm ON pm.ID = po.product_cat
            LEFT JOIN subproduct_master sm ON sm.ID = po.product_subcat
            LEFT JOIN vendor_master v ON v.ID = po.vendor_id
            LEFT JOIN size s ON s.id = po.size
            LEFT JOIN color c ON c.id = po.color
            LEFT JOIN material_master m ON m.ID = po.material
            LEFT JOIN gender_master g ON g.ID = po.gender
            WHERE  td.from_actor = '2' AND td.from_actor_id = '$shopID' AND td.to_actor = '5' GROUP BY  po.product_cat";
        $query = mysqli_query($this->conn_1,$stmt);
        $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
    }

    public function getBigDataReport_new($params){
        extract($params);
        // print_r($params);
        // $stmt = "SELECT sh.shop_name,m.material,po.design_number, g.name as gender, c.color_name, pm.product_cat, sm.subProductName ,s.size, td.qty as saleqty, 
        // po.qty as stockqty, po.mrp as Smrp, po.wsp as Swsp
        // FROM transaction_details as td 
        // LEFT JOIN shop sh ON sh.id = td.to_actor_id 
        // LEFT JOIN purchase_order po ON po.ID = td.product_id
        // LEFT JOIN productcat_master pm ON pm.ID = po.product_cat
        // LEFT JOIN subproduct_master sm ON sm.ID = po.product_subcat
        // LEFT JOIN vendor_master v ON v.ID = po.vendor_id
        // LEFT JOIN size s ON s.id = po.size
        // LEFT JOIN color c ON c.id = po.color
        // LEFT JOIN material_master m ON m.ID = po.material
        // LEFT JOIN gender_master g ON g.ID = po.gender
        // WHERE  td.from_actor IN (2,1)  AND td.to_actor IN (5,2) AND sh.shop_name IS NOT NULL AND date(td.lastModifiedDate) BETWEEN '$startDate' AND '$endDate' GROUP BY td.ID";
        $stmt = "SELECT * FROM (
            SELECT sh.shop_name,m.material,po.design_number, g.name as gender, c.color_name, pm.product_cat, sm.subProductName ,s.size, td.qty as saleqty, 
                    0 as stockqty, po.mrp as Smrp, po.wsp as Swsp,v.vendor_name as vendor
                    FROM transaction_details as td 
                    LEFT JOIN shop sh ON sh.id = td.from_actor_id 
                    LEFT JOIN purchase_order po ON po.ID = td.product_id
                    LEFT JOIN productcat_master pm ON pm.ID = po.product_cat
                    LEFT JOIN subproduct_master sm ON sm.ID = po.product_subcat
                    LEFT JOIN vendor_master v ON v.ID = po.vendor_id
                    LEFT JOIN size s ON s.id = po.size
                    LEFT JOIN color c ON c.id = po.color
                    LEFT JOIN material_master m ON m.ID = po.material
                    LEFT JOIN gender_master g ON g.ID = po.gender
                    WHERE  td.from_actor= '2'  AND td.to_actor = '5' AND sh.shop_name IS NOT NULL AND date(td.lastModifiedDate) BETWEEN '$startDate' AND '$endDate' GROUP BY po.ID 
            
                UNION ALL
                SELECT sh.shop_name,m.material,po.design_number, g.name as gender, c.color_name, pm.product_cat, sm.subProductName ,s.size, 0 as saleqty, 
                    td.qty as stockqty, po.mrp as Smrp, po.wsp as Swsp,v.vendor_name as vendor
                    FROM transaction_details as td 
                    LEFT JOIN shop sh ON sh.id = td.to_actor_id 
                    LEFT JOIN purchase_order po ON po.ID = td.product_id
                    LEFT JOIN productcat_master pm ON pm.ID = po.product_cat
                    LEFT JOIN subproduct_master sm ON sm.ID = po.product_subcat
                    LEFT JOIN vendor_master v ON v.ID = po.vendor_id
                    LEFT JOIN size s ON s.id = po.size
                    LEFT JOIN color c ON c.id = po.color
                    LEFT JOIN material_master m ON m.ID = po.material
                    LEFT JOIN gender_master g ON g.ID = po.gender
                    WHERE  td.from_actor= '3'  AND td.to_actor = '2' AND sh.shop_name IS NOT NULL AND date(td.lastModifiedDate) BETWEEN '$startDate' AND '$endDate' GROUP BY po.ID ) t1";
        $query = mysqli_query($this->conn_1,$stmt);
        $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
    }

    public function getBigDataReport($params){
        extract($params);
        // print_r($params);
        // $from_date = date('Y-m-d');
        // $to_date=date('Y-m-d',strtotime('-15 days',strtotime($from_date));
        //  refer this query tp fetch group by data
         //echo $id=$_POST['get_id'];
         //print_r($id);
        $where = '';
        // $select = '';
        $group_by = 'GROUP BY sh.ID,po.gender,po.product_cat';
        // echo $select;
        // exit();
        $table = '<table class="table table-striped table-hover table-bordered r-0" style="text-align: center;" id="purchase_records"><thead><tr><th>Shop Name</th><th>Product Category</th>';
        if(isset($shop)){
            $shop_ids = implode(",",$shop);
            $where .= 'AND sh.id IN('.$shop_ids.')';
            // $group_by .= ' ,sh.ID'; 
        }
        if(isset($gender)){
            $gender_ids = implode(",",$gender);
            $where .= 'AND po.gender IN('.$gender_ids.')';
            $table .= '<th>Gender</th>';
            // $select .= ',g.name as gender';
            // $group_by .= ', po.gender';
        }
        if(isset($product)){
            $prod_cat_ids = implode(",",$product);
            $where .= 'AND po.product_cat IN('.$prod_cat_ids.')';
            // $select .= ',pm.product_cat';
            // $group_by .= ', po.product_cat';
        }
        if(isset($sub_product)){
            $sub_product_ids = implode(",",$sub_product);
            $where .= 'AND po.product_subcat IN('.$sub_product_ids.')';
            $select .= ',sm.subProductName';
            $group_by .= ', po.product_subcat';
            $table .= '<th>Product Sub Category</th>';
        }
        if(isset($vendor)){
            $vendor_ids = implode(",",$vendor);
            $where .= 'AND po.vendor_id IN('.$vendor_ids.')';
            $select .= ',v.name as vendor_name';
            $group_by .= ', po.vendor_id';
            $table .= '<th>Vendor</th>';
        }
        if(isset($size)){
            $size_ids = implode(",",$size);
            $where .= 'AND po.size IN('.$size_ids.')';
            $select .= ',s.size';
            $group_by .= ', po.size';
            $table .= '<th>Size</th>';
        }
        if(isset($color)){
            $color_ids = implode(",",$color);
            $where .= 'AND po.color IN('.$color_ids.')';
            $select .= ',c.color_name';
            $group_by .= ', po.color';
        }
        if(isset($material)){
            $material_ids = implode(",",$material);
            $where .= 'AND po.material IN('.$material_ids.')';
            $select .= ',m.material';
            $group_by .= ', po.material';
            $table .= '<th>Material</th>';
        }
        // if(isset($design)){
        //     $design_ids = implode(",",$design);
        //     $design .= 'AND po.design_number IN($design_ids)';
        // }

        // exit();
        $table .= '<td>Sale Qty.</td><td>Net Sale Value</td><td>Stock Qty</td><td>MRP</td><td>WSP</td></tr></thead>';
        $stmt .= "SELECT SUM(td.qty) as saleqty,if(SUM(po.qty) < 0, '0',SUM(po.qty)) as stock_qty,SUM(po.mrp) as mrp,SUM(po.wsp) as wsp,td.ID,sh.shop_name,g.name as gender,pm.product_cat,sh.id as shop_ID,g.ID as gender_ID,pm.ID as product_cat_ID,po.ID as product_id ".$select." FROM transaction_details as td 
            LEFT JOIN shop sh ON sh.id = td.to_actor_id 
            LEFT JOIN purchase_order po ON po.ID = td.product_id
            LEFT JOIN productcat_master pm ON pm.ID = po.product_cat
            LEFT JOIN subproduct_master sm ON sm.ID = po.product_subcat
            LEFT JOIN vendor_master v ON v.ID = po.vendor_id
            LEFT JOIN size s ON s.id = po.size
            LEFT JOIN color c ON c.id = po.color
            LEFT JOIN material_master m ON m.ID = po.material
            LEFT JOIN gender_master g ON g.ID = po.gender 
            WHERE  td.from_actor = '2'  AND td.to_actor = '5'";
        $stmt .= $where."AND DATE(td.lastModifiedDate) >= '".$min."' AND DATE(td.lastModifiedDate) <= '".$max."'";
        $stmt .= $group_by; 
        $query = mysqli_query($this->conn_1,$stmt);
        $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
        // echo '<pre>';
        // print_r($data);
        // die;
        $tbody = '';
        // for($i=0;$i<count($data);$i++){
        //     $tr = '';
        //     if($i != 0 && ($data[$i]['shop_ID'] == $data[$i-1]['shop_ID'])){
        //         $shop_td = '<td></td>';                
        //     }elseif($i != 0 && ($data[$i]['shop_ID'] != $data[$i-1]['shop_ID'])){
        //         $shop_td = '<td>'.$data[$i]['shop_name'].'</td>';
        //         $shop_td_blank = '<td></td>';
        //     }else{
        //         $shop_td = '<td>'.$data[$i]['shop_name'].'</td>';
        //     }
        //     $gender = '';
        //     if(isset($gender)){

        //     }

        //     $tr = '';
        //     if($i != 0 && $data[$i]['product_cat_ID'] == $data[$i-1]['product_cat_ID']){
        //         $product_cat_td = '<td></td>';
        //     }elseif($i != 0 && $data[$i]['product_cat_ID'] != $data[$i-1]['product_cat_ID']){
        //         $product_cat_td = '<td>'.$data[$i]['product_cat'].'</td>';
        //         $product_cat_td_blank = '<td></td>';
        //     }else{
        //         $product_cat_td = '<td>'.$data[$i]['product_cat'].'</td>';
        //     }
        //     $saleQty = '<td>'.$data[$i]['saleqty'].'</td>';
        //     $netSaleValue = '<td>'.$data[$i]['saleqty'] * $data[$i]['mrp'].'</td>';
        //     $stockQty = '<td>'.$data[$i]['stock_qty'].'</td>';
        //     $mrp = '<td>'.$data[$i]['mrp'].'</td>';
        //     $wsp = '<td>'.$data[$i]['wsp'].'</td>';
        //     if($i != 0 && ($data[$i]['shop_ID'] != $data[$i-1]['shop_ID'])){
        //         $tr = '<tr>'.$shop_td_blank.$product_cat_td_blank.
        //         '<td id="sale_qty_'.$data[$i]['shop_ID'].'"></td>
        //         <td id="net_sale_value_'.$data[$i]['shop_ID'].'"></td>
        //         <td id="stock_qty'.$data[$i]['shop_ID'].'"></td>
        //         <td id="stock_mrp'.$data[$i]['shop_ID'].'"></td>
        //         <td id="stock_wsp'.$data[$i]['shop_ID'].'"></td>
        //         </tr>';
        //     }
        //     $tbody = '<tr>'.$shop_td.$product_cat_td.$gender.$saleQty.$netSaleValue.$stockQty.$mrp.$wsp.'</tr>'.$tr;
        //     $table .= $tbody;
        // }
        for($i=0;$i<count($data);$i++)
        {
            $reuse_data[$data[$i]['shop_ID']][$i] = $data[$i];            
    	}
        // 	echo "<pre>";
        // 	print_r($reuse_data);
        // 	echo "</pre>";
        // 	die;
	    foreach ($reuse_data as $key => $value) 
	    {
	    	$saleQtytotal =0;
	    	$netSaleValuetotal =0;
	    	$stockQtytotal =0;
	    	$mrptotal =0;
	    	$wsptotal =0;	
	    	foreach ($value as $k => $val) 
	    	{	    		
	            $tr = '';
	            $shop_name =$val['shop_name'];
	            $shop_td = '<td></td>'; 
	            $product_cat_td = '<td>'.$val['product_cat'].'</td>';

	            $saleQty = '<td>'.$val['saleqty'].'</td>';
	            $saleQtytotal+= ($val['saleqty'])*1;

	            $netSaleValue = '<td>'.$val['saleqty'] * $val['mrp'].'</td>';
	            $netSaleValuetotal += ($val['saleqty'] * $val['mrp'])*1;

	            $stockQty = '<td>'.$val['stock_qty'].'</td>';
	            $stockQtytotal += ($val['stock_qty'])*1;

	            $mrp = '<td>'.$val['mrp'].'</td>';
	            $mrptotal += ($val['mrp'])*1;

	            $wsp = '<td>'.$val['wsp'].'</td>';
	            $wsptotal += ($val['wsp'])*1;
	           // if($i != 0 && ($val['shop_ID'] != $data[$i-1]['shop_ID'])){
	                $tr = '<tr>'.$shop_td_blank.$product_cat_td_blank.
	                '<td id="sale_qty_'.$val['shop_ID'].'"></td>
	                <td id="net_sale_value_'.$val['shop_ID'].'"></td>
	                <td id="stock_qty'.$val['shop_ID'].'"></td>
	                <td id="stock_mrp'.$val['shop_ID'].'"></td>
	                <td id="stock_wsp'.$val['shop_ID'].'"></td>
	                </tr>';
	               $tbody = '<tr>'.$shop_td.$product_cat_td.$gender.$saleQty.$netSaleValue.$stockQty.$mrp.$wsp.'</tr>'.$tr;
	               $table .= $tbody;
	           // }
	            
	            
	    	}
	            $shop_td ='<td>'.$shop_name.'</td>';
	            $product_cat_td ='<td>Total</td>';
	            $gender ='';
	            $saleQty ='<td>'.$saleQtytotal.'</td>';
	            $netSaleValue ='<td>'.$netSaleValuetotal.'</td>';
	            $stockQty ='<td>'.$stockQtytotal.'</td>';
	            $mrp ='<td>'.$mrptotal.'</td>';
	            $wsp ='<td>'.$wsptotal.'</td>';
	            $tbody = '<tr>'.$shop_td.$product_cat_td.$gender.$saleQty.$netSaleValue.$stockQty.$mrp.$wsp.'</tr>'.$tr;
	            $table .= $tbody;	
	    	
	    }
        $table .= '</table>';
        echo $table;
    }

    public function searchProductByInvoice($params){
        extract($params);
        $stmt ="SELECT * FROM sales_data WHERE invoice LIKE '$invoice_id' order by ID LIMIT 0,1";
        $query = mysqli_query($this->conn_1,$stmt);
        $data = mysqli_fetch_assoc($query);
        $json_data = json_decode($data['data']);
        // print_r($json_data);
        return $data;
    }
        
}

?>