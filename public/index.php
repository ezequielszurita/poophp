<?php
    class Facebook{

        public $nombre;
        public $edad;
        private $pass;

        public function __construct($nombre, $edad, $pass){
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->pass = $pass;
        }

        public function verInformacion(){
            echo "Nombre: " . $this->nombre ."<br>";
            echo "Edad: " . $this->edad ."<br>";
            $this->cambiarPass("123456");
            echo "Clave: " . $this->pass ."<br>";

        }
        private function cambiarPass($pass){
            $this->pass = $pass;
        }
    }

    $facebook = new Facebook("Ezequiel",20,"NadieSabe");
    //echo $facebook->pass;
    //$facebook->cambiarPass("123456");
    $facebook->verInformacion();

?>