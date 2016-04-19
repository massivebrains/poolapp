<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_agent_model extends CI_Model 
{

	public function __construct()
	{
		parent::__construct();
	}

	public function create()
	{
		$data = array(
			'agent_name' => $this->input->post('agent_name'),
			'agent_phone' => $this->input->post('agent_phone'),
			'agent_address' => $this->input->post('agent_address'),
			'agent_password' => md5($this->input->post('agent_password')),
			'branch_id' => $this->input->post('branch_id'),
			'created' => date('Y-m-d H:i:s')
			);
		if($this->db->insert('agents', $data))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function read($id = NULL)
	{
		$query = $this->db->get('agents');
		if($query->num_rows() < 1)
		{
			return FALSE;
		}
		else
		{
			return $query->result();
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
			$data = array('agent_name' => $this->input->post('agent_phone'));
			$this->db->where('id', $id);
			if($this->db->update('agents', $data))
			{
				return TRUE;
			}else{
				return FALSE;
			}
		}
	}

	public function delete($id = NULL){	
		if($this->db->delete('agents', array('id' => $id)))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function get_agent_count()
	{
		$query = $this->db->get('agents');
		return $query->num_rows();
	}

	public function agent_field($id, $field)
	{
        $query = $this->db->get_where('agents', array('agent_id'=>$id));
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

}