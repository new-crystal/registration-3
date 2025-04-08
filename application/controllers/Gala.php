<?php
defined('BASEPATH') or exit('No direct script access allowed');
require __DIR__ . '/../../vendor/autoload.php';

class breaktime
{
    public $start;
    public $end;
}

class Gala extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Seoul');
        $this->load->model('users');
        $this->load->model('galaEvent');
        $this->load->model('entrance');
        $this->load->model('schedule');
        $this->load->model('table');
        $this->load->library("excel");
        $this->load->library("user_agent");
        ini_set('memory_limit', '-1');
        $this->load->library("qrcode_e");
        $this->load->library("time_spent");
    }

    //전체 참석자 관리 페이지
    public function index()
    {

        $this->load->view('admin/header');
        if (!isset($this->session->admin_data['logged_in']))
            $this->load->view('admin/login');
        else {
            $data['primary_menu'] = 'all_user';
            $data['users'] = $this->galaEvent->get_users();

            $this->load->view('gala/left_side.php', $data);
            $this->load->view('gala/users', $data);
        }
            $this->load->view('footer');
    }

    public function login()
    {
        $user_id = $this->input->post("user_id");
        $user_pass = $this->input->post("user_pass");

        if ($user_id == ADMIN_ID && $user_pass == ADMIN_PASS) {
            $this->session->set_userdata('admin_data', array(
                'logged_in' => true
            ));
        }
        redirect('gala');
    }


    //갈라디너 관리 페이지
    public function gala_users()
    {
        $this->load->view('admin/header');
        $data['primary_menu'] = 'gala_users';
        $data['users'] = $this->galaEvent->get_gala_users();

        $where = array(
            'gala_chk' => 'Y'
        );
        $data['chk_users'] = $this->galaEvent->get_gala_user($where);

        $this->load->view('gala/left_side.php', $data);
        $this->load->view('gala/gala', $data);
        $this->load->view('footer');
    }

    //갈라디너 미참석 관리 페이지
    public function gala_non_users()
    {
        $this->load->view('admin/header');
        $data['primary_menu'] = 'gala_non_users';

        $where = array(
            'gala_chk' => 'Y',
        );

        $where_r = array(
            'gala_chk' => 'Y',
             'gala_table' => "R"
        );

        $where_c = array(
            'gala_chk' => 'Y',
             'gala_table' => "C"
        );

        $data['users'] = $this->galaEvent->get_gala_user($where);
        $data['r_users'] = $this->galaEvent->get_gala_user($where_r);
        $data['c_users'] = $this->galaEvent->get_gala_user($where_c);

        $this->load->view('gala/left_side.php', $data);
        $this->load->view('gala/none_gala', $data);
        $this->load->view('footer');
    }

    //갈라디너 참석자 현황 페이지
    public function gala_participants()
    {
        $this->load->view('admin/header');
        $data['primary_menu'] = 'gala_participants';
        $data['users'] = $this->galaEvent->get_gala_users();

        $this->load->view('gala/left_side.php', $data);
        $this->load->view('gala/participant', $data);
        $this->load->view('footer');
    }

    //갈라디너 관리- R table 페이지
    public function gala_r_users()
    {
        $this->load->view('admin/header');
        $data['primary_menu'] = 'gala_r_users';

        $where = array(
            'gala_chk' => "Y",
            'gala_table' => "R"
        );

        $data['users'] =$this->galaEvent->get_gala_user($where); 
        $data['chk_users'] = $this->galaEvent->get_gala_user($where);

        $this->load->view('gala/left_side.php', $data);
        $this->load->view('gala/r_gala', $data);
        $this->load->view('footer');
    }

      //갈라디너 관리- R table 페이지
      public function gala_c_users()
      {
          $this->load->view('admin/header');
          $data['primary_menu'] = 'gala_c_users';
  
          $where = array(
              'gala_chk' => "Y",
              'gala_table' => "C"
          );

          $data['users'] =$this->galaEvent->get_gala_user($where); 
          $data['chk_users'] = $this->galaEvent->get_gala_user($where);

          $this->load->view('gala/left_side.php', $data);
          $this->load->view('gala/c_gala', $data);
          $this->load->view('footer');
      }
    

    //전체 참석자 관리 페이지
    //갈라참석 여부 
    public function change_gala()
    {
        $gala = $this->input->post('gala');
        $regNum = $this->input->post('regNum');

        //if -> reg_num이 있으면 update 없으면 insert
        $reg = array(
            'reg_num' => $regNum
        );

        $searched = $this->galaEvent->get_gala_user($reg);
        // print_r($searched);
        if(count($searched) !== 0){
            $info = array(
                'gala_chk' => $gala,
                'update_time' => date('Y-m-d H:i:s')
            );
            $where = array(
                'reg_num' => $regNum
            );
            $this->galaEvent->update_gala($info, $where);
        }else{
            $info = array(
                'reg_num' => $regNum,
                'gala_chk' => $gala,
                'register_date' => date('Y-m-d H:i:s')
            );

            $this->galaEvent->add_gala_user($info);
        }

        echo json_encode(array('code' => 200, 'message' => '성공'));
        exit;
    }

    
    //갈라디너 관리 페이지
    //테이블 
    public function change_gala_table()
    {
        $gala = $this->input->post('gala_table');
        $regNum = $this->input->post('idx');

        $info = array(
            'gala_table' => $gala,
            'update_time' => date('Y-m-d H:i:s')
        );
        $where = array(
            'reg_num' => $regNum
        );
        $this->galaEvent->update_gala($info, $where);
        echo json_encode(array('code' => 200, 'message' => '성공'));
        exit;
    }

    
    //갈라디너 관리 페이지
    //현장 관리
    public function change_gala_status()
    {
        $gala = $this->input->post('gala_status');
        $regNum = $this->input->post('idx');

        $info = array(
            'gala_status' => $gala,
            'update_time' => date('Y-m-d H:i:s')
        );
        $where = array(
            'reg_num' => $regNum
        );
        $this->galaEvent->update_gala($info, $where);
        echo json_encode(array('code' => 200, 'message' => '성공'));
        exit;
    }

	public function memo()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		// 
		$data['primary_menu'] = 'user_qr';
		$userId = $_GET['n'];
		$where = array(
			'registration_no' => $userId
		);
		$data['item'] = $this->users->get_user($where);

		$this->form_validation->set_rules('memo', 'Memo', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('gala/memo', $data);
		} else {

			$memo = $this->input->post('memo');

			if ($memo === "") {
				$info = array("gala_memo" => null); // 메모 필드를 null로 설정하여 삭제
			} else {
				$info = array("gala_memo" => $memo);
			}
			$this->users->add_memo($info, $where);
		}
	}

    public function excel_download_gala()
    {

        $table = $this->input->get('table');
        $list = [];

        if ($table === 'c') {
            $where = array(
                'gala_table' => 'C'
            );
        } else if ($table === 'r') {
            $where = array(
                'gala_table' => 'R'
            );
        }
        $list = $this->galaEvent->get_gala_user($where); 
        
        $object = new PHPExcel();
        $object->setActiveSheetIndex(0);

        $table_columns = array("No.", "등록번호", "참석자 유형", "테이블", "이름", "한국 이름", "소속", "현장관리", "태깅유무", "태깅시간", "연락처", "메모");

        $column = 0;

        foreach ($table_columns as $field) {
            $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
            $column++;
        }

        $excel_row = 2;

        foreach ($list as $row) {

            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $excel_row - 1);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row['registration_no']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row['attendance_type']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row['gala_table']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row['last_name'] . ' ' . $row['first_name']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row['name_kor']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row['affiliation']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row['gala_status']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row['gala_chk']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row['gala_time']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row['phone']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row['gala_memo']);

            $excel_row++;
        }

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="갈라등록인원.xlsx"');

        header('Cache-Control: max-age=0');

        $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        $object_writer->save('php://output');
    }

}
