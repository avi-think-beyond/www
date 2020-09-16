<?php include("header.php"); ?>
  <br><br><br>

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
        font-size: 12px; 
      }
      .in
      {
        border: 1px solid #bbbbbb;
        border-radius: 3px;
        padding-left: 2px;
        width: 100%;
        font-size: 12px;
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
    width: 90%;
  }
    #t{
    width: 90%;
  }
}
    </style>
   
<script type="text/javascript">
    
    
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


  </script>
  </head>
  <body>
   
    <input type="text" name="count" id="count" hidden="" value="1">
    <form name="" action="" method="POST">
   <div style="width: 96%; overflow: hidden; margin-left: auto; margin-right: auto;">
      <div class="row">
        <div class="col-md-2">
          <div class="row">
         
              <label class="col-md-4" style="">Supplier*</label>
              <div class="col-md-7">
              <input type="text" class="in" id="in" style="height: 25px;" autocomplete="off" name="">
          
              </div>
           
          </div>
        </div>
         <div class="col-md-2">
          <div class="row">
         
              <label class="col-md-6" style="">Supplier GSTIN</label>
              <div class="col-md-5">
              <input type="text" class="in" id="in" style="height: 25px;" autocomplete="off" name="">
          
              </div>
           
          </div>
        </div>
        
            
        <div class="col-md-4" >
          <div class="row">
           
              <label class="col-md-2 ">Invoice No</label>
               <div class="col-md-3" >
                   <input type="text" class="in" id="in"  name="">
               </div>
               <label  class="col-md-1">Date</label>
                <div class="col-md-5" >
                 <input type="Date" class="in" id="in" color: #0d93e2;name="">
                </div>
          </div>
        </div>
            
           
          
        <div class="col-md-4">
          <div class="row">
            
              <label class="col-md-2">Bill Amount</label>
              <div class="col-md-4" >
                 <input type="text" class="in" id="in" color: #0d93e2;name="">
              </div>
             <div class="col-md-6" id="grpChkBox">
            &nbsp;  <label>Tax Incl.</label>
              <input name="ti"  type="checkbox" >&nbsp;
              <label>IGST</label>
              <input name="igst"  type="checkbox">&nbsp;
              <label>Cess</label>
              <input name="cess"  type="checkbox">&nbsp;
            </div> 
          </div>
        </div>
           
          </div>
   
    
      <br>
      <div class="row">
        <div class="col-md-6">
          <div class="row">
          <label class="col-md-3 ">Payment Due Days</label>
               <div class="col-md-2" >
                   <input type="text" class="in" id="in"  name="">
               </div>
                
          &nbsp;    <label class="col-md-3 ">Payment Due Date</label>
              <div class="col-md-3" >
                   <input type="date" class="in" id="in"  name="">
               </div>
            </div> 
           </div>
           <div class="col-md-1">
          <select class="in" autofocus onclick="addRow()"  id="t" style="color: #0d93e2;" >

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
    <div class="col-xs-12 table-responsive">
      
        <table  class="table  table-bordered table-hover">
         
          <thead style="background-color: #0d93e2; ">
            <tr>
              <th scope="col"scope="col" style="width: 122px;">Bar Code</th>
              <th scope="col"scope="col" style="width: 124px;">Item Name/Code</th>
              <th scope="col"scope="col" style="width: 122px;">Item Desc</th>
              <th>Brand</th>
              <th scope="col"scope="col" style="width: 33px;">Model</th>
              <th scope="col"scope="col" style="width: 45px;">HSN Code</th>
              <th scope="col"scope="col" style="width: 45px;">Unit</th>
              <th scope="col"scope="col" style="width: 50px;">Rate</th>
              <th>Quantity</th>
              <th>Alt Unit</th>
              <th scope="col"scope="col" style="width: 53px;">Alt Qty</th>
              <th scope="col"scope="col" style="width: 45px;">Amount</th>
              <th scope="col"scope="col" style="width: 48px;">Dis %</th>
              <th>Dis Amt</th>
              <th scope="col"scope="col" style="width: 50px;">GST %</th>
              <th scope="col"scope="col" style="width: 53px;">IGST </th>
              <th scope="col"scope="col" style="width: 53px;">Cess Rate</th>
              <th scope="col"scope="col" style="width: 52px;">Cess Amt</th>
              <th scope="col"scope="col" style="width: 53px;">Gross Amt</th>
              <th>S Price</th>
              <th scope="col"scope="col" style="width: 53px;">WS Price</th>
              <th scope="col"scope="col" style="width: 50px;">S Dis %</th>
              <th scope="col"scope="col" style="width: 32px;">S Tax Incl.</th>
              <th scope="col"scope="col" style="width: 52px;">S Dis Amt</th>
              <th scope="col"scope="col" style="width: 52px;">MRP</th>
              <th scope="col" style="width: 153px;">Exp Date</th>
              <th scope="col" style="width: 53px;"></th>
            </tr>
          </thead>
          <tbody id="dataTable">
            <tr>
              <td><input type="text" style="width:120px; height: 25" class="in" name=""></td>
              <td><input type="text" style="width:120px; height: 25" class="in" name=""></td>
              <td><input type="text" style="width:120px; height: 25" class="in" name=""></td>
              <td><input type="text" style="width:41px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width:41px; height: 25px;" class="in"  name=""></td>
              <td><input type="text" style="width:41px; height: 25px;" class="in" readonly="" name=""></td>
              <td><input type="text" style="width: 41px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 55px; height: 25px;" class="in" readonly="" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td ><span style=" display:inline-block;width:31px;text-align: center;"><input type="checkbox"  class="in" name=""></span>
              </td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" value=" " style="width: 150px; height: 25px; color:#0d93e2 " class="in" name=""></td>
              <td><i style="font-size: 26px; margin-left: 10px; color: #f38515; padding-right: 10px; cursor: pointer;" class="fa fa-trash-o" aria-hidden="true"></i></td>
            </tr>
            
          </tbody>
          <tfoot>
            <tr>
              <td><input type="text" style="width:120px; height: 25" class="in" name=""></td>
              <td><input type="text" style="width:120px; height: 25" class="in" name=""></td>
              <td><input type="text" style="width:120px; height: 25" class="in" name=""></td>
              <td><input type="text" style="width:41px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width:41px; height: 25px;" class="in"  name=""></td>
              <td><input type="text" style="width:41px; height: 25px;" class="in" readonly="" name=""></td>
              <td><input type="text" style="width: 41px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 55px; height: 25px;" class="in" readonly="" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td style="width: 31px; height: 25px;"></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" style="width: 49px; height: 25px;" class="in" name=""></td>
              <td><input type="text" value=" " style="width: 150px; height: 25px; color:#0d93e2 " class="in" name=""></td>
              
            </tr>
          </tfoot>
        </table>
     
    </div>
  </div>
<br>
  <div class="row">
    <div class="col-md-1">
      <input type="button" id="" value="Reset" class="btn" style="background-color: #0d93e2; color: #fff; height: 35px;" autocomplete="off">
    </div>

     <div class="col-md-2">
          <div class="row">
         
              <label class="col-md-3" style="">Remarks</label>
              <div class="col-md-8">
              <input type="text" class="in" id="in"  autocomplete="off" name="">
          
              </div>
           
          </div>
      </div>


     <div class="col-md-4">
          <div class="row">
         
              <label class="col-md-3" style="">Round Off Value</label>
              <div class="col-md-5">
              <input type="text" class="in" id="in"  autocomplete="off" name="">
          
              </div>
           
          </div>
      </div>

  
    <div class="col-md-4">
    </div>

    <div class="col-md-1">
      <input type="button" id="" value="Save" class="btn btn-success" style="height: 35px;" autocomplete="off">
    </div>
  </div>

</div>
</form>
<br>
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