<?php

    class Tracer 
    {
        static function trace($argument) 
        {
            echo "<pre>";
            var_dump($argument);
            echo "</pre>";
        }

        static function traceAndExit($parameter) 
        {
            self::trace($parameter);
            exit();
        }    
    }

