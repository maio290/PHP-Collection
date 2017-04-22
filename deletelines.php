<?PHP


if($_POST)
{
	
	$inputarr = explode("\n",$_POST['input']);
	
	for($i = 0; $i<count($inputarr); $i++)
	{
		
		if(strpos($inputarr[$i],$_POST['delete']) === false)
		{
			
			echo $inputarr[$i].'</br>';
			
		}
		
		
	}
	
}
else
{
	echo '<form action="deletelines.php" method="POST">
	Delete lines with expression: <input type="text" name="delete"></input></br>
	Input:</br><textarea name="input"></textarea></br>
	<input type="submit"></input>
	</form>';
	
}

?>
