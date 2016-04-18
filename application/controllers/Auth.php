<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		/*if (empty($this->session->userdata('user'))
			$this->load->view('auth/agent-login');
		*/
	}

	public function index($user = 'agent'){
		$this->load->view('auth/'.$user.'-login');
	}

	public function view($page = 'dashboard')
	{
		if ($this->session->userdata('user_id') == 0)
			redirect(base_url());
		$this->load->view('admin/'.$page);
	}


	public function admin_login()
	{
		$this->form_validation->set_error_delimiters('<span class="span span-danger">', '</span>');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run()== FALSE)
		{
			$this->load->view('auth/admin-login');
		}
		else
		{
			if ($user_id = $this->auth_model->admin_login())
			{
				$this->session->set_userdata('user_id', $user_id);
				redirect('admin/admin/index', 'refresh');
			}
			else
			{
				$this->session->set_flashdata('message', 'Invalid Credentials!');
				$this->load->view('auth/admin-login');
			}
		}
		
	}

	public function agent_login()
	{
		$this->form_validation->set_error_delimiters('<span class="span span-danger">', '</span>');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run()== FALSE)
		{
			$this->load->view('auth/agent-login');
		}
		else
		{
			if ($user_id = $this->auth_model->agent_login())
			{
				$this->session->set_userdata('user_id', $user_id);
				redirect('agent/agent/index', 'refresh');
			}
			else
			{
				$this->session->set_flashdata('message', 'Invalid Credentials!');
				$this->load->view('auth/agent-login');
			}
		}
		
	}

}
