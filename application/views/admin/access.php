<?php
$firstName = "";
$lastName = "";
if (isset($user['first_name'])) {
    $firstName = $user['first_name'];
}
if (isset($user['last_name'])) {
    $lastName = $user['last_name'];
}
$en_name = $firstName . " " . $lastName
?>

<script src="https://cdn.tailwindcss.com"></script>
<script type="text/javascript" src="/assets/js/admin/lecture_history.js"></script>
<style>
    .qr-info-table {
        margin-top: 1rem;
        border: 2px solid #eee;
        border-collapse: collapse;
        width: 40%;
    }

    .qr-info-table th {
        background-color: #1d3557;
        border-color: #1d3557;
        color: #fff !important;
        font-size: 1.7rem;
        line-height: 2.5rem;
        font-weight: 600;
    }

    .qr-info-table>tr,
    .qr-info-table th {
        border: 2px solid #eee;
        text-align: center;
        font-size: 1.25rem;
        line-height: 2.5rem;
    }

    .qr-info-table td {
        border: 1px solid #eee;
        text-align: left;
        font-size: 1.5rem;
        line-height: 2.5rem;
        padding-left: 4rem;
        /* display: flex; */
        align-items: center;
        /* height: 4rem; */
        font-weight: bold;
    }

    .qr-info-table tr {
        height: 4rem;
        padding: 4px;
    }

    #open {
        background-color: #1d3557;
        float: right;
    }

    .notice {
        width: 500px;
        padding: 4px;
        background-color: #ffbe0b;
    }

    .memoHeader {
        background-color: #fb8500 !important;
    }

    .access_btn{
        position:absolute;
        bottom:150px;
        left:50%;
        transform: translateX(-50%);
        width: 150px;
        height: 50px;
        background-color: orange;
        font-size: 20px;
        font-weight: 800;
    }

    .access_btn:hover{
        background-color: orangered;
    }
</style>

