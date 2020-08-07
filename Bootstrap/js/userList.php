<?php

header('Conent-Type:text/html;charset=utf-8');

// 获取用户操作
$type = $_GET['type'];
// 当前页数
$page = $_GET['type'];
// 

// 连接数据库
$link = mysqli_connect();

if(!$link){
    echo '连接失败';
    die;
}


// 判断用户操作
if($type === 'page'){
    // 查询所有数据条数
    $all_sql = "";
    $all_res = mysqli_query();
    // 数据总条数
    $total = mysqli_affected_rows($link);

    // 每一页的起始位置 每页 8 条
    $start = ($page-1)*8;
    // 查询当前页码的数据
    $page_sql = "select * from user order by id limit $start,8";
    $page_res = mysqli_query();
    
    // 解析
    $page_arr = mysqli_fetch_all($page_res,1);
    $data = json_encode($page_arr);

    if (count($page_arr) > 0) {
        echo '{"err":1,"msg":"success","total":'.$total.',"data":}';
    } else {
        echo '{"err":0,"msg":"failed"}';
    }
} else if($type === 'update'){
    // 更新数据sql语句

}




?>