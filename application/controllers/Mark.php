<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mark extends CI_Controller 
{

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('odd_model');
		$this->load->model('mark_model');
		$this->load->model('admin_game_model');
	}
		
	public function index()
	{
		//
	}
	public function factorial($number = 0)
	{
		$fact = 1;
		for($i = 1; $i <= $number; $i++)
			$fact*=$i;
		return $fact;
	}

	public function combination($n = 0, $r = 3)
	{
		$combination = $this->factorial($n)/($this->factorial($r) * ($this->factorial($n-$r)));
		return $combination;
	}

	public function get_current_week_result_count()
	{
		$current_result = explode(',', $result);
		return sizeof($current_result);
	}

	public function get_game_count($game)
	{
		$games = explode(',', $game);
		return sizeof($games);
	}

	public function get_wining_numbers_count($game = '')
	{
		$this_week_result = explode(',', $this->admin_game_model->get_current_week_result());
		$game_array = explode(',', $game);
		$count = 0;
		foreach($this_week_result as $a=>$r)
		{
			foreach($game_array as $x=>$y)
			{
				if ($r == $y)
				{
					$count++;
				}
			}
		}
		return $count;
	}

	public function calculate($coupon_code, $game, $stake, $odd)
	{
		$money = 0;
		if (!empty($coupon_code) || !empty($game) || !empty($stake) || !empty($odd))
		{
			$games_count = $this->get_game_count($game);
			$stake_line = $this->combination($games_count);
			$winning_numbers = $this->get_wining_numbers_count($game);
			$winning_line = $this->combination($winning_numbers);
			$odd_range = $this->odd_model->get_range($odd, $games_count);
			$money = ($stake / $stake_line) * $winning_line * $odd_range;
			/*echo 'games count: '.$games_count.'<br>';
			echo 'stake line: '.$stake_line.'<br>';
			echo 'winning numbers count: '.$winning_numbers.'<br>';
			echo 'winning line: '.$winning_line.'<br>';
			echo 'odd_range: '.$odd_range.'<br>';
			echo 'money: '.$money.'<br><br><br>';*/
		}
		else
		{
			$money = 0;
		}
		return $money;
	}

	public function mark()
	{
		//$win_count = 0; $loss_count = 0;
		$unmarked_coupons = $this->mark_model->get_all_coupons($this->admin_game_model->get_current_week());
		foreach($unmarked_coupons as $row)
		{
			if($this->get_wining_numbers_count($row->game) < 3)
			{
				$this->mark_model->update_loss_coupon($row->coupon_code);
				//$loss_count++;
				//echo 'LOSS TICKET<br>';
			}
			else
			{
				$money = $this->calculate($row->coupon_code, $row->game, $row->stake, $row->odd);
				//$win_count++;
				$this->mark_model->update_win_coupon($row->coupon_code, $money);
				//echo 'WIN: '.number_format($money).'<br>';
			}
			
		}
		//echo '<br><br>NUMBER OF WINNING TICKETS: '.$win_count.'<br>';
		//echo 'NUMBER OF LOSS TICKETS: '.$loss_count;
	}

}