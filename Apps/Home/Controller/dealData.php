<?php

require_once '../photoserver/Plui/DbConnection.php';
require_once '../photoserver/Plui/Db.php';
require_once '../photoserver/common.php';

$redis = newRedis();
$MAC = $redis -> lpop("muxList");

while ($MAC){
    data2redis($MAC);
}

function newRedis($host = '127.0.0.1',$port = 6379)
{
    $redis = new Redis();
    $redis -> connect($host, $port);
    return $redis;
}

function data2redis($mac)
{
    $db = Db::instance('db1');
    $project = $db
    ->select('projectid')
    ->from('t_controller')
    ->where('MAC=:MAC')
    ->bindValues(['MAC' => $mac])
    ->limit(1)
    ->query();
    $redis = newRedis();
    if (empty($project)) $redis -> set($mac, getJsonString('error mac address', 2));

    $project_id = $project[0]['projectid'];

    $year = date('Y');
    $month = date('n');
    $day = date('j');
    $where = [
        "c_festival='def'",
        "(c_year=$year or c_year='def')",
        "(c_month=$month or c_month='def')",
        "(c_day=$day or c_day='def')",
        "(c_workday='def')",
        "c_dayOrNight='def'",
        "c_condition='def'",
        "c_quality='def'",
        "c_weather='def'",
        "projectid=$project_id"
    ];

    $operates = $db->select(['c_operate', 'c_hour', 'c_minute'])->from('t_timer')->where($where)->query();
    plog($db->lastSQL());
    plog(json_encode($operates));

    if (empty($operates)) {
        $redis -> set($mac,getJsonString('empty', 6));
    }
    $redis -> set($mac, getJsonString($operates));
}

function getJsonString($message,$code = 0)
{
    return json_encode(['error_code'=>$code,'message'=>$message]);
}