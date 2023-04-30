<html>
    <head>
        <meta charset="utf-8"/>
        <title>aula php</title>
    </head>

     <body>

            <?php
             $texto = 'eM DEZEMBRO DE 81';
             //string to lower -> transforma todos caracteres da string em minusculos
             echo $texto . '<br/>';
             echo strtolower($texto);
            
             echo '<hr/>';

             //string to upper -> transforma todos caracteres da string em maiúsculos
             echo $texto . '<br/>';
             echo strtoupper($texto);

             echo '<hr/>';

             // ucfirst-> transforma o primeiro caracter da string em maiúsculo
             echo $texto . '<br/>';
             echo ucfirst($texto);

             echo '<hr/>';

             // strlen-> conta a quantidade de caracteres de uma string
             echo $texto . '<br/>';
             echo strlen($texto);

             echo '<hr/>';

             // str_replace-> substitui uma cadeia de caracteres por outra dentro de uma string
             echo $texto . '<br/>';
             echo str_replace('DEZEMBRO', 'JULHO', $texto);

             echo '<hr/>';

             //substr-> retorna parte de uma string 
             echo $texto . '<br/>';
             echo substr($texto, 3, 12);



            ?>
     </body>
</html>