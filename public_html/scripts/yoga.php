<html>	
	<link rel="stylesheet" href="../css/style.css" />
	<body id="leaves" class="php-body">
		<?php 
		if ($_POST["email"]<>'') { 
			$ToEmail = 'hsrcenter@earthlink.net'; 
			$EmailSubject = 'Registration for Laughter Yoga'; 
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
			$MESSAGE_BODY .= "Dates: ";
			$MESSAGE_BODY .= "<br>".$_POST["apr2"]." ".$_POST["apr9"]." ".$_POST["apr16"]." ".$_POST["apr23"]." ".$_POST["apr30"]." ".$_POST["may7"]." ";
			
			mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
		?> 		
		<div class="events-bodytext" id="events-returnpg">
			Your Registration has been turned in and will be processed soon.<br /><br />
			<b>Thank you for registering for Laughter Yoga.</b><br /><br />
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
			Laughter Yoga<br />
            <?php if( time() < strtotime("04/02/14") ){ 
							echo "April 2,";
						} ?>
            <?php if( time() < strtotime("04/09/14") ){ 
							echo "9,";
						} ?>
            <?php if( time() < strtotime("04/16/14") ){ 
							echo "16,";
						} ?>
            <?php if( time() < strtotime("04/23/14") ){ 
							echo "23,";
						} ?>
            <?php if( time() < strtotime("04/30/14") ){ 
							echo "30,";
						} ?>
            <?php if( time() < strtotime("05/07/14") ){ 
							echo "May 7<br/>";
						} 
						else{
							echo "";
						}?>
			$15 per session
		</div>
		<form action="yoga.php" method="post" id="events-form-weekend">
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
						What dates would you like to sign up for?<br/>
            <?php if( time() < strtotime("04/02/14") ){ 
							echo "<input type=\"checkbox\" name=\"apr2\" value=\"April 2\" />April 2<br/>";
						} ?>
            <?php if( time() < strtotime("04/09/14") ){ 
							echo "<input type=\"checkbox\" name=\"apr9\" value=\"April 9\" />April 9<br/>";
						} ?>
            <?php if( time() < strtotime("04/16/14") ){ 
							echo "<input type=\"checkbox\" name=\"apr16\" value=\"April 16\" />April 16<br/>";
						} ?>
            <?php if( time() < strtotime("04/23/14") ){ 
							echo "<input type=\"checkbox\" name=\"apr23\" value=\"April 23\" />April 23<br/>";
						} ?>
            <?php if( time() < strtotime("04/30/14") ){ 
							echo "<input type=\"checkbox\" name=\"apr30\" value=\"April 30\" />April 30<br/>";
						} ?>
            <?php if( time() < strtotime("05/07/14") ){ 
							echo "<input type=\"checkbox\" name=\"may7\" value=\"May 7\" />May 7<br/>";
						} 
						else{
							echo "All Dates for Laughter Yoga have passed.";
						}?>
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