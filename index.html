<!--
小Q博客www.xiaoqbk.com
-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>柒宇留言板</title>
    <meta name="viewport" content="width=device-width; initial-scale=1.0; minimum-scale=1.0; maximum-scale=1.0">
</head>
<style>
    body {
        margin: 0;
        background: #eee;
    }

    .background {
        margin: 0 auto;
        max-width: 800px;
        min-width: 320px;
        padding-bottom: 0.1px;
    }

    .top {
        background: #03A9F4;
        color: #FFFFFF;
        height: 56px;
        width: 100%;
        line-height: 56px;
        font-size: 17px;
        padding-left: 10px;
        box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2);
        position: fixed;
    }

    .list {
        padding-top: 56px;
        padding-bottom: 10px;
    }

    .card {
        box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2);
        background: #fff;
        margin: 10px;
        padding: 10px;
    }

    .list_title {
        color: #03A9F4;
        font-size: 15px;

    }

    .list_content {
        font-size: 14px;
        margin: 5px;
        color: #757575;
        word-wrap: break-word;
        word-break: break-all;
    }

    .list_time {
        text-align: right;
        font-size: 13px;
        margin-top: 5px;
    }

    .write {
        width: 50px;
        height: 50px;
        background: #03A9F4;
        text-align: center;
        line-height: 55px;
        border-radius: 50%;
        color: #fff;
        font-size: 13px;
        box-shadow: 1px 3px 5px rgba(0, 0, 0, 0.3);
        position: fixed;
        bottom: 15px;
        right: 20px;
    }

</style>

<body>
<!--标题栏-->
<div class="top">柒宇留言板</div>
<div class="background">
    <!--留言列表-->
    <div class="list">
        <?php
        //留言路径
        $file = 'feedback.txt';

        //判断是否存在
        if (!is_file($file)) {

            echo '<div align="center">空空如也~</div>';

        } else {
            //读取文件
            $message = file_get_contents($file);

            //转化为数组
            $pieces = explode("<title>", $message);
            $arrlength = count($pieces);

            for ($x = 1; $x < $arrlength; $x++) {

                $data = $pieces[$x];

                //截取标题
                $title = strstr($data, '</title>', true);

                //截取内容
                $content = strstr(strstr($data, "<c>"), "</c>", true);

                //截取评论时间
                $time = strstr(strstr($data, "<time>"), "</time>", true);

                $content = str_replace("<c>", "", $content);

                $time = str_replace("<time>", "", $time);

                //输出内容
                echo '
            <div class="card">
            <div class="list_title">'.nl2br(htmlentities($title,ENT_QUOTES,"UTF-8")).'</div>
            <div class="list_content">'.nl2br(htmlentities($content,ENT_QUOTES,"UTF-8")).' </div>
            <div class="list_time">'.$time.'</div>
            </div>';

            }
        }
        ?>
    </div>

    <!--x悬浮按钮-->
    <a href="write.php">
        <div class="write">
            <div>写留言</div>
        </div>
    </a>


</div>
<!--底部-->
<script>
var bg_img=["http://api.btstu.cn/sjbz/zsy.php"];  //这里可以添加图片路径，每个路径用""包起来，每个路径之间用逗号分开，要在英文状态下输入符号。
document.body.style.background="url("+bg_img[Math.floor(Math.random()*(bg_img.length))]+")";  //设置随机背景图，这里不用改。

</script>

</html>
