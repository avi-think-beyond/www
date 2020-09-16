<?php 
session_start();
error_reporting(null);
include 'sidebar.php';?>
<?php 
require('../connection.php');
include_once('../class/class.actors.php');
$shopID = $_SESSION['shop'];
?>
<style type="text/css">
   .fes
   {
   border: none;
   overflow:;
   height:auto;
   background-color: #fff;
   box-shadow: #8392a9 2px 0px 15px 2px;
   border-left: 6px solid  #336b18;
   }
   .sretxt
   {   
   width: 83%;
   height: 32px;
   border: none;
   background: none;
   font-size: 18px;
   padding: 10px;
   }
   .la
   {
   font-size: 14px;
   color:#154f4f;
   }
   .le
   {
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
   width: 40%;
   color: #fff;
   }
</style>
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet" type="text/css" /> -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
<script src="https://nightly.datatables.net/js/jquery.dataTables.js"></script>
<script src="//cdn.datatables.net/plug-ins/1.10.20/filtering/row-based/range_dates.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<form id="myform" method="POST" action="print_receipt.php">
    <!-- Modal Today Purchase  -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog" style="max-width: 39%;margin: 1.75rem auto;">
              <!-- Modal content-->
            
              <div class="modal-content" style="border-radius:0rem;">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  
                   <div class="row">
                       <div class="col-md-1"></div>
                       <div class="col-md-2">
                         <img src="assets/img/name-card-icon.png">
                       </div>
                       <div class="col-md-8">
                           
                            <input type="text" placeholder="Customer Name" name="customer_name" style="margin-top:10px;"class="form-control" required>
                            
                       </div>
                        
                   </div>
                   <br>
                   
                   <div class="row">
                       <div class="col-md-1"></div>
                       <div class="col-md-2">
                         <img src="assets/img/phone_number_telephone-512.png">
                       </div>
                       <div class="col-md-8">
                           
                            <input type="text" placeholder="Contact No." name="customer_mobile" style="margin-top:10px;" class="form-control" required>
                            
                       </div>
                        
                   </div>
                    <br>
                    
                   <div class="row">
                       <div class="col-md-1"></div>
                       <div class="col-md-2">
                         <img src="assets/img/name-card-icon.png">
                       </div>
                       <div class="col-md-8">
                           
                            <select class="form-control" id="payment" name="payment" style="margin-top:10px;" required>
                                <option disabled selected>Select Payment Method</option>
                                <option value="Cash">Cash</option>
                                <option value="Credit / Debit Card">Credit / Debit Card</option>
                            </select>
                            <br>
                            <input type="text" id="transaction_id" class="form-control" name="transaction_id" placeholder="Enter transaction id"  style="display:none;">
                            
                       </div>
                        
                   </div>
                     
                     
                  
                </div>
               <br>
                 <center>
                <button type="submit" name="sale" class="btn btn-warning">Submit</button>
                  <button type="button" data-dismiss="modal"  class="btn btn-danger">Close</button>
                  </center>
                  <br>
               
              </div>
              
              
            </div>
          </div>
 <!-- Modal end Today Purchase-->
   <div class="page  has-sidebar-left height-full" style="background-color: rgb(157, 187, 143)">
   <div class="container-fluid animatedParent animateOnce">
      <div class="tab-content my-3" id="v-pills-tabContent">
         <div class="tab-pane animated fadeInUpShort show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
             <div class="row">
                <div class="col-md-2" style="background-color:#234b0f;color:#fff;font-size: 18px;border-bottom-right-radius: 21px;border-top-right-radius: 21px;border-bottom: 7px solid #478828;">
                    
                        
                        <span class="s-8">Available Products</span>
                    
                </div>
                <div class="col-md-7">
                </div>
                <div class="col-md-3">
                           
                <!--<input type="text" id="search_data" style="margin-top:10px;height: 30px;"class="form-control">-->
                            
                </div>
                
            </div>
            <div class="row my-3">
               <div class="col-md-12">
                  
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Right Sidebar -->
    <center>
         <legend class="le">Available Products</legend>
      </center>
   <div class="col-md-12 fes">
      
        <br>
      <div class="col-md-12 table-responsive">
         <table id="success" class="table table-striped  table-hover table-bordered r-0" style="text-align: center; ">
            <thead>
               <tr>
                <th><label style="width: 30px;">Sr.No.</label></th>
                <th><label style="width: 100px;">Barcode</label> </th>
                <th><label style="width: 100px;">Product Category</label></th>
                <th><label style="width: 100px;">Product Subcategory</label></th>  
                <th><label style="width: 100px;">Vendor Name</label></th>
                <th><label style="width: 30px;">Size</label></th>
                <th><label style="width: 60px;">Colour</label></th>
                <th><label style="width: 60px;">Material</label></th>
                <th><label style="width: 30px;">GST</label></th>
                <th><label style="">Purchase Price</label></th>
                <th><label style="width: 40px;">WSP</label></th>
                <th><label style="width: 50px;">MRP</label></th>
                <th><label style="width: 60px;">Gender</label></th>
                <th><label style="">Discount</label></th>
                <th><label style="width: 65px;">MFG Date</label></th>
                <th><label style="width: 100px;">Remark</label></th>
                <th><label style="width: 100px;">Dead Stock date</label></th>
                <th><label style="width: 100px;">Available Qty</label></th>
               </tr>   
            </thead>
           <tbody style="font-size: 12px;">
               <?php
                     $i=1;
                     $current_date=date('Y-m-d'); // added by sandeep
                   $sql="SELECT SUM(qt.cr_qty)-SUM(qt.dr_qty) as avl_qty,qt.prod_id,po.gst,po.purchase_price,po.wsp,po.mrp,po.product_code,po.discount,
                    po.mfg_date,po.remarks,po.dead_stock_date,pm.product_cat,sm.subProductName,v.vendor_name,s.size,c.color_name,m.material,g.name
                    FROM qty_tracker as qt LEFT JOIN purchase_order po ON po.ID = qt.prod_id
                    LEFT JOIN productcat_master pm ON pm.ID = po.product_cat
                    LEFT JOIN subproduct_master sm ON sm.ID = po.product_subcat
                    LEFT JOIN vendor_master v ON v.ID = po.vendor_id
                    LEFT JOIN size s ON s.id = po.size
                    LEFT JOIN color c ON c.id = po.color
                    LEFT JOIN material_master m ON m.ID = po.material
                    LEFT JOIN gender_master g ON g.ID = po.gender WHERE qt.actor_type = 2 AND qt.actor_id = $shopID AND po.dead_stock_date>'$current_date' GROUP BY qt.prod_id";
                  
                  $query=mysqli_query($conn,$sql);
                  while($row=mysqli_fetch_assoc($query))
                  {
                    $clr="";
                    if($row['avl_qty'] == 0){
                      $clr="yellow";
                    }
               ?>
               <tr style="background-color: <?php echo $clr;?>">
                   <td><?php echo $i; ?></td>
                   <td><?php echo $row['product_code']; ?></td>
                   <td><?php echo $row['product_cat']; ?></td>
                   <td><?php echo $row['subProductName']; ?></td>
                   <td><?php echo $row['vendor_name']; ?></td>
                   <td><?php echo $row['size']; ?></td>
                   <td><?php echo $row['color_name']; ?></td>
                   <td><?php echo $row['material'];?></td>
                   <td><?php echo $row['gst']; ?></td>
                   <td><?php echo $row['purchase_price']; ?></td>
                   <td><?php echo $row['wsp']; ?></td>
                   <td><?php echo $row['mrp']; ?></td>
                   <td><?php echo $row['name']; ?></td>
                   <td><?php echo $row['discount']; ?></td>
                   <td><?php echo $row['mfg_date']; ?></td>
                   <td><?php echo $row['remarks']; ?></td>
                   <td><?php echo $row['dead_stock_date']; ?></td>
                   <td><?php echo $row['avl_qty']; ?></td>
               </tr>
               
               <?php $i++;} ?>
           </tbody>
         </table>
      </div>
      <br>
   </div>
   <br>
   
   
</form>
<!--/#app -->
<script src="assets/js/app.js"></script>
<script src="//cdn.datatables.net/plug-ins/1.10.20/api/sum().js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>


$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#success thead tr').clone(true).appendTo( '#success thead' );
    $('#success thead tr:eq(1) th').each( function (i) {
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
 
    var table = $('#success').DataTable( {
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
<?php include 'footer.php'?>

<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>

 

</body>
</html>