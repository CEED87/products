<?php
    
    class FrontController 
    {
    	private $url;
    	private $httpMethod;

        public static function getInstance() 
        { 
            static $instance;
            if (!isset($instance)) $instance = new self; 
            return $instance;
        }

    	private function __construct() 
    	{
    		$this->url = $_SERVER['REDIRECT_URL'] ?? '/';
    		$this->httpMethod = $_SERVER['REQUEST_METHOD'] ?? 'GET';
    	}

    	private function getURL() 
    	{ 
    		return $this->url;
    	}

        private function getHTTPMethod() 
        {
            return $this->httpMethod;
        }

        public function route() 
        {
            if ($this->getURL() === '/' && $this->getHTTPMethod() === 'GET')
            {
                $controller = 'ShowProductsController'; 
            }
            elseif ($this->getURL() === '/addProduct' && $this->getHTTPMethod() === 'GET') 
            {
                $controller = 'ShowAddProductFormController';   
            }
            elseif ($this->getURL() === '/' && $this->getHTTPMethod() === 'POST' && isset($_POST['name'])) 
            {
                $controller = 'AddProductController'; 
            }
            elseif ($this->getURL() === '/' && $this->getHTTPMethod() === 'POST' && isset($_POST['massDelete'])) 
            {
                $controller = 'DeleteProductsController'; 
            }
            else 
            {
                $controller = 'ShowPageIsNotFoundController'; 
            }

            (new $controller)->act();
        }
    }


