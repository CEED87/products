<?php

	class Book extends Product 
    {
        private $weight;

        public function __construct($input) 
        {
            parent::__construct($input); 
            $this->setWeight($input['weight']);
        }

        public function getWeight() 
        {
            return $this->weight;
        }

        public function setWeight($weight) 
        {
            $this->weight = $weight;
        }

        public function __toString() 
        {
            return 
                "  
                    <div class='parameters'>
                        <div class='parameter'>{$this->getSKU()}</div>
                        <div class='parameter'>{$this->getName()}</div>
                        <div class='parameter'>{$this->getPrice()}</div>
                        <div class='parameter'>Weight: {$this->getWeight()}</div>
                    </div>
                "
            ;
        }
    } 

    


