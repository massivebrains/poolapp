<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Onlineusers extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->user_id == 0)
		{
			redirect('auth/index/admin', 'refresh');
		}
		$this->load->model('onlineuser_model');
	}
	

	
	public function index()
	{
		
		if ($data['onlineusers'] = $this->onlineuser_model->read())
		{
			$this->load->view('admin/admin-onlineusers', $data);
		}
		else
		{
			$this->session->set_flashdata('message', 'No Records Avaliable.');
			$this->load->view('admin/admin-onlineusers');
		}

	}

	

	public function get_onlineuser_count()
	{
		return $this->admin_onlineuser_model->get_onlineuser_count();
	}

}