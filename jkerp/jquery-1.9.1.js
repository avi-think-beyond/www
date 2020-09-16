<html lang="en">
    <head> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <script>

    /* API method to get paging information */
    'use strict';
  var $ = jQuery;
  $.getScript("https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js", function(){
       
            $('#example').DataTable( {
                "paging":   true,
                "ordering": true,
                "info":     false
            } );
  });
</script>
    <style>
      

table {
    
    margin:0px;
}

thead, tfoot {
    
    display:table;
    
    /*width:calc(100% - 18px);*/
}
tbody {
    height:200px;
    overflow-y: scroll;
    overflow-x:hidden;
    display:block;
    width:100%;
}
tbody tr {
    display:table;
    table-layout:fixed;
}

tfoot
{
  background-color: #eee;
  height: 35px;
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
      }
      h2 {
  text-align: center;
}



.p {
  text-align: center;
  padding-top: 140px;
  font-size: 14px;
}
.menu{

  padding: 10px;margin: 10px;
 float: left;
}
.text-on-pannel {
  background: #fff none repeat scroll 0 0;
  height: auto;
  margin-left: 400px;
  padding: 3px 5px;
  position: absolute;
  margin-top: -47px;
  border: 1px solid #337ab7;
  border-radius: 8px;
}

.panel {
  /* for text on pannel */
  margin-top: 27px !important;
}

.panel-body {
  padding-top: 30px !important;

}

    </style>
    <title>Sales Invoice</title>
   
