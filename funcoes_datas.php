<html>
    <head>
        <meta charset="utf-8"/>
        <title>aula php</title>
    </head>

     <body>

             <?php
             // dia/mes/ano horas:minutos
    echo date('d/m/Y H:i');

    echo '<br />';
    echo date_default_timezone_get(); //está em Berlim
    date_default_timezone_set('America/Sao_Paulo'); //muda para Brasil
    echo '<br />';
    echo date('d/m/Y H:i');

    $data_inicial = '2023-05-02';
    $data_final = '2023-05-01';

    //timestamp
    //01/01/1970 -- 2018-04-24 (js -> milissegundos / php -> segundos)
    $time_inicial = strtotime($data_inicial);
    $time_final = strtotime($data_final);
    echo $data_inicial . ' - ' . $time_inicial;
    echo '<br />';
    echo $data_final . ' - ' . $time_final;

    $diferenca_times = $time_final - $time_inicial;
    echo '<br />';
    echo 'A diferença de segundos entre a data inicial e final é: ' . $diferenca_times;

    $segundos_existem_dia = 24 * 60 * 60;
    echo '<br />';
    echo 'Um dia possui ' . $segundos_existem_dia . ' segundos';

    $diferenca_de_dias_entre_as_datas = $diferenca_times / $segundos_existem_dia;
    echo '<br / >';
    echo 'A diferença em dias é: ' . $diferenca_de_dias_entre_as_datas;

             ?>
     </body>
</html>