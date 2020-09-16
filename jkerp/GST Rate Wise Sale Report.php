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
  width: 50%;
  margin-left: 2px;
  cursor: pointer;
  border-radius: 3px;
}

    </style>
    
  </head>
  <body>
     <div style="width: 100%; margin-bottom: 15px; padding: 2px; padding-left: 20px; border: solid 1px #dcd5d5;box-shadow: inset 1px 1px 12px 2px #d2cdcd;">
      <h2 style="    margin: 0;
    display: inline;
    color: #398ab9;
    font-size: 13px;
    font-weight: 600;">GST Rate Wise Sale Report</h2>
    </div>
  <div style="width: 96%; overflow: hidden; margin-left: auto; margin-right: auto;">
   

    <div class="row">
      <div class="col-md-4">
        <div class="row">
          <label class="col-md-2">From Date</label>
          <div class="col-md-4">
            <input type="date" class="in" name="">
          </div>
           <label class="col-md-2">To Date</label>
          <div class="col-md-4">
            <input type="date" class="in" name="">
          </div>


        </div>
      </div>
       <div class="col-md-4">
       </div>
       <div class="col-md-4">
       
        <input type="button"  class="btn1" value="Export Data In Excel" name="">
       </div>
    </div>

<br>
<div class="col-md-12  table-responsive">

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