<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branch extends CI_Controller 
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
		
		if ($data['branches'] = $this->admin_branch_model->index())
		{
			$this->load->view('admin/admin-branch', $data);
		}
		else
		{
			$this->session->set_flashdata('message', 'No Records Avaliable.');
			$this->load->view('admin/admin-branch');
		}

	}

	public function create()
	{
		$this->form_validation->set_error_delimiters('<span class="span span-important">', '</span>');
		$this->form_validation->set_rules('branch_name', 'Branch Name', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else
		{
			if ($this->admin_branch_model->create())
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
			$this->form_validation->set_rules('branch_name', 'Branch', 'required');
			if ($this->form_validation->run() == FALSE)
			{
				$this->index();
			}
			else
			{
				if ($this->admin_branch_model->edit($id))
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
		if ($this->admin_branch_model->delete($id))
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

	public function get_branch_count()
	{
		return $this->admin_branch_model->get_branch_count();
	}

}