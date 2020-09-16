<?php include("header.php"); ?>
  <br><br>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
      

@media only screen and (max-width: 768px) {
  #in{
    width: 86%;
  }
    #in1{
    width: 92%;
  }
}

table {
    
    margin:0px;
}

thead, tfoot {
    
    display:table;
    
    /*width:calc(100% - 18px);*/
}

body
{
  margin: 0px;
}

      label
      {
        color: #0d93e2;
        font-size: 12px; 
        font-weight: 600;
      }
      .in
      {
        border: 1px solid #bbbbbb;
        border-radius: 3px;
        padding-left: 1%;
        width: 92%;
        height: 25px;
        font-size: 12px;
        font-family: 'Quicksand', sans-serif !important;

      }
      h2 {
  text-align: center;
}

.p {
  text-align: center;
  padding-top: 140px;
  font-size: 14px;
}
fieldset
{
  width: 96%;  border: 1px solid #c5aaaa; height:500px;
}
legend{display: block;
    font-weight: 600;
    text-align: center;
    line-height: inherit;
    color: inherit;
    white-space: normal;
    margin:-button:10px;
    background-color: #dacaca;
    border-radius: 2px;
    padding-bottom: 2px;
    padding-top: 2px;
    width: 177px;
    font-size: 13px;
    box-shadow: inset 1px 1px 5px 2px #a08d98;
}

    </style>
<script language="javascript">

  //hidden the colum.. with cell 
       
     function hideCol() {
          
            var checkbox=document.getElementById('txtCol');
            var tbl = document.getElementById("tblMain");
            var tbl1 = document.getElementById("tblMain1");
           //2 table
                for (var i = 0; i < tbl.rows.length; i++) {
                    for (var j = 0; j < tbl.rows[i].cells.length; j++) {
                      if (checkbox.checked==true) 
                      {

                          if (j == 3 || j==4)
                          {
                              tbl.rows[i].cells[j].style.display = "none";
                          }
                         
                            tbl.rows[i].cells[5].style.display = "";

                     }
                      else
                      {
                          if (j == 3 || j==4)
                          {
                          tbl.rows[i].cells[j].style.display = "";
                          }
                          tbl.rows[i].cells[5].style.display = "none";
                          
                      }
                    }
                }
                //2 end
                //1 table
                 for (var i = 0; i < tbl1.rows.length; i++) {
                    for (var j = 0; j < tbl1.rows[i].cells.length; j++) {
                      if (checkbox.checked==true) 
                      {

                          if (j == 12 || j==13)
                          {
                              tbl1.rows[i].cells[j].style.display = "none";
                          }
                         
                            tbl1.rows[i].cells[14].style.display = "";

                     }
                      else
                      {
                          if (j == 12 || j==13)
                          {
                          tbl1.rows[i].cells[j].style.display = "";
                          }
                          tbl1.rows[i].cells[14].style.display = "none";
                          
                      }
                    }
                }
                //end 1 table
            }
  //end hidden function
        
 //add new row with type of ..and cell in table 
    
