<?php include 'sidebar.php';?>
<?php
include("../connection.php"); 

?>
<script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<style type="text/css">
    .fe
    {
      border: none;
      padding: 1px; border-radius: 2px; 
      overflow:;
      height:auto;
      background-color: #fff;
      box-shadow:#084d84 4px 4px 6px 0px;





    }
    .btnsre
    {
        height: 24px;
        width: 30px; 
        border-radius: 5px;
        cursor: pointer; 
        background-image: linear-gradient(#32aef7, #074a80); 
        color: #fff; 
        border: none;
    }
    .sretxt
    {
      width: 74%; 
      height: 17px;
      border: none;
    }
    .box_ser
    {
      margin: auto; 
      border: 1px solid #b7bbbe; 
      width: 67%;
      border-radius: 5px; 
      height: 25px;
    }
   .fes {
    border: none;
    padding: 1px;
    border-radius: 2px;
    overflow: ;
    height: auto;
    background-color: #fff;
    box-shadow: #8392a9 2px 0px 15px 2px;
    border-left: 6px solid #336b18;
}
   .le {
    font-size: 12px;
    font-weight: normal;
    /* background-color: #03a9f4; */
    background-image: linear-gradient(#315b1c,#40881d);
    border: #ddd 1px solid;
    padding-top: 3px;
    padding-bottom: 6px;
    margin-bottom: 0px;
    border-radius: 6px;
    text-align: center;
    width: 70%;
    color: #fff;
}
    .btn1
    {
        height: 30px;
        font-size: 13px;
    }
    .s
    {
        margin-top: 10px;
    }
    .la {
    font-size: 13px;
    color: #155252;
}

</style>
<div class="page has-sidebar-left" >
    
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort" >
            <form method="POST" action="../function.php">
                
                <div class="row " >
                      <div class="col-md-3">
                     </div>
                    <div class="col-md-6"  >
                        
                     <fieldset class="fes">
                        <legend class="le">Transfer Product</legend>
                        <br>
                        <div class="row">
                           
                            <div class="col-md-12 mb-12">
                                <div class="row">
                                    <label class="col-md-1"></label>  
                                    <label class="col-md-3 la"  for="validationCustom01">Shop Name</label>
                                    <div class="col-md-7">
                                       <select type="text" class="form-control btn1"  name="shop" required> 
                                             <option>--Select Shop--</option>
                                             <?php 
                                             require('../connection.php');
                                             $sql=mysqli_query($conn,"SELECT * FROM shop");
                                             while ($row=mysqli_fetch_assoc($sql)) 
                                             { ?>
                                             <option value="<?php echo $row['shop_name']; ?>"><?php echo $row['shop_name']; ?></option>
                                             <?php   
                                             } ?>
                                            
                                           </select> 
                                    </div>
                                    <label class="col-md-1"></label>  
                                </div>
                            </div>
                            
                             </div>
                               
                             <br>
                     </fieldset>
                </div>
                <div class="col-md-3">
                     </div>
                </div>
                     <br>
                    
                      <div class="table-responsive">
                                <table class="table table-striped table-hover r-0">
                                        <thead style="background-color: #1974b2; border-radius: 10px; color: #fff;">
                                            <tr class="no-b">
                                                <th>Sr.</th>
                                                <th>Barcode</th>
                                                <th>Name</th>
                                                <th>Code</th>
                                                <th>HSN</th>
                                                <th>Qty</th>
                                                <th>Parchase Rate</th>
                                                <th>Sales Rate</th>
                                                <th>MRP</th>
                                                <th>DIS%</th>
                                                <th>GST%</th>
                                                <th>Total Price</th>
                                                <th>MFG</th>
                                                <th>EXP</th>
                                                <th>Adult</th>
                                                <th>Child</th>
                                                <th>Brand</th>
                                                <th>Size</th>
                                                <th>Colour</th>
                                                <th>Product Type</th>
                                              
                                            </tr>
                                        </thead>

                                        <tbody>
                                         <?php
                           require('../connection.php');
                           if(isset($_POST['submit']))
                           {
                             if(gettype($_POST['check'])=="array")
                               { $i=1;
                                foreach ($_POST['check'] as $transfer) 
                                 {
                                    $id=$transfer;
                                  $sql=mysqli_query($conn,"SELECT * FROM stock where id='$id'");
                                  if ($row=mysqli_fetch_assoc($sql)) {
                                     
                           ?>
                                        <tr>
                                               <td><?php echo $i; ?></td>
                                                <td><input type="text" class="form-control btn1" style="width: 135px;" value="<?php echo $row['barcode']; ?>" name="barcode[]"></td>
                                                <td><input type="text" class="form-control btn1" style="width: 130px;" value="<?php echo $row['product_name']; ?>" name="product_name[]"></td>
                                                 <td><input type="text" class="form-control btn1" style="width: 113px;" name="pro_code[]" value="<?php echo $row['product_code'] ;?>" ></td>
                                                <td><input type="text" class="form-control btn1"style="width: 80px;" value="<?php echo $row['hsn_code']; ?>" name="hsn_code[]"></td>
                                                <td><input type="number" class="form-control btn1 quantity"style="width: 70px;" value="<?php echo $row['quantity']; ?>" id="quantity_<?=$i;?>" data-id="<?=$i;?>" name="quantity[]" onload="calc();"></td>
                                                <td><input type="text" class="form-control btn1 purchaserate" style="width: 80px;" value="<?php echo $row['purchase_rate']; ?>" id="product_price_<?=$i;?>" name="parchase_rate[]"></td>
                                                <td><input type="text" class="form-control btn1" style="width: 60px;" value="<?php echo $row['sales_rate']; ?>" name="sale_rate[]"></td>
                                                <td><input type="text" class="form-control btn1" style="width: 60px;" value="<?php echo $row['mrp']; ?>" name="mrp[]"></td>
                                                <td><input type="text" style="width: 70px;" class="form-control btn1 discount" name="dic[]" value="<?php echo $row['discount_price']; ?>" ></td>
                                                <td><input type="text" style="width: 70px;" class="form-control btn1 gst" name="gst[]" value="<?php echo $row['gst']; ?>"  ></td>
                                                <td><input type="text" class="form-control btn1 total" style="width: 100px;" id="total_<?=$i;?>" name="total_price[]" value="<?php echo $row['total_price']; ?>" ></td>
                                                
                                                <td><input type="text" class="form-control btn1" style="width: 94px;" name="manufacture[]" value="<?php echo $row['manfacturing_date'] ;?>" ></td>
                                                <td><input type="text" class="form-control btn1" style="width: 94px;" name="expire[]" value="<?php echo $row['exp_date'] ;?>" ></td>
                                                <td><input type="text" class="form-control btn1" style="width: 60px;" name="adult[]" value="<?php echo $row['adult'] ;?>" ></td>
                                                <td><input type="text" class="form-control btn1" style="width: 60px;" name="child[]" value="<?php echo $row['child'] ;?>" ></td>
                                                
                                                <td><input type="text" class="form-control btn1" style="width: 70px;" name="brand[]" value="<?php echo $row['brand']; ?>" ></td>
                                                <td><input type="number" class="form-control btn1" style="width: 60px;" name="size[]" value="<?php echo $row['size']; ?>" ></td>
                                                <td><input type="text" class="form-control btn1" style="width: 70px;"name="colour[]" value="<?php echo $row['color']; ?>" ></td>
                                                <td><input type="text" class="form-control btn1" style="width: 100px;" name="pro_type[]" value="<?php echo $row['product_type']; ?>" ></td>
                                                 <input type="hidden"  name="id[]" value="<?php echo $id; ?>" >
                                                 <input type="hidden"  name="qty[]" value="<?php echo $row['quantity']; ?>" >
                                       </tr>
                                           

                        <?php $i++;} }
                              }
                           } ?>
                                      
                                        </tbody>
                                    </table>
                                    <br>

                             </div>
                             <div class="col-md-12" style="margin-top: 5px;">
                                <div class="row">
                                    
                                     <div class="col-md-4">
                                         
                                                 <input type="submit" name="transfer" value="Transfer" style="background-image: linear-gradient(#137937, #267b1c);color: #fff;height: 30px;font-size: 12px;" class="btn  pull-right" >
                                    </div>
                                     
                                    <div class="col-md-4">
                                                 
                                    </div>
                                     <div class="col-md-3">
                                         <div class="row">
                                          <label class="col-md-4 la"  for="validationCustom01">Total Rs.</label>
                                          <div class="col-md-8"> <input type="text" readonly=""  class="form-control btn1" value="" required id="grand_total">
                                        </div>
                                          </div>
                                           
                                     </div>
                                     <div class="col-md-1">
                                         <!--<button type=""  name="" style="border: 1px solid #0f5d96 ;float:right; background-image: linear-gradient(#32aef7, #074a80);color: #fff;height: 30px;font-size: 14px;cursor: pointer;border: none;" class="  pull-right" ><i class="icon icon-print"></i></button>-->
                                     </div>
                                    
                                </div>
                             </div>
                        </div>
                               
                     
                </div>
                
            </form>
        </div>
    </div>
</div>

<script src="assets/js/app.js"></script>
<script>
  $('.quantity').keyup(function(){
    var qty = parseInt($(this).val());
    var id = $(this).attr('data-id');
    console.log(qty+' '+id);
    var product_price = parseInt($('#product_price_'+id).val());
    console.log(product_price);
    var total = qty*product_price;
    console.log(total);
    if(isNaN(total)){
      total = 0;
    }
    $('#total_'+id).val(total);
    calculate_price();
  })

  function calculate_price(){
    var grand_total = 0;
    $('.total').each(function(){
      var total = parseFloat($(this).val());
      if(isNaN(total)){
        total = 0;
      }
      grand_total += total;
    })
    $('#grand_total').val(grand_total);
  }
</script>
<?php include 'footer.php'?>