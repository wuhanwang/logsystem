<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>文件列表</title>
    <meta charset="UTF-8"/>
    <style type="text/css">
        body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:12px;
            margin:0;
        }
        #main {
            height:1800px;
            padding-top:90px;
            text-align:center;
        }
        #fullbg {
            background-color:gray;
            left:0;
            opacity:0.5;
            position:absolute;
            top:0;
            z-index:3;
            filter:alpha(opacity=50);
            -moz-opacity:0.5;
            -khtml-opacity:0.5;
        }
        #dialog {
            font-size: 30px;
            background-color:#fff;
            border:5px solid rgba(0,0,0, 0.4);
            height:70%;
            left:15%;
            margin:-200px 0 0 -200px;
            padding:1px;
            position:fixed !important; /* 浮动对话框 */
            position:absolute;
            top:30%;
            width:80%;
            text-align: left;
            z-index:5;
            border-radius:5px;
            display:none;
            overflow-y:scroll;
            overflow-x:scroll;
        }
        #dialog p {
            margin:0 0 12px;
            height:24px;
            line-height:24px;
            background:#CCCCCC;
        }
        #dialog p.close {
            position:fixed;
            text-align:right;
            padding-right:10px;
        }
        #dialog p.close a {
            color:#fff;
            text-decoration:none;
        }
    </style>
</head>
<body>
<script src="/logs/logsystem/Public/myadmin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<center>
    <h1>文件列表</h1>

        <div id="main" >
            <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div style="margin: 2px;float:left;border:1px solid #F00;height:50px;width:200px;">
                    <a title="<?php echo ($vo); ?>" href="javascript:showBg('<?php echo ($vo); ?>','<?php echo ($id); ?>');">
                        <?php echo ($vo); ?>
                    </a>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <div id="fullbg"></div>
            <div id="dialog">
                <p class="close"><a href="#" onclick="closeBg();">关闭</a></p>
                <div>正在加载，请稍后....</div>
            </div>
        </div>

</center>
<script type="text/javascript">
    //显示灰色 jQuery 遮罩层
    function showBg(arg1,arg2) {
        var bh = $("body").height();
        var bw = $("body").width();
        $("#fullbg").css({
            height:bh,
            width:bw,
            display:"block"
        });
        $("#dialog").show(function () {
            var div = $(this).children("div");
            $.ajax({
                url:"/logs/logsystem/index.php/Home/Index/ajaxReturn",
                data:"filename="+arg1+"&id="+arg2,
                dataType:"text",
                type:"get",
                async:true,
                success:function (data){
                    div.text("").append(data);
                },
                error:function (){
                    div.text("请求错误！");
                }
            });


        });
    }
    //关闭灰色 jQuery 遮罩
    function closeBg() {
        $("#fullbg,#dialog").hide();
    }
</script>
</body>
</html>