<div class="page-container">
    <div class="page-content">
        <!-- <div class="page-header">
            <div class="page-header-content">
                <div class="page-title flex items-center justify-between">
                    <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">QR code 등록</span>
                    </h4>
                </div>
            </div>
        </div> -->
        <div class="content">
            <div class="panel panel-flat">
                <div>
                    <div id="notice">
                        <?php
                        foreach ($notice as $item) {
                            echo '<input class="notice" value="' .  $item['notice'] . '" readonly/>';
                        } ?>

                    </div>
                    <button class="w-[150px] h-[40px] bg-slate-300 mt-20 hover:bg-slate-400 active:bg-slate-500" type="button" id="open">새창</button>
                </div>
                <form action="/admin/access" id="qr_form" name="qr_form" class="w-full h-[88vh] flex flex-col items-center justify-center bg-slate-50">

                    <div class="w-2/5 flex flex-col items-center justify-center">
                        <h1 class="text-5xl mt-32 font-semibold ">QR CODE 입력 </h1>
                        <div class="w-[850px] flex justify-between">
                            <input id="qrcode_input" name="qrcode" class="w-[400px] h-[50px] mt-20 p-3 " type="text" autofocus placeholder="출결 확인해주세요!!" />
                            <button class="w-[150px] h-[40px] bg-slate-300 mt-20 mb-20 hover:bg-slate-400 active:bg-slate-500 text-black" type="submit" id="submit">등록</button>
                            <button class="w-[150px] h-[40px] bg-indigo-950 mt-20 mb-20 hover:bg-slate-300 active:bg-slate-300 text-white" type="button" id="memo_btn">메모</button>
                        </div>
                    </div>

                    <!-- <div class="w-3/5 h-[1px] bg-slate-400 translate-y-24"></div> -->
                    <div class="w-full bg-white flex items-left justify-around">
                        <table class="qr-info-table mb-80 w-2/5" id="qrTable">
                            <colgroup>
                                <col width="30%" />
                                <col />
                            </colgroup>
                            <tr>
                                <th>등록번호</th>
                                <td id="number" class="qr_text">
                                    <?php if (isset($user['registration_no'])) echo $user['registration_no'] ?>
                                </td>
                            </tr>
                            <tr>
                                <th>성함(E)</th>
                                <td id="en_name" class="qr_text">
                                    <?php echo isset($user['first_name']) ? $user['first_name'] . " " . $user['last_name'] : ''; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>성함(K)</th>
                                <td id="name" class="qr_text">
                                    <?php if (isset($user['name_kor'])) echo $user['name_kor'] ?></td>
                            </tr>
                            <tr>
                                <th>국적</th>
                                <td id="nation" class="qr_text">
                                    <?php if (isset($user['nation'])) echo $user['nation'] ?></td>
                            </tr>
                            <tr>
                                <th>소속(E)</th>
                                <td id="affiliation" class="qr_text">
                                    <?php if (isset($user['affiliation'])) echo $user['affiliation'] ?></td>
                            </tr>
                            <tr>
                                <th>참가자 유형</th>
                                <td id="member_type" class="qr_text">
                                    <?php if (isset($user['member_type'])) echo $user['member_type']; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>등록비</th>
                                <td id="fee" class="qr_text">
                                    <?php if (isset($user['fee'])) echo $user['fee'] ?></td>
                            </tr>
                        </table>
                        <table class="qr-info-table mb-80 w-2/5" id="qrTable">
                            <colgroup>
                                <col width="30%" />
                                <col />
                            </colgroup>
                            <tr>
                                <th class="memoHeader">하단택</th>
                                <td id="attendance_type" class="qr_text">
                                    <?php if (isset($user['attendance_type'])) echo $user['attendance_type'] ?></td>
                            </tr>
                            <tr>
                                <th class="memoHeader">Special meal request</th>
                                <td id="special_request_food" class="qr_text">
                                    <?php if (isset($user['special_request_food'])) echo $user['special_request_food'] ?>
                                </td>
                            </tr>
                            <tr>
                                <th class="memoHeader">remark1</th>
                                <td id="remark1" class="qr_text">
                                    <?php if (isset($user['remark1'])) echo $user['remark1'] ?>
                                </td>
                            </tr>
                            <tr>
                                <th class="memoHeader">remark2</th>
                                <td id="remark2" class="qr_text">
                                    <?php if (isset($user['remark2'])) echo $user['remark2'] ?>
                                </td>
                            </tr>
                            <tr>
                                <th class="memoHeader">remark3</th>
                                <td id="remark3" class="qr_text">
                                    <?php if (isset($user['remark3'])) echo $user['remark3'] ?>
                                </td>
                            </tr>

                            <tr>
                                <th class="memoHeader">remark4</th>
                                <td id="remark4" class="qr_text">
                                    <?php if (isset($user['remark4'])) echo $user['remark4'] ?>
                                </td>
                            </tr>
                            
                            <tr>
                                <th class="memoHeader">remark5</th>
                                <td id="remark5" class="qr_text">
                                    <?php if (isset($user['remark5'])) echo $user['remark5'] ?>
                                </td>
                            </tr>
                            <tr>
                                <th class="memoHeader">메모</th>
                                <td id="memo" class="qr_text">
                                    <?php
                                        if (isset($user['memo'])) {
                                            echo $user['memo'] == 'null' ? "" : $user['memo'];
                                        }
                                    ?>
                                </td>   
                            </tr>
                        </table>
                    </div>
                </form>
                <button onclick="saveTime()" class="access_btn">출결</button>
            </div>
        </div>
    </div>
</div>
<!-- <div class="footer text-muted mt-20">
    © 2023. <a href="#">온라인 학술대회</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">(주)인투온</a>
</div> -->

</div>
<!-- /page content -->

</div>
<!-- /page container -->

