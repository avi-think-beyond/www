<!DOCTYPE html>
<html lang="en">
<head>

	<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style type="text/css">
  body
  {
        color: #1667b7;
  }
</style>
<script>
function demoDisplay() {
  document.getElementById("show").style.display = "block";
}
function demoVisibility() {
  document.getElementById("show").style.display = "none";
}
</script>
</head>


<body  style="background-image: url(images/4.jpg);   height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">
<div class="container " style="margin-top: 60px; ">

  
 <form class="form-horizontal" action="">
	<div class="row">
		  <div class="col-md-11" style="box-shadow: 1px 2px 6px -1px #8a8a8a; padding-top: 20px; margin-right: auto;margin-left: auto; padding-bottom: 20px;">
        
      <div class="row">
          <div class="col-md-6">

              <div class="row">

                          <label class="control-label col-sm-4" for="" >Select :</label>
                          <div class="col-sm-8">
                            <span id="" class="form-control" style="display:inline-block;width:240px; height: 35px;">
                              <span style="margin-right: 15px;">
                                <input id="" type="radio" onclick="demoVisibility();" name="branchbtn" value="New Company" checked="checked">
                                <label for="">New Company</label>
                              </span>
                              <input id="" type="radio" name="branchbtn" onclick="demoDisplay()"  value="Branch">
                              <label for="">Branch</label>
                            </span>
                          </div>
              </div>
              <br>
               <div class="row">
                      <label class="control-label col-sm-4" for="" >Company Name : *</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id=""  placeholder="" name="">
                      </div>
               </div>
              <br>
               <div class="row" id="show" style="display: none;">
                      <label class="control-label col-sm-4" style="float: left;">Select Company Name :</label>
                      <div class="col-sm-8" style="float: left;">
                        <select size="1" name="" id="" tabindex="2" class="form-control">
                          <option value="posretail120">MACO INFOTECH LTD.</option>
                          <option value="posretail131">MACO INFOTECH 2</option>
                          <option value="posretail132">maco</option>
                          <option value="posretail136">Connectivity Solutions Pvt Ltd</option>

                        </select>
                      </div>
               </div>
              
          </div>
          <dir class="col-md-2">
            
          </dir>
          <!-- <dir class="col-md-4">
            <center>
                         <img src="images/logo.png" width="100%">
            </center>
          </dir> -->
      </div>
      
      <hr>
      <div class="row">
        <div class="col-md-6"> <h5>Other Details of Company & Auditors........</h5></div>
        <div class="col-md-6"> <center>
                    <span style="float: right;">



                                
                         

                               <a  style=" margin-right: 10px;" class="btn btn-info" href="#" title="Home page">
                                  <i class="fa fa-home" aria-hidden="true"></i> Home</a><a class="btn btn-success" href="" style="  font-size: 16px;"><i class="fa fa-sign-out" title="logout" aria-hidden="true"></i>Log Out</a></span>
                 <center></div>
      </div>
     
      <hr>
        <div class="row">
          <div class="col-md-6">
             
                    <div class="row">
                      <label class="control-label col-sm-4" for="" >Auditor Name :</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id=""  placeholder="" name="">
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <label class="control-label col-sm-4" for="" >Audit Signatory:</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id=""  placeholder="" name="">
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <label class="control-label col-sm-4" for="" >GSTIN :</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id=""  placeholder="" name="">
                      </div>
                    </div>
                    <br>
                     <div class="row">
                      <label class="control-label col-sm-4" for="" >Phone No :</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id=""  placeholder="" name="">
                      </div>
                    </div>
                    <br>
                     <div class="row">
                      <label class="control-label col-sm-4" for="" >State :</label>
                      <div class="col-sm-8">
                        <select name="DdlState" class="form-control"style="">
                              <option selected="selected" value="0">--Select--</option>
                              <option value="28">Andhra Pradesh</option>
                              <option value="35"> Andaman and Nicobar Islands</option>
                              <option value="12"> Arunachal Pradesh</option>
                              <option value="18">Assam</option>
                              <option value="10">Bihar</option>
                              <option value="04">Chandigarh</option>
                              <option value="22">Chhattisgarh</option>
                              <option value="26"> Dadar and Nagar Haveli</option>
                              <option value="25"> Daman and Diu</option>
                              <option value="07"> Delhi</option>
                              <option value="30">Goa</option>
                              <option value="24"> Gujarat</option>
                              <option value="06"> Haryana</option>
                              <option value="02">Himachal Pradesh</option>
                              <option value="01">Jammu and Kashmir</option>
                              <option value="20">Jharkhand</option>
                              <option value="29">Karnataka</option>
                              <option value="32">Kerala</option>
                              <option value="31">Lakshadweep</option>
                              <option value="23">Madhya Pradesh</option>
                              <option value="27">Maharashtra</option>
                              <option value="14">Manipur</option>
                              <option value="17">Meghalaya</option>
                              <option value="15">Mizoram</option>
                              <option value="13">Nagaland</option>
                              <option value="21">Odisha</option>
                              <option value="34">Pondicherry</option>
                              <option value="03">Punjab</option>
                              <option value="08">Rajasthan</option>
                              <option value="11">Sikkim</option>
                              <option value="33">Tamil Nadu</option>
                              <option value="36">Telangana</option>
                              <option value="16">Tripura</option>
                              <option value="09">Uttar Pradesh</option>
                              <option value="05">Uttarakhand</option>
                              <option value="19">West Bangal</option>

                          </select>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <label class="control-label col-sm-4" for="" >Website :</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id=""  placeholder="" name="">
                      </div>
                    </div>
                    
                    <br>
                    <div class="row">
                      <label class="control-label col-sm-4" for="" >Currency :</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id=""  placeholder="" name="">
                      </div>
                    </div>
                    <br><div class="row">
                      <label class="control-label col-sm-4" for="" >Select Index Page :</label>
                      <div class="col-sm-8">
                       <select name="" class="form-control" style="">
                          <option selected="selected" value=" ">--Select--</option>
                          <option value=""></option>

                        </select>
                       </div>
                    </div>
                    <br>
                    <div class="row">
                      <label class="control-label col-sm-4" for="" >Invoice Report Format:</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id=""  placeholder="" name="">
                      </div>
                    </div>
          </div>
          <div class="col-md-6">
            
               <div class="row">
                      <label class="control-label col-sm-4" for="" >Auditor Address :</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id=""  placeholder="" name="">
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <label class="control-label col-sm-4" for="" >Auditor Place :</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id=""  placeholder="" name="">
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <label class="control-label col-sm-4" for="" >  Auditor City :</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id=""  placeholder="" name="">
                      </div>
                    </div>
                    <br>
                     <div class="row">
                      <label class="control-label col-sm-4" for="" >Address :</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id=""  placeholder="" name="">
                      </div>
                    </div>
                    <br>
                     <div class="row">
                      <label class="control-label col-sm-4" for="" > City :</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id=""  placeholder="" name="">
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <label class="control-label col-sm-4" for="" >  Mail Id :</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id=""  placeholder="" name="">
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <label class="control-label col-sm-4" for="" >  Fax No:</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id=""  placeholder="" name="">
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <label class="control-label col-sm-4" for="" >  Select Features:</label>
                      <div class="col-sm-8">
                        <table id="chkfeat" border="0">
                            <tbody>
                              <tr>
                              <td><input id="" type="checkbox" name=""><label for="">POS</label></td>
                              <td><input id="" type="checkbox" name=""><label for="">Accounting</label></td>
                              <td><input id="" type="checkbox" name="" ><label for="">Production</label></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <label class="control-label col-sm-4" for="" >Barcode Report Format:</label>
                      <div class="col-sm-8">
                       <select name="" id="" class="form-control">
                          <option selected="selected" value=" ">--Select--</option>
                          <option value="BCReportsp">BCReportsp</option>

                        </select>
                      </div>
                    </div> 

          </div> 
      </div>
      <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-6">
            *** Select Starting Financial year to maintain opening balance  
          </div>
          <div class="col-md-4">
            <select name="" id="" class="form-control">
              <option selected="selected" value="Financial Year">Financial Year</option>
              <option value="2019">2019/2020</option>
              <option value="2018">2018/2019</option>
              <option value="2017">2017/2018</option>

            </select>
          </div>
      </div>
      <br>
       <div class="row">
          <div class="col-md-9">
          </div>
          <div class="col-md-3">
             <div class="row">
                     
                        <input type="submit" name="" value="Save"  id="" tabindex="20" class="btn btn-success" style="font-weight:normal;width:101px; float: left;">
                     
                    
                        <input type="reset" name="" value="Reset"  id="" tabindex="20" class="btn btn-info" style="font-weight:normal;width:101px; margin-left: 10px;">
                      
              </div>
          </div>
      </div>
      
  </div>
  </div>
</div>
<br>
<br>
</div>
</form>
</body>
</html>
 
                	 