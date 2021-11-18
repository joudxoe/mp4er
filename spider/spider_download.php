<?php

    $url='https://mp4er.cc/downloadInfo/list?mid=19185';
    $content=file_get_contents($url);
    $arr=json_decode($content);
    print_r($arr);