<script>
    const form = document.querySelector("#qr_form");
    const qrcode = document.querySelector("#qrcode_input");
    const submit = document.querySelector("#submit");
    const qrTexts = document.querySelectorAll(".qr_text")
    const table = document.querySelector(".qr-info-table")
    const open = document.querySelector("#open")
    const name = document.querySelector("#name")
    const enName = document.querySelector("#en_name")
    const nation = document.querySelector("#nation")
    const affiliation = document.querySelector("#affiliation")
    const affiliation_kor = document.querySelector("#affiliation_kor")
    const ksso_member_status = document.querySelector("#ksso_member_status")
    const attendance_type = document.querySelector("#attendance_type")
    const category = document.querySelector("#member_type")
    // const member_type_s = document.querySelector("#member_type_s")
    const deposit = document.querySelector("#deposit")
    const fee = document.querySelector("#fee")
    const is_score = document.querySelector("#is_score")
    const memo = document.querySelector("#memo")
    const number = document.querySelector("#number")
    const remark1 = document.querySelector("#remark1")
    const remark2 = document.querySelector("#remark2")
    const remark3 = document.querySelector("#remark3")
    const remark4 = document.querySelector("#remark4")
    const remark5 = document.querySelector("#remark5")
    const special_request_food = document.querySelector("#special_request_food")
    // const remark6 = document.querySelector("#remark6")
    // const remark7 = document.querySelector("#remark7")
    // const remark8 = document.querySelector("#remark8")
    const memoBtn = document.querySelector("#memo_btn")
    const content = document.querySelector(".content")
    const notice = document.querySelector("#notice")
    const attendance_date = document.querySelector("#attendance_date")
    var childWindow;
    let popUpWindow;
    let qrvalue = "";
    let bc = "";

    content.addEventListener("click", () => {
        qrcode.focus();
    })

    qrcode.focus();

    function whiteBackGrond() {
        memo.style.backgrond = "#FFF"
    }

    function copy(text) {
        if (navigator.clipboard) {
            navigator.clipboard
                .writeText(text)
                .then(() => {
                    // alert('클립보드에 복사되었습니다.');
                })
                .catch(() => {
                    // alert('복사를 다시 시도해주세요.');
                });
        }
    }

    function changeBackgroundColorIfNotEmpty(element) {
        if (element.innerText !== "" && element.innerText !== "N") {
            element.style.backgroundColor = "#ffe566";
        } else {
            element.style.backgroundColor = "#fff";
        }
    }

    function openQR() {
        const url = `/qrcode/open`
        if (childWindow && !childWindow.closed) {
            childWindow = null;
        } else {
            childWindow = window.open(url, 'ChildWindow', 'width=400,height=300');
        }
    }

    function popUp(id) {
        const url = `/qrcode/pop_up?n=${id}`
        if (popUpWindow && !popUpWindow.closed) {
            popUpWindow = null;
        } else {
            popUpWindow = window.open(url, 'popUpWindow', 'width=500,height=500');
            popUpWindow.addEventListener("unload", () => {
                qrcode.focus();
            })
        }
    }


    form.addEventListener("submit", (e) => {
        e.preventDefault();
        convertToEnglish();
        qrvalue = qrcode.value
        qrvalue = qrcode.value.replace(/\s/g, "");
        fetchData(qrvalue)
        qrcode.value = "";
        qrcode.focus();
    })

    function fetchData(qrcode) {
        // Ajax 요청 수행
        executeFunctionInChildWindow(qrcode);
        fetch(`/admin/access?qrcode=${qrcode}`)
            .then(response => response.text())
            .then((data) => {
                const parser = new DOMParser();
                const htmlDocument = parser.parseFromString(data, 'text/html');
                console.log(htmlDocument)
                if (htmlDocument.querySelector("#number").innerText) {
                    number.innerText = htmlDocument.querySelector("#number").innerText.replace(/<br\s*\/?>/gi, "")
                        .trim();
                    enName.innerText = htmlDocument.querySelector("#en_name").innerText.replace(/<br\s*\/?>/gi, "")
                        .trim();
                    name.innerText = htmlDocument.querySelector("#name").innerText.replace(/<br\s*\/?>/gi, "")
                        .trim();
                    nation.innerText = htmlDocument.querySelector("#nation").innerText.replace(/<br\s*\/?>/gi, "")
                        .trim();
                    affiliation.innerText = htmlDocument.querySelector("#affiliation").innerText.replace(/<br\s*\/?>/gi,
                            "")
                        .trim();
                    attendance_type.innerText = htmlDocument.querySelector("#attendance_type").innerText.replace(
                            /<br\s*\/?>/gi, "")
                        .trim();
                    category.innerText = htmlDocument.querySelector("#member_type").innerText.replace(
                            /<br\s*\/?>/gi, "")
                        .trim();
                    fee.innerText = htmlDocument.querySelector("#fee").innerText.replace(/<br\s*\/?>/gi, "")
                        .trim();
                    special_request_food.innerText = htmlDocument.querySelector("#special_request_food").innerText
                        .replace(/<br\s*\/?>/gi,
                            "")
                        .trim();
                    memo.innerText = htmlDocument.querySelector("#memo").innerText.replace(/<br\s*\/?>/gi, "")
                        .trim();
                    remark1.innerText = htmlDocument.querySelector("#remark1").innerText.replace(/<br\s*\/?>/gi, "")
                        .trim();
                    remark2.innerText = htmlDocument.querySelector("#remark2").innerText.replace(/<br\s*\/?>/gi, "")
                        .trim();
                    remark3.innerText = htmlDocument.querySelector("#remark3").innerText.replace(/<br\s*\/?>/gi,
                            "")
                        .trim();
                    remark4.innerText = htmlDocument.querySelector("#remark4").innerText.replace(/<br\s*\/?>/gi, "")
                        .trim();
                    remark5.innerText = htmlDocument.querySelector("#remark5").innerText.replace(/<br\s*\/?>/gi, "")
                        .trim();
                    notice.innerHTML = htmlDocument.querySelector("#notice").innerHTML
                } else {
                    number.innerText = qrvalue
                    name.innerText = "없는 QR입니다."
                    org.innerText = ""
                    category.innerText = ""
                    etc1.innerText = ""
                    throw new Error("없는 QR입니다.");
                }
            }).then(() => {
                window.open(`https://reg3.webeon.net/qrcode/print_file?registration_no=${qrvalue}`, "_blank")
            }).then(() => {

                changeBackgroundColorIfNotEmpty(memo);
                changeBackgroundColorIfNotEmpty(remark1);
                changeBackgroundColorIfNotEmpty(remark2);
                changeBackgroundColorIfNotEmpty(remark3);
                changeBackgroundColorIfNotEmpty(remark4);
                changeBackgroundColorIfNotEmpty(special_request_food);
                changeBackgroundColorIfNotEmpty(remark5);

            })
            .catch(error => {
                console.error('Error fetching data:', error);
            });
    }

    function executeFunctionInChildWindow(data) {
        bc = new BroadcastChannel("test_channel");
       
        bc.postMessage({
            qrcode: data
        });
        
    }

    // function executeFunctionInChildWindow(data) {

    //     if (childWindow && !childWindow.closed) {
    //         childWindow.postMessage({
    //             qrcode: data
    //         }, '*');
    //     } else {

    //     }
    // }

    // 자식 창으로부터의 메시지를 받아 처리하는 함수
    function receiveMessage(event) {
        if (event.data === "child") {

        }
    }


    function hideText() {
        qrTexts.forEach((text) => {
            text.textContent = "";
        })
    }

    open.addEventListener("click", () => {
        openQR()
    })

    // 메시지 이벤트 리스너 등록
    window.addEventListener('message', (e) => {
        // childWindow = null;
        receiveMessage(e)
    }, false);

    function saveTime(){
        console.log(qrvalue)
        
        const url = "/access/add_record"
        const data = {
            reg_no : qrvalue
        }
        if(qrvalue){
            $.ajax({
                type: "POST",
                url : url,
                data: data,
                success: function(result){
                    //console.log(result)
                    alert('출결시간이 변경되었습니다.');
                    // window.location.reload()
                    bc.postMessage({
                        qrcode: qrvalue,
                        type:2
                    });
                },
                error:function(e){  
                    console.log(e)
                    alert("현장등록 이슈가 발생했습니다. 관리자에게 문의해주세요.")
                }
            })  
        }
    }


    window.onload = () => {
        whiteBackGrond()
        if (qrvalue) {
            number.innerText = qrvalue
        }
    }

    memoBtn.addEventListener("click", () => {
        const registerNum = number.innerText;
        const url = `/admin/memo?n=${registerNum}`;
        if (registerNum) {
            const memoWindow = window.open(url, "Certificate", "width=500, height=300, top=30, left=30");

            window.addEventListener("message", (event) => {
                if (event.source === memoWindow) {
                    const childInputValue = event.data;
                    memo.innerText = childInputValue;
                }
            });
        }
    })


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
      const input = document.getElementById('qrcode_input').value;
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

      document.getElementById('qrcode_input').value = result;
    }
</script>
</body>