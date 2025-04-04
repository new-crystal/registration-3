<!-- 메인 페이지일 경우 class="main" 추가 -->
<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>

@font-face {
        font-family: Gong;
        src: url("../../../assets/font/Gong_Gothic_OTF_Bold.otf");
    }


    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translate3d(0, 100%, 0);
        }

        to {
            opacity: 1;
            transform: translateZ(0);
        }
    }


    body {
        font-family: 'Roboto', sans-serif;
    }

    input #accessForm {
        padding: 0 3rem;
        /* height: 60%; */
    }

    #qrcode:focus {
        outline: none;
    }

    .qr_info_wrap {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 5.5rem;
        /* border: 1px solid #eee; */
        margin: 1rem auto;
        font-weight: 500;
        font-size: 2.5rem;
    }

    .info_name {
        width: 33%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: rgb(49 46 129);
        color: white;

    }

    /* .info_content {
        width: 66%;
        height: 100%;
         border: 2px solid rgb(49 46 129);
    } */

    .info_content>input {
        /* margin-left: 139px;
        margin-top: 10px; */
        width: 846px;
        height: 113px;
        padding: 0 2rem;
        z-index: 999;
        /* transform: translate(-63px, 91px); */
    }

    input {
        /* background-color: orange; */
        background-color: transparent;
        font-size: 3rem;
        font-family: 'Roboto', sans-serif !important;
        font-weight: 700;
    }

    input::placeholder {
        font-weight: bold;
        opacity: 0.5;
    }


    .info_content>input:focus {
        outline: none
    }

    #text_box {
        font-size: 1.88rem;
    }

    .fresh {
        width: 152%;
        height: 291px;
        /* background-color: #ddd; */
        transform: translate(71px, 114px);
    }

    .input_box {
        transform: translate(1px, -92px);
    }

    /* .alert {
        width: 500px;
        height: 200px;
        background: #f9a21b;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #FFF;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 32px;
    }

    .alert>p {
        font-size: 3rem;
        font-weight: 700;
        position: relative;
        animation: fadeInUp 1s;
    } */
    .alert {
        width: 100%;
        height: 260px;
        background: #ffc425;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: #FFF;
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
        opacity: 0.85;
        z-index: 999;
    }

    .no_alert{
        width: 100%;
        height: 210px;
        background: rgba(255,0,0,0.85);
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
        /* opacity: 0.85; */
        color: #fff;
    }

    .alert>p, .no_alert > p {
        font-size: 8.5rem;
        font-weight: 700;
        position: relative;
        /* animation: fadeInUp 1s; */
        font-family: Gong;
        -webkit-text-stroke-width: 5px;
        -webkit-text-stroke-color: #004471;
    }

    .alert>h6 {
        font-size: 2.5rem;
        font-weight: 600;
        position: relative;
        /* animation: fadeInUp 1s; */
        font-family: Gong;
        -webkit-text-stroke-width: 3px;
        -webkit-text-stroke-color: #004471;
        }

        .input_wrap{
            transform: translate(78px, 594px);
        }

        .no_alert > p {
            font-size: 6rem;
        }

</style>

