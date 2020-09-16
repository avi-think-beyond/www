<?php
session_start();
$shop = $_SESSION['shop'];
include("../connection.php");
$html  = "";
$barcode = $_POST['barcode'];

$query = mysqli_query($conn, "SELECT po.ID,po.gst,po.purchase_price,po.wsp,po.mrp,po.qty,po.product_code,po.discount,po.mfg_date,po.remarks,po.dead_stock_date,
                            pm.product_cat,
                            sm.subProductName,
                            v.vendor_name,
                            s.size,
                            c.color_name,
                            m.material,
                            g.name
                            FROM pruchase_order po
                            LEFT JOIN productcat_master pm ON pm.ID = po.product_cat
                            LEFT JOIN subproduct_master sm ON sm.ID = po.product_subcat
                            LEFT JOIN vendor_master v ON v.ID = po.vendor_id
                            LEFT JOIN size s ON s.id = po.size
                            LEFT JOIN color c ON c.id = po.color
                            LEFT JOIN material_master m ON m.ID = po.material
                            LEFT JOIN gender_master g ON g.ID = po.gender WHERE product_code='$barcode'") or die(mysqli_error($conn));
if (mysqli_num_rows($query)) {
    $i= 1;
    while ($row = mysqli_fetch_assoc($query)) 
    {
        $sale_price  = $row['sale_price'];
        $discount    = $row['discount'];
        $total_price = $sale_price * $discount / 100;
        $final       = $sale_price - $total_price;
        
        $html .= '<tr>
                     <th>'.$i.'</th>
                     <th>'. $row['product_code'] . '</th>
                     <th>' . $row['product_cat'] . '</th>
                     <th>' . $row['subProductName'] . '</th>
                     <th>' . $row['vendor_name'] . '</th>
                     <th>' . $row['size'] . '</th>
                     <th>' . $row['color_name'] . '</th>
                     <th>' . $row['material'] . '</th>
                     <th>' . $row['gst'] . '</th>
                     <th>' . $row['purchase_price'] . '</th>
                     <th>' . $row['wsp'] . '</th>
                     <th>' . $row['mrp'] . '</th>
                     <th>' . $row['qty'] . '</th>
                     <th>' . $row['name'] . '</th>
                     <th>' . $row['discount'] . '</th>
                     <th>' . $row['mfg_date'] . '</th>
                     <th>' . $row['remarks'] . '</th>
                     <th>
                        <a href=""><i class="icon-delete_sweep  mr-3" style="font-size: 30px;"></i></a>
                     </th>

                  </tr>';
        
  $i++; }
       
} 
else 
{
    // $html = '<tr><th colspan="2">No record found..</th></tr>';
}
echo json_encode(array(
    "html" => $html
    
    
));

?>