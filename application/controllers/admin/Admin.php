<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->ion_auth->logged_in() && !$this->ion_auth->is_admin())
			redirect('auth/login');
	}


	public function index()
	{
		$this->load->view('admin/admin-index');
	}
}
