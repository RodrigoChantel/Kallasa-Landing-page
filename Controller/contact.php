<?php
    require_once('C:\xampp\htdocs\kallasa.com.br\Model\connection.php');
    class ContactMaintence{
        public $email;
        public $name;
        public $phone;

        public function SetEmail($setEmail){
            $this->email = $setEmail;
        }
        public function GetEmail(){
            return $this->email;
        }

        public function SetName($setName){
            $this->name = $setName;
        }
        public function GetName(){
            return $this->name;
        }

        public function SetPhone($setName){
            $this->phone = $setName;
        }
        public function GetPhone(){
            return $this->phone;
        }
        

        public function SendContact(){
            if($this->name == !null || $this->email == !null || $this->phone == !null){
                $conect = new connect;
                $conect = $conect->connection();
                $email = mysqli_real_escape_string($conect, strtolower ($this->email));
                $name = mysqli_real_escape_string($conect, strtolower ($this->name));
                $phone = mysqli_real_escape_string($conect, strtolower ($this->phone));

                $query = "INSERT INTO contact_request (CLIENT_NAME, CLIENT_EMAIL, CLIENT_NUMBER) 
                          VALUES ('{$name}','{$email}','{$phone}')";
                $check = mysqli_query($conect, $query);
                
                if($check == true){
                    echo "<script type='text/javascript'>alert('Agradecemos o seu contato, $name! Em breve, um de nossos consultores entratá em contato.');location='https://www.kristta.com.br';</script>";
                }
                else{
                    echo "Error:'{$check->error}'";
                }
                
                
            }else{
                echo "Todos os campos precisam ser preenchidos";
            }
        }
    }