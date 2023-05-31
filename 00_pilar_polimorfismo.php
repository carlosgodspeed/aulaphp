<?php
   
    class Carro extends Veiculo {

        public $teto_solar = true;

        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function abrirTetoSolar() {
            echo 'Abrir teto solar';
        }

        function alterarPosicaoVolante() {
            echo 'Alterar posição volante';
        }
    }

    class Moto extends Veiculo {
    
        public $contraPesoGuidao= true;

        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;

        }

        function empinar() {
            echo 'Empinar Moto';
        }

        function trocarMarcha() {
            echo 'Trocar marcha com mão';   
        }
    }

    class Veiculo {
        public $placa = null;
        public $cor = null;

        function acelerar() {
            echo 'Acelerar';
        }

        function freiar() {
            echo 'Freiar';
        }

        function trocarMarcha() {
            echo 'Trocar marcha';
        }
    }

    $carro = new Carro('ABC1234', 'Branco');

    $carro->trocarMarcha();

    echo '<hr/>';

    $moto = new Moto('TAR906', 'Vermelho Targeryan');

    $moto->trocarMarcha();

    
?>