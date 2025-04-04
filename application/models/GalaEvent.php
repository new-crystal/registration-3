<?php

defined('BASEPATH') or exit('No direct script access allowed');

class GalaEvent extends CI_Model
{
	private $gala = "galaEvent";

	public function get_users()
	{
		return $this->db->get('users')->result_array();
	}

	public function get_gala_users()
	{
		$query = $this->db->query("
				SELECT *
				FROM users a
				WHERE a.gala = 'Gala dinner'
				ORDER BY a.id ASC
		");
		return $query->result_array();
	}

	public function get_gala_user($where)
	{
		$this->db->where($where);
		return $this->db->get('users')->result_array();
	}


	public function update_gala($info, $where)
	{
		$this->db->where($where);
		$this->db->update('users', $info);
	}

}
