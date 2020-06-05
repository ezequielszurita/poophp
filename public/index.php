<?php

    class Pagina{
        //Atributos
        public $nombre = "Codigo Facilito";
        public static $url = "www.codigofacilito.com";

        //Metodos
        public function bienvenida(){
            echo "Bienvenidos a <b> ". $this->nombre . "<br></bt></b> La pagina es <b>" . Pagina::$url ."</b>";
        }
        public static function bienvenida2(){
            echo "Bienvenidos a " . Pagina::$url;
        }
    }

    class Web extends Pagina{

    }

    Web::bienvenida2();
?>