<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>栏目管理</title>

    <!-- Bootstrap -->
    <link href="/logsystem/Public/logtemplate/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="css/index.css"> -->
    <link rel="stylesheet" type="text/css" href="/logsystem/Public/logtemplate/css/rightmain.css">
  </head>
  <body>
      <div class="iframecontent">
        <div class="pos">
         <i class="icoh"></i>
          <span>栏目列表</span>
        </div>
        <div class="operate">
          <div class="pull-left">
            <input type="button" name="" value="添加栏目" class="btn  btn-success">
            <input type="button" name="" value="更新排序" class="btn btn-danger">
          </div>
          <!-- operate标题结束 -->
          <div class="list">
            <div class="tablewrap">
              <table class="table" width="100%" id="datalist">
                <thead>
                  <tr>
                    
                    <th>编号</th>
                    <th>服务器名称</th>
                    <th>服务器账号</th>
                    <th>服务器地址</th>
                    <th>服务器路径</th>
                    <th>服务器环境</th>
                    <th>操作</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                      <form method="post" action="/logsystem/index.php/Home/Server/update">
                        <td><input type="" name="id" value="<?php echo ($vo["id"]); ?>"></td>
                        <td><input type="" name="server_name" value="<?php echo ($vo["server_name"]); ?>"></td>
                        <td><input type="" name="server_account" value="<?php echo ($vo["server_account"]); ?>"></td>
                        <td><input type="" name="server_url" value="<?php echo ($vo["server_url"]); ?>"></td>
                        <td><input type="" name="log_path" value="<?php echo ($vo["log_path"]); ?>"></td>
                        <td><input type="" readonly name="pid" value="<?php echo ($vo["pid"]); ?>"></td>
                        <td>
                          <input type="submit" value="修改">
                          <a href="/logsystem/index.php/Home/Index/getLog/id/<?php echo ($vo["id"]); ?>">查看文件</a>
                          <a href="/logsystem/index.php/Home/Server/delServer/id/<?php echo ($vo["id"]); ?>">删除</a>
                        </td>
                      </form>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
              </table>
            </div>
            <div class="page"><?php echo ($page); ?></div>
          </div>
        </div>
      </div>
      <script src="/logsystem/Public/logtemplate/public/js/jquery-3.1.1.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="/logsystem/Public/logtemplate/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>