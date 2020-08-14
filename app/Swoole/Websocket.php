<?php
namespace App\Swoole;

use Illuminate\Support\Facades\App;
use SwooleTW\Http\Websocket\HandlerContract;
use Illuminate\Http\Request;
use Swoole\Websocket\Frame;
use SwooleTW\Http\Server\Facades\Server as ClientServer;
use SwooleTW\Http\Websocket\Facades\Websocket as webs;

class Websocket implements HandlerContract
{
    private $server;
    public function __construct()
    {
        /** @var Manager $manager */
        $this->server = App::make(ClientServer::class);
    }

    public function onOpen($fd, Request $request)
    {
        /**
         * 客户端建立起长链接后，返回客户端fd
         */
//        $this->server->push($fd, json_encode(['event' => 'open', 'data' => ['fd' => $fd]]));

        return true;
    }

    public function onClose($fd, $reactorId)
    {
        return true;
    }

    public function onMessage(Frame $frame)
    {
        return true;
    }
}
