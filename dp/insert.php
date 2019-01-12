<?php
if(!empty($_REQUEST['name'])){
	$lat = $_REQUEST['lat'];
	$lng = $_REQUEST['lng'];
	$name = $_REQUEST['name'];
	$image = $_REQUEST['image'];
	$db = new PDO('sqlite:mapmemo.sqlite');
	$db->exec("INSERT INTO markers(lat, lng, name, image) VALUES('$lat','$lng','$name','$image');");	
	$db=null;
}

?> 