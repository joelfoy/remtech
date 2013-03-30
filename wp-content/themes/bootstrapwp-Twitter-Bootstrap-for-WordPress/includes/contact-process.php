<?php // Start Form Process

// Validate Email Function
function validateEmail($email)
{  
	return ereg("^[a-zA-Z0-9]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$", $email);  
}


if (isset($_POST['why']))	{
	
	// Create Error Array
	$errors = array();
	
	// Post Variables
	$why = filter_var($_POST['why'], FILTER_SANITIZE_STRING);
	$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
	$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
	$refer = filter_var($_POST['refer'], FILTER_SANITIZE_STRING);
	$subject = "Remtech Contact Form";
	$to = "joelfoy@gmail.com";
		
		// reply message vars
		$replyTo = $email;	
		$replySubject = "Remtech Form Submission";
		$extras = "From: Remtech <info@remtech.us> \r\n";
		$extras .= "Content-Type: text/html\n";
		
	// Tests - Post Variable
	if ($name == "") {
		$errors['name'] = "Name is required";
	}
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors['email'] = "A valid email is required";
	}
	if ($message == "") {
		$errors['message'] = "Please enter a message";
	}
	
	if (count($errors) > 0) {
		foreach ($error as $key => $value) {
			echo "$key </br>"; 
		}
	  // end if count		
	} else {
		// Build Message
		$emessage = "Name: $name\n\n";
		$emessage .= "Email: $email\n\n";
		$emessage .= "Referred site: $refer\n\n";
		$emessage .= "Message: \n\n $$message";
		
		// Build reply message
		$replyMessage = "<html>";
			$replyMessage .= "<body>";
			$replyMessage .= "<table cellspacing='0' cellpadding='0' width='650' style='font-family:sans-serif;'>";
			$replyMessage .= "<tr>";
			$replyMessage .= "<td>";
			$replyMessage .= "<table cellpadding='0' cellspacing='0' width='650'>";
			$replyMessage .= "<tr style='padding-top:5px;'>";
			$replyMessage .= "<td style='padding:10px 0 10px 20px' width='100'><img src='http://remtech.us/mailer/images/remtech-logo-small.png'</td>";
			$replyMessage .= "<td style='font-family:sans-serif; font-weight:bold; font-size:22px; color:#444;  padding:5px 0 0 10px;' valign='middle'>Contact Form</td>";
			$replyMessage .= "</tr></table></td></tr><tr>";
			$replyMessage .= "<table cellpadding='0' cellspacing='0' width='650' style='font-family:sans-serif;' >";
			$replyMessage .= "<tr style=''>";
			$replyMessage .= "<td style='padding:25px 0 20px 20px; font-size:24px;'><strong>Thanks</strong> $name!</td>";
			$replyMessage .= "</tr><tr>";
			$replyMessage .= "<td style='padding:0 0 20px 20px'><p style='line-height:20px;'>Thank you for contacting Remtech. We take every message seriously and know that your time is important. A Remtech representative will contact you as soon as possible. </p>";
			$replyMessage .= "</td></tr><tr>";
			$replyMessage .= "<td style='padding:0 0 10px 20px'><p style='font-size:20px;'>Thank you</p>";
			$replyMessage .= "</td></tr></table></tr><tr><td>";
			$replyMessage .= "<table cellpadding='0' cellspacing='0' width='650'>";
			$replyMessage .= "<tr style='background-color:#ccc; padding-top:5px;'>";
			$replyMessage .= "<td style='font-family:sans-serif; font-size:11px; color:#444;  padding:5px 0 5px 10px;' valign='middle'>&copy; Remtech - Atlanta, GA</td>";
			$replyMessage .= "</tr></table></td></tr></table>";
			$replyMessage .= "</body>";
			$replyMessage .= "</html>";
			
		// Send reply message first
		$contactReplyMessage = mail($replyTo, $replySubject, $replyMessage, $extras);
		
		if ($contactReplyMessage) {
			// Send notification email to info@remtech.us
			$mailSent = mail($to, $subject, $emessage);
		}
		
		// Final Check
		if ($mailSent) {
			echo "<h1>Success</h1>";
			echo "$why $name $email $message $refer";
		} else {
			echo "<h1>Failure</h1>";
			exit();
		} 
		
		
	} // end else
	
} else { ?>
<h1>You do not have access</h1>
<?php } 

// end Script	?> 