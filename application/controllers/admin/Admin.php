<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();

		if ($this->session->user_id == 0)
		{
			redirect('auth/index/admin', 'refresh');
		}
		$this->load->model('account_model');
	}

	public function index()
	{
		$data['withdrawals'] = $this->account_model->get_top_withdrawals();
		$data['withdrawal_sum'] = $this->account_model->get_withdrawal_sum();
		$this->load->view('admin/admin-index', $data);
	}


	public function view($page = 'admin-index')
	{
		$this->load->view('admin/'.$page);
	}

	public function all_withdrawals()
	{
		$data['withdrawals'] = $this->account_model->all_withdrawals();
		$this->load->view('admin/withdrawal-requests', $data);
	}
	public function create()
	{
		$this->form_validation->set_error_delimiters('<span class="span span-important">', '</span>');
		$this->form_validation->set_rules('admin_name', 'Name', 'required');
		$this->form_validation->set_rules('admin_email', 'Phone', 'required|valid_email');
		$this->form_validation->set_rules('admin_phone', 'Phone', 'required|numeric');
		$this->form_validation->set_rules('admin_password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			redirect('admin/view/admin-create-admin');
		}
		else
		{
			if ($this->admin_model->create())
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
		
		if ($data['admins'] = $this->admin_model->read())
		{
			$this->load->view('admin/admin-admin', $data);
		}
		else
		{
			$this->session->set_flashdata('message', 'No Records Avaliable.');
			$this->load->view('admin/admin-admin');
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
			$this->form_validation->set_rules('admin_name', 'Name', 'required');
			$this->form_validation->set_rules('admin_email', 'Phone', 'required|valid_email');
			$this->form_validation->set_rules('admin_phone', 'Phone', 'required|numeric');
			$this->form_validation->set_rules('admin_password', 'Password', 'required');
			$this->form_validation->set_rules('admin_password2', 'Password', 'required|matches[admin_password]');
			if ($this->form_validation->run() == FALSE)
			{
				$this->index();
			}
			else
			{
				if ($this->admin_model->edit($id))
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
		if ($this->admin_model->delete($id))
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

	public function change_notifcation()
	{
		$this->admin_model->change_notification();
		$this->session->set_flashdata('message', 'Notification changed successfully');
		$this->load->view('admin/admin-notification');
	}

	public function pay_withdrawal($id = 0)
	{
		if ($this->admin_model->pay_withdrawal($id))
		{
			$this->session->set_flashdata('message', 'Action Successfully');
			$this->all_withdrawals();
		}
		else
		{
			$this->session->set_flashdata('message', 'Oppz! An unexpected error occured.');
			$this->all_withdrawals();
		}
	}

	public function get_onlineusers()
	{
		$data['ousers'] = $this->admin_model->get_ousers();
		$this->load->view('admin/admin-ousers', $data);
	}

	public function credit_user()
	{
		if ($this->admin_model->credit_user())
		{
			$this->session->set_flashdata('message', 'Action Successfully');
			$this->get_onlineusers();
		}
		else
		{
			$this->session->set_flashdata('message', 'Oppz! An unexpected error occured.');
			$this->get_onlineusers();
		}
	}

	public function suspend_ouser($ouser_id = 0)
	{
		if ($this->ouser_model->suspend_ouser($ouser_id))
		{
			$this->session->set_flashdata('message', 'User Suspended Succefully - Barred from Logging In');
			$this->get_onlineusers();
		}
		else
		{
			$this->session->set_flashdata('message', 'Oppz! An unexpected error occured.');
			$this->get_onlineusers();
		}
	}

	public function activate_ouser($ouser_id = 0)
	{
		if ($this->ouser_model->activate_ouser($ouser_id))
		{
			$this->session->set_flashdata('message', 'User activated succesfully');
			$this->get_onlineusers();
		}
		else
		{
			$this->session->set_flashdata('message', 'Oppz! An unexpected error occured.');
			$this->get_onlineusers();
		}
	}

}
