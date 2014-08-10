<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Email Invite</title>
</head>

<body>
<form method=GET action="invite.php">
<h2>Email up to 10 of your friends a personalized party invitation!</h2>
<table>
<?php for($i = 1; $i <= 10; $i++) { ?>
  <tr>
  	<td align='right'><?php echo $i ?>. </td>
		<td align='right'>Name: </td>
    <td align='left'><input type='text' size='25' name='name' value='<?php 
    if (isset($_GET['name'])) { echo $_GET['name']; } ?>
    ' /></td>
    <td align='right'>Email: </td>
    <td align='left'><input type='text' size='25' name='name' value='<?php
		if (isset($_GET['email'])) { echo $_GET['email']; } ?>
		'/></td>
    </tr>
<?php }; ?>
  <tr></tr>
  <tr>
  	<td colspan='4' align='center'><input type='submit' value='SUBMIT' /></td>
  </tr>
</table>
</form>
</body>
</html>