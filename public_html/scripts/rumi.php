<html>	
	<link rel="stylesheet" href="../css/style.css" />
	<link rel="stylesheet" href="../css/signup.css" />
	<body class="signup">
  	<div class="content">
			<?php 
      if ($_POST["email"]<>'') { 
        $ToEmail = 'hsrcenter@earthlink.net'; 
        $EmailSubject = 'Registration for Rumi: Sufi Poet and Mystic 9/26/15'; 
        $mailheader = "From: webmaster@hsrcenter.com"."\r\n"; 
        $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
        $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
        $MESSAGE_BODY = '<strong>Registration for Rumi: Sufi Poet and Mystic 9/26/15</strong><br/><br/>'; 
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
        A $10 deposit is due with registration.<br /><br />
        <b>Thank you for registering for Rumi: Sufi Poet and Mystic 9/26/15</b>
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
        <img src="../img/events/2015/september/rumi/rumi.gif" alt="Rumi: Sufi Poet and Mystic. Presenter: Lala Rukh Khan, Sufi poet, Seeker of Truth. Saturday, September 26th, 9:30am-4:00pm. When His light shines &mdash; without a veil &mdash; neither the sky remains nor the earth, not the sun, nor the moon. God embraces all . . . there is nothing that is not part of Him already. Remember God! His rememberance is the strength in the wings of the bird that is your soul. The soul of all friends of God are connected with on another. This day of retreat/celebration- poetry, movement, prayer and silence - will remember the great mystic poet known as Rumi. his writings and composed works of mysticism and desire have inspired countless people throughout the centuries. His poems express the deepest longings of the human heart for the Beloved, for the transcendent intimacy which is the source of the Divine. Each poetic whisper is urgent, expressing the desire that penetrates human relationships and inspires intimacy with the self, silently nurturing an affinity for the Beloved. Fee: $45.00 with lunch; $35.00 without lunch. $10.00 nonrefundable deposit due with registration." width="600" height="505" />
      </div> 
      <form action="rumi.php" method="post">
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