<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../web/Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="../web/Css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="../web/Css/style.css" />
    <script type="text/javascript" src="../web/Js/jquery.js"></script>
    <script type="text/javascript" src="../web/Js/jquery.sorted.js"></script>
    <script type="text/javascript" src="../web/Js/bootstrap.js"></script>
    <script type="text/javascript" src="../web/Js/ckform.js"></script>
    <script type="text/javascript" src="../web/Js/common.js"></script>

 

    <style type="text/css">
        body {
            padding-bottom: 40px;
        }
        .sidebar-nav {
            padding: 9px 0;
        }

        @media (max-width: 980px) {
            /* Enable use of floated navbar text */
            .navbar-text.pull-right {
                float: none;
                padding-left: 5px;
                padding-right: 5px;
            }
        }


    </style>
</head>
<body>
<form class="form-inline definewidth m20" action="index.html" method="get">    
   
    <input type="text" name="username" id="username" class="abc input-default" >&nbsp;&nbsp;  
    <button type="submit" class="btn btn-primary">查询</button>&nbsp;&nbsp; 
    <button type="button" class="btn btn-success" id="addnew">新增课程分类</button>
</form>
<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>
        <th>课程id</th>
        <th>课程名称</th>
        <th>是否展示</th>
        <th>是否导航</th>
        <th>排序</th>
        <th>操作</th>
    </tr>
    </thead>
   
	     
</table>
</body>
</html>
<script>
    $(function () {

		$('#addnew').click(function(){
			window.location.href="{{URL::asset('user/add')}}";
		});

    });

	function del(id)
	{		
		if(confirm("确定要删除吗？"))
		{		
			var url = "{{URL::asset('user/del')}}";
			
			window.location.href=url;				
		}
	
	}
</script>