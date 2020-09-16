<?php include 'sidebar.php'; include '../connection.php';?>
<?php 
if (isset($_GET['id'])) 
{
  $id=$_GET['id'];  
  $sql=mysqli_query($conn,"SELECT * FROM shop where id='$id'");
  $row=mysqli_fetch_assoc($sql);

}
if (isset($_POST['submit'])) 
{
      $shop=$_POST['shop_name'];
      $location=$_POST['location'];
      $address=$_POST['address'];
      $contact=$_POST['contact'];
      $date=$_POST['p_date'];
      $sql=mysqli_query($conn,"UPDATE shop SET shop_name='$shop',location='$location',address='$address',contact='$contact',date='$date' where id='$id' ");
      if (mysqli_affected_rows($conn)) 
      {
        echo "<script>alert('Updated');</script>";  
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
   .fes {
    border: none;
    padding: 1px;
    border-radius: 2px;
    overflow: ;
    height: auto;
    background-color: #fff;
    box-shadow: #8392a9 2px 0px 15px 2px;
    border-left: 6px solid #1c6160;
}
   .le {
    font-size: 12px;
    font-weight: normal;
    /* background-color: #03a9f4; */
    background-image: linear-gradient(#1e6d6d, #154f4f);
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
            <form id="needs-validation" novalidate method="post">
                <div class="row " style="margin-top: 150px;">
                  <div class="col-md-3"></div>
                    <div class="col-md-6" >
                     <fieldset class="fes">
                        <legend class="le">Re-Update Detail's</legend>
                        <br>
                            <div class="col-md-12 mb-12">
                                <div class="row">
                                    <label class="col-md-4 la"  for="">Shop Name</label>
                                    <div class="col-md-8"> <input type="text"  class="form-control btn1" name="shop_name" 
                                           placeholder="Enter Shop Name" value="<?php echo $row['shop_name']; ?>" required>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la"  for="">Location</label>
                                    <div class="col-md-8"> <input type="text"  class="form-control btn1" name="location" 
                                           placeholder="Enter Location" value="<?php echo $row['location']; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la"  for="">Address</label>
                                    <div class="col-md-8"> <input type="text"  class="form-control btn1" name="address" 
                                           placeholder="Enter Address" value="<?php echo $row['address']; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-12 s">
                              <div class="row">
                                    <label class="col-md-4 la"  for="">Contact No.</label>
                                    <div class="col-md-8"> <input type="text"  class="form-control btn1" name="contact" 
                                           placeholder="Enter Contact No." value="<?php echo $row['contact']; ?>" required>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-12 mb-12 s">
                                <div class="row">
                                    <label class="col-md-4 la"  for="">Date</label>
                                    <div class="col-md-8"> <input type="Date"  class="form-control btn1" name="p_date" 
                                           placeholder="Product Code" value="<?php echo $row['date']; ?>" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12 mb-12" style="margin-top: 5px;">
                                <div class="row">
                                    <div class="col-md-4"></div>
                                     <div class="col-md-6">
                                        
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
