<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Table extends CI_Model
{
    ////////////////////////////////////////////     day 1 - 사전등록   ////////////////////////////////////////////////////////////////////////
    public function get_day1_speaker_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Speaker' AND a.nation = 'Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day1_speaker_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Speaker' AND a.nation != 'Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }


    public function get_day1_chairperson_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Chairperson' AND a.nation = 'Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day1_chairperson_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Chairperson' AND a.nation != 'Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }


    public function get_day1_penel_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Panel' AND a.nation = 'Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day1_penel_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Panel' AND a.nation != 'Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day1_committee_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Committee' AND a.nation = 'Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day1_committee_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Committee' AND a.nation != 'Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day1_participants_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Participant' AND a.nation = 'Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day1_participants_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Participant' AND a.nation != 'Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day1_one_day_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y'AND a.attendance_type LIKE '%One%' AND a.nation = 'Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day1_one_day_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type LIKE '%One%' AND a.nation != 'Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day1_sponsor_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Sponsor' AND a.nation = 'Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day1_sponsor_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Sponsor' AND a.nation != 'Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }
    
    public function get_day1_other_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type != 'Speaker' AND a.attendance_type != 'Chairperson' AND a.attendance_type != 'Panel'  AND a.attendance_type != 'Committee' AND a.attendance_type != 'Participant' AND a.attendance_type != 'Sponsor' AND a.attendance_type NOT LIKE '%One%' AND a.nation = 'Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day1_other_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
             WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type != 'Speaker' AND a.attendance_type != 'Chairperson' AND a.attendance_type != 'Panel'  AND a.attendance_type != 'Committee' AND a.attendance_type != 'Participant' AND a.attendance_type != 'Sponsor' AND a.attendance_type NOT LIKE '%One%' AND a.nation != 'Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    ////////////////////////////////////////////     day 2 - 사전등록   ////////////////////////////////////////////////////////////////////////


    public function get_day2_speaker_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Speaker' AND a.nation = 'Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day2_speaker_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Speaker' AND a.nation != 'Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }


    public function get_day2_chairperson_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Chairperson' AND a.nation = 'Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day2_chairperson_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Chairperson' AND a.nation != 'Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }


    public function get_day2_penel_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Panel' AND a.nation = 'Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day2_penel_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Panel' AND a.nation != 'Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day2_committee_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Committee' AND a.nation = 'Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day2_committee_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Committee' AND a.nation != 'Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day2_participants_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Participant' AND a.nation = 'Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day2_participants_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Participant' AND a.nation != 'Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    
    public function get_day2_one_day_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type LIKE '%One%' AND a.nation = 'Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day2_one_day_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type LIKE '%One%' AND a.nation != 'Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day2_sponsor_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Sponsor' AND a.nation = 'Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day2_sponsor_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Sponsor' AND a.nation != 'Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }
    
    public function get_day2_other_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type != 'Speaker' AND a.attendance_type != 'Chairperson' AND a.attendance_type != 'Panel'  AND a.attendance_type != 'Committee' AND a.attendance_type != 'Participant' AND a.attendance_type != 'Sponsor' AND a.attendance_type NOT LIKE '%One%' AND a.nation = 'Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_day2_other_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
             WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type != 'Speaker' AND a.attendance_type != 'Chairperson' AND a.attendance_type != 'Panel'  AND a.attendance_type != 'Committee' AND a.attendance_type != 'Participant' AND a.attendance_type != 'Sponsor' AND a.attendance_type NOT LIKE '%One%' AND a.nation != 'Korea' AND a.onsite_reg = 0
            ");
            $result = $query->result_array();  
            return count($result); 
    }

     ////////////////////////////////////////////     day 3 - 사전등록   ////////////////////////////////////////////////////////////////////////
     public function get_day3_speaker_kor()
     {
         $query = $this->db->query("
             SELECT *
             FROM users a
             WHERE a.qr_chk_day_3 = 'Y' AND a.attendance_type = 'Speaker' AND a.nation = 'Korea' AND a.onsite_reg = 0
             ");
             $result = $query->result_array();  
             return count($result); 
     }
     
     public function get_day3_speaker_eng()
     {
         $query = $this->db->query("
             SELECT *
             FROM users a
             WHERE a.qr_chk_day_3 = 'Y' AND a.attendance_type = 'Speaker' AND a.nation != 'Korea' AND a.onsite_reg = 0
             ");
             $result = $query->result_array();  
             return count($result); 
     }
     
     
     public function get_day3_chairperson_kor()
     {
         $query = $this->db->query("
             SELECT *
             FROM users a
             WHERE a.qr_chk_day_3 = 'Y' AND a.attendance_type = 'Chairperson' AND a.nation = 'Korea' AND a.onsite_reg = 0
             ");
             $result = $query->result_array();  
             return count($result); 
     }
     
     public function get_day3_chairperson_eng()
     {
         $query = $this->db->query("
             SELECT *
             FROM users a
             WHERE a.qr_chk_day_3 = 'Y' AND a.attendance_type = 'Chairperson' AND a.nation != 'Korea' AND a.onsite_reg = 0
             ");
             $result = $query->result_array();  
             return count($result); 
     }
     
     
     public function get_day3_penel_kor()
     {
         $query = $this->db->query("
             SELECT *
             FROM users a
             WHERE a.qr_chk_day_3 = 'Y' AND a.attendance_type = 'Panel' AND a.nation = 'Korea' AND a.onsite_reg = 0
             ");
             $result = $query->result_array();  
             return count($result); 
     }
     
     public function get_day3_penel_eng()
     {
         $query = $this->db->query("
             SELECT *
             FROM users a
             WHERE a.qr_chk_day_3 = 'Y' AND a.attendance_type = 'Panel' AND a.nation != 'Korea' AND a.onsite_reg = 0
             ");
             $result = $query->result_array();  
             return count($result); 
     }
     
     public function get_day3_committee_kor()
     {
         $query = $this->db->query("
             SELECT *
             FROM users a
             WHERE a.qr_chk_day_3 = 'Y' AND a.attendance_type = 'Committee' AND a.nation = 'Korea' AND a.onsite_reg = 0
             ");
             $result = $query->result_array();  
             return count($result); 
     }
     
     public function get_day3_committee_eng()
     {
         $query = $this->db->query("
             SELECT *
             FROM users a
             WHERE a.qr_chk_day_3 = 'Y' AND a.attendance_type = 'Committee' AND a.nation != 'Korea' AND a.onsite_reg = 0
             ");
             $result = $query->result_array();  
             return count($result); 
     }
     
     public function get_day3_participants_kor()
     {
         $query = $this->db->query("
             SELECT *
             FROM users a
             WHERE a.qr_chk_day_3 = 'Y' AND a.attendance_type = 'Participant' AND a.nation = 'Korea' AND a.onsite_reg = 0
             ");
             $result = $query->result_array();  
             return count($result); 
     }
     
     public function get_day3_participants_eng()
     {
         $query = $this->db->query("
             SELECT *
             FROM users a
             WHERE a.qr_chk_day_3 = 'Y' AND a.attendance_type = 'Participant' AND a.nation != 'Korea' AND a.onsite_reg = 0
             ");
             $result = $query->result_array();  
             return count($result); 
     }

         
     public function get_day3_one_day_kor()
     {
         $query = $this->db->query("
             SELECT *
             FROM users a
             WHERE a.qr_chk_day_3 = 'Y' AND a.attendance_type LIKE '%One%' AND a.nation = 'Korea' AND a.onsite_reg = 0
             ");
             $result = $query->result_array();  
             return count($result); 
     }
     
     public function get_day3_one_day_eng()
     {
         $query = $this->db->query("
             SELECT *
             FROM users a
             WHERE a.qr_chk_day_3 = 'Y' AND a.attendance_type LIKE '%One%' AND a.nation != 'Korea' AND a.onsite_reg = 0
             ");
             $result = $query->result_array();  
             return count($result); 
     }
     
     
     public function get_day3_sponsor_kor()
     {
         $query = $this->db->query("
             SELECT *
             FROM users a
             WHERE a.qr_chk_day_3 = 'Y' AND a.attendance_type = 'Sponsor' AND a.nation = 'Korea' AND a.onsite_reg = 0
             ");
             $result = $query->result_array();  
             return count($result); 
     }
     
     public function get_day3_sponsor_eng()
     {
         $query = $this->db->query("
             SELECT *
             FROM users a
             WHERE a.qr_chk_day_3 = 'Y' AND a.attendance_type = 'Sponsor' AND a.nation != 'Korea' AND a.onsite_reg = 0
             ");
             $result = $query->result_array();  
             return count($result); 
     }
     
     public function get_day3_other_kor()
     {
         $query = $this->db->query("
             SELECT *
             FROM users a
             WHERE a.qr_chk_day_3 = 'Y' AND a.attendance_type != 'Speaker' AND a.attendance_type != 'Chairperson' AND a.attendance_type != 'Panel'  AND a.attendance_type != 'Committee' AND a.attendance_type != 'Participant' AND a.attendance_type != 'Sponsor' AND a.attendance_type NOT LIKE '%One%' AND a.nation = 'Korea' AND a.onsite_reg = 0
             ");
             $result = $query->result_array();  
             return count($result); 
     }
     
     public function get_day3_other_eng()
     {
         $query = $this->db->query("
             SELECT *
             FROM users a
              WHERE a.qr_chk_day_3 = 'Y' AND a.attendance_type != 'Speaker' AND a.attendance_type != 'Chairperson' AND a.attendance_type != 'Panel'  AND a.attendance_type != 'Committee' AND a.attendance_type != 'Participant' AND a.attendance_type != 'Sponsor' AND a.attendance_type NOT LIKE '%One%' AND a.nation != 'Korea' AND a.onsite_reg = 0
             ");
             $result = $query->result_array();  
             return count($result); 
     }
     

     
    ////////////////////////////////////////////     day 1, 2 ,3 - 사전등록   /////////////////////////////////////////
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

    public function get_day3()
    {
        $query = $this->db->query("
        SELECT *
        FROM users a
        WHERE a.qr_chk_day_3 = 'Y' AND a.onsite_reg = 0
        ");
        $result = $query->result_array();  
        return count($result); 
    }

    public function get_pre_reg()
    {
        $query = $this->db->query("
                SELECT *
                FROM users a
                WHERE a.qr_chk = 'Y' AND a.onsite_reg = 0
        ");
        $result = $query->result_array();  
        return count($result); 
    }

       ////////////////////////////////////////////     day 1 -  현장등록   /////////////////////////////////////////
    public function get_on_day1_speaker_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Speaker' AND a.nation = 'Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day1_speaker_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Speaker' AND a.nation != 'Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }


    public function get_on_day1_chairperson_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Chairperson' AND a.nation = 'Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day1_chairperson_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Chairperson' AND a.nation != 'Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }


    public function get_on_day1_penel_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Panel' AND a.nation = 'Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day1_penel_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Panel' AND a.nation != 'Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day1_committee_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Committee' AND a.nation = 'Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day1_committee_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Committee' AND a.nation != 'Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day1_participants_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Participant' AND a.nation = 'Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day1_participants_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Participant' AND a.nation != 'Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    
    public function get_on_day1_one_day_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type LIKE '%One%' AND a.nation = 'Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day1_one_day_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type LIKE '%One%' AND a.nation != 'Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day1_sponsor_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Sponsor' AND a.nation = 'Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day1_sponsor_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type = 'Sponsor' AND a.nation != 'Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day1_other_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type != 'Speaker' AND a.attendance_type != 'Chairperson' AND a.attendance_type != 'Panel'  AND a.attendance_type != 'Committee' AND a.attendance_type != 'Participant' AND a.attendance_type != 'Sponsor' AND a.attendance_type NOT LIKE '%One%' AND a.nation = 'Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day1_other_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_1 = 'Y' AND a.attendance_type != 'Speaker' AND a.attendance_type != 'Chairperson' AND a.attendance_type != 'Panel'  AND a.attendance_type != 'Committee' AND a.attendance_type != 'Participant' AND a.attendance_type != 'Sponsor' AND a.attendance_type NOT LIKE '%One%' AND a.nation != 'Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }


      ////////////////////////////////////////////     day 2 -  현장등록   /////////////////////////////////////////
    public function get_on_day2_speaker_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Speaker' AND a.nation = 'Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day2_speaker_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Speaker' AND a.nation != 'Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }


    public function get_on_day2_chairperson_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Chairperson' AND a.nation = 'Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day2_chairperson_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Chairperson' AND a.nation != 'Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }


    public function get_on_day2_penel_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Panel' AND a.nation = 'Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day2_penel_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Panel' AND a.nation != 'Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day2_committee_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Committee' AND a.nation = 'Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day2_committee_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Committee' AND a.nation != 'Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day2_participants_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Participant' AND a.nation = 'Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day2_participants_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Participant' AND a.nation != 'Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day2_one_day_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type LIKE '%One%' AND a.nation = 'Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day2_one_day_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type LIKE '%One%' AND a.nation != 'Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day2_sponsor_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Sponsor' AND a.nation = 'Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day2_sponsor_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type = 'Sponsor' AND a.nation != 'Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day2_other_kor()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type != 'Speaker' AND a.attendance_type != 'Chairperson' AND a.attendance_type != 'Panel'  AND a.attendance_type != 'Committee' AND a.attendance_type != 'Participant' AND a.attendance_type != 'Sponsor' AND a.attendance_type NOT LIKE '%One%' AND a.nation = 'Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

    public function get_on_day2_other_eng()
    {
        $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_2 = 'Y' AND a.attendance_type != 'Speaker' AND a.attendance_type != 'Chairperson' AND a.attendance_type != 'Panel'  AND a.attendance_type != 'Committee' AND a.attendance_type != 'Participant' AND a.attendance_type != 'Sponsor' AND a.attendance_type NOT LIKE '%One%' AND a.nation != 'Korea' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
    }

          ////////////////////////////////////////////     day 3 -  현장등록   /////////////////////////////////////////
          public function get_on_day3_speaker_kor()
          {
              $query = $this->db->query("
                  SELECT *
                  FROM users a
                  WHERE a.qr_chk_day_3 = 'Y' AND a.attendance_type = 'Speaker' AND a.nation = 'Korea' AND a.onsite_reg = 1
                  ");
                  $result = $query->result_array();  
                  return count($result); 
          }
          
          public function get_on_day3_speaker_eng()
          {
              $query = $this->db->query("
                  SELECT *
                  FROM users a
                  WHERE a.qr_chk_day_3 = 'Y' AND a.attendance_type = 'Speaker' AND a.nation != 'Korea' AND a.onsite_reg = 1
                  ");
                  $result = $query->result_array();  
                  return count($result); 
          }
          
          
          public function get_on_day3_chairperson_kor()
          {
              $query = $this->db->query("
                  SELECT *
                  FROM users a
                  WHERE a.qr_chk_day_3 = 'Y' AND a.attendance_type = 'Chairperson' AND a.nation = 'Korea' AND a.onsite_reg = 1
                  ");
                  $result = $query->result_array();  
                  return count($result); 
          }
          
          public function get_on_day3_chairperson_eng()
          {
              $query = $this->db->query("
                  SELECT *
                  FROM users a
                  WHERE a.qr_chk_day_3 = 'Y' AND a.attendance_type = 'Chairperson' AND a.nation != 'Korea' AND a.onsite_reg = 1
                  ");
                  $result = $query->result_array();  
                  return count($result); 
          }
          
          
          public function get_on_day3_penel_kor()
          {
              $query = $this->db->query("
                  SELECT *
                  FROM users a
                  WHERE a.qr_chk_day_3 = 'Y' AND a.attendance_type = 'Panel' AND a.nation = 'Korea' AND a.onsite_reg = 1
                  ");
                  $result = $query->result_array();  
                  return count($result); 
          }
          
          public function get_on_day3_penel_eng()
          {
              $query = $this->db->query("
                  SELECT *
                  FROM users a
                  WHERE a.qr_chk_day_3 = 'Y' AND a.attendance_type = 'Panel' AND a.nation != 'Korea' AND a.onsite_reg = 1
                  ");
                  $result = $query->result_array();  
                  return count($result); 
          }
          
          public function get_on_day3_committee_kor()
          {
              $query = $this->db->query("
                  SELECT *
                  FROM users a
                  WHERE a.qr_chk_day_3 = 'Y' AND a.attendance_type = 'Committee' AND a.nation = 'Korea' AND a.onsite_reg = 1
                  ");
                  $result = $query->result_array();  
                  return count($result); 
          }
          
          public function get_on_day3_committee_eng()
          {
              $query = $this->db->query("
                  SELECT *
                  FROM users a
                  WHERE a.qr_chk_day_3 = 'Y' AND a.attendance_type = 'Committee' AND a.nation != 'Korea' AND a.onsite_reg = 1
                  ");
                  $result = $query->result_array();  
                  return count($result); 
          }
          
          public function get_on_day3_participants_kor()
          {
              $query = $this->db->query("
                  SELECT *
                  FROM users a
                  WHERE a.qr_chk_day_3 = 'Y' AND a.attendance_type = 'Participant' AND a.nation = 'Korea' AND a.onsite_reg = 1
                  ");
                  $result = $query->result_array();  
                  return count($result); 
          }
          
          public function get_on_day3_participants_eng()
          {
              $query = $this->db->query("
                  SELECT *
                  FROM users a
                  WHERE a.qr_chk_day_3 = 'Y' AND a.attendance_type = 'Participant' AND a.nation != 'Korea' AND a.onsite_reg = 1
                  ");
                  $result = $query->result_array();  
                  return count($result); 
          }

          public function get_on_day3_one_day_kor()
          {
              $query = $this->db->query("
                  SELECT *
                  FROM users a
                  WHERE a.qr_chk_day_3 = 'Y' AND a.attendance_type LIKE '%One%' AND a.nation = 'Korea' AND a.onsite_reg = 1
                  ");
                  $result = $query->result_array();  
                  return count($result); 
          }
          
          public function get_on_day3_one_day_eng()
          {
              $query = $this->db->query("
                  SELECT *
                  FROM users a
                  WHERE a.qr_chk_day_3 = 'Y' AND a.attendance_type LIKE '%One%' AND a.nation != 'Korea' AND a.onsite_reg = 1
                  ");
                  $result = $query->result_array();  
                  return count($result); 
          }
          
          public function get_on_day3_sponsor_kor()
          {
              $query = $this->db->query("
                  SELECT *
                  FROM users a
                  WHERE a.qr_chk_day_3 = 'Y' AND a.attendance_type = 'Sponsor' AND a.nation = 'Korea' AND a.onsite_reg = 1
                  ");
                  $result = $query->result_array();  
                  return count($result); 
          }
          
          public function get_on_day3_sponsor_eng()
          {
              $query = $this->db->query("
                  SELECT *
                  FROM users a
                  WHERE a.qr_chk_day_3 = 'Y' AND a.attendance_type = 'Sponsor' AND a.nation != 'Korea' AND a.onsite_reg = 1
                  ");
                  $result = $query->result_array();  
                  return count($result); 
          }
          
          public function get_on_day3_other_kor()
          {
              $query = $this->db->query("
                  SELECT *
                  FROM users a
                  WHERE a.qr_chk_day_3 = 'Y' AND a.attendance_type != 'Speaker' AND a.attendance_type != 'Chairperson' AND a.attendance_type != 'Panel'  AND a.attendance_type != 'Committee' AND a.attendance_type != 'Participant' AND a.attendance_type != 'Sponsor' AND a.attendance_type NOT LIKE '%One%' AND a.nation = 'Korea' AND a.onsite_reg = 1
                  ");
                  $result = $query->result_array();  
                  return count($result); 
          }
          
          public function get_on_day3_other_eng()
          {
              $query = $this->db->query("
                  SELECT *
                  FROM users a
                  WHERE a.qr_chk_day_3 = 'Y' AND a.attendance_type != 'Speaker' AND a.attendance_type != 'Chairperson' AND a.attendance_type != 'Panel'  AND a.attendance_type != 'Committee' AND a.attendance_type != 'Participant' AND a.attendance_type != 'Sponsor' AND a.attendance_type NOT LIKE '%One%' AND a.nation != 'Korea' AND a.onsite_reg = 1
                  ");
                  $result = $query->result_array();  
                  return count($result); 
          }

        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            
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
        
        public function get_on_day3()
        {
            $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk_day_3 = 'Y' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
        }

        public function get_on_site()
        {
            $query = $this->db->query("
            SELECT *
            FROM users a
            WHERE a.qr_chk = 'Y' AND a.onsite_reg = 1
            ");
            $result = $query->result_array();  
            return count($result); 
        }



    ////////////////////////////////////////////////// 패컬티 입장 유무 - 사전 등록 ///////////////////////////////////////////////////////////////////

    public function get_on_chairperson()
    {
        $query = $this->db->query("
        SELECT *
        FROM users a
        WHERE a.qr_chk = 'Y' AND a.attendance_type = 'Chairperson' AND a.onsite_reg = 0
        ");
        $result = $query->result_array();
        // var_dump($result);   
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
        WHERE a.qr_chk = 'Y' AND a.attendance_type = 'Panel' AND a.onsite_reg = 0
        ");
        $result = $query->result_array();  
        return count($result); 
    }

    public function get_on_participant()
    {
        $query = $this->db->query("
        SELECT *
        FROM users a
        WHERE a.qr_chk = 'Y' AND a.attendance_type = 'Participant' AND a.onsite_reg = 0
        ");
        $result = $query->result_array();  
        return count($result); 
    }

    public function get_on_one_day()
    {
        $query = $this->db->query("
        SELECT *
        FROM users a
        WHERE a.qr_chk = 'Y' AND a.attendance_type LIKE '%One%' AND a.onsite_reg = 0
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
        WHERE a.qr_chk = 'Y'  AND a.attendance_type != 'Speaker' AND a.attendance_type != 'Chairperson' AND a.attendance_type != 'Panel' AND a.attendance_type != 'Committee' AND a.attendance_type != 'Participant' AND a.attendance_type != 'Sponsor' AND a.attendance_type NOT LIKE '%One%' AND a.onsite_reg = 0
        ");
        $result = $query->result_array();  
        return count($result); 
    }

    ////////////////////////////////////////////////// 패컬티 입장 유무 - 현장등록 ///////////////////////////////////////////////////////////////////

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
        WHERE a.qr_chk = 'Y' AND a.attendance_type = 'Panel' AND a.onsite_reg = 1
        ");
        $result = $query->result_array();  
        return count($result); 
    }

    public function get_on_participant_1()
    {
        $query = $this->db->query("
        SELECT *
        FROM users a
        WHERE a.qr_chk = 'Y' AND a.attendance_type = 'Participant' AND a.onsite_reg = 1
        ");
        $result = $query->result_array();  
        return count($result); 
    }

    public function get_on_one_day_1()
    {
        $query = $this->db->query("
        SELECT *
        FROM users a
        WHERE a.qr_chk = 'Y' AND a.attendance_type LIKE '%One%' AND a.onsite_reg = 1
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
        WHERE a.qr_chk = 'Y'  AND a.attendance_type != 'Speaker' AND a.attendance_type != 'Chairperson' AND a.attendance_type != 'Panel' AND a.attendance_type != 'Committee' AND a.attendance_type != 'Participant' AND a.attendance_type != 'Sponsor' AND a.attendance_type NOT LIKE '%One%' AND a.onsite_reg = 1
        ");
        $result = $query->result_array();  
        return count($result); 
    }

     //////////////////////////////////////////////////  현장등록 - Day 별 등록 인원 수 ///////////////////////////////////////////////////////////////////

     public function get_onsite_1()
     {
        $query = $this->db->query("
                        SELECT DATE_FORMAT(deposit_time, '%Y-%m-%d') AS deposit_date
                        FROM users
                        WHERE DATE(deposit_time) = '2025-05-01';
                    ");
        $result = $query->result_array();  
        return count($result); 
     }

     public function get_onsite_2()
     {
        $query = $this->db->query("
                        SELECT DATE_FORMAT(deposit_time, '%Y-%m-%d') AS deposit_date
                        FROM users
                        WHERE DATE(deposit_time) = '2025-05-02';
                    ");
        $result = $query->result_array();  
        return count($result); 
     }

     public function get_onsite_3()
     {
        $query = $this->db->query("
                        SELECT DATE_FORMAT(deposit_time, '%Y-%m-%d') AS deposit_date
                        FROM users
                        WHERE DATE(deposit_time) = '2025-05-03';
                    ");
        $result = $query->result_array();  
        return count($result); 
     }
}

?>
