<?php

    class MinhaExceptionCustomizada extends Exception {

        private $erro = '';
        public function __construct($erro) {
            $this->erro = $erro;
        }
        public function exibirMensagemErroCustomizada() {
            return $this->erro;
        }
    }

    try {

        throw new MinhaExceptionCustomizada('o Trono é seu');

    } catch (MinhaExceptionCustomizada $e) {
        echo $e->exibirMensagemErroCustomizada();
    }
?>