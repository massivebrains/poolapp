<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->user_id == 0)
		{
			redirect('auth/index/admin', 'refresh');
		}
		$this->load->model('admin_game_model');
		$this->load->model('account_model');
	}
	

	public function index() 
	{

	}

	public function get_winners()
	{
		$last_week_number = $this->admin_game_model->get_current_week()-1;
		$data['awinners'] = $this->account_model->get_winners('agent', $last_week_number);
		$data['owinners'] = $this->account_model->get_winners('ouser', $last_week_number);
		$this->load->view('admin/admin-sales-winners', $data);
	}

	public function sales_summary()
	{
		$weeks = $this->account_model->get_weeks($this->admin_game_model->get_current_week());
		foreach($weeks as $row)
		{
			$agent['data']['week_end'] = $row->week_end_date;
			$agent['data']['week_number'] = $row->week_number;
			$agent['data']['total_stake'] = $this->account_model->get_total_stake('agent',$row->week_number);
			$agent['data']['total_amount_won'] = $this->account_model->get_total_amount_won('agent',$row->week_number);
			$agent['data']['total_amount_lost'] = $this->account_model->get_total_amount_lost('agent',$row->week_number);
			
			$ouser['data']['week_end'] = $row->week_end_date;
			$ouser['data']['week_number'] = $row->week_number;
			$ouser['data']['total_stake'] = $this->account_model->get_total_stake('ouser',$row->week_number);
			$ouser['data']['total_amount_won'] = $this->account_model->get_total_amount_won('ouser',$row->week_number);
			$ouser['data']['total_amount_lost'] = $this->account_model->get_total_amount_lost('ouser',$row->week_number);

			$summary['data']['week_end'] = $row->week_end_date;
			$summary['data']['week_number'] = $row->week_number;
			$summary['data']['total_stake'] = $this->account_model->get_total_stake('all',$row->week_number);
			$summary['data']['total_amount_won'] = $this->account_model->get_total_amount_won('all',$row->week_number);
			$summary['data']['total_amount_lost'] = $this->account_model->get_total_amount_lost('all',$row->week_number);

			//var_dump($agent); var_dump($ouser); var_dump($summary);
		}
		
		$data['agent'] = $agent;
		$data['ouser'] = $ouser;
		$data['summary'] = $summary;	

		$this->load->view('admin/admin-sales-summary', $data);
	}



	
}