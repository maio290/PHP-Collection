<?PHP

// A small specific BB-Code to HTML transformer

if($_POST)
{


	$url_start = strpos($_POST['bb'],'[url=')+strlen('[url=');
	$url_end = strpos($_POST['bb'],']',$url_start);
	$url = substr($_POST['bb'],$url_start,$url_end-$url_start);
	
	$img_start = strpos($_POST['bb'],'[img]') + strlen('[img]');
	$img_end = strpos($_POST['bb'],'[/img]',$img_start);
	$img = substr($_POST['bb'],$img_start,$img_end-$img_start);
	
	$content_end = strpos($_POST['bb'],'[/url]',$img_end);
	$content = substr($_POST['bb'],$img_end+strlen('[/img]'),$content_end-($img_end+strlen('[/img]')));

	$content = str_replace("\n","</br>",$content);
	
	
	// build HTML
	
	$html = '<p><a href="'.$url.'"><img src="'.$img.'"></img></br>'.$content.'</a></p><hr>';
	
	echo '<textarea rows="50" cols="50">'.$html.'</textarea>';
	
	echo '</br>'.$html;
	




}
else
{


echo'
<form action="bb_to_html.php" method="post">
<p> <textarea name="bb"> </textarea> </p>
<p> <input type="submit"> </p>
</form>

';



}

?>