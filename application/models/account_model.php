<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_model extends CI_Model 
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$query = $this->db->get('branches');
		if($query->num_rows() < 1)
		{
			return FALSE;
		}
		else
		{
			return $query->result();
		}
	}


	public function get_winners($player, $week_number)
	{
		$query = $this->db->get_where('coupons', array('player'=>$player, 'week_number'=>$week_number, 'status'=>'win'));
		return $query->result();
	}

	public function get_weeks($this_week_number)
	{
		$query = $this->db->limit(10);
		$query = $this->db->order_by('week_number', 'DESC');
		$this->db->where('week_number !=', $this_week_number);
		$query = $this->db->get('week');
		return $query->result();
		//return $this->db->get('week')->limit(10)->order_by('week_number', 'DESC')->result();
	}

	public function get_total_stake($player, $week_number)
	{
		$query = $this->db->select_sum('stake', 'sum');
		if($player == 'all')
		{
			$query = $this->db->get_where('coupons', array('week_number'=>$week_number));	
		}
		else
		{
			$query = $this->db->get_where('coupons', array('player'=>$player,'week_number'=>$week_number));
		}
				
		$result = $query->result();
		return $result[0]->sum;
	}

	public function get_total_amount_won($player, $week_number)
	{
		$query = $this->db->select_sum('win_amount', 'sum');
		if ($player == 'all')
		{
			$query = $this->db->get_where('coupons', array('status'=>'win', 'week_number'=>$week_number));
		}
		else
		{
			$query = $this->db->get_where('coupons', array('player'=>$player, 'status'=>'win', 'week_number'=>$week_number));
		}
				
		$result = $query->result();
		return $result[0]->sum;
	}

	public function get_total_amount_lost($player, $week_number)
	{
		$query = $this->db->select_sum('stake', 'sum');
		if ($player == 'all')
		{
			$query = $this->db->get_where('coupons', array('status'=>'loss', 'week_number'=>$week_number));
		}
		else
		{
			$query = $this->db->get_where('coupons', array('player'=>$player,'status'=>'loss', 'week_number'=>$week_number));
		}
				
		$result = $query->result();
		return $result[0]->sum;
	}

	public function get_top_withdrawals()
	{
		$query = $this->db->limit(10);
		$query = $this->db->order_by('id', 'DESC');
		$query = $this->db->get('withdrawal_requests');
		return $query->result();
	}

	public function all_withdrawals()
	{
		$query = $this->db->get('withdrawal_requests');
		return $query->result();
	}

	public function get_ouser_account($operation = 'credit')
	{
		$query = $this->db->order_by('created', 'DESC');
		$query = $this->db->get_where('ouser_account', array('operation'=>$operation));
		return $query->result();
	}

	public function get_withdrawal_sum()
	{
		$query = $this->db->select_sum('amount', 'sum');
		$query = $this->db->get('withdrawal_requests');
		$result = $query->result();
		return $result[0]->sum;
	}
}