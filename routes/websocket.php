<?php


use Illuminate\Http\Request;
use SwooleTW\Http\Websocket\Facades\Websocket;

/*
|--------------------------------------------------------------------------
| Websocket Routes
|--------------------------------------------------------------------------
|
| Here is where you can register websocket events for your application.
|
*/


//Websocket::on('connect', function ($websocket, $request) {
//    // in connect callback, illuminate request will be injected here
//    $websocket->emit('message', '测试信息222');
//});

Websocket::on('disconnect', function ($websocket) {
    // this callback will be triggered when a websocket is disconnected
});


Websocket::on('example', function ($websocket, $data) {
    $websocket->emit('message', $data);
});

// sending to all clients except sender
Websocket::on('test','App\Http\Controllers\Swoole\SwooleController@test');

