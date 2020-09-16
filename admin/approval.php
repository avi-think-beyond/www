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
  
<div class="page  has-sidebar-left height-full">
    
    <div class="container-fluid animatedParent animateOnce">
        <div class="tab-content my-3" id="v-pills-tabContent">
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                <div class="row">
                     <div class="col-md-2" style="background-color:#154f4f;color:#fff;font-size: 18px;border-bottom-right-radius: 21px;
    border-top-right-radius: 21px;border-bottom: 7px solid #63b371;">
                    
                        <i class="icon-check s-13"></i>
                        <span class="s-5">Approval</span>
                    
                </div>
                             
              
                     <div class="col-md-2 "> 
                                          <select class="btn1 form-control" value="" required>
                                               <option value="none" selected disabled hidden>Select Name</option> 
                                              <option value="Adult">Adult</option>
                                              <option value="Child">Child</option>
                                          </select>
                    </div>
                    <div class="col-md-2"> 
                                      <select class="btn1 form-control" name="" id="" value="" required>
                                        <option value="none" selected disabled hidden>Select Brand</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                      </select>
                    </div>
                     <div class="col-md-2"> 
                                        <select class="btn1 form-control"  value="" required>
                                          <option value="none" selected disabled hidden>Select Size</option>
                                          <option value="32">32</option>
                                          <option value="34">34</option>
                                        </select>
                    </div>
                     <div class="col-md-2"> 
                                        <select class="btn1 form-control" value="" required>
                                          <option value="none" selected disabled hidden>Select Colour</option>
                                          <option value="Red">Red</option>
                                          <option value="Green">Green</option>
                                        </select>
                    </div>
                     <div class="col-md-2 "> 
                                          <select class="btn1 form-control" value="" required>
                                              <option value="none" selected disabled hidden>Select Group </option>
                                              <option value="Adult">Adult</option>
                                              <option value="Child">Child</option>
                                          </select>
                    </div>
                </div>
            
                <div class="row my-3">
                    
                        <div class="card r-0 shadow">
                            <div class="table-responsive">
                                <form>
                                      <table class="table table-striped table-hover table-bordered" style="text-align: center;" >
                                        <thead>
                                            <tr class="" style="color:#fff; background-color: #1e81c2;">
                                              <!--   <th style="width: 30px">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" id="checkedAll" class="custom-control-input"><label
                                                            class="custom-control-label" for="checkedAll"></label>
                                                    </div>
                                                </th> -->
                                                <th><label style="width: 40px;">Sr No</label> </th>
                                                <th><label style="width: 100px;">Name</label> </th>
                                                <th><label style="width: 100px;">Code</label></th>
                                                <th><label style="width: 100px;">Barcode</label></th>  
                                                <th><label style="width: 100px;">HSN </label></th>
                                                <th><label style="width: 100px;">Model</label></th>
                                                <th><label style="width: 50px;">Adult</label></th>
                                                <th><label style="width:50px;">Child</label></th>
                                                <th><label style="width: 100px;">Brand</label></th>
                                                <th><label style="width: 100px;">Size</label></th>
                                                <th><label style="width: 100px;">Colour</label></th>
                                                <th><label style="width: 50px;">Qty</label></th>
                                                <th><label style="width: 80px;">Purchase Rate</label></th>
                                                <th><label style="width: 100px;">Sales Rate</label></th>
                                                 <th><label style="width: 100px;">MRP</label></th>
                                                <th><label style="width: 50px;">GST %</label></th>
                                                <th><label style="width: 30px;">DIS%</label></th>
                                               
                                                <th><label style="width: 80px;">Mfg </label></th>
                                                <th><label style="width: 80px;">Exp</label></th>
                                                <th><label style="width: 70px;">Generate</label></th>
                                            </tr>
                                        </thead>

                                        <tbody id="dataTable" style="font-size: 12px;">
                                        <?php 
                                         include("../connection.php");
                                         $show_data=mysqli_query($conn,"SELECT * FROM purchase where barcode_generate='0' ORDER BY id ASC");
                                         $i=1;
                                         while($data=mysqli_fetch_assoc($show_data))
                                         {
                                        ?>
                                        <tr>
                                               
                                                <td ><label style="width: 40px;"><?php echo$i ;?></label></td>
                                                <td ><label style="width: 100px;"><?php echo $data['product_name'] ;?></label></td>
                                                <td><label style="width: 100px;"><?php echo $data['invoice'] ;?></label></td>
                                                <td><label style="width: 100px;"><?php echo $data['barcode'] ;?></label></td>
                                                <td><label style="width: 100px;"><?php echo $data['hsn_code'] ;?></label></td>
                                                <td><label style="width: 100px;"><?php echo $data['product_type'] ;?></label></td>
                                                <td><label style="width: 50px;"><?php echo $data['adult'] ;?></label></td>
                                                <td><label style="width: 50px;"><?php echo $data['child'] ;?></label></td>
                                                <td><label style="width: 100px;"><?php echo $data['brand'] ;?></label></td>
                                                <th><label style="width: 100px;"><?php echo $data['size'] ;?></label></th>
                                                <td><label style="width: 100px;"><?php echo $data['color'] ;?></label></td>
                                                <td><label style="width: 80px;"><?php echo $data['quantity'] ;?></label></td>
                                                <td><label style="width: 80px;"><?php echo $data['purchase_rate'] ;?></label></td>
                                                <td><label style="width: 100px;"><?php echo $data['sales_rate'] ;?></label></td>
                                                <td><label style="width: 100px;"><?php echo $data['mrp'] ;?></label></td>
                                                <td><label style="width: 50px;"><?php echo $data['gst'] ;?></label></td>
                                                <td><label style="width: 30px;"><?php echo $data['discount_price'] ;?></label></td>
                                                
                                                <td><label style="width: 80px;"><?php echo $data['manfacturing_date'] ;?></label></td>
                                                <td><label style="width: 80px;"><?php echo $data['exp_date'] ;?></label></td>
                                               
                                                 <td>
                                                    <a href="print_barcode.php?id=<?php echo $data['id'] ;?>"><button type="button" class=" r-5 "  style="height: 24px;cursor: pointer;background-image: linear-gradient(#0d93e2, #044980);font-weight: bold;font-size: 10px;border: none;text-align: center;color: aliceblue;">Barcode</button></a>
                                                </td>                                            </tr>
                                           

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

<!--
--- Footer Part - Use Jquery anywhere at page.
--- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
-->
<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>
</body>

<!-- Mirrored from xvelopers.com/demos/html/paper-panel/panel-page-users.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2019 04:35:32 GMT -->
</html>