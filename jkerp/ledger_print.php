<?php include("header.php"); ?>
  <br><br>

 
<style type="text/css">
  .t2
  {
    margin-top: 5px;
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
        width: 100%;
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

@media only screen and (max-width: 768px) {
  #in{
    width: 100%;
  }
}
    </style>
</head>
<body>
  <div style="width: 100%; margin-top: 5px; margin-bottom: 15px; padding: 2px; padding-left: 20px; border: solid 1px #dcd5d5;box-shadow: inset 1px 1px 12px 2px #d2cdcd;">
      <h2 style="margin: 0;
    display: inline;
    color: #398ab9;
    font-size: 13px;
    font-weight: 600;">LEDGER REPORTING »»</h2>
    </div>
<div style=" width: 50%; margin-right: auto; margin-left: auto;">
 
<div class="container-fluid" style="padding-left: 0px;">
  <div class="container-fluid" style="padding-left: 0px;">
    <h6>To better performance enter the first alphabet of accounts range</h6>
    <div class="row">
        <div class="col-md-8">
          <div class="row">
           
            <div class="col-md-6">
              <label style="">
             From <input type="text" class="in" id="in" name="">To Date<input type="text" class="in" id="in"  name="">
              </label>
            </div>
            
          </div>
        </div>
      </div>
      
       <div class="row">
        <div class="col-md-8">
          <div class="row">
           
            <div class="col-md-6">
              <label style="">Select Head
              <select name="" class="in" id="in" style="width: 88%; >
  <option value="Account Head" style="background-color:#497191 ;color: white ">Account Head</option>
  <option value="1">Source Holder's Fund</option>
  <option value="2">Share Capital</option>
  <option value="3">Reserve and Surplus</option>
  <option value="49">Reserve and Surplus</option>
  <option value="50">Profit and Loss account</option>
  <option value="5">Loan Fund</option>
  <option value="6">Secured Loan</option>
  <option value="7">Unsecured Loan</option>
  <option value="9">Fixed assets</option>
  <option value="10">Gross Block</option>
  <option value="11">Depreciation</option>
  <option value="59">Capital work-in-progress</option>
  <option value="13">Current Assets, Loan and Advances</option>
  <option value="14">Inventories</option>
  <option value="15">Sundry Debtors</option>
  <option value="16">Cash and bank Balance</option>
  <option value="17">Cash in hand</option>
  <option value="18">Balance with bank</option>
  <option value="20">Other Current Assets</option>
  <option value="21">Loan and Advances</option>
  <option value="22">Current liabilities and provisions</option>
  <option value="23">Current Liabilities</option>
  <option value="47">Sundry Creditors</option>
  <option value="48">Other Current Liabilities</option>
  <option value="24">Provision</option>
  <option value="42">PROVISION FOR INCOME TAX PAYABLE</option>
  <option value="43">PROVISION FOR DEFFERED TAX PAYABLE</option>
  <option value="44">PROVISION FOR FB TAX PAYABLE</option>
  <option value="45">PROPOSED DIVIDEND PAYABLE</option>
  <option value="46">Other Provision</option>
  <option value="25">Miscellaneous expenditure to the extent not written off or adjusted</option>
  <option value="26">HeadOffice/Branch Account</option>
  <option value="27">Sale</option>
  <option value="28">Other income </option>
  <option value="29">Purchase</option>
  <option value="30">Direct Expense</option>
  <option value="31">Administrative &amp; Selling Expense</option>
  <option value="32">Finance Expense</option>
  <option value="33">Depreciation</option>
  <option value="34">Profit and Loss Account</option>
  <option value="35">PROVISION FOR INCOME TAX</option>
  <option value="36">PROVISION FOR DEFFERED TAX</option>
  <option value="37">PROVISION FOR FB TAX</option>
  <option value="38">PROPOSED DIVIDEND</option>
  <option value="39">INTERIM DIVIDEND</option>
  <option value="40">INCOME TAX / DIVIDEND TAX / FBT TAX ADJUSTMENT</option>
  <option value="41">Profit and Loss Ac</option>
  <option value="51">Investment</option>
  <option value="52">Long-term investment</option>
  <option value="53">Goverment and other sercurities-Quoted</option>
  <option value="54">Goverment and other sercurities-Unquoted</option>
  <option value="55">Short-term investments</option>
  <option value="56">Equity Shares,including share application money</option>
  <option value="57">Preference shares </option>
  <option value="58">Debenture</option>

</select>
              </label>
            </div>
             </div>
        <div class="col-md-12">
          <div class="row">
            <!-- <div class="col-md-6">
              <label style="">/label>
            </div> -->
            <div class="col-md-6">
              <label style="">Select Option
              <input type="radio" name="">All Accounts <input type="radio" name="">Particulars Accounts
              </label>
            </div>
          </div>
          <div class="col-md-12">
          <div class="row">
            <div class="col-md-6">
              <label style="">Enter starting albhabat to get particular account
              <input type="text" class="in" id="in" name="">To<input type="text" class="in" id="in" name="">
              </label>
            </div>
          </div>
        
      </div>
      </div> 
    

       <div class="row">
      <div class="col-md-12">
        <div class="col-md-12">
        
        <button type="button" class="btn btn-primary" onclick="PrintPreview()" style="background-color: #0d93e2;height: 30px;font-size: 12px;font-weight: bold;" id="in" >EXCEL REPORT</button>
           <button type="button" class="btn btn-primary" style="background-color: #0d93e2;height: 30px;font-size: 12px;font-weight: bold;" id="in">Ledger With Narration</button>
            <button type="button" class="btn btn-primary" style="background-color: #0d93e2;height: 30px;font-size: 12px;font-weight: bold;" id="in">Ledger Report</button>
       </div>
  </div>    
     </div>
    </div>
  </div>
</div>
</div>
</div>
<!------ Include the above in your HEAD tag ---------->     
    

</div><br>
<!------------------------Footer  ---------------------------->
<?php include("footer.php"); ?>

<!-------------------------SCript File-------------------->
 
</body>
</html>