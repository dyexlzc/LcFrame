<?
    //home.php中注册所有需要显示的文件，随后生成一个home_index.php，讲/?home转发到这个地址
    ini_set('display_errors',1);            //错误信息
    ini_set('display_startup_errors',1);    //php启动错误信息
    error_reporting(-1);                    //打印出所有的 错误信息

    include("../core/Lcf_core.php");        //引入lcf_core主要文件

    $Page_index=new Page;
    $Page_index->add_el('home_header.php');
    $Page_index->add_el('home_body.php');
    $Page_index->add_el('home_footer.php'); //添加页面元素

    $Page_index->merge('home_index.php');   //合并文件
?>