<?php
//服务器中需要需要定时执行dealData.php这个文件
//或者当redis里面有3个值的时候执行文件
if (!ini_get('date.timezone')) {
    date_default_timezone_set('Asia/Shanghai');
}

if (!isset($_GET['MAC']) || !isset($_GET['getcode'])) {
    exit(getJsonString('error param', 1));
}

$redis = newRedis();

if($redis -> llen("muxList") >= 2) exec("/usr/bin/php /usr/share/nginx/www/mux/dealData.php");

if($redis -> exists($_GET['MAC'])){
    exit($redis -> get($_GET['MAC']));
}else{
    $redis -> rpush("muxList",$_GET['MAC']);
    exit(getJsonString('first request,please request once more', 4));
}

function newRedis($host = '127.0.0.1',$port = 6379)
{
    $redis = new Redis();
    $redis -> connect($host, $port);
    return $redis;
}

function getJsonString($message,$code = 0)
{
    return json_encode(['error_code'=>$code,'message'=>$message]);
}