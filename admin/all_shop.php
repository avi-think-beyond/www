<?php include 'sidebar.php';?>
<div class="page  has-sidebar-left height-full" style="background-color: rgb(157, 187, 143)">
    
    <div class="container-fluid animatedParent animateOnce">
        <div class="tab-content my-3" id="v-pills-tabContent">
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                <div class="row">
                <div class="col-md-2" style="background-color:#234b0f;color:#fff;font-size: 18px;border-bottom-right-radius: 21px;
    border-top-right-radius: 21px;border-bottom: 7px solid #478828;">
                    
                        <i class="icon-shop s-15"></i>
                        <span class="s-8">All Shop</span>
                    
                </div>
                <div class="col-md-5"></div>
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-9">
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <button type="button" name="search" class="btn-lg r-10 " style="cursor: pointer;height: 34px;background-image: linear-gradient(#234b0f, #478828); font-weight: bold;  font-size: 13px; text-align: center;color:#fff;"><i class="icon icon-search3"></i>&nbsp;&nbsp;Search</button>
                       </div>
                </div>
              </div>   
            </div>
                <div class="row my-3">
                    <div class="col-md-12">
                        <div class="card r-0 shadow">
                            <div class="table-responsive">
                                <form>
                                    <table class="table table-striped table-hover table-bordered r-0">
                                        <thead>
                                            <tr >
                                                <th style="width: 120px">Sr</th>
                                                <th style="width: 170px">SHOP NAME</th>
                                                <th style="width: 150px">LOCATION</th>
                                                <th style="width: 158px">CONTACT NO.</th>
                                                <th style="width: 338px">ADDRESS</th>
                                                <th style="width: 100px">DELET/UPDATE</th>
                                            </tr>
                                        </thead>

                                        <tbody id="dataTable">
                                             <?php
                                            include("../connection.php"); 
                                            $fetch_record=mysqli_query($conn,"SELECT * FROM shop order by id DESC");
                                            $i=1;
                                            while ($row=mysqli_fetch_assoc($fetch_record)) {
                                            ?>

                                        <tr>
                                                <td><label style="width:100px;">  <?php echo $i; ?></label>
                                                 
                                                </td>

                                                <td>
                                                    
                                                   <label style="width:121px;"> <?php echo $row['shop_name']; ?></label>
                                                       
                                                   
                                                      
                                                </td>

                                                
                                                <td><label style="width:150px;"><?php echo $row['location']; ?></label></td>

                                                <td><label style="width:100px;"><?php echo $row['contact']; ?></label></td>
                                                
                                                <td><label style="width:315px;"><?php echo $row['address']; ?></label></td>
                                                <td>
                                                   <label style="width:100px;"> <a href=""><i class="icon-delete_sweep  mr-3" style="font-size: 30px;color:#f70e0e;"></i></a>
                                                    <a href="shop_update.php?id=<?php echo $row['id']; ?>"><i class="icon-pencil" style="font-size: 25px;"></i></a></label>
                                                </td>
                                            </tr>
                                           <?php $i++;} ?>


                                      
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
    <!--Add New Message Fab Button-->
    <a href="add_shop.php" class="btn-fab btn-fab-md fab-right fab-right-bottom-fixed shadow btn-primary"><i
            class="icon-add"></i></a>
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