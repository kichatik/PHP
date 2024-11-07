<?php
/**
 * 
 */
class Controller {



    public static function StartSite() {
        $filmsList = Model::getFilmList();
        include 'view/filmList.php';  

    }
}
 ?>