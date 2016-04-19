<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();

		if ($this->session->user_id == 0)
		{
			redirect('auth/index/agent', 'refresh');
		}
	}

	public function index()
	{
		$this->load->view('agent/agent-index');
	}


	public function view($page = 'agent-index')
	{
		$this->load->view('agent/'.$page);
	}

	
}
