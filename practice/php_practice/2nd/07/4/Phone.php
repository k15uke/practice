<?php

class Phone implements IPhone{
    public function callPhone(){
        echo '電話を掛ける';
    }

    public function receivePhone()
    {
        echo '電話を受ける';
    }
}