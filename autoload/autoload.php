<?php
 
    spl_autoload_register(function ($className) 
    {
        $finderClasses = "classes/{$className}.php";
        $finderControllers = "classes/controllers/{$className}.php";
        $finderProducts = "classes/products/{$className}.php";

        if (file_exists($finderControllers)) {
            $file = $finderControllers;
          
        } elseif (file_exists($finderProducts)) {
            $file = $finderProducts;
                 
        } else {
            $file = $finderClasses;
            
        }

        include $file; 
        
    });
