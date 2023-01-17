<?php


namespace app\oauth\controller;


use think\Controller;
use think\Db;
use think\Session;
class query extends Controller
{
    public function create()
    {
        //
        if (Session::get('openid')) {
            return $this->fetch('create');
        } else {
            return $this->redirect('http://wechat.mqz666.top/index.php/oauth/oauthcode?state=query');
        }

    }
    public function save(){
        $a=input('query');
        $result=Db::table('helps')
            ->where(
                [
                    'status' => '1',
                    'problem'=>['like','%' . $a .'%']
                ]
            )
            ->select();
        $this->assign('result',$result);
        return $this->fetch('query/index');
    }
}