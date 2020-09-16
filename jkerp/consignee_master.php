<?php include("header.php"); ?>
  <br><br>
 
<style type="text/css">
    table, th, td, {
  border: 1px solid blue;
  padding: 8px;

}
.t
{
	background-color: #00b7ea;color: white;
	pointer-events: none;


}
@media only screen and (max-width: 768px) {
  #in{
    width: 94%;
  }
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
        height: 25px;
        font-size: 12px;
      }
</style>
</head>
<body style="margin: 5px;">
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
    font-weight: 600;">Consignee Master</h4>
        </div>
<form class="form-group" style="padding-top: 8px;">
<div class="row" style="margin-right: 0px;">
<div class="col-md-3">
	
	Name<label style="color: red;">*</label>&nbsp;&nbsp;&nbsp;
    <input type="text" name="" required id="in" class="in" >
	</div>
	<div class="col-md-3" >
	Contact No.<label style="color: red;"></label>&nbsp;<input type="" id="in" class="in" name="" required  >
	</div>
	<div  class="col-md-3" >
	Email Id&nbsp;<label style="color: red;"></label><input type="" name="" required id="in" class="in" >
	</div>
	
	Place <label style="color: red;">*</label>&nbsp;&nbsp;<input type="" name="" required id="in" class="in" >
	<br>
	<br>
	<div class="col-md-3">
	Address&nbsp;<input type="" name="" id="in" class="in">
	</div>
	<div class="col-md-3">
	GSTIN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="" name="" id="in" class="in">
	</div>
</div>
<br>
<div class="col-md-3" >
    <button  type="button" style="background-color: #00b7ea;color: white;" id="in">Submit</button>
    <button type="reset" value="Reset" style="background-color: #00b7ea;color: white;" id="in">Reset</button>
</div>


<br><br>
</form>
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
    font-weight: 600;" >Consignee Master List</h4>
        </div>
        <div style="margin-bottom: 5px;">
               <button onclick="exportTableToExcel('tblData')" style="background-color: #00b7ea; float: right; margin: 5px;">Export</button>
            <br><br>
        </div>
        <div class= "table-responsive">
      <table id="tblData" class="table table-bordered table-hover">
    <tr class="t">
    	<th>Name</th>
        <th>Contact Number</th>
        <th>Place</th>
        <th>GSTIN No.</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    <tr>
        <td><input type="text" name="" style="width: 100%"></td>
        <td><input type="text" name="" style="width: 100%"></td>
        <td><input type="text" name="" style="width: 100%"></td>
        <td><input type="text" name="" style="width: 100%"></td>
        <td><input type="text" name="" style="width: 100%"></td>
        <td style="width: 7%"><input type="text" name="" style="width: 100%"></td>
    </tr>
    <tr>
        <td>1</td>
        <td>Transport</td>
        <td></td>
        <td></td>
        <td></td>
        <td><input type="image" name="" src="images/edit.png" style="border-width: 0px;height: 20px;width: 20px;">
        	<input type="image" name="" src="images/delete.png" style="border-width: 0px;height: 20px;width: 20px;"></td>
    </tr>
    <tr>
        <td>1</td>
        <td>Transport</td>
        <td></td>
        <td></td>
        <td></td>
        <td><input type="image" name="" src="images/edit.png" style="border-width: 0px;height: 20px;width: 20px;">
        	<input type="image" name="" src="images/delete.png" style="border-width: 0px;height: 20px;width: 20px;">
        </td>
    </tr>
</table>
</div>
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
  <!------------------------Footer  ---------------------------->
<?php include("footer.php"); ?>

<!-------------------------SCript File-------------------->
</body>
</html>