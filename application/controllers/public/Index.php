<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ouser_model');
		$this->load->model('game_model');
		$this->load->model('admin_game_model');
	}

	public function index()
	{
		$this->load->view('public/index');
	}

	public function result()
	{
		$data['results'] = $this->ouser_model->view_result();
		$this->load->view('public/result', $data);
	}


	public function view($page = 'index')
	{
		$this->load->view('public/'.$page);
	}

	
}
