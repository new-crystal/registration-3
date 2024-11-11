<?php
defined('BASEPATH') or exit('No direct script access allowed');
require __DIR__ . '/../../vendor/autoload.php';

class breaktime
{
    public $start;
    public $end;
}

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Seoul');
        $this->load->model('users');
        $this->load->model('entrance');
        $this->load->model('schedule');
        $this->load->model('table');
        $this->load->library("excel");
        $this->load->library("user_agent");
        ini_set('memory_limit', '-1');
        $this->load->library("qrcode_e");
        $this->load->library("time_spent");
    }

    public function index()
    {

        $this->load->view('admin/header');
        if (!isset($this->session->admin_data['logged_in']))
            $this->load->view('admin/login');
        else {
            // 
            $data['primary_menu'] = 'users';
            $data['users'] = $this->users->get_users_order_index();

            $this->load->view('admin/left_side.php', $data);
            $this->load->view('admin/users', $data);
        }
        $this->load->view('footer');
    }
    public function qr_user()
    {
        $this->load->view('admin/header');
        if (!isset($this->session->admin_data['logged_in']))
            $this->load->view('admin/login');
        else {
            // 
            $data['primary_menu'] = 'user_qr';
            $data['users'] = $this->users->get_qr_user();

            $this->load->view('admin/left_side.php', $data);
            $this->load->view('admin/qr_user', $data);
        }
        $this->load->view('footer');
    }


    public function abstracts()
    {

        $this->load->view('admin/header');
        if (!isset($this->session->admin_data['logged_in']))
            $this->load->view('admin/login');
        else {
            // 
            $data['primary_menu'] = 'abstracts';
            $data['abstracts'] = $this->users->get_abstracts_users();

            $this->load->view('admin/left_side.php', $data);
            $this->load->view('admin/abstracts', $data);
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
        redirect('admin');
    }

    public function log_out()
    {
        unset($_SESSION["admin_data"]);
        redirect('admin');
    }


    public function excel_download_abstract()
    {
        $object = new PHPExcel();
        $object->setActiveSheetIndex(0);

        $table_columns = array("이름", "이메일", "전화번호", "소속", "파일명", "파일경로", "파일이름", "등록시각");

        $column = 0;

        foreach ($table_columns as $field) {
            $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
            $column++;
        }

        $excel_row = 2;

        $list = $this->users->get_abstracts_users();

        foreach ($list as $row) {

            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row['name']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row['email']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row['phone']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row['affiliation']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row['org_name']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row['file_path']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row['file_name']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row['time']);

            $excel_row++;
        }

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="초록제출인원.xlsx"');

        header('Cache-Control: max-age=0');

        $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        $object_writer->save('php://output');
    }


    function deposit_check()
    {

        $regNo = $this->input->post('userId');

        foreach ($regNo as $value) {
            $info = array(
                'deposit' =>  '결제완료'
            );
            $where = array(
                'registration_no' => $value
            );
            $this->users->update_deposit_status($info, $where);
            $time = date("Y-m-d H:i:s");
            /* QR생성 */
            $info = array(
                'qr_generated' =>  'Y',
                'deposit_date' =>  $time
            );
            $where = array(
                'registration_no' => $value
            );

            $str = $value;
            $dir = "./assets/images/QR";
            $upload_dir = $dir . '/';
            $filename =  'qrcode_' . $value . '.png';

            // echo getcwd();
            // echo $upload_dir;
            // echo $filename;

            if (is_dir($dir) != true) {
                mkdir($dir, 0700);
            }

            //유효성체크 제거
            $qr_dataUri = $this->qrcode_e->create_QRcode($str, $upload_dir . $filename);
            $this->users->update_qr_status($info, $where);
            /* QR생성 끝 */

            /* PNG to JPG 변환 */
            $image = imagecreatefrompng($upload_dir . 'qrcode_' . $value . '.png');
            $bg = imagecreatetruecolor(imagesx($image), imagesy($image));
            imagefill($bg, 0, 0, imagecolorallocate($bg, 255, 255, 255));
            imagealphablending($bg, TRUE);
            imagecopy($bg, $image, 0, 0, 0, 0, imagesx($image), imagesy($image));
            imagedestroy($image);
            $quality = 100; // 0 = worst / smaller file, 100 = better / bigger file 
            imagejpeg($bg, $upload_dir . 'qrcode_' . $value . '.jpg', $quality);
            imagedestroy($bg);
        }

        $this->load->view('admin/d_success');
    }


    function all_deposit_check()
    {
        $regNo = $this->input->post('userId');

        foreach ($regNo as $value) {
            $info = array(
                'deposit' => '결제완료'
            );
            $where = array(
                'registration_no' => $value,
            );
            $this->users->update_deposit_status($info, $where);


            /* QR생성 */
            $info = array(
                'qr_generated' =>  'Y'
            );
            $where = array(
                'registration_no' => $value
            );

            $str = $value;
            $dir = "./assets/images/QR";
            $upload_dir = $dir . '/';
            $filename =  'qrcode_' . $value . '.png';

            // echo getcwd();
            // echo $upload_dir;
            // echo $filename;

            if (is_dir($dir) != true) {
                mkdir($dir, 0700);
            }

            //유효성체크 제거
            $qr_dataUri = $this->qrcode_e->create_QRcode($str, $upload_dir . $filename);
            $this->users->update_qr_status($info, $where);
            /* QR생성 끝 */

            /* PNG to JPG 변환 */
            $image = imagecreatefrompng($upload_dir . 'qrcode_' . $value . '.png');
            $bg = imagecreatetruecolor(imagesx($image), imagesy($image));
            imagefill($bg, 0, 0, imagecolorallocate($bg, 255, 255, 255));
            imagealphablending($bg, TRUE);
            imagecopy($bg, $image, 0, 0, 0, 0, imagesx($image), imagesy($image));
            imagedestroy($image);
            $quality = 100; // 0 = worst / smaller file, 100 = better / bigger file 
            imagejpeg($bg, $upload_dir . 'qrcode_' . $value . '.jpg', $quality);
            imagedestroy($bg);
        }
        $this->load->view('admin/d_success');
    }

    function non_deposit_check()
    {
        $regNo = $this->input->post('userId');

        foreach ($regNo as $value) {
            $info = array(
                'deposit' =>  '미결제'
            );
            $where = array(
                'registration_no' => $value,
                'deposit' => '결제완료'
            );
            $this->users->update_deposit_status($info, $where);
        }

        $this->load->view('admin/non_d_success');
    }


    function qr_generate()
    {
        $regNo = $_GET['n'];
        $info = array(
            'qr_generated' =>  'Y'
        );
        $where = array(
            'registration_no' => $regNo
        );

        $str = $regNo;
        $dir = "././assets/images/QR";
        $upload_dir = $dir . '/';
        $filename =  'qrcode_' . $regNo . '.jpg';

        if (is_dir($dir) != true) {
            mkdir($dir, 0700);
        }


        //유효성체크 제거
        //$rop = array( "options" => array("regexp"=>"/^(\d){9,10,11}$/"));
        //if(filter_var($userPhone, FILTER_VALIDATE_REGEXP, $rop)){
        $qr_dataUri = $this->qrcode_e->create_QRcode($str, $upload_dir . $filename);
        $this->users->update_qr_status($info, $where);
        $this->load->view('admin/qr_success');
        //}
    }


    function qr_generate_all()
    {
        $list = $this->users->get_users();
        $this->load->view('admin/loading');
        //        var_dump($list);

        $dir = "././assets/images/QR";
        $upload_dir = $dir . '/';
        foreach ($list as $row) {
            $regNo = $row['registration_no'];
            $info = array(
                'qr_generated' =>  'Y'
            );
            $where = array(
                'registration_no' => $regNo
            );


            $str = $regNo;
            $filename =  'qrcode_' . $regNo . '.png';

            if (is_dir($dir) != true) {
                mkdir($dir, 0700);
            }

            //유효성체크 제거
            //$rop = array( "options" => array("regexp"=>"/^(\d){9,10,11}$/"));
            //if(filter_var($userPhone, FILTER_VALIDATE_REGEXP, $rop)){
            $qr_dataUri = $this->qrcode_e->create_QRcode($str, $upload_dir . $filename);
            $this->users->update_qr_status($info, $where);
            //}
        }
        $this->load->view('admin/qr_success');
    }


    function qr_layout()
    {

        $this->load->view('admin/header');
        $regNo = $_GET['n'];
        $where = array(
            'registration_no' => $regNo
        );
        $data['users'] = $this->users->get_user($where);
        //                var_dump($data['users']);
        $this->load->view('admin/qr_layout', $data);
    }



    public function qr_layout_all()
    {
        $this->load->view('admin/header');
        $userType = $_GET['type'];

        if ($userType == '03') {
            $where = array(
                'nick_name' => '이원영'
            );
        } else {
            if ($userType == '01') {
                $userType = 'Participant';
            } else if ($userType == '02') {
                $userType = 'Committee';
            } else if ($userType == '04') {
                $userType = 'Panel';
            } else if ($userType == '05') {
                $userType = 'Speaker';
            } else if ($userType == '06') {
                $userType = 'Chairperson';
            } else if ($userType == '07') {
                $userType = 'Sponsor';
            }

            // if ($userType == '일반참가자') {
            //     // 데이터베이스 쿼리를 통해 '전문의', '전공의', '기타' 중 하나를 만족하는 데이터를 가져옵니다.
            //     $query = $this->db->query("
            //         SELECT *
            //         FROM users a
            //         WHERE a.type = '전문의' OR a.type = '전공의' OR a.type = '기타'
            //         ORDER BY nick_name
            //     ");

            //     // 결과 데이터를 배열로 가져옵니다.
            //     $result = $query->result_array();
            //     $this->load->view('admin/qr_layout_all', array('users' => $result));
            // } else {
            $where = array(
                'attendance_type' => $userType,
                'qr_generated' =>  'Y'
            );
            $data['users'] = $this->users->get_users_order('name_kor', $where);
            $this->load->view('admin/qr_layout_all', $data);
            // }
        }
    }

    public function qr_layout_post()
    {

        $this->load->view('admin/header');

        $userId = $this->input->post('userId');
        $data['users'] = $this->users->get_user_check($userId);

        //        var_dump($data['users']);

        $this->load->view('admin/qr_layout_all', $data);
    }

    public function user_detail()
    {

        $this->load->view('admin/header');

        if (!isset($this->session->admin_data['logged_in']))
            $this->load->view('admin/login');
        else {
            $this->load->helper('form');
            $this->load->library('form_validation');
            //
            $data['primary_menu'] = 'users';
            $userId = $_GET['n'];
            $where = array(
                'registration_no' => $userId
            );
            $data['item'] = $this->users->get_user($where);
            $data['item2'] = $this->entrance->access($where);

            //            var_dump($data['item2']);

            $this->load->view('admin/left_side.php', $data);
            $this->load->view('admin/user_detail', $data);
        }
        $this->load->view('footer');
    }



    public function user_detail_bak()
    {

        $this->load->view('admin/header');

        if (!isset($this->session->admin_data['logged_in']))
            $this->load->view('admin/login');
        else {
            $this->load->helper('form');
            $this->load->library('form_validation');
            //
            $data['primary_menu'] = 'users';
            $userId = $_GET['n'];
            $where = array(
                'registration_no' => $userId
            );
            $data['item'] = $this->users->get_user($where);
            $this->load->view('admin/left_side.php', $data);
            $this->load->view('admin/user_detail_bak', $data);
        }
        $this->load->view('footer');
    }

    public function add_user()
    {

        $this->load->view('admin/header');

        if (!isset($this->session->admin_data['logged_in'])) {
            $this->load->view('admin/login');
        } else {
            //
            $data['primary_menu'] = 'users';
            $this->load->view('admin/left_side.php', $data);
            $this->load->helper('form');
            $this->load->library('form_validation');

            $this->form_validation->set_rules('first_name', '이름', 'required');

            if ($this->form_validation->run() === FALSE) {
                $this->load->view('admin/add_user');
            } else {
                $attendance_type = $this->input->post('attendance_type');
                $member_type = $this->input->post('member_type');
                $member_status = $this->input->post('member_status');
                $license = $this->input->post('licence_number');
                $specialty_number = $this->input->post('specialty_number');
                $first_name = $this->input->post('first_name');
                $last_name = $this->input->post('last_name');
                $name_kor = $this->input->post('name_kor');
                $phone = $this->input->post('phone');
                $email = $this->input->post('email');
                $nation = $this->input->post('nation');
                $affiliation = $this->input->post('affiliation');
                $affiliation_kor = $this->input->post('affiliation_kor');
                $org_nametag = $this->input->post('org_nametag');
                $department = $this->input->post('department');
                $deposit = '미결제';
                $memo = $this->input->post('memo');
                $remark1 = $this->input->post('remark1');
                $remark2 = $this->input->post('remark2');
                $remark3 = $this->input->post('remark3');
                $remark4 = $this->input->post('remark4');
                
                $deposit_method = $this->input->post('deposit_method');
                $fee = $this->input->post('fee');
                $etc4 = $this->input->post('etc4');
                // $remark5 = $this->input->post('remark5');
                $special_request_food = $this->input->post('special_request_food');
                // $fee = 0;
                $onsite_reg = "1";

                $time = date("Y-m-d H:i:s");
                $uagent = $this->agent->agent_string();

                //            error_log(print_r($name, TRUE), 3, '/tmp/errors.log');
                $info = array(
                    'name_kor' => preg_replace("/\s+/", "", $name_kor),
                    'member_status' => preg_replace("/\s+/", "", $member_status),
                    'licence_number' => preg_replace("/\s+/", "", $license),
                    'affiliation' => trim($affiliation),
                    'affiliation_kor' => trim($affiliation_kor),
                    'department' => trim($department),
                    'org_nametag' => trim($org_nametag),
                    'phone' => preg_replace("/\s+/", "", $phone),
                    'email' => preg_replace("/\s+/", "", $email),
                    'member_type' => trim($member_type),
                    'fee' => $fee,
                    'time' => $time,
                    'uagent' => $uagent,
                    'deposit' => $deposit,
                    'memo' => $memo,
                    'attendance_type' => $attendance_type,
                    'specialty_number' => $specialty_number,
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'nation' => $nation,
                    'remark1' => $remark1,
                    'remark2' => $remark2,
                    'remark3' => $remark3,
                    'remark4' => $remark4,
                    'special_request_food' => $special_request_food,
                    'deposit_method' => $deposit_method,
                    'onsite_reg' => $onsite_reg,
                    'etc4' => $etc4
                );
                //                var_dump($info);
                $this->users->add_onsite_user($info);
            }
        }
        $this->load->view('footer');
    }

    public function memo()
    {

        if (!isset($this->session->admin_data['logged_in']))
            $this->load->view('admin/login');
        else {
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
                $this->load->view('admin/memo', $data);
            } else {

                $memo = $this->input->post('memo');

                if ($memo === "") {
                    $info = array("memo" => null); // 메모 필드를 null로 설정하여 삭제
                } else {
                    $info = array("memo" => $memo);
                }
                $this->users->add_memo($info, $where);
            }
        }
    }
    public function delete_user()
    {

        $this->load->view('admin/header');
        if (!isset($this->session->admin_data['logged_in']))
            $this->load->view('admin/login');
        else {
            $userId = $_GET['d'];
            $where = array(
                'registration_no' => $userId
            );
            $del_chk = $this->users->num_row($where);
            if ($del_chk == 1) {
                $this->users->del_user($where);
                $this->load->view('admin/user_delete_success');
            } else {
                $this->load->view('admin/user_delete_fail');
            }
            $this->load->view('footer');
        }
    }

    public function update_user()
    {

        $this->load->view('admin/header');

        if (!isset($this->session->admin_data['logged_in']))
            $this->load->view('admin/login');
        else {
            $this->load->helper('form');
            $this->load->library('form_validation');
            //
            $data['primary_menu'] = 'users';
            $userId = $_GET['n'];
            $where = array(
                'registration_no' => $userId
            );
            $this->load->view('admin/left_side.php', $data);

            $this->form_validation->set_rules('registration_no', '등록번호', 'required');

            if ($this->form_validation->run() === FALSE) {
                //                $this->load->view('admin');
            } else {
                $time = $this->input->post('time');
                $nation = $this->input->post('nation');
                $first_name = $this->input->post('first_name');
                $last_name = $this->input->post('last_name');
                $name_kor = $this->input->post('name_kor');
                $affiliation = $this->input->post('affiliation');
                // $affiliation_kor = $this->input->post('affiliation_kor');
                $org_nametag = $this->input->post('org_nametag');
                $department = $this->input->post('department');
                // $department_kor = $this->input->post('department_kor');
                $license = $this->input->post('licence_number');
                $specialty_number = $this->input->post('specialty_number');
                $phone = $this->input->post('phone');
                $email = $this->input->post('email');
                $fee = $this->input->post('fee');
                $member_type = $this->input->post('member_type');
                $deposit_method = $this->input->post('deposit_method');
                $etc4 = $this->input->post('etc4');
                $deposit = $this->input->post('deposit');
                $deposit_date = $this->input->post('deposit_date');
                $special_request_food = $this->input->post('special_request_food');
                $day1_luncheon_yn = $this->input->post('day1_luncheon_yn');
                $day1_satellite_yn = $this->input->post('day1_satellite_yn');
                $day2_breakfast_yn = $this->input->post('day2_breakfast_yn');
                $day2_luncheon_yn = $this->input->post('day2_luncheon_yn');
                $day2_satellite_yn = $this->input->post('day2_satellite_yn');
                $conference_info = $this->input->post('conference_info');
                $qr_print = $this->input->post('qr_print');
                $qr_chk_day_1 = $this->input->post('qr_chk_day_1');
                $qr_chk_day_2 = $this->input->post('qr_chk_day_2');
                $qr_chk_day_3 = $this->input->post('qr_chk_day_3');
                $member_status = $this->input->post('member_status');

                $memo = $this->input->post('memo');
                $attendance_type = $this->input->post('attendance_type');


                $etc1 = $this->input->post('etc1');
                $etc2 = $this->input->post('etc2');
                $etc3 = $this->input->post('etc3');
                $etc5 = $this->input->post('etc5');
                $remark1 = $this->input->post('remark1');
                $remark2 = $this->input->post('remark2');
                $remark3 = $this->input->post('remark3');
                $remark4 = $this->input->post('remark4');
                $remark5 = $this->input->post('remark5');

                if ($memo == "") {
                    $memo = null;
                }
                // if ($onsite_reg == "사전등록") {
                //     $onsite_reg = '0';
                // } else {
                //     $onsite_reg = '1';
                // }

                $updateTime = date("Y-m-d H:i:s");
                $info = array(
                    'name_kor' => preg_replace("/\s+/", "", $name_kor),
                    'licence_number' => preg_replace("/\s+/", "", $license),
                    'affiliation' => trim($affiliation),
                    // 'affiliation_kor' => trim($affiliation_kor),
                    'org_nametag' => $org_nametag,
                    'phone' => preg_replace("/\s+/", "", $phone),
                    'email' => preg_replace("/\s+/", "", $email),

                    // 'type' => trim($type),
                    'member_type' => trim($member_type),
                    'fee' => $fee,
                    'member_status' => $member_status,
                    // 'time' => $time,
                    // 'uagent' => $uagent,
                    'department' => $department,
                    // 'department_kor' => $department_kor,
                    'deposit' => $deposit,
                    'deposit_date' => $deposit_date,
                    'deposit_method' => $deposit_method,
                    'memo' => $memo,
                    'attendance_type' => $attendance_type,
                    'specialty_number' => $specialty_number,
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'nation' => $nation,
                    'day1_luncheon_yn' => $day1_luncheon_yn,
                    'day1_satellite_yn' => $day1_satellite_yn,
                    'day2_breakfast_yn' => $day2_breakfast_yn,
                    'day2_luncheon_yn' => $day2_luncheon_yn,
                    'day2_satellite_yn' => $day2_satellite_yn,
                    'updatetime' => $updateTime,
                    'time' => $time,
                    'conference_info' => $conference_info,
                    'special_request_food' => $special_request_food,
                    'etc4' => $etc4,
                    'remark1' => $remark1,
                    'remark2' => $remark2,
                    'remark3' => $remark3,
                    'remark4' => $remark4,
                    'remark5' => $remark5,
                    'qr_print' => $qr_print,
                    'qr_chk_day_1' => $qr_chk_day_1,
                    'qr_chk_day_2' => $qr_chk_day_2,
                    'qr_chk_day_3' => $qr_chk_day_3,
                    // 'time' => substr($time, 0, 10)
                );

                $this->users->update_user($info, $where);
                $data['item'] = $this->users->get_user($where);
                //                $this->load->view('admin/user_detail', $data);
                $this->load->view('admin/user_update_success', $data);
            }
        }
        $this->load->view('footer');
    }

    public function sicem_qr_excel_download()
    {

        function hoursandmins($time, $format = '%02d시간 %02d분')
        {
            if ($time < 1) {
                return;
            }
            $hours = floor($time / 60);
            $minutes = ($time % 60);
            return sprintf($format, $hours, $minutes);
        }


        $object = new PHPExcel();
        $object->setActiveSheetIndex(0);

        $table_columns = array("NO", "Registration No.", "등록유형", "등록일", "e-mail", "참석여부", "QR프린트여부", "방문일자", "국내/국외", "Country", "학회구분", "Full Name", "First Name", "Last Name", "이름", "Name Badge_affiliation",  "부서", "연락처", "참가유형", "참석자구분", "등록비","할인율","프로모션 코드","추천인", "면허번호", "전문의 번호", "1일차 오찬 여부", "1일차 Satellite 여부", "2일차 조식 여부", "2일차 오찬 여부", "2일차 Satellite 여부", "coference information", "remark1", "remark2", "remark3", "remark4", "remark5","Special meal request", "Memo", "Day 1 참석여부", "Day 1 입실 시간", "Day 1 퇴실 시간", "체류시간", "Break 제외 시간", "Day 2 참석여부", "Day 2 입실 시간", "Day 2 퇴실 시간", "체류시간", "Break 제외 시간");

        $column = 0;

        foreach ($table_columns as $field) {
            $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
            $object->getActiveSheet()->getStyle('B2')->getAlignment()->applyFromArray(
                array(
                    'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER
                )
            );
            $column++;
        }

        $excel_row = 2;

        $list = $this->entrance->history_all();

        $duration = $this->schedule->get_duration();
        $start = $duration['start'];
        $end = $duration['end'];

        $allbreaks = $this->schedule->get_breaks();
        $breaks = [];

        foreach ($allbreaks as $brk) {
            $break = new breaktime();
            $break->start = $brk['start'];
            $break->end = $brk['end'];
            $breaks[] = $break;
        }

        foreach ($list as $row) {
            if (empty($row['mintime'])) {
                $chk = '미참석';
            } else {
                $chk = '참석';
            }

            if ($row['d_format'] == '00시간 00분') {
                $row['d_format'] = '';
            }

            $enter1 = $row['mintime_day1'];
            $leave1 = $row['maxtime_day1'];
            $spent1 = $this->time_spent->time_spentcalc($enter1, $leave1, $start, $end, $breaks);

            $enter2 = $row['mintime_day2'];
            $leave2 = $row['maxtime_day2'];
            $spent2 = $this->time_spent->time_spentcalc($enter2, $leave2, $start, $end, $breaks);

            // $enter3 = $row['mintime_day3'];
            // $leave3 = $row['maxtime_day3'];
            // $spent3 = $this->time_spent->time_spentcalc($enter3, $leave3, $start, $end, $breaks);
            $date = "";
            $type1 = "";

            $contry = "";
            $onsite = "";

            $member_type = "";

            if ($row['nation'] == "Republic of Korea") {
                $contry = "국내";
            } else {
                $contry = "국외";
            }
            if ($row['onsite_reg'] == 0) {
                $onsite = "사전등록";
            } else {
                $onsite = "현장등록";
            }

            if($row['member_type'] == "Paritipants"){
                $member_type = "Participants";
            }else{
                $member_type = $row['member_type'];
            }

            //  $score = floor($spent / 60);
            //  $max_score = $this->schedule->get_maxscore();
            //  $score = min($max_score, $score);

            //            $excel->getActiveSheet()->getRowDimension ( 1 )->setRowHeight ( 35 );
            $object->getActiveSheet()->getStyle("F" . $excel_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
            $object->getActiveSheet()->getStyle("H" . $excel_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $excel_row - 1);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row['registration_no']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $onsite);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row['time']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row['email']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $chk);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row['qr_print']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row['mintime']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $contry);
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row['nation']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row['member_status']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row['first_name'] . " " . $row['last_name']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row['first_name']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row['last_name']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row['name_kor']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, $row['org_nametag']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, $row['department']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(17, $excel_row, $row['phone']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(18, $excel_row, $row['attendance_type']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(19, $excel_row, $member_type );
            $object->getActiveSheet()->setCellValueByColumnAndRow(20, $excel_row, $row['fee']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(21, $excel_row, $row['etc1']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(22, $excel_row, $row['etc2']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(23, $excel_row, $row['etc3']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(24, $excel_row, $row['licence_number']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(25, $excel_row, $row['specialty_number']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(26, $excel_row, $row['day1_luncheon_yn']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(27, $excel_row, $row['day1_satellite_yn']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(28, $excel_row, $row['day2_breakfast_yn']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(29, $excel_row, $row['day2_luncheon_yn']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(30, $excel_row, $row['day2_satellite_yn']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(31, $excel_row, $row['conference_info']);

            $object->getActiveSheet()->setCellValueByColumnAndRow(32, $excel_row, $row['remark1']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(33, $excel_row, $row['remark2']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(34, $excel_row, $row['remark3']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(35, $excel_row, $row['remark4']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(36, $excel_row, $row['remark5']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(37, $excel_row, $row['special_request_food']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(38, $excel_row, $row['memo']);

            $object->getActiveSheet()->setCellValueByColumnAndRow(39, $excel_row,  $row['qr_chk_day_1']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(40, $excel_row, date("H:i", strtotime($row['mintime_day1'])));  //DAY1입실
            $object->getActiveSheet()->setCellValueByColumnAndRow(41, $excel_row, date("H:i", strtotime($row['maxtime_day1'])));  //DAY1퇴실
            $object->getActiveSheet()->setCellValueByColumnAndRow(42, $excel_row, $row['d_format_day1']);                //DAY1체류시간
            $object->getActiveSheet()->setCellValueByColumnAndRow(43, $excel_row, hoursandmins($spent1));

            $object->getActiveSheet()->setCellValueByColumnAndRow(44, $excel_row,  $row['qr_chk_day_2']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(45, $excel_row, date("H:i", strtotime($row['mintime_day2'])));  //DAY2입실
            $object->getActiveSheet()->setCellValueByColumnAndRow(46, $excel_row, date("H:i", strtotime($row['maxtime_day2'])));  //DAY2퇴실
            $object->getActiveSheet()->setCellValueByColumnAndRow(47, $excel_row, $row['d_format_day2']);                          //DAY2체류시
            $object->getActiveSheet()->setCellValueByColumnAndRow(48, $excel_row, hoursandmins($spent2));

            // $object->getActiveSheet()->setCellValueByColumnAndRow(48, $excel_row,  $row['qr_chk_day_3']);
            // $object->getActiveSheet()->setCellValueByColumnAndRow(49, $excel_row, date("H:i", strtotime($row['mintime_day3'])));  //DAY3입실
            // $object->getActiveSheet()->setCellValueByColumnAndRow(50, $excel_row, date("H:i", strtotime($row['maxtime_day3'])));  //DAY3퇴실
            // $object->getActiveSheet()->setCellValueByColumnAndRow(51, $excel_row, $row['d_format_day3']);        //DAY3체류시간
            // $object->getActiveSheet()->setCellValueByColumnAndRow(52, $excel_row, hoursandmins($spent3));
            //$object->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, hoursandmins($spent));
            //$object->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, $score);
            // $object->getActiveSheet()->setCellValueByColumnAndRow(24, $excel_row, '');

            $excel_row++;
        }

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="QR_History.xlsx"');

        header('Cache-Control: max-age=0');

        $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        $object_writer->save('php://output');
    }

    public function qr_excel_download()
    {

        function hoursandmins($time, $format = '%02d시간 %02d분')
        {
            if ($time < 1) {
                return;
            }
            $hours = floor($time / 60);
            $minutes = ($time % 60);
            return sprintf($format, $hours, $minutes);
        }


        $object = new PHPExcel();
        $object->setActiveSheetIndex(0);

        $table_columns = array("NO.", "참석여부", "QR 프린트 여부", "국적구분", "등록일", "Reg_Num", "e-mail", "등록구분", "Country", "Full Name", "First Name", "Last Name", "이름", "Name Badge_affiliation", "Department", "연락처", "참가유형", "참석자구분", "등록비", "결제수단", "결제수단 (은행/계좌번호)", "결제상태", "결제일", "2일차 조식 여부", "2일차 오찬 여부", "3일차 조식 여부", "3일차 오찬 여부", "coference information1", "coference information2", "coference information3", "초록제출코드", "remark1", "remark2", "remark3", "remark4", "remark5","Special meal request", "Memo");

        $column = 0;

        foreach ($table_columns as $field) {
            $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
            $object->getActiveSheet()->getStyle('B2')->getAlignment()->applyFromArray(
                array(
                    'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER
                )
            );
            $column++;
        }

        $excel_row = 2;

        $list = $this->entrance->history_all();

        $duration = $this->schedule->get_duration();
        $start = $duration['start'];
        $end = $duration['end'];

        $allbreaks = $this->schedule->get_breaks();
        $breaks = [];

        foreach ($allbreaks as $brk) {
            $break = new breaktime();
            $break->start = $brk['start'];
            $break->end = $brk['end'];
            $breaks[] = $break;
        }

        foreach ($list as $row) {
            if (empty($row['mintime'])) {
                $chk = '미참석';
            } else {
                $chk = '참석';
            }

            if ($row['d_format'] == '00시간 00분') {
                $row['d_format'] = '';
            }

            $enter1 = $row['mintime_day1'];
            $leave1 = $row['maxtime_day1'];
            $spent1 = $this->time_spent->time_spentcalc($enter1, $leave1, $start, $end, $breaks);

            $enter2 = $row['mintime_day2'];
            $leave2 = $row['maxtime_day2'];
            $spent2 = $this->time_spent->time_spentcalc($enter2, $leave2, $start, $end, $breaks);

            // $enter3 = $row['mintime_day3'];
            // $leave3 = $row['maxtime_day3'];
            // $spent3 = $this->time_spent->time_spentcalc($enter3, $leave3, $start, $end, $breaks);

            $contry = "";
            $onsite = "";
            $member_type = "";

            if ($row['nation'] == "Republic of Korea") {
                $contry = "국내";
            } else {
                $contry = "국외";
            }
            if ($row['onsite_reg'] == 0) {
                $onsite = "사전등록";
            } else {
                $onsite = "현장등록";
            }

            if($row['member_type'] == "Paritipants"){
                $member_type = "Participants";
            }else{
                $member_type = $row['member_type'];
            }
            //  $score = floor($spent / 60);
            //  $max_score = $this->schedule->get_maxscore();
            //  $score = min($max_score, $score);


            //            $excel->getActiveSheet()->getRowDimension ( 1 )->setRowHeight ( 35 );
            $object->getActiveSheet()->getStyle("F" . $excel_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
            $object->getActiveSheet()->getStyle("H" . $excel_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $excel_row - 1);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $chk);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row['qr_print']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $contry);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row['time']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row['registration_no']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row['email']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $onsite);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row['nation']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row['first_name'] . ' ' . $row['last_name']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row['first_name']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row['last_name']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row['name_kor']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row['org_nametag']);;
            $object->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row['department']);

            $object->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, $row['phone']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, $row['attendance_type']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(17, $excel_row, $member_type);
            $object->getActiveSheet()->setCellValueByColumnAndRow(18, $excel_row, $row['fee']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(19, $excel_row, $row['deposit_method']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(20, $excel_row, $row['etc4']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(21, $excel_row, $row['deposit']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(22, $excel_row, $row['deposit_date']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(23, $excel_row, $row['day2_breakfast_yn']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(24, $excel_row, $row['day2_luncheon_yn']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(25, $excel_row, $row['day3_breakfast_yn']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(26, $excel_row, $row['day3_luncheon_yn']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(27, $excel_row, $row['conference_info']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(28, $excel_row, $row['etc2']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(29, $excel_row, $row['etc3']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(30, $excel_row, $row['etc5']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(31, $excel_row, $row['remark1']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(32, $excel_row, $row['remark2']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(33, $excel_row, $row['remark3']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(34, $excel_row, $row['remark4']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(35, $excel_row, $row['remark5']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(36, $excel_row, $row['special_request_food']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(37, $excel_row, $row['memo']);

            $excel_row++;
        }

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="registraion.xlsx"');

        header('Cache-Control: max-age=0');

        $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        $object_writer->save('php://output');
    }

    public function qr_excel_gala_download()
    {

        function hoursandmins($time, $format = '%02d시간 %02d분')
        {
            if ($time < 1) {
                return;
            }
            $hours = floor($time / 60);
            $minutes = ($time % 60);
            return sprintf($format, $hours, $minutes);
        }


        $object = new PHPExcel();
        $object->setActiveSheetIndex(0);

        $table_columns = array("NO.", "국적구분", "등록일", "Reg_Num", "e-mail", "등록구분(Early / Pre / On-site)", "Attendance date(Full / One)", "KES Membership Check-up", "Country", "Full Name", "First Name", "Last Name", "이름", "Affiliation", "Name Badge_affiliation", "소속", "부서", "평점신청여부", "면허번호", "전문의번호", "직책", "연락처", "참가유형
        (Participant, Satellite Attendee, Chairperson, Moderator, Speaker, Panel, Preceptor, Organizer, Oral Presenter, Poster Oral Presenter,  Press, Staff, Exhibitor)", "참석자구분1", "참석자구분1", "참석자구분2(Other 선택 시)", "참석날짜", "등록비", "Invitation Code Discount", "How did you get your invitation code?", "결제수단", "결제수단은행 (계좌번호)", "결제상태", "결제일", "Breakfast Symposium", "Satellite(10/26)", "Satellite(10/27)", "welcome reception", "Is this your first time attending SICEM?", "How many SICEMs have you attended before?", "Where did you get the information about the conference?", "구분택 1
        (명찰케이스)", "구분택 1(리본)", "First Time Attendee & KES Member", "Abstract book copy", "Special meal request", "Gala dinner", "Gala dinner
        테이블넘버", "Presidential Dinner", "Memo");

        $column = 0;

        foreach ($table_columns as $field) {
            $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
            $object->getActiveSheet()->getStyle('B2')->getAlignment()->applyFromArray(
                array(
                    'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER
                )
            );
            $column++;
        }

        $excel_row = 2;

        $list = $this->entrance->history_gala();

        $duration = $this->schedule->get_duration();
        $start = $duration['start'];
        $end = $duration['end'];

        $allbreaks = $this->schedule->get_breaks();
        $breaks = [];

        foreach ($allbreaks as $brk) {
            $break = new breaktime();
            $break->start = $brk['start'];
            $break->end = $brk['end'];
            $breaks[] = $break;
        }

        foreach ($list as $row) {
            if (empty($row['mintime'])) {
                $chk = '미참석';
            } else {
                $chk = '참석';
            }

            if ($row['d_format'] == '00시간 00분') {
                $row['d_format'] = '';
            }

            $enter1 = $row['mintime_day1'];
            $leave1 = $row['maxtime_day1'];
            $spent1 = $this->time_spent->time_spentcalc($enter1, $leave1, $start, $end, $breaks);

            $enter2 = $row['mintime_day2'];
            $leave2 = $row['maxtime_day2'];
            $spent2 = $this->time_spent->time_spentcalc($enter2, $leave2, $start, $end, $breaks);

            // $enter3 = $row['mintime_day3'];
            // $leave3 = $row['maxtime_day3'];
            // $spent3 = $this->time_spent->time_spentcalc($enter3, $leave3, $start, $end, $breaks);

            $contry = "";
            $remark3 = "";

            if ($row['nation'] == "Republic of Korea") {
                $contry = "국내";
            } else {
                $contry = "국외";
            }
            if ($row['kes_member_status'] != "Non-Member" && $row['first_time_yn'] == "Y") {
                $remark3 = "Y";
            } else {
                $remark3 = 'N';
            }

            //  $score = floor($spent / 60);
            //  $max_score = $this->schedule->get_maxscore();
            //  $score = min($max_score, $score);


            //            $excel->getActiveSheet()->getRowDimension ( 1 )->setRowHeight ( 35 );
            $object->getActiveSheet()->getStyle("F" . $excel_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
            $object->getActiveSheet()->getStyle("H" . $excel_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $excel_row - 1);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $contry);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row['time']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row['registration_no']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row['email']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row['onsite_reg']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $date);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row['kes_member_status']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row['nation']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row['first_name'] . ' ' . $row['last_name']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row['first_name']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row['last_name']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row['name_kor']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row['affiliation']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row['org_nametag']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, $row['affiliation_kor']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, $row['department']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(17, $excel_row, $row['is_score']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(18, $excel_row, $row['licence_number']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(19, $excel_row, $row['specialty_number']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(20, $excel_row, $row['etc3']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(21, $excel_row, $row['phone']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(22, $excel_row, $row['attendance_type']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(23, $excel_row,  $type1);
            $object->getActiveSheet()->setCellValueByColumnAndRow(24, $excel_row, $row['member_type']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(25, $excel_row, $row['member_other_type']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(26, $excel_row, $row['attendance_date']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(27, $excel_row, $row['fee']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(28, $excel_row, $row['etc1']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(29, $excel_row, $row['etc2']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(30, $excel_row, $row['deposit_method']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(31, $excel_row, $row['etc4']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(32, $excel_row, $row['deposit']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(33, $excel_row, $row['deposit_date']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(34, $excel_row, $row['day3_breakfast_yn']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(35, $excel_row, $row['day1_satellite_yn']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(36, $excel_row, $row['day2_satellite_yn']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(37, $excel_row, $row['welcome_reception_yn']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(38, $excel_row, $row['first_time_yn']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(39, $excel_row, $row['first_time']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(40, $excel_row, $row['conference_info']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(41, $excel_row, $row['remark1']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(42, $excel_row, $row['remark2']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(43, $excel_row, $remark3);
            $object->getActiveSheet()->setCellValueByColumnAndRow(44, $excel_row, $row['copy_yn']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(45, $excel_row, $row['special_request_food']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(46, $excel_row, $row['remark6']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(47, $excel_row, $row['remark7']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(48, $excel_row, $row['remark8']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(49, $excel_row, $row['memo']);

            $excel_row++;
        }

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="QR_History.xlsx"');

        header('Cache-Control: max-age=0');

        $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        $object_writer->save('php://output');
    }

    public function new_abstracts()
    {

        $this->load->view('admin/header');
        if (!isset($this->session->admin_data['logged_in']))
            $this->load->view('admin/login');
        else {
            // 
            $data['primary_menu'] = 'new_abstracts';
            $data['new_abstracts'] = $this->users->get_new_abstracts_users();

            $this->load->view('admin/left_side.php', $data);
            $this->load->view('admin/new_abstracts.php', $data);
        }
        $this->load->view('footer');
    }

    public function new_abstract_detail()
    {

        $this->load->view('admin/header');

        if (!isset($this->session->admin_data['logged_in']))
            $this->load->view('admin/login');
        else {
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['primary_menu'] = 'new_abstracts';
            $idx = $_GET['n'];
            $where = array(
                'IDX' => $idx
            );
            $data['base'] = $this->users->get_abstract_base($where);

            $fileIdx = explode(",", $data['base']['FILE_NO']);
            $file = [];
            foreach ($fileIdx as $idx) {
                $where = array(
                    'idx' => $idx
                );
                array_push($file, $this->users->get_file_upload($where));
            }
            $data['file'] = $file;

            $this->load->view('admin/left_side.php', $data);
            $this->load->view('admin/new_abstract_detail.php', $data);
        }
        $this->load->view('footer');

        return;
    }

    public function new_abstract_2docx()
    {

        $idx = $_GET['n'];
        $where = array(
            'IDX' => $idx
        );
        $data['base'] = $this->users->get_abstract_base($where);

        $fileIdx = explode(",", $data['base']['FILE_NO']);
        $file = [];
        foreach ($fileIdx as $idx) {
            $where = array(
                'idx' => $idx
            );
            array_push($file, $this->users->get_file_upload($where));
        }
        $data['file'] = $file;

        $this->load->view('admin/new_abstract_2docx.php', $data);
    }

    public function new_abstract_update()
    {

        $this->load->view('admin/header');

        if (!isset($this->session->admin_data['logged_in']))
            $this->load->view('admin/login');
        else {
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['primary_menu'] = 'new_abstracts';
            $userId = $_GET['n'];
            $where = array(
                'SERIAL' => $serial
            );
            $this->load->view('admin/left_side.php', $data);
        }
        $this->load->view('footer');
    }

    public function send_msm()
    {
        if (!isset($this->session->admin_data['logged_in']))
            $this->load->view('admin/login');
        else {
            $userId = $_GET['n'];
            $where = array(
                'registration_no' => $userId,
                'nation' => 'Republic of Korea'
            );
            $info = array(
                'QR_SMS_SEND_YN' =>  'Y'
            );
            $this->users->update_msm_status($info, $where);
            $data['users'] = $this->users->get_user($where);
            $this->load->view('admin/send_msm', $data);
        }
    }

    public function send_all_msm()
    {
        if (!isset($this->session->admin_data['logged_in']))
            $this->load->view('admin/login');
        else {
            $userId = $this->input->post('userId');
            // $data['users'] = array(); // 배열로 초기화
            foreach ($userId as $value) {
                $wheres = array(
                    'nation' => 'Republic of Korea',
                    'qr_generated' =>  'Y',
                    'registration_no' => $value
                );
                $data['users'] = $this->users->get_msm_user($wheres);
                // $data['users'] = array_merge($data['users'], $users);
                foreach ($data['users'] as $users) {
                    $where = array(
                        'registration_no' => $users['registration_no'],
                    );
                    $info = array(
                        'QR_SMS_SEND_YN' =>  'Y'
                    );
                    $this->users->update_msm_status($info, $where);
                }

                $this->load->view('admin/send_all_msm', $data);
            }
        }
    }

    public function send_all_mail()
    {
        if (!isset($this->session->admin_data['logged_in']))
            $this->load->view('admin/login');
        else {
            $userId = $this->input->post('userId');
            foreach ($userId as $value) {
                $wheres = array(
                    'registration_no' => $value,
                );
                $data['users'] = $this->users->get_msm_user($wheres);
                foreach ($data['users'] as $users) {
                    // var_dump($value);
                    $where = array(
                        'registration_no' => $users['registration_no'],
                        'qr_generated' =>  'Y'
                    );
                    $info = array(
                        'QR_MAIL_SEND_YN' =>  'Y'
                    );
                    $this->users->update_msm_status($info, $where);
                    $postdata = http_build_query(
                        array(
                            'CATEGORY_D_1'      => 'QrSystem',
                            'CATEGORY_D_2'      => 'iscp',
                            'CATEGORY_D_3'      => '231123',
                            'SEND_ADDRESS'      => 'info@imcvp.org',
                            'SEND_NAME'         => 'IMCVP 2024',
                            'RECV_ADDRESS'      =>  $users['email'],
                            'RECV_NAME'         =>  $users['first_name'] . ' ' . $users['last_name'],
                            'REPLY_ADDRESS'     => 'info@imcvp.org',
                            'REPLY_NAME'        => 'IMCVP 2024',
                            'EMAIL_SUBJECT'     => '[IMCVP 2024] Registration QR and On-Site Attendance Details(Nov. 23rd – 25th, Conrad Seoul, Republic of Korea)',
                            'EMAIL_ALTBODY'     => 'IMCVP 2024',
                            'EMAIL_TEMPLETE_ID' => 'Qr_iscp_231123',
                            'EMBED_IMAGE_GRID'  => 'null',
                            'INSERT_TEXT_GRID'    => "{" .
                                '"$text1" : ' . '"' .  $users['name_kor'] . '",' .
                                '"$text2" : ' . '"' . $users['affiliation'] . '",' .
                                '"$text3" : ' . '"' .  $users['registration_no'] . '",' .
                                '"$text4" : ' . '"' . base64_encode(file_get_contents(getcwd() . '/assets/images/QR/qrcode_' .  $users['registration_no'] . '.jpg')) . '"' .
                                "}"
                        )
                    );

                    $opts = array(
                        'http' =>
                        array(
                            'method' => 'POST',
                            'header' => 'Content-type: application/x-www-form-urlencoded',
                            'content' => $postdata
                        )
                    );
                    $context = stream_context_create($opts);
                    $result = file_get_contents('http://www.into-webinar.com/MailSenderApi', false, $context);
                }
            }
            $this->load->view('admin/send_all_mail', $data);
        }
    }


    public function participant()
    {
        $this->load->view('admin/header');
        if (!isset($this->session->admin_data['logged_in']))
            $this->load->view('admin/login');
        else {
            $data['primary_menu'] = 'participant';


            $wheres = array(
                'qr_chk' => 'Y'
            );
            /**모든 유저 */
            $data['users'] = $this->users->get_users();

            /**qr access 총 유저 */
            $data['item'] = $this->users->get_qr_print_user($wheres);

           /**day1 ~ day3 access 각각 유저 */
           $data['day1_speaker_kor'] = $this->table->get_day1_speaker_kor();
           $data['day1_speaker_eng'] = $this->table->get_day1_speaker_eng();

           $data['day1_chairperson_kor'] = $this->table->get_day1_chairperson_kor();
           $data['day1_chairperson_eng'] = $this->table->get_day1_chairperson_eng();

           $data['day1_penel_kor'] = $this->table->get_day1_penel_kor();
           $data['day1_penel_eng'] = $this->table->get_day1_penel_eng();

           $data['day1_committee_kor'] = $this->table->get_day1_committee_kor();
           $data['day1_committee_eng'] = $this->table->get_day1_committee_eng();

           $data['day1_participants_kor'] = $this->table->get_day1_participants_kor();
           $data['day1_participants_eng'] = $this->table->get_day1_participants_eng();

           $data['day1_sponsor_kor'] = $this->table->get_day1_sponsor_kor();
           $data['day1_sponsor_eng'] = $this->table->get_day1_sponsor_eng();

           $data['day1_other_kor'] = $this->table->get_day1_other_kor();
           $data['day1_other_eng'] = $this->table->get_day1_other_eng();

           $data['day2_speaker_kor'] = $this->table->get_day2_speaker_kor();
           $data['day2_speaker_eng'] = $this->table->get_day2_speaker_eng();

           $data['day2_chairperson_kor'] = $this->table->get_day2_chairperson_kor();
           $data['day2_chairperson_eng'] = $this->table->get_day2_chairperson_eng();

           $data['day2_penel_kor'] = $this->table->get_day2_penel_kor();
           $data['day2_penel_eng'] = $this->table->get_day2_penel_eng();

           $data['day2_committee_kor'] = $this->table->get_day2_committee_kor();
           $data['day2_committee_eng'] = $this->table->get_day2_committee_eng();

           $data['day2_participants_kor'] = $this->table->get_day2_participants_kor();
           $data['day2_participants_eng'] = $this->table->get_day2_participants_eng();

           $data['day2_sponsor_kor'] = $this->table->get_day2_sponsor_kor();
           $data['day2_sponsor_eng'] = $this->table->get_day2_sponsor_eng();

           $data['day2_other_kor'] = $this->table->get_day2_other_kor();
           $data['day2_other_eng'] = $this->table->get_day2_other_eng();

           $data['day1_num'] = $this->table->get_day1();
           $data['day2_num'] = $this->table->get_day2();

           $data['day1_on_speaker_kor'] = $this->table->get_on_day1_speaker_kor();
           $data['day1_on_speaker_eng'] = $this->table->get_on_day1_speaker_eng();

           $data['day1_on_chairperson_kor'] = $this->table->get_on_day1_chairperson_kor();
           $data['day1_on_chairperson_eng'] = $this->table->get_on_day1_chairperson_eng();

           $data['day1_on_penel_kor'] = $this->table->get_on_day1_penel_kor();
           $data['day1_on_penel_eng'] = $this->table->get_on_day1_penel_eng();

           $data['day1_on_committee_kor'] = $this->table->get_on_day1_committee_kor();
           $data['day1_on_committee_eng'] = $this->table->get_on_day1_committee_eng();

           $data['day1_on_participants_kor'] = $this->table->get_on_day1_participants_kor();
           $data['day1_on_participants_eng'] = $this->table->get_on_day1_participants_eng();

           $data['day1_on_sponsor_kor'] = $this->table->get_on_day1_sponsor_kor();
           $data['day1_on_sponsor_eng'] = $this->table->get_on_day1_sponsor_eng();

           $data['day1_on_other_kor'] = $this->table->get_on_day1_other_kor();
           $data['day1_on_other_eng'] = $this->table->get_on_day1_other_eng();

           $data['day2_on_speaker_kor'] = $this->table->get_on_day2_speaker_kor();
           $data['day2_on_speaker_eng'] = $this->table->get_on_day2_speaker_eng();

           $data['day2_on_chairperson_kor'] = $this->table->get_on_day2_chairperson_kor();
           $data['day2_on_chairperson_eng'] = $this->table->get_on_day2_chairperson_eng();

           $data['day2_on_penel_kor'] = $this->table->get_on_day2_penel_kor();
           $data['day2_on_penel_eng'] = $this->table->get_on_day2_penel_eng();

           $data['day2_on_committee_kor'] = $this->table->get_on_day2_committee_kor();
           $data['day2_on_committee_eng'] = $this->table->get_on_day2_committee_eng();

           $data['day2_on_participants_kor'] = $this->table->get_on_day2_participants_kor();
           $data['day2_on_participants_eng'] = $this->table->get_on_day2_participants_eng();

           $data['day2_on_sponsor_kor'] = $this->table->get_on_day2_sponsor_kor();
           $data['day2_on_sponsor_eng'] = $this->table->get_on_day2_sponsor_eng();

           $data['day2_on_other_kor'] = $this->table->get_on_day2_other_kor();
           $data['day2_on_other_eng'] = $this->table->get_on_day2_other_eng();

           $data['day1_on_num'] = $this->table->get_on_day1();
           $data['day2_on_num'] = $this->table->get_on_day2();
           
           $data['chairperson_count'] = $this->table->get_on_chairperson();
           $data['committee_count'] = $this->table->get_on_committee();
           $data['speaker_count'] = $this->table->get_on_speaker();
           $data['panel_count'] = $this->table->get_on_panel();
           $data['participant_count'] = $this->table->get_on_participant();
           $data['sponsor_count'] = $this->table->get_on_sponsor();
           $data['others_count'] = $this->table->get_on_others();
           
           $data['chairperson_on_count'] = $this->table->get_on_chairperson_1();
           $data['committee_on_count'] = $this->table->get_on_committee_1();
           $data['speaker_on_count'] = $this->table->get_on_speaker_1();
           $data['panel_on_count'] = $this->table->get_on_panel_1();
           $data['participant_on_count'] = $this->table->get_on_participant_1();
           $data['sponsor_on_count'] = $this->table->get_on_sponsor_1();
           $data['others_on_count'] = $this->table->get_on_others_1();

            $this->load->view('admin/left_side.php', $data);
            $this->load->view('admin/participant.php', $data);
        }
        $this->load->view('footer');
    }

    public function receipt()
    {
        if (!isset($this->session->admin_data['logged_in']))
            $this->load->view('admin/login');
        else {
            $userId = $_GET['n'];
            $where = array(
                'registration_no' => $userId
            );
            $data['users'] = $this->users->get_user($where);
            $this->load->view('admin/receipt', $data);
        }
    }
    public function email()
    {
        if (!isset($this->session->admin_data['logged_in']))
            $this->load->view('admin/login');
        else {
            $userId = $_GET['n'];
            $where = array(
                'registration_no' => $userId
            );
            $info = array(
                'MAIL_SEND_YN' =>  'Y'
            );
            $this->users->update_msm_status($info, $where);
            $data['users'] = $this->users->get_user($where);
            $this->load->view('admin/mail', $data);
        }
    }
    public function qr_email()
    {
        if (!isset($this->session->admin_data['logged_in']))
            $this->load->view('admin/login');
        else {
            $userId = $_GET['n'];
            $where = array(
                'registration_no' => $userId,
            );
            $info = array(
                'QR_MAIL_SEND_YN' =>  'Y'
            );
            $data['users'] = $this->users->get_user($where);
            $this->users->update_msm_status($info, $where);
            $this->load->view('admin/qr_mail', $data);
        }
    }

    public function access()
    {

        $this->load->view('admin/header');
        if (!isset($this->session->admin_data['logged_in'])) {
            $this->load->view('admin/login');
        } else {
            // 
            $data['primary_menu'] = 'qrcode';
            $this->load->view('admin/left_side.php', $data);
            $qrcode = isset($_GET['qrcode']) ? $_GET['qrcode'] : null;

            if ($qrcode) {
                $time = date("Y-m-d H:i:s");
                // echo $qr_time;
                // $info = array(
                //     'registration_no' => $qrcode,
                //     'time' => $time
                // );
                $where = array(
                    'registration_no' => $qrcode
                );
                $infoqr = array(
                    'qr_chk' =>  'Y'
                );
                $this->users->update_qr_status($infoqr, $where);


                //입장시간, 퇴장시간 기록
                // $this->entrance->record($info);

                $data['notice'] = $this->schedule->get_notice();
                $data['user'] = $this->users->get_user($where);

                $this->load->view('admin/access', $data);
            } else {
                $data['notice'] = $this->schedule->get_notice();
                $this->load->view('admin/access', $data);
            }
            // $this->load->view('footer');
        }
    }
    public function loading()
    {

        $this->load->view('admin/loading');
    }

    public function sendMail()
    {
        $userId = $_GET['n'];
        $where = array(
            'registration_no' => $userId
        );
        $info = array(
            'QR_MAIL_SEND_YN' =>  'Y'
        );
        $this->users->update_msm_status($info, $where);
        $data['users'] = $this->users->get_user($where);

        $postdata = http_build_query(
            array(
                'CATEGORY_D_1'      => 'QrSystem',
                'CATEGORY_D_2'      => 'IMCVP',
                'CATEGORY_D_3'      => '231123',
                'SEND_ADDRESS'      => 'info@imcvp.org',
                'SEND_NAME'         => 'IMCVP 2024',
                'RECV_ADDRESS'      => $data['users']['email'],
                'RECV_NAME'         => $data['users']['first_name'] . ' ' . $data['users']['last_name'],
                'REPLY_ADDRESS'     => 'info@imcvp.org',
                'REPLY_NAME'        => 'IMCVP 2024',
                'EMAIL_SUBJECT'     => 'IMCVP 2024',
                'EMAIL_ALTBODY'     => 'IMCVP 2024',
                'EMAIL_SUBJECT'     => '[IMCVP 2024] Registration QR and On-Site Attendance Details(Nov. 23rd – 25th, Conrad Seoul, Republic of Korea)',
                'EMAIL_TEMPLETE_ID' => 'Qr_iscp_231123',
                'EMBED_IMAGE_GRID'  => 'null',
                'INSERT_TEXT_GRID'    => "{" .
                    '"$text1" : ' . '"' . $data['users']['name_kor'] . '",' .
                    '"$text2" : ' . '"' . $data['users']['affiliation'] . '",' .
                    '"$text3" : ' . '"' . $data['users']['registration_no'] . '",' .
                    '"$text4" : ' . '"' . base64_encode(file_get_contents(getcwd() . '/assets/images/QR/qrcode_' . $data['users']['registration_no'] . '.jpg')) . '"' .
                    "}"
            )
        );

        $opts = array(
            'http' =>
            array(
                'method' => 'POST',
                'header' => 'Content-type: application/x-www-form-urlencoded',
                'content' => $postdata
            )
        );
        $context = stream_context_create($opts);
        $result = file_get_contents('http://www.into-webinar.com/MailSenderApi', false, $context);
    }
    public function sendEMail()
    {
        $userId = $_GET['n'];
        $email = $_GET['m'];
        $where = array(
            'registration_no' => $userId
        );
        $info = array(
            'QR_MAIL_SEND_YN' =>  'Y'
        );
        $this->users->update_msm_status($info, $where);
        $data['users'] = $this->users->get_user($where);

        $postdata = http_build_query(
            array(
                'CATEGORY_D_1'      => 'QrSystem',
                'CATEGORY_D_2'      => 'IMCVP',
                'CATEGORY_D_3'      => '231123',
                'SEND_ADDRESS'      => 'info@imcvp.org',
                'SEND_NAME'         => 'IMCVP 2024',
                'RECV_ADDRESS'      => $email,
                'RECV_NAME'         => $data['users']['first_name'] . ' ' . $data['users']['last_name'],
                'REPLY_ADDRESS'     => 'info@imcvp.org',
                'REPLY_NAME'        => 'IMCVP 2024',
                'EMAIL_SUBJECT'     => '[IMCVP 2024] Registration QR and On-Site Attendance Details(Nov. 23rd – 25th, Conrad Seoul, Republic of Korea)',
                'EMAIL_ALTBODY'     => 'IMCVP 2024',
                'EMAIL_TEMPLETE_ID' => 'Qr_iscp_231123',
                'EMBED_IMAGE_GRID'  => 'null',
                'INSERT_TEXT_GRID'    => "{" .
                    '"$text1" : ' . '"' . $data['users']['name_kor'] . '",' .
                    '"$text2" : ' . '"' . $data['users']['affiliation'] . '",' .
                    '"$text3" : ' . '"' . $data['users']['registration_no'] . '",' .
                    '"$text4" : ' . '"' . base64_encode(file_get_contents(getcwd() . '/assets/images/QR/qrcode_' . $data['users']['registration_no'] . '.jpg')) . '"' .
                    "}"
            )
        );

        $opts = array(
            'http' =>
            array(
                'method' => 'POST',
                'header' => 'Content-type: application/x-www-form-urlencoded',
                'content' => $postdata
            )
        );
        $context = stream_context_create($opts);
        $result = file_get_contents('http://www.into-webinar.com/MailSenderApi', false, $context);
    }

    public function notice()
    {
        $this->load->view('admin/header');
        if (!isset($this->session->admin_data['logged_in']))
            $this->load->view('admin/login');
        else {
            // 
            $data['primary_menu'] = 'notice';
            $data['notice'] = $this->schedule->get_notice();
            $this->load->view('admin/left_side.php', $data);
            $this->load->view('admin/notice', $data);
        }
        $this->load->view('footer');
    }

    public function add_notice()
    {

        if (!isset($this->session->admin_data['logged_in']))
            $this->load->view('admin/login');
        else {
            $this->load->helper('form');
            $this->load->library('form_validation');
            $this->form_validation->set_rules('notice', 'notice', 'required');

            if ($this->form_validation->run() === FALSE) {
                $this->load->view('admin/add_notice');
            } else {

                $notice = $this->input->post('notice');

                if ($notice === "") {
                    $info = array("notice" => null);
                } else {
                    $info = array(
                        "notice" => $notice,
                        "is_deleted" => 'Y'
                    );
                }
                $this->schedule->add_notice($info);
            }
        }
    }
    public function edit_notice()
    {

        if (!isset($this->session->admin_data['logged_in']))
            $this->load->view('admin/login');
        else {
            $this->load->helper('form');
            $this->load->library('form_validation');


            $data['notice'] = $this->schedule->get_notice();
            $this->form_validation->set_rules('notice', 'notice', 'required');

            if ($this->form_validation->run() === FALSE) {
                $this->load->view('admin/notice', $data);
            } else {

                $notice = $this->input->post('notice');
                $userId =  $this->input->post('idx');
                $where = array(
                    'idx' => $userId
                );

                if ($notice === "") {
                    $info = array("notice" => null); // 메모 필드를 null로 설정하여 삭제
                } else {
                    $info = array("notice" => $notice);
                }
                $this->schedule->edit_notice($info, $where);
            }
        }
    }
    public function del_notice()
    {

        if (!isset($this->session->admin_data['logged_in']))
            $this->load->view('admin/login');
        else {

            $this->load->view('admin/notice', $data);

            $userId =  $this->input->post('idx');
            $where = array(
                'idx' => $userId
            );

            $info = array("is_deleted" => 'N');

            $this->schedule->edit_notice($info, $where);
        }
    }
    public function gala_user()
    {
        $this->load->view('admin/header');
        if (!isset($this->session->admin_data['logged_in']))
            $this->load->view('admin/login');
        else {
            // 
            $data['primary_menu'] = 'gala_user';
            $data['users'] = $this->users->get_gala_users();

            $this->load->view('admin/left_side.php', $data);
            $this->load->view('admin/gala_user', $data);
        }
        $this->load->view('footer');
    }
    public function gala_non_user()
    {
        $this->load->view('admin/header');
        if (!isset($this->session->admin_data['logged_in']))
            $this->load->view('admin/login');
        else {
            // 
            $data['primary_menu'] = 'gala_non_user';
            $data['users'] = $this->users->get_gala_users();

            $this->load->view('admin/left_side.php', $data);
            $this->load->view('admin/gala_non_user', $data);
        }
        $this->load->view('footer');
    }
    public function qr_blank_user()
    {
        $this->load->view('admin/header');
        if (!isset($this->session->admin_data['logged_in']))
            $this->load->view('admin/login');
        else {
            // 
            $data['primary_menu'] = 'qr_blank_user';

            $this->load->view('admin/left_side.php', $data);
            $this->load->view('admin/qr_blank_user');
        }
        $this->load->view('footer');
    }

    public function faculty()
    {
        $this->load->view('admin/header');
        if (!isset($this->session->admin_data['logged_in']))
            $this->load->view('admin/login');
        else {
            // 
            $data['primary_menu'] = 'faculty';
            $data['users'] = $this->users->get_faculty();

            $this->load->view('admin/left_side.php', $data);
            $this->load->view('admin/faculty', $data);
        }
        $this->load->view('footer');
    }

    public function time_day1()
    {
        $this->load->view('admin/header');
        if (!isset($this->session->admin_data['logged_in']))
            $this->load->view('admin/login');
        else {
            // 
            $data['primary_menu'] = 'day1';
            $data['users'] = $this->users->get_time_user();

            $this->load->view('admin/left_side.php', $data);
            $this->load->view('admin/qr_user_day1', $data);
        }
        $this->load->view('footer');
    }

    public function testKaKao()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/kakao');
        $this->load->view('footer');
    }

}
