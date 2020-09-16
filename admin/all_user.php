<?php include 'sidebar.php';?>
<div class="page  has-sidebar-left height-full" style="background-color: rgb(157, 187, 143)">
    
    <div class="container-fluid animatedParent animateOnce">
        <div class="tab-content my-3" id="v-pills-tabContent">
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
            <div class="row">
                <div class="col-md-2" style="background-color: #234b0f;color: #fff;font-size: 18px;border-bottom-right-radius: 21px;border-top-right-radius: 21px;border-bottom: 11px solid #478828;">
                    
                        <i class="icon-user s-15"></i>
                        <span class="s-8">All user</span>
                    
                </div>
                 <div class="col-md-5"></div>
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-9">
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <button type="button" name="search" class="btn-lg r-10 " style="cursor: pointer;height: 34px;background-image: linear-gradient(#376322, #162d0a); font-weight: bold;  font-size: 13px; text-align: center;color:#fff;"><i class="icon icon-search3"></i>&nbsp;&nbsp;Search</button>
                       </div>
                </div>
              </div>   
            </div>
            <hr>
                <div class="row my-3">
                    <div class="col-md-12">
                        <div class="card r-0 shadow">
                            <div class="table-responsive">
                                <form>
                                    <table class="table table-striped table-hover table-bordered r-0">
                                        <thead>
                                            <tr>
                                                <th><label style="width: 30px;">Sr</label></th>
                                                <th><label style="width: 130px;">NAME</label></th>
                                                <th><label style="width: 130px;">AADHAAR</label></th>
                                                <th><label style="width: 130px;">PAN</label></th>
                                                <th><label style="width: 130px;">EMAIL</label></th>
                                                <th><label style="width: 130px;">CONTACT NO.</label></th>
                                                <th><label style="width: 130px;">LOCATION</label></th>
                                                <th><label style="width: 130px;">DOB</label></th>
                                                <th><label style="width: 130px;">USER ID</label></th>
                                                <th><label style="width: 130px;">PASSWORD</label></th>
                                                <th><label style="width: 130px;">SHOP</label></th>
                                                <th><label style="width: 226px;">ADDRESS</label></th>
                                                <th><label style="width: 83px;">DATE</label></th>
                                                <th><label style="width: 100px;">DELET/UPDATE</label></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                               <?php
                                            include("../connection.php"); 
                                            if(isset($_GET['id']))
                                            {
                                                $id=$_GET['id'];
                                                $rid=$_GET['rid'];
                                                // $delete=mysqli_query($conn,"DELETE FROM users where id='$id'");
                                                $query = "UPDATE users SET D_FLAG=2 where id='$id' AND R_ID='".$rid."'";
                                                if($connection_type=='live')
                                                {
                                                    mysqli_query($conn,$query);
                                                    mysqli_query($local_conn,$query);
                                                }
                                                else
                                                {
                                                     $query = "UPDATE users SET D_FLAG=2, FLAG_M=2, FLAG_L=1 where id='$id' AND R_ID='".$rid."'";
                                                    mysqli_query($local_conn,$query);
                                                }
                                            }
                                          



                                            $fetch_record=mysqli_query($conn,"SELECT * FROM users WHERE D_FLAG=1 order by id DESC");
                                            $i=1;
                                            while ($row=mysqli_fetch_assoc($fetch_record)) {
                                            ?>
                                                <tr>
                                                <td><label style="width: 30px;"><?php echo $i; ?></td>
                                                <td><label style="width: 130px;"><?php echo $row['user_name']; ?></td>
                                                <td><label style="width: 130px;"><?php echo $row['adhar_name']; ?></td>
                                                <td><label style="width: 130px;"><?php echo $row['pan_name']; ?></td>
                                                <td><label style="width: 130px;"><?php echo $row['email']; ?></td>
                                                <td><label style="width: 130px;"><?php echo $row['mobile']; ?></td>
                                                <td><label style="width: 130px;"><?php echo $row['location']; ?></td>
                                                <td><label style="width: 130px;"><?php echo $row['dob']; ?></td>
                                                <td><label style="width: 130px;"><?php echo $row['user_id']; ?></td>
                                                <td><label style="width: 130px;"><?php echo $row['password']; ?></td>
                                                <td><label style="width: 130px;"><?php echo $row['shop']; ?></td>
                                                <td><label style="width: 220px;"><?php echo $row['address']; ?></td>
                                                <td><label style="width: 100px;"><?php echo $row['create_date']; ?></td>
                                               
                                                <td>
                                                    <a onclick="return confirm('Are you sure?')" href="all_user.php?id=<?php echo $row['id']; ?>&rid=<?php echo $row['R_ID'];?>"><i class="icon-delete_sweep  mr-3" style="font-size: 30px;color:#f70e0e;"></i></a>
                                                    <a href="re_update.php?id=<?php echo $row['id']; ?>"><i class="icon-pencil" style="font-size: 25px;"></i></a>
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
    <a href="cre_user.php" class="btn-fab btn-fab-md fab-right fab-right-bottom-fixed shadow btn-primary"><i
            class="icon-add"></i></a>
            <footer>
    <?php include 'footer.php'?>
</footer>
</div>
<!-- Right Sidebar -->

<!--/#app -->
<script src="assets/js/app.js"></script>




<!--
--- Footer Part - Use Jquery anywhere at page.
--- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
-->
<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>
</body>

<!-- Mirrored from xvelopers.com/demos/html/paper-panel/panel-page-users.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2019 04:35:32 GMT -->
</html>