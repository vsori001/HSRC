<?php

/* GLOBAL PIECES */

function show_nav(){
	echo "<a href=\"home.html\" class=\"button\">Home</a>
			<a href=\"history.html\" class=\"button\">Our History</a>
			<a href=\"letter.html\" class=\"button\">Letter from our Director</a>
			<a href=\"services.html\" class=\"button\">Our Services</a>
			<a href=\"aboutus.html\" class=\"button\">About our Center</a>
			<a href=\"contactus.html\" class=\"button\">Contact Us</a>
			<a href=\"retreatsevents.html\" class=\"button\">Retreats / Events</a>
			<a href=\"facilities.html\" class=\"button\">Our Facilities</a>
			<a href=\"directions.html\" class=\"button\">Directions</a>
			<a href=\"faq.html\" class=\"button\">F.A.Q</a>
			<a href=\"donations.html\" class=\"button\">Donations</a>
			<a href=\"inquire.html\" class=\"button\">Inquiring to Book a Group?</a>
			<a href=\"newsletter.html\" class=\"button\">Our Aug-Dec 2015 Center Update</a>
			<a href=\"http://hsrcenter.myshaklee.com/us/en/about_support_our_ministry.html\" id=\"shaklee\" class=\"button\"><p>We use Shaklee products for<br/>
			your safety and the protection<br/>
			of the environment.<br/>
			<strong>Click here</strong> to purchase your own<br/>
			Shaklee products and support<br/>
			Holy Spirit Retreat Center</p></a>";
}

function show_header(){
	echo '<div class="header">'
	. '<img src="../img/logo4.jpg" width="1024" height="191" />'
	. '</div>';
}

function show_footer(){
	echo '<div class="footer">
	<a href="home.html" class="no-under">Holy Spirit Retreat Center</a> &bull; 4316 Lanai Rd. Encino, CA 91436 &bull; (818) 784 - 4515<br />
	</div>';
}

?>