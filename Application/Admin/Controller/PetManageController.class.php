<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;

use Think\Controller;

include_once DOC_ROOT . '/Application/Common/service/LoginService.class.php';
class PetManageController extends AdminBaseController {
	protected $newpeturl = "http://www.meipet.com.cn/index.php/Admin/PetManage/newpet";
	protected $petlisturl = "http://www.meipet.com.cn/index.php/Admin/PetManage/petlist";
	public function petlist() {
		if (! \LoginService::isLogin ()) {
			$this->error ( "请登录！", $this->loginUrl );
		}
		
		$user = \LoginService::getUserModel ();
		
		$Dao = M ( "pet" );
		$condition ['user_id'] = $user ['id'];
		
		$petList = $Dao->where ( $condition )->order ( 'gmt_modified DESC' )->select ();
		$this->assign ( "petList", $petList );
		// 输出模板
		$this->display ();
	}
	public function newpet() {
		if (! \LoginService::isLogin ()) {
			$this->error ( "请登录！", $this->loginUrl );
		}
		// 输出模板
		$this->display ();
	}
	public function create() {
		header ( "Content-Type:text/html; charset=utf-8" );
		if (! \LoginService::isLogin ()) {
			$this->error ( "请登录！", $this->loginUrl );
		}
		$user = \LoginService::getUserModel ();
		
		$Dao = D ( "Pet" );
		if ($Dao->create ()) {
			$Dao->gmt_modified = date ( 'Y-m-d H:i:s', time () );
			$Dao->gmt_create = date ( 'Y-m-d H:i:s', time () );
			$Dao->user_id = $user ['id'];
			$Dao->status = 'open';
			
			$result = $Dao->add ();
			
			if ($result) {
				$this->success ( "创建成功", "$petlisturl" );
			} else {
				$this->error ( "系统错误", "$newpeturl" );
			}
		} else {
			exit ( $Dao->getError () . ' [ <a href="javascript:history.back()">返 回</a> ]' );
		}
	}
	public function edit() {
		if (! \LoginService::isLogin ()) {
			$this->error ( "请登录！", $this->loginUrl );
		}
		
		$user = \LoginService::getUserModel ();
		
		$petid = $_GET ["petid"];
		if ($petid == null || $petid == "") {
			$this->error ( "参数错误", "$petlisturl" );
		}
		
		$Dao = M ( "pet" );
		$condition ['id'] = $petid;
		$pet = $Dao->where ( $condition )->find ();
		$this->assign ( "pet", $pet );
		// 输出模板
		$this->display ();
	}
	public function update() {
		header ( "Content-Type:text/html; charset=utf-8" );
		if (! \LoginService::isLogin ()) {
			$this->error ( "请登录！", $this->loginUrl );
		}
		\LoginService::getUserModel ();
		
		$Dao = D ( "Pet" );
		if ($Dao->create ()) {
			$Dao->gmt_modified = date ( 'Y-m-d H:i:s', time () );
			
			$result = $Dao->save ();
			if ($result) {
				$this->success ( "修改成功", "$userinfo" );
			} else {
				$this->error ( "系统错误", "$userinfo" );
			}
		} else {
			exit ( $Dao->getError () . ' [ <a href="javascript:history.back()">返 回</a> ]' );
		}
	}
	public function uploadPetImg() {
		header ( "Content-Type:text/html; charset=utf-8" );
		if (! \LoginService::isLogin ()) {
			return $this->ajaxReturn ( $this->errorJson ( "not login" ), 'jsonp' );
		}
		
		$user = \LoginService::getUserModel ();
		
		$img_url = $_GET ["img_url"];
		$pet_id = $_GET ["pet_id"];
		$dec = $_GET ["dec"];
		
		if (empty ( $img_url ) || empty ( $pet_id )) {
			return $this->ajaxReturn ( $this->errorJson ( "param null" ), 'jsonp' );
		}
		
		if ($this->checkImgUrl($img_url)){
			return $this->ajaxReturn ( $this->errorJson ( "img_url error" ), 'jsonp' );
		}
		
		$PetDao = M ( "Pet" );
		$condition ['id'] = $pet_id;
		$pet = $PetDao->where ( $condition )->find ();
		if (empty ( $pet ) || $pet ['user_id'] != $user ['id']) {
			return $this->ajaxReturn ( $this->errorJson ( "pet error" ), 'jsonp' );
		}
		
		$Dao = M ( "PetImg" );
		
		$petImg ['img_url'] = $img_url;
		$petImg ['pet_id'] = $pet_id;
		$petImg ['dec'] = $dec;
		$petImg ['gmt_create'] = date ( 'Y-m-d H:i:s', time () );
		$petImg ['gmt_modified'] = date ( 'Y-m-d H:i:s', time () );
		
		if ($lastInsId = $Dao -> add ( $petImg )) {
			//echo $Dao->getLastSql();
			return $this->ajaxReturn ( $this->successJson ( "ok" ), 'jsonp' );
		} else {
			//echo $Dao->getLastSql();
			return $this->ajaxReturn ( $this->errorJson ( $Dao->getError () ), 'jsonp' );
		}
	}
}