<?php 
include_once('sidebar.php');
include_once('../class/class.product.php');
$prodObj = new Product();
$uid= $_SESSION['uid'];
$shop=  $_SESSION['shop'];


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
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
<script src="https://nightly.datatables.net/js/jquery.dataTables.js"></script>
<script src="//cdn.datatables.net/plug-ins/1.10.20/filtering/row-based/range_dates.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
 


<div class="page  has-sidebar-left height-full" style="background-color: rgb(157, 187, 143)">
    <form method="POST" action="purchase.php">
    <div class="container-fluid animatedParent animateOnce">
        <div class="tab-content my-3" id="v-pills-tabContent">
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                <div class="row">
                             <div class="col-md-2" style="background-color: #234b0f;color: #fff;font-size: 18px;border-bottom-right-radius: 21px;border-top-right-radius: 21px;border-bottom: 11px solid #478828;">
                    
                                <i class="icon-shopping-cart2 s-15"></i>
                                <span class="s-8">Sales Register</span>
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
                                                
                                            <th>Sr No</th>
                                            <th>Date</th>
                                            <th>Invoice No.</th>  
                                            <th>Vendor Name</th>  
                                            <th>Product</th>
                                            <th>Sub Product</th> 
                                            <th>HSN</th>
                                            <th>Size</th> 
                                            <th>Colour</th>  
                                            <th>QTY</th>  
                                            <th>MRP</th>                                            
                                            <th>GST(%)</th>                                            
                                            <th class="sum">Total</th>
                                            
                                            
                                                
                                            </tr>
                                        </thead>

                                        <tbody id="dataTable" style="font-size: 12px;">
                                        
                                        <?php 
                                        $i=1; 
                                        $sql="SELECT sales.*,shop.id,shop.shop_name FROM sales_data sales LEFT JOIN shop shop ON shop.id=sales.shop where shop.id='$shop'";
                                        $query=mysqli_query($conn,$sql);

                                        while($row=mysqli_fetch_assoc($query))
                                        {
                                
                                            $data=$row['data'];
                                            $date=date('d-m-Y',strtotime($row['lastModifiedDate']));
                                            $sales_data=json_decode($data, true);
                                            $invoice=$sales_data['invoice'];
                                            $discount=$sales_data['discount'];
                                            $discount_type=$sales_data['discount_type'];
                                            $sbtotal=$sales_data['sbtotal'];
                                            $after_discount=$sales_data['total_amt'];
                                            $customer_name=$sales_data['customer_name'];
                                            $customer_mobile=$sales_data['customer_mobile'];
                                           
                                            $barcode_count = count($sales_data['pro_code']);
                                            
                                            for ($j=0; $j < $barcode_count; $j++) 
                                            { 
                                                $barcode= $sales_data['pro_code'][$j]; 
                                                $pro_name= $sales_data['pro_name'][$j];
                                                $sub_pro_name= $sales_data['sub_pro_name'][$j];
                                                $qty= $sales_data['qty'][$j];
                                                $mrp=$sales_data['mrp'][$j];                    
                                                $gst=$sales_data['gst'][$j];
                                                $total=$sales_data['total'][$j];  
                                                $vendor_name=$sales_data['vendor_name'][$j];   
                                                $hsn=$sales_data['hsn'][$j];  
                                                $size=$sales_data['size'][$j]; 
                                                $color_name=$sales_data['color_name'][$j]; 
                                                                                
                                        ?>
                                        <tr>
                                        <td><?=$i;?></td>
                                        <td><?=$date;?></td>
                                        <td><?=$invoice;?></td>
                                        <td><?=$vendor_name;?></td>
                                        <td><?=$pro_name;?></td>
                                        <td><?=$sub_pro_name;?></td>
                                        <td><?=$hsn;?></td>
                                        <td><?=$size;?></td>
                                        <td><?=$color_name;?></td>
                                        <td><?=$qty;?></td>                                        
                                        <td><?=$mrp;?></td>
                                        <td><?=$gst;?></td>                                        
                                        <td><?=$total;?></td>
                                                               
                                        </tr>
                                    <?php $i++;  } } ?>
                                        </tbody>
                                        <tfoot>
                                            <th></th>
                                            <th></th>
                                            <th></th>  
                                            <th></th>                                            
                                            <th></th>
                                            <th></th>
                                            <th></th> 
                                            <th></th>  
                                            <th></th>                                            
                                            <th></th> 
                                            <th></th>
                                            <th></th>
                                            <th></th> 
                                           
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
        fixedHeader: true,
         "lengthMenu": [[10, 25, 50, -1], [ '10 rows', '25 rows', '50 rows', 'Show all' ]],
          dom: 'Bfrtip',
          buttons: [
                { extend: 'excelHtml5', footer: true },
                
                ,'pageLength'
            ],

             // for footer sum
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
             
            api.columns('.sum', { page: 'current'}).every( function () {
              var sum = this
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
              
              this.footer().innerHTML = sum;
            } );
        }
        
    } );
   
} );



</script>
<script src="//cdn.datatables.net/plug-ins/1.10.20/api/sum().js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>


<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>


</body>

</html>
