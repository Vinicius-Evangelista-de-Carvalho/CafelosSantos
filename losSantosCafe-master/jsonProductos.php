<?php 
include ('admin/connection.php');

$json = new connection();
echo json_encode($json->getProductos());

?>