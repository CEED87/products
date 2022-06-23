<?php
    
    class DVD extends Product 
    {
        private $size;

        public function __construct($input) 
        {
            parent::__construct($input); 
            $this->setSize($input['size']);
        }

        public function getSize() 
        {
            return $this->size;
        }

        public function setSize($size) 
        {
            $this->size = $size;
        }

        public function __toString() 
        {
            return
                "
                    <div class='parameters'>
                        <div class='parameter'>{$this->getSKU()}</div>
                        <div class='parameter'>{$this->getName()}</div>
                        <div class='parameter'>{$this->getPrice()}</div>
                        <div class='parameter'>Size: {$this->getSize()}</div>
                    </div>
                "
            ;  
                                           
        }
    } 

                                

