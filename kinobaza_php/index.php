<?php
include_once 'model/Model.php';
include_once 'controller/controller.php';
include_once 'route/routing.php';

// Set the response content
$response = Controller::StartSite();

// Output the response (content)
echo $response;
?>
