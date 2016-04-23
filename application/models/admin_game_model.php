<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_game_model extends CI_Model 
{

	public function __construct()
	{
		parent::__construct();
	}

	public function create()
	{
		$data = $this->input->post('data');
		$week_number = $this->input->post('week_number');
		$week_start_date = $this->input->post('week_start_date');
		$week_end_date = $this->input->post('week_end_date');
		$query = $this->db->get_where('games', array('week_number'=>$week_number));
		if($query->num_rows > 0)
			return FALSE;
		foreach($data as $row)
		{
			$single = array(
				'week_number'=>$week_number,
				'number'=>$row['number'], 
				'home' => $row['home'],
				'away' => $row['away'],
				'deadline'=> $row['deadline'],
				'created' => date('Y-m-d H:i:s'),
				'status'=> 'active');
			$this->db->insert('games', $single);
		}
		$week = array(
			'week_number'=>$week_number,
			'alias' => 'WEEK '.$week_number,
			'week_start_date' => $week_start_date,
			'week_end_date' => $week_end_date
			);
		$query = $this->db->insert('week',$week);
		return TRUE;
	}

	/*public function addDayswithdate($date,$days)
	{
		$date = strtotime("+".$days." days", strtotime($date));
		return  date("Y-m-d", $date);
		$date = "2015-11-17";
		echo date('Y-m-d', strtotime($date. ' + 5 days'));
	}*/

	public function get_current_week($field = 'week_number')
	{
		$query = $this->db->order_by('week_number', 'DESC');
		$query = $this->db->limit(1)->get('week');
		$row = $query->row();
		return $row->$field;
	}

	public function read($id = NULL)
	{
		$query = $this->db->get_where('games', array('week_number'=>$this->get_current_week()));
		if ($query->num_rows() < 1)
		{
			return FALSE;
		}
		else
		{
			return $query->result();
		}
	}

	public function game_field($id, $field)
	{
		$query = $this->db->get_where('games', array('game_id'=>$id));
		$row = $query->row();
		if (empty($row->$field))
		{
			return 'Unavaliable';
		}
		else
		{
			return $row->$field;
		}

	}

	public function toggle_game($number, $week_number)
	{
		if ($number == NULL || $week_number == NULL)
		{
			return FALSE;
		}
		else
		{
			$data = array('status' => 'inactive');
			$this->db->where('number', $number);
			$this->db->where('week_number', $week_number);
			if($this->db->update('games', $data))
			{
				return TRUE;
			}else{
				return FALSE;
			}
		}
	}


	public function post_result($data = NULL)
	{
		if($data == NULL)
		{
			return 0;
		}
		else
			$week_number = $this->get_current_week();
		{
			$query = $this->db->get_where('results', array('week_number'=>$week_number));
			if($query->num_rows() > 0)
			{
				return 1;
			}
			else
			{
				$data = array('week_number'=>$week_number, 'result'=>$data);
				$query = $this->db->insert('results', $data);
				return 2;
			}
			
		}
	}

	public function get_current_week_result()
	{
		$query = $this->db->get_where('results', array('week_number'=>$this->get_current_week()));
		if($query->num_rows() > 0)
		{
			return $query->row()->result;
		}
		else
		{
			return 0;
		}

	}

}