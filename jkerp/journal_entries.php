<?php include("header.php"); ?>
  <br><br>
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
    font-size: 14px;
  }
  option
  {
    border: 1px solid #000;
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

<div style="width: 100%; margin-top: 5px;  margin-bottom: 15px; padding: 2px; padding-left: 20px; border: solid 1px #dcd5d5;box-shadow: inset 1px 1px 12px 2px #d2cdcd;">
      <h2 style="margin: 0;
    display: inline;
    color: #398ab9;
    font-size: 13px;
    font-weight: 600;"><b>Journal Entries Form Accounts Transactions</b></h2>
    </div>
 <div style=" width: 92%; margin-right: auto; margin-left: auto;">
 
  <div style=" width:99%; padding: 1%; height: auto; box-shadow: 1px -1px 13px 3px #b6bbbf; margin-left: auto; margin-right: auto;"> 
    <form>    
  <div class="row">
  <div class="col-md-1">
       <div class="col-md-12">
          <label>Status</label>
      </div>
    </div> 
    <div class="col-md-2">
       <div class="col-md-6">
          <label><input type="radio" name=""> Payment</label>
      </div>
      <div class="col-md-6"> 
          <label><input type="radio" name=""> Receipt</label>
      </div>
    </div> 
    <div class="col-md-2">
       <div class="col-md-6"> 
          <label><input type="radio" name=""> Contra</label>
      </div>
      <div class="col-md-6"> 
          <label><input type="radio" name=""> Expense</label>
      </div>
     </div> 
     <div class="col-md-3">
       <div class="col-md-4"> 
          <label><input type="radio" name=""> Journal</label>
      </div>
      <div class="col-md-8"> 
       <label><input type="radio" name=""> Payment Against Suppliers</label>
      </div>
    </div> 
     <div class="col-md-4">
       <div class="col-md-6"> 
          <label><input type="radio" name=""> Recipt Against Customers</label>
      </div>
      <div class="col-md-4"> 
        <label><input type="radio" name=""> Print Voucher</label>
      </div>
    </div> 
  </div>
  <div class="row">
    
    <div class="col-md-3">
      <div class="row">
            <label class="col-md-2">Date :-</label>
           <div class="col-md-6"><input type="date" name="" class="in"></div>
       </div>
      </div>
   
    <div class="col-md-3">
       
          <div class="row">
            <label class="col-md-4">Ref/InvoiceNo :-</label>
           <div class="col-md-6"><input type="text" name="" class="in"></div>
       </div>
      </div>
    
    <div class="col-md-3">
       <div class="row">
            <label class="col-md-2">Vch.No :-</label>
           <div class="col-md-6"><input type="text" name="" class="in"></div>
       </div>
       
      </div>
</div>
<div class="row">
  <div class="col-md-6 table-responsive">

   <table class="table table-bordered" >
    <thead style="background-color: rgb(13, 147, 226);">
      <tr >
        <th>By/To P</th>
        <th>Particulars</th>
        <th>Dr. Amount</th>
        <th>Cr. Amount</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><input type="text" class="in" style="width: 65px;" name=""></td>
        <td><input type="text" class="in" style="width: 400px;" name=""></td>
        <td><input type="text" class="in" style="width: 120px;" name=""></td>
        <td><input type="text" class="in" style="width: 120px;" name=""></td>
      </tr> 
    </tbody>
  </table> 
  </div>

  <div class="col-md-6">
    <div class="row">
<div class="col-md-1">
 </div>
    <div class="col-md-4"> 
      <div class="">
  <div class="panel panel-default">
    <div class="panel-heading">Select Particulars (Debit)</div>
    <div class="panel-body">
     <P value="" style="background-color:#497191 ;width: 98%; padding-left: 2%; color: white;font-size: 12px;">SELECT PARTICULARS(DEBIT)</P>
      <select size="9" style="width: 100%;height: 83%; font-size: 12px; position: relative;margin-top: -10px;" >
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
  <option value="902">PROMOTIONMONTHLYPACKAGE</option>
  <option value="903">PROMOTIONREFERRAL</option>
  <option value="942">PUNJAB NATIONAL BANK</option>
  <option value="924">PURCHASE A/C</option>
  <option value="724">PURCHASEIMPORT</option>
  <option value="959">RAHUL KOHLI</option>
  <option value="928">RAJA</option>
  <option value="945">RAJNEESH KADIAN</option>
  <option value="943">RAMESH SUP</option>
  <option value="712">ROUNDOFFAMOUNT</option>
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
     </div>
</div>
<div class="col-md-1">
  </div>
      <div class="col-md-4"> 
        <div class="">
  <div class="panel panel-default">
    <div class="panel-heading">Select Particulars (Credit)</div>
    <div class="panel-body">
     <P value="" style="background-color:#497191 ;width: 100%;color: white;font-size: 12px;">SELECT PARTICULARS(CREDIT)</P>
      <select size="9" style="width: 100%;height: 83%;font-size: 12px; position: relative;margin-top: -10px;" >
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
  <option value="902">PROMOTIONMONTHLYPACKAGE</option>
  <option value="903">PROMOTIONREFERRAL</option>
  <option value="942">PUNJAB NATIONAL BANK</option>
  <option value="924">PURCHASE A/C</option>
  <option value="724">PURCHASEIMPORT</option>
  <option value="959">RAHUL KOHLI</option>
  <option value="928">RAJA</option>
  <option value="945">RAJNEESH KADIAN</option>
  <option value="943">RAMESH SUP</option>
  <option value="712">ROUNDOFFAMOUNT</option>
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
     </div>
    </div>
  </div>
  </div>
</div>
<div class="row">
  <div class="col-md-2">
    <div class="col-md-9">
       <label><input type="checkbox" name="">Is Input Credit ?</label>
    </div>
   
    
  </div>
  <div class="col-md-3">
    <div class="col-md-10">
       <label><input type="checkbox" name="">Is Reverse charge Applicable ?</label>
    </div>
   
    
  </div>
  <div class="col-md-2">
    <div class="col-md-11">
       <label><input type="checkbox" name="">Is Un-Register Dealer ?</label>
    </div>
   
    
  </div>
  <div class="col-md-3">
    <div class="col-md-12">
       <label>GSTIN NO <input type="text" name="" class="in" style="width: 60%;margin-left: 5px;"></label>
    </div>
   
    
  </div>
</div>
<div class="row">
  <div class="col-md-10">
    <div class="col-md-12">
       <label class="col-md-1">Rmks:-</label>
       <div class="col-md-6">
        <input type="text" class="in" name="" id="in">
        </div>
        <div class="col-md-2">
          <input type="text" name="" class="in">
        </div>
        <div class="col-md-2">
          <input type="text" name="" class="in" style="width: 100%;margin-left: 40px;" id="in">
        </div>
    </div>
  </div>
</div>
<div class="row" style="margin-top: 5px;">
  <div class="col-md-10">
    <div class="col-md-12">
       <label class="col-md-1"></label>
       <div class="col-md-3">
        <select name="" style="height:25px;margin-left: 3px; width: 80%">
  <option value="--Select HSN CODE--">--Select HSN CODE--</option>
  <option value="">6100</option>
  <option value="">0001</option>
  <option value="">0002</option>
  <option value="">012553</option>
  <option value="">3424</option>
  <option value="">6210</option>
  <option value="">2003</option>
  <option value="">641</option>
  <option value="">85496320</option>
  <option value="">1515</option>
  <option value="">56</option>
  <option value="">6765</option>
  <option value="">435345435</option>
  <option value=""> 0207 60 0</option>
  <option value="">0208.30.00</option>
  <option value="">4554</option>
  <option value="">55</option>
  <option value="">https://dr</option>
  <option value="">33051090</option>
  <option value="">33049990</option>
  <option value="">21039020</option>
  <option value="">21032000</option>
  <option value="">3004</option>
  <option value="">33030020</option>
  <option value="">11111111</option>
  <option value="">12</option>
  <option value="">8796</option>
  <option value="">0816</option>
  <option value="">1234</option>
  <option value="">9983</option>
  <option value="">12345</option>
  <option value="">0</option>
  <option value="">5407</option>
  <option value="">003</option>

</select>

        </div>
        <div class="col-md-3">
        <select name="" style="height:25px;width:79%;">
  <option value="--Select SAC CODE--">--Select SAC CODE--</option>

</select>
        
        </div>
        <div class="col-md-2">
          <select name="" style="width: 135px;">
  <option value="--Select State--">--Select State--</option>
  <option value=""> Andaman and Nicobar Islands</option>
  <option value=""> Arunachal Pradesh</option>
  <option value=""> Dadar and Nagar Haveli</option>
  <option value=""> Daman and Diu</option>
  <option value=""> Delhi</option>
  <option value=""> Gujarat</option>
  <option value=""> Haryana</option>
  <option value="">Andhra Pradesh</option>
  <option value="">Assam</option>
  <option value="">Bihar</option>
  <option value="">Chandigarh</option>
  <option value="">Chhattisgarh</option>
  <option value="">Goa</option>
  <option value="">Himachal Pradesh</option>
  <option value="">Jammu and Kashmir</option>
  <option value="">Jharkhand</option>
  <option value="">Karnataka</option>
  <option value="">Kerala</option>
  <option value="">Lakshadweep</option>
  <option value="">Madhya Pradesh</option>
  <option value="">Maharashtra</option>
  <option value="">Manipur</option>
  <option value="">Meghalaya</option>
  <option value="">Mizoram</option>
  <option value="">Nagaland</option>
  <option value="">Odisha</option>
  <option value="">Pondicherry</option>
  <option value="">Punjab</option>
  <option value="">Rajasthan</option>
  <option value="">Sikkim</option>
  <option value="">Tamil Nadu</option>
  <option value="">Telangana</option>
  <option value="">Tripura</option>
  <option value="">Uttar Pradesh</option>
  <option value="">Uttarakhand</option>
  <option value="">West Bangal</option>

</select>
        </div>
        <div class="col-md-2">
          <input type="submit" name="ctl00$ContentPlaceHolder1$BtnSave" value="SAVE"  class="btn btn-primary" style="width:80px;margin-left: 40px;">
    </div>
  </div>
</div>
</div>
</form> 
</div>
</div>
<br>
  <!------------------------Footer  ---------------------------->
<?php include("footer.php"); ?>

<!-------------------------SCript File-------------------->
</body>
</html>