</script>
  </head>
  <body style="background-color: #f2f2f2;">
   
    
   <div style="width: 98%; overflow: hidden; margin-left: auto; margin-right: auto;">
    <hr>
      <div class="row">
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-6">
              <label style="width:100px;">Invoice Type
                <span style="color: red;">*</span>
              </label>
              
              <label>Tax</label>
              <input name="ti"  type="checkbox" >
              <label>Retail</label>
              <input name="igst"  type="checkbox">
            </div>
            <div class="col-md-6">
              <label style="width: 71px;">Invoice No</label>
              <input name="" class="in" style="width: 60px; height: 25px; " type="text" id="" readonly="" >&nbsp;
            </div>
            
          </div>
        </div>
        <div class="col-md-3">
          <div class="row">
            <div class="col-md-6" style="">
               <label style="width: 80px;"> Invoice Date</label>
              <input class="in" style="width: 80px; color: #0d93e2; height: 25px;" name="">
            </div>
            <div class="col-md-6">
              <label style="width: 80px;">&nbsp;LR/RR Date</label>
              <input class="in" style="width: 60px; color: #0d93e2; height: 25px;" name="">
            </div> 
          </div>
        </div>

        <div class="col-md-5">
          <div class="row">
            
            <div class="col-md-5" id="grpChkBox">
              <label>IGST</label>
              <input name="ti"  type="checkbox" >
              <label>B2B</label>
              <input name="igst"  type="checkbox">
              <label>WS Rate</label>
              <input name="ti"  type="checkbox" >
            </div> 
            <div class="col-md-5">
              <label style="width: 110px;">Payment Due Days</label>
              <input class="in" type="text" style="width: 60px; height:25px;" name="">&nbsp;
            </div>
            <div class="col-md-2">
              <input type="button" id="" value="RESET" class="btn btn-success" style="height: 35px;" autocomplete="off" >
            </div>
            

          </div>
        </div>
      </div>
     
      <div class="row">
        <div class="col-md-3">
          <div class="row">
            
            <div class="col-md-12">
              <label>Payment Due Date</label>
              <input class="in" type="text" style="width: 104px; height:25px;" name="">&nbsp;
            </div>
        </div>
      </div>
        <div class="col-md-6">
        <div class="row">
          <div class="col-md-12">
              <label style="width: 160px;">Sale To InterState Branch</label>
              <input name="igst"  type="checkbox">
            </div> 
          
       </div>
        </div>
        <div class="col-md-3">
          <select style="" class="in" style="color: #0d93e2;">
              <option>Add Row</option>
              <option value="5">5</option>
              <option value="10">10</option>
              <option value="15">15</option>
              <option value="20">20</option>
          </select>
      </div>
    </div>
    <hr>
    
  <div class="row">
    <div class="col-md-8 table-responsive">
      
        <table  class="table  table-bordered table-hover">
         
          <thead style="background-color: #0d93e2; ">
          <tr >
              <th scope="col" style="width: 85px;">Bar Code</th>
              <th scope="col" style="width: 105px;">Item Name/Code</th>
              <th scope="col" style="width: 86px;">Item Desc</th>
              <th scope="col" style="    width: 44px;">Size</th>
              <th scope="col" style=" width: 44px;">Color</th>
              
              <th>Brand</th>
              <th scope="col" style="width: 33px;">Model</th>
              <th scope="col" style="width: 45px;">HSN Code</th>
              <th scope="col" style="width: 45px;">Unit</th>
              <th scope="col" style="width: 49px;">Rate</th>
              <th>Quantity</th>
             
              <th scope="col" style="width: 45px;">Amount</th>
              <th scope="col" style="width: 48px;">Dis %</th>
              <th>Dis Amt</th>
              <th style="width: 48px;">Purchase Amt</th>


              <th scope="col" style="width: 36px;">GST %</th>
              <th scope="col" style="width: 39px;">   SGST</th>



              <th scope="col" style="width: 42px;">  CGST</th>
              <th scope="col"scope="col" style="width: 43px;">IGST </th>
              <th scope="col" style="width: 41px;">Cess Rate</th>
              <th scope="col" style="width: 52px;">Cess Amt</th>
              <th scope="col" style="width: 44px;">Gross Amt</th>
              <th style="width: 51px;">MRP</th>
              <th scope="col" style="width:35px;"></th>
            </tr>

          </thead>
          <tbody>
            
          <tr>
              <td><input type="text" style="width: 83px; height: 25" class="in" name=""></td>
              <td><input type="text" style="width:101px; height: 25" class="in" name=""></td>
              <td><input type="text" style="width:83px; height: 25" class="in" name=""></td>
              <td><input type="text" style="width:41px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width:41px; height: 25px;" class="in" name=""></td>


              <td><input type="text" style="width:41px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width:41px; height: 25px;" class="in" name=""></td>




              <td><input type="text" style="width:41px; height: 25px;" class="in" readonly="" name=""></td>
              <td><input type="text" style="width: 41px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 55px; height: 25px;" class="in" readonly="" name=""></td>
             
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
               <td><input type="text" style="    width: 62px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 33px;height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 40px;height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 39px;height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 39px;height: 25px;" class="in" name=""></td>
                            <td><input type="text" style="width: 39px;height: 25px;" class="in" name=""></td>

              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 40px;height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
             <td><span style=" display:inline-block;width:31px;text-align: center;"><input type="checkbox" class="in" name=""></span>
              </td>
              
            
          </tr>
          
          </tbody>
          <tfoot>
           <tr>
              <td><input type="text" style="width: 83px; height: 25" class="in" name=""></td>
              <td><input type="text" style="width:101px; height: 25" class="in" name=""></td>
              <td><input type="text" style="width:83px; height: 25" class="in" name=""></td>
              <td><input type="text" style="width:41px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width:41px; height: 25px;" class="in" name=""></td>


              <td><input type="text" style="width:41px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width:41px; height: 25px;" class="in" name=""></td>




              <td><input type="text" style="width:41px; height: 25px;" class="in" readonly="" name=""></td>
              <td><input type="text" style="width: 41px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 55px; height: 25px;" class="in" readonly="" name=""></td>
             
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
               <td><input type="text" style="    width: 62px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 33px;height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 40px;height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 39px;height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 39px;height: 25px;" class="in" name=""></td>
                            <td><input type="text" style="width: 39px;height: 25px;" class="in" name=""></td>

              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 40px;height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
             <td><span style=" display:inline-block;width:31px;text-align: center;"></span>
              </td>
              
            
          </tr>
          </tfoot>
        </table>
     
    </div>
