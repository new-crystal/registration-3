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
안녕하십니까,
IMCVP 2024 (International Meeting of Cardiovascular Disease Prevention)
본 학술대회에 등록해 주셔서 감사드리며, 빠르고 원활한 등록 진행을 위한 안내사항을 보내드리오니 사전에 확인 부탁드립니다.

[IMCVP 2024]
- 일정: 2024년 11월 29일(금) ~ 30일(토)
- 장소: 그랜드 워커힐 서울
- 오시는 길: https://www.walkerhill.com/grandwalkerhillseoul/Map
                
[등록 안내]
* 등록데스크에 방문하여 상단 QR 코드를 제시 후 네임텍을 수령 부탁드립니다.
- 등록데스크 위치: 그랜드홀 로비(B1)
- 등록데스크 운영시간: 11월 29일(금), 08:00 ~ 18:00 / 11월 30일(토), 06:30 ~ 17:00

기타 관련하여 궁금하신 사항은 운영사무국으로 연락 부탁드립니다.         

감사합니다.
IMCVP 2024 운영사무국 드림.

', 'refkey' => 'RESTAPITEST1548722798', 'subject' => '[IMCVP 2024] 학술대회 참석 안내', 'image_cnt' =>
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
        <a href="/admin/qr_user"><button class="bg-white text-lime-500 p-3 translate-y-32 font-semibold rounded">뒤로가기</button></a>
    </div>

</div>