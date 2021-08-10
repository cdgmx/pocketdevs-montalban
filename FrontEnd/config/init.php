<?php
    

    require_once 'config.php';
  
    function __spl_autoload_register($class_name){
        require_once 'lib/' . $class_name . '.php';
      
    }


    spl_autoload_register(function ($class_name) {
              require_once 'lib/' . $class_name . '.php';
        
       
    });



?>