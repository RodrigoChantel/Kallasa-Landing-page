<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://192.168.0.100/kallasa.com.br/Assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="http://192.168.0.100/kallasa.com.br/Assets/css/web-projects.css" rel="stylesheet" type="text/css">
    <link href="http://192.168.0.100/kallasa.com.br/Assets/css/web-assessments.css" rel="stylesheet" type="text/css">
    <link href="http://192.168.0.100/kallasa.com.br/Assets/css/web-plans.css" rel="stylesheet" type="text/css">
    <link href="http://192.168.0.100/kallasa.com.br/Assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://192.168.0.100/kallasa.com.br/Assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://192.168.0.100/kallasa.com.br/Assets/css/workflow.css" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="./Assets/img/favicon/favicon.ico">
    <title>Workflow Kristta</title>
    <style>
    </style>
</head>
<body>
    
    <?php
        include_once('http://192.168.0.100/kallasa.com.br/Views/layout/header.php');
        date_default_timezone_set('America/Sao_Paulo');
        $horaAtual = new datetime();
        $horaAtual = $horaAtual->format('H:i');

                include_once("http://192.168.0.100/kallasa.com.br/Views/layout/workflow/content.php");
/*
        if(($horaAtual > $inicioDaNoite) && ($horaAtual < $fimDaNoite))
            include_once("http://192.168.0.100/kallasa.com.br/Views/layout/workflow/contentDia.php");
        
        elseif(($horaAtual < $inicioDaNoite) && ($horaAtual > $fimDaNoite))
            include_once("http://192.168.0.100/kallasa.com.br/Views/layout/workflow/contentNoite.php");

        elseif(($horaAtual == $inicioDaNoite))
            echo "Inicio da noite";*/
    ?>
    

</body>
<script src="http://192.168.0.100/kallasa.com.br/Assets/js/popper.min.js"></script>
<script src="http://192.168.0.100/kallasa.com.br/Assets/js/style.js"></script>
<script src="http://192.168.0.100/kallasa.com.br/Assets/js/bootstrap.min.js"></script>
<script src="http://192.168.0.100/kallasa.com.br/Assets/js/fontawesome.js" crossorigin="anonymous"></script>
<script>const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))</script>
</html>
