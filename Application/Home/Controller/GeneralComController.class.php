<?php
namespace Home\Controller;
use Think\Controller;

include_once DOC_ROOT.'/Application/Common/service/LoginService.class.php';
// 通用组件模块
class GeneralComController extends Controller {
    public function mpbar(){
        header("Content-Type:text/html; charset=utf-8");
        echo "第一个例子测试！";
        //$info='这里是网页头部mpbar';
		//$this->assign( "info", $info );
        //输出模板
        //$this->display();
    }
	
	public function mpheader(){
        header("Content-Type:text/html; charset=utf-8");
        $info= '这里是网页头部header';
		$this->assign( "info", $info );
        //输出模板
        $this->display();
    }
	
	public function mpbottom(){
        header("Content-Type:text/html; charset=utf-8");
        $info= '这里是网页底部mpbottom';
		$this->assign( "info", $info );
        //输出模板
        $this->display();
    }
}
?>