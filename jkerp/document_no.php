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
 .in
      {
        border: 1px solid #bbbbbb;
        border-radius: 3px;
        padding-left: 2px;
        height: 25px;
        width: 100%;
      }
@media only screen and (max-width: 768px) {
  #in{
    width: 75%;
  }
  body
  {
    width: 100%;
  }
}
</style>
</head>
<body>
 <div style="background-color: #f5f5f5;  border: 1px solid #cae1ef ; background: linear-gradient(#fdfefe, #f5f9fc);border-radius: 0px;margin-top: 3px;width: 100%;">
    <h4 style="margin: 0;display: inline;color: #398ab9;font-size: 13px;font-weight: 600;">Document</h4></div>
      <form class="form-group" style="padding-top: 8px;">
    <div style="width: 95%; margin: auto;">
    <div class="row">
        <div class="col-md-4">
	       <div class="row">
	        <label class="col-md-4">Document Type<label style="color: red;">*</label></label>
                <div class="col-md-7">
                   <select name="" id="in" class="in" >
                            <option value="0">--- Select Type ---</option>
                            <option value="Invoice">Tax Invoice</option>
                            <option value="CashInvoice">Cash Invoice</option>
                            <option value="debitnote">Debit Note</option>
                            <option value="creditnote">Credit Note</option>
                            <option value="perfoma">Perfoma Invoice</option>
                            <option value="quotation">Quotation</option>
                            <option value="estimate">Estimate</option>
                            <option value="transfer">Order Transfer</option>
                            <option value="receive">Order Receive</option>

                   </select>
                </div> 
            </div> 
	</div>
	<div class="col-md-4" >
        <div class="row">
	      <label class="col-md-4"> Prefix<label style="color: red;">*</label></label>
          <div class="col-md-7">
          <input type="text" name="" required class="in" id="in" >
         </div>
        </div>
	</div>
	<div  class="col-md-4" >
         <div class="row">
	       <label class="col-md-4">Suffix<label style="color: red;">*</label></label>
            <div class="col-md-7">
           <input type="text" name="" required class="in" id="in">
           </div>
	    </div>
   </div>
</div>
	<br>
<div class="row">
    <div class="col-md-4" >
      <div class="row">
        <label class="col-md-4"> Document No<label style="color: red;">*</label></label>
        <div class="col-md-7">
           <input type="text" name="" required class="in" id="in">
           </div>
    </div>
    </div>
    <div class="col-md-4" >
      <div class="row">
        <label class="col-md-4">Series Start From<label style="color: red;">*</label></label>
        <div class="col-md-7">
           <input type="text" name="" required class="in" id="in">
           </div>
    </div>
    </div>
     <div class="col-md-4" >
      <div class="row">
        <label class="col-md-4">Separator<label style="color: red;">*</label></label>
        <div class="col-md-7">
           <input type="text" name="" required class="in" id="in">
           </div>
    </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
    <label >
      Status
    </label>
    <label class="radio-inline" >
      <input type="radio" name="optradio" checked >Active
    </label>
    <label class="radio-inline" >
      <input type="radio" name="optradio">Inactive
    </label>
  </div>

<div class="col-md-3">
    <button  type="button" style="background-color: #00b7ea;color: white;" >Submit</button>
    <button type="reset" value="Reset" style="background-color: #00b7ea;color: white;" >Reset</button>
    </div>

</div>	




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
    font-weight: 600;" >Document Grid Table</h4>
        </div>
        <div style="margin-bottom: 5px;"></div>
        <div class= "table-responsive">
      <table id="tblData" class="table table-bordered table-hover">
    <tr class="t">
    	<th>Type</th>
        <th>Prefix</th>
        <th>Suffix</th>
        <th>Start</th>
        <th>Last</th>
        <th>Separator</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Transport</td>
        <td>1111</td>
        <td>11</td>
        <td></td>
        <td></td>
        <td></td>
        <td style="width: 10px;"> <input type="image" name="" src="images/edit.png" style="border-width: 0px;height: 20px;width: 20px;">
        	<input type="image" name="" src="images/delete.png" style="border-width: 0px;height: 20px;width: 20px;">
</td>
    </tr>
    <tr>
        <td>1</td>
        <td>Transport</td>
        <td>1111</td>
        <td>11</td>
        <td></td>
        <td></td>
        <td></td>
        <td>
        	<input type="image" name="" src="images/edit.png" style="border-width: 0px;height: 20px;width: 20px;">
        	<input type="image" name="" src="images/delete.png" style="border-width: 0px;height: 20px;width: 20px;">
        </td>
    </tr>
</table>
</div>

  <br>
  <!------------------------Footer  ---------------------------->
<?php include("footer.php"); ?>

<!-------------------------SCript File-------------------->
</body>
</html>