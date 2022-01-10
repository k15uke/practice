<?php

class Phone implements IPhone
{
    public function callPhone(){
        echo '<p>電話を掛ける</p>';
    }

    public function receivePhone(){
        echo '<p>電話を受ける</p>';
    }
}