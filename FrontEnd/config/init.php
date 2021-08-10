<?php
    

    require_once 'config.php';
  

    spl_autoload_register(function ($class_name) {
              require_once 'lib/' . $class_name . '.php';
        
       
    });



?>