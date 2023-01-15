<?php

namespace app\weixin;

class wxBasic
{

    static private $appid = 'wxe0cf58bc89b77414';
    static private $secret = '02d3663b8b2c3ab77fa80e6909949800';
    static private $self_token = 'weixin';

    static public function getAppid()
    {
        return self::$appid;
    }

    static public function getSecret()
    {
        return self::$secret;
    }

    static public function getSelfToken()
    {
        return self::$self_token;
    }

    static public function getConfig()
    {
        return [
            'appid'=>self::$appid,
            'secret'=>self::$secret,
            'self_token'=>self::$self_token
        ];
    }

}
