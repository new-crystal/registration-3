
<style>
    #modal{
        background-color: #FFF;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 9999999999;
    }
    table th, table td{
        word-break: keep-all;
        text-align: center;
        font-size: 14px;
        padding: 8px;
        /* font-size: 0.875rem; 14px */
        line-height: 1.4; /* 20px */
    }

    .button{
        background-color: #ddd;
        padding: 4px 8px;
    }

    .title_box{
        /* width: 400px;
        overflow: hidden; */
        /* white-space: nowrap; */
        text-overflow: ellipsis;
        word-break: break-all;
        cursor: pointer;
        text-align: left;
        line-height: 1.4;
    }

    .modal_background{
        width: 100%;
        height: calc(100% + 125px);
        position: absolute;
        top: -125px;
        left: 0;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 9999999;
    }

    #pdf_viewer{
        width: 70%;
        height: 80%;
        position: absolute;
        top: 45%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 9999999999;
        overflow: hidden;
        /* padding-top: 56.25%; */
    }

    #pdf_viewer img{
        width:100%;
        /* height: 100%; */
    }

    #pdf_viewer .close_pdf {
        position: absolute;
        z-index: 9999999999;
        right: 4px;
        top: -2px;
        color: #FFF;
        font-weight: 700;
        font-size:18px;
    }
    #pdf_viewer .carousel{
        width: 100%;
        height: 100%;
        position: absolute;
        top:30px;
        overflow: scroll;
        padding-bottom: 35px;
    }

    .submit_noti{
        text-align: center;
        color: red;
        font-weight: 700;
        margin-top: 20px;
        line-height: 1.6;
    }

  
    /* ( 크롬, 사파리, 오페라, 엣지 ) 동작 */
    .carousel::-webkit-scrollbar {
    display: none;
    }

    .carousel {
    -ms-overflow-style: none; /* 인터넷 익스플로러 */
    scrollbar-width: none; /* 파이어폭스 */
    }

    .tooltip_box{
        position: absolute;
        right: -140px;
        top: 39px;
        background-color: rgb(225 29 72);
        padding: 16px;
        border-radius: 8px;
        color: wheat;
    }

    .tooltip_box::after {
        position: absolute;
        left: 22px;
        top: 44px;
        content: '';
        width: 15px;
        height: 15px;
        border-top: 5px solid rgb(225 29 72);
        border-right: 5px solid rgb(225 29 72);
        transform: rotate(135deg);
        background-color: rgb(225 29 72);
    }

    *{
        user-select: none;
        word-break: keep-all;
    }

    .point{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .point > select{
        z-index: 999999999;
    }
</style>

<script src="https://cdn.tailwindcss.com"></script>
<script>
       //점수 합계 구하는 함수
   function getSum(){

        //getPoint();

        const value1 =  select1.options[select1.selectedIndex].value;
        const value2 =  select2.options[select2.selectedIndex].value;
        const value3 =  select3.options[select3.selectedIndex].value;
        const value4 =  select4.options[select4.selectedIndex].value;
        const value5 =  select5.options[select5.selectedIndex].value;
        const value6 =  select6.options[select6.selectedIndex].value;

        //select1.options[select1.selectedIndex].value = "1.1점";

        const sumTd = document.querySelector("#sum");

        completedBtn.classList.add("bg-blue-500");
        completedBtn.classList.add("text-white");
        
        if(value5 === "N" && value6 === "N"){
            sumTd.innerText = value1*1 + value2*1 + value3*1 + value4*1;
        }else if(value5 === "Y" || value6 === "Y"){
            sumTd.innerText = 0;
        }
   }

</script>
<?php
$type_text = "";
$category_text = "";

 //print_r($abstract[0]['type']);
// print_r($reviewer);

$sliced_code = explode("-", $reviewer['code'])[0];

// $type = $sliced_code[0];
$type = $abstract[0]['type'];
switch ($type) {
	case 0:
		$type_text = "Oral";
		break;
	case 1:
		$type_text = "Poster oral I";
		break;
	case 2:
		$type_text = "Poster oral II";
		break;
}

// $category = $sliced_code[2];
$category = $abstract[0]['category'];
switch ($category) {
	case 1:
    case 6:
		$category_text = "Diabetes/Obesity/Lipid (clinical)";
		break;
	case 2:
    case 7:
		$category_text = "Diabetes/Obesity/Lipid (basic)";
		break;
	case 3:
    case 8:
		$category_text = "Thyroid";
		break;
	case 4:
    case 9:
		$category_text = "Bone/Muscle";
		break;
	case 5:
    case 10:
		$category_text = "Pituitary/Adrenal/Gonad";
		break;
}
// print_r($pre_score)
?>

<div class="w-full h-screen flex items-center justify-center flex-col px-10">
    
    <h1 class="font-semibold text-3xl font-sans"><?php echo $type_text; ?> 심사표</h1>
    <div class="mt-10 w-full">
        <table class="border border-solid w-full">
            <colgroup>
                <col width="33.3%">
                <col>
                <col>
            </colgroup>
            <tr class="border border-solid">
                <td class="border border-solid py-6 px-4 bg-slate-200" colspan="3">심사위원 정보</td>
            </tr>
            <tr class="*:border *:border-solid *:py-6 *:px-4 *:bg-slate-500 *:text-white *:font-semibold">
                <td>파트구분</td>
                <td>성함</td>
                <td>소속</td>
            </tr>
            <tr>
                <input id="reviewer_idx" value="<?php echo $reviewer['idx']; ?>" hidden/>
                <td class="border border-solid py-2 px-4"> <div class="text_box"><?php echo $category_text; ?></div> </td>
                <td class="border border-solid py-2 px-4"> <?php echo $reviewer['nick_name']; ?> </td>
                <td class="border border-solid py-2 px-4"> <?php echo $reviewer['org']; ?> </td>
            </tr>
        </table>
    </div>
    <div class="mt-20 w-full mx-auto">
        <table class="border border-solid w-full">
            <tr class="border border-solid *:bg-slate-500 *:text-white *:font-semibold *:border *:border-solid *:p-2">
                <td>No.</td>
                <td>Abstract No.</td>
                <td>Presenter Name</td>
                <td>Affiliation</td>
                <td>Country</td>
                <td>Abstract Title</td>
                <td></td>
            </tr>
            <?php 
            $index = 0;
            foreach($abstract as $item){ 
                ?>
                <tr class="*:border *:border-solid *:p-2">
                    <td><?php echo $index + 1 ?></td>
                    <td><?php echo $item['submission_code'];?></td>
                    <td><?php echo $item['nick_name'];?></td>
                    <td><?php echo $item['org'];?></td>
                    <td><?php echo $item['nation'];?></td>
                    <td><div class="title_box text-blue-700 decoration-blue-700 break-keep" data-id="<?php echo $item['submission_code'];?>"  data-leng="<?php echo $item['etc1'];?>"><?php echo $item['title'];?></div></td>
                    <td><button class="rating button p-2" id="<?php echo $index;?>" data-id="<?php echo $item['idx'];?>">심사하기</button></td>
                </tr> 
                <?php
                $index++; 
            } ?>
           
        </table>
    </div>

    <div class="modal_background" style="display: none;"></div>
    <div id="modal" style="display: none;" class="p-4 w-3/5 h-fit">
        <table class="w-full">
            <tr class="*:border *:border-solid *:py-2 *:px-4">
                <th>연구의 창의성<br/>(1점~10점)</th>
                <th>방법의 타당성<br/>(1점~10점)</th>
                <th>결과의 영향력<br/>(1점~10점)</th>
                <th>발표의 우수성<br/>(1점~10점)</th>
                <th>COI</th>
                <th>심사 제외</th>
                <th>총점<br/>(40점)</th>
                <th>심사완료</th>
            </tr>
            <tr>
                <td class="border border-solid py-2 px-4">
                    <select id="select1" onchange="getSum()">
                    <option value="1" selected>1점</option>
                        <option value="2">2점</option>
                        <option value="3">3점</option>
                        <option value="4">4점</option>
                        <option value="5">5점</option>
                        <option value="6">6점</option>
                        <option value="7">7점</option>
                        <option value="8">8점</option>
                        <option value="9">9점</option>
                        <option value="10">10점</option>
                    </select>
                </td>
                <td class="border border-solid py-2 px-4">
                <select id="select2" onchange="getSum()">
                        <option value="1" selected>1점</option>
                        <option value="2">2점</option>
                        <option value="3">3점</option>
                        <option value="4">4점</option>
                        <option value="5">5점</option>
                        <option value="6">6점</option>
                        <option value="7">7점</option>
                        <option value="8">8점</option>
                        <option value="9">9점</option>
                        <option value="10">10점</option>
                    </select>
                </td>
                <td class="border border-solid py-2 px-4">
                <select id="select3" onchange="getSum()">
                        <option value="1" selected>1점</option>
                        <option value="2">2점</option>
                        <option value="3">3점</option>
                        <option value="4">4점</option>
                        <option value="5">5점</option>
                        <option value="6">6점</option>
                        <option value="7">7점</option>
                        <option value="8">8점</option>
                        <option value="9">9점</option>
                        <option value="10">10점</option>
                    </select>
                </td>
                <td class="border border-solid py-2 px-4">
                    <select id="select4"  onchange="getSum()">
                        <option value="1" selected>1점</option>
                        <option value="2">2점</option>
                        <option value="3">3점</option>
                        <option value="4">4점</option>
                        <option value="5">5점</option>
                        <option value="6">6점</option>
                        <option value="7">7점</option>
                        <option value="8">8점</option>
                        <option value="9">9점</option>
                        <option value="10">10점</option>
                    </select>
                </td>
                <td class="border border-solid py-2 px-4">
                    <select id="select5"  onchange="getSum()" >
                        <option value="N" selected>X</option>
                        <option value="Y">O</option>
                    </select>
                </td>
                <td class="border border-solid py-2 px-4">
                    <select id="select6"  onchange="getSum()" >
                        <option value="N" selected>X</option>
                        <option value="Y">O</option>
                    </select>
                </td>
                <td class="border border-solid py-2 px-4" id="sum">4</td>
                <td class="border border-solid py-2 px-4">
                    <div class="tooltip_box animate-bounce" style="opacity: 0; display:none;">
                        <p>심사완료 버튼을 눌러주세요.</p>
                    </div>
                    <button id="completed" class="button">확인</button>
                </td>
            </tr>
        </table>
        <div class="*:p-2">
            <h6 class="font-semibold">[현장 심사 안내]</h6>
            <p>1. 초록의 발표자 또는 공저자인 경우 COI에 O로 체크하신 후 해당 초록에 대한 심사는 심사에서 제외하여 주십시오.</p>
            <p>2. 각 심사 항목은 각각 10점 만점입니다. 각 항목의 중간 점수를 5점으로 고려하시어 심사를 진행하여 주십시오.</p>
            <p>3. 동점자 최소화를 위해 변별력 있게 점수를 부여해 주십시오.</p>
            <!-- [240412] sujeong / 학회팀 요청 주석 -->
            <!-- <?php if($type == 0){ ?>
                <p>4. Oral Session 수상 인원: Plenary oral 1명, Best oral 1명, Excellent oral 3명 (분야별 선정인원)</p>
            <?php }else if($type == 1 || $type == 2){ ?>
                <p>4. Poster oral 수상 예정 인원: 30명 (양일 기준, 5개 분야별 8인 발표)</p>
            <?php } ?> -->
            <p>4. 심사를 완료하시면 반드시 <span class="font-semibold">제출하기</span>를 눌러주십시오.</p>
        </div>
        <div class="point w-2/4 h-96 bg-slate-300" style="display: none;"><div class="point_select"></div></div>
    </div>
    

    </div>
  
    <div id="pdf_viewer" style="display: none;">
    <!-- <div id="pdf_viewer" style="display: none;"> -->
        <button class="close_pdf"><i class="icon-cross2"></i>창닫기</button>
        <div class="carousel"></div>
    </div>
    <input name="etc1" class="etc1" hidden/>
    <button id="submit" class="mt-20 py-2 px-4 bg-neutral-300 font-semibold w-80 h-20 text-3xl">제출하기</button>
    <div class="submit_noti">*심사를 마치시고 제출하기 버튼을 꼭 눌러주세요&nbsp;&nbsp;&nbsp; **제출하기 버튼을 누르시면 이후 점수 수정이 불가합니다.</div>
</div>

<script>
    <?php
        $pre_score_array = json_encode($pre_score);
        echo "const pre_score = ". $pre_score_array . ";\n";
        ?>
    const rateBtnList = document.querySelectorAll(".rating");
    const modal = document.querySelector("#modal");
    const modalBackground = document.querySelector(".modal_background");
    const sumTd = document.querySelector("#sum");

    //채점완료 버튼
    const completedBtn = document.querySelector("#completed");
    //제출하기 버튼
    const submitBtn = document.querySelector("#submit");

    const titleList = document.querySelectorAll(".title_box")
    const closedPdf = document.querySelector(".close_pdf");

    const select1 =  document.querySelector("#select1");
    const select2 =  document.querySelector("#select2");
    const select3 =  document.querySelector("#select3");
    const select4 =  document.querySelector("#select4");
    const select5 =  document.querySelector("#select5");
    const select6 =  document.querySelector("#select6");

    const point = document.querySelector(".point");
    const pointSelect = document.querySelector(".point_select")

    //const tooltipBox = document.querySelector(".tooltip_box");

    let data = {};
    let sumList = [];
    let etc1 = 0;
    const btnFlags5 = [false, false, false, false, false];
    const btnFlags4 = [false, false, false, false];

    let btnFlags = [];
    let closeModal = false;
    
    let tooltipTime = "";

    // console.log(pre_score)
    
    window.onload = ()=>{
        if(pre_score.length !== 0){
            getPreData();
        }
    }
    
    //소숫점 넣기
    function getPoint(){
        console.log("point")
        point.style.display = "";
        const value = 3;
        pointSelect.innerHTML = `
            <select class="text-black" onchange = "closePoint()">
                <option value="${value}.0" selected>${value}.0점</option>
                <option value="${value}.1">${value}.1점</option>
                <option value="${value}.2">${value}.2점</option>
                <option value="${value}.3">${value}.3점</option>
                <option value="${value}.4">${value}.4점</option>
                <option value="${value}.5">${value}.5점</option>
                <option value="${value}.6">${value}.6점</option>
                <option value="${value}.7">${value}.7점</option>
                <option value="${value}.8">${value}.8점</option>
                <option value="${value}.9">${value}.9점</option>
            </select>
        `
        point.append(innerHtml);

    }

    function closePoint(){
        point.style.display = "none";
    }

    //이전 점수 불러오기
    function getPreData(){
        pre_score.map((score, i)=>{
            data[i] = {
            abstract_idx: score.abstract_idx,
            reviewer_idx: score.reviewer_idx,
            score1: score.score1,
            score2: score.score2,
            score3: score.score3,
            score4: score.score4,
            coi: score.coi
        };
        })
    }

    //화면에서 내려서 새로고침 방지
    document.body.style.overscrollBehaviorY = 'none';

    //채점하기 버튼 클릭 이벤트
   rateBtnList.forEach((btn)=>{
        changeBtnFlag()
        btn.addEventListener("click", (e)=>{
            showModal(e)
        })
   })

   function changeBtnFlag(){
        if(rateBtnList.length === 4){
            btnFlags = btnFlags4;
        }else if(rateBtnList.length === 5){
            btnFlags = btnFlags5;
        }
   }

   //modal 채점 완료 버튼 이벤트
   completedBtn.addEventListener("click", async ()=>{
        closeModal = false;
        //clearTimeout(tooltipTime);

        saveData(modal.dataset.index)

        completedBtn.classList.remove("bg-blue-500");
        completedBtn.classList.remove("text-white");
    
        modal.style.display = "none";
        modalBackground.style.display = "none";

        //채점하기 버튼 -> 채점 완료, 파란색 변경
        rateBtnList.forEach((btn, index)=>{
            
        if(modal.dataset.id === btn.dataset.id){
            btn.innerText = "심사완료";
            btn.style.background = "rgb(59 130 246)";
            btn.style.color = "#FFF";
            btnFlags[index] = true;
        }
    })
        //모든 버튼 채점 -> 제출하기 버튼 파란 배경(활성화)
        const allTrue = btnFlags.every(flag => flag === true);

        if (allTrue) {
            submitBtn.classList.add("bg-red-700");
            submitBtn.classList.add("text-white");
        }

    sumList[modal.dataset.index] = sumTd.innerText * 1;
   })

   //data 저장함수
   function saveData(index) {

        const abstract_idx = modal.dataset.id;
        const reviewer_idx = document.querySelector("#reviewer_idx").value;

        let value1 =  select1.options[select1.selectedIndex].value;
        let value2 =  select2.options[select2.selectedIndex].value;
        let value3 =  select3.options[select3.selectedIndex].value;
        let value4 =  select4.options[select4.selectedIndex].value;
        let value5 =  select5.options[select5.selectedIndex].value;

        if(value5 === 'Y'){
            value1 = 0;
            value2 = 0;
            value3 = 0;
            value4 = 0;
        }

        data[index] = {
            abstract_idx: abstract_idx,
            reviewer_idx: reviewer_idx,
            score1: value1,
            score2: value2,
            score3: value3,
            score4: value4,
            coi: value5
        };
   // console.log(data)

    // const localSaveData = JSON.stringify({
    //         abstract_idx: abstract_idx,
    //         reviewer_idx: reviewer_idx,
    //         score1: value1,
    //         score2: value2,
    //         score3: value3,
    //         score4: value4,
    //         coi: value5
    //     })

    //window.localStorage.setItem(`rating${index}`, localSaveData)
}

   //제출하기 버튼 이벤트
   submitBtn.addEventListener("click", ()=>{
        let submitStatus = true;
        rateBtnList.forEach((btn)=>{
            if(btn.innerText !== "심사완료"){
                btn.style.background = "rgb(225 29 72)";
                btn.style.color = "#FFF"
                submitStatus = false;
            }
        })
        
        if(submitStatus === false){
            alert("심사를 완료해주세요.")
        }else{
            if (window.confirm("제출 후에는 점수 수정이 어렵습니다. 심사표를 제출하시겠습니까?")) {
                postAjax();
            }
        }
   })

   //ajax 보내기
   function postAjax(){
    const url = `/score/add_sum`;

    //평균구하기
    const average = calculateAverage(sumList);
    const scoreList = [];
   
    
    //조정점수 구하기
    sumList.map((sum)=>{
        if(sum !== 0){
            scoreList.push(sum * 20 / average)
        }else{
            scoreList.push(0)
        }
    })
  
    // 조정점수 넣기
    scoreList.forEach((score, index) => {
        data[index]['etc1'] = score;
    });
  
    <?php
        if (isset($reviewer['idx'])) {
            $idx = $reviewer['idx'];
            echo "const idx = $idx;"; ?>
            $.ajax({
                type: "POST",
                url : url,
                data: data,
                success: function(result){
                    alert("심사를 해주셔서 감사합니다.");
                    //window.localStorage.clear();
                    window.location.href = `/score/review?n=${idx}`;
                },
                error:function(e){  
                    console.log(e)
                    alert("점수 저장 이슈가 발생했습니다. 관리자에게 문의해주세요.")
                }
        })  
      <?php } else {
            // $reviewer['idx']가 없는 경우 에러를 처리하기 위해 JavaScript 코드를 생성합니다.
            echo "alert('심사자가 존재하지 않습니다. 관리자에게 문의해주세요.'); return;";
        }
    ?>
    //const idx = <?php echo $reviewer['idx']; ?>;
    // const localStorageItem = window.localStorage.getItem("rating0")
    // console.log(JSON.parse(localStorageItem))
   
   }

   //제목 클릭 => pdf 뷰어
   titleList.forEach((title)=>{
    title.addEventListener("click", (e)=>{
        showPdfViwer(e)
    })
   })

   //modal 보이는 함수
   function showModal(e){
        closeModal = true;
        modal.style.display = "";
        modalBackground.style.display = "";
        //tooltipBox.style.opacity = 1;

        //tooltipTime = setTimeout(()=>{tooltipBox.style.opacity = 0;},3000)

        modal.dataset.id = e.target.dataset.id;
        modal.dataset.index = e.target.id;

        const sel1 = select1.options;
        const sel2 = select2.options;
        const sel3 = select3.options;
        const sel4 = select4.options;
        const sel5 = select5.options;
        const selList = [sel1, sel2, sel3, sel4, sel5];

        //select box 초기화
        selList.map((sel)=>{
            for(let i = 0; i < sel.length; i++){
                if(sel[i].value == "1"){
                    sel[i].selected = true;
                }else{
                    sel[i].selected = false;
                }
            }
        })
        sumTd.innerText = "4";

        const index = modal.dataset.index; 

        //채점한 초록 수정할 경우 기존 점수 부여
        if(data[index]){
            const score1 = data[index].score1;
            const score2 = data[index].score2;
            const score3 = data[index].score3;
            const score4 = data[index].score4;
            const score5 = data[index].coi;

            //coi가 Y 일 때
            if(score5 === "Y"){
                sel5[1].selected = true;
                sel5[0].selected = false;

                sumTd.innerText = 0;

            //coi가 N 일 때
            }else if(score5 === "N"){
                sel5[0].selected = true;
                sel5[1].selected = false;

                sel1[score1*1 - 1].selected = true;     
                sel2[score2*1 - 1].selected = true;
                sel3[score3*1 - 1].selected = true;
                sel4[score4*1 - 1].selected = true;
                sumTd.innerText = score1*1 + score2*1 + score3*1 + score4*1;
            }    
        }
   }

   let showPdf = false;

   //pdf 뷰어 보이는 함수
   function showPdfViwer(e){
        const carousel = document.querySelector(".carousel");
        const carouselContainer = document.querySelector("#pdf_viewer");

        const img_id = e.target.dataset.id;
        const img_leng = e.target.dataset.leng;

        const typeNum = <?php echo $abstract[0]['type']; ?>;
        const typeTxt = getType(typeNum);

        const categolryNum = <?php echo $abstract[0]['category']; ?>;
        const categoryTxt = getCategory(categolryNum);

        carousel.innerHTML = "";

        modalBackground.style.display = "";
        carouselContainer.style.display = "";
        showPdf = true;
        if(typeTxt === "pp"){

            //초록 포스터 버전
            // for(let i = 1; i <= img_leng; i++){
            //     carousel.innerHTML += `
            //     <div class="carousel_item">
            //         <img class="slide-animation image" src = "https://186e4e806bf2d560.kinxzone.com/img/${typeTxt}/${categoryTxt}/${img_id}/${img_id}-${i}.png"/>   
            //     </div>
            // `
            // }

            //[240409] sujeong / 학회팀 요청 초록 원고버전으로 변경
            carousel.innerHTML += `
                <div class="carousel_item">
                    <img class="slide-animation image" src = "https://186e4e806bf2d560.kinxzone.com/img/${typeTxt}/${categoryTxt}/${img_id}/${img_id}_1.png"/>   
                </div>
            `
        }else if(typeTxt === "op"){
            carousel.innerHTML += `
                <div class="carousel_item">
                    <img class="slide-animation image" src = "https://186e4e806bf2d560.kinxzone.com/img/${typeTxt}/${img_id}.png"/>   
                </div>
            `
        }
   

        carouselContainer.append(carousel);
        document.querySelector(".slide-animation").onerror = () =>{
            alert("관리자에게 문의해주세요.");
            modalBackground.style.display = "none";
            carouselContainer.style.display = "none";
            showPdf = false;
        }
        //viewPDF(url)

        closedPdf.addEventListener("click", ()=>{
            modalBackground.style.display = "none";
            carouselContainer.style.display = "none";
            showPdf = false;
    })
   }

   function getType(num){
        switch(num){
            case 0 : 
                return "op";
                break;
            case 1 :
            case 2 : 
                return "pp";
                break;
        }
   }

   function getCategory(num){
        switch (num) {
                case 1:
                case 6:
                    return "clinical";
                    break;
                case 2:
                case 7:
                    return "basic";
                    break;
                case 3:
                case 8:
                    return "thyroid";
                    break;
                case 4:
                case 9:
                    return "bone";
                    break;
                case 5:
                case 10:
                    return "pituitary";
                    break;
            }

   }

//    //pdf 보여주는 함수 // 여러페이지일 경우 스크롤
//    function viewPDF(url) {
//     // console.log(url)
//     // Loaded via <script> tag, create shortcut to access PDF.js exports.
//     var { pdfjsLib } = globalThis;

//     // The workerSrc property shall be specified.
//     pdfjsLib.GlobalWorkerOptions.workerSrc = '//mozilla.github.io/pdf.js/build/pdf.worker.mjs';

//     var pdfDoc = null,
//         scale = canvasScale,
//         canvasContainer = document.getElementById('canvas-container');
//         canvasContainer.innerHTML = "";

//     pdfjsLib.getDocument(url).promise.then(function(pdfDoc_) {
//         pdfDoc = pdfDoc_;
//         var numPages = pdfDoc.numPages;
//         document.getElementById('page_count').textContent = numPages;

//         // Render all pages
//         for (var pageNum = 1; pageNum <= numPages; pageNum++) {
//             renderPage(pageNum);
//         }
//     });

//     /**
//      * Render specified page.
//      * @param num Page number.
//      */
//     function renderPage(num) {
//         // Create a new canvas element for each page
//         var canvas = document.createElement('canvas');
//         canvas.id = 'page-' + num;
//         canvasContainer.appendChild(canvas);

//         // Using promise to fetch the page
//         pdfDoc.getPage(num).then(function(page) {
//             var viewport = page.getViewport({scale: scale});
//             canvas.height = viewport.height; // Set canvas height for each page
//             canvas.width = viewport.width; // Set canvas width for each page

//             // Render PDF page into canvas context
//             var ctx = canvas.getContext('2d');
//             var renderContext = {
//                 canvasContext: ctx,
//                 viewport: viewport
//             };
//             page.render(renderContext);
//         });
//     }
// }


   modalBackground.addEventListener("click", ()=>{
    const carouselContainer = document.querySelector("#pdf_viewer");
        if(showPdf && !closeModal){
            modalBackground.style.display = "none";
            carouselContainer.style.display = "none";
            showPdf = false;
        }
        else if(!showPdf && closeModal){
            alert("확인 버튼을 눌러주세요.")
            //tooltipBox.style.opacity = 1;
            //tooltipTime = setTimeout(()=>{tooltipBox.style.opacity = 0;},3000)
        }
   })

   //평균 구하는 함수 -> COI가 Y(sum이 0)일 경우 제외
   function calculateAverage(arr) {
    let sum = 0;
    let count = 0; // 0이 아닌 값의 개수를 세기 위한 변수

    for (let i = 0; i < arr.length; i++) {
        if (arr[i] !== 0) {
            sum += arr[i];
            count++; // 0이 아닌 값일 때만 count를 증가시킴
        }
    }

    // 0이 아닌 값이 없을 경우 예외 처리
    if (count === 0) {
        return 0;
    }

    return sum / count;
}
    // //뒤로가기 새로고침 경고창
    // $(window).on("beforeunload", function(){
    //         return "현재 채점하신 점수가 초기화 될 수 있습니다.";
    //     });


</script>