<div class="col-sm-4" style="padding: 10px;" >
      <div class="row">
        <div class="col-md-3">
        <label>Customer Details</label>
      </div>
    </div>
    <div class="row" >
      <label class="col-md-4 ">
          Contact Number
      </label>
      <div class="col-md-8 ">
          <input name="" type="text" />
        </div>
      </div>
      <div class="row" style="padding-top: 5px;">
        <label class="col-md-4 " >
          Name
      </label>
      <div class="col-md-6 ">
          <input name="" type="text" />
        </div>
      </div>
      <div class="row"style="padding-top: 5px;" >
        <label class="col-md-4 ">
          Email
      </label>
      <div class="col-md-6 ">
          <input name="" type="text"  />
        </div>
      </div>
      <div class="row" style="padding-top: 5px;" >
        <label class="col-md-4 ">
          Address
      </label>
      <div class="col-md-6 ">
          <input name="" type="text"  />
        </div>
      </div>
      <div class="row" style="padding-top: 5px;">
        <label class="col-md-4 ">
          GSTIN
      </label>
      <div class="col-md-6 ">
          <input name="" type="text" />
        </div>
      </div>
      <div class="row" style="padding-top: 5px;">
        <label class="col-md-4 ">
          Place of Supply
      </label>

                        <div class="col-md-6 ">
                        <select name=""  >
    <option selected="selected" value="0">Select State</option>
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
  <div class="row">
        <div class="col-md-3">
        <label>Other Details</label>
      </div>
    </div>
    <div class="row" >
      <label class="col-md-4 ">
          Transporter Name
      </label>
      <div class="col-md-6 ">
          <input name="" type="text" />
        </div>
      </div>
      <div class="row" style="padding-top: 5px;">
        <label class="col-md-4 " >
          GR Number
      </label>
      <div class="col-md-6 ">
          <input name="" type="text" >
        </div>
      </div>
      <div class="row"style="padding-top: 5px;" >
        <label class="col-md-4 ">
          E-Way Bill No
      </label>
      <div class="col-md-6 ">
          <input name="" type="text"  />
        </div>
      </div>
      <div class="row" style="padding-top: 5px;" >
        <label class="col-md-4 ">
          Remarks
      </label>
      <div class="col-md-6 ">
          <input name="" type="text" />
        </div>
      </div>
      <div class="row" style="padding-top: 5px;">
        <label class="col-md-4 ">
          Challan No

      </label>
      <div class="col-md-6 ">
          <input name="" type="text" />
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
        <label>Consignee Details</label>
      </div>
    </div>
    <div class="row" >
      <label class="col-md-4 ">
          Name
      </label>
      <div class="col-md-6 ">
          <input name="" type="text"   />
        </div>
      </div>
      <div class="row" style="padding-top: 5px;">
        <label class="col-md-4 " >
          Contact No.
      </label>
      <div class="col-md-6">
          <input name="" type="text"    />
        </div>
      </div>
      <div class="row"style="padding-top: 5px;" >
        <label class="col-md-4 ">
          Place
      </label>
      <div class="col-md-6 ">
          <input name="" type="text" />
        </div>
      </div>
      <div class="row" style="padding-top: 5px;" >
        <label class="col-md-4 ">
          Address
      </label>
      <div class="col-md-6 ">
          <input name="" type="text"  />
        </div>
      </div>
      <div class="row" style="padding-top: 5px;">
        <label class="col-md-4 ">
         GSTIN

      </label>
      <div class="col-md-6">
          <input name="" type="text"  />
        </div>
      </div>
</div>

</div>
<div class="row">
    <div class="col-md-8">
  <div class="panel panel-primary">
    <div class="panel-body">
      <h3 class="text-on-pannel"><strong> Sales Summary </strong></h3>
      <div class="row">
          <div class="col-md-12">
            <table id="tblgst" class="table table-bordered">
                <tbody><tr>
                     <th></th>
                    <th>GST %
                    </th>
                    <th>Taxable Value
                     </th>
                     <th>CGST
                    </th>
                    <th>SGST
                     </th>
                    
                     <th>Gross Value
                     </th>
                  </tr>
                </tbody><tbody id="gstSummary"></tbody>
            </table>
             
          </div>
        
      </div>
    </div>
  </div>
  <div>
    </div>

  




  </body>
</html>