<?php
    require_once('/xampp/htdocs/kallasa.com.br/App/Controller/Login.php');
    if($_POST['loginDashboard'] = 'auth2022'){
        $user = $_POST['usuario'];
        $password =  $_POST['senha'];
        $ip = $_SERVER['REMOTE_ADDR'];
        $sendLogin = new Login;
        $sendLogin->setName($user);
        $sendLogin->setPassword($password);
        $sendLogin->setIp($ip);
        $sendLogin->validarLogin();
    }

    