function addRow()
{
var table = document.getElementById("dataTable");
var t1= document.getElementById("t").value;
for (var j = 1; j<=t1; j++) 
{
    
var c = parseInt(count)+parseInt(0);
var rowCount = table.rows.length;
var row = table.insertRow(rowCount);
var colCount = table.rows[0].cells.length;
      

        for(var i=0; i<colCount; i++) 
        {
          
        var newcell = row.insertCell(i);

        newcell.innerHTML = table.rows[0].cells[i].innerHTML;


        switch(newcell.childNodes[0].type)
         {
        case "text":newcell.childNodes[0].value = "";
        var node_id = newcell.childNodes[0].id;
        var node_id_arr = node_id.split('_');
        newcell.childNodes[0].id=node_id_arr[0]+'_'+c;
        break;
        case "checkbox":newcell.childNodes[0].checked = false;
        var node_id = newcell.childNodes[0].id;
        var node_id_arr = node_id.split('_');
        newcell.childNodes[0].id=node_id_arr[0]+'_'+c;
        break;
        }
          

        } 

  }


document.getElementById("t").selectedIndex = 0;



}
// end add row function

  function display1() 
  {
  document.getElementById("show").style.display = "block";
  document.getElementById("box").style.display = "block";
  document.getElementById("hid1").style.display = "none";
  document.getElementById("hid2").style.display = "none";
  document.getElementById("d1").style.display = "none";
  document.getElementById("hid3").style.display = "none";
  document.getElementById("t2").style.display = "block";
  document.getElementById("t3").style.display = "block";
  document.getElementById("t4").style.display = "block";
  document.getElementById("t5").style.display = "block";
  document.getElementById("save").style.display = "block";
}
// 
function myFunction() {
  var checkBox = document.getElementById("cash");
  var text = document.getElementById("cash1");
  var text1 = document.getElementById("d2");

  if (checkBox.checked == true){
    text.style.display = "block";
    text1.style.display = "none";
  } else {
     text.style.display = "none";
      text1.style.display = "block";
  }
}
function card()
{
  var checkBox = document.getElementById("card");
  var text = document.getElementById("card1");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
function cheque()
{
  var checkBox = document.getElementById("cheque");
  var text = document.getElementById("cheque1");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
function wallet()
{
  var checkBox = document.getElementById("wallet");
  var text = document.getElementById("wallet1");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}

  </script>
    <title>MegaMenu Design</title>
    <link href="css/bootstrap.min1.css" rel="stylesheet" id="bootstrap-css">

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
  </head>
  <body> 
     <div style="width: 100%; margin-bottom: 15px; padding: 2px; padding-left: 20px; border: solid 1px #dcd5d5;box-shadow: inset 1px 1px 12px 2px #d2cdcd;">
      <h2 style="    margin: 0;
    display: inline;
    color: #398ab9;
    font-size: 13px;
    font-weight: 600;">Credit Note </h2>
    </div>
     <input type="text" name="count" id="count" hidden="" value="1">
    
   <div style="width: 96%; overflow: hidden; margin-left: auto; margin-right: auto;">
  
     <div class="row" >
      
       
          <div class="col-sm-2 ">
            <div class="row">
               <label class="col-md-5">Invoice No<span style="color: Red;">*</span></label>
               <div class="col-md-7">
                 <input name="" type="text" value="454-121-311" id="txt_invoice_no" class="in">
               </div>
            </div>
          </div>
     
         <div class="col-sm-2 ">
            <div class="row">
               <label class="col-md-1"></label>
               <label class="col-md-4">Invoice Date</label>
               <div class="col-md-7">
                 <input name="" type="date" id="txt_invoice_no" class="in">
               </div>
            </div>
          </div>
           <div class="col-sm-2 ">
            <div class="row">
               <label class="col-md-1"></label>
               <label class="col-md-4">LR/RR Date</label>
               <div class="col-md-7">
                 <input name="" type="date" id="txt_invoice_no" class="in">
               </div>
            </div>
          </div>
          
           <div class="col-sm-2 ">
             <div class="row">
                 <div class="col-md-2"></div>
                 <label> IGST&nbsp;<input  id="txtCol" type="checkbox" onclick="hideCol();" /></label>&nbsp;&nbsp;&nbsp;
                 <label> B2B&nbsp;<input type="checkbox" name=""></label>&nbsp;&nbsp;
                 <label>  WS Rate&nbsp; <input  type="checkbox" name=""></label>
             </div>
           </div>

           <div class="col-sm-2 " >
             <div class="row">
              <div class="col-md-1"></div>
              <label class="col-md-6">Payment Due Days</label>
              <div class="col-md-5"><input type="Days" class="in" name=""></div>
             </div>
           </div>
           <div class="col-sm-2">
             <div class="row">
                 <div class="col-md-5"></div>
                   <input type="button" id="" value="Reset" class="btn" style="background-color: #0d93e2; font-weight: 800; width: 100px;  font-size: 11px; color: #fff; height: 28px;" >
             </div>
           </div>
      </div>
     
      <br>
   
      <div class="row" >
           <div class="col-sm-3 ">
             <div class="row">
              <label class="col-md-5">Payment Due Date</label>
              <div class="col-md-7"><input type="date" class="in" name=""></div>
             </div>
           </div>
            <div class="col-sm-4">

              <div class="row">
                <div class="col-sm-2"></div>
              <label class="col-md-3">Ref. Invoice No</label>
              <div class="col-md-5"><input type="date" class="in" name=""></div>
             </div>
           </div>
      
           
           <div class="col-md-1">
           <select class="in" autofocus onclick="addRow()" onChange="PipeConfigChange(this.value);" id="t" style="color: #0d93e2; height: 28px;" >

              <option disabled selected  >Add Row</option>
              <option  value="5">5</option>
              <option  value="10">10</option>
              <option   value="15">15</option>
              <option   value="20">20</option>
          </select>
          </div>
          
           
      </div>
   
<br>

  <div class="row">

    <div class="col-md-8">
  <!--start table_1   -->
      <div class=" table-responsive" style="width:99%; box-shadow: inset 1px 0px 8px 3px #eae5f1; padding:1%;margin-left: auto; margin-right: auto;">
         <table id="tblMain1" class="table  table-bordered table-hover" style="">
         
          <thead style="background-color: #0d93e2; ">
            <tr>
              <th scope="col" style="width: 122px">Bar Code</th>
              <th scope="col" style="width: 103px">Item Name/Code</th>
              <th scope="col" style="width: 80px;">Item Desc</th>
              <th scope="col" style="width: 80px;">HSN Code</th>
              <th scope="col" style="width: 80px;">Unit</th>
              
              <th scope="col" style="width: 80px;">Rate</th>
               <th scope="col" style="width: 80px;">Quantity</th>
              <th scope="col" style="width: 80px;"> Amount</th>
              <th scope="col" style="width: 35px;">Tax Incl.</th>
              <th scope="col" style="width: 40px;">Dis %</th>
              <th scope="col" style="width: 40px;">Dis Amt</th>
              <th scope="col" style="width: 40px;">Taxable Amt</th>
             
              <th scope="col" style="width: 45px;">GST %</th>
              <th scope="col" style="width: 45px;">SGST</th>
              <th scope="col" style="width: 45px;">CGST</th>
              <th scope="col" style="width: 45px;">IGST</th>
              <th scope="col" style="width: 45px;">Gross Value</th>
             
              <th scope="col" style="width: 45px;">MRP</th>
              
              <th scope="col" style="width: 21px;"></th>
            </tr>
          </thead>
          <tbody style="height:200px; overflow-y: scroll;  overflow-x:hidden; display:block; width:100%;" id="dataTable">
            <tr style="display:table; table-layout:fixed;">
              <td><span id="counta">1</span><input type="text" style="width: 110px; height: 25" class="in" name="" ></td>
              <td><input type="text" style="width: 100px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 77px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 77px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 78px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 77px; height: 25px;" class="in" name=""></td>
               <td><input type="text" style="width: 77px; height: 25px;" class="in" readonly="" name=""></td>
                <td><input type="text" style="width: 77px; height: 25px;" class="in" readonly="" name=""></td>
              <td ><span style=" display:inline-block;width:31px;text-align: center;"><input type="checkbox"name=""></span>
              </td>
              <td><input type="text" style="width: 37px; height: 25px;" class="in" name=""></td>
              
              <td><input type="text" style="width: 37px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 50px; height: 25px;" class="in" readonly="" name=""></td>
              <td><input type="text" style="width: 42px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 42px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 42px; height: 25px;" class="in" readonly="" name=""></td>
              <td><input type="text" style="width: 42px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 42px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 40px; height: 25px;" class="in" readonly="" name=""></td>
             
              <td ><span style=" display:inline-block;width:21px;text-align: center;"><input type="checkbox"name=""></span>
              </td>
            </tr>
            
          </tbody>
         
        </table>
      </div>
      <!-- end table_1 -->
      <br>
      <div class="row">
        <div class="col-md-7 table-responsive" >
        <fieldset id="in1" style=" height: auto; background-color: #f2f2f2;  text-align: center; border: #ddd 1px solid;  padding: 5px; border-radius: 5px; overflow: hidden;">
              <legend style="    font-size: 13px;  font-weight: normal;  border-bottom: none;  width: 90%;  background-color: #f9f9f9; border: #ddd 1px solid; border-top: #ddd 2px solid; padding-left: 18px; padding-top: 3px; padding-bottom: 6px; margin-bottom: 0px;
    border-radius: 5px">Sales Summary</legend>
            <!-- start table_2 -->
               <table id="tblMain"  class="table table-bordered table-responsive">
                <thead>
                  <tr style="background-color: #f2f2f2;">
                      <th></th>
                      <th style="color: #000;width: 70px;">GST %  </th>                                                             
                      <th style="color: #000;width: 167px;">Taxable Value </th>                                                           
                      <th style="color: #000;width: 107px">CGST</th>                                                            
                      <th style="color: #000;width: 107px">SGST</th>                                                           
                      <th style="color: #000;width: 150px; display: none;">IGST</th>                                                       
                      <th style="color: #000; width: 150px;">Gross Value </th>
                  </tr>
                
               </thead> 
                <tbody>
                  
                </tbody>
        </table>
          <!-- end start table_2 -->
        </fieldset>
        </div>
        
<!-- start Value -->
        <div class="col-md-5">
          <div class="row">
                <label class="col-md-4">Gross Value</label>
                    <div class="col-md-7">
                      <input name="" type="text"  id="in" class="in" >
                    </div>
            </div>  

            <div class="row" style="margin-top: 3px;">
                <label class="col-md-4">Round Off Value</label>
                    <div class="col-md-7">
                      <input name="" type="text" id="in"  class="in" >
                    </div>
            </div>  
            <div class="row" style="margin-top: 3px;">
                <label class="col-md-4">Net Value</label>
                    <div class="col-md-7">
                      <input name="" id="in" type="text"  class="in" >
                    </div>
            </div>                                                             
              <div class="row" style="margin-top: 3px;">
                <label class="col-md-7"></label>
                    <div class="col-md-3" >
                      <input type="button" id="d1" onclick="display1();"  value="Payment" class="btn" style="background-color: #0d93e2; font-weight: 900; width: 100px;  font-size: 12px; color: #fff; height: 30px;" >
                    </div>
            </div> 
                                                         
        </div>
<!-- end Value -->
      </div>                                                    
     
    </div>
    <div class="col-md-4">
<!-- Customer Details -->
         <details id="hid1"   style="margin-left: 20px; ">
        <summary style="width:94%; border-radius: 7px; border: solid 1px #0d93e2; background-color: #f2f2f2; padding: 5px;">Customer Details</summary>
      <div style="width: 94%; height: auto; padding-left: 4%; padding-bottom: 2%; padding-top: 2%;border-radius: 7px; box-shadow: 0px 2px 5px 0px #38b3b9;">
        <div class="row" style="margin-top: 10px;">
              <label  class="col-md-4">Contact Number</label>
              <div class="col-sm-6">
               <input name="" type="text" maxlength="10" id="cust_no" class="in">
            </div>
          </div>
        <div class="row" style="margin-top: 10px;">
              <label  class="col-md-4">Name</label>
              <div class="col-sm-6">
               <input name="" type="text" maxlength="10" id="cust_no" class="in">
            </div>
          </div>
         <div class="row" style="margin-top: 10px;">
              <label  class="col-md-4">Email</label>
              <div class="col-sm-6">
               <input name="" type="text" maxlength="10" id="cust_no" class="in">
            </div>
          </div>
        <div class="row" style="margin-top: 10px;">
              <label  class="col-md-4">Address</label>
              <div class="col-sm-6">
               <input name="" type="text" maxlength="10" id="cust_no" class="in">
            </div>
          </div>
          <div class="row" style="margin-top: 10px;">
              <label  class="col-md-4">GSTIN</label>
              <div class="col-sm-6">
               <input name="" type="text" maxlength="10" id="cust_no" class="in">
            </div>
          </div>
          <div class="row" style="margin-top: 10px;">
              <label  class="col-md-4">Place of Supply</label>
              <div class="col-sm-6">
                <select name="" id=""  class="in">
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
          </div>
          
      </details>
  <!--end Customer Details -->

  <!-- Other Details -->

       <details id="hid2"  style="margin-left: 20px; margin-top: 10px;">
        <summary style="width:94%; border-radius: 7px; border: solid 1px #0d93e2; background-color: #f2f2f2; padding: 5px;">Other Details</summary>
       <div style="width: 94%; height: auto; padding-left: 4%; padding-bottom: 2%; padding-top: 2%;border-radius: 7px; box-shadow: 0px 2px 5px 0px #38b3b9;">
        <div class="row" style="margin-top: 10px;">
              <label  class="col-md-4">Transporter Name</label>
              <div class="col-sm-6">
               <input name="" type="text" maxlength="10" id="cust_no" class="in">
            </div>
          </div>
        <div class="row" style="margin-top: 10px;">
              <label  class="col-md-4">GR Number</label>
              <div class="col-sm-6">
               <input name="" type="text" maxlength="10" id="cust_no" class="in">
            </div>
          </div>
         <div class="row" style="margin-top: 10px;">
              <label  class="col-md-4">E-Way Bill No</label>
              <div class="col-sm-6">
               <input name="" type="text" maxlength="10" id="cust_no" class="in">
            </div>
          </div>
        <div class="row" style="margin-top: 10px;">
              <label  class="col-md-4">Remarks</label>
              <div class="col-sm-6">
               <input name="" type="text" maxlength="10" id="cust_no" class="in">
            </div>
          </div>
          <div class="row" style="margin-top: 10px;">
              <label  class="col-md-4">Challan No</label>
              <div class="col-sm-6">
               <input name="" type="text" maxlength="10" id="cust_no" class="in">
            </div>
          </div>
         </div> 
      </details>

      <!-- end Other Details -->
      <!-- Consignee Details -->
        <details id="hid3"  style="margin-left: 20px; margin-top: 10px;">
        <summary style="width:94%; border-radius: 7px; border: solid 1px #0d93e2; background-color: #f2f2f2; padding: 5px;">Consignee Details</summary>
       <div style="width: 94%; height: auto; padding-left: 4%; padding-bottom: 2%; padding-top: 2%;border-radius: 7px; box-shadow: 0px 2px 5px 0px #38b3b9;">
        <div class="row" style="margin-top: 10px;">
              <label  class="col-md-4">Name</label>
              <div class="col-sm-6">
               <input name="" type="text" maxlength="10" id="cust_no" class="in">
            </div>
          </div>
        <div class="row" style="margin-top: 10px;">
              <label  class="col-md-4">Contact No</label>
              <div class="col-sm-6">
               <input name="" type="text" maxlength="10" id="cust_no" class="in">
            </div>
          </div>
         <div class="row" style="margin-top: 10px;">
              <label  class="col-md-4">Place</label>
              <div class="col-sm-6">
               <input name="" type="text" maxlength="10" id="cust_no" class="in">
            </div>
          </div>
        <div class="row" style="margin-top: 10px;">
              <label  class="col-md-4">Address</label>
              <div class="col-sm-6">
               <input name="" type="text" maxlength="10" id="cust_no" class="in">
            </div>
          </div>
          <div class="row" style="margin-top: 10px;">
              <label  class="col-md-4">Email</label>
              <div class="col-sm-6">
               <input name="" type="text" maxlength="10" id="cust_no" class="in">
            </div>
          </div>

          </div>
      </details>
    <!-- end Consignee Details -->

    <!--Payment Details  -->

        <fieldset id="show" style="border-radius: 5px;margin-left: 20px;height: 65px;display: none;width: 87%;text-align: center;" >
          <legend style="    font-size: 13px;  font-weight: normal;  border-bottom: none;  width: 90%;  background-color: #f9f9f9; border: #ddd 1px solid; border-top: #ddd 2px solid; padding-left: 18px; padding-top: 3px; padding-bottom: 6px; margin-bottom: 0px;
    border-radius: 5px">Payment Details</legend>
                   <div class="row">
                    <div class="col-sm-12">
                          <input id="cash"  onclick="myFunction()"  type="checkbox" name="">&nbsp;<label >Cash</label>
                          <input id="card" onclick="card();" type="checkbox" name=""  >&nbsp;<label for="Card">Card</label>
                          <input id="cheque" onclick="cheque();"  type="checkbox" name="" >&nbsp;<label for="chkCheque">Cheque</label>
                          <input id="wallet" onclick="wallet();" type="checkbox" name="" >&nbsp;<label for="chkWallet">Wallet</label>
                    </div>
                  </div>
        </fieldset>
    <!-- end Payment Details -->
       


        <div class="row" id="box"  style="height: 240px; display: none; overflow-y: scroll; width: 100%; overflow-x: hidden;">
         <div class="row" id="cash1" style="display: none;">

     <!-- By Cash -->

          <fieldset  style="border-radius: 5px;padding: 5px; margin-left: 20px;height:auto;width: 87%;border:1px solid #0d93e2;" >
          <legend style="font-weight: 600; text-align: center; line-height: inherit; color: inherit; white-space: normal; background-color: #0d93e2; border-radius: 5px; padding-bottom: 2px; padding-top: 2px; width: 265px;  color: white; font-size: 14px;">By Cash</legend>
                   <div class="row">
                      <div class="col-sm-12">
                         <div class="row">
                          <label class="col-md-3">Amount</label>
                           <div class="col-md-8">
                            <input name="" id="in" type="text"  class="in" >
                          </div>
                        </div>
                      </div>
                  </div>
            </fieldset>

            <!-- end By Cash -->
          </div>
          <div class="row" id="card1" style="display: none;">
<br>
    <!-- By Card -->
         <fieldset  style="border-radius: 5px;padding: 5px; margin-left: 20px;height:auto;width: 87%;border:1px solid #0d93e2;" >
          <legend style="display: block;font-weight: 600; text-align: center; line-height: inherit; color: inherit; white-space: normal; background-color: #0d93e2; border-radius: 5px; padding-bottom: 2px; padding-top: 2px; width: 265px;  color: white; font-size: 14px;">By Card</legend>
                   <div class="row">
                      <div class="col-sm-12">
                         <div class="row">
                          <label class="col-md-3">Amount</label>
                           <div class="col-md-8">
                            <input name="" type="text" id="in"  class="in" >
                          </div>
                        </div>
                        <div class="row">
                          <label class="col-md-3">Card No.</label>
                           <div class="col-md-8">
                            <input name="" type="text" id="in" class="in" >
                          </div>
                        </div>
                        <div class="row">
                          <label class="col-md-3">Bank Name</label>
                           <div class="col-md-8">
                               <select name="" id="" class="in" id="in" maxlength="20" >

                                <option selected="selected" value="0:0">----select-----</option>
                                <option value="PNB">PNB</option>
                                <option value="KANOOR VISHAYA SOUTHERN BANK ">KANOOR VISHAYA SOUTHERN BANK </option>
                                <option value="sbi">sbi</option>
                                <option value="ksb">ksb</option>
                                <option value="https://dr     ">https://dr     </option>
                                <option value="df';fd'fddf;;'">df';fd'fddf;;'</option>
                                <option value="icci">icci</option><option value="hjk">hjk</option>
                              </select>
                          </div>
                        </div>
                      </div>
                  </div>
        </fieldset>
        <!-- end By Card -->
      </div>
      <div class="row" id="cheque1" style="display: none;">

<!-- By Cheque -->
<br>
         <fieldset  style="border-radius: 5px;padding: 5px;  margin-top: 5px; margin-left: 20px;height:auto;width: 87%;border:1px solid #0d93e2;" >
          <legend style="display: block;font-weight: 600; text-align: center; line-height: inherit; color: inherit; white-space: normal; background-color: #0d93e2; border-radius: 5px; padding-bottom: 2px; padding-top: 2px; width: 265px;  color: white; font-size: 14px;">By Cheque</legend>
                   <div class="row">
                      <div class="col-sm-12">
                         <div class="row">
                          <label class="col-md-3">Amount</label>
                           <div class="col-md-8">
                            <input name="" type="text" id="in"  class="in" >
                          </div>
                        </div>
                        <div class="row">
                          <label class="col-md-3">Cheque No</label>
                           <div class="col-md-8">
                            <input name="" type="text" id="in"  class="in" >
                          </div>
                        </div>
                        <div class="row">
                          <label class="col-md-3">Bank Name</label>
                           <div class="col-md-8">
                               <select name="" id="in"  class="in"  maxlength="20" >

                                <option selected="selected" value="0:0">----select-----</option>
                                <option value="PNB">PNB</option>
                                <option value="KANOOR VISHAYA SOUTHERN BANK ">KANOOR VISHAYA SOUTHERN BANK </option>
                                <option value="sbi">sbi</option>
                                <option value="ksb">ksb</option>
                                <option value="https://dr     ">https://dr     </option>
                                <option value="df';fd'fddf;;'">df';fd'fddf;;'</option>
                                <option value="icci">icci</option><option value="hjk">hjk</option>
                              </select>
                          </div>
                        </div>
                      </div>
                  </div>
        </fieldset>
     <!-- end By Cheque -->
<br>
      </div>
        <div class="row" id="wallet1" style="display: none;">

  <!-- Wallet -->

        <fieldset  style=" border-radius: 5px;margin-left: 20px; padding: 5px; height:auto;width: 87%;border:1px solid #0d93e2;" >
          <legend style="display: block;font-weight: 600; text-align: center; line-height: inherit; color: inherit; white-space: normal; background-color: #0d93e2; border-radius: 5px; padding-bottom: 2px; padding-top: 2px; width: 265px;  color: white; font-size: 14px;">Wallet</legend>
                   <div class="row">
                      <div class="col-sm-12">
                         <div class="row">
                          <label class="col-sm-3">Cashback</label>
                           <div class="col-sm-3">
                            <input name="" type="text" id="in"  disabled="" value="0"  class="in" >
                          </div>
                          <div class="col-sm-2">
                            <input name="" type="text" id="in"   class="in" >
                          </div>
                          <div class="col-sm-2">
                           <input name="" type="button"   class="btn btn-info in" style="font-size: 10px; width:66px;" value="Redeem" >
                          </div>
                        </div>
                        <div class="row">
                          <label class="col-sm-3">Sponsor</label>
                           <div class="col-sm-3">
                            <input name="" type="text" disabled="" value="" id="in"  class="in" >
                          </div>
                          <div class="col-sm-2">
                            <input name="" type="text" id="in"  class="in" >
                          </div>
                          <div class="col-sm-2">
                           <input name="" type="button" id="" class="btn btn-info in" style="font-size: 10px; width:66px;" value="Redeem" >
                          </div>
                        </div>
                      </div>
                  </div>
        </fieldset>

        <!-- end Wallet -->
      </div>
      
     </div>

  <!-- Balance Amount -->

     <div class="row" id="t2" style="display: none;">
                  <div class="col-sm-12">
                     <div class="row">
                      <div class="col-md-2"></div>
                         <label class="col-md-4">Balance Amount</label>
                         <div class="col-md-5">
                            <input name="" type="text" placeholder="NaN" id="in" class="in" >
                          </div>
                        </div>
                      </div>
      </div>

    <!-- end Balance Amount -->


<!-- Credit radio button -->
      <div class="row" id="t3" style="display: none;">
                  <div class="col-sm-12">
                     <div class="row">
                      <div class="col-md-1"></div>
                         <label class="col-md-6"></label>
                         <div class="col-md-5">
                           <input type="radio" name="" value="Credit" >&nbsp;<label for="">Credit</label>&nbsp;<input id="" type="radio" name="" value="Discount" >&nbsp;<label for="">Discount</label>
                          </div>
                        </div>
                      </div>
      </div>

<!-- end Credit -->
      
<!-- Button back save save_print -->
     
<div class="row" >
                  <div class="col-sm-12 ">
                    <div class="row">
                      <div class="col-sm-4"></div>
                      <input type="button"id="t4" class="btn  in" style="font-size: 11px;display: none; color: #fff; background-color: #0d93e2; font-weight: 600; width:60px;" value="Back">&nbsp;
                       <input type="button"id="t5"  value="Save" class="btn in" style="font-size: 11px;color: #fff;background-color: #0d93e2; display: none; font-weight: 600; width:60px;"autocomplete="off">&nbsp;
                        <input type="button" value="Save and Print" class="btn  in" style="color: #fff; background-color: #0d93e2; font-size: 11px;font-weight: 600;width: 108px">
                      </div>
                  </div>
      </div>
<!-- end button -->
    </div>
  </div>

 </div>

 <br>
  <!------------------------Footer  ---------------------------->
<?php include("footer.php"); ?>

<!-------------------------SCript File-------------------->
  </body>
</html>