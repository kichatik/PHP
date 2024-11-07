<?php
    ob_start();
 ?>
 <h2>Films</h2>
 <?php
 foreach ($filmsList as $filmOne) {
    echo '<img src = "public/images/'.$filmOne['image'].'">';
    echo '<h3>' . $filmOne['name'] . '</h3>';
    echo '<p>' . $filmOne['description'] . '</p>';
    echo '<div style = "clear:both;"></div>';
 }

  ?>


  <?php
  $content = ob_get_clean();
  include 'view/templates/layout.php';
   ?>