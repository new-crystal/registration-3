<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Model
{
	private $users = "users";
	private $abstracts = "abstracts";
	private $abstractsBase = "ABSTRACT_BASE";
	private $abstractsAffiliation = "ABSTRACT_AFFILIATION";
	private $abstractsAuthor = "ABSTRACT_AUTHOR";
	private $upload_file = "upload_file";

	public function get_users()
	{
		return $this->db->get($this->users)->result_array();
	}

	public function get_users_order_index()
	{
		$query = $this->db->query("
		SELECT *
		FROM users a
");
		return $query->result_array();
	}

	public function get_users_time()
	{
		$query = $this->db->query("
    SELECT *, time_format(b.duration,'%H시간 %i분') as d_format
    FROM users a
    LEFT JOIN (
        SELECT registration_no as qr_registration_no,
            MAX(time) as maxtime,
            MIN(time) as mintime,
            TIMEDIFF(MAX(time), MIN(time)) as duration
        FROM access
        GROUP BY registration_no
    ) b ON a.registration_no = b.qr_registration_no
    ORDER BY a.id ASC
");
		return $query->result_array();
	}


	public function get_abstracts_users()
	{
		$query = $this->db->query("select ab.*, uf.* from abstracts as ab left join upload_file as uf on ab.file_no = uf.idx");

		return $query->result_array();
	}


	public function get_user_check($userId)
	{
		$this->db->where_in('id', $userId);
		$this->db->order_by('name_kor');
		return $this->db->get($this->users)->result_array();
	}

	public function get_users_order($order_by, $where)
	{
		$this->db->where($where);
		$this->db->order_by($order_by);
		return $this->db->get($this->users)->result_array();
	}

	public function get_user($where)
	{
		$this->db->where($where);
		return $this->db->get($this->users)->row_array();
	}

	public function get_qr_print_user()
	{
		$query = $this->db->query("
		SELECT *, time_format(b.duration,'%H시간 %i분') as d_format
		FROM users a
		LEFT JOIN (
			SELECT registration_no as qr_registration_no,
				MAX(time) as maxtime,
				MIN(time) as mintime,
				TIMEDIFF(MAX(time), MIN(time)) as duration
			FROM access
			WHERE DATE(TIME) = CURDATE()
			GROUP BY registration_no
		) b ON a.registration_no = b.qr_registration_no
		WHERE a.qr_chk = 'Y' AND a.deposit = '결제완료' AND (a.qr_chk_day_1 = 'Y' OR a.qr_chk_day_2 = 'Y')
		ORDER BY a.id ASC
");
		return $query->result_array();
	}
	public function get_qr_user()
	{
		$query = $this->db->query("
		SELECT *, time_format(b.duration,'%H시간 %i분') as d_format
		FROM users a
		LEFT JOIN (
			SELECT registration_no as qr_registration_no,
				MAX(time) as maxtime,
				MIN(time) as mintime,
				TIMEDIFF(MAX(time), MIN(time)) as duration
			FROM access
			WHERE DATE(TIME) = CURDATE()
			GROUP BY registration_no
		) b ON a.registration_no = b.qr_registration_no
		WHERE a.qr_generated = 'Y' AND a.deposit = '결제완료'
		ORDER BY a.id ASC
");
		return $query->result_array();
	}

	public function get_gala_users()
	{
		$query = $this->db->query("
		SELECT *
		FROM users a
		WHERE a.remark6 = 'Y'
		ORDER BY a.id ASC
");
		return $query->result_array();
	}

	public function get_mail_user($where)
	{
		$query = $this->db->query(`
		SELECT *
		FROM users a
		WHERE a.registration_no = $where
		`);

		return $query->result_array();
	}

	public function add_user($info)
	{
		$this->db->insert($this->users, $info);

		$id = $this->db->insert_id();
		$registration_no = 'O-' . str_pad($id, 2, '0', STR_PAD_LEFT);
		$this->db->where('id', $id);
		$this->db->update($this->users, array('registration_no' => $registration_no));
	}

	public function add_onsite_user($info)
	{
		$this->db->insert($this->users, $info);

		$id = $this->db->insert_id();
		$registration_no = 'O-' . str_pad($id, 2, '0', STR_PAD_LEFT);
		$this->db->where('id', $id);
		$this->db->update($this->users, array('registration_no' => $registration_no));
	}

	public function add_memo($info, $where)
	{
		$this->db->where($where);
		$ret = $this->db->update($this->users, $info);
		return $ret;
	}

	public function del_user($info)
	{
		$this->db->delete($this->users, $info);
	}

	public function num_row($info)
	{
		$this->db->where($info);
		return $this->db->get($this->users)->num_rows();
	}

	public function update_sub_time($info, $where)
	{
		$this->db->where($where);
		$this->db->update($this->users, $info);
	}

	public function update_deposit_status($info, $where)
	{
		$this->db->where($where);
		$this->db->update($this->users, $info);
	}
	public function update_all_deposit_status($info)
	{
		$this->db->update($this->users, $info);
	}

	public function update_qr_status($info, $where)
	{
		$this->db->where($where);
		$this->db->update($this->users, $info);
	}

	public function update_user($info, $where)
	{
		$this->db->where($where);
		$ret = $this->db->update($this->users, $info);
		return $ret;
	}

	public function save_upload($data)
	{
		$result = $this->db->insert($this->abstracts, $data);
		return $result;
	}

	public function insert_file_upload($data2)
	{
		$result = $this->db->insert($this->upload_file, $data2);
		return $result;
	}

	public function get_file_upload($where)
	{
		$this->db->where($where);
		return $this->db->get($this->upload_file)->row_array();
	}


	public function save_upload_abstract_base($data)
	{
		$result = $this->db->insert($this->abstractsBase, $data);
		return $this->db->insert_id();
	}

	public function update_abstract_base($id, $data)
	{
		$this->db->where($id);
		$result = $this->db->update($this->abstractsBase, $data);
		return $result;
	}

	public function get_last_index_abstract_base()
	{
		$query = $this->db->query("SELECT AUTO_INCREMENT AS NEXT_IDX FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'lecture-kscp2023s' AND TABLE_NAME = 'ABSTRACT_BASE'");
		return $query->result();
	}

	public function get_upload_abstract_base($idx)
	{
		$this->db->where_in('idx', $idx);
		return $this->db->get($this->abstractsBase)->result_array();
	}

	public function get_new_abstracts_users()
	{
		$query = $this->db->query("select * from ABSTRACT_BASE");

		return $query->result_array();
	}

	public function get_abstract_base($where)
	{
		$this->db->where($where);
		return $this->db->get($this->abstractsBase)->row_array();
	}

	public function update_msm_status($info, $where)
	{
		$this->db->where($where);
		$this->db->update($this->users, $info);
	}

	public function get_msm_user($where)
	{
		$this->db->where($where);
		return $this->db->get($this->users)->result_array();
	}

	/**day 1 access & korean */
	public function get_access_statistics_k_1()
	{
		$query = $this->db->query("
	SELECT *
	FROM users a
	WHERE a.qr_chk_day_1 = 'Y' AND a.nation = 'Korea'
	ORDER BY a.id ASC
	");
		return $query->result_array();
	}

	/**day 1 access & no korean */
	public function get_access_statistics_e_1()
	{
		$query = $this->db->query("
		SELECT *
		FROM users a
		WHERE a.qr_chk_day_1 = 'Y' AND a.nation != 'Korea'
		ORDER BY a.id ASC
	");
		return $query->result_array();
	}

	/**day 2 access & korean */
	public function get_access_statistics_k_2()
	{
		$query = $this->db->query("
	SELECT *
	FROM users a
	WHERE a.qr_chk_day_2 = 'Y' AND a.nation = 'Korea'
	ORDER BY a.id ASC
	");
		return $query->result_array();
	}

	/**day 2 access & no korean */
	public function get_access_statistics_e_2()
	{
		$query = $this->db->query("
	SELECT *
	FROM users a
	WHERE a.qr_chk_day_2 = 'Y' AND a.nation != 'Korea'
	ORDER BY a.id ASC
	");
		return $query->result_array();
	}

	/**day 3 access & korean */
	public function get_access_statistics_k_3()
	{
		$query = $this->db->query("
	SELECT *
	FROM users a
	WHERE a.qr_chk_day_3 = 'Y' AND a.nation = 'Korea'
	ORDER BY a.id ASC
	");
		return $query->result_array();
	}

	/**day 3 access & no korean */
	public function get_access_statistics_e_3()
	{
		$query = $this->db->query("
	SELECT *
	FROM users a
	WHERE a.qr_chk_day_3 = 'Y' AND a.nation != 'Korea'
	ORDER BY a.id ASC
	");
		return $query->result_array();
	}

	//날짜 변경 필요!!!
	//faculty page / 일반참석자, 기자 제외
	public function get_faculty()
	{
		$query = $this->db->query("
		SELECT *, time_format(b.duration,'%H시간 %i분') as d_format
		FROM users a
		LEFT JOIN (
			SELECT registration_no as qr_registration_no,
				MIN(time) as mintime_day_1,
				TIMEDIFF(MAX(time), MIN(time)) as duration
			FROM access
			 WHERE DATE(TIME) = '2025-05-01'
			GROUP BY registration_no
		) b ON a.registration_no = b.qr_registration_no
		LEFT JOIN (
			SELECT registration_no as qr_registration_no,
				MIN(time) as mintime_day_2,
				TIMEDIFF(MAX(time), MIN(time)) as duration
			FROM access
			 WHERE DATE(TIME) = '2025-05-02'
			GROUP BY registration_no
		) b1 ON a.registration_no = b1.qr_registration_no

		LEFT JOIN (
			SELECT registration_no as qr_registration_no,
				MIN(time) as mintime_day_3,
				TIMEDIFF(MAX(time), MIN(time)) as duration
			FROM access
			 WHERE DATE(TIME) = '2025-05-03'
			GROUP BY registration_no
		) b2 ON a.registration_no = b2.qr_registration_no
		WHERE a.qr_generated = 'Y' AND a.deposit = '결제완료' AND a.attendance_type != 'Participants' AND a.attendance_type != 'Sponsor'
		ORDER BY a.id ASC
");
		return $query->result_array();
	}

	public function get_time_user()
	{
		$query = $this->db->query("
		SELECT a.*, 
		TIME_FORMAT(b.maxtime_day_1, '%H:%i') as maxtime_day_1_formatted,
		TIME_FORMAT(b.mintime_day_1, '%H:%i') as mintime_day_1_formatted,
		TIME_FORMAT(b1.maxtime_day_2, '%H:%i') as maxtime_day_2_formatted,
		TIME_FORMAT(b1.mintime_day_2, '%H:%i') as mintime_day_2_formatted,
		TIME_FORMAT(b2.maxtime_day_3, '%H:%i') as maxtime_day_3_formatted,
		TIME_FORMAT(b2.mintime_day_3, '%H:%i') as mintime_day_3_formatted
	FROM users a
	LEFT JOIN (
		SELECT registration_no as qr_registration_no,
			MAX(time) as maxtime_day_1,
			MIN(time) as mintime_day_1,
			TIMEDIFF(MAX(time), MIN(time)) as duration
		FROM access
		WHERE DATE(TIME) = '2025-05-01'
		GROUP BY registration_no
	) AS b ON a.registration_no = b.qr_registration_no
	LEFT JOIN (
		SELECT registration_no as qr_registration_no,
			MAX(time) as maxtime_day_2,
			MIN(time) as mintime_day_2,
			TIMEDIFF(MAX(time), MIN(time)) as duration
		FROM access
		WHERE DATE(TIME) = '2025-05-02'
		GROUP BY registration_no
	) AS b1 ON a.registration_no = b1.qr_registration_no

	LEFT JOIN (
		SELECT registration_no as qr_registration_no,
			MAX(time) as maxtime_day_3,
			MIN(time) as mintime_day_3,
			TIMEDIFF(MAX(time), MIN(time)) as duration
		FROM access
		WHERE DATE(TIME) = '2025-05-03'
		GROUP BY registration_no
	) AS b2 ON a.registration_no = b2.qr_registration_no
	WHERE a.qr_generated = 'Y' 
		AND a.deposit = '결제완료'
	ORDER BY a.id ASC;

	");
	return $query->result_array();
	}

	public function get_onsite_users()
	{
		$query = $this->db->query("
		SELECT a.*
		FROM users a
		WHERE a.onsite_reg = '1'
		ORDER BY a.id DESC;
	");
	return $query->result_array();
	}


	public function get_onsite_user($where)
	{
		$query = $this->db->query("
				SELECT a.*
				FROM users a
				WHERE a.qr_generated = 'Y' 
				AND a.onsite_reg = '1'
				AND a.deposit_date = ?
				ORDER BY a.id DESC
			", array($where));

		return $query->result_array();
	}
}
