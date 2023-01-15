<?php

namespace app\oauth\controller;

use think\Controller;
use think\Request;
use think\Session;
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
            
                $this->assign('view',$user);
                return $this->fetch('userinfo/oauthuserinfo');
            }
            else 
                return $this->redirect('http://wechat.mqz666.top/index.php/oauth/oauthcode?state=user');
        }

    }

}