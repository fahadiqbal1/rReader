<?php
header('Content-type: text/xml');

if(isset($_GET['sub']))
{
	$reddit = file_get_contents ('http://www.reddit.com/r/'.$_GET['sub'].'/.xml'); 
}
else 
{
	$reddit = file_get_contents ('http://www.reddit.com/.xml'); 
}

 Echo $reddit; 
