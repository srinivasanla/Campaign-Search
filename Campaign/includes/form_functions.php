<?php

function mail1($name,$addr,$cluster,$event)
{
					//redirect_to("test_smtp_gmail_basic.php");
			error_reporting(E_STRICT);

			date_default_timezone_set('India/Chennai');

			require_once('class.phpmailer.php');
			//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

			$mail             = new PHPMailer();

			$body             = ("You are successfully registered  for the event: {$event} under the cluster: {$cluster}. For more details please contact the respective event organisers. Thank you for the interest shown.");
			//$body             = eregi_replace("[\]",'',$body);
			$mail->IsSMTP(); // telling the class to use SMTP
			$mail->Host       = "mail.yourdomain.com"; // SMTP server
			//$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
													   // 1 = errors and messages
													   // 2 = messages only
			$mail->SMTPAuth   = true;                  // enable SMTP authentication
			$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
			$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
			$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
			$mail->Username   = "thetav3.0@gmail.com";  // GMAIL username
			$mail->Password   = "thetasrc";            // GMAIL password

			$mail->SetFrom('thetav3.0@gmail.com', 'Theta_WebTeam');

			$mail->AddReplyTo("thetav3.0@gmail.com","Theta_WebTeam");

			$mail->Subject    = "Kudos! Event Registration was Successful";

			$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

			$mail->MsgHTML($body);

			
			$mail->AddAddress($addr, $name);

			//$mail->AddAttachment("images/phpmailer.gif");      // attachment
			//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment


			if($mail->Send()) 
			{
			 echo "Mailer Error: " . $mail->ErrorInfo;
			} else  echo "Message sent!";
}
function mail2($addr,$cluster,$event)
{
					//redirect_to("test_smtp_gmail_basic.php");
			error_reporting(E_STRICT);

			date_default_timezone_set('India/Chennai');

			require_once('class.phpmailer.php');
			//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

			$mail             = new PHPMailer();

			$body             = ("You are successfully registered  for the Online event of Trezack.\nMake a note of your details. \n\nTeam name: {$cluster} and password: {$event}. \n\nFor more details please contact the respective event organizer. Thank you for the interest shown.");
			//$body             = eregi_replace("[\]",'',$body);
			$mail->IsSMTP(); // telling the class to use SMTP
			$mail->Host       = "mail.yourdomain.com"; // SMTP server
			//$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
													   // 1 = errors and messages
													   // 2 = messages only
			$mail->SMTPAuth   = true;                  // enable SMTP authentication
			$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
			$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
			$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
			$mail->Username   = "thetav3.0@gmail.com";  // GMAIL username
			$mail->Password   = "thetasrc";            // GMAIL password

			$mail->SetFrom('thetav3.0@gmail.com', 'Theta_WebTeam');

			$mail->AddReplyTo("thetav3.0@gmail.com","Theta_WebTeam");

			$mail->Subject    = "Kudos! Team Registration was Successful";

			$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

			$mail->MsgHTML($body);

			
			$mail->AddAddress($addr, $cluster);

			//$mail->AddAttachment("images/phpmailer.gif");      // attachment
			//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment


			if($mail->Send()) 
			{
			 echo "Mailer Error: " . $mail->ErrorInfo;
			} else  echo "Message sent!";
}
function mail3($addr,$cluster,$event)
{
					//redirect_to("test_smtp_gmail_basic.php");
			error_reporting(E_STRICT);

			date_default_timezone_set('India/Chennai');

			require_once('class.phpmailer.php');
			//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

			$mail             = new PHPMailer();

			$body             = ("You are successfully registered  for the Online event Enigma+.\nMake a note of your details. \n\nUsername: {$cluster} and password: {$event}. \n\nFor more details please contact the respective event organizer. Thank you for the interest shown.");
			//$body             = eregi_replace("[\]",'',$body);
			$mail->IsSMTP(); // telling the class to use SMTP
			$mail->Host       = "mail.yourdomain.com"; // SMTP server
			//$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
													   // 1 = errors and messages
													   // 2 = messages only
			$mail->SMTPAuth   = true;                  // enable SMTP authentication
			$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
			$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
			$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
			$mail->Username   = "thetav3.0@gmail.com";  // GMAIL username
			$mail->Password   = "thetasrc";            // GMAIL password

			$mail->SetFrom('thetav3.0@gmail.com', 'Theta_WebTeam');

			$mail->AddReplyTo("thetav3.0@gmail.com","Theta_WebTeam");

			$mail->Subject    = "Kudos! Enigma+ User Registration was Successful";

			$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

			$mail->MsgHTML($body);

			
			$mail->AddAddress($addr, $cluster);

			//$mail->AddAttachment("images/phpmailer.gif");      // attachment
			//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment


			if($mail->Send()) 
			{
			 echo "Mailer Error: " . $mail->ErrorInfo;
			} else  echo "Message sent!";
}

function check_required_fields($required_array) {
	$field_errors = array();
	foreach($required_array as $fieldname) {
		if (!isset($_POST[$fieldname]) || (empty($_POST[$fieldname]) && $_POST[$fieldname] != 0)) { 
			$field_errors[] = $fieldname; 
		}
	}
	return $field_errors;
}

/*function check_max_field_lengths($field_length_array) {
	$field_errors = array();
	foreach($field_length_array as $fieldname => $maxlength ) {
		if (strlen(trim(mysql_prep($_POST[$fieldname]))) > $maxlength) { $field_errors[] = $fieldname; }
	}
	return $field_errors;
}*/

function display_errors($error_array) {
	echo "<p class=\"errors\">";
	echo "Please review the following fields:<br />";
	foreach($error_array as $error) {
		echo " - " . $error . "<br />";
	}
	echo "</p>";
}

?>