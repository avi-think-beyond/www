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
      }
     
    </script>
  </head>
  <body>
    <div style="width: 100%; margin-bottom: 15px; padding: 2px; padding-left: 20px; border: solid 1px #dcd5d5;box-shadow: inset 1px 1px 12px 2px #d2cdcd;">
      <h2 style="    margin: 0;
    display: inline;
    color: #398ab9;
    font-size: 13px;
    font-weight: 600;">GSTR1 Report</h2>
    </div>

<form action="" method="">

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
        <input onclick="b2b();" type="button" class="btn1" value="B2B Report" name="">
        <input type="button" style="margin-left: 5px;" onclick="exportTableToExcel('b2b')" class="btn1" value="Export Data In Excel" name="">
       </div>
    </div>

<br>
<div class="col-md-12  table-responsive">
<table id="b2b" style="display: none; font-size: 12px;" width="94%" cellspecing="0" class="table table-bordered no-more-tables" cellpadding="0">
  <thead style="background-color: #0d93e2; font-size: 12px; color: #ffffff;">
    <tr>
    <th><div style="width: 130px;">Summary Of Supplies From Registered Suppliers B2B(3)</div></th>
    </tr>
    <tr>
    <th> No. of Suppliers</th>
    <th>No. of Invoices</th>
    <th> Total Inv Value</th>
    <th>Total Taxable Value</th>
    <th>Total Integrated Tax Paid</th>
    <th>Total Central Tax Paid</th>
    <th>Total TState/UT Tax Paid</th>
    <th>Total Cess</th>
    <th> Total Availed ITC Integrated Tax </th>
    <th>Total Availed ITC Central Tax</th>
    <th>Total Availed ITC State/UT Tax </th>
    <th>Total Availed ITC Cess</th>
    <th></th>
    <th></th>
  </tr>
</thead>
<tbody>
  <tr>
    <td width="50" style="text-align: right;"><label value="0">0</label></td>
    <td width="120" style="text-align: right;"><label value="0">0</label></td>
    <td width="80" style="text-align: right;"><label value="0">0.00</label></td>
    <td width="110" style="text-align: right;"><label value="0">0.00</label></td>
    <td width="80" style="text-align: right;"><label value="0" >0</label></td>
    <td width="80" style="text-align: right;"><label value="0" >0.00</label></td>
    <td width="80" style="text-align: right;"><label value="0" >0.00</label></td>
    <td width="80" style="text-align: right;"><label value="0">0.00</label></td>
    <td width="50"><label></label></td>
    <td width="50"><label></label></td>
    <td width="150"><label></label></td>
    <td width="150"><label></label></td>
    <td width="150"><label></label></td>
    <td width="150"><label></label></td>
  </tr>
</tbody>
<thead style="background-color: #0d93e2; font-size: 12px; color: #ffffff;">
    <tr>
      <th>GSTIN of Supplier</th>
      <th> Supplier Name</th>
      <th> Invoice Number</th>
      <th> Invoice date</th>
      <th>Invoice Value</th>
      <th> Place Of Supply</th>
      <th>Reverse Charge</th>
      <th>Invoice Type<</th>
      <th>Rate</th>
      <th>Taxable Value</th>
      <th> Integrated Tax</th>
      <th>Central Tax</th>
      <th>State/UT Tax</th>
      <th> Cess</th>
    </tr>
    </thead>
</table>

</div>
</div>
</form>
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