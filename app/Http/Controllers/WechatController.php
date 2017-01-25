<?php

namespace App\Http\Controllers;

use EasyWeChat\Foundation\Application;
use Illuminate\Http\Request;

class WechatController extends Controller
{
    private $app;

    public function __construct()
    {
        $cfg = [
            'app_id' => 'wx3db2aee0760bd36a',
            'secret' => '8f0470faa641cb07ed9273092c095587',
            'token'  => 'smallbaby',

            'debug'  => true,
            'log'    => [
                'level' => 'debug',
            ]
        ];

        $this->app = new Application($cfg);
    }

    public function index()
    {
        $server = $this->app->server;
        $server->setMessageHandler(function($message){
           switch ($message->MsgType) {
               case 'event':
                   break;
               case 'text':
                   return $message->content;
                   break;
               case 'image':
                   break;
               case 'voice':
                   break;
               case 'video':
                   break;
               case 'location':
                   break;
               case 'link':
                   break;
               default:
           }
        });
        return $server->serve();
    }

    public function broadcast()
    {
        $broadcast = $this->app->broadcast;
    }
}
