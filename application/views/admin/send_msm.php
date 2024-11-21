<?php
$phone = $users['phone'] ?? '';
$registration_no = $users['registration_no'] ?? '';

$curl = curl_init();
$error = "";

// if (substr($phone, 0, 2) == "82") {
//     $phone = '0' . substr($phone, 3);
// }
// if (substr($phone, 0, 2) == "10") {
//     $phone = '0' . $phone;
// } else {
//     $phone = $phone;
// }


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
   // echo $response;
    $responseData = json_decode($response, true);
    $accessToken = $responseData['access_token'];

    //mms 포토문자
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
            'phone' =>  $phone, 'callback' => '01030098530',
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
             images0' => new CURLFILE('assets/images/QR/qrcode_' . $registration_no . '.jpg')
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
        //echo $response;
        $responseData = json_decode($response, true);
        $code = $responseData['code'];
        // $after = $responseData['data']['AFTER_SMS_QTY'];
    }
}

?>
<script src="https://cdn.tailwindcss.com"></script>
<div class="w-full h-full flex items-center justify-center">
    <?php if ($code == "200" && isset($responseData['data'])) : ?>
        <div class="w-2/4 h-2/4 bg-lime-500 flex flex-col items-center justify-center">
            <h1 class="text-white font-semibold text-3xl">MMS 전송이 성공하였습니다.</h1>
            <p class="text-xl font-semibold mt-5">문자 잔여량 : <?= $responseData['data']['AFTER_SMS_QTY'] ?> </p>
            <button id="closed" class="bg-white text-lime-500 py-3 px-5 translate-y-32 font-semibold rounded">확인</button>
        </div>


    <?php endif; ?>
    <?php if ($code != "200") : ?>
        <div class="w-2/4 h-3/4 bg-orange-500 flex flex-col items-center justify-center">
            <h1 class="text-white font-semibold text-3xl">MMS 전송이 실패하였습니다.</h1>
            <p class="text-xl font-semibold mt-5"><?= $error ? $error : null ?> </p>
            <button class="bg-white bg-orange-500 p-3 font-semibold rounded">확인</button>
        </div>
    <?php endif; ?>
</div>

<script>
    const closed = document.querySelector("#closed");

    closed.addEventListener("click", () => {
        window.close()
    })

    const parentWindow = window.opener;
    const buttons = parentWindow.document.querySelectorAll('.msm_btn');
    const id = window.location.search.split("=")[1]
    const code = <?php echo $code ?>;

    buttons.forEach((button) => {
        if (code == "200") {
            if (button.dataset.id === id) {
                button.classList.remove('btn-non-success');
                button.classList.add('btn-success');
                console.log(button.classList)
            }
        }
    });
</script>