<?php
namespace Home\Controller;
use Think\Controller;
class TravelController extends Controller {
    public function index(){
    	if (session('?login')) {
			$id=session('login');
			// dump($id);
			$this->assign('login',$id);
		}
        $this->display();
    }
}