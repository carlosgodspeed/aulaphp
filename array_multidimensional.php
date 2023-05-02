<html>
    <head>
        <meta charset="utf-8"/>
        <title>aula php</title>
    </head>

     <body>

             <?php
             
             $lista_coisas = [];

             $lista_coisas['frutas'] = array(1 =>'banana', 2 => 'maçâ', 3 => 'morango', 4 => 'uva');
             $lista_coisas['pessoas'] = [1 => 'joão', 2 => 'jóse', 3 => 'maria'];

             echo '<pre>';
             print_r($lista_coisas);
             echo '</pre>';

             echo '<hr>';
             echo $lista_coisas['frutas'][2];
             echo '<br/>';
             echo $lista_coisas['pessoas'][2];
             ?>
     </body>
</html>