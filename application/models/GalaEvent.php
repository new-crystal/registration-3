<?php

defined('BASEPATH') or exit('No direct script access allowed');

class GalaEvent extends CI_Model
{
	private $gala = "galaEvent";

	public function get_users()
	{
		// $query = $this->db->query("
		// 		SELECT u.*, gu.idx AS gala_idx
		// 		FROM users u
		// 		LEFT JOIN gala_users gu ON gu.reg_num = u.registration_no
		// 		WHERE gu.gala_chk = 'Y'
		// ");
		$query = $this->db->query("
					SELECT 
						u.*,
						COALESCE(gu.idx, '') AS gala_idx,
						COALESCE(gu.gala_chk, '') AS gala_chk,
						COALESCE(gu.gala_status, '') AS gala_status,
						COALESCE(gu.gala_table, '') AS gala_table,
						COALESCE(gu.gala_memo, '') AS gala_memo,
						COALESCE(gu.register_date, '') AS register_date,
						COALESCE(gu.update_time, '') AS update_time
					FROM users u
					LEFT JOIN gala_users gu ON gu.reg_num = u.registration_no
		");
		return $query->result_array();
	}

	public function get_gala_users()
	{
		$query = $this->db->query("
				SELECT u.*, gu.*, gu.idx AS gala_idx
				FROM users u
				LEFT JOIN gala_users gu ON gu.reg_num = u.registration_no
				WHERE gu.gala_chk = 'Y'
		");
		return $query->result_array();
	}

	public function get_gala_user($where)
	{
		// WHERE 조건을 동적으로 조립
		$conditions = [];
		foreach ($where as $key => $value) {
			$conditions[] = "gu.{$key} = " . $this->db->escape($value);
		}
		$where_sql = implode(' AND ', $conditions);
	
		// 쿼리 조립
		$query = $this->db->query("
			SELECT u.*, gu.idx AS gala_idx,
				   COALESCE(gu.gala_chk, '') AS gala_chk,
				   COALESCE(gu.gala_status, '') AS gala_status,
				   COALESCE(gu.gala_table, '') AS gala_table,
				   COALESCE(gu.gala_memo, '') AS gala_memo,
				   COALESCE(gu.register_date, '') AS register_date,
				   COALESCE(gu.update_time, '') AS update_time
			FROM users u
			LEFT JOIN gala_users gu ON gu.reg_num = u.registration_no
			" . (!empty($where_sql) ? "WHERE $where_sql" : "") . "
		");
	
		return $query->result_array();
	}

	public function update_gala($info, $where)
	{
		$this->db->where($where);
		$this->db->update('gala_users', $info);
	}

	public function add_gala_user($info)
	{
		$this->db->insert('gala_users', $info);
	}

}
