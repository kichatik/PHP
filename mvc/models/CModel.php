<?php

class Cmodel {
    public function GetData() {

        $mysqli = new mysqli('localhost', 'root', '', 'mvc_db');

        if(mysqli_connect_errno()) {
            echo ('Соединение не установлено');
            exit();
        }

        $mysqli->set_charset('utf8');

        $query = 'Select * from blogpost';

        $result = $mysqli->query($query);
        $arrayResult = $result->fetch_all(MYSQLI_ASSOC);
        
        // $arrayResult[] = array(
        //     'TITLE' => 'Blog hosting site',
        //     'DATE' => '22.06.2020',
        //     'AUTHOR' => 'VolDeMort',
        //     'IMAGE' => 'https://news.artnet.com/app/news-upload/2019/01/Cat-Photog-Feat-256x256.jpg',
        //     'TEXT' => 'Nulla morbi, ad pur Portwisu morbsed id, arcu vestibulum dolor conmtum ac egastas lorem elit libero.'    
        
        // );
        // $arrayResult[] = array(
        //     'TITLE' => 'Blog hosting site NEW',
        //     'DATE' => '21.10.2021',
        //     'AUTHOR' => 'Igor',
        //     'IMAGE' => 'https://news.artnet.com/app/news-upload/2019/01/Cat-Photog-Feat-256x256.jpg',   
        //     'TEXT' => 'Nulla morbi, ad pur Portwisu morbsed id, arcu vestibulum dolor conmtum ac egastas lorem elit libero.'    
        
        // );
        return $arrayResult;
    }
}