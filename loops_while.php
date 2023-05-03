<html>
    <head>
        <meta charset="utf-8"/>
        <title>aula php</title>
    </head>

     <body>

             <?php
             $numeros = array();

             while(count($numeros) <= 5) {

              $num = rand(1, 60);
              if(!in_array($num, $numeros)) {
                $numeros[] =  $num;
              }
             }

             print_r($numeros);
             ?>
     </body>
</html>