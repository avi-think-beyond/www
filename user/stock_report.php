<?php 
include_once('sidebar.php');
include_once('../class/class.product.php');
$prodObj = new Product();
$uid= $_SESSION['uid'];
// echo $uid;
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
                                <span class="s-8">Stock Report</span>
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
                                            <th><label style="width: 100px;">Product Name</label></th>
                                            <th><label style="width: 100px;">Category</label></th>
                                            <th><label style="width: 100px;">Sub Category</label></th>
                                            <th><label style="width: 100px;">Op.Qty</label></th>
                                            <th><label style="width: 100px;">Sale Qty</label></th>
                                            <th><label style="width: 100px;">Available Qty</label></th>
                                            <th><label style="width: 100px;">MRP</label></th>
                                             <th><label style="width: 100px;">WSP</label></th>
                                                
                                            </tr>
                                        </thead>

                                        <tbody id="dataTable" style="font-size: 12px;">
										
                                        </tbody>

                                         <tfoot>
                                            <tr >
                                                
                                            <th><label style="width: 35px;">Count<br>(0)</label> </th>
                                            <th></th>
                                           
                                            <th><label style="width: 100px;"></label></th>  
                                            <th><label style="width: 100px;"></label></th>
                                      
                                            <th><label style="width: 100px;">Op.Qty<br>(0)</label></th><th><label style="width: 100px;">Sale Qty<br>(0)</label></th></th><th><label style="width: 100px;">Available Qty<br>(0)</label></th>
                                            <th><label style="width: 100px;"></label></th>
                                            
                                            <th><label style="width: 100px;"></label></th>
                                            
                                                
                                            </tr>
                                        </tfoot>
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