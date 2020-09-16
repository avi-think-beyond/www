<?php include 'sidebar.php';?>
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
                <div class="row">
                <div class="col-md-2" style="background-color:#234b0f;color:#fff;font-size: 18px;border-bottom-right-radius: 21px;
    border-top-right-radius: 21px;border-bottom: 7px solid #478828;">
                    
                        <i class="icon-factory s-15"></i>
                        <span class="s-8">Total Purchase</span>
                    
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
                <div class="row my-3">
                    <div class="col-md-12">
                        <div class="row">
                             <div class="col-md-3"> 
                                <!--<img src="assets/img/logo.png">-->
                                <!--<br>-->
                             </div>
                             <div class="col-md-2">
                                 
                             </div>
                             <div class="col-md-5">
                                
                             </div>
                            
                        </div>
                    </div>
                    
                        <div class="card r-0 shadow">
                            <div class="table-responsive">
                                
                                    <table class="table table-striped table-hover table-bordered r-0" style="text-align: center; ">
                                        <thead>
                                            <tr >
                                                
                                                <th><label style="width: 35px;">Sr No</label> </th>
                                                <th><label style="width: 100px;">Name</label> </th>
                                                <th><label style="width: 100px;">Code</label></th>
                                                <th><label style="width: 100px;">HSN</label></th>  
                                                <th><label style="width: 100px;">Barcode</label></th>
                                                <th><label style="width: 100px;">Model</label></th>
                                                <th><label style="width: 40px;">Adult</label></th>
                                                <th><label style="width: 40px;">Child</label></th>
                                                <th><label style="width: 100px;">Brand</label></th>
                                                <th><label style="width: 30px;">Size</label></th>
                                                <th><label style="width: 100px;">Colour</label></th>
                                                <th><label style="width: 50px;">Qty</label></th>
                                                <th><label style="width: 100px;">Purchase Rate</label></th>
                                                <th><label style="width: 100px;">Sales Rate</label></th>
                                                <th><label style="width: 35px;">GST %</label></th>
                                                <th><label style="width: 35px;">DIS%</label></th>
                                                <th><label style="width: 100px;">Min-Stock</label></th>
                                                <th><label style="width: 100px;">MFG</label></th>
                                                <th><label style="width: 100px;">EXP</label></th>
                                                
                                            </tr>
                                        </thead>

                                        <tbody id="dataTable" style="font-size: 12px;">
                                            <?php
                                            include("../connection.php"); 
                                            $fetch_record=mysqli_query($conn,"SELECT * FROM product order by id DESC");
                                            $i=1;
                                            while ($row=mysqli_fetch_assoc($fetch_record)) {
                                                # code...
                                            


                                            ?>

                                        <tr>
                                                
                                                <td ><label style="width: 35px;"><?php echo$i ;?></td>
                                                <td ><label style="width: 100px;"><?php echo $row['pro_name'] ;?></td>
                                                <td ><label style="width: 100px;"><?php echo$row['pro_code'] ;?></td>
                                                <td ><label style="width: 100px;"><?php echo$row['hsn_code'] ;?></td>
                                                <td ><label style="width: 100px;"><?php echo$row['barcode'] ;?></td>
                                                <td ><label style="width: 100px;"><?php echo$row['type'] ;?></td>
                                                <td ><label style="width: 40px;"><?php echo$row['adult'] ;?></td>
                                                <td ><label style="width: 40px;"><?php echo$row['child'] ;?></td>
                                                <td ><label style="width: 100px;"><?php echo$row['brand'] ;?></td>
                                                <td ><label style="width: 30px;"><?php echo$row['size'] ;?></td>
                                                <td ><label style="width: 100px;"><?php echo$row['color'] ;?></td>
                                                <td ><label style="width: 50px;"><?php echo$row['qty'] ;?></td>
                                                <td ><label style="width: 100px;"><?php echo$row['purchase_price'] ;?></td>
                                                <td ><label style="width: 100px;"><?php echo$row['sale_price'] ;?></td>
                                                <td ><label style="width: 35px;"><?php echo$row['gst'] ;?></td>
                                                <td ><label style="width: 35px;"><?php echo$row['discount']  ;?></td>
                                                <td ><label style="width: 100px;"><label style="width: 100px;"><?php echo$row['min_stock'] ;?></td>
                                                <td ><label style="width: 100px;"><?php echo$row['manfacturing_date'] ;?></td>
                                                <td ><label style="width: 100px;"><?php echo$row['exp_date'] ;?></td>
                                                
                                                
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