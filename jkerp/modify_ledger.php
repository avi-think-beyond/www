<?php include("header.php"); ?>
  <br><br>
  <link rel="stylesheet" href="css1/bootstrap.min.css">
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
<style type="text/css">
  .t2
  {
    margin-top: 5px;
  }
select
  {
    font-size: 12px;
  }
  option
  {
    font-size: 12px;
    border-bottom: 1px solid #ddd0d0;
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
        height: 25px;
        padding-left: 2px;
        width: 100%;
      }
      h2 {
  text-align: center;
}

.p {
  text-align: center;
  padding-top: 140px;
  font-size: 12px;
}
@media only screen and (max-width: 768px) {
  #in{
    width: 100%;
  }
}
    </style>
</head>
<body>
  <div style="margin-top: 5px; width: 100%; margin-bottom: 15px; padding: 2px; padding-left: 20px; border: solid 1px #dcd5d5;box-shadow: inset 1px 1px 12px 2px #d2cdcd;">
      <h2 style="    margin: 0;
    display: inline;
    color: #398ab9;
    font-size: 13px;
    font-weight: 600;"><b>ALTER/DELETE ACCOUNT »»</b></h2>
    </div>
    <br><br>
<div style=" width: 96%; margin-right: auto; margin-left: auto;">
 
  <div style=" padding: 1%; height: auto; box-shadow: 1px -1px 13px 3px #b6bbbf; margin-left: auto; margin-right: auto;">  
    <form>

    	<div class="container-fluid" style="padding-left: 0px;">
    <div class="row">
      <div class="col-md-4">
        <div class="row">
            <label class="col-md-6">
              Account Code :-
            </label>
            <div class="col-md-6">
              <input type="text" class="in" id="in" name="">
            </div>
        </div>
         <div class="row t2">
            <label class="col-md-6">
             Account Name :-
            </label>
            <div class="col-md-6">
                     <input type="text" class="in" id="in" name="">      
              </div>
        </div>
        <div class="row t2">
            <label class="col-md-6">
             Account Head :-
            </label>
            <div class="col-md-6">
                     <input type="text" class="in" id="in" name="">      
              </div>
        </div>
        <div class="row t2">
            <label class="col-md-6">
             Opening Bal :-
            </label>
            <div class="col-md-2">
              <input type="text" class="in"  name="" id="in" style="width: 50px;" >      
            </div>
              <div class="col-md-4">
                 <select name="" class="in" style="height: 24px;">
                    <option>DEBIT</option>
                    <option>CREDIT</option>
                  </select> 
              </div>
        </div> 
        
         
        </div>
          
      
    <div class="col-md-8">
      <div class="row">
        <p id="in" style="margin-right: 20px;margin-left: 20px;">Total Dr.  0   Total Cr. 0   Rs. 0 Dr. Excess (Difference in Opening balance only)
        </p>

<div class="col-md-6" id="in">
<br>
<div class="">
  <div class="panel panel-default border">
    <div class="panel-heading">Account Head</div>
    <div class="panel-body">
    <P value="" style="background-color:#497191 ;width: 98%;color: white;padding-left: 2%;">Account Head</P>
  <select size="10" style="width: 100%;height: 83%; position: relative;margin-top: -10px;" >
  <option value=""  >Source Holder's Fund</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">Share Capital</option>
  <option value="">Reserve and Surplus</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">Reserve and Surplus</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">Profit and Loss account</option>
  <option value="">Loan Fund</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">Secured Loan</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">Unsecured Loan</option>
  <option value="">Fixed assets</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">Gross Block</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">Depreciation</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">Capital work-in-progress</option>
  <option value="">Current Assets, Loan and Advances</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">Inventories</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">Sundry Debtors</option>
  <option value="">Cash and bank Balance</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">Cash in hand</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">Balance with bank</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">Other Current Assets</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">Loan and Advances</option>
  <option value="">Current liabilities and provisions</option>
  <option value="">Current Liabilities</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">Sundry Creditors</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">Other Current Liabilities</option>
  <option value="">Provision</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">PROVISION FOR INCOME TAX PAYABLE</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">PROVISION FOR DEFFERED TAX PAYABLE</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">PROVISION FOR FB TAX PAYABLE</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">PROPOSED DIVIDEND PAYABLE</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">Other Provision</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">Miscellaneous expenditure to the extent not written off or adjusted</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">HeadOffice/Branch Account</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">Sale</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">Other income </option>
  <option value="" style="color:#0d93e2;font-weight:bold;">Purchase</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">Direct Expense</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">Administrative &amp; Selling Expense</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">Finance Expense</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">Depreciation</option>
  <option value="">Profit and Loss Account</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">PROVISION FOR INCOME TAX</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">PROVISION FOR DEFFERED TAX</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">PROVISION FOR FB TAX</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">PROPOSED DIVIDEND</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">INTERIM DIVIDEND</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">INCOME TAX / DIVIDEND TAX / FBT TAX ADJUSTMENT</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">Profit and Loss Ac</option>
  <option value="">Investment</option>
  <option value="">Long-term investment</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">Goverment and other sercurities-Quoted</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">Goverment and other sercurities-Unquoted</option>
  <option value="">Short-term investments</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">Equity Shares,including share application money</option>
  <option value="" style="color:#0d93e2;font-weight:bold;">Preference shares </option>
  <option value="" style="color:#0d93e2;font-weight:bold;">Debenture</option>
