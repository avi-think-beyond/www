<?php 
session_start();
//error_reporting(E_ALL); 
include_once("../connection.php");
if(isset($_POST['submit']))
{
      $shop       =$_POST['shop_name'];
      $location   =$_POST['location'];
      $address    =$_POST['address']; 
      $contact    =$_POST['contact'];
      $date       =$_POST['p_date'];
      $check      =mysqli_query($conn,"SELECT * FROM shop where shop_name='$shop'");
      if(mysqli_affected_rows($conn))
      {
         echo "<script>alert(' This Shop Allready Added....');window.open('add_shop.php','_self');</script>";
      }
      else
      {
        include_once('../get_rid.php');
        $R_ID = GetR_ID('77'); // uniqe row id

        $query = "INSERT INTO shop(shop_name,location,address,contact,date,FLAG_M,FLAG_L,R_ID) values";
         // $insert=mysqli_query($conn,"INSERT INTO shop(shop_name,location,address,contact,date) values('$shop','$location','$address','$contact','$date')");
        if($connection_type=='live')
        {
            $query .= "('".$shop."','".$location."','".$address."','".$contact."','".$date."','2','2','".$R_ID."')";
            
            mysqli_query($conn,$query) or die(mysqli_error($query));
            mysqli_query($local_conn,$query) or die(mysqli_error($query));      
        }
        else
        {   
            $query .= "('".$shop."','".$location."','".$address."','".$contact."','".$date."','2','1','".$R_ID."')";
            
            mysqli_query($local_conn,$query) or die(mysqli_error($query));

        }



          if(mysqli_affected_rows($local_conn))
            {
             echo "<script>alert('Shop Added Sucessfully....');window.open('add_shop.php','_self');</script>";
            }
           else
          {
  
            echo  "<script>alert('Something is wrong....');window.open('add_shop.php','_self');</script>";
            }
      }
 
}
?>
<?php include 'sidebar.php';?>
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
    box-shadow: #8392a9 2px 0px 15px 2px;
    border-left: 6px solid #336b18;
}
   .le {
    font-size: 12px;
    font-weight: normal;
    /* background-color: #03a9f4; */
    background-image: linear-gradient(#315b1c,#40881d);
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
            <form method="POST" action="#">
                <div class="row " style="margin-top: 150px;">
                  <div class="col-md-3"></div>
                    <div class="col-md-6" >
                     <fieldset class="fes" >
                        <legend class="le">Add Shop</legend>
                        <br>
                            <div class="col-md-12 mb-12">
                                <div class="row">
                                    <label class="col-md-4 la"  for="">Shop Name</label>
                                    <div class="col-md-8"> <input type="text"  class="form-control btn1" id="" name="shop_name" 
                                           placeholder="Enter Shop Name" value="" required>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la"  for="">Location</label>
                                    <div class="col-md-8"> <input type="text"  class="form-control btn1" id="" name="location" 
                                           placeholder="Enter Location" value="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la"  for="">Address</label>
                                    <div class="col-md-8"> <input type="text"  class="form-control btn1" id="" name="address" 
                                           placeholder="Enter Address"  required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-12 s">
                              <div class="row">
                                    <label class="col-md-4 la"  for="">Contact No.</label>
                                    <div class="col-md-8"> <input type="text" maxlength="10" onkeypress="return isNumber(event) " class="form-control btn1" name="contact" 
                                           placeholder="Enter Contact No." required>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la"  for="">Date</label>
                                    <div class="col-md-8"> <input type="text"  class="form-control btn1" id="datepicker-13" name="p_date" 
                                         placeholder="Date"   value="" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12 mb-12" style="margin-top: 5px;">
                                <div class="row">
                                    <div class="col-md-4"></div>
                                     <div class="col-md-6">
                                           <input type="Reset" id="" value="Reset" style="background-image: linear-gradient(#137937, #267b1c)!important;color: #fff;height: 30px;font-size: 12px;" class="btn " >
                                      <input type="submit" name="submit" value="Add" style="background-image: linear-gradient(#1b6969, #104040);color: #fff;height: 30px;font-size: 12px;" class="btn  pull-right" >
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
