<?php
include_once 'model/Model.php';
include_once 'controller/controller.php';
include_once 'route/routing.php';

// Assuming $response is supposed to be set in the controller:
$response = getResponseFromController(); // Replace with actual function call

echo $response;
?>
