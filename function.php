<?php
    // error_reporting(NULL);
    session_start();
    include("connection.php");
    if(isset($_POST['command']) && $_POST['command']=='login')
    {
       $userid=$_POST['id'];
       $password=$_POST['pass'];
       $query=mysqli_query($conn,"SELECT * FROM users where user_id='$userid' AND password='$password'");
       if(mysqli_affected_rows($conn))
        {
          $row=mysqli_fetch_assoc($query);
          $shop=$row['shop'];
          $_SESSION['uid']=$row['id'];
          $_SESSION['shop']=$shop;
           if($shop=='3')
            {
             echo "<script> window.open('admin/dashboard.php','_self');</script>";
            }
           else
             {
              $_SESSION['userid']=$userid;
              $_SESSION['shop']=$shop;
             
             echo "<script> window.open('user/index.php','_self');</script>"; 
            }
  
        }
        else
         {
           echo "USER ID PASSWORD DOES NOT MATCH"; 
         }
    }
     //add product..................//
 if(isset($_POST['submit']))
{
  $productname=$_POST['pname'];
  $productcode=$_POST['pcode'];
  $hsncode=$_POST['hsncode'];
  $barcode=$_POST['barcode'];
  $gst=$_POST['gst'];
  $minstock=$_POST['minstock'];
  // $quty=$_POST['quty'];
  $madedate=$_POST['madedate'];
  $expirydate=$_POST['expirydate'];
  $purchaserate=$_POST['purchaserate'];
  $salerate=$_POST['salerate'];
  $brand=$_POST['brand'];
  $size=$_POST['size'];
  $color=$_POST['color'];
  $adult=$_POST['adult'];
  $child=$_POST['child'];
  $type=$_POST['type'];
  $mrp=$_POST['mrp'];
  $discount=$_POST['discount'];
    $query=mysqli_query($conn,"INSERT INTO product(pro_name,pro_code,hsn_code,barcode,gst,min_stock,brand,color,size,manfacturing_date,exp_date,adult,child,purchase_price,sale_price,type,mrp,discount) values('$productname','$productcode','$hsncode','$barcode','$gst','$minstock','$brand','$color','$size','$madedate','$expirydate','$adult','$child','$purchaserate','$salerate','$type','$mrp','$discount')");
       if(mysqli_affected_rows($conn))
        {
        echo  mysqli_error($conn);
   
       echo"<script>alert('add product successfully');window.open('admin/show_product.php','_self');</script>";
        }
      else
       {
         echo "Something is problem";  
       }
}
//    
      function random_str
    (
      int $length = 64,
      string $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'): 
     string {
        if ($length < 1) 
         {  
          throw new \RangeException("Length must be a positive integer");
         }
         $pieces = [];
         $max = mb_strlen($keyspace, '8bit') - 1;
         for ($i = 0; $i < $length; ++$i) 
         {
            $pieces []= $keyspace[random_int(0, $max)];
         }
         return implode('', $pieces);
       }
         $a=rand(1000000,9999999);
         $da='89';
         $barcode_no=$da.$a;
          $char = random_str(4, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ');
           $int=rand(1000,9999);
            $pro_code=$char.$int;
//product purchase..........//////


  if(isset($_POST['purchase']))
    {
     $barcode1=$_POST['bar_code'];
     $product_name1=$_POST['product_name'];
     $product_code1=$_POST['product_code'];
     $hsn_code1=$_POST['hsn_code'];
     $quty1=$_POST['quty'];
     $parchase_rate1=$_POST['parchase_rate'];
     $sale_rate1=$_POST['sale_rate'];
     $mrp1=$_POST['mrp'];
     $discount1=$_POST['discount'];
     $gst1=$_POST['gst'];
     $total1=$_POST['total'];
     $brand1=$_POST['brand'];
     $size1=$_POST['size'];
     $colour1=$_POST['colour'];
     $pro_type1=$_POST['pro_type'];
     $total_price=$_POST['total_price'];
     $manufacture1=$_POST['manufacture'];
     $expire1=$_POST['expire'];
     $adult1=$_POST['adult'];
     $child1=$_POST['child'];
     $tot = sizeof($product_name1);
      for($i=0;$i<$tot;$i++) 
      {
        $supplier=$_POST['supplier'];
          $supplier_contact=$_POST['contact'];
           $supplier_gst=$_POST['supplier_gst'];
            $invoice=$_POST['invoice_no'];
             $date=$_POST['date'];
              $email=$_POST['email'];
               $address=$_POST['address'];
                $due_date=$_POST['due_date'];
                  $total_price=$_POST['total_price'];
                   $barcode=$barcode1[$i];
                    $product_name=$product_name1[$i];
                     $product_code=$product_code1[$i];
                      $hsn_code= $hsn_code1[$i];
                       $quty=$quty1[$i];
                        $parchase_rate=$parchase_rate1[$i];
                         $sale_rate=$sale_rate1[$i];
                          $mrp=$mrp1[$i];
                            $discount= $discount1[$i];
                             $gst=$gst1[$i];
                              $total= $total1[$i];
                               $brand=$brand1[$i];
                               $size=$size1[$i];
                               $colour=$colour1[$i];
                                $pro_type=$pro_type1[$i];
                                $manufacture=$manufacture1[$i];
                                 $expire=$expire1[$i];
                                 $adult=$adult1[$i];
                                 $child=$child1[$i];
                     $suppiler_recod=mysqli_query($conn,"INSERT INTO suppiler_record(sup_name,contact,sup_gst,invoice,payment_duedate,create_date,email,address,product_name,barcode,hsn_code,quantity,purchase_rate,sales_rate,mrp,discount_price,gst,total,brand,size,color,product_type,total_price,manfacturing_date,exp_date,adult,child,product_code)values('$supplier','$supplier_contact','$supplier_gst','$invoice','$date','$due_date','$email','$address','$product_name','$barcode','$hsn_code','$quty','$parchase_rate','$sale_rate','$mrp','$discount','$gst','$total','$brand','$size','$colour','$pro_type','$total_price','$manufacture','$expire','$adult','$child','$product_code')");

                        $check_record=mysqli_query($conn,"SELECT * FROM purchase where product_code='$product_code' AND product_name='$product_name' AND purchase_rate='$parchase_rate' AND sales_rate='$sale_rate' AND product_type='$pro_type'AND brand='$brand' AND size='$size' AND color='$colour' AND adult='$adult' AND child='$child'");
                     if(mysqli_affected_rows($conn))
                       {
                          $fetch_quty=mysqli_fetch_assoc($check_record);
                          $previous_quty=$fetch_quty['quantity'];
                          $current_quty=$previous_quty+$quty;
                         $update=mysqli_query($conn,"UPDATE purchase SET quantity='$current_quty' where product_name='$product_name'");
                            echo"<script>alert('Update Quantity successfully');window.open('admin/show_product.php','_self');</script>";
                       }
                       else
                           {
                             
                             $purchase=mysqli_query($conn,"INSERT INTO purchase(sup_name,contact,sup_gst,invoice,payment_duedate,create_date,email,address,product_name,barcode,hsn_code,quantity,purchase_rate,sales_rate,mrp,discount_price,gst,total,brand,size,color,product_type,total_price,manfacturing_date,exp_date,adult,child,product_code)values('$supplier','$supplier_contact','$supplier_gst','$invoice','$date','$due_date','$email','$address','$product_name','$barcode','$hsn_code','$quty','$parchase_rate','$sale_rate','$mrp','$discount','$gst','$total','$brand','$size','$colour','$pro_type','$total_price','$manufacture','$expire','$adult','$child','$product_code')");
                             if(mysqli_affected_rows($conn))
                              {
                                echo mysqli_error($conn);
                                echo "<script>alert('Product Purchase Sucessfully');window.open('admin/show_product.php','_self');</script>";
                              }
                                     else
                                    {
                                     echo "<script>alert('something is wrong');window.open('admin/show_product.php','_self');</script>";
                                    }
                            }
                             
  }
}
  
  
//   transfer product
if(isset($_POST['transfer']))
{
    $id1=$_POST['id'];
    $qty1=$_POST['qty'];
    $barcode1=$_POST['barcode'];
    $product_name1=$_POST['product_name'];
    $pro_code1=$_POST['pro_code'];
    $manufacture1=$_POST['manufacture'];
    $expire1=$_POST['expire'];
    $adult1=$_POST['adult'];
    $child1=$_POST['child'];
    $hsn_code1=$_POST['hsn_code'];
    $quantity1=$_POST['quantity'];
    $parchase_rate1=$_POST['parchase_rate'];
    $sale_rate1=$_POST['sale_rate'];
    $mrp1=$_POST['mrp'];
    $dic1=$_POST['dic'];
    $gst1=$_POST['gst'];
    $total_price1=$_POST['total_price'];
    $brand1=$_POST['brand'];
    $size1=$_POST['size'];
    $colour1=$_POST['colour'];
    $pro_type1=$_POST['pro_type'];
    $tot = sizeof($product_name1);
    for($i=0;$i<$tot;$i++) 
  {
    $id=$id1[$i];
    $shop=$_POST['shop'];
    $barcode=$barcode1[$i];
    $product_name=$product_name1[$i];
    $pro_code=$pro_code1[$i];
    $manufacture=$manufacture1[$i];
    $expire=$expire1[$i];
    $adult=$adult1[$i];
    $child=$child1[$i];
    $hsn_code=$hsn_code1[$i];
    $quantity=$quantity1[$i];
    $parchase_rate=$parchase_rate1[$i];
    $sale_rate=$sale_rate1[$i];
    $mrp=$mrp1[$i];
    $dic=$dic1[$i];
    $gst=$gst1[$i];
    $total_price=$total_price1[$i];
    $brand=$brand1[$i];
    $size=$size1[$i];
    $colour=$colour1[$i];
    $pro_type=$pro_type1[$i];
    
    $qty=$qty1[$i];
    $qt=$qty-$quantity;
    $check="UPDATE stock SET quantity='$qt' where id='$id'";
    $update_qty=mysqli_query($conn,$check);
    
     $sql="INSERT INTO users_product(shop,barcode,pro_name,hsn_code,qty,purchase_price,sale_price,mrp,discount,gst,brand,color,size,type,total_price,pro_code,manfacturing_date,exp_date,adult,child) VALUES('$shop','$barcode','$product_name','$hsn_code','$quantity','$parchase_rate','$sale_rate','$mrp','$dic','$gst','$brand','$size','$colour','$pro_type','$total_price','$pro_code','$manufacture','$expire','$adult','$child')";
     $query=mysqli_query($conn,$sql);
  }
     if(mysqli_affected_rows($conn))
     {
         echo mysqli_error($conn);
         echo "<script>alert('Product Transfer successfully');window.open('admin/transfer_products.php','_self');</script>";
     }
     else
     {
          echo "<script>alert('Something Wrong');window.open('admin/transfer_products.php','_self');</script>";
     }
    
    
}


?>