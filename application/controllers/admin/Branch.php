<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branch extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		if (empty($this->session->userdata('user'))
			$this->load->view('auth/agent-login');
		
		$this->load->model('branch_model');
	}
	

	public function create()
	{
		$this->form_validation->set_error_delimiters('<span class="span span-important">', '</span>');
		$this->form_validation->set_rules('branch_name', 'Branch Name', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->read();
		}
		else
		{
			if ($this->branch_model->create())
			{
				$this->session->set_flashdata('message', 'Record Added Successfully.');
				$this->read();
			}
			else
			{
				$this->session->set_flashdata('message', 'Oppz! An unexpected error occured.');
				$this->read();
			}
		}
	}

	public function read()
	{
		
		if ($data['branches'] = $this->branch_model->read())
		{
			$this->load->view('admin/admin-branch', $data);
		}
		else
		{
			$this->session->set_flashdata('message', 'No Records Avaliable.');
			$this->load->view('admin/admin-branch');
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
			$this->form_validation->set_rules('branch_name', 'Branch', 'required');
			if ($this->form_validation->run() == FALSE)
			{
				$this->read();
			}
			else
			{
				if ($this->branch_model->edit($id))
				{
					$this->session->set_flashdata('message', 'Record Edited Successfully');
					$this->read();
				}
				else
				{
					$this->session->set_flashdata('message', 'Oppz! An unexpected error occured.');
					$this->read();
				}
			}

		}
	}


	public function delete($id = NULL)
	{
		if ($this->branch_model->delete($id))
		{
			$this->session->set_flashdata('message', 'Record Deleted Successfully');
			$this->read();
		}
		else
		{
			$this->session->set_flashdata('message', 'Oppz! An unexpected error occured.');
			$this->read();
		}
	}

	public function get_branch_count()
	{
		return $this->branch_model->get_branch_count();
	}

}