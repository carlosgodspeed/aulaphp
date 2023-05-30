<?php
   
    class Pessoa {

         public $nome = null;

         function __construct($nome) {
             echo 'objeto iniciado';
             $this->nome = $nome;
         }

         function __destruct() {
            echo '<br/> objeto removido';
         }

         function __get($atributo) {
             return $this->$atributo;
         }

         function correr() {
             return $this->__get('nome') . ' está correndo';
         }
   }

   $pessoa = new Pessoa('Rhaegar Targeryan');
   echo '<br/> Nome: ' . $pessoa->__get('nome');
   echo '<br/>' . $pessoa->correr();

   unset($pessoa);


?>