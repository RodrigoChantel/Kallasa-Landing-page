<?php
    require_once('C:\xampp\htdocs\poo.curso\Config\conection.php');

    if(session_start()){
        class Solicitacoes{
            public $dados;
            public $contagem;

            public function __construct()
            {
                $this->getDados($this->setDados());
                $this->setCount();
            }

            public function setDados()
            {
                $conexao = new connect;
                $conexao = $conexao->connection();
                $sqlQuery = "select * from contact_request where 1";
                $execute = $conexao->query($sqlQuery);
                //$list = mysqli_num_rows($execute);
                $this->dados = $execute->fetch_all(MYSQLI_ASSOC); 
            }
            public function getDados()
            {
                return $this->dados;
            }

            public function setCount()
            {
                $conexao = new connect;
                $conexao = $conexao->connection();
                $sqlQuery = "select CLIENT_ID from contact_request where 1";
                $execute = mysqli_query($conexao, $sqlQuery);
                //$execute = $conexao->query($sqlQuery);
                $testao = mysqli_num_rows($execute);
                
                $this->contagem = $testao;
            }
            public function getCount()
            {
                echo $this->contagem;
            }

        }
    }else{
        echo "Algo deu errado, contate o administrador.";
    }