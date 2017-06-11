<?php
namespace Home\Controller;
use Think\Controller;
class DingdanController extends Controller {
    public function index(){
        $this->display();
    }
    //redis连接
    private function connectRedis(){
        $redis=new \Redis();
        $redis->connect(C("REDIS_HOST"),C("REDIS_PORT"));       
        return $redis;
    }
    public function before(){
    	$user_id = I("post.u_id",'0','intval');
    	if ($user_id == 0) {
            $this->ajaxReturn(array("status" => "0","msg" => "请先登录账号"));
        }
        $redis = $this->connectRedis();
        $mykeys = $redis->hKeys("{$user_id}");
        if (!empty($mykeys)) {
            $myvals = $redis->hVals("{$user_id}");
            $dataArr = [];
            foreach ($myvals as $k => $val) {
                $val = unserialize($val);
                $dataArr[] = $val;
            }
        }
        $shopData = M('shop')->select();
        $this->ajaxReturn(array("status" => "1","data" => $dataArr,'shopData'=>$shopData));
    }
    public function pay(){
    	//获取参数
        $user_id = I("post.u_id",'0','intval');
        $p_id = I("post.p_id",'0','intval');
        if ($user_id == '0' || $p_id == '0') {
        	$this->ajaxReturn(array("status" => "0","msg" => "信息错误"));
        }
        $user_queue_key = "goods_".$p_id."_user";
        $redis = $this->connectRedis();
        $myvals = $redis->hVals("{$user_id}");
        $val = unserialize($myvals[0]);
        //判断钱是否足够
        
        $addData = [
            's_id' => $val['goods_id'],
            'u_id' => $val['user_id'],
            'ol_ordertime' => $val['create_time']
        ];
        try{
            //存入订单表
            $re = M('orderlist')->data($addData)->add();
            //商品库存减少
            $numRe = M('shop')->where("s_id={$val['goods_id']}")->setDec('s_num');
            //用户金钱扣款
            
            //删掉已存入数据库的hash数据
            $delRe = $redis->hDel("{$user_queue_key}","{$user_id}");
            $delOd = $redis->hDel("{$user_id}","{$user_queue_key}");
            $this->ajaxReturn(array("status" => "1","msg" => "付款成功"));
        }catch(\Think\Exception $e){
            $this->ajaxReturn(array("status" => "0","msg" => "付款失败",'re'=>$addData));
        };
    }
}