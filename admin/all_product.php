<?php 
include_once('sidebar.php');
include_once('../class/class.product.php');
$prodObj = new Product();
$uid= $_SESSION['uid'];
 echo $uid;
$data = $prodObj->getAvailableQty(Actors::ADMIN,$uid);
// echo '<pre>';
// print_r($data);
// echo '</pre>';
// exit();
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
<!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>-->
 


<div class="page  has-sidebar-left height-full" style="background-color: rgb(157, 187, 143)">
    <form method="POST" action="purchase.php">
    <div class="container-fluid animatedParent animateOnce">
        <div class="tab-content my-3" id="v-pills-tabContent">
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                <div class="row">
                             <div class="col-md-2" style="background-color: #234b0f;color: #fff;font-size: 18px;border-bottom-right-radius: 21px;border-top-right-radius: 21px;border-bottom: 11px solid #478828;">
                    
                                <i class="icon-shopping-cart2 s-15"></i>
                                <span class="s-8">All Product</span>
                            </div>
                             <div class="col-md-10">
                                 
                             </div>
                             
                </div>
                
            
                        <div class="card r-0 shadow">
                            <div class="table-responsive">
                                <br>
                                    <table class="table table-striped table-hover table-bordered r-0" style="text-align: center;" id="purchase_records">
                                        <thead>
                                            <tr >
                                                
                                                <th><label style="width: 35px;">Sr No</label> </th>
                                                <th><label style="width: 100px;">Barcode</label> </th>
                                                <th><label style="width: 100px;">Product Category</label></th>
                                                <th><label style="width: 100px;">Product Subcategory</label></th> 
                                                <th><label style="width: 100px;">HSN</label></th>  
                                                <th><label style="width: 100px;">Design No.</label></th>  
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
                                                <th><label style="width: 100px;">Print Barcode</label></th>
                                                
                                            </tr>
                                        </thead>

                                        <tbody id="dataTable" style="font-size: 12px;">
										<?php 
                                        $j=1;
                                        for($i=0;$i<count($data);$i++){
											$qty = (int)$data[$i]['cr_qty']-(int)$data[$i]['dr_qty'];
                                            $clr="";
                                            if($qty == 0){
                                              $clr="yellow";
                                            }

											?>          
                                        	<tr style="background-color: <?php echo $clr;?>">
                                                <td ><label style="width: 35px;"><?php echo $j ;?></td>
                                                <td ><label style="width: 100px;"><?php echo $data[$i]['product_code'] ;?></td>
                                                <td ><label style="width: 100px;"><?php echo$data[$i]['product_cat'] ;?></td>
                                                <td ><label style="width: 100px;"><?php echo$data[$i]['subProductName'] ;?></td>
                                                <td><label style="width: 100px;"><?php echo $data[$i]['hsn']; ?></label></td>
                                                <td><label style="width: 100px;"><?php echo $data[$i]['design_number']; ?></label></td>
                                                <td ><label style="width: 100px;"><?php echo$data[$i]['vendor_name'] ;?></td>
                                                <td ><label style="width: 100px;"><?php echo$data[$i]['size'] ;?></td>
                                                <td ><label style="width: 40px;"><?php echo$data[$i]['color_name'] ;?></td>
                                                <td ><label style="width: 40px;"><?php echo$data[$i]['material'] ;?></td>
                                                <td ><label style="width: 100px;"><?php echo$data[$i]['gst'] ;?></td>
                                                <td ><label style="width: 30px;"><?php echo$data[$i]['purchase_price'] ;?></td>
                                                <td ><label style="width: 100px;"><?php echo$data[$i]['wsp'] ;?></td>
                                                <td ><label style="width: 50px;"><?php echo$data[$i]['mrp'] ;?></td>
                                                <td ><label style="width: 100px;"><?php 
                                                echo $qty;
												?></td>
                                                <td ><label style="width: 100px;"><?php echo$data[$i]['name'] ;?></td>
                                                <td ><label style="width: 35px;"><?php echo$data[$i]['discount'] ;?></td>
                                                <td ><label style="width: 35px;"><?php echo$data[$i]['mfg_date']  ;?></td>
                                                <td ><label style="width: 100px;"><?php echo$data[$i]['remarks'] ;?></td>
                                                <td ><label style="width: 100px;"><?php echo$data[$i]['dead_stock_date'] ;?></td>
                                                <td ><a href="" onclick="Javascript:var PopUpWin = window.open(&#39;print_barcode.php?barcode=<?php echo $data[$i]['product_code'] ;?>&product_cat=<?php echo$data[$i]['product_cat'] ;?>&size=<?php echo$data[$i]['size'] ;?>&color=<?php echo$data[$i]['color_name'] ;?>&mrp=<?php echo$data[$i]['mrp'] ;?>&design=<?php echo$data[$i]['design_number'] ;?>&vendor=<?php echo$data[$i]['vendor_name'] ;?>&#39;,&#39;_blank&#39;,&#39;width=1000,height=680,title=yes,toolbar=no,location=no,resizable=no,status=no&#39;);return false;" class="r-5" ><i class="icon-print"></i></a></td>
                                      		</tr>
                                      	<?php $j++; }?>
                                        </tbody>
                                    </table>
                            
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
         
    </form>
    <?php include 'footer.php'?>
</div>
<!-- Right Sidebar -->

<div class="control-sidebar-bg fixed"></div>

</div>
<!--/#app -->
<script src="assets/js/app.js"></script>
<!--<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>-->
<script>
//     $(document).ready(function() {
//     $('#purchase_records').DataTable( {
//         responsive: true
//     } );
// } );

$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#purchase_records thead tr').clone(true).appendTo( '#purchase_records thead' );
    $('#purchase_records thead tr:eq(1) th').each( function (i) {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
 
        $( 'input', this ).on( 'keyup change', function () {
            if ( table.column(i).search() !== this.value ) {
                table
                    .column(i)
                    .search( this.value )
                    .draw();
            }
        } );
    } );
 
    var table = $('#purchase_records').DataTable( {
        orderCellsTop: true,
        fixedHeader: true
        
        
    } );
   
} );



</script>
<script src="//cdn.datatables.net/plug-ins/1.10.20/api/sum().js">


<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>
</body>

</html>