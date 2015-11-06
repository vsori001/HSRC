<?php

function createCal( $calMonth ){
	$calendar = strtotime( $calMonth );
	$mo = date('m', $calendar);
	$year = date('Y', $calendar);
	$month_num = date('n', $calendar);
	$month_before = $month_num - 1;
	$month_after = $month_num + 1;
	$first_day = mktime(0,0,0,$mo,1,$year);
	$month_name = date('F', $first_day);
	$month_before_name = date('F', mktime(0,0,0,$month_before,1,$year));
	$month_after_name = date('F', mktime(0,0,0,$month_after,1,$year));
	$first_day_of_week = date('D', $first_day);
	$total_days = date('t', $calendar);
	
	switch($first_day_of_week){
		case "Sun":
			$num = 0; 
			break;
		case "Mon":
			$num = 1; 
			break;
		case "Tue":
			$num = 2; 
			break;
		case "Wed":
			$num = 3; 
			break;
		case "Thu":
			$num = 4; 
			break;
		case "Fri":
			$num = 5; 
			break;
		case "Sat":
			$num = 6; 
			break;
	}
	
	echo "<div id=\"next-prev-months\"> <a href=\"".$month_before_name.".html\"><</a>".$month_name." ".$year."<a href=\"".$month_after_name.".html\">></a></div>";
	
	// Days of the Week
	echo "<table id=\"calendar\"><tr><th class=\"weekdays\">Sunday</th><th class=\"weekdays\">Monday</th><th class=\"weekdays\">Tuesday</th><th class=\"weekdays\">Wednesday</th><th class=\"weekdays\">Thursday</th><th class=\"weekdays\">Friday</th><th class=\"weekdays\">Saturday</th></tr>";
	
	// Days
	$days = 1;
	echo "<tr>";
	
	while( $num > 0 ){
		echo "<td class=\"emptydays\"></td>";
		$num = $num - 1;
		$days++;
	}
	
	$the_date = 1;
	
	while($the_date <= $total_days){
		echo "<td class=\"days\">".$the_date."</td>";
		$the_date++;
		$days++;
		
		if($days > 7){
			echo "</tr><tr>";
			$days = 1;
		}
	}
	
	while($days > 1 && $days <= 7){
		echo "<td class=\"emptydays\"></td>";
		$days++;
	}
	
	echo "</tr></table>";
}

function showToday(){
	$date = date("n/d/Y");
	echo $date;
}

function addEvent($name, $type, $day){
	
}

?>