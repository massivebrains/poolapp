<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Game_model extends CI_Model 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('string');
	}

	public function post($game, $stake, $odd, $week_number, $player)
	{
		if ($this->session->user_id == 0)
		{
			return -1;
		}

		$coupon_code = random_string('numeric', 6);
		$data = array(
			'coupon_code' => $coupon_code,
			'game' => $game,
			'stake' => $stake,
			'odd' => $odd,
			'week_number' => $week_number,
			'play_time' => date('Y-m-d H:i:s'),
			'player' => $player,
			'player_id' => $this->session->userdata('user_id'),
			'status'=>'pending'
			);
		if($this->db->insert('coupons', $data))
		{
			return $coupon_code;
		}
		else
		{
			return 0;
		}
		
	}

}