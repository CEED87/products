<?

    class Furniture extends Product 
    {
        private $length;
        private $width;
        private $height;

        public function __construct($input) 
        {
            parent::__construct($input); 
        
            $this->setLength($input['length']);
            $this->setWidth($input['width']);
            $this->setHeight($input['height']);
        }

            public function getLength() 
            {
                return $this->length;
            }

            public function getWidth() 
            {
                return $this->width;
            }

            public function getHeight() 
            {
                return $this->height;
            }

            public function setLength($length) 
            {
                $this->length = $length;
            }

            public function setWidth($width) 
            {
                $this->width = $width;
            }

            public function setHeight($height) 
            {
                $this->height = $height;
            } 

            public function __toString() 
            {
                return 
                    "
                        <div class='parameters'>
                            <div class='parameter'>{$this->getSKU()}</div>
                            <div class='parameter'>{$this->getName()}</div>
                            <div class='parameter'>{$this->getPrice()}</div>
                            <div class='parameter'>Dimensions: {$this->getHeight()}x{$this->getWidth()}x{$this->getLength()}</div>
                        </div>
                    "
                ;
            }
       } 

