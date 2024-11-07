<?php
    /**
     * 
     */
    class Model{

        public static function getFilmList() {
            include_once 'filmsArray.php';
            return $films;
        }
    }
 ?>