<?php
namespace Home\Controller;
use Think\Controller;
class ServerController extends Controller 
{
    public function index()
    {
    	if (!$this->is_login()) redirect('/');
        $this->display('Server:add');
    }

    public function getList()
    {
    	if (!$this->is_login()) redirect('/');
    	$model = D("Index");
    	import('ORG.Util.Page');
    	$count = $model->where("pid=%d",$_GET['id'])->count();
    	$Page = new \Think\Page($count,10);
    	$show = $Page->show();
		$data = $model ->where("pid=%d",$_GET['id'])->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('page',$show);
		$this->assign('info',$data);
		$this->display('Server:list');
    }

    public function update()
    {
    	if (!$this->is_login()) redirect('/');
    	$model = D("Index");
    	$data['server_account'] = $_POST['server_account'];
    	$data['server_name'] = $_POST['server_name'];	
    	$data['server_url'] = $_POST['server_url'];
    	$data['log_path'] = $_POST['log_path'];
    	$res = $model->where("id=%d",$_POST['id'])->save($data);
    	if($res){
    		$this->success('修改成功！');
    	} else{
    		$this->error( "修改失败！");
    	}
    }

    public function addServer()
    {
    	if (!$this->is_login()) redirect('/');
    	$model = D("Index");
    	$data['server_account'] = $_POST['server_account'];
    	$data['server_name'] = $_POST['server_name'];
    	$data['server_url'] = $_POST['server_url'];
    	$data['log_path'] = $_POST['log_path'];
    	$data['server_pass'] = $_POST['server_pass'];
    	$data['pid'] = intval($_POST['pid']);
    	$res = $model->data($data)->add();
    	if($res){
    			$this->success('添加成功！');	
    	} else{
    		$this->error( "添加失败！");
    	}
    }

    public function delServer()
    {
    	if (!$this->is_login()) redirect('/');
    	$model = D("Index");
    	$res = $model -> where("id=%d",$_GET['id'])->delete();
    	if($res) {
    		$this -> success("删除成功！");
    	}else{
    		$this -> error("删除失败！");
    	}
    }

    public function is_login()
	{
		if($_SESSION['adminuser'] == null){
			return false;
		}
		return true;
	}
}