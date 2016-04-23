<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Odd_model extends CI_Model 
{

	public function __construct()
	{
		parent::__construct();
	}


	public function get_range($type = NULL, $games_count = NULL)
	{
		switch ($type)
		{
			case ($type == 'default'):
				return $this->default_range($games_count);
			break;

			case ($type == 'eighty'):
				return $this->eighty();
			break;

			case ($type == 'sixty'):
				return $this->sixty();
			break;

			default:
				return 0;
			break;
		}
	}


	public function default_range($games = NULL)
	{
		$odd = 0;
		if($games == NULL || $games < 1)
		{
			$odd = 0;
		}
		else
		{
			switch ($games)
			{
				case (($games>=1) && ($games <=10)):
					$odd = 100;
				break;

				case (($games>=11) && ($games <=12)):
					$odd = 80;
				break;

				case (($games>=13) && ($games <=14)):
					$odd = 60;
				break;

				case (($games>=15) && ($games <=16)):
					$odd = 40;
				break;

				case (($games>=16) && ($games <=49)):
					$odd = 30;
				break;
				
				default:
					$odd = 0;
				break;
			}
		}
		return $odd;
	}


public function eighty(){
	return 80;
}

public function sixty()
{
	return 60;
}

}