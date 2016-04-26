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
		$this->form_validation->set_rules('odd_type', 'Odd Type', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else
		{
			$data = $this->input->post('odd_type');
			/*foreach($data[] as $char)
			{
				echo $char;
			}*/
			$data = explode(',',$data);
			sort($data);
			$data = array_unique($data);
			$check = 0;
			foreach($data as $char)
			{
				if (!is_numeric($char) || ($char < 1) || ($char >100 ))
				{
					$check = 1;
				}
			}
			$data = implode(',' , $data);
			if($check == 1)
			{
				$this->session->set_flashdata('result', 'Some of the inputs to the odd type are not valid.');
				$this->index();
			}
			else
			{
				if ($this->admin_branch_model->create($data))
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


	public function suspend($branch_id = 0)
	{
		if ($this->admin_branch_model->suspend($branch_id))
		{
			$this->session->set_flashdata('message', 'Branch Suspended Succesfully. All corresponding agents are barred from logging in.');
			$this->index();
		}
		else
		{
			$this->session->set_flashdata('message', 'Oppz! An unexpected error occured.');
			$this->index();
		}
	}

	public function activate($branch_id = 0)
	{
		if ($this->admin_branch_model->activate($branch_id))
		{
			$this->session->set_flashdata('message', 'Branch activated succesfully');
			$this->index();
		}
		else
		{
			$this->session->set_flashdata('message', 'Oppz! An unexpected error occured.');
			$this->index();
		}
	}
}