<?php include("header.php"); ?>
  <br><br>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
      




      div
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
        width: 100%;
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
    <title>MegaMenu Design</title>
    <link href="css/bootstrap.min1.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
  </head>
  <body style="background-color: #f2f2f2;">
  <div style="width: 100%; margin-bottom: 15px; padding: 2px; padding-left: 20px; border: solid 1px #dcd5d5;box-shadow: inset 1px 1px 12px 2px #d2cdcd;">
      Model_master
    </div>
   <div style="width: 98%; overflow: hidden; margin-left: auto; margin-right: auto;">
    
    <hr>
      
       <div class="row" style="margin-top: 5px;">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-8" style="">
              <div class="row">
              <div class="col-md-9"><input  type="checkbox" name="" value=""><label for="">&nbsp;Automatic Code Generation</label>&nbsp;&nbsp;<input  type="radio" name="" value=""><label for="">&nbsp;Is Default</label></div>
              </div>
             
            </div>
           
          </div>
        </div>
      </div>
       <div class="row" style="margin-top: 5px;">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6">
              <div class="row">
              <div class="col-md-3"> Code *&nbsp;</div>
              <div class="col-md-7"> <input type="text" class="in" style="height: 25px; width:100%; " autocomplete="off" name=""></div>
              </div>
             
            </div>
            <div class="col-md-6">
              <div class="row">
              <div class="col-md-3">Name *&nbsp;</div>
              <div class="col-md-7"> <input type="text" class="in" style="height: 25px; width:100%; " autocomplete="off" name=""></div>
              </div>
             
            </div> 
          </div>
        </div>
        <div class="col-md-5">
             <div class="row">
              <div class="col-md-2">  <input type="button" id="" value="Submit" class="btn btn-success" style="height: 30px; font-size: 12px;" autocomplete="off"></div>
              <div class="col-md-2"> <input type="button" id="" value="Reset" class="btn" style="background-color: #0d93e2; color: #fff; height: 30px; font-size: 12;" autocomplete="off"></div>
              </div>
            </div> 
        
     </div>
  <hr>
  
<div style="width: 100%; margin-bottom: 15px; padding: 2px; padding-left: 20px; border: solid 1px #dcd5d5;box-shadow: inset 1px 1px 12px 2px #d2cdcd;">
 Model_master List
</div>
  <div ><button onclick="exportTableToExcel('tblData')"  class="btn" style="background-color: #0d93e2; margin-bottom: 10px; float: right; color: #fff; height: 30px; font-size: 12;">Export To Excel</button></div>
    <div class="table-responsive">
      
         
    <table id="tblData" class=" table-bordered table-hover" style="margin-left: auto;margin-right: auto; width: 100%;">
    <tr style="background-color: #0d93e2;  font-size: 12px; color: #ffffff; height: 30px; ">
      <th>Code</th>
        <th>Name</th>
        <th>Auto Generated Code</th>
        <th>Date</th>
        
        <th>Action</th>
    </tr>
    <tr>
        <td><input class="in" type="text" name=""></td>
        <td><input class="in" type="text" name=""></td>
        <td><input class="in" type="text" name=""></td>
        <td><input class="in" type="text" name=""></td>
       
        <td><input class="in" type="text" name=""></td>
        
    </tr>
    <tr>
        <td>1</td>
        <td>Transport</td>
        <td>1111</td>
        <td>11</td>
       
        <td> <input type="image" name="" src="images/edit.png" style="border-width: 0px;height: 20px;width: 20px;">
          <input type="image" name="" src="images/delete.png" style="border-width: 0px;height: 20px;width: 20px;">

</td>
    </tr>
    <tr>
        <td>1</td>
        <td>Transport</td>
        <td>1111</td>
        <td>11</td>
       
        <td>
          <input type="image" name="" src="images/edit.png" style="border-width: 0px;height: 20px;width: 20px;">
          <input type="image" name="" src="images/delete.png" style="border-width: 0px;height: 20px;width: 20px;">
        </td>
    </tr>
</table>
    </div>
  
</div>
 <br>
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