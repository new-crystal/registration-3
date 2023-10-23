<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Entrance extends CI_Model
{
    private $access = "access";
    private $users = "users";

    public function record($info)
    {
        if ($this->db->insert($this->access, $info))
            return true;
        else
            return false;
    }

    public function history_all()
    {
        //
        //        $this->db->join('users as a', 'access.phone = a.phone','left');
        //        $this->db->select('a.type, a.type2, a.nick_name, access.phone, a.email, a.org, a.addr, access.time, access.id as idx');
        //		$this->db->order_by('a.nick_name');
        //		return $this->db->get($this->access)->result_array();
        //$query = $this->db->query("SELECT *, time_format(b.duration,'%H시간 %i분') as d_format from users a LEFT JOIN( SELECT registration_no as qr_registration_no, MAX(time) as maxtime, MIN(time) as mintime, TIMEDIFF(MAX(time), MIN(time)) as duration from access GROUP by registration_no )b on a.registration_no = b.qr_registration_no ORDER BY a.nick_name ASC");

        $query = $this->db->query("
        SELECT *,
            time_format(b.duration,'%H시간 %i분') as d_format,
            time_format(b1.duration_day1,'%H시간 %i분') as d_format_day1,
            time_format(b2.duration_day2,'%H시간 %i분') as d_format_day2,
            time_format(b3.duration_day3,'%H시간 %i분') as d_format_day3
        FROM users a
        LEFT JOIN( SELECT registration_no as qr_registration_no, MAX(time) as maxtime, MIN(time) as mintime, TIMEDIFF(MAX(time), MIN(time)) as duration from access GROUP by registration_no ) b on a.registration_no = b.qr_registration_no
        LEFT JOIN (
            SELECT registration_no as qr_registration_no,
                MAX(time) as maxtime_day1,
                MIN(time) as mintime_day1,
                TIMEDIFF(MAX(time), MIN(time)) as duration_day1
            FROM access
            WHERE DATE(TIME) = '2023-10-26'
            GROUP BY registration_no
        ) b1 ON a.registration_no = b1.qr_registration_no
        LEFT JOIN (
            SELECT registration_no as qr_registration_no,
                MAX(time) as maxtime_day2,
                MIN(time) as mintime_day2,
                TIMEDIFF(MAX(time), MIN(time)) as duration_day2
            FROM access
            WHERE DATE(TIME) = '2023-10-27'
            GROUP BY registration_no
        ) b2 ON a.registration_no = b2.qr_registration_no
        LEFT JOIN (
            SELECT registration_no as qr_registration_no,
                MAX(time) as maxtime_day3,
                MIN(time) as mintime_day3,
                TIMEDIFF(MAX(time), MIN(time)) as duration_day3
            FROM access
            WHERE DATE(TIME) = '2023-10-28'
            GROUP BY registration_no
        ) b3 ON a.registration_no = b3.qr_registration_no
        ORDER BY a.name_kor ASC;
        ");

        return $query->result_array();
    }

    public function history_gala()
    {
        //
        //        $this->db->join('users as a', 'access.phone = a.phone','left');
        //        $this->db->select('a.type, a.type2, a.nick_name, access.phone, a.email, a.org, a.addr, access.time, access.id as idx');
        //		$this->db->order_by('a.nick_name');
        //		return $this->db->get($this->access)->result_array();
        //$query = $this->db->query("SELECT *, time_format(b.duration,'%H시간 %i분') as d_format from users a LEFT JOIN( SELECT registration_no as qr_registration_no, MAX(time) as maxtime, MIN(time) as mintime, TIMEDIFF(MAX(time), MIN(time)) as duration from access GROUP by registration_no )b on a.registration_no = b.qr_registration_no ORDER BY a.nick_name ASC");

        $query = $this->db->query("
        SELECT *,
        time_format(b.duration,'%H시간 %i분') as d_format,
        time_format(b1.duration_day1,'%H시간 %i분') as d_format_day1,
        time_format(b2.duration_day2,'%H시간 %i분') as d_format_day2,
        time_format(b3.duration_day3,'%H시간 %i분') as d_format_day3
    FROM users a
    LEFT JOIN( SELECT registration_no as qr_registration_no, MAX(time) as maxtime, MIN(time) as mintime, TIMEDIFF(MAX(time), MIN(time)) as duration from access GROUP by registration_no ) b on a.registration_no = b.qr_registration_no
    LEFT JOIN (
        SELECT registration_no as qr_registration_no,
            MAX(time) as maxtime_day1,
            MIN(time) as mintime_day1,
            TIMEDIFF(MAX(time), MIN(time)) as duration_day1
        FROM access
        WHERE DATE(TIME) = '2023-10-26'
        GROUP BY registration_no
    ) b1 ON a.registration_no = b1.qr_registration_no
    LEFT JOIN (
        SELECT registration_no as qr_registration_no,
            MAX(time) as maxtime_day2,
            MIN(time) as mintime_day2,
            TIMEDIFF(MAX(time), MIN(time)) as duration_day2
        FROM access
        WHERE DATE(TIME) = '2023-10-27'
        GROUP BY registration_no
    ) b2 ON a.registration_no = b2.qr_registration_no
    LEFT JOIN (
        SELECT registration_no as qr_registration_no,
            MAX(time) as maxtime_day3,
            MIN(time) as mintime_day3,
            TIMEDIFF(MAX(time), MIN(time)) as duration_day3
        FROM access
        WHERE DATE(TIME) = '2023-10-28'
        GROUP BY registration_no
    ) b3 ON a.registration_no = b3.qr_registration_no
    WHERE a.remark6 = 'Y'
    ORDER BY a.id ASC;
        ");

        return $query->result_array();
    }

    public function history($where)
    {
        $this->db->where($where);
        $this->db->select('time');
        return $this->db->get($this->access)->row_array();
    }
    public function access($where)
    {
        $this->db->where($where);
        $this->db->where('DATE(time)', date('Y-m-d'));
        $this->db->select('MIN(time) as min_time, MAX(time) as max_time, TIMESTAMPDIFF(MINUTE, MIN(time), MAX(time)) as duration');
        return $this->db->get($this->access)->row_array();
    }

    /*
    public function access($where)
    {
        $this->db->where($where);
        $this->db->select('MIN(time) as min_time, MAX(time) as max_time, TIMESTAMPDIFF(MINUTE, MIN(time), MAX(time)) as duration');
        return $this->db->get($this->access)->row_array();
    }
    */
}
