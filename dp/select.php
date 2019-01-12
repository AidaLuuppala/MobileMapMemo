<?php
try{	
	$db = new PDO('sqlite:mapmemo.sqlite');	
	$sql  = "SELECT lat, lng, name, image FROM markers";
	$array = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);	
	echo json_encode($array);
}catch(PDOException $e){
	echo("Exception" . $e);
}
$db=null;
?>