<?php
    require_once('C:\xampp\htdocs\kallasa.com.br\App\Config\conection.php');
    class Login{
        private $userName;
        private $passwordUser;
        public $lastLogin;
        private $ip;

        // Metodos
        public function validarLogin()
        {
            if($this->getName() == !null and $this->getPassword() == !null){
                $conexao = new connect;
                $conexao = $conexao->connection();
                $str1 = $this->getName();
                $str2 = $this->getPassword();
                $str3 = $this->getLastLogin();
                $str4 = $this->getIp();
                $user = mysqli_real_escape_string($conexao, strtolower (str_replace('=', '', $str1)));
                $password = mysqli_real_escape_string($conexao, $str2);
                $lastLogin = mysqli_real_escape_string($conexao, strtolower (str_replace('=', '', $str3)));
                $ipAuth = mysqli_real_escape_string($conexao, strtolower( str_replace('=', '', $str4)));
                
                $queryDB = "select * from users where USER = '{$user}'";
                $checkLogin = mysqli_query($conexao, $queryDB);
                //$checkPasswordV =  mysqli_fetch_assoc($checkPassword);
                $numquery = mysqli_num_rows($checkLogin);
                $booValidate = filter_var($numquery, FILTER_VALIDATE_BOOL);

                if($booValidate == true){
                    $passwordString = mysqli_real_escape_string($conexao, $password);
                    $passwordEncrypt = password_hash($passwordString, PASSWORD_DEFAULT);
                    
                    //Busca senha hash cadastrada, comparando o nome de usuário.
                    $queryPassword = "select * from users where USER = '{$user}' ";
                    $executeQueryPassword = mysqli_query($conexao, $queryPassword);
                    $listQuery = mysqli_fetch_assoc($executeQueryPassword);
                    $result = $listQuery['PASSWORD'];

                    //Compara senha trazida do POST com senha resgatada do Banco de Dados
                    if(password_verify($passwordString, $result)):
                        ob_start();
                        session_start();
                        $_SESSION['user'] = $listQuery['USER'];
                        
                        
                        header("location: http://localhost/kallasa.com.br/app/index.php");

                        //echo "<h1 class'h1Bemvindo'>Bem vindo</h1>" . "<br>" . "<h2 class='h1Bemvindo'>{$listQuery['user']}<h2>"; 
                    else:
                        header('location:http://localhost/kallasa.com.br/app/views/pages/login/');
                    endif;
                }else{
                    echo "<script>window.alert('Usuário ou senha incorretos! Contate o administrador.'); location='http://localhost/kallasa.com.br/app/views/pages/login/';</script>";
                }
                exit();
                
                
            }else{
                header('location:http://localhost/kallasa.com.br/app/views/pages/login/');
            }
        }


        // Especiais
        public function setName($user)
        {
            $this->userName = $user;
        }
        public function getName()
        {
            return $this->userName;
        }

        public function setPassword($pwd)
        {
            $this->passwordUser = $pwd;
        }
        public function getPassword()
        {
            return $this->passwordUser;
        }

        public function setLastLogin()
        {
            $this->lastLogin = date('d/m/Y');
        }
        public function getLastLogin()
        {
            return $this->lastLogin;
        }

        public function setIp($sip)
        {
            $this->ip = $sip;
        }
        public function getIp()
        {
            return $this->ip;
        }

    }