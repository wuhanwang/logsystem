<?php
return array(
    //'配置项'=>'配置值'
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'logsystem',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  '',    // 数据库表前缀
    'DB_PARAMS'          	 =>  array(), // 数据库连接参数
    'DB_DEBUG'  		     =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  false,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    'DB_DEPLOY_TYPE'        =>  0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'DB_RW_SEPARATE'        =>  false,       // 数据库读写是否分离 主从式有效
    'DB_MASTER_NUM'         =>  1, // 读写分离后 主服务器数量
    'DB_SLAVE_NO'           =>  '', // 指定从服务器序号
//    'URL_MODEL'			    =>'2',
    'DEFAULT_FILTER'        => 'strip_tags,stripslashes',
    'MODULE_DENY_LIST'      =>  array('Home','Runtime','Api'), //禁止访问的模块
    'MODULE_ALLOW_LIST'     =>  array(),    // 允许访问的模块列表
    'SESSION_PATH'=>'',            // 采用默认的Session save path
    'SESSION_EXPIRE'=>'21600*3600',        // 默认Session有效期
    'SESSION_OPTIONS'       => array(
//                            'type' =>'File',
        'expire' => '21600*3600',
    ),
    // 配置邮件发送服务器
    'MAIL_HOST' =>'smtp.163.com',//smtp服务器的名称
    'MAIL_SMTPAUTH' =>false, //启用smtp认证
    'MAIL_USERNAME' =>'18119986561@163.com',//你的邮箱名即发送者的账户名
    'MAIL_FROM' =>'18119986561@163.com',//发件人地址
    'MAIL_FROMNAME'=>'吴汉',//发件人姓名
    'MAIL_PASSWORD' =>'WTTwh521',//邮箱密码
    'MAIL_CHARSET' =>'utf-8',//设置邮件编码
    'MAIL_ISHTML' =>TRUE, // 是否HTML格式邮件
);