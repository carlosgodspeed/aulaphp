<html>
    <head>
        <meta charset="utf-8"/>
        <title>aula php</title>
    </head>

     <body>

             <?php
             
             $funcionario1 = null;
             $funcionario2 = '';
             $funcionario3 = false;

             if(is_null($funcionario1)) {
                echo 'funcionario 1 sim é null';
             } else {
                echo 'funcionario 1 não é null';
             }

             echo '<br/>';

             if (is_null($funcionario2)) {
                echo 'funcionario 2 sim é null';
             } else {
                echo ' funcionario 2 não é null';
             }

             echo '<br/>';

             if (is_null($funcionario3)) {
                echo ' funcionario 3 sim é null';
             } else {
                echo ' funcionario 3 não é null';
             }

             echo '<br/>';

             if(empty($funcionario1)) {
                echo 'funcionario 1 sim vazia';
             } else {
                echo ' funcionario 1 não vazia';
             }

             echo '<br/>';
             
             if (empty($funcionario2)) {
                echo 'funcionario 2 sim vazia';
             } else {
                echo ' funcionario 2 não vazia';
             }

             echo '<br/>';

             if (empty($funcionario3)) {
                echo ' funcionario 3 sim vazia';
             } else {
                echo 'funcionario 3 não vazia';
             }
             
             ?>
     </body>
</html>