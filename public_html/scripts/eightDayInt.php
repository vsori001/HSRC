<html>	
	<link rel="stylesheet" href="../css/style.css" />
	<body id="leaves" class="php-body">
		<?php 
		if ($_POST["email"]<>'') { 
			$ToEmail = 'hsrcenter@earthlink.net'; 
			$EmailSubject = 'Registration for the 8-Day Intensive Centering Prayer Retreat 6/28/15 - 7/5/15'; 
			$mailheader = "From: ".$_POST["email"]."\r\n"; 
			$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
			$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
			$MESSAGE_BODY = "Name: ".$_POST["name"]."<br>"; 
			$MESSAGE_BODY .= "Email: ".$_POST["email"]."<br>"; 
			$MESSAGE_BODY .= "Phone Number: ".$_POST["number"]."<br>"; 
			$MESSAGE_BODY .= "Street Address: ".$_POST["street"]."<br>";
			$MESSAGE_BODY .= "City: ".$_POST["city"]."<br>";  
			$MESSAGE_BODY .= "State: ".$_POST["state"]."<br>"; 
			$MESSAGE_BODY .= "Zip Code: ".$_POST["zip"]."<br>"; 
			mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
		?> 		
		<div class="events-bodytext" id="events-returnpg">
			Your Registration has been turned in and will be processed soon.<br />
			A $50 deposit is due by June 1, 2015.<br /><br />
			<b>Thank you for registering for the 8-Day Intensive Centering Prayer Retreat.</b><br /><br />
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
			8-Day Intensive<br/>
      Centering Prayer Retreat<br />
			June 28, 2015 5:00pm -<br />
			July 5, 2015 1:00pm<br />
      $500 for private room
		</div>
		<form action="eightDayInt.php" method="post" id="events-form-weekend">
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