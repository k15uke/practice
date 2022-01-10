<?php

class CellPhone implements IPhone,IMailer,IComputer{
    
    public function callPhone(){
        echo '電話を掛ける';
    }

    public function receivePhone(){
        echo '電話を受ける';
    }

    public function sendMail(){
        echo 'メールを送信する';
    }

    public function receiveMail(){
        echo 'メールを受信する';
    }

    public function playGame(){
        echo 'ゲームをする';
    }

    public function browseWeb(){
        echo 'ウェブを閲覧する';
    }
}