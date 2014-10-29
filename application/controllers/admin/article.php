<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Article extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	// 读取文章列表
	public function lists($id='')
	{
		$this->load->view('admin/article_lists');
	}
	// 新增文章
	public function add()
	{
		$this->load->view('admin/article_add');
	}
	// 修改文章
	public function edit()
	{
		# code...
	}
	// 删除文章
	public function del()
	{
		# code...
	}
}