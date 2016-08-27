<?PHP

	// Wrapping for strtolower
	
	if($_POST)
	{

		$_POST['STR'] = strtolower($_POST['STR']);
		echo '
		<textarea rows="2" cols="50">'.$_POST['STR'].'</textarea>';

	}

	else
	{
		echo '<DOCTYPE HTML>
		<html>
		<head>
		<title>String to Lower</title>
		<meta charset="utf-8"></meta>
		<head>
		<body>
		<form action="strlower.php" method="post">
		<p><textarea rows="2" cols="50" name="STR"></textarea></p>
		<input type="submit"></input>
		</form>
		</body>
		</html>
';
		
	}




?>
