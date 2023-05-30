<?php
   
    //modelo
    class Funcionario {

        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo=null;
        public $salario = null;

        //getters setters (overloading / sobrecarga)
        function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        function __get($atributo) {
            return $this->$atributo;
        }



        /*
        function setNome($nome) {
            $this->nome = $nome;
        }

        function setNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }

        function getNome() {
            return $this->nome;
        }

        function getNumFilhos() {
            return $this->numFilhos;
        }
        */

        //métodos
        function resumirCadFunc() {
           return "$this->nome possui $this->numFilhos filho(s)";
        }

        function modificarNumFilhos($numFilhos) {
            //afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
        }

   }

   $y = new Funcionario();
   $y->__set('nome', 'carlos');
   $y->__set('numFilhos', '9150');
   //echo $y->resumirCadFunc();
   echo "<hr>";
   echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . 'filho(s)';

   echo "<hr>";
   $x = new Funcionario();
   $x->__set('nome', 'joao');
   $x->__set('NumFilhos', 5);
   echo $x->__get('nome') . ' possui ' . $x->__get('NumFilhos') . 'filho(s)';


?>