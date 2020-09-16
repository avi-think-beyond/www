<!DOCTYPE html>
<html lang="en">
<head>

	<link href="jkerp/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="jkerp/js/bootstrap.min.js"></script>
<script src="jkerp/js/jquery.min.js"></script>
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




<body onload="startTime()"  style="">
    <br>
<div class="container"  >
	<div class="row">
		<div class="col-sm-6"></div>
		<div class="col-sm-6">
			<div style="vertical-align: middle; text-align: right; font-family: century gothic;margin-right: 75px;">
                        <p style="color: #dbebff;padding-right: 43px;">
                            Current Date &amp; Time:</p>
                            <i class="fa fa-calendar" style="font-size: 17px;color:#fff;"></i>&nbsp;
                        <span id="currentDate" style="font-weight: bold; font-size: large;
                            line-height: 20px; color:#76c74d;">
                            <script>
							  var currentDate = new Date(),
							      day = currentDate.getDate(),
							      month = currentDate.getMonth() + 1,
							      year = currentDate.getFullYear();
							  document.write(day + "/" + month + "/" + year)
							</script>
						</span> &nbsp;&nbsp;<i class="fa fa-clock-o" style="font-size: 20px;color: #fff;"></i>&nbsp;&nbsp;<span id="txt" style="font-weight: bold; font-size: large; line-height: 20px; color: #76c74d;">
							
						</span>
            </div>
		</div>
	</div>
</div>
<br><br><br>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			
				<div style="width:100%; height: 100%; overflow: hidden;">
				<center>
					<img src="jkerp/images/3.png" width="60%" height="70%">
				</center>
			</div>
			
		</div>
		<div class="col-md-4" style="    box-shadow: 1px 2px 6px -1px #181819;padding-top: 10px;border-left: 6px solid #4d7b36;border-bottom: 5px solid #4d7b36;background-image: linear-gradient(#4d7b36, #4d7b36); ">
			  <img src="jkerp/images/logo.png" width="200" height="57px";>
            <center><div style="border:1px solid #385f25;height:1px;width:100%;"></div></center>
            <br>
            <h6 id="success"></h6>
		<form >
			<div class="input-group">
				<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-user-tie" style="color: #32708f"></i></span>
				</div>
					   <input type="text" name="" class="form-control" placeholder="Username" id="userid">
			</div>
			<br />
         
             <div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-key icon" style="color: #32708f"></i></span>
					</div>
					    <input type="Password" name="" class="form-control" placeholder="password" id="password">
			 </div>
			 <br />
			  <button type="button"  style="background-image: linear-gradient(#408020, #273e1c)!important;color: #fff;" class="btn" id="login"><span class="glyphicon glyphicon-off"></span> Login</a></button>
             <input type="Reset" id="" value="Reset" style="background-image: linear-gradient(#272b25, #3c4a34)!important;color: #fff;" class="btn " >
            
         
            <div id="success"></div>
             <br />
               
                <center><div style="border:1px solid #1e4b61;height:1px;width:100%; color:#385f25;"></div></center><br />
             <div class="footer">
                <!--  <p>Forgot <a href="#">Password?</a></p> -->
             </div>
 		</form>
	    </div>
	
		<div class="col-md-2">
		</div>
		</div>
</div>
 
</body>
<script>
 	$("#login").click(function(){
 		var userid=$("#userid").val();
 		var password=$("#password").val(); 
 		if(userid==''||password=='')
 			{
 				alert("Fill the details");

 			}
 			$.ajax({
 				url:'function.php',
 				type:'POST',
 				data:{
 					id:userid,
 					pass:password,
 					command:'login'
 				},
                 success:function(data)
                 {
                   $('#success').html(data);
                 }
 			});
 	});

var Path=window.location.pathname;
var CurrentPath = Path.indexOf("local");
if(CurrentPath=='-1'){
  
} 
else
{
  
};
  
  var urlP='data_transfer_live_to_local.php';
  
  var timeInt = setInterval(function(){ get_notificationbadge(); }, 300000);
  function get_notificationbadge(){
    

    $.ajax({
          url:urlP,
          type: 'POST',
          data : {"type":"getdata"},
          success : function(result){
            }

         });
}


 </script>
</html>
 
                	