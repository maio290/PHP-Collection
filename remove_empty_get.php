<?PHP

// This script removes all empty get vars, which are not the first one, from the given URL


if($_POST)
{

$URL = $_POST['URL'];
$offset = 0;

echo '<h2>Extracted Get-Parameters:</h2>';

while(strpos($URL,'&',$offset) !== false)
{

	$variable_name_start = strpos($URL,"&",$offset);
	$offset = $variable_name_start+1;
	
	$end_var = strpos($URL,"=",$offset);
	
	$variable_name = substr($URL,$offset,$end_var-$offset);

	$next_var_start = strpos($URL,'&',$offset);

	
	if($next_var_start === false)
	{
		$variable_value = substr($URL,$end_var+1);
	}
	else
	{
		$variable_value = substr($URL,$end_var+1,$next_var_start-1-$end_var);
	}
	
	echo $variable_name." = ".$variable_value.'</br>';
	
	$offset_fix = 0;
	
	if(strlen($variable_value) === 0)
	{
		echo '</br> Replacing: '."&".$variable_name."=".'</br></br>';
		$URL = str_replace('&'."$variable_name=","",$URL);
		$offset_fix = strlen('&'."$variable_name=");
		
	}
	
	$offset = strpos($URL,'=',$offset-$offset_fix);
}

echo '</br> Cleaned URL: </br>';

echo '<a href="'.$URL.'">'.$URL.'</a>';


}
else
{

echo '<form action="remove_empty_get.php" method="POST">
<textarea name="URL" rows="60" cols="60"></textarea></br>
<input type="submit"/>
</form>';
}

?>