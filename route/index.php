<?  
    /*
        route/index.php：
        此文件负责转发所有的php请求，使其通过类具体化，方便制作MVC框架
        url结构为 module/function/parmas
    */

    include("./core/Lcf_core.php");

    $route=array(
        'home' => 0,
        'center' => 1
    );                              //编写路由规则


    switch(route_module()){                //根据路由执行功能
        case $route['home']: {
            //echo "<a>打开首页</a>"; 
            echo file_get_contents("module/home_index.php");
            break;
        }
        case $route['center']:{
            echo "<a>打开中心</a>"; 
            break;
        }
        default: {
            echo "<a>找不到模块</a>"; 
            break;
        }
    }
    

?>