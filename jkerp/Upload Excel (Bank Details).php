<?php include("header.php"); ?>
  <br><br>
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
  font-size: 12px;
}

    </style>
  </head>
  <body>
 
    <div style="width: 100%; margin-bottom: 15px; margin-top: 5px; padding: 2px; padding-left: 20px; border: solid 1px #dcd5d5;box-shadow: inset 1px 1px 12px 2px #d2cdcd;">
      <h2 style="    margin: 0;
    display: inline;
    color: #398ab9;
    font-size: 13px;
    font-weight: 600;">Upload Excel (Bank Details)</h2>
    </div>

<form action="" method="">


  <div class=" col-md-5" style="margin: auto;">
    <fieldset style="  background-color: #f2f2f2;  border: #ddd 1px solid;  padding: 5px; border-radius: 5px; overflow: hidden;">
        <legend style="    font-size: 13px;  font-weight: normal;  border-bottom: none;  width: 60%; text-align: center; background-color: #f9f9f9; border: #ddd 1px solid; border-top: #ddd 2px solid; padding-left: 18px; padding-top: 3px; padding-bottom: 6px; margin-bottom: 0px;
    border-radius: 5px">Download Format</legend>
    <div class="row t2">
     
      <div class="col-md-12"></div>
           <span style="color: red; font-weight: bold; font-size: 12px; margin-left:10px;">Date Format : dd-mm-yyyy</span>
        </div>
        
      
       <div class="row" style="margin-left:10px;">
          <label class="col-md-4">Select Excel File</label>
          <div class="col-md-7">
            <input name="" type="file"  id="" class="in"   autocomplete="off">
           
          </div>
          
        </div> 
  <div class="row t2" style="margin-left:10px;">
      
       
          <label class="col-md-4">Select Bank A/c</label>
          <div class="col-md-7">
              <select name="" id="" class="in" >
                  <option value="923">BANK ACCOUNT</option>
                  <option value="942">PUNJAB NATIONAL BANK</option>

                </select>
           
        
         
        </div> 
    </div>
    <div class="col-md-1">
            <input type="submit" name="" value="Upload Excel"   class="btn " style="background:linear-gradient(#1289A7, #b98daf) !important;  color: #ffffff; height: 27px; font-size: 11px;"  autocomplete="off">
          </div>
    </fieldset>

     </div>
      
</form>

 <br>
  <!------------------------Footer  ---------------------------->
<?php include("footer.php"); ?>

<!-------------------------SCript File--------------------
  </body>
 