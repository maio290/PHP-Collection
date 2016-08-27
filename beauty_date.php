<?PHP

function beauty_date($datetime)
{

	// This function transforms the ugly datetime SQL format into something humans want to read 
	
	$year = substr($datetime,0,4);
	$month = substr($datetime,5,2);
	$day = substr($datetime,8,2);
	
	$hour = substr($datetime,11,2);
	$minute = substr($datetime,14,2);
	
	$beauty = "$day.$month.$year - $hour:$minute";
	
	return $beauty;

}

?>