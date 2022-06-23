<?php

    class ProductsModel 
    {
        private $dbConnection;

        public static function getInstance() 
        { 
            static $instance;
            if (!isset($instance)) $instance = new self; 
            return $instance;
        }

        private function __construct() 
        {
            $this->dbConnection = new mysqli("localhost", "root", "root", "market");
            $this->dbConnection->set_charset('utf8mb4');
        }

        public function getDBConnection() 
        {
            return $this->dbConnection;
        }

        public function addProduct($product) 
        {
       	    $arrParameters = ['sku', 'name', 'price', 'weight', 'size', 'length', 'width', 'height'];

           	foreach ($arrParameters as $parameter) {
                ${$parameter} = method_exists($product, $method = "get{$parameter}") ? $product->$method() : 'NULL';
            }
           		
       	    $type = get_class($product);
     
       	    $dataTable = "INSERT products(sku,name,price,type,weight,size,length,width,height)
       	    VALUES('{$sku}','{$name}','{$price}','{$type}','{$weight}','{$size}','{$length}','{$width}','{$height}')";
            $this->getDBConnection()->query($dataTable);
        }

        public function getProducts() 
        {
       		$query = 'SELECT * FROM `products` ORDER BY `sku` ASC';
       		$result = $this->getDBConnection()->query($query);
       		$arrProducts = [];

       		while ($row = $result->fetch_assoc()) {
       	
       			$productType = $row['type'];
       			$arrObjectProduct[] = new $productType($row);

       		}

       		return $arrObjectProduct;
        }

        public function deleteProducts($skus) 
        {
       		$stringSkus = "'" . implode("','", $skus) . "'";
       		$sqlQuery = "DELETE FROM `products` WHERE `sku` IN ({$stringSkus})";
            $this->getDBConnection()->query($sqlQuery);
        }
    }




