<?php include("header.php"); ?>
  <br><br>
 
<style>
  body
  {
    margin: 0px;
    padding: 0px;
  }
  ul li
  {
    font-size:12px;
    padding: 0px;
    margin: 0px;
  }
  .t2
  {
    margin-top: 5px;
  }

      label
      {
        color: #0d93e2;
        font-size: 12px; 
        margin-bottom: 0px;
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
  font-size: 12px;
}
@media only screen and (max-width: 768px) {
  #in{
    width: 100%;
  }
  #in1
  {
    width: 92%;
    margin-top: 10px;
  }
}

    </style>
  </head>
  <body>
    <div style="width: 100%; margin-top: 5px; margin-bottom: 15px; padding: 2px; padding-left: 20px; border: solid 1px #dcd5d5;box-shadow: inset 1px 1px 12px 2px #d2cdcd;">
      <h2 style="    margin: 0;
    display: inline;
    color: #398ab9;
    font-size: 13px;
    font-weight: 600;">Masters Selection</h2>
    </div>
  <div style=" width: 96%; margin-right: auto; margin-left: auto; overflow: hidden;">
    
<form>

<div class="row">
  <div class=" col-md-3">
   
        <div class="row">
          <label class="col-md-3">Item Code<label style="color: red;">*</label></label>
          <div class="col-md-8">
            <input name="" type="text" maxlength="100" id="" class="in"   autocomplete="off"><br>
           
          </div>
        </div>
        <div class="row t2">
          <label class="col-md-3">Item Name<label style="color: red;">*</label></label>
          <div class="col-md-8">
            <input name="" type="text" maxlength="100" id="" class="in"   autocomplete="off">
           
          </div>
        </div>
        <div class="row t2">
          <label class="col-md-3">HSN Code<label style="color: red;">*</label></label>
          <div class="col-md-8">
            <input name="" type="text" maxlength="100" id="" class="in"   autocomplete="off"><br>
  
          </div>
        </div>
        <div class="row t2">
          <label class="col-md-3">GST Rate <label style="color: red;">*</label></label>
          <div class="col-md-8">
            <input name="" type="text" maxlength="100" id="" class="in"   autocomplete="off"><br>
  
          </div>
        </div>
        <div class="row t2" style="margin-bottom: 10px;">
          <label class="col-md-3">Min Stock</label>
          <div class="col-md-8">
            <input name="" type="text" maxlength="100" id="" class="in"   autocomplete="off"><br>
  
          </div>
        </div>
        
        <div class="row t2">
          <label class="col-md-3">Order Level</label>
          <div class="col-md-8">
            <input name="" type="text" maxlength="100" id="" class="in"   autocomplete="off"><br>
  
          </div>
        </div>
        <div class="row t2">
          <label class="col-md-4"><input type="checkbox" name="">Finished Goods</label>
          <label class="col-md-6"><input type="checkbox" name="">Item/Packing Material </label>
        </div>
        <div class="row t2">
          <label class="col-md-4"><input type="checkbox" name="">Packed Items</label>
          <label class="col-md-6"><input type="checkbox" name="">Overhead</label>
        </div>
        <div id="myDIV" style="display: none;">
           <div class="row t2">
          <label class="col-md-3">CESS Code</label>
          <div class="col-md-8">
            <input name="" type="text" maxlength="100" id="" class="in"   autocomplete="off"><br>
  
          </div>
        </div>
         <div class="row t2">
          <label class="col-md-3">CESS Rate</label>
          <div class="col-md-8">
            <input name="" type="text" maxlength="100" id="" class="in"   autocomplete="off"><br>
  
          </div>
        </div>
        </div>
        <div class="row t2">
  
            <input type="Reset" name="" value="Reset"   class="btn "  style="background:linear-gradient(#1289A7, #b98daf) !important; color: #ffffff; height: 28px; font-size: 11px;"  autocomplete="off" >
          
          
            <input type="button" name="" value="Add CESS"   class="btn " style="background:linear-gradient(#1289A7, #b98daf) !important; color: #ffffff; margin-left: 3px; height: 28px; font-size: 11px; "  autocomplete="off" onclick="myFunction()">
          
          
         
            <input type="Submit" name="" value="Submit"   class="btn"  style="background:linear-gradient(#1289A7, #b98daf) !important; margin-left: 3px; color: #ffffff; height: 28px; font-size: 11px;"  autocomplete="off">
         
        </div>         
  </div>
  <div class="col-md-9">
  <div class="row">
  <div class=" col-md-2">
       <fieldset id="in1" style="border: #ddd 1px solid;overflow-y: auto; padding: 5px; border-radius: 5px; overflow: hidden;height:auto;">
        <legend style="    font-size: 13px;  font-weight: normal;  border-bottom: none; background-color: #f9f9f9; border: #ddd 1px solid; border-top: #ddd 2px solid; padding-top: 3px; padding-bottom: 6px; margin-bottom: 0px;
    border-radius: 10px;text-align: center;width: 70%">Brand_master</legend>
    <div style="height: 400px; overflow-y: auto;">
      <ul>
        <li>
          <input type="checkbox" name="" autocomplete="off"><label>sets</label>
        </li>
         <li>
          <input  type="checkbox" name="" autocomplete="off"><label for="">546 </label>
        </li>
         <li>
         <input  type="checkbox" name="" autocomplete="off"><label for="">pair</label>
        </li>
         <li>
          <input type="checkbox" name="" autocomplete="off"><label for="">Pack</label>
        </li>
      </ul>
     </div>
    
    </fieldset>
  </div>
  <div class=" col-md-2" style="margin-left: 5px;">
       <fieldset id="in1" style="border: #ddd 1px solid;overflow-y: auto; padding: 5px; border-radius: 5px; overflow: hidden;height:auto;">
        <legend style="    font-size: 12px;  font-weight: normal;  border-bottom: none; background-color: #f9f9f9; border: #ddd 1px solid; border-top: #ddd 2px solid; padding-top: 3px; padding-bottom: 6px; margin-bottom: 0px;
    border-radius: 10px;text-align: center;width: 70%">Color_master</legend>
    <div style="height: 400px; overflow-y: auto;">
      <ul>
        <li>
          <input type="checkbox" name="" autocomplete="off"><label>sets</label>
        </li>
         <li>
          <input  type="checkbox" name="" autocomplete="off"><label for="">546 </label>
        </li>
         <li>
         <input  type="checkbox" name="" autocomplete="off"><label for="">pair</label>
        </li>
         <li>
          <input type="checkbox" name="" autocomplete="off"><label for="">Pack</label>
        </li>
      </ul>
     </div>
    
    </fieldset>
  </div>
   <div class=" col-md-2" style="margin-left: 5px;">
       <fieldset id="in1" style="border: #ddd 1px solid;overflow-y: auto; padding: 5px; border-radius: 5px; overflow: hidden;height:auto;">
        <legend style="    font-size: 13px;  font-weight: normal;  border-bottom: none; background-color: #f9f9f9; border: #ddd 1px solid; border-top: #ddd 2px solid; padding-top: 3px; padding-bottom: 6px; margin-bottom: 0px;
    border-radius: 10px;text-align: center;width: 70%">Size_master</legend>
    <div style="height: 400px; overflow-y: auto;">
      <ul>
        <li>
          <input  type="checkbox" name="" autocomplete="off"><label>sets</label>
        </li>
         <li>
          <input  type="checkbox" name="" autocomplete="off"><label for="">546 </label>
        </li>
         <li>
         <input  type="checkbox" name="" autocomplete="off"><label for="">pair</label>
        </li>
         <li>
          <input type="checkbox" name="" autocomplete="off"><label for="">Pack</label>
        </li>
      </ul>
     </div>
    
    </fieldset>
  </div>
   <div class=" col-md-2" style="margin-left: 5px;">
       <fieldset id="in1" style="border: #ddd 1px solid;overflow-y: auto; padding: 5px; border-radius: 5px; overflow: hidden;height:auto;">
        <legend style="    font-size: 13px;  font-weight: normal;  border-bottom: none; background-color: #f9f9f9; border: #ddd 1px solid; border-top: #ddd 2px solid; padding-top: 3px; padding-bottom: 6px; margin-bottom: 0px;
    border-radius: 10px;text-align: center;width: 70%">Model_master</legend>
    <div style="height: 400px; overflow-y: auto;">
      <ul>
        <li>
          <input  type="checkbox" name="" autocomplete="off"><label>sets</label>
        </li>
         <li>
          <input  type="checkbox" name="" autocomplete="off"><label for="">546 </label>
        </li>
         <li>
         <input   type="checkbox" name="" autocomplete="off"><label for="">pair</label>
        </li>
         <li>
          <input  type="checkbox" name="" autocomplete="off"><label for="">Pack</label>
        </li>
      </ul>
     </div>
    
    </fieldset>
  </div>
   <div class=" col-md-2" style="margin-left: 5px;">
       <fieldset id="in1" style="border: #ddd 1px solid;overflow-y: auto; padding: 5px; border-radius: 5px; overflow: hidden;height:auto;">
        <legend style="    font-size: 13px;  font-weight: normal;  border-bottom: none; background-color: #f9f9f9; border: #ddd 1px solid; border-top: #ddd 2px solid; padding-top: 3px; padding-bottom: 6px; margin-bottom: 0px;
    border-radius: 10px;text-align: center;width: 70%">Unit_master</legend>
    <div style="height: 400px; overflow-y: auto;">
      <ul>
        <li>
          <input  type="checkbox" name="" autocomplete="off"><label>sets</label>
        </li>
         <li>
          <input  type="checkbox" name="" autocomplete="off"><label for="">546 </label>
        </li>
         <li>
         <input   type="checkbox" name="" autocomplete="off"><label for="">pair</label>
        </li>
         <li>
          <input  type="checkbox" name="" autocomplete="off"><label for="">Pack</label>
        </li>
      </ul>
     </div>
    
    </fieldset>
  </div>
  </div>
  </div>
</div>
</form>
  </div>

  <script>
    /*script for hide show*/
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
<br>
 <!------------------------Footer  ---------------------------->
<?php include("footer.php"); ?>

<!-------------------------SCript File-------------------->
</body>
  </html>