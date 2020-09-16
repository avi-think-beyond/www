<?php 

?>


<div class="page  has-sidebar-left height-full" >
    <form>
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
              
            <br>
            <div class="container" style="background-color: #ffffff;padding-top: 20px;padding-bottom: 20px;border-radius: 10px;"><center>
                <button type="button" class="btn btn-info btn-xs category" data-id="Shop" id="shop"><b>Shop</b></button>
                <button type="button" class="btn btn-success btn-xs category" data-id="Gender" id="gender" ><b>Gender</b></button>
                <button type="button" class="btn btn-primary btn-xs category" data-id="Product Category" id="product"><b>Product Category</b></button>
                <button type="button" class="btn btn-danger btn-xs category" data-id="Sub Category" id="sub_category"><b>Sub Category</b></button>
                <button type="button" class="btn btn-info btn-xs category" data-id="Size" id="size"><b>Size</b></button>
                <button type="button" class="btn btn-success btn-xs category" data-id="Colour" id="color"><b>Colour</b></button>
                </center>
            </div><br>
             <div class="container" ><center>
               <div class="show_button"></div>
               
                </center>
            </div>
           
            <br>
            
                        <div class="card r-0 shadow">
                            <div class="table-responsive">
                                <br>
                                    <table  id="purchase_records">
                                        <thead>
                                            <tr>
                                            <th id="shop_name">Sitename</th>   
                                            <th id="gender_name">Gender</th>  
                                            <th id="product_name">Product</th>
                                            <th id="sub_category_name">Sub Category</th>
                                            <th id="size_name">Size</th>  
                                            <th id="color_name">Colour</th>       
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
                        </div>
                    </div>
                </div>

                
            </div>
         
    </form>

</div>
<!-- Right Sidebar -->

<div class="control-sidebar-bg fixed"></div>

</div>
<!--/#app -->
<script src="assets/js/app.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("#shop_name").hide();
$("#gender_name").hide();
$("#product_name").hide();
$("#shop_name").hide();
$("#shop_name").hide();
$("#shop_name").hide(); 
});
</script>




</body>

</html>