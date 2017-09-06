
<!DOCTYPE HTML>
<html>
<head>
    <title>后台管理系统</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="../web/assets/css/dpl-min.css" rel="stylesheet" type="text/css" />
    <link href="../web/assets/css/bui-min.css" rel="stylesheet" type="text/css" />
    <link href="../web/assets/css/main-min.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="header">

    <div class="dl-title">
        <!--<img src="/chinapost/Public/assets/img/top.png">-->
    </div>

    <div class="dl-log">欢迎您，<span class="dl-log-user">root</span><a href="{{URL::asset('log/out')}}" title="退出系统" class="dl-log-quit">[退出]</a>
    </div>
</div>
<div class="content">
    <div class="dl-main-nav">
        <div class="dl-inform"><div class="dl-inform-title"><s class="dl-inform-icon dl-up"></s></div></div>
        <ul id="J_Nav"  class="nav-list ks-clear">
            <li class="nav-item dl-selected"><div class="nav-item-inner nav-home">系统管理</div></li>
            <li class="nav-item dl-selected"><div class="nav-item-inner nav-order">课程管理</div></li>
            <li class="nav-item dl-selected"><div class="nav-item-inner nav-order">发现管理</div></li>
            <li class="nav-item dl-selected"><div class="nav-item-inner nav-order">饮食管理</div></li>
            <li class="nav-item dl-selected"><div class="nav-item-inner nav-order">商城管理</div></li>
        </ul>
    </div>
    <ul id="J_NavContent" class="dl-tab-conten">

    </ul>
</div>
<script type="text/javascript" src="../web/assets/js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="../web/assets/js/bui-min.js"></script>
<script type="text/javascript" src="../web/assets/js/common/main-min.js"></script>
<script type="text/javascript" src="../web/assets/js/config-min.js"></script>
<script>
    BUI.use('common/main',function(){
        var config = [
             {id:'1',menu:[{text:'系统管理',items:[
             {id:'2',text:'角色管理',href:'{{URL::asset("role/index")}}'},
             {id:'3',text:'用户管理',href:'{{URL::asset("user/index")}}'},
             {id:'4',text:'菜单管理',href:'{{URL::asset("menu/index")}}'}]}]},
             {id:'5',homePage : '9',menu:[{text:'课程管理',items:[
             {id:'6',text:'课程分类',href:'{{URL::asset("course/category")}}'},
             {id:'7',text:'课程添加',href:'{{URL::asset("course/add")}}'},
             ]}]}
             ];
        new PageUtil.MainPage({
            modulesConfig : config
        });
    });
</script>
</body>
</html>