<?php

use App\Calculator\CalculatorClient;

require 'vendor/autoload.php';

$client = new CalculatorClient(
    'localhost:50051',
    [
        'credentials' => \Grpc\ChannelCredentials::createInsecure(),
    ]
);
for($i = 0; $i < 10000; $i++)
{
    $sum = new \App\Calculator\Sum([
        'a' => $i,
        'b' => $i + 1
    ]);
    [$result, $mt] = $client->Sum($sum)->wait();
}
