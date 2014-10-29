<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller {
	// 读取用户列表 admin表
	public function index()
	{
		$this->load->view('admin/user_lists');
	}
	// 新增管理员操作
	public function user_add()
	{
		# code...
	}
	// 编辑管理员操作
	public function user_edit()
	{
		# code...
	}
	// 删除管理员
	public function user_del()
	{
		# code...
	}
	// 读取角色列表
	public function role()
	{
		$this->load->view('admin/user_role');
	}
	// 新增角色组
	public function role_add()
	{
		# code...
	}
	// 编辑角色组
	public function role_edit()
	{
		# code...
	}
	// 删除角色组
	public function role_del()
	{
		# code...
	}
}