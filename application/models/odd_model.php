<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Odd_model extends CI_Model  
{

	public function __construct()
	{
		parent::__construct();
	}


	public function get($type = NULL, $result_count = 0)
	{
		switch ($type)
		{
			case ($type == 'default'):
				return $this->default_range($result_count);
			break;

			case ($type == '90'):
				return 90;
			break;

			case ($type == '80'):
				return 80;
			break;

			case ($type == '70'):
				return 70;
			break;

			case ($type == '60'):
				return 60;
			break;

			case ($type == '50'):
				return 50;
			break;

			case ($type == '40'):
				return 40;
			break;

			case ($type == '30'):
				return 30;
			break;

			case ($type == '20'):
				return 20;
			break;

			case ($type == '10'):
				return 10;
			break;

			default:
				return 0;
			break;
		}
	}


	public function default_range($result = NULL)
	{
		$odd = 0;
		if($result == NULL || $result < 1)
		{
			$odd = 0;
		}
		else
		{
			switch ($result)
			{
				case (($result>=1) && ($result <=10)):
					$odd = 100;
				break;

				case (($result>=11) && ($result <=12)):
					$odd = 80;
				break;

				case (($result>=13) && ($result <=14)):
					$odd = 60;
				break;

				case (($result>=15) && ($result <=16)):
					$odd = 40;
				break;

				case (($result>=16) && ($result <=49)):
					$odd = 30;
				break;
				
				default:
					$odd = 0;
				break;
			}
		}
		return $odd;
	}

}