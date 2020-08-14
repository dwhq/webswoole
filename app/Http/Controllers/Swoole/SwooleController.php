<?php

namespace App\Http\Controllers\Swoole;

use http\Env\Request;
use App\Http\Controllers\Controller;
use SwooleTW\Http\Websocket\Websocket;

class SwooleController extends Controller
{
    //
    public function index()
    {
        $data =[];
        return view('Swoole.index',$data);
    }
    public function test(Websocket $websocket, $data)
    {
        $websocket->emit('return', "我收到了你的消息" .json_decode($data,true));
    }
}
