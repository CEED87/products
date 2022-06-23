<?php

    class Template 
    {
        private function __construct() {}

        public static function getInstance() 
        { 
            static $instance;
            if (!isset($instance)) $instance = new self; 
            return $instance; 
        }

    	public function render($path, $input = []) 
        {
            ob_start();

            extract($input);

            include $path;

            return ob_get_clean();
    	}
    }
