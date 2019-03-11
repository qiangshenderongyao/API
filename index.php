<?php
$type=$_GET['type'];
switch($type){
    case 1;
    $response=[
        'name' => 'root',
        'age'  => 12,
        'email'=>'root#qq.com'
    ];
    case 2;
        $response=[
            'errno'=>0,
            'msg'  => 'ok',
            'data' =>[
                'name'=>'root',
                'age' =>12,
                'email'=>'root@qq.com'
            ]
        ];
}
header('Content-Type:application/json');
die( json_encode($response) );

?>