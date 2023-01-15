<?php

namespace app\oauth\controller;

use think\Controller;
use think\Request;
use think\Session;
use app\weixin\wxBasic;
use app\weixin\wxCURL;

class Oauthcode extends Controller
{
    //获取公众号配置：appid，secret
    protected static $wxcfg;
    public function index()
    {

        //获取公众号配置：appid，secret
        self::$wxcfg=wxBasic::getConfig();
        //授权回调路径
        $return_url='http://wechat.mqz666.top/index.php/oauth/oauthreturn';
        //获取授权码接口
        $get_code_url = 'https://open.weixin.qq.com/connect/oauth2/authorize';
        $get_code_url.='?appid='.self::$wxcfg['appid'] .
            '&redirect_uri='. urlencode($return_url) .
            '&response_type=code' .
            '&scope=snsapi_userinfo' .
            '&state='. input('get.state') .
            '#wechat_redirect';

        return $this->redirect($get_code_url);

//            exit($get_code_url);
//        header('location'.$get_code_url);
        //exit(input('get.state'));


    }
}