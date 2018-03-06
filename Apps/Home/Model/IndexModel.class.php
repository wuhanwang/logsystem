<?php
namespace Home\Model;
use Think\Model;
class IndexModel extends Model {
    protected $tableName = 'log';
    protected $fields = array('id', 'server_name', 'server_account', 'server_url','server_pass','log_path','pid');
    protected $pk     = 'id';
}