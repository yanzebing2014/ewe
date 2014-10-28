<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Article extends CI_Controller {
	public function lists($id='')
	{
		$this->load->view('admin/article_lists');
	}
	public function add()
	{
		$this->load->view('admin/article_add');
	}
}