<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP EMAIL INVITE PROGRAM</title>
    <style>
    * {
        margin: 0;
        padding: 0;
     }
     body {
         font-family: Verdana, sans-serif;
         font-size: .8em;
        }
     h2 {
         margin-top: 15px;
         text-align: center;
     }
	.container {
			margin: 0 auto;
			width: 900px;
		}
    .invite-container {
			border: 1px solid #518A93;
			padding: 10px 15px;
			}
</style>
</head>
<body>
<?php
/**********
File: invite.php
Description: Code behind for php-email-invite form
Developer: Katherine L. Hambley
Date created: August 24, 2014
***********/

function mail_message($data_array, $template_file) {
	
	#get template contents, and replace variables with data
	for ($i = 1; $i <= 10; $i++) {
		
		$email_message = file_get_contents($template_file);
		$email_message = str_replace("#recipient_name#", $data_array['recipient_name'.$i], $email_message);
		$email_message = str_replace("#party_name#", $data_array['party_name'], $email_message);
		$email_message = str_replace("#date_time#", $data_array['date_time'], $email_message);
		$email_message = str_replace("#address#", $data_array['street_address']." ".$data_array['event_city'].", ".$data_array['event_state']." ".$data_array['event_zip'], $email_message);
		$email_message = str_replace("#attire#", $data_array['attire'], $email_message);
		
		if (isset($data_array['include_RSVP'])) {
			$email_message = str_replace("#deadline#", $data_array['RSVP_deadline'], $email_message);
	  } else {
			$email_message = str_replace("#deadline#", "Not Applicable", $email_message);	
		}
		
		$email_message = str_replace("#sender_email#", $data_array['sender_email'], $email_message);
		$email_message = str_replace("#sender_name#", $data_array['sender_name'], $email_message);
		
		#construct the email headers
		
		$to = $data_array['recipient_email'.$i];
		
		/*if (preg_match("/[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/", $to)) {
			echo "valid email address";
		} else {
			echo "not a valid email address";
		}*/
		$from = $data_array['sender_email'];
		$email_subject = "You've been invited to an event!";
		
		#email the invitation
		mail($to, $email_subject, $email_message, "From: ". $from);
	}
}

#get user input from the form

mail_message($_GET, "email_template.txt");

?>
<div class="container">
	<h2>Thank you! Your invitation is on it's way!</h2><br />
  <h3>Here is a listing of the valid email addresses you sent: </h3>
  <?php 
	for ($i = 1; $i <= 10; $i++) {
		$email = $_GET['recipient_email'.$i];
		if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo "<p style='color:green;'>".$email."<br />";
			}
	}
	?><br />
  <h3>Your invitation looks like this: </h3>
  <div class="invite-container">
  <p>Hello <?php if (isset($_GET['recipient_name1'])) { echo $_GET['recipient_name1']; } ?>! You are invited to be our guest<br />
	at the <?php if (isset($_GET['party_name'])) { echo $_GET['party_name']; } ?> event to be held on <?php if (isset($_GET['date_time'])) { echo $_GET['date_time']; } ?> and at<br />
  the following location, <?php if (isset($_GET['street_address']) && ($_GET['event_city']) && ($_GET['event_state']) && ($_GET['event_zip'])) { echo $_GET['street_address']." ".$_GET['event_city'].", ".$_GET['event_state']." ".$_GET['event_zip']; } ?><br />
  The attire is <?php if (isset($_GET['attire'])) { echo $_GET['attire']; } ?>. Please R.S.V.P by <?php if (isset($_GET['RSVP_deadline'])) { echo $_GET['RSVP_deadline']; } ?><br />
  by sending a message to <?php if (isset($_GET['sender_email'])) { echo $_GET['sender_email']; } ?>. We look forward to hosting this event!</p><br />
  <p>Sincerely,</p><br />
  <?php if (isset($_GET['sender_name'])) { echo $_GET['sender_name']; } ?><br />
  <?php if (isset($_GET['sender_email'])) { echo $_GET['sender_email']; } ?>
  </div>
</div>
</body>
</html>