<?php
    class Rectangle {
        protected $lato1;
        protected $lato2;
        public function __construct($lato1, $lato2) {
            $this -> lato1 = $lato1;
            $this -> lato2 = $lato2;
        }
        public function area(){
          return $this -> lato1 * $this -> lato2;
        }
        public function perimeter(){
          return $this -> lato1 * 2 + $this -> lato2 * 2;
        }
        protected function getStrCoords() {
           return "1#Lato: " . $this -> lato1 . "<br>"
                . "2#Lato: " . $this -> lato2 . "<br>";
       }
       public function __toString() {
          return "Rettangolo:<br>" . $this -> getStrCoords() . "Area: " . $this -> area() . "<br>Perimetro: " . $this -> perimeter() . "<br>";
       }
    }


    class Parallelepiped extends Rectangle {
        private $lato3;
        public function __construct($lato1, $lato2, $lato3) {
            parent::__construct($lato1, $lato2);
            $this -> lato3 = $lato3;
        }
        public function volume(){
          return parent::area() * $this -> lato3 ;
        }
        public function surface(){
          return 2 * ($this -> lato1 * $this -> lato2 + $this -> lato1 * $this -> lato3 + $this -> lato3 * $this -> lato2);
        }
        protected function getStrCoords() {
            return parent::getStrCoords()
                 . "3#Lato: " . $this -> lato3 . "<br>";
        }
        public function __toString() {
            return "Parallelepipedo rettangolo:<br>" . $this -> getStrCoords() . "Volume: " . $this -> volume() . "<br>Superficie: " . $this -> surface() . "<br>";
        }
    }


    $Rectangle1 = new Rectangle(1, 2);
    $Rectangle2 = new Rectangle(3, 6);
    $Parallelepiped1 = new Parallelepiped(5, 11, 7 );
    $Parallelepiped2 = new Parallelepiped(3, 2, 10);

    echo
          $Rectangle1 . "<br>"
        . $Rectangle2 . "<br>"
        . $Parallelepiped1 . "<br>"
        . $Parallelepiped2 . "<br>";
