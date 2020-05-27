<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Log;

class WechatController extends Controller
{
    /**
     * 处理微信的请求消息.
     *
     * @return string
     */
    public function serve()
    {
        Log::info('request arrived.'); // 注意：Log 为 Laravel 组件，所以它记的日志去 Laravel 日志看，而不是 EasyWeChat 日志
        $app = app('wechat.official_account');
        $app->server->push(function ($message) {
            return '欢迎关注 xxxxx';
        });

        return $app->server->serve();
    }

    //获取当前菜单
    public function getMenu()
    {
        $officialAccount = \EasyWeChat::officialAccount();
        $current = $officialAccount->menu->current();

        return $current;
    }

    //获取删除菜单
    public function deleteMenu()
    {
        $officialAccount = \EasyWeChat::officialAccount();
        $current = $officialAccount->menu->delete();

        return ['message' => 'ok'];
    }
}
