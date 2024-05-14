<?php 
include ('admin/connection.php');

$json = new connection();
$tipobebida=$_GET["menu"];
//$tipobebida='otros';
echo json_encode($json->getBebidas($tipobebida));

?>