<body id="body" class="flex items-center justify-center">
    <div id="container" class="w-full h-full flex items-center overflow-hidden">
        <div class="alert" style="display:none;">
            <p class="alert_text">Attendance Checked!</p>
            <h6 class="alert_text">예상 평점 <?php echo $score ?>점</h6>
        </div>
        <div class="no_alert" style="display:none;">
            <p class="no_alert_text">Please check the QR code.</p>
        </div>
        <div class="h-full">
            <div>
                <div>
                    <img src="../../assets/images/row_app_loading_bg2024.jpg" style="position: absolute;z-index: -999;width: 1920px;top:0;left:0;" />
                    
                    <dl>
                    <script type="text/javascript">
                        $(function() {
                            $("#accessForm").submit(function() {
                                if (!$.trim($("#qrcode").val())) {
                                    alert("QR CODE를 입력하세요.");
                                    $("#qrcode").focus();
                                    return false;
                                }
                                convertToEnglish();
                                $("#accessForm").attr("action", "/access/row_scan_qr");

                                return true;
                            });
                        });
                        </script>
                        <div class="input_box">
                        <?php echo form_open('/access/row_scan_qr', 'id="accessForm" name="accessForm"') ?>
                            <fieldset>
                                <div>
                                    <div>
                                    <dl class="pl-2">
                                        <dd>
                                            <input type="text" name="qrcode" id="qrcode" class="h-20  px-3 py-3 mt-5 mx-auto" placeholder="" autofocus autocomplete='off'>
                                        </dd>
                                    </dl>
                                <div>
                             <div class="flex w-[1750px] h-[330px] items-center justify-between input_wrap">
                                <div class="h-full flex flex-col  items-center justify-between">
                                    <dl class="pl-2">
                                        <div id="qr_nick_name" class="qr_info_wrap">
                                            <div class="info_content"><input type="text" class="qr_info input name" value="<?php if (isset($first_name)) echo $first_name . ' ' . $last_name ?>" readonly  autocomplete='off' placeholder="First Name Last Name">
                                            </div>
                                        </div>
                                    </dl>

                                    <dl class="pl-2">
                                        <div id="qr_org" class="qr_info_wrap">
                                            <div class="info_content"><input type="text" class="qr_info input org" value="<?php if (isset($entrance_org)) echo $entrance_org; ?>" readonly  autocomplete='off' placeholder="Affiliation">
                                            </div>
                                        </div>
                                    </dl>
                                </div>
                                <div>
                                        <dl class="pl-2 h-full flex flex-col  items-center justify-between">
                                            <div id="qr_entrance" class="qr_info_wrap">
                                                <div class="info_content">
                                                    <input type="text" class="qr_info input" value="<?php if (isset($enter)) { $enter = date("Y-m-d H:i", strtotime($enter));echo $enter;} ?> " readonly  autocomplete='off' placeholder="YYYY-MM-DD HH:MM">
                                                </div>

                                            </div>
                                            <div id="qr_exit" class="qr_info_wrap">
                                                <div class="info_content">
                                                    <input type="text" class="qr_info input" value="<?php if (isset($leave)) {$leave = date("Y-m-d H:i", strtotime($leave));echo $leave;} ?>" readonly  autocomplete='off' placeholder="YYYY-MM-DD HH:MM">
                                                </div>
                                            </div>
                                        </dl>
                                    </div>
                                </div>
                                </div>
                                </div>
                            </fieldset>
                            <div class="w-full flex items-center justify-center">
                                    <button type="submit" value="등록"
                                        class="btnPoint w-full flex items-center justify-center"
                                        style=" transform: translate(55px,434px);"></button>
                                </div>
                            </form>
                            <script type="text/javascript">
                                window.scrollTo(0, document.body.scrollHeight);
                                $("#qrcode").focus();
                                $(document).ready(function() {
                                    setTimeout(function() {
                                        $('.qr_info input').val('');
                                        $('.qr_txt').hide();
                                        $("#qrcode").focus();
                                    }, 10000);
                                })
                                const qrcode = document.querySelector("#qrcode");
                                const accessForm = document.querySelector("#accessForm")
                                accessForm.addEventListener("submit", (e) => {
                                    // e.preventDefault();
                                    convertToEnglish();
                                    qrcode.value.replace(/ /g, "")
                                })
                            </script>
                        </div>
                    </dl>
                </div>
            </div>
    </div>

