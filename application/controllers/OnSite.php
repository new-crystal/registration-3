<?php
defined('BASEPATH') or exit('No direct script access allowed');
require __DIR__ . '/../../vendor/autoload.php';

class OnSite extends CI_Controller
{
    private $sheets;
    private $data;

    public function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Seoul');
        $this->load->model('users');
    }

    public function index()
    {

        $this->load->view('header');
        $this->load->view('on-site', $this->data);
        $this->load->view('footer');
        $type = isset($_GET['type1']) ? $_GET['type1'] : null;
        $type2 = isset($_GET['type2']) ? $_GET['type2'] : null;
        $type4 = isset($_GET['type4']) ? $_GET['type4'] : null;
        $type5 = isset($_GET['type5']) ? $_GET['type5'] : null;
        $name = isset($_GET['name_kor']) ? $_GET['name_kor'] : null;
        $phone1 = isset($_GET['phone1']) ? $_GET['phone1'] : null;
        $phone2 = isset($_GET['phone2']) ? $_GET['phone2'] : null;
        $email1 = isset($_GET['email1']) ? $_GET['email1'] : null;
        $email2 = isset($_GET['email2']) ? $_GET['email2'] : null;
        $org = isset($_GET['org']) ? $_GET['org'] : null;
        $license = isset($_GET['ln']) ? $_GET['ln'] : null;
        $special_license = isset($_GET['sn']) ? $_GET['sn'] : null;

        $phone =  $phone1 . $phone2;

        if (!empty($name) || !empty($firstName)) {
            if ($type4 == "on") {
                $type3 = "회원";
            } else {
                $type3 = "비회원";
            }
            if ($license == "") {
                $license = "00000";
            }
            if ($type2 == '개원의' || $type2 == '봉직의' || $type2 == '전문의' || $type2 == '교수' || $type2 == '군의관') {
                if ($type == '좌장' || $type == '연자' || $type == '패널') {
                    $fee = 0;
                } else {
                    if ($type3 == '비회원') {
                        $fee = 50000;
                    } else {
                        $fee = 30000;
                    }
                }
            } else if ($type2 == '간호사' || $type2 == '영양사' || $type2 == '약사' || $type2 == '운동처방사' || $type2 == '연구원') {
                if ($type == '좌장' || $type == '연자' || $type == '패널') {
                    $fee = 0;
                } else {
                    if ($type3 == '비회원') {
                        $fee = 40000;
                    } else {
                        $fee = 20000;
                    }
                }
            } else {
                $fee = 0;
            }

            // if ($fee == 0)
            //     $deposit = '미결제';
            // else
            //     $deposit = '미결제';

            $time = date("Y-m-d H:i:s");
            // $uagent = $this->agent->agent_string();

            $email = $email1 . "@" . $email2;
            $info = array(
                'name_kor' => preg_replace("/\s+/", "", $name),
                'ln' => preg_replace("/\s+/", "", $license),
                'sn' => preg_replace("/\s+/", "", $special_license),
                'org' => trim($org),
                'org_nametag' => trim($org),
                'phone' => preg_replace("/\s+/", "", $phone),
                'email' => preg_replace("/\s+/", "", $email),
                'type' => trim($type),
                'type2' => trim($type2),
                'type3' => trim($type3),
                'fee' => $fee,
                'time' => $time,
                'deposit' => $deposit,
                // 'uagent' => $uagent,
            );
            $this->users->add_onsite_user($info);
        }
    }

    public function mobile()
    {


        if (isset($_GET['first_name'])) {
            $type = isset($_GET['type1']) ? $_GET['type1'] : null;
            $type2 = isset($_GET['type2']) ? $_GET['type2'] : null;
            $name = isset($_GET['nick_name']) ? $_GET['nick_name'] : null;
            $phone = isset($_GET['phone']) ? $_GET['phone'] : null;
            $email1 = isset($_GET['email1']) ? $_GET['email1'] : null;
            $email2 = isset($_GET['email2']) ? $_GET['email2'] : null;
            $org = isset($_GET['org']) ? $_GET['org'] : null;
            $license = isset($_GET['ln']) ? $_GET['ln'] : null;
            $special_license = isset($_GET['sn']) ? $_GET['sn'] : null;
            $category_1 = isset($_GET['category-1']) ? $_GET['category-1'] : null;
            $category_2 = isset($_GET['category-2']) ? $_GET['category-2'] : null;
            $category_3 = isset($_GET['category-3']) ? $_GET['category-3'] : null;
            $category_4 = isset($_GET['category-4']) ? $_GET['category-4'] : null;
            $category_5 = isset($_GET['category-5']) ? $_GET['category-5'] : null;
            $category_6 = isset($_GET['category-6']) ? $_GET['category-6'] : null;
            $category_7 = isset($_GET['category-7']) ? $_GET['category-7'] : null;
            $category_8 = isset($_GET['category-8']) ? $_GET['category-8'] : null;
            $category_9 = isset($_GET['category-9']) ? $_GET['category-9'] : null;
            $category_10 = isset($_GET['category-10']) ? $_GET['category-10'] : null;
            $category_11 = isset($_GET['category-11']) ? $_GET['category-11'] : null;
            $category_12 = isset($_GET['category-12']) ? $_GET['category-12'] : null;
            $category_13 = isset($_GET['category-13']) ? $_GET['category-13'] : null;
            $category_14 = isset($_GET['category-14']) ? $_GET['category-14'] : null;
            $category_15 = isset($_GET['category-15']) ? $_GET['category-15'] : null;
            $category_16 = isset($_GET['category-16']) ? $_GET['category-16'] : null;
            $fee = 0;
            $type3 = 0;
            $etc1 = "신청";
            $type1 = "";
            if ($category_1) {
                $fee = 90000;
                $type3 = "회원";
                $type1 = "전문의";
            }
            if ($category_2) {
                $fee = 110000;
                $type3 = "비회원";
                $type1 = "전문의";
            }
            if ($category_3) {
                $fee = 70000;
                $type3 = "회원";
                $type1 = "전공의";
            }
            if ($category_4) {
                $fee = 90000;
                $type3 = "비회원";
                $type1 = "전공의";
            }
            if ($category_5) {
                $fee = 70000;
                $type3 = "회원";
                $type1 = "기타";
            }
            if ($category_6) {
                $fee = 90000;
                $type3 = "비회원";
                $type1 = "기타";
            }
            if ($category_7) {
                $type2 = "개원의";
                $type1 = "기타";
            }
            if ($category_8) {
                $type2 = "봉직의";
                $type1 = "기타";
            }
            if ($category_9) {
                $type2 = "교수";
                $type1 = "기타";
            }
            if ($category_10) {
                $type2 = "전임의";
                $type1 = "기타";
            }
            if ($category_11) {
                $type2 = "기초의학자";
                $type1 = "기타";
            }
            if ($category_12) {
                $type2 = "간호사";
                $type1 = "기타";
            }
            if ($category_13) {
                $type2 = "약사";
                $type1 = "기타";
            }
            if ($category_14) {
                $type2 = "군의관";
                $type1 = "기타";
            }
            if ($category_15) {
                $type2 = "간호사";
                $type1 = "기타";
            }
            if ($category_16) {
                $type2 = $category_16;
            }

            // if ($fee == 0)
            //     $deposit = '미결제';
            // else
            //     $deposit = '미결제';

            $time = date("Y-m-d H:i:s");
            if ($license) {
                $etc1 = "신청";
            } else {
                $etc1 = "미신청";
            }
            if ($license == "") {
                $license = "00000";
            }
            // $uagent = $this->agent->agent_string();


            $email = $email1 . "@" . $email2;
            $info = array(
                'nick_name' => preg_replace("/\s+/", "", $name),
                'ln' => preg_replace("/\s+/", "", $license),
                'sn' => preg_replace("/\s+/", "", $special_license),
                'org' => trim($org),
                'org_nametag' => trim($org),
                'phone' => preg_replace("/\s+/", "", $phone),
                'email' => preg_replace("/\s+/", "", $email),
                'type' => trim($type),
                'type1' => trim($type1),
                'type2' => trim($type2),
                'type3' => trim($type3),
                'fee' => $fee,
                'time' => $time,
                'deposit' => $deposit,
                'etc1' => $etc1,
                // 'uagent' => $uagent,
            );
            $this->users->add_onsite_user($info);
            $data['fee'] = $fee;
            $this->load->view('success', $data);
        } else {
            $this->load->view('mobile_onsite');
        }
    }

    public function success()
    {
        $data['fee'] = $_GET['fee'];
        $this->load->view('success', $data);
    }

    public function sicem()
    {

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('first_name', '이름', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('on_site_sicem', $this->data);
        } else {
            $nation = $this->input->post('nation');
            $first_name = $this->input->post('first_name');
            $last_name = $this->input->post('last_name');
            $name = $this->input->post('name_kor');
            $affiliation = $this->input->post('affiliation');
            $affilation_kor = $this->input->post('affiliation_kor');
            $attendance_date = $this->input->post('attendance_date');
            $attendance_type = $this->input->post('attendance_type');
            $conference_info = $this->input->post('conference_info');
            $copy_yn = $this->input->post('copy_yn');
            $day1_satellite_yn = $this->input->post('day1_satellite_yn');
            $day2_satellite_yn = $this->input->post('day2_satellite_yn');
            $day3_breakfast_yn = $this->input->post('day3_breakfast_yn');
            $deposit_method = $this->input->post('deposit_method');
            $email1 = $this->input->post('email1');
            $email2 = $this->input->post('email2');
            $first_time = $this->input->post('first_time');
            $first_time_yn = $this->input->post('first_time_yn');
            $is_score = $this->input->post('is_score');
            $licence_number = $this->input->post('licence_number');
            $member_other_type = $this->input->post('member_other_type');
            $member_type = $this->input->post('member_type');
            $phone1 = $this->input->post('phone1');
            $phone2 = $this->input->post('phone2');
            $special_request_food = $this->input->post('special_request_food');
            $welcome_reception_yn = $this->input->post('welcome_reception_yn');
            $specialty_number = $this->input->post('specialty_number');
            $kes_member_status = $this->input->post('kes_member_status');
            $fee = 0;
            $time = date("Y-m-d H:i:s");
            // $uagent = $this->agent->agent_string();
            $email = $email1 . "@" . $email2;
            $phone = $phone1 . "-" . $phone2;


            if ($kes_member_status == 'Y') {
                /**full day & member*/
                if ($attendance_date == "Full registration") {
                    if ($member_type == "Medical Doctor" || $member_type == "Professor") {
                        if ($nation == "Republic of Korea") {
                            $fee = "KRW 250,000";
                        } else {
                            $fee = "USD 250";
                        }
                    } else if ($member_type == "Trainee" || $member_type == "Student") {
                        if ($nation == "Republic of Korea") {
                            $fee = "KRW 125,000";
                        } else {
                            $fee = "USD 125";
                        }
                    } else if ($member_type == "Corporate" || $member_type == "Other") {
                        if ($nation === "Republic of Korea") {
                            $fee = "KRW 200,000";
                        } else {
                            $fee = "USD 200";
                        }
                    } else {
                        if ($nation == "Republic of Korea") {
                            $fee = "KRW 200,000";
                        } else {
                            $fee = "USD 200";
                        }
                    }
                }

                /** one day & member */
                else if ($attendance_date != "Full registration") {
                    if ($nation == "Republic of Korea") {
                        $fee = "KRW 200,000";
                    } else {
                        $fee = "USD 200";
                    }
                }
            } else if ($kes_member_status == 'N') {

                /**full day & non-member */
                if ($attendance_date == "Full registration") {
                    if ($member_type == "Medical Doctor" || $member_type == "Professor") {
                        if ($nation == "Republic of Korea") {
                            $fee = "KRW 350,000";
                        } else {
                            $fee = "USD 350";
                        }
                    } else if ($member_type == "Trainee" ||  $member_type == "Student") {
                        if ($nation == "Republic of Korea") {
                            $fee = "KRW 175,000";
                        } else {
                            $fee = "USD 175";
                        }
                    } else if ($member_type == "Corporate" || $member_type == "Other") {
                        if ($nation == "Republic of Korea") {
                            $fee = "KRW 250,000";
                        } else {
                            $fee = "USD 250";
                        }
                    } else {
                        if ($nation == "Republic of Korea") {
                            $fee = "KRW 250,000";
                        } else {
                            $fee = "USD 250";
                        }
                    }
                }

                /** one day  & non-member */
                else if ($attendance_date != "Full registration") {
                    if ($nation == "Republic of Korea") {
                        $fee = "KRW 230,000";
                    } else {
                        $fee = "USD 230";
                    }
                }
            }




            $info = array(
                'name_kor' => preg_replace("/\s+/", "", $name),
                'licence_number' => preg_replace("/\s+/", "", $licence_number),
                'specialty_number' => preg_replace("/\s+/", "", $specialty_number),
                'attendance_type' => trim($attendance_type),
                'member_type' => trim($member_type),
                'member_other_type' => trim($member_other_type),
                'org_nametag' => trim($affiliation),
                'phone' => preg_replace("/\s+/", "", $phone),
                'email' => preg_replace("/\s+/", "", $email),
                'nation' => $nation,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'affiliation' => $affiliation,
                'affiliation_kor' => $affilation_kor,
                'attendance_date' => $attendance_date,
                'conference_info' => $conference_info,
                'copy_yn' => $copy_yn,
                'day1_satellite_yn' => $day1_satellite_yn,
                'day2_satellite_yn' => $day2_satellite_yn,
                'day3_breakfast_yn' => $day3_breakfast_yn,
                'deposit_method' => $deposit_method,
                'first_time' => $first_time,
                'first_time_yn' => $first_time_yn,
                'is_score' => $is_score,
                'remark5' => $special_request_food,
                'welcome_reception_yn' => $welcome_reception_yn,
                'kes_member_status' => $kes_member_status,
                'fee' => $fee,
                // 'uagent' => $uagent,
            );
            $this->users->add_onsite_user($info);
            $this->load->view('success');
        }
    }

    public function check_email()
    {
        $email = $_GET['n'];
        $where = array(
            'email' => $email
        );
        $user = $this->users->get_user($where);

        // 결과를 JSON 형태로 반환합니다.
        header('Content-Type: application/json');
        echo json_encode(array('user' => $user));
    }
}
