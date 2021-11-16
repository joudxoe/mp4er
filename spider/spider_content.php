<?php
    header('content-type:text/html;charset=utf-8');

    require __DIR__.'/../vendor/autoload.php';

    use phpspider\core\phpspider;
    use phpspider\core\requests;
    use phpspider\core\selector;

    $tar='https://mp4er.cc/guoju/20763.htm';

    $html=requests::get($tar);

    if(!empty($html)){
        $id=selector::select($html,'//input[@name="topicId"]/@value');
        $dcomment=selector::select($html,'//div[@class="ui minimal comments"]');
        $mcomment=selector::select($html,'//div[@id="comments-wrapper"]');
        printf('%s%s',$id,PHP_EOL);
        printf('%s%s',$dcomment,PHP_EOL);
        printf('%s%s',$mcomment,PHP_EOL);
    }