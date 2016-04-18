<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agent extends CI_Controller 
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
		$this->load->view('agent/index');
	}


	public function view($page = 'agent-index')
	{
		$this->load->view('agent/'.$page);
	}

	public function create()
	{
		$this->form_validation->set_error_delimiters('<span class="span span-important">', '</span>');
		$this->form_validation->set_rules('agent_name', 'Name', 'required');
		$this->form_validation->set_rules('agent_email', 'Phone', 'required|valid_email');
		$this->form_validation->set_rules('agent_phone', 'Phone', 'required|numeric');
		$this->form_validation->set_rules('agent_password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else
		{
			if ($this->agent_model->create())
			{
				$this->session->set_flashdata('message', 'Record Added Successfully.');
				$this->index();
			}
			else
			{
				$this->session->set_flashdata('message', 'Oppz! An unexpected error occured.');
				$this->index();
			}
		}
	}
	/*public function read()
	{
		
		if ($data['agents'] = $this->agent_model->read())
		{
			$this->load->view('agent/agent-agent', $data);
		}
		else
		{
			$this->session->set_flashdata('message', 'No Records Avaliable.');
			$this->load->view('agent/agent-agent');
		}

	}*/



	public function edit($id = NULL)
	{
		if ($id == NULL)
		{
			redirect(base_url());
		}
		else
		{
			$this->form_validation->set_error_delimiters('<span class="span span-important">', '</span>');
			$this->form_validation->set_rules('agent_name', 'Name', 'required');
			$this->form_validation->set_rules('agent_email', 'Phone', 'required|valid_email');
			$this->form_validation->set_rules('agent_phone', 'Phone', 'required|numeric');
			$this->form_validation->set_rules('agent_password', 'Password', 'required');
			$this->form_validation->set_rules('agent_password2', 'Password', 'required|matches[agent_password]');
			if ($this->form_validation->run() == FALSE)
			{
				$this->index();
			}
			else
			{
				if ($this->agent_model->edit($id))
				{
					$this->session->set_flashdata('message', 'Record Edited Successfully');
					$this->index();
				}
				else
				{
					$this->session->set_flashdata('message', 'Oppz! An unexpected error occured.');
					$this->index();
				}
			}

		}
	}


	public function delete($id = NULL)
	{
		if ($this->agent_model->delete($id))
		{
			$this->session->set_flashdata('message', 'Record Deleted Successfully');
			$this->index();
		}
		else
		{
			$this->session->set_flashdata('message', 'Oppz! An unexpected error occured.');
			$this->index();
		}
	}

	public function get_agent_count()
	{
		return $this->agent_model->get_agent_count();
	}
}
