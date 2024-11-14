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
                'callback' => '01030098530',
                'message' =>  '
안녕하세요. ISCP2023 운영사무국 입니다.
본 학회에 등록해 주셔서 감사드리며, 원활한 참석을 위하여 다음과 같은 안내 드리오니, 많은 관심 부탁 드립니다.
등록 QR코드를 등록데스크에 제시해주시면 빠르고 원활한 등록이 가능하니 해당 QR코드를 저장하여 방문 부탁드립니다. 
                            
[ISCP 2023 개요] 
- 일시: 2023년 11월 23일(목) ~ 25일(토)
- 장소: 콘래드서울, 여의도 (주소: 여의도동 23) 
- 등록데스크 위치 및 운영시간:
* 11월 23일(목), 6F 로비: 14:00~18:00 
* 11월 24일(금), 3F 로비: 07:00~19:00
* 11월 25일(토), 3F 로비: 07:00~17:00
                            
[등록 QR 코드]
- 등록데스크 방문 후 QR 코드 제시, 네임택 수령 부탁 드립니다.
- 본 QR코드는 등록절차를 위한 QR코드로 출결체크는 네임택 수령 후 네임택의 QR코드를 이용하여 태깅 부탁 드립니다.
                            
기타 참석과 관련하여 궁금하신 사항은 저희 운영사무국으로 연락 부탁드립니다
                            
감사합니다.
ISCP 2023 운영사무국 올림. 
T. +82-2-6549-2506 | E. iscp@into-on.com
', 'refkey' => 'RESTAPITEST1548722798', 'subject' => '[IMCVP 2024]', 'image_cnt' =>
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