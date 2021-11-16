<?php
    header('content-type:text/html;charset=utf-8');

    require __DIR__.'/../vendor/autoload.php';

    use phpspider\core\phpspider;
    use phpspider\core\requests;
    use phpspider\core\selector;

    $host='localhost';
    $user='root';
    $pass='root1234';
    $database='mp4er';

    $link=new mysqli($host,$user,$pass,$database);

    if($link->connect_error){
        printf('(%u) %s',$link->connect_errno,$link->connect_error);
        exit;
    }

    $tar='https://mp4er.cc/s/all/47?year=2021';

    $html=requests::get($tar);

    // $lastpage=selector::select($html,'//div[@class="ui pagination menu"]/a[last()]/@href');

    if(!empty($html)){

        $ahref=$aid=$atitle=$ashort=$acover=$arate=$astatus=$apublish=$atype=[];

        $cards=selector::select($html,'//div[@class="card"]');

        foreach($cards as $card){

            $href=selector::select($card,'//a[@class="image"]/@href');
            $href=trim('https://mp4er.cc'.substr($href,0,strrpos($href,';')));
            array_push($ahref,$href);

            $start=strrpos($href,'/');
            $id=trim(str_replace('.htm','',str_replace('/','',substr($href,$start))));
            array_push($aid,$id);

            $title=selector::select($card,'//a[@class="image"]/@title');
            $title=trim($title);
            array_push($atitle,$title);

            $short=selector::select($card,'//span[@class="header"]');
            $short=trim($short);
            array_push($ashort,$short);

            $cover=selector::select($card,'//a[@class="image"]/img/@src');
            $cover=trim($cover);
            array_push($acover,$cover);

            $rate=selector::select($card,'//span[@class="rate"]');
            $rate=!empty($rate)? trim(str_replace('分','',$rate)):0;
            array_push($arate,$rate);

            $status=selector::select($card,'//span[@class="ep"]');
            $status=!empty($status)? $status:'未知';
            $status=trim($status);
            array_push($astatus,$status);

            $publish=selector::select($card,'//div[@class="meta"]/span');
            $publish=trim($publish);
            array_push($apublish,$publish);

            $type=trim(str_replace('https://mp4er.cc/','',substr($href,0,strrpos($href,'/'))));
            array_push($atype,$type);
        }

        $open=fopen('log_urls.txt','ab');
        $open_query=fopen('log_query.txt','ab');

        // 輸出內容
        for($i=0;$i<count($ahref);$i++){
            $line='['.date("Y-m-d H:i:s",time()).'] '.$ahref[$i].'=='.$aid[$i].'=='.$ashort[$i].'=='.$acover[$i];
            printf('%s%s',$line,PHP_EOL);
            fwrite($open,$line.PHP_EOL);
            $query='INSERT INTO vinfo VALUES('.$aid[$i].',"'.$atitle[$i].'","'.$ashort[$i].'","'.$acover[$i].'",'.$arate[$i].',"'.$astatus[$i].'","'.$apublish[$i].'","'.$atype[$i].'","'.$ahref[$i].'")';
            if(!$link->query($query)){
                printf('[%s] 寫入資料庫失敗(%u)%s',date('Y-m-d H:i:s',time()),$aid[$i],PHP_EOL);
            }else{
                printf('[%s] 寫入資料庫成功(%u)%s',date('Y-m-d H:i:s',time()),$aid[$i],PHP_EOL);
                fwrite($open_query,'['.date("Y-m-d H:i:s",time()).']'.$query.PHP_EOL);
            }
        }

        fclose($open);
        fclose($open_query);
    }