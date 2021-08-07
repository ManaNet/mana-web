<?php

## Wanna know what's funny?
## Cloudflare Pages requires this to be called 404.
## Because you can't set a try_files config like in NGINX.
## So I am instead forcing it to go here on a 404.

use Dotenv\Dotenv;
use Pecee\Http\Request;
use Pecee\SimpleRouter\SimpleRouter;

## Read the .env file and also import autoloader from composer.
require_once('vendor/autoload.php');
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

## This actually just exists to redirect new invites into
## our wiki. Despite being called webhook, it does no webhook thing :kokolaugh:.
SimpleRouter::get('/webhook', function (){
    header('Location: https://wiki.manabot.fun');
});

## The link to the wiki.
SimpleRouter::get('/wiki', function (){
    header('Location: https://wiki.manabot.fun');
});

## If you want to subscribe to the bot.
SimpleRouter::get('/plans', function (){
    header('Location: https://patreon.com/manabot');
});

## You can use this to gift other users.
SimpleRouter::get('/gift/{gift}', function ($license) {
    header("Location: https://gateway.manabot.fun/gift/$license");
});

## This exists to unify our invite links.
SimpleRouter::get('/invite/', function () {
	header('Location: https://discord.com/oauth2/authorize?client_id=741288788164345856&permissions=1177939302&redirect_uri=https%3A%2F%2Fmanabot.fun%2Fwebhook&response_type=code&scope=applications.commands%20identify%20bot&state=manabotfun');
});

## This is used for pinging a shard, the connection address consists of six paths
## two of which are private paths which are encoded in the .env file.

## For example: https://shard_manager.address.com/secret_here/second_secret/shards/$shard/ping.
SimpleRouter::get('/shard/{shard}', function ($shard){
    $request = Requests::get($_ENV['CONNECTION_ADDRESS']."/shards/$shard/ping", [], []);
    if($request->status_code != 200){
        echo json_encode(['status' => 'outage']);
    } else {
        $response = json_decode($request->body, true);
        if($response['status'] == null){
            echo json_encode(['status' => 'operational', 'unavailable' => $response['unavailable'], 'servers' => $response['servers'], 'channels' => $response['channels'], 'cachedUsers' => $response['cachedUsers'], 'uptime' => $response['uptime'], 'cluster' => $response['cluster'], 'system' => $response['system']]);
        } else {
            echo json_encode(['status' => 'outage']);
        }
    }
});


## We want to handle actual 404 requests towards this side.
SimpleRouter::error(function(Request $request, \Exception $exception) {

    switch($exception->getCode()) {
        case 404:
            response()->redirect('https://manabot.fun');
        case 403:
            response()->redirect('https://manabot.fun');
    }
    
});

SimpleRouter::start();


?>