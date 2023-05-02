<html>
    <head>
        <meta charset="utf-8"/>
        <title>aula php</title>
    </head>

     <body>

             <?php
             
              $lista_frutas = array (
              'a' => 'banana',
              'b' => 'morango',
              'c' =>'maçâ',
              'd' =>'uva');

              $lista_frutas[] = 'abacaxi';
              
              echo '<pre>';
              var_dump($lista_frutas);
              echo '</pre>';
              echo '<hr/>';
              echo '<pre>';
              print_r($lista_frutas);
              echo '</pre>';
              echo '<hr/>';
              echo $lista_frutas['d'];
             ?>
     </body>
</html>