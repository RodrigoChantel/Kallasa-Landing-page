<?php
    function contadorDeVisitas()
    {
        $file = "contador-workflow.log";
  
        $handle = fopen($file, 'r+');

        $data   = fread($handle, 512);

        $contar = $data + 1;

        

        fseek($handle, 0);

        fwrite($handle, $contar);

        fclose($handle);

        return $contar;
    }

    $contador = contadorDeVisitas();
    $arquivo = 'registro-workflow.log';
    $file = fopen($arquivo, 'a+');
    $date = date('dmY000His');
    $pegar_ip = $_SERVER["REMOTE_ADDR"];

    fwrite($file, "{$contador}0000{$date}0000{$pegar_ip} \r\n");

    fclose($file);



    