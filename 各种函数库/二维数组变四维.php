<?php
//循环文章取出发表文章的人的内容
$datax = array();
$wherex = array();
foreach($data as $k=>$v)
{
    $wherex = array(
        'id' => $v['member_id'], 
        );
    $datax = $model_member->field('username,small_image')->where($wherex)->find();
    $data[$k]['username'] = array_merge_recursive($v,$datax['username']);
    $data[$k]['small_image'] = array_merge_recursive($v,$datax['small_image']);
    $data[$k]['username'] = $datax['username'];
    $data[$k]['small_image'] = $datax['username'];
}