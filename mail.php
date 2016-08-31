<?php
require 'vendor/autoload.php';

use SparkPost\SparkPost;
use GuzzleHttp\Client;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;

$httpClient = new GuzzleAdapter(new Client());
$sparky = new SparkPost($httpClient, ['key'=>'76c2919cc54c205851d087325b98997a81696fd3']);

$sparky = new SparkPost($httpClient, $options);
$promise = $sparky->transmissions->post([
    'content' => [
        'from' => [
            'name' => 'SparkPost Team',
            'email' => 'from@sparkpostbox.com',
        ],
        'subject' => 'First Mailing From PHP',
        'html' => '<html><body><h1>Congratulations, {{name}}!</h1><p>You just sent your very first mailing!</p></body></html>',
        'text' => 'Congratulations, {{name}}!! You just sent your very first mailing!',
    ],
    'substitution_data' => ['name' => 'YOUR_FIRST_NAME'],
    'recipients' => [
        [
            'address' => [
                'name' => 'YOUR_NAME',
                'email' => 'YOUR_EMAIL',
            ],
        ],
    ],
    'cc' => [
        [
            'address' => [
                'name' => 'ANOTHER_NAME',
                'email' => 'ANOTHER_EMAIL',
            ],
        ],
    ],
    'bcc' => [
        [
            'address' => [
                'name' => 'AND_ANOTHER_NAME',
                'email' => 'AND_ANOTHER_EMAIL',
            ],
        ],
    ],
]);
?>