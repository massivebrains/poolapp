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
		//$this->load->model('admin_game_model');
	}

	public function post($game = NULL, $stake = NULL)
	{
		if($game == NULL || $stake == NULL)
		{
			echo 'Null Data provided';
		}
		else
		{
			echo $game.'<br>';
			echo $stake;
		}
	}
}