</select>                           
          </div>
     </div> 
  </div>
  <div class="row t2">
            <div class="col-md-8">
              <input type="button" value="Edit A/C" class="btn" style="font-size: 13px; color: #fff; height: 30px; background-color: #0d93e2;font-weight: bold;margin: 5px; ">      
           
                 <input type="button" value="Delete A/C" class="btn" style="font-size: 13px; color: #fff; height: 30px; background-color: #0d93e2;font-weight: bold;margin: 5px; "> 
              </div>
        </div>
</div>     
<div class="col-md-6">
<br>
<div class="">
  <div class="panel panel-default border">
    <div class="panel-heading">ACCOUNT NAME</div>
    <div class="panel-body">
     <P value="" style="background-color:#497191 ;width: 98%;color: white;  padding-left: 2%;">Account Name</P>
      <select size="10" style="width: 100%;height: 83%; position: relative;margin-top: -10px;" >
  <option value="939">016 RISHAB KOHLI</option>
  <option value="938">08 MISHTHI BARIA</option>
  <option value="958">08 MISHTHI BARIA SUP</option>
  <option value="946">AAKIB JAWED</option>
  <option value="941">ABC</option>
  <option value="923">BANK ACCOUNT</option>
  <option value="714">BANK CHARGES</option>
  <option value="727">CASH IN HAND</option>
  <option value="716">CESS_INPUT</option>
  <option value="720">CESS_OUTPUT</option>
  <option value="715">CGST_INPUT</option>
  <option value="719">CGST_OUTPUT</option>
  <option value="733">CLEARINGAGENT</option>
  <option value="713">CURRENCY LOSS / PROFIT</option>
  <option value="732">CUSTOMDUTY</option>
  <option value="944">GEETA CUS</option>
  <option value="957">HASAN</option>
  <option value="718">IGST_INPUT</option>
  <option value="722">IGST_OUTPUT</option>
  <option value="725">INTERSTATE_PURCHASE</option>
  <option value="729">INTERSTATE_SALE</option>
  <option value="667">JORDEN INDIA</option>
  <option value="723">LOCAL_PURCHASE</option>
  <option value="726">LOCAL_SALE</option>
  <option value="734">LOCALTRANSPORT</option>
  <option value="952">LODING</option>
  <option value="947">MACO RETAIL</option>
  <option value="948">MACO TRADER</option>
  <option value="955">MANOJ</option>
  <option value="940">NEHA KOHLI</option>
  <option value="730">OPENING STOCK</option>
  <option value="731">OTHERS</option>
  <option value="728">PETTYDEBITORSACC</option>
  <option value="901">PROMOTIONCASHBACK</option>
  <option value="902">PROMOTION MONTHL YPACKAGE</option>
  <option value="903">PROMOTION REFERRAL</option>
  <option value="942">PUNJAB NATIONAL BANK</option>
  <option value="924">PURCHASE A/C</option>
  <option value="724">PURCHASEIMPORT</option>
  <option value="959">RAHUL KOHLI</option>
  <option value="928">RAJA</option>
  <option value="945">RAJNEESH KADIAN</option>
  <option value="943">RAMESH SUP</option>
  <option value="712">ROUNDOFF AMOUNT</option>
  <option value="925">SALE A/C</option>
  <option value="717">SGST_INPUT</option>
  <option value="721">SGST_OUTPUT</option>
  <option value="820">TEST34</option>
  <option value="819">TESTACCDF</option>
  <option value="951">TRANSPORT CHARGE</option>
  <option value="954">TRANSPORTATION</option>
  <option value="956">TUSHAR SINHA</option>
</select>
          </div>
      </div>
       <div class="row t2">
            <label class="col-md-5">
             Sort by A/c Name:
            </label>
            <div class="col-md-5">
              <input type="text" class="in" id="in" name="" >      
            </div>
             
        </div>
     </div>
  </div>
</div>
</div>
</div></div>
</form> 
</div>
</div><br><br>
<!------------------------Footer  ---------------------------->
<?php include("footer.php"); ?>

<!-------------------------SCript File-------------------->
</body>
</html>