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
    table {
        border-spacing: 0;
        border-collapse: collapse;
        min-width: 900px;
        margin-top: 8px;
    }
	.table-bordered {
		border: 1px solid #808080;
		table-layout: fixed;
		}
	td {
		border: 1px solid #808080;
        padding: 8px;
		}
    th {
        padding: 8px;
    }
    .align-right {
        text-align: right;
    }
    .align-left {
        text-align: left;
        }
</style>
</head>
<body>
    <div class="container">
        <h2>Email up to 10 of your friends a personalized event invitation!</h2>
        <form method=GET action="invite.php">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th> </th>
                    <th class="align-left" colspan="2">Your Information:</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td class="align-center"> </td>
	            <td class="align-right">Your Name: </td>
                <td><input type='text' size='30' name='sender_name' value='<?php 
                    if (isset($_GET['sender_name'])) { echo $_GET['sender_name']; } ?>' />
                </td>
                <td class="align-right">Your Email Address: </td>
                <td><input type='text' size='30' name='sender_email' value='<?php 
                    if (isset($_GET['sender_email'])) { echo $_GET['sender_email']; } ?>' />
                </td>
            </tr>
            <tr>
                    <th> </th>
                    <th class="align-left" colspan="2">Your Event Information:</th>
                    <th colspan="2"></th>
                </tr>
            <tr>
                <td class="align-center"> </td>
	            <td class='align-right'>Name of Party: </td>
                <td><input type='text' size='30' name='party_name' value='<?php 
                if (isset($_GET['party_name'])) { echo $_GET['party_name']; } ?>' />
                </td>
                <td class='align-right'>Date of Event: </td>
                <td><input type='datetime-local' name='date_time' value='<?php 
                if (isset($_GET['date_time'])) { echo $_GET['date_time']; } ?>' />
                </td>
            </tr>
                <tr>
                    <td class="align-center"> </td>
                    <td class="align-right">Event Street Address:</td>
                    <td><input type='text' size='30' name='street_address' value='<?php 
                    if (isset($_GET['street_address'])) { echo $_GET['street_address']; } ?>' />
                    </td>
                    <td class="align-right">Event City, State, Zip</td>
                    <td><input type='text' size='15' name='event_city' value='<?php 
                    if (isset($_GET['event_city'])) { echo $_GET['event_city']; } ?>' />
                    <select>
                        <option value="">Select State...</option>
                        <option value="AL">Alabama</option>
	                    <option value="AK">Alaska</option>
	                    <option value="AZ">Arizona</option>
	                    <option value="AR">Arkansas</option>
	                    <option value="CA">California</option>
	                    <option value="CO">Colorado</option>
	                    <option value="CT">Connecticut</option>
	                    <option value="DE">Delaware</option>
	                    <option value="DC">District Of Columbia</option>
	                    <option value="FL">Florida</option>
	                    <option value="GA">Georgia</option>
	                    <option value="HI">Hawaii</option>
	                    <option value="ID">Idaho</option>
	                    <option value="IL">Illinois</option>
	                    <option value="IN">Indiana</option>
	                    <option value="IA">Iowa</option>
	                    <option value="KS">Kansas</option>
	                    <option value="KY">Kentucky</option>
	                    <option value="LA">Louisiana</option>
	                    <option value="ME">Maine</option>
	                    <option value="MD">Maryland</option>
	                    <option value="MA">Massachusetts</option>
	                    <option value="MI">Michigan</option>
	                    <option value="MN">Minnesota</option>
	                    <option value="MS">Mississippi</option>
	                    <option value="MO">Missouri</option>
	                    <option value="MT">Montana</option>
	                    <option value="NE">Nebraska</option>
	                    <option value="NV">Nevada</option>
	                    <option value="NH">New Hampshire</option>
	                    <option value="NJ">New Jersey</option>
	                    <option value="NM">New Mexico</option>
	                    <option value="NY">New York</option>
	                    <option value="NC">North Carolina</option>
	                    <option value="ND">North Dakota</option>
	                    <option value="OH">Ohio</option>
	                    <option value="OK">Oklahoma</option>
	                    <option value="OR">Oregon</option>
	                    <option value="PA">Pennsylvania</option>
	                    <option value="RI">Rhode Island</option>
	                    <option value="SC">South Carolina</option>
	                    <option value="SD">South Dakota</option>
	                    <option value="TN">Tennessee</option>
	                    <option value="TX">Texas</option>
	                    <option value="UT">Utah</option>
	                    <option value="VT">Vermont</option>
	                    <option value="VA">Virginia</option>
	                    <option value="WA">Washington</option>
	                    <option value="WV">West Virginia</option>
	                    <option value="WI">Wisconsin</option>
	                    <option value="WY">Wyoming</option>
                    </select>
                    </td>
                </tr>
            </tbody>
        </table>
        </form>
    </div>
</body>
</html>
