<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Game extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->user_id == 0)
		{
			redirect('auth/index/admin', 'refresh');
		}
		$this->load->model('game_model');
	}

	public function post($game = NULL, $stake = NULL, $odd = NULL)
	{
		if($game == NULL || $stake == NULL || $stake == NULL)
		{
			echo 0; 
		}
		else
		{
			$week_number = $this->admin_game_model->get_current_week();
			$data = $this->game_model->post($game, $stake, $odd, $week_number, 'agent');
			echo $data;
		}
	}
}