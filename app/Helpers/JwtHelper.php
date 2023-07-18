<?php

namespace App\Helpers;
use Firebase\JWT\JWT;

class JwtHelper{
    public static function generateJwtToken($payload, $secretKey){
        $algorithm = 'HS256';
        $token = JWT::encode($payload, $secretKey, $algorithm);
        return $token;
    }
}
