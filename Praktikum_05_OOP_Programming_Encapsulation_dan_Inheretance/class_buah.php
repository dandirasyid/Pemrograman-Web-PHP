<?php
    class Fruit {
        public $name;
        public $color;
        public function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
        }
        public function intro() {
            echo "aku adalah buah {$this->name} dan warna aku {$this->color}.";
        }
    }

    class Strawberry extends Fruit {
        public function message() {
            echo "Aku sebuah strawberry atau semangka? ";
        }
    }

    $strawberry = new Strawberry("Strawberry", "red");
    $strawberry->message();
    $strawberry->intro();
?>