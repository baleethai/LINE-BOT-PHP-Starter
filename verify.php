<?php

$access_token = 'nGVhV/4p3fpy117W1Q6R19OD8eWQyjcp3B/MDssgPi+PwLoJno0ENJW1q2Do0OvLMWA/Bwp3MIpKpy4yb2tRKhRX6rGHMf5f3xMNzW0zo2s2BqPPlFw+PUMqLXr6xqCpTZSMb/dvHt+jgw/SNnL1CgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;