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
        'https://mp4er.cc/xiju/19157.htm',
        'https://mp4er.cc/xiju/19182.htm'
    ];

    foreach($tar as $url){

        $html=requests::get($url);

        if(!empty($html)){
            $id=selector::select($html,'//input[@name="topicId"]/@value');
            $id=trim($id);

            $dcomment=selector::select($html,'//div[@class="ui minimal comments"]');
            $dcomment=!empty($dcomment)? $dcomment:'';
            $dcomment=$link->real_escape_string(trim($dcomment));

            $mcomment=selector::select($html,'//div[@id="comments-wrapper"]');
            $mcomment=!empty($mcomment)? $mcomment:'';
            $mcomment=$link->real_escape_string(trim($mcomment));

            $query='INSERT INTO vcommentwrap VALUES ("'.$id.'","'.$dcomment.'","'.$mcomment.'")';

            if(!$link->query($query)){
                printf('寫入資料(%s)失敗%s',$id,PHP_EOL);
            }else{
                printf('寫入資料(%s)成功%s',$id,PHP_EOL);
            }
        }

    }