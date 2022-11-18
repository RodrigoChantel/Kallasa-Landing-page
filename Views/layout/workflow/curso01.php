<?php
    $dataAtual = date("d/m/Y H:i");
    $inicioNatal = date("13/11/2022 00:39");
    $finalNatal = date("13/11/2022 01:14");

    if($dataAtual >= $inicioNatal && $dataAtual <= $finalNatal){
        echo "Dentro do período do natal";
    }else{
        echo "Não é natal";
        echo "<br>";
    }

    $i = new datetime();
    $i = $i->format("d/m/Y");

    $i = DateTime::createFromFormat('d/m/Y', $i);
    $i->add(new DateInterval('P1D')); // 2 dias
    echo $i->format('d/m/Y');

    for($n = 0; $n<=10; $n++){
        echo "{$n} <br>";
    }

    $teste = ['a', 'b', 'c', 'd'];

    for($m=0; $m<count($teste); $m++){
        echo $teste[$m] . "<br>";
    }

    $ll = date('d/m/Y H:i');
    echo $ll . "<br>";

    foreach ($teste as $key) {
        echo "{$key} <br>";
    }

    function teste(){
        return "teste";
    }

    echo teste();

?>