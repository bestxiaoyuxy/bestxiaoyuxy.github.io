<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>写留言</title>
    <meta name="viewport" content="width=device-width; initial-scale=1.0; minimum-scale=1.0; maximum-scale=1.0">
    <script>
        function httpGet(theUrl)
        {
            var xmlHttp = new XMLHttpRequest();
            xmlHttp.open( "GET", theUrl, false );
            xmlHttp.send( null );
            return xmlHttp.responseText;
        }
    </script>
    <style>
        .background {
            margin: 0 auto;
            max-width: 800px;
            min-width: 320px;
            padding-bottom: 0.1px;
            padding-top: 56px;
        }

        body {
            margin: 0;
            background: #eee;
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

        .card {
            box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2);
            background: #fff;
            margin: 10px;
            padding: 10px;
        }

        .title {
            font-size: 14px;
            color: #424242;
        }

        input {
            border: none;
            border-bottom: solid;
            border-bottom-width: 1px;
            margin-top: 5px;
            width: 100%;
            height: 25px;
            outline: none;
        }

        input:focus {
            outline: none;
            border-color: #03a9f4;
            border-bottom-color: #03A9F4;
        }

        textarea {
            border: none;
            border-bottom: solid;
            border-bottom-width: 1px;
            margin-top: 5px;
            width: 100%;
            height: 200px;
            outline: none;
        }

        textarea:focus {
            outline: none;
            border-color: #03a9f4;
            border-bottom-color: #03A9F4;
        }

        button {
            margin-top: 15px;
            color: #ffffff;
            background: #03A9F4;
            width: 210px;
            height: 35px;
            border-top-left-radius: 0.5em;
            border-top-right-radius: 0.5em;
            border-bottom-left-radius: 0.5em;
            border-bottom-right-radius: 0.5em;
            border-top-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-left-width: 0px;
            cursor: pointer;
            box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>

<div class="top">写留言</div>
<div class="background">
        <div class="card">
            <div class="title">留言标题</div>
            <input type="text" id="title"/>
        </div>
        <div class="card">
            <div class="title">留言内容</div>
            <textarea type="text" id="content"/></textarea>
        </div>
        <div align="center">
            <button onclick="alert(httpGet('send.php?title='+document.getElementById('title').value+'&content='+document.getElementById('content').value))">确定</button>
        </div>



</div>
</body>

</html>
