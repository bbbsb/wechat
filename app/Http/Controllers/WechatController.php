<?php

namespace App\Http\Controllers;

use EasyWeChat\Foundation\Application;
use Illuminate\Http\Request;

class WechatController extends Controller
{
    public function index()
    {
        $cfg = [
            'app_id' => 'wx3db2aee0760bd36a',
            'secret' => '8f0470faa641cb07ed9273092c095587',
            'token'  => 'smallbaby',
        ];
        $app = new Application($cfg);
        return $app->server->serve();
    }
}
