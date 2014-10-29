<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Set extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	// 读取链接列表
	public function links()
	{
		$this->load->view('admin/set_links');
	}
	// 链接新增操作
	public function links_add()
	{
		# code...
	}
	// 链接修改操作
	public function links_edit()
	{
		# code...
	}
	// 链接删除操作
	public function links_del()
	{
		# code...
	}
}