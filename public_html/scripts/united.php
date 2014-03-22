<html>	
	<link rel="stylesheet" href="../css/style.css" />
	<body id="leaves">
		<?php 
		if ($_POST["email"]<>'') { 
			$ToEmail = 'hsrcenter@earthlink.net'; 
			$EmailSubject = 'Registration for United Day of Prayer 3/24/12'; 
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
			$MESSAGE_BODY .= "Lunch: ".$_POST["lunch"]."<br>";
			mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
		?> 		
		<div class="events-bodytext" id="events-returnpg">
			Your Registration has been turned in and will be processed soon.<br />
			Free will Offering.<br />
			Registration requested by March 17<br /><br />
			<b>Thank you for registering for our United Day of Prayer</b>
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
			United Day of Prayer<br />
			Contemplative Outreach<br />
			and The World Community<br />
			for Christian Meditation<br />
			March 10, 2012 9:00am - 3:30pm<br />
			$10 lunch<br />
		</div> 
		<div class="events-form-wrapper">
			<form action="united.php" method="post" id="events-form-lunch">
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
							Would you like lunch?
							Yes<input name="lunch" type="radio" value="yes">
							No<input name="lunch" type="radio" value="no">
						</td>
					</tr>
					<tr>
						<td align="left" valign="top">
							<input type="submit" name="Submit" value="Register!">
						</td>
					</tr>
				</table>
			</form>
		</div> 
		<?php 
		}; 
		?>
	</body>
</html>