<?php
    ob_start();

 ?>

 <h2>Фильмы</h2>
 <article>
    <p>
        Просмотр списка фильм
    </p>
 </article>
 <?php
    $content = ob_get_clean();
  ?>
  <?php include 'view/templates/layout.php';?>