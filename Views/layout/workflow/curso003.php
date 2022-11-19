<?php

    $person = "Rodrigo";
    if(isset($person)){
        echo "segue com a validação";
    }else{
        echo "Você precisa preencher o campo de usuário";
    }
    
    echo "<hr>";

    unset($person);

    if (isset($person)) {
        echo "segue com a validação";
    }else{
        echo "Você precisa preencher o campo de usuário";
    }

    echo "<hr>";
    
    $senha = '123456';
    $idade = 18;

    echo $senha;

    echo "<hr>";

    echo md5($senha);
    
    echo "<hr>";

    echo password_hash($senha, PASSWORD_DEFAULT);

    echo "<hr>";

    $senhaProtegida = md5(password_hash($senha, PASSWORD_DEFAULT));

    echo $senhaProtegida;

    echo "<hr>";

    for ($idade=50; $idade >= 0; $idade--) { 
        echo $idade;
    }


?>