<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.5.1/jquery.js"></script>
    <!-- Styles -->
</head>
<body>
<div class="" style="width: 1200px;margin: 0 auto">

    <div class="content">
        <h2>聊天内容</h2>
    </div>
    <textarea class="xiaoxi"></textarea><br/>
    <button class="btn">发送消息</button>
</div>
</body>
<script>
    var wsServer = 'ws://101.201.67.99:9001';
    var websocket = new WebSocket(wsServer);
    websocket.onopen = function (evt) {
        console.log("Connected to WebSocket server.");
    };

    websocket.onclose = function (evt) {
        console.log("Disconnected");
    };

    websocket.onmessage = function (evt) {
        console.log('Retrieved data from server: ' + evt.data);
    };

    websocket.onerror = function (evt, e) {
        console.log('Error occured: ' + evt.data);
    };
    $('.btn').click(function () {
        let content = $('.xiaoxi').val();
        websocket.send('message','测试');
    })
</script>
</html>
