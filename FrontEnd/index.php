<?php
    include_once 'config/init.php';
  
?>


<?php

    $template = new Template('templates/frontpage.php');
    
    $template->title = 'latest posts';

    echo  $template;

?>