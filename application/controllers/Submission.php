<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require __DIR__ . '/../../vendor/autoload.php';

class Submission extends CI_Controller {
	private $sheets;
	private $data;

	public function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Seoul');
        $this->load->model('users');
        $this->load->library("excel");
        $this->load->library("user_agent");
        ini_set('memory_limit', '-1');
    }

	public function index()
	{
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->load->view('header');
        $this->load->view('/submission/info');
        $this->load->view('footer');
	}
    
	public function info()
	{
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $this->load->view('header');
        $this->load->view('/submission/info');
        $this->load->view('footer');
	}
    
    
	public function search()
	{
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('name', '성명', 'required');
        $this->form_validation->set_rules('serial', '등록번호', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->form_validation->set_message('name', '<p style="color:red; text-align: center;">※ 성명을 입력해 주세요.</p>');
            $this->form_validation->set_message('serial', '<p style="color:red; text-align: center;">※ 등록번호를 입력해 주세요.</p>');

            $this->load->view('header');
            $this->load->view('submission/search');
            $this->load->view('footer');
        }
        else
        {
            $name = $this->input->post('name');
            $serial = $this->input->post('serial');

            $info = array(
                'NAME' => $name,
                'SERIAL' => $serial
            );

            $this->load->view('header');
            $this->data['base'] = $this->users->get_abstract_base($info);
            if(!empty($this->data['base'])){
                    
                $fileIdx = explode(",", $this->data['base']['FILE_NO']);
                $file = [];
                foreach($fileIdx as $idx) {
                    $where = array(
                        'idx' => $idx
                    );
                    array_push($file, $this->users->get_file_upload($where));
                }
                $this->data['file'] = $file;

                $this->load->view('submission/detail', $this->data);
            }else{
                echo "<script type='text/javascript'> alert('※ 일치하는 내용이 없습니다.');</script>";
                $this->load->view('submission/search', $this->data);
            }
            $this->load->view('footer');
        }
	}
    
    public function enroll()
	{
        $this->load->helper('form');
        $this->load->library('form_validation');

        /*
        $this->form_validation->set_rules('name', '성명', 'required');
        $this->form_validation->set_rules('email', '이메일', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->form_validation->set_message('name', '<p style="color:red; text-align: center;">※ 성명을 입력해 주세요.</p>');
            $this->form_validation->set_message('email', '<p style="color:red; text-align: center;">※ 이메일을 입력해 주세요.</p>');

            $this->load->view('header');
            $this->load->view('submission/enroll');
            $this->load->view('footer');
        }
        else
        {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            $info = array(
                'nick_name' => $name,
                'email' => $email
            );

            $this->load->view('header');
            $this->data['users'] = $this->users->get_user($info);
            if(!empty($this->data['users'])){
                $this->load->view('submission/show', $this->data);
            }else{
                echo "<script type='text/javascript'> alert('※ 일치하는 내용이 없습니다.');</script>";
                $this->load->view('submission/enroll', $this->data);
            }
            $this->load->view('footer');
        }
        */
        $this->load->view('header');
        $this->load->view('submission/show');
        $this->load->view('footer');

	}
    

	public function success()
	{
		$this->load->view('header');
		$this->load->view('submission/success');
		$this->load->view('footer');
	}

    public function do_upload(){

        $name= $this->input->post('name');
        $org= $this->input->post('org');
        $phone= $this->input->post('phone');
        $email= $this->input->post('email');
        
        $config['upload_path']="./assets/abstract";
        $config['allowed_types']='gif|jpg|png';
        $config['encrypt_name'] = TRUE;
		$config['max_size']	= '10240';
         
        $this->load->library('upload',$config);
        if($this->upload->do_upload("ab_file")){
            $data = array('upload_data' => $this->upload->data());
 
            $file_name= $data['upload_data']['file_name'];
            $file_path= $data['upload_data']['file_path'];
            $orig_name= $data['upload_data']['orig_name'];
            $file_size= $data['upload_data']['file_size'];
             
            $data2 = array(
                    'file_name'     => $file_name,
                    'file_path'     => $file_path,
                    'orig_name'     => $orig_name,
                    'file_size'     => $file_size
                ); 
             
            $where = array(
                    'file_name'     => $file_name,
                    'orig_name'     => $orig_name
                ); 
            $this->users->insert_file_upload($data2);            
            $file = $this->users->get_file_upload($where);
            
            $file_no= $file['idx'];
                         
            $data = array(
                    'name'     => $name,
                    'org'     => $org,
                    'phone'     => $phone,
                    'email'     => $email,
                    'file_no' => $file_no
                ); 
            
            $result= $this->users->save_upload($data);

            echo json_encode(array(
                "code" => 200,
                "msg" => "Success"
            ));
        }else{
            echo json_encode(array(
                "code" => 400,
                "msg" => "Fail"
            ));            
        }

 
     }

     public function do_upload_abstract(){
        $presentType    = $this->input->post('presentType');

        $title          = $this->input->post('title');
        $background     = $this->input->post('background');
        $method         = $this->input->post('method');
        $result         = $this->input->post('result');
        $conclusions    = $this->input->post('conclusions');
        
        $authorNames    = $this->input->post('authorNames');
        $authorAffiliations  = $this->input->post('authorAffiliations');
        
        $presenterName     = $this->input->post('presenterName');
        $presenterMail     = $this->input->post('presenterMail');
        $presenterPhone    = $this->input->post('presenterPhone');
        
        $field_name = 'ab_files';
        $fileIdx = [];
        if($_FILES)
        {
            $cnt_field = count($_FILES['ab_files']['name']);

            if($cnt_field > 0) {
                $multi_files = $_FILES;
                foreach($multi_files['ab_files']['name'] as $key=>$value){
                    $fileno = $this->_multi_upload($field_name,'upload/images',$multi_files,$key);
                    $fileIdx[] = $fileno;
                }
            }
        }
        
        $lastIdx = $this->users->get_last_index_abstract_base();
        $lastIdx = intval($lastIdx[0]->NEXT_IDX);
        $serial = "KSCP-" . (strval(date('ymd'))) . "-" . (strval($lastIdx));

        $data = array(
            'PRESENT_TYPE'  => $presentType,
            'TITLE'         => $title,
            'BACKGROUND'    => $background,
            'METHOD'        => $method,
            'RESULT'        => $result,
            'CONCLUSIONS'   => $conclusions,
            'AUTHOR_NAME'   => $authorNames,
            'AUTHOR_AFFILIATIONS' => $authorAffiliations,
            'FILE_NO'       => implode( ',', $fileIdx ),
            'NAME'          => $presenterName,
            'EMAIL'         => $presenterMail,
            'PHONE'         => $presenterPhone,
            'SERIAL'        => $serial
            ); 
        
        $baseIdx= $this->users->save_upload_abstract_base($data);
        
        echo json_encode(array(
            "code" => 200,
            "msg" => "Success"
        ));        
     }

     public function do_update_abstract(){
        
        $serial    = $this->input->post('serial');

        $presentType    = $this->input->post('presentType');

        $title          = $this->input->post('title');
        $background     = $this->input->post('background');
        $method         = $this->input->post('method');
        $result         = $this->input->post('result');
        $conclusions    = $this->input->post('conclusions');
        
        $authorNames    = $this->input->post('authorNames');
        $authorAffiliations  = $this->input->post('authorAffiliations');
        
        $presenterName     = $this->input->post('presenterName');
        $presenterMail     = $this->input->post('presenterMail');
        $presenterPhone    = $this->input->post('presenterPhone');
        
        $delfile1        = $this->input->post('del_file_1');
        $delfile2        = $this->input->post('del_file_2');
        $delfile3        = $this->input->post('del_file_3');
        $delfile4        = $this->input->post('del_file_4');

        $idx = array(
            'SERIAL'        => $serial
        ); 

        $base = $this->users->get_abstract_base($idx);
        $fileIdx = [];
        $beforFileIdx = [];

        if(isset($base['FILE_NO'])){
            $beforFileIdx = explode( ',', $base['FILE_NO']);
        }
        
        if($delfile1 == "false"){
            if(isset($beforFileIdx[0])){
                array_push($fileIdx, $beforFileIdx[0]);
            }
        }
        if($delfile2 == "false"){
            if(isset($beforFileIdx[1])){
                array_push($fileIdx, $beforFileIdx[1]);
            }
        }
        if($delfile3 == "false"){
            if(isset($beforFileIdx[2])){
                array_push($fileIdx, $beforFileIdx[2]);
            }
        }
        if($delfile4 == "false"){
            if(isset($beforFileIdx[3])){
                array_push($fileIdx, $beforFileIdx[3]);
            }
        }


        if(isset($_FILES['ab_files']) && isset($_FILES['ab_files']['name'])) {

            $field_name = 'ab_files';
            $fileIdx = [];
            if($_FILES)
            {
                $cnt_field = count($_FILES['ab_files']['name']);
    
                if($cnt_field > 0) {
                    $multi_files = $_FILES;
                    foreach($multi_files['ab_files']['name'] as $key=>$value){
                        $fileno = $this->_multi_upload($field_name,'upload/images',$multi_files,$key);
                        $fileIdx[] = $fileno;
                    }
                }
            }
            
            $lastIdx = $this->users->get_last_index_abstract_base();
            $lastIdx = intval($lastIdx[0]->NEXT_IDX);
        }


        $data = array(
            'PRESENT_TYPE'  => $presentType,
            'TITLE'         => $title,
            'BACKGROUND'    => $background,
            'METHOD'        => $method,
            'RESULT'        => $result,
            'CONCLUSIONS'   => $conclusions,
            'AUTHOR_NAME'   => $authorNames,
            'AUTHOR_AFFILIATIONS' => $authorAffiliations,
            'FILE_NO'       => implode( ',', $fileIdx ),
            'NAME'          => $presenterName,
            'EMAIL'         => $presenterMail,
            'PHONE'         => $presenterPhone,
            ); 
        
        $baseIdx= $this->users->update_abstract_base($idx, $data); 
        
        echo json_encode(array(
            "code" => 200,
            "msg" => implode( ',', $beforFileIdx ) . '-' . implode( ',', $fileIdx )
        ));       
     }

    private function _multi_upload($field_name, $upload_dir, $multi_files=FALSE, $multi_index=FALSE) {

        $config['upload_path']="./assets/abstract";
        $config['allowed_types']='gif|jpg|png';
        $config['encrypt_name'] = TRUE;
		$config['max_size']	= '10240';
        
        $this->load->library('upload', $config);
        
        $file_no = "";

        /**
         * 멀티 업로드인 경우에만 해당됩니다.
         */
        if($multi_index !== FALSE)
        {
            $_FILES[$field_name]['name']= $multi_files[$field_name]['name'][$multi_index];
            $_FILES[$field_name]['type']= $multi_files[$field_name]['type'][$multi_index];
            $_FILES[$field_name]['tmp_name']= $multi_files[$field_name]['tmp_name'][$multi_index];
            $_FILES[$field_name]['error']= $multi_files[$field_name]['error'][$multi_index];
            $_FILES[$field_name]['size']= $multi_files[$field_name]['size'][$multi_index];
        }

        $upload_ok = $this->upload->do_upload($field_name);

        
        if($upload_ok){
            $data = array('upload_data' => $this->upload->data());
 
            $file_name= $data['upload_data']['file_name'];
            $file_path= $data['upload_data']['file_path'];
            $orig_name= $data['upload_data']['orig_name'];
            $file_size= $data['upload_data']['file_size'];
             
            $data2 = array(
                    'file_name'     => $file_name,
                    'file_path'     => $file_path,
                    'orig_name'     => $orig_name,
                    'file_size'     => $file_size
                ); 
             
            $where = array(
                    'file_name'     => $file_name,
                    'orig_name'     => $orig_name
                ); 
            $this->users->insert_file_upload($data2);            
            $file = $this->users->get_file_upload($where);
            
            $file_no= $file['idx'];
        }

        return $file_no;
    }
    
	public function preview()
	{
        $presentType    = $this->input->post('presentType');
        $title          = $this->input->post('title');
        $background     = $this->input->post('background');
        $method         = $this->input->post('method');
        $result         = $this->input->post('result');
        $conclusions    = $this->input->post('conclusions');
        $keywords       = $this->input->post('keywords');
        
        $affiliationDepartments   = $this->input->post('affiliationDepartment');
        $affiliationAffiliations  = $this->input->post('affiliationAffiliation');
        $affiliationCountrys      = $this->input->post('affiliationCountry');
        
        $authorTypes         = $this->input->post('authorType');
        $authorFirstNames    = $this->input->post('authorFirstName');
        $authorLastNames     = $this->input->post('authorLastName');
        $authorEmails        = $this->input->post('authorEmail');
        $authorAffiliations = $this->input->post('authorAffiliation');

        $data = array(
            'presentType'     =>   $presentType ,
            'title'           =>   $title       ,
            'background'      =>   $background  ,   
            'method'          =>   $method      ,   
            'result'          =>   $result      ,
            'conclusions'     =>   $conclusions ,   
            'keywords'        =>   $keywords    
        );

        $this->load->view('/submission/preview', $data);
	}
}
