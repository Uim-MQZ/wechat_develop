<?php

namespace app\oauth\controller;

use think\Controller;
use think\Request;
use think\Session;
use org\wechat\Jssdk;
class Userinfo extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //
       
        if (Session::get('openid')) {
            $openid=Session::get('openid');
            if($user=\app\common\model\Userinfos::where('openid',$openid)->find()) {
                $this->share();
                $this->assign('view',$user);
                
                return $this->fetch('userinfo/oauthuserinfo');
            }
            else 
                return $this->redirect('http://wechat.mqz666.top/index.php/oauth/oauthcode?state=user');
        }

    }
    public function share(){
    $url = $this->request->get('url');
    $config = config('wxConfig');
    $jssdkObj = new Jssdk($config['id'], $config['secret']);
    $res = $jssdkObj->getSignPackage();
    $appId = $res['appId'];
    $timestamp = $res['timestamp'];
    $nonceStr = $res['nonceStr'];
    $signature = $res['signature'];
    $this->assign( array(
            'appId' =>  $appId,
            'timestamp'  => $timestamp,   
            'nonceStr'  =>  $nonceStr,
            'signature'=>$signature,
            ));
    // $res = array(
    //         'appId' =>  $appId,
    //         'timestamp'  => $timestamp,   
    //         'nonceStr'  =>  $nonceStr,
    //         'signature'=>$signature,
    //         );
    //  return json_encode($res);
    }
}