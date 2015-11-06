<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script type="text/javascript">
function outtie(){
	var r = $("#retreat-type").val();
	
	var counter = 1;
	if( r == "extended" ){
		$("#date-picker").html("<input type=\"text\" name=\"start\" value=\"start date\" /><input type=\"text\" name=\"end\" value=\"end date\" />");
	}
	else if( r == "series" ){
		$("#date-picker").html("<a id=\"addmoredates\" href=\"javascript:void(0)\">+</a><input type=\"text\" name=\"series_date1\" value=\"Enter Date\" /><br/>");
		$("#addmoredates").click(function(){
			counter++;
			$("#date-picker").append("<input type=\"text\" name=\"series_date"+counter+"\" value=\"Enter Date\" /><br/>");
		});
	}
	else{
		$("#date-picker").html("<input type=\"text\" name=\"oneday_date\" value=\"retreat date\" />");
	}
}
$(document).ready(function(){
	
	$("select").change(outtie);
	
});
</script>
</head>

<body>
<form>
	Name of Retreat: <input type="text" name="name" /><br/>
  Type of Retreat: 
  <select id="retreat-type">
  	<option value="">What kind of retreat are you adding?</option>
  	<option value="extended">Extended</option>
  	<option value="series">Series &amp; On-Going</option>
  	<option value="oneday">One Day</option>
  </select><br/>
  <div id="date-picker"></div>
</form>

</body>
</html>