<?php
    $taxa = 0.10;
    function banese($numero01, $numero02){
        global $taxa;
        $total = $numero01 + $numero02;
        $taxaDoValor = ($numero01 + $numero02) * $taxa;
        $valorTotal = $total + $taxaDoValor;
        return "{$valorTotal} <br>";
    }
    echo banese(50,50);

    $taxa2 = 10 / 100;
    function Bradesco($valor){
        global $taxa2;
        $valorDaTaxa = $valor * $taxa2;
        $valorComTaxa = $valor + $valorDaTaxa;
        $porcentagem = $taxa2 * 100;
        return "Saldo devedor = {$valor} <br> Valor da taxa = {$valorDaTaxa} <br> Saldo devedor com taxa = {$valorComTaxa}<br> Taxa {$porcentagem}% <br>";
    }
    echo Bradesco(10);

    function pessoa($nome){
        return strtoupper($nome);
    }
    echo strtolower(pessoa("Rodrigo Chantel Hora <br>"));
    echo ucfirst("rodrigo <br>");
    echo ucwords( strtolower(pessoa("rodrigo cHANTEL hORA <br>")));

    $localidade = "Aracaju/SE";
    $localArray = explode("/", $localidade);
    
    foreach($localArray as $localizacao){
        echo "{$localizacao} <br>";
    }
?>

