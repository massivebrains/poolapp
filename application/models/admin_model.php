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

}