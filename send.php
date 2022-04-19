<?php
/**
 * QQ1989313426
 * www.xiaoqbk.com
 * 小Q博客
 */

//获取标题
$title = $_GET['title'];

//获取内容
$content = $_GET['content'];

//判断值
if ($title == null || $content == null) {
    die('请输入完整内容！');
}

//获取时间
$date = date("Y-m-d H");

//留言保存路径
$file = 'feedback.txt';

//组合方式
$c = '<title>' . $title . '</title><c>' . $content . '</c>';
$time = '<time>' . $date . '</time>';

//判断是否重复内容
if (substr_count(file_get_contents($file), $c) > 0) {
    die('请勿重复提交！');
}


//追加写入内容
file_put_contents($file, $c . $time, FILE_APPEND);

echo '发送成功！';




