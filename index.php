<?php
$id = $_GET['id'];
$link = 'http://i.ytimg.com/vi/'.$id.'/'.(strlen(file_get_contents('http://i.ytimg.com/vi/'.$id.'/maxresdefault.jpg')) > 0 ? 'maxresdefault.jpg' : 'sddefault.jpg');
echo '<img src="'.$link.'" /><br />';
echo $link;
?>