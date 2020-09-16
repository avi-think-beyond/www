<?php 
session_start();
error_reporting(null); 
include_once('../connection.php');


if(isset($_POST['submit']))
{
    print_r($_POST);
    include_once('../get_rid.php');
    $R_ID = GetR_ID('77'); // uniqe row id
    // die;
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

    $sql=mysqli_query($conn,"SELECT * FROM users where user_id='$user_id'");
    if (mysqli_affected_rows($conn)) 
    {
        $msg="<b style='color:red;'>User id Already used.</b>";
    }
    else
    {   
        //start: updated by ashish : update the query structure
        $query = "INSERT INTO users(user_name,adhar_name,pan_name,email,mobile,location,dob,user_id,password,shop,address,create_date,flag,is_live,FLAG_M,FLAG_L,R_ID ) values";
        if($connection_type=='live')
        {
            $query .= "('".$user."','".$adhar."','".$pan."','".$email."','".$mobile."','".$location."','".$dob."','".$user_id."','".$password."','".$choose_shop."','".$address."',NOW(),'2',1,'2','2','".$R_ID."')";
            $val1   = mysqli_query($local_conn,$query) or die(mysqli_error($query));
            $val    = mysqli_query($conn,$query) or die(mysqli_error($query));      
        }
        else
        {   
            $query .= "('".$user."','".$adhar."','".$pan."','".$email."','".$mobile."','".$location."','".$dob."','".$user_id."','".$password."','".$choose_shop."','".$address."',NOW(),'2',1,'2','1','".$R_ID."')";
            $val=mysqli_query($local_conn,$query) or die(mysqli_error($query));

        }
        // End
     
     

        if(mysqli_affected_rows($local_conn)) 
        {
            echo "<script>alert('user created sucessfully');window.open('cre_user.php','_self');</script>";
        }
          else
        {
           echo "<script>alert('something wrong');window.open('cre_user.php','_self');</script>";
        }
    }
}

?>
<?php include_once('sidebar.php'); ?>
<script type="text/javascript">
 function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>

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
    .fes {
    border: none;
    padding: 1px;
    border-radius: 2px;
    overflow: ;
    height: auto;
    background-color: #fff;
    box-shadow: #8392a9  2px 0px 15px 2px;
    border-left: 6px solid #336b18;
}
   .le {
    font-size: 12px;
    font-weight: normal;
    /* background-color: #03a9f4; */
    background-image:linear-gradient(#315b1c, #40881d);
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
   .la {
    font-size: 12px;
    color: #2f3838;
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
                        <legend class="le">Create User</legend>
                       <br>
                        <div class="row">
                          <div class="col-md-12">
                             <div class="col-md-12 mb-12">
                                <div class="row">
                                    <label class="col-md-4 la"  for="">User Name</label>
                                    <div class="col-md-8"> <input type="text"  class="form-control btn1"  name="user_name" 
                                           placeholder="Enter Full Name" required>
                                    </div>
                                </div>
                            </div>
                             
                             <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la"  for="">Aadhaar Card No.</label>
                                    <div class="col-md-8"> <input type="text" maxlength="12" minlength="12" onkeypress="return isNumber(event) "  class="form-control btn1"  name="adhar_name" 
                                           placeholder="Enter Aadhaar Card No." required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la"  for="">PAN Card No.</label>
                                    <div class="col-md-8"> <input type="text"  class="form-control btn1" name="pan_name" 
                                           placeholder="PAN Card No." required>
                                    </div>
                                </div>
                            </div>
                            
                          
                           
                            
                             <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la"  for="">E-mail Address</label>
                                    <div class="col-md-8"> <input type="email"  class="form-control btn1" name="email" 
                                           placeholder="Enter E-mail Address" required>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la"  for="">Mobile No.</label>
                                    <div class="col-md-8"> <input type="text" maxlength="10" minlength="10" onkeypress="return isNumber(event) " class="form-control btn1" name="mobile" 
                                           placeholder="Enter Mobile No." required>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la"  for="">Location</label>
                                    <div class="col-md-8"> <input type="text"  class="form-control btn1" name="location" 
                                           placeholder="Enter Location" required>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la"  for="">DOB</label>
                                    <div class="col-md-8"> <input type="text"  id="datepicker-13"   class="form-control btn1"  name="dob" 
                                           placeholder="DOB" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la"  for="">Password</label>
                                    <div class="col-md-8"> <input type="Password"  class="form-control btn1"  name="password" 
                                           placeholder="Enter Password" required>
                                    </div>
                                </div>
                            </div>
                           <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la"  for="">User ID</label>
                                    <div class="col-md-8"> <input type="text"  class="form-control btn1" name="user_id" 
                                           placeholder="User ID" value="" required>
                                           <div><?php echo $msg; ?></div>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la">Select Shop</label>
                                    <div class="col-md-8"> <select type="text" class="form-control btn1"  name="shop" required> 
                                             <option>--Select Shop--</option>
                                             <?php 
                                             require('../connection.php');
                                             $sql=mysqli_query($conn,"SELECT * FROM shop");
                                             while ($row=mysqli_fetch_assoc($sql)) 
                                             { ?>
                                             <option value="<?php echo $row['id']; ?>"><?php echo $row['shop_name']; ?></option>
                                             <?php   
                                             } ?>
                                            
                                           </select> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la"  for="">Address</label>
                                    <div class="col-md-8"> <textarea  rows="3" cols="51" style="font-size: 13px;border: 1px solid #e1e8ee;box-shadow: none;border-radius: 3px;"  name="address"  placeholder="Enter Address"  required></textarea>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="col-md-12 mb-12">
                                <div class="row">
                                    <div class="col-md-4"></div>
                                     <div class="col-md-6">
                                           <input type="Reset" id="" value="Reset" style="background-image: linear-gradient(#137937, #267b1c)!important;color: #fff;height: 30px;font-size: 12px;" class="btn " >
                                      <input type="submit" name="submit" value="Create-User" style="background-image: linear-gradient(#1b6969, #104040);color: #fff;height: 30px;font-size: 12px;" class="btn  pull-right" >
                                     
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
<br><br>
<?php include 'footer.php'?>