</body>
<script>
    const inputs = document.querySelectorAll(".qr_info");
    const qrcodeInput = document.querySelector("#qrcode");
    const freshBtn = document.querySelector(".fresh")
    const body = document.querySelector("#body")
    const alert = document.querySelector(".alert")
    const alertText = document.querySelector(".alert_text")
    const noAlert = document.querySelector(".no_alert")
    const noAlertText = document.querySelector(".no_alert_text")
    const name = document.querySelector(".name")
    let textTime;
    let alertTime;


    body.addEventListener("click", () => {
        qrcodeInput.focus()
    })

    function checkAlert() {
        if (name.value !== "") {
            alert.style.display = "";
            noAlert.style.display = "none";
        } else {
            alert.style.display = "none";
            noAlert.style.display = "";
        }
    }


    // freshBtn.addEventListener("touchstart", () => {
    //     window.location.reload()
    // })

    qrcodeInput.addEventListener("input", (e) => {
        // 입력된 값에서 공백 제거
        const newValue = e.target.value.replace(/\s+/g, "");

        // 입력된 값 업데이트
        e.target.value = newValue;
    })

    window.onload = () => {
        qrcodeInput.focus()
        clearTimeout(alertTime);
        clearTimeout(textTime)
        checkAlert()
        alertTime = setTimeout(() => {
            alert.style.display = "none";
            noAlert.style.display = "none";
        }, 3000)
        inputs.forEach((input) => {
            textTime = setTimeout(() => {
                input.value = "";
                alert.style.display = "none";
                noAlert.style.display = "none";
            }, 10000)
        })
    }



    

       // 한글 음절 및 개별 자모에 대한 영문 자판 매핑
       const initialConsonant = ['r', 'R', 's', 'e', 'E', 'f', 'a', 'q', 'Q', 't', 'T', 'd', 'w', 'W', 'c', 'z', 'x', 'v', 'g'];
    const medialVowel = ['k', 'o', 'i', 'O', 'j', 'p', 'u', 'P', 'h', 'hk', 'ho', 'hl', 'y', 'n', 'nj', 'np', 'nl', 'b', 'm', 'ml', 'l'];
    const finalConsonant = ['', 'r', 'R', 'rt', 's', 'sw', 'sg', 'e', 'f', 'fr', 'fa', 'fq', 'ft', 'fx', 'fv', 'fg', 'a', 'q', 'qt', 't', 'T', 'd', 'w', 'c', 'z', 'x', 'v', 'g'];

    // 개별 자음과 모음에 대한 매핑 (분리된 상태로 입력된 경우 처리)
    const singleConsonantMap = {
      'ㄱ': 'r', 'ㄲ': 'R', 'ㄴ': 's', 'ㄷ': 'e', 'ㄸ': 'E', 'ㄹ': 'f', 'ㅁ': 'a',
      'ㅂ': 'q', 'ㅃ': 'Q', 'ㅅ': 't', 'ㅆ': 'T', 'ㅇ': 'd', 'ㅈ': 'w', 'ㅉ': 'W',
      'ㅊ': 'c', 'ㅋ': 'z', 'ㅌ': 'x', 'ㅍ': 'v', 'ㅎ': 'g'
    };
    
    const singleVowelMap = {
      'ㅏ': 'k', 'ㅐ': 'o', 'ㅑ': 'i', 'ㅒ': 'O', 'ㅓ': 'j', 'ㅔ': 'p',
      'ㅕ': 'u', 'ㅖ': 'P', 'ㅗ': 'h', 'ㅘ': 'hk', 'ㅙ': 'ho', 'ㅚ': 'hl',
      'ㅛ': 'y', 'ㅜ': 'n', 'ㅝ': 'nj', 'ㅞ': 'np', 'ㅟ': 'nl', 'ㅠ': 'b',
      'ㅡ': 'm', 'ㅢ': 'ml', 'ㅣ': 'l'
    };

    // 한글 음절을 자모로 분리하는 함수
    function decomposeHangul(syllable) {
      const hangulBase = 44032; // '가'의 유니코드 값
      const initialBase = 588;  // 초성 범위
      const medialBase = 28;    // 중성 범위

      const code = syllable.charCodeAt(0) - hangulBase;

      const initialIdx = Math.floor(code / initialBase);
      const medialIdx = Math.floor((code % initialBase) / medialBase);
      const finalIdx = code % medialBase;

      return [initialIdx, medialIdx, finalIdx];
    }


    // 한글 음절과 개별 자모를 모두 처리하여 영어 자판에 맞게 변환하는 함수
    function convertToEnglish() {
      const input = document.getElementById('qrcode').value;
      let result = '';

      for (let char of input) {
        const code = char.charCodeAt(0);

        // 한글 음절인지 확인
        if (code >= 44032 && code <= 55203) {
          const [initialIdx, medialIdx, finalIdx] = decomposeHangul(char);
          result += initialConsonant[initialIdx] + medialVowel[medialIdx] + finalConsonant[finalIdx];
        } 
        // 개별 자음 처리
        else if (singleConsonantMap[char]) {
          result += singleConsonantMap[char];
        } 
        // 개별 모음 처리
        else if (singleVowelMap[char]) {
          result += singleVowelMap[char];
        } 
        // 한글이 아닌 문자는 그대로 출력
        else {
          result += char;
        }
      }

      document.getElementById('qrcode').value = result;
    }


    
    /**우클릭 방지 */
    document.addEventListener("contextmenu", function(event) {
        event.preventDefault();
    }, false);
</script>