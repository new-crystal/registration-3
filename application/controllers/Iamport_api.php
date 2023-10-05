<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require __DIR__ . '/../../vendor/autoload.php';
require_once(dirname(__DIR__).'/controllers/Iamport.php');
    class Iamport_api extends CI_Controller
    {
        private $imp_key = null;
        private $imp_secret = null;
        private $iamport = null;

        public function __construct()
        {
            parent::__construct();
            $this->load->model('users');
            $this->imp_key = '0125144321212378';
            $this->imp_secret = 'fdae113ec9bacd3d179e49691978a2bd43a7d6629afd9a0027e46c0fed816efe47510b0d01937d03';

            $this->iamport = new Iamport($this->imp_key, $this->imp_secret);
            $this->iamport->getAccessCode();
        }
        function index()
        {
            $this->load->view('header');
            $this->load->view('api_view');
            $this->load->view('footer');
        }

        function get_by_impuid()
        {

            #1. imp_uid 로 주문정보 찾기(아임포트에서 생성된 거래고유번호)
            $imp_uid = $this->input->post('imp_uid');
            $merchant_uid = $this->input->post('merchant_uid');
            $userId = $this->input->post('userId');

            $result = $this->iamport->findByImpUID($imp_uid); //IamportResult 를 반환(success, data, error)

            if ( $result->success ) {
                /**
                *	IamportPayment 를 가리킵니다. __get을 통해 API의 Payment Model의 값들을 모두 property처럼 접근할 수 있습니다.
                *	참고 : https://api.iamport.kr/#!/payments/getPaymentByImpUid 의 Response Model
                */
                $payment_data = $result->data;

//                echo '## 결제정보 출력 ##';
//                echo '<br>가맹점 주문번호 : ' 	. $payment_data->merchant_uid;
//                echo '<br>결제상태 : ' 		. $payment_data->status;
//                echo '<br>결제금액 : ' 		. $payment_data->amount;
//                echo '<br>결제수단 : ' 		. $payment_data->pay_method;
//                echo '<br>결제된 카드사명 : ' 	. $payment_data->card_name;
//                echo '<br>결제 매출전표 링크 : '	. $payment_data->receipt_url;

                /**

                *	IMP.request_pay({
                *		custom_data : {my_key : value}
                *	});
                *	와 같이 custom_data를 결제 건에 대해서 지정하였을 때 정보를 추출할 수 있습니다.(서버에는 json encoded형태로 저장합니다)
                */
//                echo 'Custom Data :'	. $payment_data->getCustomData('my_key');

                # 내부적으로 결제완료 처리하시기 위해서는 (1) 결제완료 여부 (2) 금액이 일치하는지 확인을 해주셔야 합니다.

                $info = array(
                    'deposit' =>  '카드결제 완료'
                );
                $where = array(
                    'id' => $userId
                );
//                (int)$amount_should_be_paid = $this->input->post('kscp_fee');
                $userInfo = $this->users->get_user($where);
                (int)$amount_should_be_paid = $userInfo['fee'];
//                (int)$amount_should_be_paid = 100;

                if ( $payment_data->status === 'paid' && $payment_data->amount == $amount_should_be_paid ) {

                    $this->users->update_user($info, $where);

                    echo json_encode($payment_data);
                    return $payment_data;
                }

            } else {
                error_log($result->error['code']);
                error_log($result->error['message']);
            }

        }

        function m_get_by_impuid()
        {

            #1. imp_uid 로 주문정보 찾기(아임포트에서 생성된 거래고유번호)
            $imp_uid = $this->input->get('imp_uid');
            $merchant_uid = $this->input->get('merchant_uid');
            $imp_success = $this->input->get('imp_success');

            $result = $this->iamport->findByImpUID($imp_uid); //IamportResult 를 반환(success, data, error)

            if ( $result->success ) {
                /**
                *	IamportPayment 를 가리킵니다. __get을 통해 API의 Payment Model의 값들을 모두 property처럼 접근할 수 있습니다.
                *	참고 : https://api.iamport.kr/#!/payments/getPaymentByImpUid 의 Response Model
                */
                $payment_data = $result->data;

//                echo '## 결제정보 출력 ##';
//                echo '<br>가맹점 주문번호 : ' 	. $payment_data->merchant_uid;
//                echo '<br>결제상태 : ' 		. $payment_data->status;
//                echo '<br>결제금액 : ' 		. $payment_data->amount;
//                echo '<br>결제수단 : ' 		. $payment_data->pay_method;
//                echo '<br>결제된 카드사명 : ' 	. $payment_data->card_name;
//                echo '<br>결제 매출전표 링크 : '	. $payment_data->receipt_url;

                /**

                *	IMP.request_pay({
                *		custom_data : {my_key : value}
                *	});
                *	와 같이 custom_data를 결제 건에 대해서 지정하였을 때 정보를 추출할 수 있습니다.(서버에는 json encoded형태로 저장합니다)
                */
//                echo 'Custom Data :'	. $payment_data->getCustomData('my_key');

                # 내부적으로 결제완료 처리하시기 위해서는 (1) 결제완료 여부 (2) 금액이 일치하는지 확인을 해주셔야 합니다.

                $userId = $payment_data->custom_data;
                $info = array(
                    'deposit' =>  '카드결제 완료(모바일)'
                );
                $where = array(
                    'id' => $userId
                );
                $userInfo = $this->users->get_user($where);
                (int)$amount_should_be_paid = $userInfo['fee'];
//                (int)$amount_should_be_paid = 100;

                if ( $payment_data->status === 'paid' && $payment_data->amount == $amount_should_be_paid ) {
                    $this->users->update_user($info, $where);
                }

            } else {
                error_log($result->error['code']);
                error_log($result->error['message']);
            }
            $this->data['users'] = $this->users->get_user($where);
            $this->load->view('header');
            $this->load->view('registration/show', $this->data);
            $this->load->view('footer');

        }
    }

?>
