<html>	
	<link rel="stylesheet" href="../css/style.css" />
	<link rel="stylesheet" href="../css/signup.css" />
	<body class="signup communication">
  	<div class="content">
			<?php 
      if ($_POST["email"]<>'') { 
        $ToEmail = 'hsrcenter@earthlink.net'; 
        $EmailSubject = 'Registration for Communication: The Key to Interpersonal Relationships 9/12/15'; 
        $mailheader = "From: ".$_POST["email"]."\r\n"; 
        $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
        $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
        $MESSAGE_BODY = '<strong>Registration for Communication: The Key to Interpersonal Relationships 9/12/15</strong><br/><br/>'; 
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
        A $10 deposit is due by September 6, 2015.<br /><br />
        <b>Thank you for registering for Communication: The Key to Interpersonal Relationships</b>
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
        <img src="../img/events/2015/september/communication/communication-copy.gif" alt="Saturday, September 12, 9:30a.m. - 3:00p.m. COMMUNICATION: THE KEY TO INTERPERSONAL RELATIONSHIPS. Presenter: Sr. Deborah Lorentz, SSS M.Ed. Trainer, Group Process, Communication Skills. Ask yourself - am I so busy that I do not really hear my kids when they talk to me? Am I able to hear my spouse or partner when they are trying to tell me something? Am I able to speak in a way so that I can be heard . . . and understood? Can I hear what my boss is really saying? Come and learn new ways to s-l-o-w down. Learn to communicate more effectively. Go deeper and be present to the moment. Deborah has engaged in facilitation, mediation and communication work for over thirty years. Come and start Fall 2015 on the right foot . . . or, perhaps we should say the right word!" width="600" height="538" />
      </div> 
      <form action="communication.php" method="post">
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