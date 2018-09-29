<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>lcf轻量级PHP后端框架</title>
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
    <style>
        .router-link-active{
            background: #ccc;
            padding: 5px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <? 
        ini_set('display_errors',1);            //错误信息
        ini_set('display_startup_errors',1);    //php启动错误信息
        error_reporting(-1);                    //打印出所有的 错误信息

        require("route/index.php"); //基本每个页都要引入这个文件，将所有连接都转发到core中处理
        //引入以后，在Lcf_core中解析参数，并在route中解析参数并且跳转,执行module程序


    ?>
    <!--<a href="?home">首页</a>
    <a href="?center">个人中心</a>-->
</body>
</html>