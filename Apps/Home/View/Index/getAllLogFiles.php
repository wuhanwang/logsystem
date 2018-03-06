<?php

$cache_file = "/var";
$file = scandir($cache_file);
unset($file[0]);
unset($file[1]);
return json_encode($file);

