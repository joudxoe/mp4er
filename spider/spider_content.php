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

    $tar=[
        'https://mp4er.cc/dongzuo/19163.htm',
        'https://mp4er.cc/fanzui/19181.htm',
        'https://mp4er.cc/guoju/19185.htm',
        'https://mp4er.cc/jilu/19155.htm',
        'https://mp4er.cc/jilu/19180.htm',
        'https://mp4er.cc/juqing/19162.htm',
        'https://mp4er.cc/kehuan/19194.htm',
        'https://mp4er.cc/guoju/19185.htm',
        'https://mp4er.cc/xiju/19182.htm'
    ];

    $tar=[
        'https://mp4er.cc/xiju/19182.htm'
    ];

    foreach($tar as $url){

        $html=requests::get($url);

        if(!empty($html)){

            $id=selector::select($html,'//input[@name="topicId"]/@value');
            $id=trim($id);

            // ==========

            /*

            $title=selector::select($html,'//h2[@class="text-center ui header"]');
            $title=trim($title);

            $cover=selector::select($html,'//img[@class="image thumb"]/@src');
            $cover=trim($cover);

            $intro=selector::select($html,'//div[@class="summary"]');
            $intro=$link->real_escape_string(trim(str_replace('　　','',str_replace('剧情简介：','',strip_tags($intro)))));

            $info=selector::select($html,'//div[@class="info0"]/ul');
            $info=$link->real_escape_string(trim($info));

            $summary=selector::select($html,'//section[@class="abstract mobile-hide"]/p');
            $summary=$link->real_escape_string(trim(str_replace('摘要：','',strip_tags($summary))));

            $lastmod=selector::select($html,'//dl[@class="dl-inline"]/dd[1]');
            $lastmod=trim($lastmod);

            $rate=selector::select($html,'//dl[@class="dl-inline"]/dd[2]');
            $rate=($rate=='暂无')? 0:trim($rate);

            // 輸出至控制台
            printf('[%s] %s==%s==%s==%s%s',date('Y-m-d H:i:s'),$id,$title,$cover,$lastmod,PHP_EOL);

            // 寫入至日誌
            $log=sprintf('[%s] %s==%s==%s==%s%s',date('Y-m-d H:i:s'),$id,$title,$cover,$lastmod,PHP_EOL);

            $open=fopen('log_intro.txt','ab');
            fwrite($open,$log);
            fclose($open);

            // 插入記錄至資料庫
            $query='INSERT INTO vintro VALUES("'.$id.'","'.$title.'","'.$cover.'","'.$intro.'","'.$summary.'","'.$info.'","'.$lastmod.'",'.$rate.')';

            */

            // ==========

            // ==========

            // $dcomment=selector::select($html,'//div[@class="ui minimal comments"]');
            // $dcomment=!empty($dcomment)? $dcomment:'';
            // $dcomment=$link->real_escape_string(trim($dcomment));
            // $mcomment=selector::select($html,'//div[@id="comments-wrapper"]');
            // $mcomment=!empty($mcomment)? $mcomment:'';
            // $mcomment=$link->real_escape_string(trim($mcomment));
            // $query='INSERT INTO vcommentwrap VALUES ("'.$id.'","'.$dcomment.'","'.$mcomment.'")';

            // ==========

            // https://mp4er.cc/guoju/play/19185-0.htm
            $anchors='';
            $ahref=selector::select($html,'//div[@class="info1"]/a/@href');
            $ainner=selector::select($html,'//div[@class="info1"]/a');
            if(is_array($ahref)){
                foreach($ahref as $key=>$val){
                    $aurl='https://mp4er.cc'.substr($val,0,strrpos($val,';'));
                    $anchors.='<a class="ui secondary mini button" target="_blank" href="'.$aurl.'">'.$ainner[$key].'</a>';
                }
            }else{
                $ahref='https://mp4er.cc'.substr($ahref,0,strrpos($ahref,';'));
                $anchors.='<a class="ui secondary mini button" target="_blank" href="'.$ahref.'">'.$ainner.'</a>';
            }

            // https://mp4er.cc/downloadInfo/list?mid=19185
            $downloads=selector::select($html,'//div[@id="download-list"]');
            $downloads=$link->real_escape_string($downloads);

            $torrent=selector::select($html,'//div[@id="torrent-list"]/div[@class="ui middle aligned animated list"]');
            $torrent=$link->real_escape_string($torrent);

            // if(!$link->query($query)){
            //     printf('寫入資料(%s)失敗%s',$id,PHP_EOL);
            // }else{
            //     printf('寫入資料(%s)成功%s',$id,PHP_EOL);
            // }
        }

    }