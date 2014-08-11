<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
		* {
			margin: 0;
			padding: 0;
	}
	.container {
		width: 900px;
		margin: 0 auto;
		}
	.row {
		/*border: 1px solid #000;*/
		height: 35px;
		}
	.column {
		/*border: 1px solid #000;*/
		padding: 5px 5px 5px 5px;
		width: 160px;
		float: left;
		}
	.align-right {
		text-align: right;
		}
	input {
		height: 20px;
		}
</style>
</head>

<body>
<div class="container">
	<div class="row row1">
  	<div class="column align-right">
    Your Name: 
    </div>
    <div class="column">
    <input type='text' size='20' name='sender_name' value='<?php 
    if (isset($_GET['sender_name'])) { echo $_GET['sender_name']; } ?>' />
    </div>
    <div class="column align-right">
    Your Email Address: 
    </div>
    <div class="column">
    <input type='text' size='20' name='sender_email' value='<?php 
    if (isset($_GET['sender_email'])) { echo $_GET['sender_email']; } ?>' />
    </div>
    <div class="column">
    </div>
  </div>
  <div class="row row2">
  	<div class="column align-right">
    	Name of Party: 
    </div>
    <div class="column">
    <input type='text' size='20' name='party_name' value='<?php 
    if (isset($_GET['party_name'])) { echo $_GET['party_name']; } ?>' />
    </div>
    <div class="column align-right">
    Date and Time of Party: 
    </div>
    <div class="column">
    <input type='datetime-local' size='20' name='date_time' value='<?php 
    if (isset($_GET['date_time'])) { echo $_GET['date_time']; } ?>' />
    </div>
  </div>
</div>
</body>
</html>