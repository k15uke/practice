<?php

class Mailer implements IMailer{
    public function sendMail(){
        echo 'メールを送信する';
    }

    public function receiveMail(){
        echo 'メールを受信する';
    }
}