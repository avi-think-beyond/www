<?php include("header.php"); ?>
  <br><br>
     
<style>
  .t2
  {
    margin-top: 5px;
  }

@media only screen and (max-width: 768px) {
  #in{
    width: 79%;
  }
    #in1{
    width: 96%;
  }
}
      label
      {
        color: #0d93e2;
        font-size: 12px; 
      }
      select
      {
        font-size: 12px;
      }
      option
      {
        font-size: 12px;
      }
      .in
      {
        border: 1px solid #bbbbbb;
        border-radius: 3px;
        padding-left: 2px;
        width: 90%;
      }
      h2 {
  text-align: center;
}

span
{
  font-size: 12px;
}

.p {
  text-align: center;
  padding-top: 140px;
  font-size: 12px;
}

    </style>
  </head>
  <body>
  
    <div style="width: 100%; margin-bottom: 15px; padding: 2px; padding-left: 20px; border: solid 1px #dcd5d5;box-shadow: inset 1px 1px 12px 2px #d2cdcd;">
      <h2 style="    margin: 0;
    display: inline;
    color: #398ab9;
    font-size: 13px;
    font-weight: 600;">CREATE USER FORM </h2>
    </div><br><br><br><br>
<div style="width: 92%;margin: auto;">
<div class="row">
   <div class="col-md-1"></div>
  <div class=" col-md-5">
    <fieldset id="in1" style="  background-color: #f2f2f2;  border: #ddd 1px solid;  padding: 5px; border-radius: 5px; overflow: hidden;">
        <legend style="    font-size: 13px;  font-weight: normal;  border-bottom: none;  width: 39%;  background-color: #f9f9f9; border: #ddd 1px solid; border-top: #ddd 2px solid; padding-left: 18px; padding-top: 3px; padding-bottom: 6px; margin-bottom: 0px;
    border-radius: 5px">Create New User</legend>
        <div class="row">
          <label class="col-md-4">User Name :-</label>
          <div class="col-md-8">
            <input name="" type="text" maxlength="100" id="" class="in"   autocomplete="off"><br>
            <span  style="color: red;">* User name must be 6-10 character</span>
          </div>
        </div>
        <div class="row t2">
          <label class="col-md-4">Password :-</label>
          <div class="col-md-8">
            <input name="" type="Password" maxlength="100" id="" class="in"   autocomplete="off">
           
          </div>
        </div>
        <div class="row t2">
          <label class="col-md-4">Confirm Password :-</label>
          <div class="col-md-8">
            <input name="" type="Password" maxlength="100" id="" class="in"   autocomplete="off"><br>
            <span  style="color: red;">* Password must be 6-10 character</span>
          </div>
        </div>

         <div class="row t2">
          <label class="col-md-4">Role :-</label>
          <div class="col-md-8">
           <select name="" id="" class="in" >
              <option value="Administrator">Administrator</option>
              <option value="Member">Member</option>

            </select>
          </div>
        </div>
        <div class="row t2">
          <label class="col-md-8"></label>
          <div class="col-md-2">
            <input type="submit" name="" value="Create User"   class="btn " style="background-color: #0d93e2; color: #ffffff; height: 28px; font-size: 11px;"  autocomplete="off">
          </div>
        </div>
           
    </fieldset>
  </div>
  <!-- <div class="col-md-1"></div> -->
  <div class=" col-md-5" style="">
       <fieldset id="in1" style=" background-color: #f2f2f2;   border: #ddd 1px solid;  padding: 5px; border-radius: 5px; overflow: hidden;">
        <legend style="    font-size: 13px;  font-weight: normal;  border-bottom: none;  width: 39%;  background-color: #f9f9f9; border: #ddd 1px solid; border-top: #ddd 2px solid; padding-left: 18px; padding-top: 3px; padding-bottom: 6px; margin-bottom: 0px;
    border-radius: 5px">Select Company</legend>
    <div class="row">
      <label class="col-md-2"></label>
         <table>
            <tbody>
              <tr>
              <td><input id="" type="checkbox" name="" autocomplete="off"><label>Connectivity Solutions Pvt Ltd </label></td>
            </tr><tr>
              <td><input id="" type="checkbox" name="" autocomplete="off"><label for="">Huma Cosmetic Center </label></td>
            </tr><tr>
              <td><input id="" type="checkbox" name="" autocomplete="off"><label for="">maco </label></td>
            </tr><tr>
              <td><input id="" type="checkbox" name="" autocomplete="off"><label for="">MACO INFOTECH 2 </label></td>
            </tr><tr>
              <td><input id="" type="checkbox" name="" autocomplete="off"><label for="">MACO INFOTECH LTD. </label></td>
            </tr><tr>
              <td><input id="" type="checkbox" name="" autocomplete="off"><label for="">NEW HANDLOOM WORLD </label></td>
            </tr>
          </tbody>
        </table>
    </div>
   
    </fieldset>
  </div>
</div>
</div>
<br><br><br><br>
  <br>
  <!------------------------Footer  ---------------------------->
<?php include("footer.php"); ?>

<!-------------------------SCript File-------------------->
  </body>
 