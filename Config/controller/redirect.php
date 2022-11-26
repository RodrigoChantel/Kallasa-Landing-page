<!DOCTYPE html>
<html lang="en">
<head>
    <link rel='icon' type='image/x-icon' href='http://192.168.0.100/kallasa.com.br/Assets/img/favicon/favicon.ico'>
    <title>Controle</title>
</head>
<body>
    <?php
        if($_POST['page'] == 'login'){
            echo "Retorno feito com sucesso <br>" . $_POST['firstname'] . " Seja bem vindo";
        }else{
            echo "Algo de errado aconteceu!";
        }

        if($_POST['uploadsTest'] == 'upOn'){
            $tmp_name = $_FILES['archive']['tmp_name'];
            $name = $_FILES['archive']['name'];
            $uploads_dir = 'C:\xampp\htdocs\kallasa.com.br\Uploads';
            if(move_uploaded_file($tmp_name, "$uploads_dir/$name")){
                echo "<script>window.alert('Arquivo enviado com sucesso!'); location='http://192.168.0.100/kallasa.com.br/Views/pages/workflow.php';</script>";  
            } else{
                echo "<script>window.alert('Você precisa escolher ao menos um arquivo'); location='http://192.168.0.100/kallasa.com.br/Views/pages/workflow.php';</script>";  
            }
        }

        if($_POST['uploadsTest2'] == 'upOn2'){
            $tmp_name = $_FILES['archive2']['tmp_name'];
            $name = $_FILES['archive2']['name'];
            $uploads_dir = 'C:\xampp\htdocs\kallasa.com.br\Uploads';

            for ($i=0; $i < count($name); $i++) { 
                if(move_uploaded_file($tmp_name[$i], "$uploads_dir/$name[$i]")){
                    echo "<script>window.alert('Arquivo enviado com sucesso!'); location='http://192.168.0.100/kallasa.com.br/Views/pages/workflow.php';</script>";  
                } else{
                    echo "<script>window.alert('Você precisa escolher ao menos um arquivo'); location='http://192.168.0.100/kallasa.com.br/Views/pages/workflow.php';</script>";  
                }
            }
        }

        if($_POST['makeDirectory'] == 'directory'){
            $newDirectory = strtolower('/xampp/htdocs/kallasa.com.br/Uploads/' . $_POST['directoryName']);
            $directoryMaster = (string) $newDirectory;
            if(is_dir($directoryMaster)){
                echo "Caminho já existe. <br>";
                echo $directoryMaster;
            } else{
                return mkdir('/xampp/htdocs/kallasa.com.br/Uploads/' . $_POST['directoryName']);
            }
            //echo mkdir($_POST['directoryName']);
        }

        if($_POST['timeline' == 'show']){
            echo 'conectado com sucesso';
        } else{
            'algo de errado aconteceu.';
        }
    ?>
</body>
</html>
