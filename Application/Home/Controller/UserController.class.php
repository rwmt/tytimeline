<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends BaseController {

	public function index($user_id = 0) {
		if(!$user_id) $user_id = is_login();
		if(!$user_id) $this -> redirect('Login/index');

		// 加载个人分享
		$share = M('share');
		$share_list = $share -> where('user_id=%d',$user_id) -> order('create_time desc') -> limit(40) -> select();
		$this -> assign('share', $share_list);

		// 加载个人信息
		$user = M('user');
		$data = $user -> where('user_id=%d',$user_id) -> field('password,email', true) -> find();
		$user_info = M('user_info');
		$user_info_data = $user_info -> where('user_id=%d',$user_id) -> find();
		$this -> assign('user', $data);
		$this -> assign('user_info', $user_info_data);

		$this -> display();
	}

	/**
	 * 修改个人信息
	 */
	public function modiUserInfo() {
		$user_id = is_login();
		if(!$user_id) $this -> error("请先登陆！", U('Login/index'));

		// 拉取用户信息
		$user_info = M('user_info');
		$data = $user_info -> find($user_id);
		$this -> assign('data', $data);

		$this -> display();
	}
	public function submitModiUserInfo() {
		if(!IS_AJAX) $this -> error("非法请求！");
		$data = I('post.');

		$user_info = M('user_info');
		$data['user_id'] = is_login();
		$result = $user_info -> save($data);

		if($result !== false) {
			$this -> success();
		} else {
			$this -> error( $user_info -> getError() );
		}

	}

	/**
	 * 修改密码
	 */
	public function modiUserPassword() {
		$user_id = is_login();
		if(!$user_id) $this -> error("请先登陆！", U('Login/index'));

		$this -> display();
	}
	public function submitModiUserPassword() {
		if(!IS_AJAX) $this -> error("非法请求！");
		$post = I('post.');
		$user_id = is_login();

		$user = M('user');
		$u = $user -> find($user_id);

		if($u['group_id'] == 9) {
			// 验证原密码
			$oldpass = md5( $post['old-password'] );
			$newpass = md5( $post['new-password'] );
			if($oldpass != $u['password']) $this -> error("原密码输入错误");

			// 写入新密码
			$result = $user -> where('user_id=%d', $user_id) -> setField('password', $newpass);
			if($result !== false) {
				$this -> success();
			} else {
				$this -> error( $user_info -> getError() );
			}
		} else $this -> error("校园网用户请进入 <a href='http://bbs.cqjtu.edu.cn/memcp.php?action=profile&typeid=1'>论坛 - 个人中心</a> 进行修改密码");
	}

	/**
	 * 修改头像
	 */
	public function modiUserAvatar() {
		$user_id = is_login();
		if(!$user_id) $this -> error("请先登陆！", U('Login/index'));

		$uc = new \Ucenter\Client\Client();
		$avatar = $uc -> uc_avatar($user_id);
		$this -> assign('avatar', $avatar);

		$this -> display();
	}

	/**
	 * 登出操作
	 */
	public function logout() {
		cookie('user_id',null);
		cookie('user_mm',null);
		session('user_id',null);
		$this -> success('退出成功，正在跳转到首页...', U('Index/index'), 1);
	}
}
