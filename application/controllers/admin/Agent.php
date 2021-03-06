<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agent extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->user_id == 0)
		{
			redirect('auth/index/admin', 'refresh');
		}
		$this->load->model('admin_branch_model');
	}
	

	
	public function index()
	{
		
		if ($data['agents'] = $this->admin_agent_model->read())
		{
			$data['week_number'] = $this->admin_game_model->get_current_week();
			$this->load->view('admin/admin-agent', $data);
		}
		else
		{
			$this->session->set_flashdata('message', 'No Records Avaliable.');
			$this->load->view('admin/admin-agent');
		}

	}

	public function create()
	{
		$this->form_validation->set_error_delimiters('<span class="span span-important">', '</span>');
		$this->form_validation->set_rules('agent_name', 'Agent Name', 'required');
		$this->form_validation->set_rules('agent_phone', 'Agent Phone', 'required');
		$this->form_validation->set_rules('agent_password', 'Agent Password', 'required');
		$this->form_validation->set_rules('branch_id', 'Agent Branch', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else
		{
			if ($this->admin_agent_model->create())
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

	



	public function edit($id = NULL)
	{
		if ($id == NULL)
		{
			redirect(base_url());
		}
		else
		{
			$this->form_validation->set_error_delimiters('<span class="span span-important">', '</span>');
			$this->form_validation->set_rules('agent_name', 'agent name', 'required');
			$this->form_validation->set_rules('agent_phone', 'agent phone', 'required');
			if ($this->form_validation->run() == FALSE)
			{
				$this->index();
			}
			else
			{
				if ($this->admin_agent_model->edit($id))
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
		if ($this->admin_agent_model->delete($id))
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
		return $this->admin_agent_model->get_agent_count();
	}

	public function suspend($agent_id = 0)
	{
		if ($this->admin_agent_model->suspend($agent_id))
		{
			$this->session->set_flashdata('message', 'Agent Suspended Succefully - Barred from Logging In');
			$this->index();
		}
		else
		{
			$this->session->set_flashdata('message', 'Oppz! An unexpected error occured.');
			$this->index();
		}
	}

	public function activate($agent_id = 0)
	{
		if ($this->admin_agent_model->activate($agent_id))
		{
			$this->session->set_flashdata('message', 'Agent activated succesfully');
			$this->index();
		}
		else
		{
			$this->session->set_flashdata('message', 'Oppz! An unexpected error occured.');
			$this->index();
		}
	}

}