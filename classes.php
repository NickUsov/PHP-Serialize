<?php
    trait Collect
    {
        public function Add(&$array)
        {
            if($this instanceOf Rectangle) {
                $array[] = $this;
            }
        }
    }
    class Rectangle
    {
        use Collect;
        protected $x;
        protected $y;
        protected $width;
        protected $height;
        public function __construct($x, $y, $width, $height)
        {
            $this->x = $x;
            $this->y = $y;
            $this->width = $width;
            $this->height = $height;
        }
        public function Show()
        {
            echo "$this->x $this->y $this->width $this->height <br>";
        }
        public static function createInstance1($width, $height)
        {
            return new self(0, 0, $width, $height);
        }
    }
?>