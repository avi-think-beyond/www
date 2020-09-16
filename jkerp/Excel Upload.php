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
        font-size: 14px; 
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



@media only screen and (max-width: 768px) {
  #in{
    width: 79%;
  }
    #in1{
    width: 94%;
  }
}

.p {
  text-align: center;
  padding-top: 140px;
  font-size: 14px;
}

    </style>
  </head>
  <body>
  
    <div style="width: 100%; margin-bottom: 15px; margin-top: 5px; padding: 2px; padding-left: 20px; border: solid 1px #dcd5d5;box-shadow: inset 1px 1px 12px 2px #d2cdcd;">
      <h2 style="    margin: 0;
    display: inline;
    color: #398ab9;
    font-size: 13px;
    font-weight: 600;">Excel Upload </h2>
    </div>
    
<form action="" method="">

<div style="width: 90%; margin:auto;">
<div class="row">
  <label class="col-md-1"></label>
  <div class=" col-md-5">

    <fieldset id="in1" style="  background-color: #f2f2f2;  border: #ddd 1px solid;  padding: 5px; border-radius: 5px; overflow: hidden;">
        <legend style="    font-size: 13px;  font-weight: normal;  border-bottom: none;  width: 90%; text-align: center; background-color: #f9f9f9; border: #ddd 1px solid; border-top: #ddd 2px solid; padding-left: 18px; padding-top: 3px; padding-bottom: 6px; margin-bottom: 0px;
    border-radius: 5px">Download Format</legend>
    <div class="row t2">
      <div class="col-md-1"></div>
          <label class="col-md-2">Excel For</label>
          <div class="col-md-5">
            <input name="" type="file" id="in"  class="in"   autocomplete="off">
           
          </div>
          <div class="col-md-4">
            <input type="submit" name="" value="Download Format"   class="btn " style=" background:linear-gradient(#1289A7, #b98daf) !important; color: #ffffff; height: 27px; font-size: 11px;"  autocomplete="off">
          </div>
        </div>
        
    </fieldset>

     </div>
        
    
 
  <!-- <div class="col-md-1"></div> -->
  <div class=" col-md-5">
       <fieldset id="in1" style=" background-color: #f2f2f2;  text-align: center; border: #ddd 1px solid;  padding: 5px; border-radius: 5px; overflow: hidden;">
        <legend style="    font-size: 13px;  font-weight: normal;  border-bottom: none;  width: 90%;  background-color: #f9f9f9; border: #ddd 1px solid; border-top: #ddd 2px solid; padding-left: 18px; padding-top: 3px; padding-bottom: 6px; margin-bottom: 0px;
    border-radius: 5px">Upload Excel File</legend>
    <div class="row t2">
      <label class="col-md-1"></label>
       
          <label class="col-md-2">Upload File</label>
          <div class="col-md-5">
            <input name="" type="file"  id="in" class="in"   autocomplete="off">
          </div>
          <div class="col-md-4">
            <input type="submit" name="" value="Upload"   class="btn " style=" background:linear-gradient(#1289A7, #b98daf) !important; color: #ffffff; height: 27px; font-size: 11px;"  autocomplete="off">
          </div>
        
    </div>
   
    </fieldset>
  </div>
</div>

</div>
</form>
 <br>
  <!------------------------Footer  ---------------------------->
<?php include("footer.php"); ?>

<!-------------------------SCript File-------------------->