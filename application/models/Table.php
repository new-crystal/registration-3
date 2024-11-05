<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Table extends CI_Model
{
    public function get_day1_speaker_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Speaker' AND a.nation = 'Republic of Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day1_speaker_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Speaker' AND a.nation != 'Republic of Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }


    public function get_day1_chairperson_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Chairperson' AND a.nation = 'Republic of Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day1_chairperson_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Chairperson' AND a.nation != 'Republic of Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }


    public function get_day1_penel_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Penel' AND a.nation = 'Republic of Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day1_penel_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Penel' AND a.nation != 'Republic of Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day1_committee_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Committee' AND a.nation = 'Republic of Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day1_committee_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Committee' AND a.nation != 'Republic of Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day1_participants_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Participants' AND a.nation = 'Republic of Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day1_participants_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Participants' AND a.nation != 'Republic of Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day1_sponsor_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Sponsor' AND a.nation = 'Republic of Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day1_sponsor_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Sponsor' AND a.nation != 'Republic of Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }
    
    public function get_day1_other_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type != 'Speaker' AND a.attendance_type != 'Chairperson' AND a.attendance_type != 'Penel'  AND a.attendance_type != 'Committee' AND a.attendance_type != 'Participants' AND a.attendance_type != 'Sponsor' AND a.nation = 'Republic of Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day1_other_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
             WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type != 'Speaker' AND a.attendance_type != 'Chairperson' AND a.attendance_type != 'Penel'  AND a.attendance_type != 'Committee' AND a.attendance_type != 'Participants' AND a.attendance_type != 'Sponsor' AND a.nation != 'Republic of Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }



    public function get_day2_speaker_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Speaker' AND a.nation = 'Republic of Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day2_speaker_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Speaker' AND a.nation != 'Republic of Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }


    public function get_day2_chairperson_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Chairperson' AND a.nation = 'Republic of Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day2_chairperson_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Chairperson' AND a.nation != 'Republic of Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }


    public function get_day2_penel_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Penel' AND a.nation = 'Republic of Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day2_penel_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Penel' AND a.nation != 'Republic of Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day2_committee_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Committee' AND a.nation = 'Republic of Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day2_committee_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Committee' AND a.nation != 'Republic of Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day2_participants_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Participants' AND a.nation = 'Republic of Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day2_participants_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Participants' AND a.nation != 'Republic of Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day2_sponsor_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Sponsor' AND a.nation = 'Republic of Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day2_sponsor_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Sponsor' AND a.nation != 'Republic of Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }
    
    public function get_day2_other_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type != 'Speaker' AND a.attendance_type != 'Chairperson' AND a.attendance_type != 'Penel'  AND a.attendance_type != 'Committee' AND a.attendance_type != 'Participants' AND a.attendance_type != 'Sponsor' AND a.nation = 'Republic of Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day2_other_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
             WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type != 'Speaker' AND a.attendance_type != 'Chairperson' AND a.attendance_type != 'Penel'  AND a.attendance_type != 'Committee' AND a.attendance_type != 'Participants' AND a.attendance_type != 'Sponsor' AND a.nation != 'Republic of Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day1()
    {
        $query = $this->db->query("
        SELECT *
        FROM users a
        WHERE a.qr_chk_day_1 = 'Y' AND a.onsite_reg = 0
        ");
        $result = $query->result_array();  
        return count($result); 
    }

    public function get_day2()
    {
        $query = $this->db->query("
        SELECT *
        FROM users a
        WHERE a.qr_chk_day_2 = 'Y' AND a.onsite_reg = 0
        ");
        $result = $query->result_array();  
        return count($result); 
    }


    ///////////////////////////////////////////////////////////////////////////////////////
    public function get_on_day1_speaker_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Speaker' AND a.nation = 'Republic of Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day1_speaker_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Speaker' AND a.nation != 'Republic of Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }


    public function get_on_day1_chairperson_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Chairperson' AND a.nation = 'Republic of Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day1_chairperson_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Chairperson' AND a.nation != 'Republic of Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }


    public function get_on_day1_penel_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Penel' AND a.nation = 'Republic of Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day1_penel_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Penel' AND a.nation != 'Republic of Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day1_committee_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Committee' AND a.nation = 'Republic of Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day1_committee_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Committee' AND a.nation != 'Republic of Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day1_participants_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Participants' AND a.nation = 'Republic of Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day1_participants_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Participants' AND a.nation != 'Republic of Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day1_sponsor_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Sponsor' AND a.nation = 'Republic of Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day1_sponsor_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Sponsor' AND a.nation != 'Republic of Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day1_other_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type != 'Speaker' AND a.attendance_type != 'Chairperson' AND a.attendance_type != 'Penel'  AND a.attendance_type != 'Committee' AND a.attendance_type != 'Participants' AND a.attendance_type != 'Sponsor' AND a.nation = 'Republic of Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day1_other_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type != 'Speaker' AND a.attendance_type != 'Chairperson' AND a.attendance_type != 'Penel'  AND a.attendance_type != 'Committee' AND a.attendance_type != 'Participants' AND a.attendance_type != 'Sponsor' AND a.nation != 'Republic of Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }



    public function get_on_day2_speaker_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Speaker' AND a.nation = 'Republic of Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day2_speaker_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Speaker' AND a.nation != 'Republic of Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }


    public function get_on_day2_chairperson_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Chairperson' AND a.nation = 'Republic of Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day2_chairperson_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Chairperson' AND a.nation != 'Republic of Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }


    public function get_on_day2_penel_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Penel' AND a.nation = 'Republic of Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day2_penel_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Penel' AND a.nation != 'Republic of Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day2_committee_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Committee' AND a.nation = 'Republic of Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day2_committee_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Committee' AND a.nation != 'Republic of Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day2_participants_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Participants' AND a.nation = 'Republic of Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day2_participants_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Participants' AND a.nation != 'Republic of Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day2_sponsor_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Sponsor' AND a.nation = 'Republic of Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day2_sponsor_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Sponsor' AND a.nation != 'Republic of Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day2_other_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type != 'Speaker' AND a.attendance_type != 'Chairperson' AND a.attendance_type != 'Penel'  AND a.attendance_type != 'Committee' AND a.attendance_type != 'Participants' AND a.attendance_type != 'Sponsor' AND a.nation = 'Republic of Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day2_other_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type != 'Speaker' AND a.attendance_type != 'Chairperson' AND a.attendance_type != 'Penel'  AND a.attendance_type != 'Committee' AND a.attendance_type != 'Participants' AND a.attendance_type != 'Sponsor' AND a.nation != 'Republic of Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day1()
    {
        $query = $this->db->query("
        SELECT *
        FROM users a
        WHERE a.qr_chk_day_1 = 'Y' AND a.onsite_reg = 1
        ");
        $result = $query->result_array();  
        return count($result); 
    }

    public function get_on_day2()
    {
        $query = $this->db->query("
        SELECT *
        FROM users a
        WHERE a.qr_chk_day_2 = 'Y' AND a.onsite_reg = 1
        ");
        $result = $query->result_array();  
        return count($result); 
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function get_on_chairperson()
    {
        $query = $this->db->query("
        SELECT *
        FROM users a
        WHERE a.qr_chk = 'Y' AND a.attendance_type = 'Chairperson' AND a.onsite_reg = 0
        ");
        $result = $query->result_array();  
        return count($result); 
    }

    public function get_on_committee()
    {
        $query = $this->db->query("
        SELECT *
        FROM users a
        WHERE a.qr_chk = 'Y' AND a.attendance_type = 'Committee' AND a.onsite_reg = 0
        ");
        $result = $query->result_array();  
        return count($result); 
    }

    public function get_on_speaker()
    {
        $query = $this->db->query("
        SELECT *
        FROM users a
        WHERE a.qr_chk = 'Y' AND a.attendance_type = 'Speaker' AND a.onsite_reg = 0
        ");
        $result = $query->result_array();  
        return count($result); 
    }

    public function get_on_panel()
    {
        $query = $this->db->query("
        SELECT *
        FROM users a
        WHERE a.qr_chk = 'Y' AND a.attendance_type = 'Penel' AND a.onsite_reg = 0
        ");
        $result = $query->result_array();  
        return count($result); 
    }

    public function get_on_participant()
    {
        $query = $this->db->query("
        SELECT *
        FROM users a
        WHERE a.qr_chk = 'Y' AND a.attendance_type = 'Participants' AND a.onsite_reg = 0
        ");
        $result = $query->result_array();  
        return count($result); 
    }

    public function get_on_sponsor()
    {
        $query = $this->db->query("
        SELECT *
        FROM users a
        WHERE a.qr_chk = 'Y' AND a.attendance_type = 'Sponsor' AND a.onsite_reg = 0
        ");
        $result = $query->result_array();  
        return count($result); 
    }

    public function get_on_others()
    {
        $query = $this->db->query("
        SELECT *
        FROM users a
        WHERE a.qr_chk = 'Y'  AND a.attendance_type != 'Speaker' AND a.attendance_type != 'Chairperson' AND a.attendance_type != 'Penel' AND a.attendance_type != 'Committee' AND a.attendance_type != 'Participants' AND a.attendance_type != 'Sponsor' AND a.onsite_reg = 0
        ");
        $result = $query->result_array();  
        return count($result); 
    }



    public function get_on_chairperson_1()
    {
        $query = $this->db->query("
        SELECT *
        FROM users a
        WHERE a.qr_chk = 'Y' AND a.attendance_type = 'Chairperson' AND a.onsite_reg = 1
        ");
        $result = $query->result_array();  
        return count($result); 
    }

    public function get_on_committee_1()
    {
        $query = $this->db->query("
        SELECT *
        FROM users a
        WHERE a.qr_chk = 'Y' AND a.attendance_type = 'Committee' AND a.onsite_reg = 1
        ");
        $result = $query->result_array();  
        return count($result); 
    }

    public function get_on_speaker_1()
    {
        $query = $this->db->query("
        SELECT *
        FROM users a
        WHERE a.qr_chk = 'Y' AND a.attendance_type = 'Speaker' AND a.onsite_reg = 1
        ");
        $result = $query->result_array();  
        return count($result); 
    }

    public function get_on_panel_1()
    {
        $query = $this->db->query("
        SELECT *
        FROM users a
        WHERE a.qr_chk = 'Y' AND a.attendance_type = 'Penel' AND a.onsite_reg = 1
        ");
        $result = $query->result_array();  
        return count($result); 
    }

    public function get_on_participant_1()
    {
        $query = $this->db->query("
        SELECT *
        FROM users a
        WHERE a.qr_chk = 'Y' AND a.attendance_type = 'Participants' AND a.onsite_reg = 1
        ");
        $result = $query->result_array();  
        return count($result); 
    }

    public function get_on_sponsor_1()
    {
        $query = $this->db->query("
        SELECT *
        FROM users a
        WHERE a.qr_chk = 'Y' AND a.attendance_type = 'Sponsor' AND a.onsite_reg = 1
        ");
        $result = $query->result_array();  
        return count($result); 
    }

    public function get_on_others_1()
    {
        $query = $this->db->query("
        SELECT *
        FROM users a
        WHERE a.qr_chk = 'Y'  AND a.attendance_type != 'Speaker' AND a.attendance_type != 'Chairperson' AND a.attendance_type != 'Penel' AND a.attendance_type != 'Committee' AND a.attendance_type != 'Participants' AND a.attendance_type != 'Sponsor' AND a.onsite_reg = 1
        ");
        $result = $query->result_array();  
        return count($result); 
    }
}

?>
