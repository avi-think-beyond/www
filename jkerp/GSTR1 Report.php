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
        font-size: 12px; 
      }
      .in
      {
        border: 1px solid #bbbbbb;
        border-radius: 3px;
        padding-left: 2px;
        width: 90%;
        height: 25px;
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
.btn1
{
  height: 25px;
  color: #ffffff;
 background:linear-gradient(#1289A7, #b98daf) !important;
  font-size: 12px;
  border: none;
  cursor: pointer;
  width: 20%;
  margin-left: 2px;
  cursor: pointer;
  border-radius: 3px;
}

    </style>
    <script type="text/javascript">
      function b2b()
       {
          document.getElementById("b2b").style.display = "block";
          document.getElementById("b2b1").style.display = "block";
          document.getElementById("b2cl").style.display = "none";
      }
      function b2cl()
       {
          document.getElementById("b2b").style.display = "none";
            document.getElementById("b2b1").style.display = "none";
          document.getElementById("b2cl").style.display = "block";
      }
    </script>
  </head>
  <body>
     <div style="width: 100%; margin-bottom: 15px; padding: 2px; padding-left: 20px; border: solid 1px #fafeff;box-shadow: inset 1px 1px 12px 2px #60a3bc;">
      <h2 style="    margin: 0;
    display: inline;
    color: #398ab9;
    font-size: 13px;
    font-weight: 600;">GSTR1 Report</h2>
    </div>
  <div style="width: 96%; overflow: hidden; margin-left: auto; margin-right: auto;">
   

    <div class="row">
      <div class="col-md-4">
        <div class="row">
          <label class="col-md-1">From</label>
          <div class="col-md-5">
            <input type="date" class="in" name="">
          </div>
           <label class="col-md-1">To</label>
          <div class="col-md-5">
            <input type="date" class="in" name="">
          </div>


        </div>
      </div>
     
       <div class="col-md-6">
        <input onclick="b2b();" type="button" class="btn1" value="B2B" name="">
        <input onclick="b2cl();" type="button" class="btn1" value="B2Cl" name="">
        <input type="button" class="btn1" value="B2CS" name="">
        <input type="button" onclick="exportTableToExcel('b2b')"  class="btn1" value="Export Data In Excel" name="">
       </div>
    </div>

<br>
<div class="col-md-12  table-responsive">
<table  id="b2b" style="display: none;" width="94%" cellspecing="0" class="table table-bordered no-more-tables" cellpadding="0">
  <thead style=" background: #1289a7;
">
    <tr >
      <th>
        <div style="width: 130px;">Summary For B2B(4)</div>
      </th>
    </tr>
    <tr>
      <th>
        <div style="width: 100px;">No. of Recipients</div>
      </th>
      <th>
        <div style="width: 95px;"> No. of Invoices</div>
      </th>
      <th>
        <div style="width: 90px;">  </div>
      </th>
      <th>
        <div style="width: 110px; text-align: right;"> Total Invoice Value</div>
      </th>
      <th>
        <div style="width: 120px;"> </div>
      </th>
      <th> 
        <div style="width: 90px;"></div>
      </th>
      <th> <div style="width: 90px;">
        
      </div>
    </th>
    <th> <div style="width: 115px;">
      
    </div>
  </th>
  <th>
    <div style="width: 90px;"> </div>
  </th>
  <th>
    <div style="width: 120px; text-align: right;"> Total Taxable Value</div>
  </th>
  <th>
    <div style="width: 80px;  text-align:right"> Total Cess</div>
  </th>
</tr>
</thead>
<tbody><tr>
  <td >
    <label value="null">null</label>
  </td><td >
    <label value="null" >null</label>
  </td>
  <td width="120"><label></label>
  </td>
  <td style="text-align:center;"><label value="0.00">0.00</label>
  </td>
  <td><label></label></td>
  <td ><label></label></td>
  <td><label></label></td>
  <td ><label></label></td>
  <td ><label></label></td>
  <td style="text-align:center;"><label value="0.00">0.00</label></td>
  <td style="text-align:center;"><label value="0" >0.00</label></td>
</tr>
</tbody>
</table>
<table id="b2b1" style="display: none;"  width="94%" cellspecing="0" class="table table-bordered" cellpadding="0" >
<thead style="background-color:  #1289a7; font-size: 12px; color: #ffffff;" >
  <tr>
    <th><div style="width: 120px;">GSTIN/UIN of Recipient</div></th>
    <th><div style="width: 100px;">Receiver Name</div></th>
    <th><div style="width: 80px;"> Invoice Number</div></th>
    <th><div style="width: 70px;"> Invoice date</div></th>
    <th><div style="text-align:center;"> Invoice Value</div></th>
    <th><div style="width: 95px;"> Place Of Supply</div></th>
    <th> <div style="width: 48px;">Reverse Charge</div></th>
    <th> <div style="width: 80px;">Invoice Type</div></th>
    <th> <div style="width: 90px;">E-Commerce GSTIN</div></th>
    <th><div style="text-align:center;"> Taxable Value</div></th>
    <th><div style="text-align:center;"> Rate</div></th>
    <th><div style="text-align:center;width: 59px;"> CGST Amt</div></th>
    <th><div style="text-align:center;width: 80px;"> SGST Amt</div></th>
    <th><div style="text-align:center;width: 80px;"> IGST Amt</div></th>
    <th><div style="text-align:center;width: 80px;"> Cess Amount</div></th>
  </tr>
</thead>
</table>
<table id="b2cl" style="display: none;" width="94%" cellspecing="0" class="table table-bordered no-more-tables" cellpadding="0">
  <thead style="background-color: #1289a7; font-size: 12px; color: #ffffff;">
    <tr>
      <th>
        <div style="width: 90px;"> Invoice Number</div>
      </th>
      <th>
        <div style="width: 90px;"> Invoice date</div>
      </th>
      <th>
        <div style="text-align:right"> Invoice Value</div></th>
        <th><div style="width: 131px; text-align:center;"> Place Of Supply</div></th>
        <th><div style="text-align:center;"> Taxable Value</div></th>
        <th><div style="text-align:center;"> Rate</div></th>
        <th><div style="text-align:center;"> CGST Amt</div></th>
        <th><div style="text-align:center;"> SGST Amt</div></th>
        <th><div style="text-align:center;"> IGST Amt</div></th>
        <th><div style="text-align:center;"> Cess Amount</div></th>
        <th> <div style="width: 79px; text-align:center;">E-Commerce GSTIN</div></th>

      </tr>
    </thead>
  </table>
</div>
</div>
 <!------------------------Footer  ---------------------------->
<?php include("footer.php"); ?>

<!-------------------------SCript File-------------------->
  </body>
  <script type="text/javascript">
function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
</script>

  </html>