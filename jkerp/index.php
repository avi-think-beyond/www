<!DOCTYPE html>
<html lang="en">
<head>

	<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


<script>
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  var suffix = "AM";
	if (h >= 12) {
    suffix = "PM";
    h = h - 12;
	}
	if (h == 0) {
	 h = 12;
	}
  document.getElementById('txt').innerHTML =
  h + ":" + m + ":" + s+":"+suffix;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>



   <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



</head>




<body onload="startTime()"  style=" background-image: url(images/4.jpg);   height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">
<div class="container"  >
	<div class="row">
		<div class="col-sm-6"></div>
		<div class="col-sm-6">
			<div style="vertical-align: middle; text-align: right; font-family: century gothic;margin-right: 75px;">
                        <p style="color: #034396;padding-right: 43px;">
                            Current Date &amp; Time:</p>
                            <i class="fa fa-calendar" style="font-size: 17px;color: #0a62ca;"></i>&nbsp;
                        <span id="currentDate" style="font-weight: bold; font-size: large;
                            line-height: 20px; color:#4e3a16;">
                            <script>
							  var currentDate = new Date(),
							      day = currentDate.getDate(),
							      month = currentDate.getMonth() + 1,
							      year = currentDate.getFullYear();
							  document.write(day + "/" + month + "/" + year)
							</script>
						</span> &nbsp;&nbsp;<i class="fa fa-clock-o" style="font-size: 20px;color: #0a62ca;"></i>&nbsp;&nbsp;<span id="txt" style="font-weight: bold; font-size: large; line-height: 20px; color: #4e3a16;">
							
						</span>
            </div>
		</div>
	</div>
</div>
<br><br>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			
				<div style="width:100%; height: 100%; overflow: hidden;">
				<center>
					<img src="images/3.png" width="60%" height="70%">
				</center>
			</div>
			
		</div>
		<div class="col-md-4" style="box-shadow: 1px 2px 6px -1px #8a8a8a; padding-top: 10px; background-color: ">
			  <img src="images/logo.png" width="200">
            <center><div style="border:1px solid #17a2b8;height:1px;width:100%; color:#17a2b8;"></div></center>
            <br>
		<form action="login.php" method="post">
			<div class="input-group">
				<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-user-tie" style="color: #28a745"></i></span>
				</div>
					   <input type="text" name="" class="form-control" placeholder="Username"/>
			</div>
			<br />
         
             <div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-key icon" style="color: #28a745;"></i></span>
					</div>
					    <input type="Password" name="" class="form-control" placeholder="password"/>
			 </div>
			 <br />
              <button type="submit" class="btn btn-success" style="border-radius: 12px;"><a href="startingpage.php"><span class="glyphicon glyphicon-off"></span> Login</a></button>
         
             <a style="text-decoration: none;" href="registration.php"> <input type="button" value="Registration" class="btn btn-info" style="border-radius: 12px;" name=""></button></a><br />
               <br />
                <center><div style="border:1px solid #17a2b8;height:1px;width:100%; color:#17a2b8;"></div></center><br />
             <div class="footer">
                 <p>Forgot <a href="#">Password?</a></p>
             </div>
 		</form>
	    </div>
	
		<div class="col-md-2">
		</div>
		</div>
</div>
</body>
</html>
 
                	