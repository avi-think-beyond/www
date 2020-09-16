<?php include("header.php"); ?>
  <br><br>
    
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

@media only screen and (max-width: 768px) {
  #in{
    width: 100%;
  }
}
   
    </style>
  

  </head>
  <body style="background-color: #f2f2f2;">
    
   <div style="width: 98%; overflow: hidden; margin-left: auto; margin-right: auto;">
    <hr>
      <div class="row">
        <div class="col-md-5">
          <div class="row">
            <div class="col-md-6">
              <label style="width: 118px;">Supplier*&nbsp;</label>
              <input type="text" class="in" id="in" style="height: 25px; width: 133px;"  autocomplete="off" name="">
            </div>
            <div class="col-md-5">
              <label style="width: 118px;">Supplier GSTIN &nbsp;</label>
              <input name="" class="in" id="in" style="width: 101px; height: 25px; " type="text" id="" readonly="" >
            </div> 
          </div>
        </div>
        <div class="col-md-5">
          <div class="row">
            <div class="col-md-6" style="">
              <label style="width: 118px;">Debit Note No.*&nbsp;</label>
              <input type="text" disabled="" value="01-19-28" class="in" id="in" style="width: 99px; height: 25px;" name="">
            </div>
            <div class="col-md-6">
              <label style="width: 118px;">Date</label>
              <input class="in" id="in" style="width: 98px; color: #0d93e2; height: 25px;" name="">
            </div> 
          </div>
        </div>
        <div class="col-md-2">
          <div class="row">
            
            <div class="col-md-12" id="grpChkBox">
              <label>Tax Incl.</label>
              <input name="ti"  type="checkbox" >&nbsp;
              <label>IGST</label>
              <input name="igst"  type="checkbox">&nbsp;
            </div> 
          </div>
        </div>
      </div>
     
      <div class="row">
        <div class="col-md-5">
          <div class="row">
            <div class="col-md-6">
              <label >Payment Due Days</label>
              <input class="in" type="text" style="width: 133px; height: 25px;" name="">
            </div>
            <div class="col-md-6">
              <label>Payment Due Date</label>
              <input class="in" type="text" style="width: 104px; height:25px;" name="">&nbsp;
            </div>
        </div>
      </div>
        <div class="col-md-5">
        <div class="row">
          <div class="col-md-6">
              <label style="width: 118px;">Bill Amount*&nbsp;</label>
              <input class="in" type="text"autocomplete="off" style="width: 100px; height: 25px;" name="">
            </div> 
          <div class="col-md-6">
          <label style="width: 118px;"> Invoice Reference</label>
              <input class="in" type="text" style="width: 100px; height: 25px;" name="">&nbsp;
         </div>
       </div>
        </div>
        <div class="col-md-2">
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
    <div class="col-xs-12 table-responsive">
      
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
  </div>
<hr>
  <div class="row">
    <div class="col-md-4">
      <input type="button" id="" value="Reset" class="btn" style="background-color: #0d93e2; color: #fff; height: 35px;" autocomplete="off">
      <label>Remarks</label>
      <label><input class="in" style="width:200px;" type="text" name=""></label>
    </div>
    <div class="col-md-3">
      <label>Round Off Value</label>
      <label><input class="in" style="width:170px;" type="text" name=""></label>
    </div>
    <div class="col-md-4">
    </div>
    <div class="col-md-1">
      <input type="button" id="" value="Save" class="btn btn-success" style="height: 35px;" autocomplete="off">
    </div>
  </div>
<hr>
</div>
<!------------------------Footer  ---------------------------->
<?php include("footer.php"); ?>

<!-------------------------SCript File-------------------->       
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


  </body>
</html>