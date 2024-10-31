<?php
// $books = array(
//     array("bookname" => "HTML and CSS",
//           "author" => "Jon Duckett",
//           "price" => "17.19$",
//           "description" => "Every day, mre and more people want to learn HTML and CSS.",
//           "image" => "HTMLandCSS_Duckett.jpg"),
//     array("bookname" => "HTML5",
//           "author" => "Mathew MacDonald",
//           "price" => "27.65$",
//           "description" => "HTML5 is more than a markup launguage.",
//           "image" => "HTML5TheMissing_MacDonald.jpg"),
//     array("bookname" => "Head First HTML5 Programming",
//           "author" => "Eric Freeman, Elisabeth Robson",
//           "price" => "35.35$",
//           "description" => "HTML has been on a wild ride.",
//           "image" => "HeadFirstHTML5.jpg"),
//     array("bookname" => "Head First JavaScript Programming",
//           "author" => "Eric Freeman, Elisabeth Robson",
//           "price" => "37.60$",
//           "description" => "This brain-friendly guide teaches you everything from JavaScript language.",
//           "image" => "HeadFirstJavaScript.jpg"),
//     array("bookname" => "JQuery In Action",
//           "author" => "Bear Bibeault, Yehuda Katz",
//           "price" => "32.12$",
//           "description" => "A really good web development framework anticipates your needs.",
//           "image" => "JQueryInAction.jpg")
// );

$mysqli = new mysqli('localhost', 'root', '', 'mvc2_db');

if (mysqli_connect_errno()) {
    echo ('Соединение не установлено');
    exit();
}

$mysqli->set_charset('utf8');

$query = 'SELECT * FROM games';
$result = $mysqli->query($query);

$books = $result->fetch_all(MYSQLI_ASSOC);

$mysqli->close();


?>