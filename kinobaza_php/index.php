<?php
include_once 'model/Model.php';
include_once 'controller/controller.php';
include_once 'route/routing.php';

// Start the controller and get the response
$response = Controller::StartSite();



echo $response;

 ?>
