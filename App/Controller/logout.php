<?php
session_start();
session_destroy();
header('Location: http://localhost/kallasa.com.br/app/views/pages/login/');
exit();
?>