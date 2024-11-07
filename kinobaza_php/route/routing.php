<?php
    $host = explode('?', $_SERVER['REQUEST_URI'])[0];

    $num = substr_count($host, '/');
    $way = explode('/', $host)[$num];

    if($way == '' || $way == 'index.php') {
        $response = Controller::StartSite();
        
    }

 ?>