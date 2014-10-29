<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Category extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	// 读取栏目列表
	public function index()
	{
		$this->load->view('admin/category');
	}
	// 栏目新增操作
	public function add()
	{
		$this->load->view('admin/category_add');
	}
	// 栏目修改操作
	public function edit()
	{
		# code...
	}
	// 栏目删除操作
	public function del()
	{
		# code...
	}
}