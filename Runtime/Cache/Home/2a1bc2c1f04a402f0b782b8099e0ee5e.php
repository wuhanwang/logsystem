<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>main</title>

    <!-- Bootstrap -->
    <link href="/logsystem/Public/logtemplate/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="/logsystem/Public/logtemplate/css/index.css"> -->
    <link rel="stylesheet" type="text/css" href="/logsystem/Public/logtemplate/css/rightmain.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-lg-3 col-md-4 col-sm-6 illu">
                <dl>
                    <dt><?php echo ($vo["server_name"]); ?></dt>
                    <dd>
                        <ul>
                            <li><a href="/logsystem/index.php/Home/Index/getServer/id/<?php echo ($vo["id"]); ?>">查看服务器</a></li>
                        </ul>
                    </dd>
                </dl> 
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
      <!-- 第一行结束 -->

    </div>
    <!-- 整个容器结束 -->
    <script src="/logsystem/Public/logtemplate/public/js/jquery-3.1.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/logsystem/Public/logtemplate/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      //alert($)
    </script>
  </body>
</html>