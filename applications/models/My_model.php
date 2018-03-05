<?php
class My_model extends CI_Model{

	function check(){
		$name_ = $this->input->post('txtName');
		$pwd_ = $this->input->post('txtPassword');

		$this->db->where('USERNAME_', $name_);
		$this->db->where('PASSWORD_', $pwd_);
		$rs = $this->db->get('login');
		
		return $rs->num_rows();
	}

	function insert(){
		$name_ = $this->input->post('txtName');
		$pwd_ = $this->input->post('txtPassword');
		$this->db->where('USERNAME_', $name_);
		$rs = $this->db->get('login');	

		if($rs->num_rows() != 0){
			$bool = false;
		} else {
			$bool = true; 
			
			$data = array(
				'USERNAME_' => $name_,
				'PASSWORD_' => $pwd_
			);
			$this->db->insert('login', $data);
			
		}	
		return $bool;
	}

	function getusers(){
		$this->db->select('USERNAME_');
		$rs = $this->db->get('login');
		return $rs->result();
	}
}