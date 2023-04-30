<html>
    <head>
        <meta charset="utf-8"/>
        <title>aula php</title>
    </head>

     <body>

            <?php
             function exibirBoasVindas() {
               echo 'bem vindo ao gulag!<br/>';
             }

             exibirBoasVindas();
         
             function calcularAreaTerreno($Largura, $comprimento) {
              $area = $Largura*$comprimento;
              return $area;
            }

           echo calcularAreaTerreno(30, 50);
            ?>
     </body>
</html>