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
		$this->load->model('agent_model');
		$this->load->model('admin_game_model');
	}

	public function index()
	{
		$this->load->view('agent/agent-index');
	}


	public function view($page = 'agent-index')
	{
		$this->load->view('agent/'.$page);
	}

	public function view_result()
	{
		$data['results'] = $this->agent_model->view_result();
		$this->load->view('agent/result', $data);
	}

	public function get_winning_tickets()
	{
		$data['tickets'] = $this->agent_model->get_winning_tickets($this->admin_game_model->get_current_week()-1);
		$this->load->view('agent/winnings', $data);
	}

	public function get_total_stake()
	{
		$data = $this->agent_model->get_total_stake($this->admin_game_model->get_current_week());
		//var_dump($data);
		echo number_format($data[0]->sum);
	}
	
}
