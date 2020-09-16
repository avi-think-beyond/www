<?php include("header.php"); ?>
  <br><br>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/bootstrap.min1.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<style type="text/css">
    table, th, td, {
  border: 1px solid blue;
  padding: 8px;

}
.in
      {
        border: 1px solid #bbbbbb;
        border-radius: 3px;
        padding-left: 2px;
        height: 25px;
        width: 100%;
      }
.t
{
	background-color: #00b7ea;color: white;
	pointer-events: none;


}
@media only screen and (max-width: 768px) {
  #in{
    width: 100%;
  }
}
</style>
</head>
<body>
 <div style="background-color: #f5f5f5;
    padding: 5px 10px;
    border: 1px solid #cae1ef;
    background: linear-gradient(#fdfefe, #f5f9fc);
    border-radius: 0px;
    margin-top: 3px;
    display: block;
    ">
                <h4 style="margin: 0;
    display: inline;
    color: #398ab9;
    font-size: 13px;
    font-weight: 600;">Bank Name Master</h4>
        </div>
        <br>
<form method="" action="">
<div style="width: 90%; margin-left: auto; margin-right: auto;">
<div class="col-md-12">
     <div class="col-md-3">
	
	   <label><input type="checkbox" name="">Automatic Code Generation</label>

	 </div>
    <div class="col-md-3">
     <div class="row">
      <label class="col-md-2">Code</label>
      <div class="col-md-8">
        <input type="" name="" class="in" id="in">
      </div>
     </div>
    </div>
    <div class="col-md-3">
        <div class="row">
           <label class="col-md-2">Name</label>
           <div class="col-md-8">
           <input type="" name="" class="in"  id="in">
           </div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="row">
         <button  type="button" style="background-color: #00b7ea;color: white;" id="in">Submit</button>
         <button type="reset" value="Reset" style="background-color: #00b7ea;color: white;" id="in">Reset</button>
     </div>
    </div>
    </div>
</div>
    <div style="background-color: #f5f5f5;
    padding: 5px 10px;
    border: 1px solid #cae1ef !important;
    background: linear-gradient(#fdfefe, #f5f9fc);
    border-radius: 0px;
    margin-top: 3px;
    display: block;
    ">
                <h4 style="margin: 0;
    display: inline;
    color: #398ab9;
    font-size: 13px;
    font-weight: 600;" >Bank Name Master List</h4>
        </div>
    <div style="width: 90%; margin-left: auto; margin-right: auto;">
        <div class="col-md-6">

            <button onclick="exportTableToExcel('tblData')" style="background-color: #00b7ea; float: right; margin-top: 5px;">Export</button>
            <br><br>
        
        <div class= " table-responsive">
      <table id="tblData" class="table table-bordered table-hover">
    <tr class="t">
    	<th>Code</th>
        <th>Name</th>
        <th>Action</th>
    </tr>
    <tr>
        <td><input type="text" name=""></td>
        <td><input type="text" name="" style="width: 100%;"></td>
        <td><input type="text" name="" style="width: 100%;"></td>
    </tr>
    <tr>
        <td style="width: 20%;">1</td>
        <td>11</td>
        <td style="width: 10px;"> <input type="image" name="" src="images/edit.png" style="border-width: 0px;height: 20px;width: 20px;">
        	<input type="image" name="" src="images/delete.png" style="border-width: 0px;height: 20px;width: 20px;">
</td>
    </tr>
    <tr>
        <td>1</td>
        <td>11</td>
        <td>
        	<input type="image" name="" src="images/edit.png" style="border-width: 0px;height: 20px;width: 20px;">
        	<input type="image" name="" src="images/delete.png" style="border-width: 0px;height: 20px;width: 20px;">
        </td>
    </tr>
</table>
</div>
</div>
</div>
</form>
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

  <br>
  <!------------------------Footer  ---------------------------->
<?php include("footer.php"); ?>

<!-------------------------SCript File-------------------->
</body>
</html>