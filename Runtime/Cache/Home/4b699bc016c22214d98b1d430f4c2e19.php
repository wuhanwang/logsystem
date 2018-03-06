<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>网站设置</title>
	<link href="/logsystem/Public/logtemplate/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/logsystem/Public/logtemplate/css/rightmain.css">

</head>
<body>
		

       <div class="iframecontent">
            
            <div class="pos clearfix"><button class="btn btn-success">服务器管理</button><span class="right"><button class="btn btn-info">添加服务器</button></span></div>
              
            <div class="list">
                <div class="itabcontent" id="itabcontent">
                    <form method="post" action="/logsystem/index.php/Home/Server/addServer">
                        <!--站点配置开始-->
                        <div class="itabcontentlist zdpz">
                            <dl class="clearfix">
                                <dt>服务器名称：</dt>
                                <dd>
                                    <input type="text" name="server_name" value="red pig" />
                                </dd>
                            </dl>
                            <dl class="clearfix">
                                <dt>服务器账号：</dt>
                                <dd>
                                    <input type="text" name="server_account" value="root" />
                                </dd>
                            </dl>
                            <dl class="clearfix">
                                <dt>服务器IP地址：</dt>
                                <dd>
                                    <input type="text" name="server_url" value="110.110.110.110" />
                                </dd>
                            </dl>
                            <dl class="clearfix">
                                <dt>服务器密码：</dt>
                                <dd>
                                    <input type="text" name="server_pass" value="123456" />
                                </dd>
                            </dl>
                            <dl class="clearfix">
                                <dt>日志存放路径：</dt>
                                <dd>
                                    <input type="text" name="log_path" value="/opt/lampp/htdocs" />
                                </dd>
                            </dl>
                            <dl class="clearfix">
                                <dt>服务器环境：</dt>
                                <dd>
                                    <select name="pid">
                                        <option value="1">QA环境</option>
                                        <option value="2">STG环境</option>
                                        <option value="3">PROD环境</option>
                                    </select>
                                </dd>
                            </dl>
                            <dl class="clearfix">
                                <dt class="surebtn">保存按钮：</dt>
                                <dd>
                                    <input type="submit" value="添加"/>
                                </dd>
                            </dl>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
	
      <script src="/logsystem/Public/logtemplate/public/js/jquery-3.1.1.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="/logsystem/Public/logtemplate/bootstrap/js/bootstrap.min.js"></script>
      <script type="text/javascript">
      //alert($)

      $(function(){
      	 $("#itab ul li").click(function(){
                    var _id = $(this).index();

                    $(this).addClass('current-item').siblings().removeClass('current-item');
                    $('#itabcontent').children('.itabcontentlist').eq(_id).fadeIn('fast').siblings('.itabcontentlist').css('display','none');
                });
            
      })
      </script>
  </body>
</html>