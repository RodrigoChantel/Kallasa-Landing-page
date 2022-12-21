<?php
    require_once('C:\xampp\htdocs\kallasa.com.br\App\Config\conection.php');
    class MinhaLista{
        public $meusAtt;
        public $idUserx;

        public function __construct()
        {
            $this->getMeusAtendimentos();
        }


        public function setMeusAtendimentos()
        {
            $conexao = new connect;
            $conexao = $conexao->connection();
            $saveId = $this->getIdUser5();
            $sqlQuery = "select * from contact_request where ID_USER_RETURN = '{$saveId}'";
            $execute = mysqli_query($conexao, $sqlQuery);
            //$list = mysqli_num_rows($execute);
            $this->meusAtt = $execute->fetch_all(MYSQLI_ASSOC); 
        }
        public function getMeusAtendimentos()
        {
            return $this->meusAtt;
        }

        public function setIdUser5()
        {
            $this->idUserx = $_SESSION['user_id'];
        }
        public function getIdUser5(){
            return $this->idUserx;
        }

    }

    