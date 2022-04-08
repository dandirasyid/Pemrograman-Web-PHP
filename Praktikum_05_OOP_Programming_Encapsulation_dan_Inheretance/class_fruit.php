<?php
    class fruit{
        public $name;
        public $color;
        public $weight;

        // public function default
        function set_name($n){
            $this->name = $n;
        }
        // private function
        private function set_color($n){
            $this->color = $n;
        }
        // protected function
        protected function set_weight($n){
            $this->weight =$n;
        }
    }
    $manggo = new fruit();
    $manggo -> set_name('Manggo');
    $manggo -> set_color('Yellow');
    $manggo -> set_weight('300');
?>