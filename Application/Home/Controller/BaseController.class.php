<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {
	protected function _initialize() {
		if(I('cookie.user_id',0)) {//如果cookie不为空
			if(is_null(session('user_id'))) {//如果未登录
				if($this -> checkpwd(cookie('user_id'), cookie('user_mm'))) {
					$this -> set_loginfo(cookie('user_id'));
					session('user_id',cookie('user_id')); //自动登录
				}
			}
		}
		//dump(I('session.'));
	}
	private function checkpwd($user_id, $pwd) {
		$mm = $this -> getmm($user_id);
		return $mm == $pwd ? true : false;
	}
	/*
	 * 加密算法，将邮箱和密码糅合的一种加密方法
	 */
	protected function getmm($user_id) {
		$user = M('user');
		$result = $user -> where('user_id=%d',$user_id) -> find();
		$mm = md5($result['email']. $result['password']);
		return $mm;
	}

	protected function set_loginfo($user_id) {
		$user = M('user');
		$user -> where('user_id=%d', $user_id) -> setInc('login_times');
		$data['lastlogin_time'] = time();
		$data['lastlogin_ip'] = get_client_ip();
		return $user -> where('user_id=%d',$user_id) -> save($data);
	}

	/**
	 * 登出操作
	 */
	public function logout() {
		//清空cookie
		cookie('user_id',null);

		//uc 同步登出
		$uc = new \Ucenter\Client\Client();
		echo $uc -> uc_user_synlogout();

		session('user_id',null);
		$this -> success('退出成功，正在跳转到首页...', U('Index/index'), 1);
	}

}
