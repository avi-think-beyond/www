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
    background-image: linear-gradient(#315b1c, #40881d);
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
        height: 27px;
        font-size: 13px;
        width: 100%;
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
            <form method="POST" action="">
                
                <div class="row " >
                      <div class="col-md-3">
                     </div>
                    <div class="col-md-6"  >
                        
                     <fieldset class="fes">
                        <legend class="le">Request For Product</legend>
                        <br>
                        <div class="row">
                           
                            <div class="col-md-12 mb-12">
                                <div class="row">
                                    <label class="col-md-1"></label>  
                                    <label class="col-md-3 la"  for="validationCustom01">Name</label>
                                    <div class="col-md-7">
                                       <select type="text" class="form-control btn1"  name="shop" required> 
                                             <option>--Select Name--</option>
                                            
                                            
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
                                                <th>Adult</th>
                                                <th>Child</th>
                                                <th>Brand</th>
                                                <th>Size</th>
                                                <th>Colour</th>
                                                <th>Model</th>
                                                <th>Request</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                         
                                        <tr>
                                               <td>
                                                 1
                                               </td>
                                                <td><i style="font-size: 28px;" class="icon icon-barcode"></i>
                                                </td>
                                                <td><input type="text" readonly="" class="form-control btn1" style="width: 130px;" value="" name="name">
                                                </td>
                                                 <td><input type="text" readonly="" class="form-control btn1" style="width: 113px;" name="code" value="" >
                                                 </td>
                                                <td><input type="text" name="hsn" readonly="" class="form-control btn1"style="width: 80px;" value="">
                                                </td>
                                                <td><input  type="number" class="form-control btn1 quantity"style="width: 70px;" value="" id="" data-id="" name="qty" onload="calc();">
                                                </td>
                                                <td><input readonly="" type="text" class="form-control btn1 purchaserate" style="width: 80px;" value="" id="" name="adult">
                                                </td>
                                                <td><input type="text" class="form-control btn1" style="width: 60px;" readonly="" value="" name="child">
                                                </td>
                                                <td><input type="text" class="form-control btn1" style="width: 60px;" readonly="" value="" name="brand">
                                                </td>
                                                <td><input type="text" readonly="" style="width: 70px;" class="form-control btn1 discount" name="size" value="" >
                                                </td>
                                                <td><input type="text" readonly="" style="width: 70px;" class="form-control btn1 gst" name="colour" value=""  >
                                                </td>
                                                <td><input type="text" readonly="" class="form-control btn1 total" style="width: 100px;" id="" name="type" value="" >
                                                </td>
                                                <td><button type="button" name="request" style="background-image: linear-gradient(#1b6969, #104040);color: #fff;height: 25px;font-size: 11px;width: 31px;" class="btn  pull-right" ><i class="icon icon-location-arrow"></i></button>
                                                </td>

                                       </tr>
                                           

                         
                                        </tbody>
                                    </table>
                                    <br>

                             </div>
                             <div class="col-md-12" style="margin-top: 5px;">
                                
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