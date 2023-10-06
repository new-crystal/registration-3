<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Schedule extends CI_Model
{
    private $duration = "duration";
    private $breaks = "breaks";
    private $notice = "notice";

    public function get_dday()
    {
        $query = $this->db->query("SELECT CAST(DATE_FORMAT(DATE(MAX(`start`)), '%Y%m%d') AS SIGNED) AS Dday FROM `duration` WHERE 1 LIMIT 1");
        $row = $query->row_array();
        if (isset($row))
            return $row['Dday'] % 20000000;
        else
            return 0;
    }

    public function get_duration()
    {
        $query = $this->db->query("SELECT * FROM `duration` WHERE 1 LIMIT 1");
        return $query->row_array();
    }

    public function get_maxscore()
    {
        $query = $this->db->query("SELECT score FROM `config` WHERE 1 LIMIT 1");
        $ret = $query->row_array();
        return $ret['score'];
    }

    public function get_breaks()
    {
        $query = $this->db->query("SELECT * FROM `breaks` WHERE 1 ORDER BY `id`");
        return $query->result_array();
    }

    public function get_notice()
    {
        return $this->db->get($this->notice)->result_array();
    }
    public function add_notice($info)
    {
        $this->db->insert($this->notice, $info);
        $idx = $this->db->insert_id();
        $this->db->where('id', $idx);
    }
}
