<?php 
// session_start();
ini_set("display_errors","1");
include_once('sidebar.php');
include_once('../class/class.product.php');
$prodObj = new Product();

$trf_ID = $_GET['id'];
$productData = $prodObj->getReceivedData($trf_ID);
// echo '<pre>';
// print_r($_SESSION);
// print_r($productData);
// echo '</pre>';
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
</style>
<div class="page has-sidebar-left height-full" style="background-color: rgb(157, 187, 143)">

    <div class="container-fluid animatedParent animateOnce">
        <div class="tab-content my-3" id="v-pills-tabContent">
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                <div class="row">
                             <div class="col-md-2" style="background-color: #234b0f;color: #fff;font-size: 18px;border-bottom-right-radius: 21px;border-top-right-radius: 21px;border-bottom: 11px solid #478828;">
                    
                                <i class="icon-arrow_forward s-15"></i>
                                <span class="s-8">Receive Product</span>
                            </div>
                             <div class="col-md-8">
                                 
                             </div>
                              <div class="col-md-2">
                                  <button  type="button" id="receive" class="btn r-10" style="height: 36px;background-image:linear-gradient(#2a5315, #376f1c);font-size: 15px;border: none;cursor: pointer;color: #fff;text-align: center;"><i class="icon-add_shopping_cart mr-2"></i>Receive Product</button>
                             </div>
                </div>
                <div class="row my-3">
                     
                    <div class="col-md-6" > 
                               
                    </div>
                     <div class="col-md-6" > 
                                <label class="la"><i class="icon-calendar s-15"></i>&nbsp;&nbsp;Barcode</label>
                                <input type="text"  class="form-control" id="search_data">
                                    
                    </div>
                    
                    
                    
                  
                    
                </div>
                <form id="form" >
                <input type="hidden" name="fromActorType" value="<?php echo Actors::SHOP ;?>">    
                <input type="hidden" name="toActorType" value="<?php echo Actors::ADMIN ;?>">
                <input type="hidden" name="userID" value="<?php echo $_SESSION['uid'] ;?>">
                <input type="hidden" name="trf_ID" value="<?php echo $trf_ID ;?>">
                
               

                             
                        <div class="card r-0 shadow">
                            <div class="table-responsive">
                                
                                    <table class="table table-striped table-hover table-bordered r-0" style="text-align: center;" id="success">
                                        <thead>
                                            <tr>
                                                
                                                <!-- <th><label style="width: 35px;">Sr No</label> </th> -->
                                                <th><label style="width: 100px;">Product Code</label> </th>
                                                <th><label style="width: 100px;">Product Category</label></th>
                                                <th><label style="width: 100px;">Product Subcategory</label></th>  
                                                <th><label style="width: 100px;">Vendor Id</label></th>
                                                <th><label style="width: 100px;">Size</label></th>
                                                <th><label style="width: 40px;">Colour</label></th>
                                                <th><label style="width: 40px;">Material</label></th>
                                                <th><label style="width: 100px;">GST</label></th>
                                                <th><label style="width: 30px;">Purchase Price</label></th>
                                                <th><label style="width: 100px;">WSP</label></th>
                                                <th><label style="width: 50px;">MRP</label></th>
                                                <th><label style="width: 100px;">QTY</label></th>
                                                <th><label style="width: 100px;">Gender</label></th>
                                                <th><label style="width: 35px;">Discount</label></th>
                                                <th><label style="width: 35px;">MFG Date</label></th>
                                                <th><label style="width: 100px;">Remark</label></th>
                                                <th><label style="width: 100px;">Dead Stock date</label></th>
                                                <th><label style="width: 100px;">Receive Qty</label></th>
                                            </tr>
                                        </thead>
                                        <tbody style="font-size: 12px;" id="tbody">
                                            <?php
                                                for($i=0;$i<count($productData);$i++){
                                                    echo '<tr id="prod_'.$productData[$i]['product_id'].'">
                                                        <td>'.$productData[$i]['product_code'].'</td>
                                                        <td>'.$productData[$i]['product_cat'].'</td>
                                                        <td>'.$productData[$i]['subProductName'].'</td>
                                                        <td>'.$productData[$i]['vendor_name'].'</td>
                                                        <td>'.$productData[$i]['size'].'</td>
                                                        <td>'.$productData[$i]['color_name'].'</td>
                                                        <td>'.$productData[$i]['material'].'</td>
                                                        <td>'.$productData[$i]['gst'].'</td>
                                                        <td>'.$productData[$i]['purchase_price'].'</td>
                                                        <td>'.$productData[$i]['wsp'].'</td>
                                                        <td>'.$productData[$i]['mrp'].'</td>
                                                        <td id="trf_qty_'.$productData[$i]['product_id'].'">'.$productData[$i]['trfQty'].'</td>
                                                        <td>'.$productData[$i]['name'].'</td>
                                                        <td>'.$productData[$i]['discount'].'</td>
                                                        <td>'.$productData[$i]['mfg_date'].'</td>
                                                        <td>'.$productData[$i]['remarks'].'</td>
                                                        <td>'.$productData[$i]['dead_stock_date'].'</td>
                                                        <td id="rcvd_qty_'.$productData[$i]['product_id'].'"></td>
                                                        <input type="hidden" id="input_qty_'.$productData[$i]['product_id'].'"  name="received_qty[]"/>
                                                        <input type="hidden" name="prod_id[]" value="'.$productData[$i]['product_id'].'"/>
                                                        <input type="hidden" name="tbl_id[]" value="'.$productData[$i]['tbl_id'].'"/>
                                                    </tr>';
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>

              
            </div>
         
    
    <?php include 'footer.php'?>

</div>
<!-- Right Sidebar -->
<div class="control-sidebar-bg shadow white fixed"></div>
</div>
<!--/#app -->
<script src="assets/js/app.js"></script>

<script>
 $(".js-example-tags").select2({
  tags: true
});
</script>
<script type="text/javascript">
    // $(function()
    // {
    //     $('#search_data').focusout(function(e)
    //     {   
    //         e.preventDefault();
    //            var barcode = $('#search_data').val();
    //            if(barcode == '')
    //            {
    //              $('#success tbody').html('');
    //              return false;
    //            }
    //         $.ajax({
                       
    //             url:'transfer_ajax.php',
    //             type:'POST',
    //             data:{barcode : barcode},
    //             success:function(result)
    //             {
    //                 var res = JSON.parse(result);
    //                 $('#success tbody').append(res.html);
    //                 $('#search_data').val('');
    //                 manage_table_count();
    //             }
    //         }); 
    //     });
    // });
    var prodObjects = {};
    var count = 1;
    var barcodeArr = [];
    function tableData(prodObjects){
        // console.log("in tableData function");
        // console.log(prodObjects);
        // var brCount = getBarcodeCount(barcode);
        // console.log("brCount = " + brCount);
        var html = "";
        console.log(prodObjects);
        for(var prod in prodObjects){
            var qty = getBarcodeCount(prodObjects[prod]['prod_data']['product_code']);
            // console.log('product_code is');
            
            if($("#prod_"+prod).length){
                var trfQty = parseInt($("#trf_qty_"+prod).text());
                console.log(trfQty);
                console.log(qty);
                if(qty > trfQty){
                    alert("Received Quantity could not be more than Transfered Quantity");
                    delete prodObjects[prod];
                    return false;
                }
                // if(qty == trfQty){

                // }
                console.log("row already exist");
                $("#rcvd_qty_"+prod).text(qty);
                $("#qty_input_"+prod).val(qty);
                $("#input_qty_"+prod).val(qty);
                trfQty=0;
                qty=0;
            }
            // else{
            // html = '<tr id="prod_'+prod+'"> <input type="hidden" name="pro_id['+prod+']" id="pro_input_'+prod+'" value="'+prod+'"><input type="hidden" name="qty['+prod+']" id="qty_input_'+prod+'" value="'+qty+'">'
            // +'<td>'+prodObjects[prod]['prod_data']['product_code']+'</td>'
            // +'<td>'+prodObjects[prod]['prod_data']['product_cat']+'</td>'
            // +'<td>'+prodObjects[prod]['prod_data']['subProductName']+'</td>'
            // +'<td>'+prodObjects[prod]['prod_data']['vendor_name']+'</td>'
            // +'<td>'+prodObjects[prod]['prod_data']['size']+'</td>'
            // +'<td>'+prodObjects[prod]['prod_data']['color_name']+'</td>'
            // +'<td>'+prodObjects[prod]['prod_data']['material']+'</td>'
            // +'<td>'+prodObjects[prod]['prod_data']['gst']+'</td>'
            // +'<td>'+prodObjects[prod]['prod_data']['purchase_price']+'</td>'
            // +'<td>'+prodObjects[prod]['prod_data']['wsp']+'</td>'
            // +'<td>'+prodObjects[prod]['prod_data']['mrp']+'</td>'
            // +'<td id="qty_'+prod+'">'+qty+' </td>'
            // +'<td>'+prodObjects[prod]['prod_data']['name']+'</td>'
            // +'<td>'+prodObjects[prod]['prod_data']['discount']+'</td>'
            // +'<td>'+prodObjects[prod]['prod_data']['mfg_date']+'</td>'
            // +'<td>'+prodObjects[prod]['prod_data']['remarks']+'</td>'
            // +'<td>'+prodObjects[prod]['prod_data']['dead_stock_date']+'</td>'
            // +'</tr>';                
            // $("#tbody").append(html);
            // 
            // }
            $('#search_data').val('');

        }


    }


    function getBarcodeCount(barcode){
        count = 0;
        for(var i = 0; i< barcodeArr.length; i++){
            if(barcodeArr[i] == barcode){
                count++;
            }
        }
        return count;
    }
    count=1;
    $(document).ready(function(){
        // $('#search_data').unbind();
         $('#search_data').keypress(function(e)
       {
        if(e.which == 13)
         {
            console.log(count);
            count++;
            e.preventDefault();
            e.stopPropagation();
            var barcode = $('#search_data').val();
            var actorType = '<?php echo Actors::ADMIN; ?>';
            var actorID = '<?php echo $_SESSION['uid']; ?>';
            // console.log(actorType);
            $.ajax({
                url:'../controller/adminController.php?type=getProductDataTrf',
                type:'POST',
                dataType:'JSON',
                data:{'barcode':barcode,'actorType':actorType,'actorID':actorID},
                success:function(res){
                    barcodeArr.push(barcode);
                    // console.log(res);
                    // console.log(prodObjects.hasOwnProperty(res.prodID));
                    if(res.prodID != null){
                        // if(prodObjects.hasOwnProperty(res.prodID)){
                        //     count++;
                        // }
                        // Object.assign(res,{'qty':count});
                           // res['qty'] = count;
                           prodObjects[res.prodID]=res;
                           tableData(prodObjects);
                            $("#search_data").val("");
                    }
                    // console.log(prodObjects);
                    // console.log(barcodeArr);
                }
            })
        }
        });
    });
    
   </script>
   <script type="text/javascript">
       $(document).ready(function(){
            $("#receive").click(function(e){
                e.preventDefault();
                var formdata = new FormData($("#form")[0]);
                $.ajax({
                    url:'../controller/adminController.php?type=receiveProduct',
                    type:'POST',
                    data:formdata,
                    processData: false,
                    contentType: false,
                    cache:false,
                    success:function(res){
                        console.log(res);
                        alert('Products Receive Successfully');
                        location.reload();
                    }
                })
            })
       })
   </script>



<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>

</body>

</html>