<html>
    <head>
        <meta charset="utf-8"/>
        <title>aula php</title>
    </head>

     <body>

             <?php
             
             //is_array(array) -> verifica se o parâmetro é um array
             // array_keys(array) -> retorna todas as chaves de um array
             //sort(array) -> ordena um array e reajusta seus indices
             //asort(array) -> ordena um array preservando os indices
             //count(array) -> conta a quantidade de elementos no array
             // array_merge(array) -> funde um ou mais arrays
             //explode(array) -> divide uma string baseada em um delimitador
             //implode(array) -> junta elementos de um array em uma string
             
             $array = array('notebook', 'teclado');
                 $retorno = is_array($array);

                if($retorno){
                  echo 'Sim, é um array';
                } else {
                 echo 'Não, é um array';
                }

             $array = [2 => 'a', 5 => 'b', 23 => 'c'];
    
             echo '<pre>';
             print_r($array);
             echo '</pre>';
    
             $chaves_array = array_keys($array);
             echo '<pre>';
             print_r($chaves_array);
             echo '</pre>'; 

             $array = array('notebook', 'teclado', 'mouse', 'cabo hdmi', 'gabinete');

             echo '<pre>';
             print_r($array);
             echo '</pre>';

             sort($array); //true ou false

             echo '<pre>';
             print_r($array);
             echo '</pre>'; 

             $array = array('notebook', 'teclado', 'mouse', 'cabo hdmi', 'gabinete');

             echo '<pre>';
             print_r($array);
             echo '</pre>';

             asort($array); //true ou false

             echo '<pre>';
             print_r($array);
             echo '</pre>'; 

            $array = array('notebook', 'teclado', 'mouse', 'cabo hdmi', 'gabinete');

             echo '<pre>';
             print_r($array);
             echo count($array);
             echo '</pre>'; 

             $array1 = ['osx', 'windows'];
             $array2 = array('linux');
             $array3 = ['solaris'];

             $novo_array = array_merge($array1, $array2, $array3);
             echo '<pre>';
             print_r($novo_array);
             echo '</pre>'; 

             $string = '02/05/2023';
             $array_retorno = explode('/', $string);
             echo '<pre>';
             echo $string;
             print_r($array_retorno);
             echo $array_retorno[2].'-'.$array_retorno[1].'-'.$array_retorno[0];
             echo '</pre>'; 

             $array = ['a','b','x','y'];
             $string_retorno = implode('-', $array);
             echo $string_retorno;
             
             ?>
     </body>
</html>