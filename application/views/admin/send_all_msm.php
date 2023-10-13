<?php
$curl = curl_init();
$code = "222";
$after = "0";

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
ICOMES 2023 (International Congress on Obesity and MEtabolic Syndrome 2023)에 등록 해주셔서 감사드립니다.
ICOMES 2023 사무국에서 학술대회장 방문 시 참석자들의 빠르고 원활한 등록을 위한 안내를 드립니다. 
                            
[ICOMES 2023] 
- 일시: 2023년 9월 7일(목) ~ 9일(토)
- 장소: 콘래드 서울 (서울특별시 영등포구 국제금융로 10)
- 오시는 길: https://icomes.or.kr/main/venue.php
- 등록데스크 위치: 3F 로비 
- 등록데스크 운영시간: 9월 7일(목) 14:00 ~ / 9월 8일(금), 9월 9일(토): 07:00 ~
                
[등록 QR 코드]
*	등록데스크에 방문하여 하기 QR 코드를 제시 후 네임택을 수령 부탁드립니다.
*	해당 QR코드는 출결 태깅을 위한 QR코드가 아니며, 출결 태깅은 네임택 수령 후 네임택 QR코드 혹은 어플리케이션의 QR코드(로그인 후 메인 화면- 하단 QR CODE)를 사용하시기 바랍니다. 
                
[기타 안내사항]
*	 ICOMES 2023 에서는 인쇄된 초록집을 제공하지 않습니다. 대신하여 모든 참석에 필요한 정보를 어플리케이션에서 확인하실 수 있습니다.
*	어플리케이션 상세 기능: 어플을 통한 등록 및 출결, 프로그램 및 실시간 세션 확인, 연사 정보 확인, 초록집 & 프로그램북 다운로드
                
-	애플앱스토어: https://apps.apple.com/kr/app/icomes2023/id6450940155
-	구글플레이: https://play.google.com/store/apps/details?id=com.intoon.icomes
-	앱스토어 검색: ‘ICOMES 2023’ 
                
기타 관련하여 궁금하신 사항은 저희 운영사무국으로 연락 부탁드립니다. 
                
감사합니다.
ICOMES 2023 운영사무국 올림. 

TEL:82-2-2285-2568, 82-10-3009-8530/ E-mail: icomes@into-on.com
', 'refkey' => 'RESTAPITEST1548722798', 'subject' => '[ICOMES 2023] 등록 및 현장 참석 안내', 'image_cnt' =>
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
            // echo $code;
        }
    }
}

?>
<script src="https://cdn.tailwindcss.com"></script>
<div class="w-full h-full flex items-center justify-center">
    <?php if ($code == "200") { ?>
        <div class="w-2/4 h-2/4 bg-lime-500 flex flex-col items-center justify-center">
            <h1 class="text-white font-semibold text-3xl">MMS 전송이 성공하였습니다.</h1>
            <p class="text-xl font-semibold mt-5">문자 잔여량 : <?= $after ?> </p>
            <a href="/admin/qr_user"><button class="bg-white text-lime-500 p-3 translate-y-32 font-semibold rounded">뒤로
                    가기</button></a>
        </div>
    <?php } else if ($code != "200" && $code != "222") { ?>
        <div class="w-2/4 h-3/4 bg-orange-500 flex flex-col items-center justify-center">
            <h1 class="text-white font-semibold text-3xl">MMS 전송이 실패하였습니다.</h1>
            <!-- <p class="text-xl font-semibold mt-5"> <?= $error ? $error : null ?> </p> -->
            <a href="/admin/qr_user"><button class="bg-white bg-orange-500 p-3 font-semibold rounded">뒤로
                    가기</button></a>
        </div>
    <?php } else if ($code == "222") { ?>
        <div class="w-2/4 h-3/4 bg-orange-500 flex flex-col items-center justify-center">
            <h1 class="text-white font-semibold text-3xl">MMS 전송할 유저가 없습니다.</h1>
            <!-- <p class="text-xl font-semibold mt-5"> <?= $error ? $error : null ?> </p> -->
            <a href="/admin/qr_user"><button class="bg-white bg-orange-500 p-3 font-semibold rounded">뒤로
                    가기</button></a>
        </div>
    <?php } ?>
</div>