<?php

$mysqli = new mysqli('localhost', 'root', '', 'kinobaza_db');

if (mysqli_connect_errno()) {
    echo ('Соединение не установлено');
    exit();
}

$mysqli->set_charset('utf8');

$query = 'SELECT * FROM films';
$result = $mysqli->query($query);

$films = $result->fetch_all(MYSQLI_ASSOC);

$mysqli->close();


?>