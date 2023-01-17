<?php

namespace app\index\controller;
use think\Controller;
use app\weixin\wxMenu;


class Menu extends Controller
{
    private $m,$menu;
    private $post_menu=[

        'button'=> [
           [
               'type'=>'view',
               'name'=>'我的博客',
               'url'=>'https://uim-mqz.github.io/'
           ],
            [
                'name'=>'用户操作',
                'sub_button'=>[
                    [
                        'type'=>'view',
                        'name'=>'用户中心',
                        'url'=>'http://wechat.mqz666.top/index.php/oauth/userinfo',

                    ],
                    [
                        'type'=>'view',
                        'name'=>'获取帮助',
                        'url'=>'http://wechat.mqz666.top/index.php/oauth/help' ,
                    ],
                    [
                        'type'=>'view',
                        'name'=>'问题查询',
                        'url'=>'http://wechat.mqz666.top/index.php/oauth/query/create' ,
                    ],


                ]
            ]
        ]
    ];
    public function index(){
        $this->m=new wxMenu();
        $this->menu=$this->m->createMenu($this->post_menu);
        echo $this->menu;
        //return $this->menu;

    }

    public function getMenu(){
        $this->m=new wxMenu();
        $this->menu=$this->m->getMenu();
        return $this->menu;

    }
    public function deleteMenu(){
        $this->m=new wxMenu();
        $this->menu=$this->m->deleteMenu();
        return $this->menu;
    }

}