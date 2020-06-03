<?php
        class Vehiculo{
            public $motor = false;
            public $marca;
            public $color;

            public function estado(){
                if($this->motor) //corobora si es true
                    echo "El motor esta encendido<br>";
                else
                    echo "El motor esta apagado<br>";
        }
            public function encender(){
                if($this->motor){
                    echo "Cuidado, el motor ya esta prendido<br>";
                }
                else
                    echo "El motor ahora esta encendido<br>";
                    $this->motor=true;
            }

        }

        class Moto extends Vehiculo {

        }

        class CuatriMoto extends Moto {

        }

        $moto = new Moto();
        $moto->estado();

?>