<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Email Invite</title>
<style>
	.container {
			margin: 0 auto;
			width: 900px;
		}
	table {
		border: 1px solid #000;
		table-layout: fixed;
		}
	td {
		/*border: 1px solid #000;*/
		}
</style>
</head>

<body>
<div class="container">
<form method=GET action="invite.php">
<h2>Email up to 10 of your friends a personalized party invitation!</h2>
<table>
<tr>
	<td align='right'>Your Name: </td>
  <td align='left'><input type='text' size='25' name='sender_name' value='<?php 
    if (isset($_GET['sender_name'])) { echo $_GET['sender_name']; } ?>' />
  </td>
  <td align='right'>Your Email Address: </td>
  <td align='left'><input type='text' size='25' name='sender_email' value='<?php 
    if (isset($_GET['sender_email'])) { echo $_GET['sender_email']; } ?>' />
  </td>
</tr>

<tr>
	<td align='right'>Name of Party: </td>
  <td align='left'><input type='text' size='25' name='party_name' value='<?php 
    if (isset($_GET['party_name'])) { echo $_GET['party_name']; } ?>' />
  </td>
</tr>
<?php for($i = 1; $i <= 10; $i++) { ?>
	
  <tr>
  	<td></td>
  	<td align='right'><?php echo $i ?>. </td>
		<td align='right'>Recipient Name: </td>
    <td align='left'><input type='text' size='25' name='recipient_name<?php echo $i ?>' value='<?php 
    if (isset($_GET['recipient_name'.$i])) { echo $_GET['recipient_name'.$i]; } ?>
    ' /></td>
    <td align='right'>Recipient Email: </td>
    <td align='left'><input type='text' size='25' name='recipient_email<?php echo $i ?>' value='<?php
		if (isset($_GET['recipient_email'.$i])) { echo $_GET['recipient_email'.$i]; } ?>
		'/></td>
  </tr>
<?php }; ?>
  <tr></tr>
  <tr>
  	<td colspan='5' align='center' width="100%"><input type='submit' value='SUBMIT' /></td>
  </tr>
</table>
</form>
</div>
</body>
</html>