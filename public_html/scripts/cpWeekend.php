<html>	
	<head>
		<link rel="stylesheet" href="../css/style.css" />
    <title>Centering Prayer Weekend Retreat</title>
  </head>
	<body id="leaves" class="php-body">
		<?php 
		if ($_POST["email"]<>'') { 
			$ToEmail = 'hsrcenter@earthlink.net'; 
			$EmailSubject = 'Registration for Centering Prayer Weekend Retreat 10/23/15 - 10/25/15'; 
        $mailheader = "From: webmaster@hsrcenter.com"."\r\n"; 
			$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
			$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
			$MESSAGE_BODY = "Name: ".$_POST["name"]."<br>"; 
			$MESSAGE_BODY .= "Email: ".$_POST["email"]."<br>"; 
			$MESSAGE_BODY .= "Phone Number: ".$_POST["number"]."<br>"; 
			$MESSAGE_BODY .= "Street Address: ".$_POST["street"]."<br>";
			$MESSAGE_BODY .= "City: ".$_POST["city"]."<br>";  
			$MESSAGE_BODY .= "State: ".$_POST["state"]."<br>"; 
			$MESSAGE_BODY .= "Zip Code: ".$_POST["zip"]."<br>"; 
			$MESSAGE_BODY .= "Private, Shared, Commuter?: ".$_POST["room"]."<br>";
			mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
		?> 		
		<div class="events-bodytext" id="events-returnpg">
			Your Registration has been turned in and will be processed soon.<br />
			A $30 deposit is due by October 5, 2015.<br /><br />
			<b>Thank you for registering for the Centering Prayer Weekend Retreat.</b><br /><br />
			<img src="../img/grounds_sized_small.jpg" alt="parking" /><br /><br />
			<font face="SymbolSignsBasisset">L</font>
			<a class="no-under" href="javascript: window.close()" class="bodytext">
				Go back to the Calendar
			</a>
		</div>
		<?php 
		} else { 
		?>  		
		<div id="php-header-intro">
			Centering Prayer Weekend Retreat<br />
			October 23, 2015 5:00pm -<br />
			October 25, 2015 1:00pm<br />
		</div>
		<form action="cpWeekend.php" method="post" id="events-form-weekend">
			<table width="450" border="0" cellpadding="3" id="events-table">
				<tr>
					<td class="events-bodytext">
						Name
						<input name="name" type="text" id="name" size="32">
					</td>
				</tr>
				<tr>
					<td class="events-bodytext">
						Email address
						<input name="email" type="text" id="email" size="32">
					</td>
				</tr>
				<tr>
					<td class="events-bodytext">
						Phone Number <input name="number" type="text" id="number" size="11">
					</td>
				</tr>
				<tr>
					<td class="events-bodytext">
						Street Address
						<input name="street" type="text" id="street" size="32">
					</td>
				</tr>
				<tr>
					<td class="events-bodytext">
						City <input name="city" type="text" id="city" size="20">
						State <input name="state" type="text" id="state" size="4">
						Zip Code <input name="zip" type="text" id="zip" size="5">
					</td>
				</tr>
				<tr>
					<td class="events-bodytext">
						What type of registration would you like to sign up for?<br/>
						<input name="room" type="radio" value="Private Room">Private Room ($275)<br/>
						<input name="room" type="radio" value="Shared Room">Shared Room ($225/person)<br/>
						<input name="room" type="radio" value="Commuter">Commuter ($150)
					</td>
				</tr>
				<tr>
					<td align="left" valign="top">
						<input type="submit" name="Submit" value="Register!">
					</td>
				</tr>
			</table>
			</form> 
		<?php 
		}; 
		?>
	</body>
</html>