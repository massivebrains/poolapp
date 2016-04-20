<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_odd_model extends CI_Model 
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$query = $this->db->get('odd');
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
			'odd_name' => $this->input->post('odd_name'),
			'created' => date('Y-m-d H:i:s')
			);
		if($this->db->insert('odd', $data))
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
			$data = array('odd_name' => $this->input->post('odd_name'), 'odd_status'=>'active');
			$this->db->where('id', $id);
			if($this->db->update('odd', $data))
			{
				return TRUE;
			}else{
				return FALSE;
			}
		}
	}

	public function delete($id = NULL){	
		if($this->db->delete('odd', array('id' => $id)))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function get_odd_count()
	{
		$query = $this->db->get('odd');
		return $query->num_rows();
	}

	public function odd_field($id, $field)
	{
        $query = $this->db->get_where('odd', array('odd_id'=>$id));
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