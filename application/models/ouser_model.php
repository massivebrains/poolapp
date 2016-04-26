<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ouser_model extends CI_Model 
{

	public function __construct()
	{
		parent::__construct();
	}

	/*public function read()
	{
		$query = $this->db->get('onlineusers');
		if($query->num_rows() < 1)
		{
			return FALSE;
		}
		else
		{
			return $query->result();
		}
	}*/
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

	public function get_games($week_number = 0)
	{
		$query = $this->db->order_by('number', 'ASC');
		$query = $this->db->get_where('games', array('week_number'=>$week_number));
		if ($query->num_rows() < 1)
		{
			return FALSE;
		}
		else
		{
			return $query->result();
		}
	}

	public function get_user()
	{
		$query = $this->db->get_where('ousers', array('ouser_id' => $this->session->user_id));
		if($query->num_rows() < 1)
		{
			return FALSE;
		}
		else
		{
			return $query->row();
		}
	}

	public function get_username($user_id = 0)
	{
		$query = $this->db->get_where('ousers', array('ouser_id'=>$user_id));
		if($query->num_rows() < 1)
		{
			return ' ';
		}
		else
		{
			$row = $query->row();
			return $row->ouser_surname.' '.$row->ouser_firstname;
		}
	}


	public function edit($id = NULL)
	{
		if($id == NULL)
		{
			return FALSE;
		}
		else
		{
			if ($this->input->post('password'))
			{
				$data = array(
					'ouser_email' => $this->input->post('ouser_email'), 
					'ouser_phone'=>$this->input->post('ouser_phone'),
					'password'=>md5($this->input->post('password')),
					);
			}
			else
			{
				$data = array(
					'ouser_email' => $this->input->post('ouser_email'), 
					'ouser_phone'=>$this->input->post('ouser_phone')
					);
			}
			
			$this->db->where('ouser_id', $id);
			if($this->db->update('ousers', $data))
			{
				return TRUE;
			}else{
				return FALSE;
			}
		}
	}

	public function get_played_coupons($week_number = 0)
	{
		$query = $this->db->get_where('coupons', array('week_number'=>$week_number, 'player'=>'ouser', 'player_id'=>$this->session->user_id));
		return $query->result();
	}

	public function get_history()
	{
		$query = $this->db->limit(20);
		$query = $this->db->get_where('coupons', array('player'=>'ouser', 'player_id'=>$this->session->user_id, 'status !='=>'pending'));

		return $query->result();
	}

	public function post_withdrawal()
	{
		
		$data = array(
			'ouser_id' => $this->session->user_id,
			'bank_name' => $this->input->post('bank_name'),
			'account_name' => $this->input->post('account_name'),
			'account_number' => $this->input->post('account_number'),
			'account_type' => $this->input->post('account_type'),
			'amount' => $this->input->post('amount'),
			'created' => date('Y-m-d H:i:s')
			);
		if ($this->db->insert('withdrawal_requests', $data))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

}