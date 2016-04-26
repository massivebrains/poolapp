<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Game extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->user_id == 0)
		{
			redirect('auth/index/admin', 'refresh');
		}
	}
	

	
	public function index()
	{
		
		if ($data['games'] = $this->admin_game_model->read())
		{
			$this->load->view('admin/admin-game-new', $data);
		}
		else
		{
			$this->session->set_flashdata('message', 'No Records Avaliable.');
			$this->load->view('admin/admin-game-new');
		}

	}

	public function get_current_week(){
		$data = $this->admin_game_model->get_current_week();
		var_dump($data);
	}

	public function create()
	{
		
		$this->form_validation->set_error_delimiters('<span class="span span-important">', '</span>');
		$this->form_validation->set_rules('week_number', 'Week Number', 'required');
		$this->form_validation->set_rules('week_start_date', 'Week Start Date', 'required');
		$this->form_validation->set_rules('week_end_date', 'Week End Date', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else
		{
			if ($this->admin_game_model->create())
			{
				$this->session->set_flashdata('message', 'Games Uploaded Succesfully');
				$this->index();
			}
			else
			{
				$this->session->set_flashdata('message', 'Oppz! Week Number Already Exist. No action taken');
				$this->index();
			}
		}	
	}


	public function toggle_game($number = NULL, $week_number = NULL)
	{
		if ($number == NULL || $week_number == NULL)
		{
			echo 0;
		}else{
			if ($this->admin_game_model->toggle_game($number, $week_number)){
				echo 1;
			}else{
				echo 0;
			}
		}
	}

	public function submit_result()
	{

	}

	public function post_result()
	{
		$this->form_validation->set_error_delimiters('<span class="span span-important">', '</span>');
		$this->form_validation->set_rules('result', 'Result', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/admin-game-result');
		}
		else
		{
			$data = $this->input->post('result');
			/*foreach($data[] as $char)
			{
				echo $char;
			}*/
			$data = explode(',',$data);
			sort($data);
			$data = array_unique($data);
			$check = 0;
			foreach($data as $char)
			{
				if (!is_numeric($char) || ($char < 1) || ($char >=50 ))
				{
					$check = 1;
				}
			}
			$data = implode(',' , $data);
			if($check == 1)
			{
				$this->session->set_flashdata('result', 'Some of the input characters are invalid! ');
				$this->load->view('admin/admin-game-result');
			}
			else
			{
				$result = $this->admin_game_model->post_result($data);
				if ($result == 2)
				{
					$this->session->set_flashdata('result', 'RESULT POSTED SUCCESSFULLY - THIS ACTION CANNOT BE UNDONE OR DONE AGAIN!');
					$this->load->view('admin/admin-game-result');
				}
				else if($result == 1)
				{
					$this->session->set_flashdata('result', 'THIS WEEK ALREADY HAS A POSTED RESULT!');
					$this->load->view('admin/admin-game-result');
				}
				else
				{
					$this->session->set_flashdata('result', 'Oppz! An unexpected error has occured!');
					$this->load->view('admin/admin-game-result');
				}
			}
			
		}	
	}

}