<?php

namespace App;

use SwooleTW\Http\Websocket\HandlerContract;
use Illuminate\Http\Request;
use Swoole\Websocket\Frame;

class Swoole implements HandlerContract
{
    /**
     * "onOpen" listener.
     *
     * @param int $fd
     * @param \Illuminate\Http\Request $request
     *
     * @return bool
     */
    public function onOpen($fd, Request $request)
    {
        /**
         * 客户端建立起长链接后，返回客户端fd
         */
        $this->server->push($fd, json_encode(['event' => 'open', 'data' => ['fd' => $fd]]));
        return true;
    }

    /**
     * "onMessage" listener.
     *  only triggered when event handler not found
     *
     * @param \Swoole\Websocket\Frame $frame
     */
    public function onMessage(Frame $frame)
    {
        echo "Message: {$frame->data}\n";
        return;
    }

    /**
     * "onClose" listener.
     *
     * @param int $fd
     * @param int $reactorId
     */
    public function onClose($fd, $reactorId)
    {
        echo 1;
        return;
    }
}
