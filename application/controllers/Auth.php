<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
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
		$this->form_validation->set_rules('admin_phone', 'Phone Number', 'required');
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
		$this->form_validation->set_rules('agent_phone', 'Phone', 'required');
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
				redirect('agent/index/index', 'refresh');
			}
			else
			{
				$this->session->set_flashdata('message', 'Invalid Credentials!');
				$this->load->view('auth/agent-login');
			}
		}
		
	}

/* *************************** ONLINE USERS ************************************************** */
	public function ouser_index(){
		$this->load->view('public/login');
	}


	public function ouser_create()
	{
		$this->form_validation->set_error_delimiters('<span class="span span-important">', '</span>');
		$this->form_validation->set_rules('ouser_surname', 'Surname', 'required');
		$this->form_validation->set_rules('ouser_firstname', 'Firstname', 'required');
		$this->form_validation->set_rules('ouser_email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('ouser_phone', 'Phone', 'required|numeric');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('public/login');
		}
		else
		{
			if ($this->auth_model->ouser_create())
			{
				$this->session->set_flashdata('message', 'Your account has been successfully created. you can now login.');
				$this->load->view('public/login');
			}
			else
			{
				$this->session->set_flashdata('message', 'Oppz! An unexpected error occured.');
				$this->load->view('public/login');
			}
		}
	}
	
	public function ouser_login()
	{
		$this->form_validation->set_error_delimiters('<span class="span span-danger">', '</span>');
		$this->form_validation->set_rules('ouser_phone', 'Phone', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run()== FALSE)
		{
			$this->load->view('public/login');
		}
		else
		{
			if ($user_id = $this->auth_model->ouser_login())
			{
				$this->session->set_userdata('user_id', $user_id);
				redirect('public/ouser/index', 'refresh');
			}
			else
			{
				$this->session->set_flashdata('message', 'Invalid Credentials!');
				$this->load->view('public/login');
			}
		}
	}

/************* END OF ONLINE USERS *************************** */
	public function logout($user = 'agent')
	{
		unset($_SESSION['user_id']);
		$this->session->sess_destroy();
		$this->index($user);
	}

	public function ouser_logout()
	{
		unset($_SESSION['user_id']);
		$this->session->sess_destroy();
		$this->ouser_index();
	}

}
