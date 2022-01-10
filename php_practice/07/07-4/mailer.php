<?php

class Mailer implements IMailer{
    public function sendMail(){
        echo '<p>メールを送信する</p>';
    }

    public function receiveMail(){
        echo '<p>メールを受信する</p>';
    }
}