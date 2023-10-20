<?php
$curl = curl_init();
$code = "222";
$after = "0";
$success = 0;
$failed = 0;

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://sms.gabia.com/oauth/token",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => false,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "grant_type=client_credentials",
    CURLOPT_HTTPHEADER => array(
        "Content-Type: application/x-www-form-urlencoded",
        "Authorization: Basic " . base64_encode("intowebinar:a756c0edd55b504a0c4138411ad41055")
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $responseData = json_decode($response, true);
    $accessToken = $responseData['access_token'];
    foreach ($users as $item) {
        // echo $item['phone'];
        // MMS 포토문자
        // if (substr($item['phone'], 0, 2) == "82") {
        //     $phone = '0' . substr($item['phone'], 3);
        // }
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://sms.gabia.com/api/send/mms",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => array(
                'phone' =>  $item['phone'],
                'callback' => '01090224867',
                'message' =>  '
안녕하십니까,
SICEM 2023에 등록해 주셔서 감사드리며, SICEM 사무국에서 참석 안내를 하기와 같이 드립니다. 함께 보내 드리는 등록 QR코드를 등록데스크에 제시해주시면 빠르고 원활한 등록이 가능하니 해당 QR코드를 저장하여 방문 부탁드립니다. 
                            
[SICEM 2023 개요] 
- 일시: 2023년 10월 26일(목) ~ 28일(토)
- 장소: 롯데호텔월드 (잠실) (주소: 서울특별시 송파구 올림픽로 240)
- 오시는 길: https://www.sicem.kr/venue/venue.php
- 등록데스크 위치: 3F 로비 
- 등록데스크 운영시간:
* 10월 26일(목): 15:30~19:00 
* 10월 27일(금): 08:00~19:00
* 10월 28일(토): 07:00~16:30
                            
[등록 QR 코드]
-   등록데스크에 방문하여 QR 코드를 제시 후 네임택을 수령 부탁드립니다.
-   해당 QR코드는 등록절차를 위한 QR코드입니다, 출결 태깅은 네임택 수령 후 네임택 QR코드 혹은 어플리케이션의 QR코드(로그인 후 메인 화면- Registration 화면)를 사용하시기 바랍니다. 
                            
기타 참석과 관련하여 궁금하신 사항은 저희 운영사무국으로 연락 부탁드립니다. 
                            
감사합니다.
SICEM 2023 운영사무국 올림. 
T. +82-2-2039-7804 | E. info@sicem-secretariat.kr 
', 'refkey' => 'RESTAPITEST1548722798', 'subject' => '[SICEM 2023] 등록 안내 (10.26 ~10.28, 롯데호텔월드(잠실))', 'image_cnt' =>
                '1', '
             images0' => new CURLFILE('assets/images/QR/qrcode_' . $item['registration_no'] . '.jpg')
            ),
            CURLOPT_HTTPHEADER => array(
                "Authorization: Basic " . base64_encode("intowebinar:" . $accessToken)
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
            $error = $err;
            $error = json_decode($err, true);
        } else {
            // echo $response;
            $responseData = json_decode($response, true);
            $code = $responseData['code'];
            $after = $responseData['data']['AFTER_SMS_QTY'];
            if ($code == "200") {
                $success = $success + 1;
            } else {
                $failed =  $failed + 1;
            }
        }
    }
}

?>
<script src="https://cdn.tailwindcss.com"></script>
<div class="w-full h-full flex items-center justify-center">
    <div class="w-2/4 h-2/4 bg-lime-500 flex flex-col items-center justify-center">
        <h1 class="text-white font-semibold text-3xl">MMS 전송이 성공하였습니다.</h1>
        <p class="text-xl font-semibold mt-5">성공 : <?= $success ?> </p>
        <p class="text-xl font-semibold mt-5">실패 : <?= $failed ?> </p>
        <p class="text-xl font-semibold mt-5">문자 잔여량 : <?= $after ?> </p>
        <a href="/admin/qr_user"><button class="bg-white text-lime-500 p-3 translate-y-32 font-semibold rounded">뒤로
                가기</button></a>
    </div>

</div>