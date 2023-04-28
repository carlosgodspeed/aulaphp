<html>
    <head>
        <meta charset="utf-8"/>
        <title>aula php</title>
    </head>

    <body>

        <?php

        //gettype()=>retorna o tipo da variavel 
        $valor = true;
        //$valor2 = (float) $valor; //float ou double o real não é mais suportado pelo PHP 
        //$valor2 = (string) $valor;
        //$valor2 = (int) $valor; //integer ou int
        //$valor2 = (boolean) $valor; //bool ou boolean
        $valor2 = (string) $valor;
        $valor3 = (int) $valor;

        echo $valor.''. gettype($valor);
        echo '<br />';
        echo $valor2.''. gettype($valor2);
        echo '<br />';
        echo $valor3 .''. gettype($valor3);
        ?>

    </body>
</html>