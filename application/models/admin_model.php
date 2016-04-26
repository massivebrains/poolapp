<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model 
{

	public function __construct()
	{
		parent::__construct();
	}

	public function create()
	{
		$data = array(
			'admin_name' => $this->input->post('admin_name'),
			'admin_email' => $this->input->post('admin_email'),
			'admin_phone' => $this->input->post('admin_phone'),
			'admin_password' => md5($this->input->post('admin_password')),
			'created' => date('Y-m-d H:i:s')
			);
		if ($this->db->insert('admin', $data))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	/*public function read($id = NULL)
	{
		$query = $this->db->get('admin');
		if ($query->num_rows() < 1)
		{
			return FALSE;
		}
		else
		{
			return $query->result();
		}
	}*/

	public function edit($id = NULL)
	{
		if ($id == NULL)
		{
			return FALSE;
		}
		else
		{
			$data = array(
				'admin_name' => $this->input->post('admin_name'), 
				'admin_email'=>$this->input->post('admin_email'),
				'admin_phone'=>$this->input->post('admin_phone'));
			$this->db->where('id', $id);
			if ($this->db->update('admin', $data))
			{
				return TRUE;
			}else{
				return FALSE;
			}
		}
	}

	public function delete($id = NULL){	
		if ($this->db->delete('admin', array('id' => $id)))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function get_admin_count()
	{
		$query = $this->db->get('admin');
		return $query->num_rows();
	}

	public function change_notification()
	{
		$data = array('notification' => $this->input->post('notification'));
		$this->db->where('id', 1);
		$this->db->update('notification', $data);				
		return TRUE;
	}

	public function pay_withdrawal($id = 0)
	{
		$query = $this->db->get_where('withdrawal_requests', array('id'=>$id));
		if ($query->num_rows() > 0)
		{
			$row = $query->row();
			$data = array(
			'ouser_id' => $row->ouser_id,
			'operation' => 'withdrawal',
			'amount' => $row->amount,
			'admin_id' => $this->session->user_id,
			'created' => date('Y-m-d H:i:s')
				);
			if ($this->db->insert('ouser_account', $data))
			{
				$this->db->delete('withdrawal_requests', array('id' => $id));
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}
		else
		{
			return FALSE;
		}
	}

	public function get_ousers()
	{
		$query = $this->db->get('ousers');
		return $query->result();
	}

	public function credit_user()
	{
		$data = array(
			'ouser_id' => $this->input->post('ouser_id'),
			'operation' => 'credit',
			'amount' => $this->input->post('amount'),
			'admin_id' => $this->session->user_id,
			'created' => date('Y-m-d H:i:s')
			);
		if ($this->db->insert('ouser_account', $data))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function ouser_account_balance($ouser_id = 0)
	{
		$withdrawal = $this->db->select_sum('amount', 'sum');
		$withdrawal = $this->db->get_where('ouser_account', array('operation'=>'withdrawal', 'ouser_id'=>$ouser_id));	
		$withdrawal = $withdrawal->result();
		$withdrawal = $withdrawal[0]->sum;

		$credit = $this->db->select_sum('amount', 'sum');
		$credit = $this->db->get_where('ouser_account', array('operation'=>'credit', 'ouser_id'=>$ouser_id));	
		$credit = $credit->result();
		$credit = $credit[0]->sum;

		return $credit - $withdrawal;
	}

	public function get_name($admin_id = 0)
	{
		$query = $this->db->get_where('admin', array('admin_id'=>$admin_id));
		if($query->num_rows() < 1)
		{
			return ' ';
		}
		else
		{
			$row = $query->row();
			return $row->admin_name;
		}
	}

	public function get_count($table = 'admin')
	{
		$query = $this->db->get($table);
		return $query->num_rows();
	}

	public function get_agent_total_stake($week_number = 0, $agent_id = 0)
	{
		$query = $this->db->select_sum('stake', 'sum');
		$query = $this->db->get_where('coupons', array('player'=>'agent','player_id'=>$agent_id, 'week_number'=>$week_number));	
		$query = $query->result();
		$sum = $query[0]->sum;
		if($sum == 0)
		{
			return 0;
		}
		else
		{
			return $sum;
		}
	}

}