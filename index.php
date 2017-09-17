<?php

require __DIR__ . '/vendor/autoload.php';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('1535725636');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '4443e28cdf0b40189d736e5031a971c6']);

$response = $bot->replyText('<reply token>', 'hello!');
var_dump($response);

