<html>
    <head>
        <meta charset="utf-8" />
        <title>Aula PHP</title>
    </head>

    <body>

        <?php

            //string
            $nome = 'carlos henrique';

            //int
            $idade  = 21;

            //float
            $peso = 82.5;

            //boolean
            $fumante_sn = true;  //true ou false
            
            $idade = '30';

            $endereço = 'brasil';

        ?>

        <h1>Ficha cadastral</h1>
        <br/>
        <p>Nome: <?= $nome ?></p>
        <p>Idade: <?= $idade ?></p>
        <p>Peso: <?= $peso ?></p>
        <p>Fumante: <?= $fumante_sn ?></p>
        <p>endereço: <?= $endereço ?> </p>

    </body>
</html>
