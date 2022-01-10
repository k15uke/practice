<?php

class CellPhone implements IPhone,IMailer,IComputer{
    public function callPhone(){
        echo '<p>電話をかける</p>';
    }

    public function receivePhone(){
        echo '<p>電話を受ける</p>';
    }

    public function sendMail(){
        echo '<p>メールを送信する</p>';
    }
    
    public function receiveMail(){
        echo '<p>メールを受信する</p>';
    }

    public function playGame(){
        echo '<p>ゲームをする</p>';
    }
    public function browseWeb(){
        echo '<p>ウェブを閲覧する</p>';
    }
}