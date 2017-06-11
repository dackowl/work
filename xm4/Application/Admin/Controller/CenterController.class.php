<?php
namespace Admin\Controller;
use Think\Controller;
class CenterController extends Controller {
    public function index(){
    	session_start;
    	$user=['id'=>1,'nick'=>2];
				session('login',$user);
        $this->display();

    }
    public function yzpwd(){
    	$oldpwd = I('post.oldpwd','');
    	if ($oldpwd =='') {
    		$this->ajaxReturn(array("status" => "0","msg" => "密码不正确"));
    	}
    	$oldpwd = md5($oldpwd);
    	$s_id = session('login.id');
    	$where = [
    		's_id' => $s_id,
    		's_pwd' => $oldpwd
    	];
    	$re = M('staff')->where($where)->find();
    	if (!isset($re)) {
    		$this->ajaxReturn(array("status" => "0","msg" => "错误"));
    	}
    	$this->ajaxReturn(array("status" => "1","msg" => "正确"));
    }
    public function cgpwd(){
    	$newpwd = I('post.newpwd','');
    	if ($newpwd =='') {
    		$this->ajaxReturn(array("status" => "0","msg" => "信息错误"));
    	}
    	$newpwd = md5($newpwd);
    	$s_id = session('login.id');
    	$data = [
    		's_pwd' => $newpwd
    	];
    	$re = M('staff')->where("s_id = {$s_id}")->save($data);
    	if (!isset($re)) {
    		$this->ajaxReturn(array("status" => "0","msg" => "修改失败"));
    	}
    	$this->ajaxReturn(array("status" => "1","re"=>$re,"msg" => "修改成功"));
    }
}