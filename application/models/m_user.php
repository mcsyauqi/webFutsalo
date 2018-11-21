<?php

class M_user extends CI_Model{

	public function new_user($data)
	{
		$this->db->insert('user', $data);
	}

?>