<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mark_model extends CI_Model 
{

	public function __construct()
	{
		parent::__construct();
	}

	public function get_coupon($coupon_code = NULL)
	{
		if($coupon_code == NULL)
		{
			return FALSE;
		}
		else
		{
			$query = $this->db->get_where('coupons', array('coupon_code'=>$coupon_code));
			if($query->num_rows() > 0)
			{
				return $query->row();
			}
			else
			{
				return FALSE;
			}
		}
	}

	public function get_all_coupons($week_number = 0)
	{
		$query = $this->db->order_by('play_time', 'DESC');
		$query = $this->db->get_where('coupons', array('week_number'=>$week_number, 'status'=>'pending'));
		return $query->result();
	}

	public function update_loss_coupon($coupon_code = 0)
	{
		$data = array('status'=>'loss');
		$this->db->where('coupon_code', $coupon_code);
		if($this->db->update('coupons', $data))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function update_win_coupon($coupon_code, $money)
	{
		$data = array('status'=>'win', 'win_amount'=>$money);
		$this->db->where('coupon_code', $coupon_code);
		if($this->db->update('coupons', $data))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

}