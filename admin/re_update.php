<?php include 'sidebar.php';   require('../connection.php'); ?>
<?php 
if (isset($_GET['id'])) 
{
 
$id=$_GET['id'];  
$fetch_record=mysqli_query($conn,"SELECT * FROM users where id='$id'");
$row=mysqli_fetch_assoc($fetch_record);

}
if(isset($_POST['submit']))
{
     $id        =   $_POST['id']; // add this id
     $r_id      =   $_POST['r_id']; //add this r_id
     $user=$_POST['user_name'];
     $adhar=$_POST['adhar_name'];
     $pan=$_POST['pan_name'];
     $email=$_POST['email'];
     $mobile=$_POST['mobile'];
     $location=$_POST['location'];
     $dob=$_POST['dob'];
     $password=$_POST['password'];
     $user_id=$_POST['user_id'];
     $choose_shop=$_POST['shop'];
     $address=$_POST['address'];

     $query= "UPDATE users SET user_name='$user',adhar_name='$adhar',pan_name='$pan',email='$email',mobile='$mobile',location='$location',dob='$dob',user_id='$user_id',password='$password',shop='$choose_shop',address='$address' WHERE id='$id' AND R_ID='$r_id'";
     if($connection_type=='live')
        {
             $val=mysqli_query($conn,$query);
             $val=mysqli_query($local_conn,$query);
        }
        else
        {
             $val=mysqli_query($local_conn,$query);
        }
    
    if(mysqli_affected_rows($local_conn)) 
    {
        echo "<script>alert('user created sucessfully');window.open('all_user.php','_self');</script>";
    }
      else
    {
       echo "<script>alert('something wrong');window.open('all_user.php','_self');</script>";
    }
}

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
      border-left: 6px solid  #074a80;
     

     
    }
    .le
    {
       font-size: 12px;
    font-weight: normal;
    /* background-color: #03a9f4; */
    background-image: linear-gradient(#32aef7, #074a80);
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
        color: #2187c8;
    }

</style>
<div class="page has-sidebar-left">
    
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <form method="POST" >
                <div class="row ">
                 <div class="col-md-3"></div>
                    <div class="col-md-6" >
                     <fieldset class="fes">
                        <legend class="le">Re-Update User</legend>
                       <br>
                        <div class="row">
                          <div class="col-md-12">
                             <div class="col-md-12 mb-12">
                                <div class="row">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <input type="hidden" name="r_id" value="<?php echo $row['R_ID']; ?>">
                                    <label class="col-md-4 la">User Name</label>
                                    <div class="col-md-8"> <input type="text"  class="form-control btn1" name="user_name"
                                           placeholder="Enter Full Name" value="<?php echo $row['user_name']; ?>" required>
                                    </div>
                                </div>
                            </div>
                             
                             <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la">Aadhaar Card No.</label>
                                    <div class="col-md-8"> <input type="text"  class="form-control btn1" name="adhar_name" 
                                           placeholder="Enter Aadhaar Card No." value="<?php echo $row['adhar_name']; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la">PAN Card No.</label>
                                    <div class="col-md-8"> <input type="text"  class="form-control btn1" name="pan_name" 
                                           placeholder="PAN Card No." value="<?php echo $row['pan_name']; ?>" required>
                                    </div>
                                </div>
                            </div>
                            
                          
                           
                            
                             <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la">E-mail Address</label>
                                    <div class="col-md-8"> <input type="email"  class="form-control btn1" name="email" 
                                           placeholder="Enter E-mail Address" value="<?php echo $row['email']; ?>" required>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la">Mobile No.</label>
                                    <div class="col-md-8"> <input type="text"  class="form-control btn1" name="mobile" 
                                           placeholder="Enter Mobile No." value="<?php echo $row['mobile']; ?>" required>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la">Location</label>
                                    <div class="col-md-8"> <input type="text"  class="form-control btn1" name="location" 
                                           placeholder="Enter Location" value="<?php echo $row['location']; ?>" required>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la">DOB</label>
                                    <div class="col-md-8"> <input type="date"  class="form-control btn1" name="dob" 
                                           placeholder="Enter Password" value="<?php echo $row['dob']; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la">Password</label>
                                    <div class="col-md-8"> <input type="Password"  class="form-control btn1" name="password" 
                                           placeholder="Enter Password" value="<?php echo $row['password']; ?>" required>
                                    </div>
                                </div>
                            </div>
                           <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la">User ID</label>
                                    <div class="col-md-8"> <input type="text"  class="form-control btn1" name="user_id" 
                                           placeholder="User ID" value="<?php echo $row['user_id']; ?>" required>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la">Select Shop</label>
                                  <div class="col-md-8"> 
                                    <select type="text"  class="form-control btn1" name="shop" required> 
                                             <option>--Select Shop--</option>
                                              <?php 
                                            
                                             $sql=mysqli_query($conn,"SELECT * FROM shop");
                                             while ($row1=mysqli_fetch_assoc($sql)) 
                                             { ?>
                                             <option value="<?php echo $row1['shop_name']; ?>"><?php echo $row1['shop_name']; ?></option>
                                             <?php } ?>
                                           </select> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la">Address</label>
                                    <div class="col-md-8"> <textarea  rows="3" cols="47" style="font-size: 13px;border: 1px solid #e1e8ee;box-shadow: none;border-radius: 3px;" name="address" placeholder="Enter Address" required><?php echo $row['address']; ?></textarea>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="col-md-12 mb-12">
                                <div class="row">
                                    <div class="col-md-4"></div>
                                     <div class="col-md-6">
                                           
                                      <input type="submit" name="submit" value="Update" style="background-image: linear-gradient(#32aef7, #074a80);color: #fff;height: 30px;font-size: 12px;" class="btn  pull-right" >
                                     
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
<?php include 'footer.php'; ?>