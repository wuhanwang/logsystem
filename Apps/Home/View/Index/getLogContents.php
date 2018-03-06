<?php

$cache_file = "/home/wwwroot/default/dateApi/public/".$_GET['filename'];
$getLine = $_GET['maxLine'];
$lines = 0;
if($fh = fopen($cache_file,'r')){
    while(!feof($fh)){
        if(fgets($fh)){
            $lines++;
        }
    }
}

$data = $lines>$getLine?FileLastLines($cache_file,500):FileLastLines($cache_file,$lines);
exit($data);
function FileLastLines($filename,$n){
    if(!$fp=fopen($filename,'r')){
        echo "打开文件失败，请检查文件路径是否正确，路径和文件名不要包含中文";
        return false;
    }
    $pos=-2;
    $eof="";
    $str="";
    while($n>0){
        while($eof!="\n"){
            if(!fseek($fp,$pos,SEEK_END)){
                $eof=fgetc($fp);
                $pos--;
            }else{
                break;
            }
        }
        $str.=fgets($fp);
        $eof="";
        $n--;
    }
    return nl2br($str);
}
//echo nl2br(FileLastLines('sss.txt',4));