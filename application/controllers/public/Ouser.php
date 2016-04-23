<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ouser extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();

		if ($this->session->user_id == 0)
		{
			redirect('auth/ouser_index', 'refresh');
		}
		$this->load->model('ouser_model');
		$this->load->model('game_model');
		$this->load->model('admin_game_model');
	}

	public function index()
	{
		if($data['user'] = $this->ouser_model->get_user())
		{
			$this->load->view('public/user-account', $data);
		}
		else
		{
			redirect('public/index');
		}
		
	}


	public function view($page = 'user-account')
	{
		$this->load->view('public/'.$page);
	}

	public function play($game = NULL, $stake = NULL, $odd = NULL)
	{
		if($game == NULL || $stake == NULL || $stake == NULL)
		{
			echo 0; 
		}
		else
		{
			$week_number = $this->admin_game_model->get_current_week();
			$data = $this->game_model->post($game, $stake, $odd, $week_number, 'ouser');
			echo $data;
		}
	}
	

	public function stake()
	{
		$week_number = $this->admin_game_model->get_current_week();
		$data['week_number'] = $week_number;
		$data['games'] = $this->ouser_model->get_games($week_number);
		$this->load->view('public/stake', $data);
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
			$this->form_validation->set_rules('ouser_email', 'Email', 'valid_email');
			$this->form_validation->set_rules('ouser_phone', 'Phone', 'required|numeric');
			if ($this->form_validation->run() == FALSE)
			{
				redirect('public/ouser/index');
			}
			else
			{
				if ($this->ouser_model->edit($id))
				{
					$this->session->set_flashdata('message', 'Data Edited Successfully');
					redirect('public/ouser/index');
				}
				else
				{
					$this->session->set_flashdata('message', 'Oppz! An unexpected error occured.');
					redirect('public/ouser/index');
				}
			}

		}
	}

	public function played_coupons()
	{
		$week_number = $this->admin_game_model->get_current_week();
		$data['coupons'] = $this->ouser_model->get_played_coupons($week_number);
		$this->load->view('public/played-coupons', $data);
	}

	public function history()
	{
		$data['coupons'] = $this->ouser_model->get_history();
		$this->load->view('public/history', $data);
	}

	public function recharge()
	{
		$this->load->view('public/recharge');
	}

	public function withdraw()
	{
		$this->load->view('public/withdraw');
	}
}
