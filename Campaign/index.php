<?php	
	//connection
	$con=mysqli_connect("localhost","root","","search_db");
		include_once("includes/form_functions.php");
		include_once("includes/functions.php");
if($con)
	{
	// START FORM PROCESSING
	if (isset($_POST['submit'])) 
	  { // Form has been submitted.
		$errors = array();
		// perform validations on the form data
		$required_fields = array('email', 'password');
		$errors = array_merge($errors, check_required_fields($required_fields, $_POST));

		$fields_with_lengths = array('email' => 30, 'Password' => 40);
		//$errors = array_merge($errors, check_max_field_lengths($fields_with_lengths, $_POST));

		$email = trim(mysqli_real_escape_string($con, $_POST['email']));
		$password = trim(mysqli_real_escape_string($con, $_POST['Password']));
		
	
			// Check database to see if username and the hashed password exist there.
			$query = "SELECT Name, Mail_Id FROM CS_user WHERE  Mail_Id='$email' AND Password = '$password' ";
			
			$resq = mysqli_query($con,$query);
			
			if (mysqli_num_rows($resq) == 1) {
				// username/password authenticated
				// and only 1 match
				$found_user = mysqli_fetch_array($resq);
				$_SESSION['Name']    =$found_user['Name'];
				$_SESSION['Mail_Id'] = $found_user['Mail_Id'];
				redirect_to("ind.php");
			} else {
				// username/password combo was not found in the database
				$message = "Email id/password combination incorrect.<br />
					Please make sure your caps lock key is off and try again.";
			}		
		
	} else { // Form has not been submitted.
		if (isset($_GET['logout']) && $_GET['logout'] == 1) {
			$message = "You are now logged out.";
		} 
		$email ="Email Id";
		$password ="";
	}
	mysqli_close($con);
   }
   
   
?>
<!DOCTYPE html>
<html>
<head>
<title>Campaign Search </title>
<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" media="all" rel="stylesheet"/>
<link href="stylesheets/application.css" media="all" rel="stylesheet"/>
<link href="stylesheets/isotope.css" media="all" rel="stylesheet"/>
<link href="stylesheets/normalize.css" media="all" rel="stylesheet"/>
<link href="stylesheets/fullcalendar.css" media="all" rel="stylesheet"/>
<link href="stylesheets/datatables.css" media="all" rel="stylesheet"/>
<link href="stylesheets/prettify.css" media="all" rel="stylesheet"/>
<link href="stylesheets/classyscroll.css" media="all" rel="stylesheet"/>
<link href="stylesheets/jquery.fancybox.css" media="all" rel="stylesheet"/>
<link href="stylesheets/select2.css" media="all" rel="stylesheet"/>
<link href="stylesheets/bootstrap.min.css" media="all" rel="stylesheet"/>
<link href="stylesheets/fontawesome.css" media="all" rel="stylesheet"/>
<link href="stylesheets/style.css" media="all" rel="stylesheet"/>
<link href="stylesheets/color/green.css" media="all" rel="alternate stylesheet" title="green-theme"/>
<link href="stylesheets/color/orange.css" media="all" rel="alternate stylesheet" title="orange-theme"/>
<link href="stylesheets/color/magenta.css" media="all" rel="alternate stylesheet" title="magenta-theme"/>
<link href="stylesheets/color/gray.css" media="all" rel="alternate stylesheet" title="gray-theme"/>

<script src="javascripts/modernizr.custom.js"></script>
<script src="../../code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="../../code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="javascripts/bootstrap.min.js"></script>
<script src="javascripts/jquery.mousewheel.js"></script>
<script src="javascripts/jquery.classyscroll.js"></script>
<script src="javascripts/jquery.vmap.min.js"></script>
<script src="javascripts/jquery.vmap.sampledata.js"></script>
<script src="javascripts/jquery.vmap.world.js"></script>
<script src="javascripts/fullcalendar.min.js"></script>
<script src="javascripts/gcal.js"></script>
<script src="javascripts/prettify.js"></script>
<script src="javascripts/jquery.dataTables.min.js"></script>
<script src="javascripts/jquery.fancybox.pack.js"></script>
<script src="javascripts/jquery.sparkline.min.js"></script>
<script src="javascripts/jquery.easy-pie-chart.js"></script>
<script src="javascripts/excanvas.min.js"></script>
<script src="javascripts/jquery.isotope.min.js"></script>
<script src="javascripts/select2.js"></script>
<script src="javascripts/styleswitcher.js"></script>
<script src="javascripts/main.js"></script>
<script>
function validateForm()
{
 
 
 var b=document.forms["login"]["email"].value;
 var emailvalid = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
if (b==null || b=="")
  {
  alert("Oops! Did You forget Your Mail Id!!!");
  return false;
  }
  var atpos=b.indexOf("@");
var dotpos=b.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
  var a=document.forms["login"]["Password"].value;
if (a==null || a=="")
  {
  alert("Oops! Did You forget Your Password!!!");
  return false;
  }
  

}
</script>
<meta content="width=device-width, initial-scale=1.0" charset="utf-8" name="viewport"/>
</head>
<body>




<div class="container-fluid">
<div class="login">
<div class="login-container">
</br>
</br>
</br>
</br>
<h1 height="30">Campaign Search</h1>
<?php if (!empty($message)) {
echo "<form class=\"form-signin\">
	      <div class=\"uniformjs\">
	      <h5 class=\"glyphicons form-signin-heading user_add\">" . $message . "<i></i></h5>
	      </div>
	   </form>";} 
	   ?>	
<form name="login" class="form-signin" action="" method="post"  autocomplete="off" onsubmit="return validateForm()">
<div class="form-group">
<div class="input-group">
<span class="input-group-addon">
<i class="icon-envelope"></i></span><input class="form-control" id ="email" name="email" placeholder="Email" type="text"/>
</div>
</div>
<div class="form-group">
<div class="input-group">
<span class="input-group-addon"><i class="icon-lock"></i></span>
<input class="form-control" placeholder="Password" id="Password" name="Password" type="password"/>
</div>
</div>
<div class="form-group"></div>
<button class="btn btn-lg btn-primary login-submit" type="submit" name="submit">Login</button>
</form>
<a href="#">Forgot password?</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="signup.php">If not Click Here!</a>
</div>
</div>




</div>
</body>
</html>