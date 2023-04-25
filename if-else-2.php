<html>
    <head>
        <meta charset="utf-8" />
        <title>Aula PHP</title>
    </head>

    <body>

        <?php
            
            $usuario_possui_cartao_loja = true;
            $valor_compra = 250;

            $valor_frete = 50;
            $recebeu_desconto_frete = false;

            if($usuario_possui_cartao_loja && $valor_compra >= 400) {
                $valor_frete = 0;
                $recebeu_desconto_frete = true;

            } else if($usuario_possui_cartao_loja && $valor_compra >= 300) {
                $valor_frete = 10;
                $recebeu_desconto_frete = true;

            } else if($usuario_possui_cartao_loja && $valor_compra >= 100) {
                $valor_frete = 25;
                $recebeu_desconto_frete = true;
            }
        ?>

        <h1>Detalhes do pedido</h1>

        <p>possui cartão da loja?
            <?php
               if($usuario_possui_cartao_loja == true) {
                   echo 'SIM';
                }else {
                   echo 'NÃO';
                } 
            ?>
        </p>

        <p>Valor da compra: <?= $valor_compra ?> </p>

        <p>Recebeu desconto no frete?
            <?php
               if($recebeu_desconto_frete == true) {
                   echo 'SIM';
                }else {
                   echo 'NÃO';
                } 
            ?>
        </p>

        <p>Valor do frete: <? $valor_frete ?></p>

    </body>
</html>