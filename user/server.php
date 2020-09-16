<?php
session_start();
$shop = $_SESSION['shop'];
include("../connection.php");
$html  = "";
$barcode = $_POST['barcode'];

$query = mysqli_query($conn, "SELECT * FROM users_product where shop='$shop' AND aproval_status!='0' AND barcode='$barcode'") or die(mysqli_error($conn));
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
                     <input type="hidden" name="record_id[]" value="' . $row['id'] . '"> </th>
                     <th><input type="hidden" name= "pro_name[]" value="' . $row['pro_name'] . '">'. $row['pro_name'] . '</th>
                     <th><input type="hidden" name="brand[]" value="' . $row['brand'] . '">' . $row['brand'] . '</th>
                     <th><input type="hidden" name="type[]" value="' . $row['type'] . '">' . $row['type'] . '</th>
                     <th><input type="hidden" name="size[]" value="' . $row['size'] . '">' . $row['size'] . '</th>
                     <th><input type="hidden" name="color[]"value="' . $row['color'] . '">' . $row['color'] . '</th>
  
                    
                     <th><input type="text"  class="form-control btn1" name="parchase_rate[]" id="product_price_' . $i . '" data-id="' . $i . '" value="' . $row['sale_price'] . '"></th>
                      <th><input type="text"  class="form-control btn1" name="discount[]" id="product_price_' . $i . '"data-id="' . $i . '" value="' . $row['discount'] . '"></th>
                     <th><input type="text"  class="form-control btn1" name="total[]" id="total_' . $i . '" value="' . $final . '"></th>
                     <th>
                        <a href=""><i class="icon-delete_sweep  mr-3" style="font-size: 30px;"></i></a>
                     </th>

                  </tr>';
        
  $i++; }
       
} 
else 
{
    $html = '<tr><th colspan="2">No record found..</th></tr>';
}
echo json_encode(array(
    "html" => $html
    
    
));
// $product_details=mysqli_query("SELECT * FROM users_product where shop='$shop' AND aproval_status!='0' AND barcode='$barcode'") or die(mysqli_error($conn));
//       while($record=mysqli_fetch_assoc($product_details))
//       {
//         echo $hsncode=$record['hsn_code'];
//       }
?>