<?php
    require_once('./Icomputer.php');
    require_once('./IMailer.php');
    require_once('./IPhone.php');
    require_once('./CellPhone.php');

    $phone = new CellPhone();

    funcPhone($phone);
    funcMailer($phone);
    funcComputer($phone);

    function funcPhone(Iphone $phone){
        $phone->callPhone();
        $phone->receivePhone();
    }

    function funcMailer(Imailer $mailer){
        $mailer->sendMail();
        $mailer->receiveMail();
    }

    function funcComputer(Icomputer $computer){
        $computer->playGame();
        $computer->browseWeb();
    }