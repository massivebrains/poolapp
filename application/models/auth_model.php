<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model 
{

	public function __construct()
	{
		parent::__construct();
	}

	public function admin_login(){
		$phone = $this->input->post('admin_phone');
		$password = md5($this->input->post('password'));
        $query = $this->db->get_where('admin', array('admin_phone'=> $phone, 'admin_password'=>$password));
        $row = $query->num_rows();
        if($row > 0){
            return $query->row()->admin_id;
        }else{
            return FALSE;
        }
    }

    public function agent_login(){
		$phone = $this->input->post('agent_phone');
		$password = md5($this->input->post('password'));
        $query = $this->db->get_where('agents', array('agent_phone'=>$phone, 'agent_password'=>$password));
        $row = $query->num_rows();
        if($row > 0){
            return $query->row()->agent_id;
        }else{
            return FALSE;
        }
    }
}