<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {
	public function index()
	{
		$this->load->view('admin/login');
	}
	// 登陆操作
	public function login()
	{		

	}
	// 退出操作
	public function logout()
	{
		
	}
	// 记住用户操作
	public function remember()
	{
		
	}
}