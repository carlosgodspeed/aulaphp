<html>
    <head>
        <meta charset="utf-8"/>
        <title>switch-php</title>
    </head>

    <body>

        <?php

        $parametro = 52;

        switch ($parametro) {
            case 1:
                echo 'entrou no case 1';
                break;

            case 2:
                echo 'entrou no case 2';
                break;
            
            case 3:
                echo 'entrou no case 3';
                break;

            default:
                echo 'entrou no default';
                break;
        }          

        ?>

    </body>
</html>