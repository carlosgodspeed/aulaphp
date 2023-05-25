<?php
   
    //modelo
    class Funcionario {

        //atributos
        public $nome = 'null';
        public $telefone = 'null';
        public $numFilhos = null;

        //getters setters
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
   $y->setNome('carlos');
   $y->setNumFilhos(9);
   echo $y->resumirCadFunc();
   echo "<hr>";
   echo $y->getNome() . ' possui ' . $y->getNumFilhos() . 'filho(s)';

   echo "<hr>";
   $x = new Funcionario();
   $x->setNome('joao');
   $x->setNumFilhos(5);
   echo $x->getNome() . ' possui ' . $x->getNumFilhos() . 'filho(s)';


?>