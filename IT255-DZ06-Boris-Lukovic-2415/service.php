<?php

header('Content-Type: application/json; charset=utf-8');

$result = array();
$result = ['weatherdata'] = "Belgrade";
$result = ['value'] = "22.4";
$result = ['unit'] = "C";

echo json_encode($result); 

?>