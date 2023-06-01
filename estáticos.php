<?php

    class Exemplo {
        public static $atributo1 = 'I am Danerys Targeryan'; //atributo estatico//
        public $atributo2 = 'king of 7 kingdowns';    //atributo normal//

        public static function metodo1() {       //metodo estatico//
            echo 'Drogon,Rhaegal,Viserion';
        }

        public function metodo2() {        //metodo normal//
            echo 'Caraxes,Syrax,Meleys';

        }
    }

    $x = new Exemplo();
    /*
    echo Exemplo::$atributo1;
    echo '<br/>';
    Exemplo::metodo1();
    */
    //echo Exemplo::metodo2();

    echo $x->atributo2;

?>