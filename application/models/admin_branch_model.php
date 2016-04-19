<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_branch_model extends CI_Model 
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$query = $this->db->get('branches');
		if($query->num_rows() < 1)
		{
			return FALSE;
		}
		else
		{
			return $query->result();
		}
	}


	public function create()
	{
		$data = array(
			'branch_name' => $this->input->post('branch_name'),
			'created' => date('Y-m-d H:i:s')
			);
		if($this->db->insert('branches', $data))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
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
			$data = array('branch_name' => $this->input->post('branch_name'), 'branch_status'=>'active');
			$this->db->where('id', $id);
			if($this->db->update('branches', $data))
			{
				return TRUE;
			}else{
				return FALSE;
			}
		}
	}

	public function delete($id = NULL){	
		if($this->db->delete('branches', array('id' => $id)))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function get_branch_count()
	{
		$query = $this->db->get('branches');
		return $query->num_rows();
	}

	public function branch_field($id, $field)
	{
        $query = $this->db->get_where('branches', array('branch_id'=>$id));
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