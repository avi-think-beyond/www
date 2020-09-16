<?php include("header.php"); ?>
  <br><br>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/bootstrap.min1.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<style>
  .t2
  {
    margin-top: 5px;
  }

      label
      {
        color: #0d93e2;
        font-size: 14px; 
      }
      .in
      {
        border: 1px solid #bbbbbb;
        border-radius: 3px;
        padding-left: 2px;
        height: 25px;
        font-size: 12px;
        width: 86%;
      }
      h2 {
  text-align: center;
}



.p {
  text-align: center;
  padding-top: 140px;
  font-size: 14px;
}

    </style>
  </head>
  <body>
 
    <div style="width: 100%; margin-bottom: 15px; padding: 2px; padding-left: 20px; border: solid 1px #dcd5d5;box-shadow: inset 1px 1px 12px 2px #d2cdcd;">
      <h2 style="    margin: 0;
    display: inline;
    color: #398ab9;
    font-size: 13px;
    font-weight: 600;"> Alter Company Information </h2>
    </div>



  <div class=" col-md-9" style="margin: auto;">
    <fieldset style="  background-color: #f2f2f2;  border: #ddd 1px solid;  padding: 5px; border-radius: 5px; overflow: hidden;">
        <legend style="    font-size: 13px;  font-weight: normal;  border-bottom: none; text-align: center; width: 90%;  background-color: #0387cc; color: #ffffff; border: #ddd 1px solid; border-top: #ddd 2px solid; padding-left: 18px; padding-top: 3px; padding-bottom: 6px; margin-bottom: 0px;
    border-radius: 5px">Company Profile</legend>
    <br>
       <div class=" row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-12">
          
         <div class="row">
          <label class="col-md-4">Organization Name:</label>
          <div class="col-md-8">
            <input name="" type="text" maxlength="100" id="" class="in" value="MACO INFOTECH LTD."   autocomplete="off">
          </div>
        </div>
         <div class="row t2">
          <label class="col-md-4">Address :</label>
          <div class="col-md-8">
            <input name="" type="text" maxlength="100" id="" class="in" value="West Patel Nagar"  autocomplete="off">
           
          </div>
        </div>
        <div class="row t2">
          <label class="col-md-4">Mail Id:</label>
          <div class="col-md-8">
            <input name="" type="Mail" maxlength="100" id="" class="in" value="qa@macoinfotech.com"  autocomplete="off">
           
          </div>
        </div>
        <div class="row t2">
          <label class="col-md-4">Fax No:</label>
          <div class="col-md-8">
            <input name="" type="text" maxlength="100" id="" class="in"  value="Dharmishtha Baria"  autocomplete="off">
           
          </div>
        </div>
         <div class="row t2">
          <label class="col-md-4">Auditor Name:</label>
          <div class="col-md-8">
            <input name="" type="text" maxlength="100" id="" class="in"   autocomplete="off">
           
          </div>
        </div>
         <div class="row t2">
          <label class="col-md-4">Auditor Address:  </label>
          <div class="col-md-8">
            <input name="" type="text" maxlength="100" id="" class="in"   autocomplete="off">
           
          </div>
        </div>
         <div class="row t2">
          <label class="col-md-4">Audit Signatory:</label>
          <div class="col-md-8">
            <input name="" type="text" maxlength="100" id="" class="in"   autocomplete="off">
           
          </div>
        </div>
         <div class="row t2">
          <label class="col-md-4">State:</label>
          <div class="col-md-8">
           <select name="" id="ctl00_ContentPlaceHolder1_drpState" class="in" maxlength="50">
                  <option value="0">--Select--</option>
                  <option value="28">Andhra Pradesh</option>
                  <option value="35"> Andaman and Nicobar Islands</option>
                  <option value="12"> Arunachal Pradesh</option>
                  <option value="18">Assam</option>
                  <option value="10">Bihar</option>
                  <option value="04">Chandigarh</option>
                  <option value="22">Chhattisgarh</option>
                  <option value="26"> Dadar and Nagar Haveli</option>
                  <option value="25"> Daman and Diu</option>
                  <option selected="selected" value="07"> Delhi</option>
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
         
         <div class="row t2">
          <label class="col-md-4">Allowed Negative Stock:</label>
          <div class="col-md-8">
           <input type="radio" name=""><label>Yes</label> <input type="radio" name=""><label>No</label>
           
          </div>
        </div>
        

            </div>
          </div>
       </div>

        <div class="col-md-5">
          <div class="row">
            <div class="col-md-12">
          
         <div class="row">
          <label class="col-md-4">Branch Name :</label>
          <div class="col-md-8">
            <input name="" type="text" maxlength="100" id="" class="in" readonly=""  autocomplete="off">
          </div>
        </div>
         <div class="row t2">
          <label class="col-md-4">PIN :</label>
          <div class="col-md-8">
            <input name="" type="text" maxlength="100" id="" class="in" value="110008"  autocomplete="off">
           
          </div>
        </div>
        <div class="row t2">
          <label class="col-md-4">City:</label>
          <div class="col-md-8">
            <input name="" type="Mail" maxlength="100" id="" class="in" value="Delhi"  autocomplete="off">
           
          </div>
        </div>
        <div class="row t2">
          <label class="col-md-4">  Phone No:</label>
          <div class="col-md-8">
            <input name="" type="text" maxlength="100" id="" class="in"  value="6767766767"  autocomplete="off">
           
          </div>
        </div>
         <div class="row t2">
          <label class="col-md-4">GSTIN :</label>
          <div class="col-md-8">
            <input name="" type="text" maxlength="100" id="" class="in" value="07JDFA8596K1SF"  autocomplete="off">
           
          </div>
        </div>
         <div class="row t2">
          <label class="col-md-4">Website : </label>
          <div class="col-md-8">
            <input name="" type="text" maxlength="100" id="" value="www.macoinfotech.com" class="in"   autocomplete="off">
           
          </div>
        </div>
         <div class="row t2">
          <label class="col-md-4">Select :</label>
          <div class="col-md-8">
            <select disabled="" class="in">
              <option selected="selected" value="Without Inventory">Without Inventory</option>
                 <option value="With Inventory">With Inventory</option>

            </select>
           
          </div>
        </div>
         <div class="row t2">
          <label class="col-md-4">Logo Image:</label>
          <div class="col-md-8">
             <div class="row ">
                <div class="col-md-3">
                  <img src="images/2.png" style="width: 100px; height: 30px;">
                </div>
                <div class="col-md-8">
                  <input type="file" class="in" name="">
                </div>
          </div>
          </div>
        </div>
         
         <div class="row t2">
          <label class="col-md-4">Roundoff Type</label>
          <div class="col-md-8">
           <select name="" id="" class="in" style="">
              <option selected="selected" value="0">Normal</option>
              <option value="-1">Lower</option>
              <option value="1">Upper</option>

            </select>
          </div>
        </div>
        <div class="row t2">
          <label class="col-md-8"></label>
          <div class="col-md-2">
            <input type="submit" name="" value="Save Changes"   class="btn " style="background-color: #0d93e2; color: #ffffff; height: 30px; font-size: 12px;"  autocomplete="off">
          </div>
        </div>

            </div>
          </div>
       </div>
     </div>    
      <br>   
    </fieldset>
  </div>
   

  <br>
  <!------------------------Footer  ---------------------------->
<?php include("footer.php"); ?>

<!-------------------------SCript File-------------------->
  </body>