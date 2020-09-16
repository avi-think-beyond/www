<?php include("header.php"); ?>
  <br><br>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/bootstrap.min1.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
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
      }
      h2 {
  text-align: center;
}



.p {
  text-align: center;
  padding-top: 140px;
  font-size: 14px;
}

    </style>
  </head>
  <body>
     <div style="width: 100%; margin-bottom: 15px; padding: 2px; padding-left: 20px; border: solid 1px #dcd5d5;box-shadow: inset 1px 1px 12px 2px #d2cdcd;">
      <h2 style="    margin: 0;
    display: inline;
    color: #398ab9;
    font-size: 13px;
    font-weight: 600;">CHANGE PASSWORD FORM »»</h2>
    </div>
  <div style=" width: 96%; margin-right: auto; margin-left: auto; overflow: hidden;">
   



   
  <div class=" col-md-5" style="margin: auto;">
    <fieldset style="  background-color: #f2f2f2;  border: #ddd 1px solid;  padding: 5px; border-radius: 5px; overflow: hidden;">
        <legend style="    font-size: 13px;  font-weight: normal;  border-bottom: none;  width: 50%;  background-color: #f9f9f9; border: #ddd 1px solid; border-top: #ddd 2px solid; padding-left: 18px; padding-top: 3px; padding-bottom: 6px; margin-bottom: 0px;
    border-radius: 5px">Create New User</legend>
    <br>
        <div class="row">
          <label class="col-md-4">User Name :-</label>
          <div class="col-md-8">
            <input name="" type="text" maxlength="100" id="" class="in"   autocomplete="off"><br>
            <span  style="color: red;">* User name must be 6-10 character</span>
          </div>
        </div>
         <div class="row t2">
          <label class="col-md-4">Old Password :-</label>
          <div class="col-md-8">
            <input name="" type="Password" maxlength="100" id="" class="in"   autocomplete="off">
           
          </div>
        </div>
        <div class="row t2">
          <label class="col-md-4">New Password :-</label>
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
          <label class="col-md-8"></label>
          <div class="col-md-2">
            <input type="submit" name="" value="Change Password"   class="btn " style="background-color: #0d93e2; color: #ffffff; height: 30px; font-size: 12px;"  autocomplete="off">
          </div>
        </div>
           <br>
    </fieldset>
  </div>
 </div>
  <br>
  <!------------------------Footer  ---------------------------->
<?php include("footer.php"); ?>

<!-------------------------SCript File-------------------->
  </body>
