
<?php

    class Product 
    {
        private $sku;
        private $name;
        private $price;

        public function __construct($data) 
        { 
            $this->setSKU($data['sku']);
            $this->setName($data['name']);
            $this->setPrice($data['price']);
        }

        public function getSKU() 
        {
            return $this->sku;
        }

        public function getName() 
        {
            return $this->name;
        }

        public function getPrice() 
        {
            return $this->price;
        }

        public function setSKU($sku) 
        {
            $this->sku = $sku;
        }

        public function setName($name) 
        {
            $this->name = $name;
        }

        public function setPrice($price) 
        {
            $this->price = $price;
        }    
    }

