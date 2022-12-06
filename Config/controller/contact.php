<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';

    class ContactMaintence{
        public function SendProcess($name2, $email2){
            
            if(!$name2 == null && !$email2 == null){
                
                $client = $name2;
                $email = $email2;
                $assunto = "CONTACT @{'$client'} -> Página de manutenção";
                $sendDate = date('d/m/Y');
                $sendHour = date('H:i:s');
                $emailContent = "
                <!DOCTYPE html>
                <html lang='pt-br'>

                    <table border='1px' style='border-color: black; border-radius:5px; padding-top:5px; padding-bottom: 5px; padding-left: 5px; padding-right: 5px;'>
                        <thead>
                            <tr style='background-color:#5d50f7; color:white;'>
                                <th scope='col'>Nome</th>
                                <th scope='col'>E-mail</th>
                                <th scope='col'>Data</th>
                                <th scope='col''Hora</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style='background-color: #c0c0c0;'>
                                <td style='padding-left: 20px; padding-right:20px;'>{'$client'}</td>
                                <td style='padding-left: 20px; padding-right:20px;'>{'$email'}</td>
                                <td style='padding-left: 20px; padding-right:20px;'>{'$sendDate'}</td>
                                <td style='padding-left: 20px; padding-right:20px;'>{'$sendHour'}</td>
                            </tr>
                        </tbody>
                    </table>

                </html>
                ";

                $mail = new PHPMailer();
                $mail->isSMTP();
                $mail->Host = 'smtp.hostinger.com';
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = 'SSL/TLS';
                $mail->Username = 'rodrigo.hora@kristta.com.br';
                $mail->Password = 'Adv@2020';
                $mail->Port = '465';

                $mail->setFrom('rodrigo.hora@kristta.com.br', 'Rodrigo_Hora');
                $mail->addAddress('contato@kristta.com.br', 'Remetente');

                $mail->isHTML(true);

                $mail->Subject = utf8_decode($assunto);
                $mail->Body = nl2br($emailContent);
                $mail->AltBody = nl2br(strip_tags($emailContent));

                if($mail->send()){
                    echo "E-mail enviado com sucesso";
                }else{
                    echo "Algo deu errado! Tente novamente mais tarde.";
                }
            }else{
                echo "Todos os dados precisam ser preenchidos.";
            }
            
        }
    }