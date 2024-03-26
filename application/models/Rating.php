<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rating extends CI_Model
{
    private $abstracts = "abstracts";
	private $abstract_reviewer = "abstract_reviewer";
    private $abstract_score = "abstract_score";

   
    public function get_scores()
    {
        $query = $this->db->query("SELECT * FROM `abstract_score` ORDER BY `idx`");
        return $query->result_array();
    }

    public function get_abstracts()
    {
        $query = $this->db->query("SELECT * FROM `abstracts` ORDER BY  `idx` ");
        return $query->result_array();
    }

    public function get_reviewers()
    {
        $query = $this->db->query("SELECT * FROM `abstract_reviewer` ORDER BY  `idx` ");
        return $query->result_array();
    }

    public function get_abstracts_sum($where)
    {
        $type = $where["type"]; 
        $query = $this->db->query("SELECT a.abstract_idx, 
                        c.*,
                        SUM(a.score1 + a.score2 + a.score3 + a.score4) AS sum
                FROM abstract_score a
                LEFT JOIN (
                    SELECT *
                    FROM abstracts
                    WHERE type = '$type' 
                    GROUP BY idx
                ) c ON a.abstract_idx = c.idx
                GROUP BY a.abstract_idx
                ORDER BY sum DESC;");
        return $query->result_array();
    }
    
    //기존 카테고리 1~10 출력
    // public function get_abstract_category()
    // {
    //     $query = $this->db->query("SELECT category
    //     FROM abstracts
    //     GROUP BY category;");
    //     return $query->result_array();
    // }

    //카테고리 다섯개만 출력
    public function get_abstract_category()
    {
        $query = $this->db->query("SELECT 
        CASE 
            WHEN category IN (1, 6) THEN 'a'
            WHEN category IN (2, 7) THEN 'b'
            WHEN category IN (3, 8) THEN 'c'
            WHEN category IN (4, 9) THEN 'd'
            WHEN category IN (5, 10) THEN 'e'
        END AS grouped_category
    FROM 
        abstracts
    GROUP BY 
        grouped_category;");
        return $query->result_array();
    }

    public function get_abstract($where)
    {
        $this->db->where($where);
		return $this->db->get($this->abstracts)->row_array();
    }

    public function get_abstract_rating($where)
    {
        $this->db->where($where);
		return $this->db->get($this->abstracts)->result_array();
    }

    public function get_reviewer($where)
    {
        $this->db->where($where);
		return $this->db->get($this->abstract_reviewer)->row_array();
    }

    public function add_score($info)
    {
        $this->db->insert($this->abstract_score, $info);
    }

    public function add_reviewer($info)
    {
        $this->db->insert($this->abstract_reviewer, $info);
    }

    public function update_score($info, $where)
    {
        $this->db->where($where);
		$ret = $this->db->update($this->abstract_score, $info);
		return $ret;
    }

    public function update_reviewer($info, $where)
    {
        $this->db->where($where);
		$ret = $this->db->update($this->abstract_reviewer, $info);
		return $ret;
    }

    public function update_score_sum($info, $where)
    {
        $this->db->where($where);
		$ret = $this->db->update($this->abstracts, $info);
		return $ret;
    }

    public function get_detail($where){
        $query = $this->db->query("
        SELECT a.*,  b.nick_name AS reviewer_name, b.org AS reviewer_org, b.code, c.submission_code, c.nation, c.nick_name AS abstract_name, c.org AS abstarct_org, (a.score1 + a.score2 + a.score3 + a.score4) AS sum
        FROM abstract_score a
        LEFT JOIN (
        SELECT *
        FROM abstract_reviewer
        ) b
        ON a.reviewer_idx = b.idx
        LEFT JOIN (
        SELECT *
        FROM abstracts
        GROUP BY idx
        ) c
        ON a.abstract_idx = c.idx
        WHERE c.idx =" . $where['idx']
        );
        return $query->result_array();
    }
    //type, category 별 excel download
    public function get_abstract_excel($where)
    {
        $type = $where["type"]; 
        $category = $where["category"]; 
        $query = $this->db->query("SELECT a.*, subquery.total_sum, subquery.etc1_sum, subquery.avg_etc1
            FROM abstracts a
            LEFT JOIN (
                SELECT c.abstract_idx, SUM(c.etc1) AS etc1_sum, AVG(c.etc1) AS avg_etc1, SUM(c.score1 + c.score2 + c.score3 + c.score4) AS total_sum
                FROM abstract_score c
                WHERE c.etc1 != 0
                GROUP BY c.abstract_idx
            ) AS subquery ON a.idx = subquery.abstract_idx
            WHERE a.category = '$category' AND a.type = '$type'
            ORDER BY subquery.avg_etc1 DESC;");
        return $query->result_array();
    }

    //type, category1, 2 별 excel download
    public function get_abstract_excel_plus($where)
    {
        $code1 = $where["code1"]; 
        $code2 = $where["code2"]; 
        $query = $this->db->query("SELECT a.*, subquery.total_sum, subquery.etc1_sum, subquery.avg_etc1
            FROM abstracts a
            LEFT JOIN (
                SELECT c.abstract_idx, SUM(c.etc1) AS etc1_sum, AVG(c.etc1) AS avg_etc1, SUM(c.score1 + c.score2 + c.score3 + c.score4) AS total_sum
                FROM abstract_score c
                WHERE c.etc1 != 0
                GROUP BY c.abstract_idx
            ) AS subquery ON a.idx = subquery.abstract_idx
            WHERE  (a.code = '$code1' OR a.code = '$code2')
            ORDER BY subquery.avg_etc1 DESC;");
        return $query->result_array();
    }

     //pp3 + pp4 + pp5 + pp8 + pp9 + pp10 excel download
     public function get_abstract_excel_all()
     {
         $query = $this->db->query("SELECT a.*, subquery.total_sum, subquery.etc1_sum, subquery.avg_etc1
             FROM abstracts a
             LEFT JOIN (
                 SELECT c.abstract_idx, SUM(c.etc1) AS etc1_sum, AVG(c.etc1) AS avg_etc1, SUM(c.score1 + c.score2 + c.score3 + c.score4) AS total_sum
                 FROM abstract_score c
                 WHERE c.etc1 != 0
                 GROUP BY c.abstract_idx
             ) AS subquery ON a.idx = subquery.abstract_idx
             WHERE  a.code = 'PP3' OR a.code = 'PP4' OR a.code = 'PP5' OR a.code = 'PP8' OR a.code = 'PP9' OR a.code = 'PP10'
             ORDER BY subquery.avg_etc1 DESC;");
         return $query->result_array();
     }

    //poster1, 2 통합 출력
    public function get_abstract_excel_poster_oral($where)
    {
        $category = $where["category"]; 
        $query = $this->db->query("SELECT a.*, subquery.total_sum, subquery.etc1_sum, subquery.avg_etc1
        FROM abstracts a
        LEFT JOIN (
            SELECT c.abstract_idx, SUM(c.etc1) AS etc1_sum, AVG(c.etc1) AS avg_etc1, SUM(c.score1 + c.score2 + c.score3 + c.score4) AS total_sum
            FROM abstract_score c
            WHERE c.etc1 != 0
            GROUP BY c.abstract_idx
        ) AS subquery ON a.idx = subquery.abstract_idx
        WHERE (a.category = '$category') AND (a.type = 1 OR a.type = 2)
        ORDER BY subquery.avg_etc1 DESC;");
        return $query->result_array();
    }

    //excel download / type, category 별
    public function get_abstract_excel_title($where)
    {
        $type = $where["type"]; 
        $category = $where["category"]; 
        $query = $this->db->query("SELECT r.idx, r.nick_name
        FROM abstract_reviewer r
        LEFT JOIN abstract_score s ON r.idx = s.reviewer_idx
        LEFT JOIN abstracts a ON s.abstract_idx = a.idx
        WHERE a.type = '$type' AND a.category = '$category'
        ");
        return $query->result_array();
    }

    //type, category 받아와서 심사위원 얻는 함수
    public function get_abstract_excel_reviewer($where)
    {
        $type = $where["type"]; 
        $category = $where["category"]; 
        $query = $this->db->query("SELECT r.idx, r.nick_name, r.org
        FROM abstract_reviewer r
        LEFT JOIN abstract_score s ON r.idx = s.reviewer_idx
        LEFT JOIN abstracts a ON s.abstract_idx = a.idx
        WHERE a.type = '$type' AND a.category = '$category' 
        GROUP BY r.idx
        ");
        return $query->result_array();
    }


    //reviewer 초록 평가 여부와 함께 가져오기
    public function get_reviewer_check()
    {
        $query = $this->db->query("SELECT 
        r.idx, 
        r.nick_name, 
        r.code, 
        r.org, 
        MAX(CASE WHEN a.ranking = 1 THEN a.submission_code ELSE NULL END) AS abstract1,
        MAX(CASE WHEN a.ranking = 2 THEN a.submission_code ELSE NULL END) AS abstract2,
        MAX(CASE WHEN a.ranking = 3 THEN a.submission_code ELSE NULL END) AS abstract3,
        MAX(CASE WHEN a.ranking = 4 THEN a.submission_code ELSE NULL END) AS abstract4,
        MAX(CASE WHEN a.ranking = 5 THEN a.submission_code ELSE NULL END) AS abstract5
    FROM 
        abstract_reviewer r
    LEFT JOIN 
        (
            SELECT 
                s.reviewer_idx,
                a.idx,
                a.submission_code,
                (SELECT COUNT(*) FROM abstract_score s2 WHERE s2.reviewer_idx = s.reviewer_idx AND s2.abstract_idx <= s.abstract_idx) AS ranking
            FROM 
                abstract_score s
            LEFT JOIN 
                abstracts a ON s.abstract_idx = a.idx
        ) a ON r.idx = a.reviewer_idx
    GROUP BY 
        r.idx, 
        r.nick_name, 
        r.code, 
        r.org;
    ");
        return $query->result_array();
    }

    public function get_reviewer_detail($where)
    {
        $query = $this->db->query("
            SELECT r.*, s.score1, s.score2, s.score3, s.score4, s.coi, s.time, s.etc1, a.submission_code
            FROM abstract_reviewer r
            LEFT JOIN abstract_score s ON r.idx = s.reviewer_idx
            LEFT JOIN abstracts a ON s.abstract_idx = a.idx
            WHERE r.idx =" . $where['idx']
        );
        return $query->result_array();
    }
   
}

?>
