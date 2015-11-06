<?php 
	$retreat = "The Art And Soul Of Journaling 10/03/15";
?>
<html>	
	<link rel="stylesheet" href="../css/style.css" />
	<link rel="stylesheet" href="../css/signup.css" />
	<body class="signup">
  	<div class="content">
			<?php 
      if ($_POST["email"]<>'') { 
        $ToEmail = 'hsrcenter@earthlink.net'; 
        $EmailSubject = 'Registration for '. $retreat; 
        $mailheader = "From: ".$_POST["email"]."\r\n"; 
        $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
        $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
        $MESSAGE_BODY = '<strong>Registration for '. $retreat .'</strong><br/><br/>'; 
        $MESSAGE_BODY .= "<strong>Name:</strong> ".$_POST["name"]."<br>"; 
        $MESSAGE_BODY .= "<strong>Email:</strong> ".$_POST["email"]."<br>"; 
        $MESSAGE_BODY .= "<strong>Phone Number:</strong> ".$_POST["number"]."<br>"; 
        $MESSAGE_BODY .= "<strong>Street Address:</strong> ".$_POST["street"]."<br>";
        $MESSAGE_BODY .= "<strong>City:</strong> ".$_POST["city"]."<br>";  
        $MESSAGE_BODY .= "<strong>State:</strong> ".$_POST["state"]."<br>"; 
        $MESSAGE_BODY .= "<strong>Zip Code:</strong> ".$_POST["zip"]."<br>"; 
        $MESSAGE_BODY .= "<strong>Lunch:</strong> ".$_POST["lunch"]."<br>";
        mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
      ?> 		
      <div id="events-returnpg">
        Your Registration has been turned in and will be processed soon.<br />
        A $10 deposit is due by September 25.<br /><br />
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
        <img src="../img/events/2015/october/journaling/journaling.jpg" alt="Saturday, October 3, 9:30a.m. - 3:30p.m. The Art And Soul Of Journaling. Journaling is a spiritual tool, a personal pen to paper pilgrimage that allows you to engage in self-discovery and put your feelings, wishes, and insights out where you can reflect on them. During this rich and illuminative workshop you will explore journaling as personal art and spend the day practicing a variety of journaling forms. Experienced &lsquo;journalers&rsquo; will enjoy learning new techniques and spending the day in a practice they love. Those new to journaling will take away a journal filled with insights and wisdom as well as tools to build a journaling practice. Interactive exercises, silence and new learning will fill the day and refresh your creative spirit. Please bring a journal or purchase one at the Holy Spirit Retreat Center Bookstore. There is a $5 materials fee for art supplies. Fee: $45.00 with lunch; $35.00 without lunch. Non-refundable Registration fee: $10.00 by Sept 25." width="600" height="505" />
      </div> 
      <form action="journaling.php" method="post">
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
              <label>Email address</label>
              <input name="email" type="text" id="email">
            </td>
          </tr>
          <tr>
            <td class="phonenumber">
              <label>Phone Number</label> <input name="number" type="text" id="number">
            </td>
          </tr>
          <tr>
            <td class="options">
              <label>Would you like lunch?</label>
              <p>Yes</p> <input name="lunch" type="radio" value="yes">
              <p>No</p> <input name="lunch" type="radio" value="no">
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