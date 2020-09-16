<?php include 'sidebar.php';?>
<?php
//session_start();
include("../connection.php");
 $myid=$_SESSION['userid'];
$shop=$_SESSION['shop'];

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
<div class="page  has-sidebar-left height-full" style="background-color: rgb(157, 187, 143)">
    <form method="POST" action="purchase.php">
    <div class="container-fluid animatedParent animateOnce">
        <div class="tab-content my-3" id="v-pills-tabContent">
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                <div class="row my-3">
                    <div class="col-md-12">
                       <div class="row">
                <div class="col-md-2" style="background-color:#234b0f;color:#fff;font-size: 18px;border-bottom-right-radius: 21px;
    border-top-right-radius: 21px;border-bottom: 7px solid #478828;">
                    
                        <i class="icon-shopping-cart2 s-15"></i>
                        <span class="s-8">All Product</span>
                    
                </div>
                 <div class="col-md-2 "> 
                                          <select class="form-control" value="" required>
                                               <option value="none" selected disabled hidden>Select Name</option> 
                                              <option value="Adult">Adult</option>
                                              <option value="Child">Child</option>
                                          </select>
                    </div>
                    <div class="col-md-2"> 
                                      <select class="form-control" name="" id="" value="" required>
                                        <option value="none" selected disabled hidden>Select Brand</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                      </select>
                    </div>
                     <div class="col-md-2"> 
                                        <select class="form-control"  value="" required>
                                          <option value="none" selected disabled hidden>Select Size</option>
                                          <option value="32">32</option>
                                          <option value="34">34</option>
                                        </select>
                    </div>
                     <div class="col-md-2"> 
                                        <select class="form-control" value="" required>
                                          <option value="none" selected disabled hidden>Select Colour</option>
                                          <option value="Red">Red</option>
                                          <option value="Green">Green</option>
                                        </select>
                    </div>
                     <div class="col-md-2 "> 
                                          <select class="form-control" value="" required>
                                              <option value="none" selected disabled hidden>Select Group </option>
                                              <option value="Adult">Adult</option>
                                              <option value="Child">Child</option>
                                          </select>
                    </div>
            </div>
                    </div>
                        <br>
                        <br>
                        <div class="card r-0 shadow">
                            <div class="table-responsive">
                                
                                    <table class="table table-striped table-bordered table-hover r-0" style="text-align: center; " id="example">
                                        <thead>
                                            <tr class="no-b" style="color:#fff; background-color: #1e81c2;">
                                                
                                                 <th><label style="width: 100px;">Sr No</label> </th>
                                                <th><label style="width: 100px;">Product Name</label> </th>
                                                <th><label style="width: 100px;">Product Code</label></th>
                                                <th><label style="width: 100px;">Product Barcord</label></th>  
                                                <th><label style="width: 100px;">HSN Code</label></th>
                                                <th><label style="width: 100px;">Product Type</label></th>
                                                <th><label style="width: 100px;">Adult</label></th>
                                                <th><label style="width: 100px;">Child's</label></th>
                                                <th><label style="width: 100px;">Product Brand</label></th>
                                                <th><label style="width: 100px;">Product Size</label></th>
                                                <th><label style="width: 100px;">Product Colour</label></th>
                                                <th><label style="width: 100px;">Quantity</label></th>
                                                <th><label style="width: 100px;">Purchase Rate</label></th>
                                                <th><label style="width: 100px;">Sales Rate</label></th>
                                                <th><label style="width: 70px;">GST %</label></th>
                                                <th><label style="width: 100px;">Discount</label></th>
                                                <th><label style="width: 100px;">Min-Stock</label></th>
                                                <th><label style="width: 110px;">MFG</label></th>
                                                <th><label style="width: 100px;">EXP</label></th>
                                                 <th><label style="width: 100px;">Total Cost</label></th>
                                                
                                            </tr>
                                        </thead>

                                        <tbody style="font-size: 12px;">
                                            <?php
                                            include("../connection.php"); 
                                            $fetch_record=mysqli_query($conn,"SELECT * FROM users_product where shop='$shop' and aproval_status!='0'  order by id DESC");
                                            $i=1;
                                            while ($row=mysqli_fetch_assoc($fetch_record)) {
                                                # code...
                                            


                                            ?>

                                        <tr>
                                                
                                                <td ><?php echo$i ;?></td>
                                               <td ><?php echo $row['pro_name'] ;?></td>
                                                <td ><?php echo$row['pro_code'] ;?></td>
                                                <td ><?php echo$row['hsn_code'] ;?></td>
                                                <td ><?php echo$row['barcode'] ;?></td>
                                                <td ><?php echo$row['type'] ;?></td>
                                                <td ><?php echo$row['adult'] ;?></td>
                                                <td ><?php echo$row['child'] ;?></td>
                                                <td ><?php echo$row['brand'] ;?></td>
                                                <td ><?php echo$row['size'] ;?></td>
                                                <td ><?php echo$row['color'] ;?></td>
                                                <td ><?php echo$row['qty'] ;?></td>
                                                <td ><?php echo$row['purchase_price'] ;?></td>
                                                <td ><?php echo$row['sale_price'] ;?></td>
                                                <td ><?php echo$row['gst'] ;?></td>
                                                <td ><?php echo$row['discount']  ;?></td>
                                                <td ><?php echo$row['min_stock'] ;?></td>
                                                <td ><?php echo$row['manfacturing_date'] ;?></td>
                                                <td ><?php echo$row['exp_date'] ;?></td>
                                                <td ><?php echo$row['total_price'] ;?></td>
                                                
                                                
                                            </tr>
                                           <?php $i++;}?>


                                      
                                        </tbody>
                                    </table>
                            
                            </div>
                        </div>
                    </div>
                </div>

                <nav class="my-3" aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
         
    </form>
    
</div>
<!-- Right Sidebar -->

<div class="control-sidebar-bg shadow white fixed"></div>
</div>
<!--/#app -->
<script src="assets/js/app.js"></script>


<?php include 'footer.php'?>

<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>
<script type="text/javascript">
  $(document).ready(function () {
  $('body').on('click', '#selectAll', function () {
    if ($(this).hasClass('allChecked')) {
        $('input[type="checkbox"]', '#example').prop('checked', false);
    } else {
        $('input[type="checkbox"]', '#example').prop('checked', true);
    }
    $(this).toggleClass('allChecked');
  })
});
</script>
</body>

</html>