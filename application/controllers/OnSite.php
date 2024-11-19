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

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('first_name', '이름', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('on_site_iscp', $this->data);
        } else {
            $email1 = $this->input->post('email1');
            $email2 = $this->input->post('email2');
            $nation = $this->input->post('nation');
            $first_name = $this->input->post('first_name');
            $last_name = $this->input->post('last_name');
            $name = $this->input->post('name_kor');
            $affiliation = $this->input->post('affiliation');
            $affilation_kor = $this->input->post('affiliation_kor');
            $department = $this->input->post('department');
            $department_kor = $this->input->post('department_kor');
            $phone1 = $this->input->post('phone1');
            $phone2 = $this->input->post('phone2');
            $conference_info = $this->input->post('conference_info');
            $special_request_food = $this->input->post('special_request_food');
            $attendance_type = $this->input->post('attendance_type');
            $attendance_other_type = $this->input->post('attendance_other_type');
            $member_type = $this->input->post('member_type');
            $member_other_type = $this->input->post('member_other_type');
            $deposit_method = $this->input->post('deposit_method');
            $fee = 0;
            $time = date("Y-m-d H:i:s");
            // $etc3 = $this->input->post('etc3');
            $etc4 = $this->input->post('etc4');
            // $uagent = $this->agent->agent_string();
            $email = $email1 . "@" . $email2;

            if ($nation == "Korea") {
                $phone = $phone2;
            } else {
                $phone = '+' . $phone1 . " " . $phone2;
            }

            if ($member_other_type) {
                $member_type = $member_other_type;
            }


            $day2_breakfast_yn = 'N';
            $day2_luncheon_yn = 'N';
            $day3_breakfast_yn = 'N';
            $day3_luncheon_yn = 'N';
            $onsite_reg = '1';

            if ($special_request_food == "None") {
                $special_request_food = 'N';
            }

            if ($etc4 === "/") {
                $etc4 = null;
            }

            if ($attendance_type == "ISCP full member") {
                $attendance_type = "Participants(ISCP full member)";
                $member_status = "ISCP full member";
            } else {
                $member_status = "N/A";
            }


            if ($nation === "Korea") {
                if ($attendance_type === "Participants") {
                    if ($member_type === "Specialist" || $member_type === "Professor") {
                        $fee = "70,000";
                    } else if (
                        $member_type === "Fellow" || $member_type === "Researcher" || $member_type === "Nurses" ||
                        $member_type === "Nutritionists" || $member_type === "Corporate member" || $member_type ===
                        "Military medical officer"
                    ) {
                        $fee = "30,000";
                    } else if ($member_type === "Resident" || $member_type === "Student") {
                        $fee = "0";
                    } else {
                        $fee = "30,000";
                    }
                } else {
                    $fee = 0;
                }
            } else {
                if ($attendance_type === "Participants") {
                    if ($member_type === "Specialist" || $member_type === "Professor") {
                        $fee = "USD 300(KRW 405,000)";
                    } else if (
                        $member_type === "Fellow" || $member_type === "Researcher" || $member_type === "Nurses" ||
                        $member_type === "Nutritionists" || $member_type === "Corporate member" || $member_type ===
                        "Military medical officer"
                    ) {
                        $fee = "USD 150(KRW 202,500)";
                    } else if ($member_type === "Resident" || $member_type === "Student") {
                        $fee = "0";
                    } else {
                        $fee = "USD 150(KRW 202,500)";
                    }
                } else {
                    $fee = 0;
                }
            }

            if ($attendance_other_type) {
                $attendance_type = $attendance_other_type;
            }

            $info = array(
                'name_kor' => preg_replace("/\s+/", "", $name),
                'attendance_type' => trim($attendance_type),
                'member_type' => trim($member_type),
                'member_other_type' => trim($member_other_type),
                'org_nametag' => trim($affiliation),
                'phone' => preg_replace("/\s+/", "", $phone),
                'email' => preg_replace("/\s+/", "", $email),
                'time' => $time,
                'nation' => $nation,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'affiliation' => $affiliation,
                'department' => $department,
                'department_kor' => $department_kor,
                'affiliation_kor' => $affilation_kor,
                'conference_info' => $conference_info,
                'day2_breakfast_yn' => $day2_breakfast_yn,
                'day2_luncheon_yn' => $day2_luncheon_yn,
                'day3_breakfast_yn' => $day3_breakfast_yn,
                'day3_luncheon_yn' => $day3_luncheon_yn,
                'deposit_method' => $deposit_method,
                'special_request_food' => $special_request_food,
                'member_status' =>  $member_status,
                'fee' => $fee,
                'onsite_reg' => $onsite_reg,
                'etc4' => $etc4
                // 'uagent' => $uagent,
            );
            $this->users->add_onsite_user($info);
            $this->load->view('success');
        }
    }

    public function mobile()
    {

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('first_name', '이름', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('on-site-mo', $this->data);
        } else {
            $email1 = $this->input->post('email1');
            $email2 = $this->input->post('email2');
            $nation = $this->input->post('nation');
            $first_name = $this->input->post('first_name');
            $last_name = $this->input->post('last_name');
            $name = $this->input->post('name_kor');
            $affiliation = $this->input->post('affiliation');
            $affilation_kor = $this->input->post('affiliation_kor');
            $department = $this->input->post('department');
            $department_kor = $this->input->post('department_kor');
            $phone1 = $this->input->post('phone1');
            $phone2 = $this->input->post('phone2');
            $conference_info = $this->input->post('conference_info');
            $special_request_food = $this->input->post('special_request_food');
            $attendance_type = $this->input->post('attendance_type');
            $attendance_other_type = $this->input->post('attendance_other_type');
            $member_type = $this->input->post('member_type');
            $member_other_type = $this->input->post('member_other_type');
            $deposit_method = $this->input->post('deposit_method');
            $fee = 0;
            $time = date("Y-m-d H:i:s");
            // $etc3 = $this->input->post('etc3');
            $etc4 = $this->input->post('etc4');
            // $uagent = $this->agent->agent_string();
            $email = $email1 . "@" . $email2;

            if ($nation == "Korea") {
                $phone = $phone2;
            } else {
                $phone = '+' . $phone1 . " " . $phone2;
            }

            if ($member_other_type) {
                $member_type = $member_other_type;
            }


            $day2_breakfast_yn = 'N';
            $day2_luncheon_yn = 'N';
            $day3_breakfast_yn = 'N';
            $day3_luncheon_yn = 'N';
            $onsite_reg = '1';

            if ($special_request_food == "None") {
                $special_request_food = 'N';
            }

            if ($etc4 === "/") {
                $etc4 = null;
            }

            if ($attendance_type == "ISCP full member") {
                $attendance_type = "Participants(ISCP full member)";
                $member_status = "ISCP full member";
            } else {
                $member_status = "N/A";
            }


            if ($nation === "Korea") {
                if ($attendance_type === "Participants") {
                    if ($member_type === "Specialist" || $member_type === "Professor") {
                        $fee = "70,000";
                    } else if (
                        $member_type === "Fellow" || $member_type === "Researcher" || $member_type === "Nurses" ||
                        $member_type === "Nutritionists" || $member_type === "Corporate member" || $member_type ===
                        "Military medical officer"
                    ) {
                        $fee = "30,000";
                    } else if ($member_type === "Resident" || $member_type === "Student") {
                        $fee = "0";
                    } else {
                        $fee = "30,000";
                    }
                } else {
                    $fee = 0;
                }
            } else {
                if ($attendance_type === "Participants") {
                    if ($member_type === "Specialist" || $member_type === "Professor") {
                        $fee = "USD 300(KRW 405,000)";
                    } else if (
                        $member_type === "Fellow" || $member_type === "Researcher" || $member_type === "Nurses" ||
                        $member_type === "Nutritionists" || $member_type === "Corporate member" || $member_type ===
                        "Military medical officer"
                    ) {
                        $fee = "USD 150(KRW 202,500)";
                    } else if ($member_type === "Resident" || $member_type === "Student") {
                        $fee = "0";
                    } else {
                        $fee = "USD 150(KRW 202,500)";
                    }
                } else {
                    $fee = 0;
                }
            }

            if ($attendance_other_type) {
                $attendance_type = $attendance_other_type;
            }

            $info = array(
                'name_kor' => preg_replace("/\s+/", "", $name),
                'attendance_type' => trim($attendance_type),
                'member_type' => trim($member_type),
                'member_other_type' => trim($member_other_type),
                'org_nametag' => trim($affiliation),
                'phone' => preg_replace("/\s+/", "", $phone),
                'email' => preg_replace("/\s+/", "", $email),
                'time' => $time,
                'nation' => $nation,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'affiliation' => $affiliation,
                'department' => $department,
                'department_kor' => $department_kor,
                'affiliation_kor' => $affilation_kor,
                'conference_info' => $conference_info,
                'day2_breakfast_yn' => $day2_breakfast_yn,
                'day2_luncheon_yn' => $day2_luncheon_yn,
                'day3_breakfast_yn' => $day3_breakfast_yn,
                'day3_luncheon_yn' => $day3_luncheon_yn,
                'deposit_method' => $deposit_method,
                'special_request_food' => $special_request_food,
                'member_status' =>  $member_status,
                'fee' => $fee,
                'onsite_reg' => $onsite_reg,
                'etc4' => $etc4
                // 'uagent' => $uagent,
            );
            $this->users->add_onsite_user($info);
            $this->load->view('success');
        }
    }

    public function success()
    {
        $data['fee'] = $_GET['fee'];
        $this->load->view('success', $data);
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
                        if ($nation == "Korea") {
                            $fee = "KRW 250,000";
                        } else {
                            $fee = "USD 250";
                        }
                    } else if ($member_type == "Trainee" || $member_type == "Student") {
                        if ($nation == "Korea") {
                            $fee = "KRW 125,000";
                        } else {
                            $fee = "USD 125";
                        }
                    } else if ($member_type == "Corporate" || $member_type == "Other") {
                        if ($nation === "Korea") {
                            $fee = "KRW 200,000";
                        } else {
                            $fee = "USD 200";
                        }
                    } else {
                        if ($nation == "Korea") {
                            $fee = "KRW 200,000";
                        } else {
                            $fee = "USD 200";
                        }
                    }
                }

                /** one day & member */
                else if ($attendance_date != "Full registration") {
                    if ($nation == "Korea") {
                        $fee = "KRW 200,000";
                    } else {
                        $fee = "USD 200";
                    }
                }
            } else if ($kes_member_status == 'N') {

                /**full day & non-member */
                if ($attendance_date == "Full registration") {
                    if ($member_type == "Medical Doctor" || $member_type == "Professor") {
                        if ($nation == "Korea") {
                            $fee = "KRW 350,000";
                        } else {
                            $fee = "USD 350";
                        }
                    } else if ($member_type == "Trainee" ||  $member_type == "Student") {
                        if ($nation == "Korea") {
                            $fee = "KRW 175,000";
                        } else {
                            $fee = "USD 175";
                        }
                    } else if ($member_type == "Corporate" || $member_type == "Other") {
                        if ($nation == "Korea") {
                            $fee = "KRW 250,000";
                        } else {
                            $fee = "USD 250";
                        }
                    } else {
                        if ($nation == "Korea") {
                            $fee = "KRW 250,000";
                        } else {
                            $fee = "USD 250";
                        }
                    }
                }

                /** one day  & non-member */
                else if ($attendance_date != "Full registration") {
                    if ($nation == "Korea") {
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
                'special_request_food' => $special_request_food,
                'welcome_reception_yn' => $welcome_reception_yn,
                'kes_member_status' => $kes_member_status,
                'fee' => $fee,
                // 'uagent' => $uagent,
            );
            $this->users->add_onsite_user($info);
            $this->load->view('success');
        }
    }
}
