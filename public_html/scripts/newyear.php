<?php 
	$retreat = "New Year Retreat. The Wolf You Feed 12/30/15 - 1/1/15";
?>
<html>	
	<link rel="stylesheet" href="../css/style.css" />
	<link rel="stylesheet" href="../css/signup.css" />
	<body class="signup">
  	<div class="content">
			<?php 
      if ($_POST["email"]<>'') { 
        $ToEmail = 'hrcenter@earthlink.net'; 
        $EmailSubject = 'Registration for '. $retreat; 
        $mailheader = "From: webmaster@hsrcenter.com"."\r\n"; 
        $mailheader .= "Reply-To: donotreply@hsrcenter.com"."\r\n"; 
        $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
        $MESSAGE_BODY = '<strong>Registration for '. $retreat .'</strong><br/><br/>'; 
        $MESSAGE_BODY .= "<strong>Name:</strong> ".$_POST["name"]."<br>"; 
        $MESSAGE_BODY .= "<strong>Email:</strong> ".$_POST["email"]."<br>"; 
        $MESSAGE_BODY .= "<strong>Phone Number:</strong> ".$_POST["number"]."<br>"; 
        $MESSAGE_BODY .= "<strong>Street Address:</strong> ".$_POST["street"]."<br>";
        $MESSAGE_BODY .= "<strong>City:</strong> ".$_POST["city"]."<br>";  
        $MESSAGE_BODY .= "<strong>State:</strong> ".$_POST["state"]."<br>"; 
        $MESSAGE_BODY .= "<strong>Zip Code:</strong> ".$_POST["zip"]."<br>"; 
        $MESSAGE_BODY .= "<strong>Room Type:</strong> ".$_POST["room"]."<br>";
        mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
      ?> 		
      <div id="events-returnpg">
        Your Registration has been turned in and will be processed soon.<br />
        A $30 non-refundable deposit is due by December 27.<br /><br />
        <b>Thank you for registering for <?php echo $retreat; ?></b>
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
        <img src="../img/events/2015/december/wolf/wolf.gif" width="600" height="453" />
      </div> 
      <form action="newyear.php" method="post">
        <table border="0" id="events-table">
          <tr>
            <td class="name">
              <label>Name</label>
              <input name="name" type="text" id="name">
            </td>
          </tr>
          <tr>
            <td class="address">
              <label>Street Address</label>
              <input name="street" type="text" id="street">
            </td>
          </tr>
          <tr>
            <td class="city-state-zip">
              <label>City</label> <input name="city" type="text" id="city">
            </td>
          </tr>
          <tr>
            <td class="city-state-zip">
              <label>State</label> <input name="state" type="text" id="state">
            </td>
          </tr>
          <tr>
            <td class="city-state-zip">
              <label>Zip Code</label> <input name="zip" type="text" id="zip">
            </td>
          </tr>
          <tr>
            <td class="email">
              <label>Email address</label> <input name="email" type="text" id="email">
            </td>
          </tr>
          <tr>
            <td class="phonenumber">
              <label>Phone Number</label> <input name="number" type="text" id="number">
            </td>
          </tr>
          <tr>
            <td class="options">
              <label>Room Type?</label>
              <input name="room" type="radio" value="Single"> <p>Single</p>
              <input name="room" type="radio" value="Shared"> <p>Shared</p>
              <input name="room" type="radio" value="Commuter"> <p>Commuter</p>
            </td>
          </tr>
          <tr>
            <td valign="top">
              <input type="submit" name="Submit" value="Register!">
            </td>
          </tr>
        </table>
      </form>
      <?php 
      }; 
      ?>
    </div>
	</body>
</html>