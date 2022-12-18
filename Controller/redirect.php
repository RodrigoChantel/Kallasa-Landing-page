<?php
    
    if($_POST['timeline'] == 'show'){
        echo 'conectado com sucesso';
    } else{
        'algo de errado aconteceu.';
    }

    //contato por e-mail da página de manutenção:
    if($_POST['contatar'] == 'contatoFeito'){
        include_once('./contact.php');
        
        $sendInfo = new ContactMaintence;
        $sendInfo->SetEmail($_POST['email']);
        $sendInfo->SetName($_POST['name']);
        $sendInfo->SetPhone($_POST['phone']);
        $sendInfo->SendContact();
        
        //$sendInfo->SendProcess();
        
    }

    