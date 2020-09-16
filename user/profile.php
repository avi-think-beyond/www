<?php include 'sidebar.php';?>
<?php
session_start();
include("../connection.php");
 $myid=$_SESSION['userid'];
$sql=mysqli_query($conn,"SELECT * FROM users where user_id='$myid'");
$row=mysqli_fetch_assoc($sql);

?>
<style type="text/css">
    .fe
    {
      border: none;
      padding: 1px; border-radius: 2px; 
      overflow:;
      height:auto;
      background-color: #fff;
      box-shadow:#084d84 4px 4px 6px 0px;

    }
    .fes
    {
      border: none;
      padding: 1px; border-radius: 2px; 
      overflow:;
      height:auto;
     
      background-color: #fff;
      box-shadow: #8392a9 2px 0px 15px 2px;
      border-left: 6px solid  #336b18;
     

     
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
    width: 70%;
    color: #fff;
    }
    .btn1
    {
        height: 30px;
        font-size: 13px;
    }
    .s
    {
        margin-top: 10px;
    }
    .la
    {
        font-size: 12px;
        color: #154f4f;
    }

</style>
<div class="page has-sidebar-left">
    
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <form method="POST" action="#" >
                <div class="row ">
                 <div class="col-md-3"></div>
                    <div class="col-md-6" >
                     <fieldset class="fes">
                        <legend class="le">Update Profile</legend>
                       <br>
                        <div class="row">
                          <div class="col-md-12">
                             <div class="col-md-12 mb-12">
                                <div class="row">
                                    <label class="col-md-4 la"  for="">User Name</label>
                                    <div class="col-md-8"> <input type="text"  class="form-control " value="<?php echo $row['user_name']; ?>"  name="user_name" 
                                          required>
                                    </div>
                                </div>
                            </div>
                             
                             <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la"  for="">Aadhaar Card No.</label>
                                    <div class="col-md-8"> <input type="text"  class="form-control " value="<?php echo $row['adhar_name']; ?>" name="adhar_name" 
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la"  for="">PAN Card No.</label>
                                    <div class="col-md-8"> <input type="text"  class="form-control " value="<?php echo $row['pan_name']; ?>" name="pan_name" 
                                           required>
                                    </div>
                                </div>
                            </div>
                            
                          
                           
                            
                             <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la"  for="">E-mail Address</label>
                                    <div class="col-md-8"> <input type="email"  class="form-control " value="<?php echo $row['email']; ?>" name="email" 
                                           required>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la"  for="">Mobile No.</label>
                                    <div class="col-md-8"> <input type="text"  class="form-control " value="<?php echo $row['mobile']; ?>" name="mobile" 
                                          minlength="10" required>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la"  for="">Location</label>
                                    <div class="col-md-8"> <input type="text"  class="form-control " value="<?php echo $row['location']; ?>" name="location" 
                                          required>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la"  for="">DOB</label>
                                    <div class="col-md-8"> <input type="text"  class="form-control " value="<?php echo $row['dob']; ?>" id="datepicker-13" name="dob"required>
                                    </div>
                                </div>
                            </div>
                           
                            
                             <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la">Select Shop</label>
                                    <div class="col-md-8">
                                         <input type="text" readonly class="form-control " value="<?php echo $row['shop']; ?>" name="shop" required> 
                                          
                                            
                                         
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la"  for="">Address</label>
                                    <div class="col-md-8"> <textarea  rows="3" cols="51" style="font-size: 13px;border: 1px solid #e1e8ee;box-shadow: none;border-radius: 3px;"  name="address"   required><?php echo $row['address']; ?></textarea>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="col-md-12 mb-12">
                                <div class="row">
                                    <div class="col-md-4"></div>
                                     <div class="col-md-6">
                                           <input type="Reset" id="" value="Reset" style="background-image: linear-gradient(#137937, #267b1c)!important;color: #fff;height: 30px;font-size: 12px;" class="btn " >
                                      <input type="submit" name="submit" value="Update" style="background-image: linear-gradient(#1b6969, #104040);color: #fff;height: 30px;font-size: 12px;" class="btn  pull-right" >
                                     
                                     </div>
                                      <div class="col-md-2"></div>
                                    
                                </div>
                             </div>
                             <br>
                          </fieldset>
                        </div>
                      <div class="col-md-3"></div>

                </div>
                
            </form>
        </div>

    </div>
</div>
<script src="assets/js/app.js"></script>
<?php include 'footer.php'?>
