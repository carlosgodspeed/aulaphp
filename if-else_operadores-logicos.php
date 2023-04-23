<html>
    <head>
        <meta charset="utf-8" />
        <title>Aula PHP</title>
    </head>

    <body>
        <?php

             // operadores condicionais/comparação
                 
             // == igual

             // === identico

             // != ou <> diferente

             // !== não identico

             // < menor

             // > maior

             // <= menor igual

             // >= maior igual

             //operadores logicos
             // E: && ou AND -> retorna verdadeiro se todos os resultados das expressões forem verdadeiros

             // OU: || ou OR -> retorna verdadeiro se pelo menos um dos resultados das expressões for verdadeiro 

             // XOR: XOR -> retorna verdadeiro se uma das expressões for verdadeira e a outra falsa, ou vice-versa

             // ! -> inverte o resultado retornado pela expressão
             
             // () estabelecer precedência

            if((22 == 22 && 3 == 3) || 5 != 5) {
            echo 'verdadeiro';
            } else {
            echo 'falso';
            }
            
        ?>

    </body>
</html>