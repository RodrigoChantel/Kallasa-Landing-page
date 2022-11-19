<?php
    if($_POST['page'] == 'login'){
        echo "Retorno feito com sucesso <br>" . $_POST['firstname'] . " Seja bem vindo";
    }else{
        echo "Algo de errado aconteceu!";
    }
?>