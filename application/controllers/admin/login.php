<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {
	public function index()
	{
		// echo(base_url());
		$this->load->view('admin/login');
	}
}