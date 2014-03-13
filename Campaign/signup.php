<?php
   include_once("includes/form_functions.php");
$con=mysqli_connect("localhost","root","","search_db");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if($con){
   if (isset($_POST['submit'])) 
   { $errors = array();
	
    // perform validations on the form data
		$required_fields = array('Name', 'email', 'password', 'confirm_password');
		$errors = array_merge($errors, check_required_fields($required_fields, $_POST));

		$fields_with_lengths = array('Name'=>30, 'email'=>40, 'password'=>40,'confirm_password'=>40);
		//$errors = array_merge($errors, check_max_field_lengths($fields_with_lengths, $_POST));
   
   $name   = trim(mysqli_real_escape_string($con, $_POST['Name']));
   $email   =trim(mysqli_real_escape_string($con, $_POST['email']));
   $pwd     =trim(mysqli_real_escape_string($con, $_POST['password']));
   $cpwd    = trim(mysqli_real_escape_string($con, $_POST['confirm_password']));
     
   
 $sql = "INSERT INTO CS_user (Name, Mail_Id, Password)
         VALUES ('$name','$email','$pwd')";
 $res = mysqli_query($con, $sql) or die('Error:'.mysql_error());
 if (($res))
   {
      $message = "User Registered successfully.";
   }
   else{
        redirect_to("signup.php?message='{$message}'");
	}
   }
   }
   else{
	echo 'Unable to connect. Details: '.mysqli_connect_error();
       }
	   mysqli_close($con);
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
var a=document.forms["signup"]["Name"].value;
if (a==null || a=="")
  {
  alert("Oops! Did You forget Your Name!!!");
  return false;
  }
 
 var b=document.forms["signup"]["email"].value;
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

var c=document.forms["signup"]["password"].value;
if (c==null || c=="")
  {
  alert("Oops! Password is compulsory!!!");
  return false;
  }
  
  var d=document.forms["signup"]["confirm_password"].value;
if (d==null || d=="")
  {
  alert("Oops! All the fields are compulsory!!!");
  return false;
  }
  if(d!=c)
  {
  alert("Your Pasword Does'nt Match Dude!")
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
<h1 alt="logo" height="30">Campaign Search</h1>
<?php if (!empty($message)) {echo "<form class=\"form-signin\">
	      <div class=\"uniformjs\">
	      <h5 class=\"glyphicons form-signin-heading user_add\">" . $message . "<i></i></h5>
	      </div>
	   </form>";} ?>	

<form name="signup" class="form-signin" action="signup.php" method="post"  autocomplete="off" onsubmit="return validateForm()">
<div class="form-group">
<div class="input-group">
<span class="input-group-addon">
<i class="icon-user"></i></span><input class="form-control" placeholder="Name" id="Name" name="Name" type="text"/>
</div>
</div>
<div class="form-group">
<div class="input-group">
<span class="input-group-addon"><i class="icon-envelope"></i></span>
<input class="form-control" placeholder="MailId" id="email" name="email" type="MailId"/>
</div>
</div>
<div class="form-group">
<div class="input-group">
<span class="input-group-addon"><i class="icon-lock"></i></span>
<input class="form-control" placeholder="Password" id="password" name="password" type="password"/>
</div>
</div>
<div class="form-group">
<div class="input-group">
<span class="input-group-addon"><i class="icon-check-sign"></i></span>
<input class="form-control" placeholder="Re-Type Password" id="confirm_password" name="confirm_password" type="password"/>
</div>
</div>
<div class="form-group"></div>
<button class="btn btn-lg btn-primary login-submit" type="submit" name="submit">Register </button>
</form>
<a href="#">Forgot password?</a>&nbsp &nbsp &nbsp &nbsp <a href="index.php">Login Here!</a>
</div>
</div>




</div>
</body>
</html>