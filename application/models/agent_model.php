<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agent_model extends CI_Model 
{

	public function __construct()
	{
		parent::__construct();
	}



	public function view_result()
	{
		$query = $this->db->order_by('week_number', 'DESC');
		$query = $this->db->limit(2)->get('results');

		if ($query->num_rows() < 1)
		{
			return FALSE;
		}
		else
		{
			return $query->result();
		}
	}

	public function get_agent_odds()
	{
		$query = $this->db->get_where('agents', array('agent_id'=>$this->session->user_id));
		$branch_id = $query->row()->branch_id;
		$query = $this->db->get_where('branches', array('branch_id'=>$branch_id));
		$row = $query->row();
		return $row->odd_type;
	}

	public function get_total_stake($week_number)
	{
		$query = $this->db->select_sum('stake', 'sum');
		$query = $this->db->get_where('coupons', array('player'=>'agent','player_id'=>$this->session->user_id, 'week_number'=>$week_number));		
		return $query->result();
	}

	public function get_winning_tickets($week_number = 0)
	{
		$query = $this->db->order_by('play_time', 'ASC');
		$query = $this->db->get_where('coupons', array('player'=>'agent','player_id'=>$this->session->user_id, 'week_number'=>$week_number, 'status'=>'win'));
		return $query->result();
	}

	public function get_notification()
	{
		$query = $this->db->get_where('notification', array('id'=>1));
		$row = $query->row();
		return $row->notification;
	}


	public function watch($week_number = 0)
	{
		$numbers  = [];
		$query = $this->db->get_where('games', array('week_number'=>$week_number));
		$result = $query->result();
		foreach($result as $row)
		{
			if($row->status == 'inactive')
			{
				array_push($numbers, $row->number);

			}
			if($row->deadline < date('Y-m-d G:i:s'))
			{
				array_push($numbers, $row->number);
			}
		}
		
		return $numbers;
	}

}