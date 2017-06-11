<?php
namespace Admin\Controller;
use Think\Controller;
class MainController extends Controller {
    public function index(){
    	$data = M('mf_wo.menutable','mf_');
    	$menuData = $data->field()->select();
    	$this->assign('menuData',$menuData);
        $this->display();
    }
}