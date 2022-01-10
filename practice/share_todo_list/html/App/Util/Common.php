<?php

namespace App\Util;

class Common
{
    public static function sanitaize($before)
    {
        $after = array();
        foreach($before as $k => $v){
            $after[$k] = htmlspecialchars($v,ENT_QUOTES,'UTF-8');
        }
        return $after;
    }

    public static function makeRandomString(int $length = 32):string
    {
        return bin2hex(openssl_random_pseudo_bytes($length));
    }

    public static function generateToken(string $tokenName = 'token'):string
    {
        $token = self::makeRandomString();
        $_SESSION[$tokenName] = $token;
        return $token;
    }
    public static function isValidToken(?string $token , $tokenName = 'token'):bool
    {
        if(!isset($_SESSION[$tokenName]) || $_SESSION[$tokenName] !== $token){
            return false;
        }
        return true;
    }
}