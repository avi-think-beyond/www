<?php 
// exit();
include_once('sidebar.php');
include_once('../class/class.product.php');
// exit();
$prodObj = new Product();
$uid= $_SESSION['uid'];
$data = $prodObj->getAvailableQty(Actors::ADMIN,$uid);

?>
<style type="text/css">
     .btn1
    {
        height: 30px;
        font-size: 13px;
    }
     .btnsre
    {
        
       height: 34px;
    width: 15%;
    border-radius: 5px;
    cursor: pointer;
    background-image: linear-gradient(#32aef7, #074a80);
    color: #fff;
    border: none;
    }
    .sretxt
    {   
           width: 83%;
    height: 27px;
    border: none;
    background: none;
    font-size: 20px;
    padding: 10px;
}
    .box_ser
    {
            margin: auto;
    border: 1px solid #b7bbbe;
    width: 100%;
    border-radius: 5px;
    height: 36px;
    }
    .la {
    font-size: 12px;
    color: #2f3838;
}
</style>

<div class="page  has-sidebar-left height-full" style="background-color: rgb(157, 187, 143)">
    
    <div class="container-fluid animatedParent animateOnce">
        <div class="tab-content my-3" id="v-pills-tabContent">
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                <div class="row">
                             <div class="col-md-2" style="background-color: #234b0f;color: #fff;font-size: 18px;border-bottom-right-radius: 21px;border-top-right-radius: 21px;border-bottom: 11px solid #478828;">
                    
                                <i class="icon-shopping-cart2 s-15"></i>
                                <span class="s-8">Sales Vs Stock</span>
                            </div>
                             <div class="col-md-10">
                                 
                             </div>
                             
                </div><br>
                <form id="bigDataForm" enctype="multipart/form-data">
                <div class="row">  
            <div class="col-md-4 offset-2">
                From Date: <input name="min" id="min" type="text" class="form-control" placeholder="From Date">
            </div>             
            <div class="col-md-4 ">
                To Date:<input name="max" id="max" type="text" class="form-control" placeholder="To Date">
            </div>  
                         
            </div>
            <br>
            <div class="row"> 
                <div class="col-md-2">
                    <label>Shop</label>
                  <select class="shop form-control select2" name="shop[]" multiple="multiple">
                    <option>Select All</option>
                    <?php 
                    $sql1=mysqli_query($conn,"SELECT * From shop") or die(mysqli_error($conn));
                    while($shop_row=mysqli_fetch_assoc($sql1)){
                    ?>                    
                    <option value="<?=$shop_row['id'];?>"><?=$shop_row['shop_name'];?></option>
                    <?php } ?>
                </select>
                </div>
                <div class="col-md-2">
                    <label>Gender</label>
                  <select class="gender form-control select2" name="gender[]" multiple="multiple">
                    <option >Select All</option>  
                    <?php 
                    $sql2=mysqli_query($conn,"SELECT * FROM gender_master") or die(mysqli_error($conn));
                    while($gender_row=mysqli_fetch_assoc($sql2)){
                    ?>                 
                    <option value="<?=$gender_row['ID'];?>"><?=$gender_row['name'];?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-md-2">
                    <label>Products</label>
                  <select class="product form-control select2" name="product[]" multiple="multiple">
                    <option >Select All</option>       
                    <?php 
                    $sql3=mysqli_query($conn,"SELECT * FROM productcat_master") or die(mysqli_error($conn));
                    while($product_row=mysqli_fetch_assoc($sql3)){
                    ?>             
                    <option value="<?=$product_row['ID'];?>"><?=$product_row['product_cat'];?></option>                  
                    <?php } ?>  
                  </select>
                </div> 
                <div class="col-md-2">
                    <label>Sub Products</label>
                  <select class="sub_product form-control select2" name="sub_product[]" multiple="multiple">
                    <option >Select All</option>
                    <?php 
                    $sql4=mysqli_query($conn,"SELECT * FROM subproduct_master") or die(mysqli_error($conn));
                    while($subproduct_row=mysqli_fetch_assoc($sql4)){
                    ?>                    
                    <option value="<?=$subproduct_row['ID'];?>"><?=$subproduct_row['subProductName'];?></option>
                    <?php } ?>
                </select>
                </div>
                <div class="col-md-2">
                    <label>Vendor Name</label>
                  <select class="vendor form-control select2" name="vendor[]" multiple="multiple">
                     <option >Select All</option>
                     <?php 
                     $sql5=mysqli_query($conn,"SELECT * FROM vendor_master") or die(mysqli_error($conn));
                     while($vendor_row=mysqli_fetch_assoc($sql5)){
                     ?>                   
                    <option value="<?=$vendor_row['ID'];?>"><?=$vendor_row['vendor_name'];?></option>
                    <?php } ?>
                  
                  </select>
                </div>
                <div class="col-md-2">
                    <label>Design No.</label>
                  <select class="design form-control select2" name="design[]" multiple="multiple">
                     <option >Select All</option> 
                     <?php 
                     $sql6=mysqli_query($conn,"SELECT * FROM purchase_order") or die(mysqli_error($conn));
                     while($design_row=mysqli_fetch_assoc($sql6)){
                     ?>                    
                    <option value="<?=$design_row['design_number'];?>"><?=$design_row['design_number'];?></option>                    
                    <?php } ?>
                  </select>
                </div> 
                
            </div><br>
             <div class="row">
              
                
                <div class="col-md-2">
                    <label>Size</label>
                  <select class="size form-control select2" name="size[]" multiple="multiple">
                    <option >Select All</option>
                    <?php 
                    $sql7=mysqli_query($conn,"SELECT * FROM size") or die(mysqli_error($conn));
                    while($size_row=mysqli_fetch_assoc($sql7)){
                    ?>                   
                    <option value="<?=$size_row['id'];?>"><?=$size_row['size'];?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-md-2">
                    <label>Colour</label>
                  <select class="color form-control select2" name="color[]" multiple="multiple">
                    <option >Select All</option>
                    <?php 
                    $sql8=mysqli_query($conn,"SELECT * FROM color") or die(mysqli_error($conn));
                    while($color_row=mysqli_fetch_assoc($sql8)){
                    ?>
                    <option value="<?=$color_row['id'];?>"><?=$color_row['color_name'];?></option>                    
                    <?php } ?>
                </select>
                </div> 
                <div class="col-md-2">
                    <label>Material</label>
                  <select class="material form-control select2" name="material[]" multiple="multiple">
                     <option >Select All</option>   
                     <?php 
                     $sql9=mysqli_query($conn,"SELECT * FROM material_master") or die(mysqli_error($conn));
                     while($material_row=mysqli_fetch_assoc($sql9)){
                     ?>                  
                    <option value="<?=$material_row['ID'];?>"><?=$material_row['material'];?></option>
                    <?php } ?>
                   
                  </select>
                </div> 
            </div><br>
            </form>
                        <div class="card r-0 shadow">
                            <div class="table-responsive" style="display:none;">
                                <br>
                                    <table class="table table-striped table-hover table-bordered r-0" style="text-align: center;" id="purchase_records">
                                        <thead>
                                            <tr>
                                            <th class="shopCLS">Shop Name</th>
                                            <th class="prodCLS">Product Categoy</th>
                                            <th class="prodSubCLS">Product Sub Category</th>
                                            <th>Sale Qty</th>
                                            <th>Net Sale Value</th> 
                                            <th>Stock Qty</th>
                                            <th>Stock values on MRP</th> 
                                            <th>Stock values on WSP</th>                    
                                            </tr>
                                        </thead>

                                        <tbody id="dataTable" style="font-size: 12px;">             
                                        </tbody>
                                    </table>
                            </div>
                            <div class="table-responsive tableNew"></div>
                        </div>
                    </div>
                </div>

                
            </div>
         
    
    <?php include 'footer.php'?>
</div>
<!-- Right Sidebar -->

<div class="control-sidebar-bg fixed"></div>

</div>
<!--/#app -->
<script src="assets/js/app.js"></script>

<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>
<script>
  function submitForm(){

    if($("#min").val() == '' || $("#max").val() == ''){
      alert('Please Select Date');
      return false;
    }
        $.ajax({
          url:'../controller/adminController.php?type=salesVsStock',
          type:'POST',
          dataType:'html',
          data:$("#bigDataForm").serialize(),
          success:function(res){
            console.log(res);
            var html='';
            for(var i=0;i<res.length;i++)
            {
                var net_sale_value=res[i]['saleqty']*res[i]['mrp'];
                 html +='<tr>'
                       +'<td>'+res[i]['shop_name']+'</td>'
                       +'<td>'+res[i]['product_cat']+'</td>'
                       +'<td>'+res[i]['subProductName']+'</td>'
                       +'<td>'+res[i]['saleqty']+'</td>'
                       +'<td>'+net_sale_value+'</td>'
                       +'<td>'+res[i]['stock_qty']+'</td>'
                       +'<td>'+res[i]['mrp']+'</td>'
                       +'<td>'+res[i]['wsp']+'</td>'
                       
                        '</tr>';
                        console.log(res[0].shop_name);
            }
           $(".tableNew").html(res);
            // $("#dataTable").empty().append(html);
          }
        })
     }
     $(document).ready(function(){
            $("#min").datepicker({  changeMonth: true, autoclose: true, changeYear: true,dateFormat: "yy-mm-dd" });
            $("#max").datepicker({  changeMonth: true, autoclose: true, changeYear: true,dateFormat: "yy-mm-dd" });
            
            $('#min, #max').change(function () {
                // table.draw();
                    // 	
              if($("#min").val() != '' && $("#max").val() != ''){
                // alert('Please Select Date');
                submitForm();
              }


            });
        });
</script>
<script>
 //  for shop
$(document).ready(function() {
    $('.shop').select2({
        placeholder: 'Select Shop *',
        width: '100%',
        border: '1px solid #e4e5e7',
    });
});

$('.shop').on("select2:select", function (e) { 
           var data = e.params.data.text;
           if(data=='Select All'){
            $(".shop > option").prop("selected","selected");
            $(".shop").trigger("change");
           }
               // submitForm();


      });

 //  for gender
$(document).ready(function() {
    $('.gender').select2({
        placeholder: 'Select Gender *',
        width: '100%',
        border: '1px solid #e4e5e7',
    });
});

$('.gender').on("select2:select", function (e) { 
           var data = e.params.data.text;
           if(data=='Select All'){
            $(".gender > option").prop("selected","selected");
            $(".gender").trigger("change");
           }
               // submitForm();

      });

 //  for product
$(document).ready(function() {
    $('.product').select2({
        placeholder: 'Select Product *',
        width: '100%',
        border: '1px solid #e4e5e7',
    });
});

$('.product').on("select2:select", function (e) { 
           var data = e.params.data.text;
           if(data=='Select All'){
            $(".product > option").prop("selected","selected");
            $(".product").trigger("change");
           }
               // submitForm();

      });

 //  for sub-product
$(document).ready(function() {
    $('.sub_product').select2({
        placeholder: 'Select Sub Product *',
        width: '100%',
        border: '1px solid #e4e5e7',
    });
});

$('.sub_product').on("select2:select", function (e) { 
           var data = e.params.data.text;
           if(data=='Select All'){
            $(".sub_product > option").prop("selected","selected");
            $(".sub_product").trigger("change");
           }
               // submitForm();

      });

 //  for vendor
$(document).ready(function() {
    $('.vendor').select2({
        placeholder: 'Select Vendor *',
        width: '100%',
        border: '1px solid #e4e5e7',
    });
});

$('.vendor').on("select2:select", function (e) { 
           var data = e.params.data.text;
           if(data=='Select All'){
            $(".vendor > option").prop("selected","selected");
            $(".vendor").trigger("change");
           }
               // submitForm();

      });

 //  for size
$(document).ready(function() {
    $('.size').select2({
        placeholder: 'Select Size *',
        width: '100%',
        border: '1px solid #e4e5e7',
    });
});

$('.size').on("select2:select", function (e) { 
           var data = e.params.data.text;
           if(data=='Select All'){
            $(".size > option").prop("selected","selected");
            $(".size").trigger("change");
           }
               // submitForm();

      });

 //  for color
$(document).ready(function() {
    $('.color').select2({
        placeholder: 'Select Colour *',
        width: '100%',
        border: '1px solid #e4e5e7',
    });
});

$('.color').on("select2:select", function (e) { 
           var data = e.params.data.text;
           if(data=='Select All'){
            $(".color > option").prop("selected","selected");
            $(".color").trigger("change");
           }
          // submitForm();

      });

 //  for material
$(document).ready(function() {
    $('.material').select2({
        placeholder: 'Select Material *',
        width: '100%',
        border: '1px solid #e4e5e7',

    });
});

$('.material').on("select2:select", function (e) { 
           var data = e.params.data.text;
           if(data=='Select All'){
            $(".material > option").prop("selected","selected");
            $(".material").trigger("change");
           }
           // submitForm();
      });

 //  for design
$(document).ready(function() {
    $('.design').select2({
        placeholder: 'Select Design No. *',
        width: '100%',
        border: '1px solid #e4e5e7',
    });
});

$('.design').on("select2:select", function (e) { 
           var data = e.params.data.text;
           if(data=='Select All'){
            $(".design > option").prop("selected","selected");
            $(".design").trigger("change");
           }
           // submitForm();
      });


</script>
<script>
  $(document).ready(function(){
    $(".select2").change(function(e){
        e.preventDefault(); 
        e.stopImmediatePropagation();
        // console.log('function called');
        submitForm();
    });
        
  })
 
</script>
</body>

</html>