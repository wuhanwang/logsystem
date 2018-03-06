<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/logsystem/Public/logtemplate/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="../public/css/base.css"> -->
	<link rel="stylesheet" type="text/css" href="/logsystem/Public/logtemplate/css/index.css">
	<title>后台管理系统</title>
</head>
<body>

	<div class="head">
		<div class="headlogo pull-left">
			<h1><a href="javascript:;">菜单管理</a></h1>
		</div> 
		<ul class="headnav pull-left">
			<li class="menu_0 current_menu">
				<a href="javascript:;">菜单管理</a>
			</li>
		</ul>
		<ul class="headlink pull-right">
			<li class="link_0"><a href="javascript:;">您好，admin</a></li>
			<li class="link_1"><a href="javascript:;"><span class="ton">隐藏菜单</span></a></li>
			<li class="link_2"><a href="/logsystem/index.php/Home/Index/environList" >首页</a></li>
			<li class="link_3"><a href="javascript:;">帮助</a></li>
			<li class="link_4"><a href="/logsystem/index.php/Home/Index/logout">退出</a></li>
		</ul>
	</div>
	<!-- 头部页面结束 -->
	<div class="leftmenu">
		<div class="leftmenu_0">
			<dl>
				<dt>QA环境管理</dt>
				<dd>
					<ul class="clearfix">
						<li><a href="javascript:;" _link="/logsystem/index.php/Home/Server/getList/id/1">服务器列表</a></li>
						<li><a href="javascript:;" _link="/logsystem/index.php/Home/Server/index">添加服务器</a></li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt>STG环境管理</dt>
				<dd>
					<ul class="clearfix">
						<li><a href="javascript:;" _link="/logsystem/index.php/Home/Server/getList/id/2">服务器列表</a></li>
						<li><a href="javascript:;" _link="/logsystem/index.php/Home/Server/index">添加服务器</a></li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt>PROD环境管理</dt>
				<dd>
					<ul class="clearfix">
						<li><a href="javascript:;" _link="/logsystem/index.php/Home/Server/getList/id/3">服务器列表</a></li>
						<li><a href="javascript:;" _link="/logsystem/index.php/Home/Server/index">添加服务器</a></li>
					</ul>
				</dd>
			</dl>



		</div>
		<!-- leftmenu_0结束 -->
		<div class="leftmenu_0 hidden">
			<dl>
				<dt>内置模块</dt>
				<dd>
					<ul class="clearfix">
						<li><a href="javascript:;">自由模块管理</a></li>
						<li><a href="javascript:;">广告管理</a></li>
						<li><a href="javascript:;">专题管理</a></li>
						<li><a href="javascript:;">公告管理</a></li>
						<li><a href="javascript:;">友情链接</a></li>
						<li><a href="javascript:;">留言本管理</a></li>
						<li><a href="javascript:;">评论管理</a></li>

					</ul>
				</dd>
			</dl>
			<dl>
				<dt>其他模块</dt>
				<dd>
					<ul>
						<li><a href="javascript:;">其他</a></li>
					</ul>
				</dd>
			</dl>
			
		</div>
		<!-- leftmenu_1结束 模块管理 -->
		<div class="leftmenu_0 hidden">
			<dl>
				<dt>系统设置</dt>
				<dd>
					<ul class="clearfix">
						<li><a href="javascript:;" _link="./webset.html">网站设置</a></li>
						<li><a href="javascript:;">伪静态|缓存设置</a></li>
						<li><a href="javascript:;">在线客服设置</a></li>
						<li><a href="javascript:;">清除系统缓存</a></li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt>静态缓存</dt>
				<dd>
					<ul class="clearfix">
						<li><a href="javascript:;">一键更新全站</a></li>
						<li><a href="javascript:;">更新首页</a></li>
						<li><a href="javascript:;">更新栏目</a></li>
						<li><a href="javascript:;">更新文档</a></li>
						<li><a href="javascript:;">更新专题</a></li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt>会员管理</dt>
				<dd>
					<ul class="clearfix">
						<li><a href="javascript:;">会员管理</a></li>
						<li><a href="javascript:;">会员组管理</a></li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt>管理员管理</dt>
				<dd>
					<ul class="clearfix">
						<li><a href="javascript:;">系统用户管理</a></li>
						<li><a href="javascript:;">用户组组管理</a></li>
						<li><a href="javascript:;">节点列表</a></li>
					</ul>
				</dd>
			</dl>

		</div>
		<!-- leftmenu_2系统设置结束 -->
		<div class="leftmenu_0 hidden">
			<dl>
				<dt>扩展管理</dt>
				<dd>
					<ul class="clearfix">
						<li><a href="javascript:;">模型管理</a></li>
						<li><a href="javascript:;">菜单管理</a></li>
						<li><a href="javascript:;">数据库管理</a></li>
						<li><a href="javascript:;">联动管理</a></li>
						<li><a href="javascript:;">区域链接</a></li>
						<li><a href="javascript:;">数据元管理</a></li>
						<li><a href="javascript:;">已传文件管理</a></li>

					</ul>
				</dd>
			</dl>
			<dl>
				<dt>我的账户</dt>
				<dd>
					<ul>
						<li><a href="javascript:;">修改我的信息</a></li>
						<li><a href="javascript:;">修改密码</a></li>
					</ul>
				</dd>
			</dl>
			
		</div>
	</div>
	<!-- 左边导航结束 -->
	<div class="rightmain" id="rightmain">
		<div class="rightcontent">
			<iframe src="/logsystem/index.php/Home/Index/main" id="main" name="main" frameborder="0" scrolling="yes"></iframe>
		</div>
	</div>

	 <script src="/logsystem/Public/logtemplate/public/js/jquery-3.1.1.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="/logsystem/Public/logtemplate/bootstrap/js/bootstrap.min.js"></script>
	  <script src="/logsystem/Public/logtemplate/public/js/banner.js"></script>
	  <script type="text/javascript" src="/logsystem/Public/logtemplate/js/left.js"></script>
</body>
</html>