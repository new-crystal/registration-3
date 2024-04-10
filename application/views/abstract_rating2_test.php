
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
        line-height: 1.4; 
    }

    .button{
        background-color: #ddd;
        padding: 4px 8px;
    }

    .title_box{
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
    }

    #pdf_viewer img{
        width:100%;
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

</style>

<script src="https://cdn.tailwindcss.com"></script>
<script>
       //점수 합계 구하는 함수
   function getSum(){
        const value1 =  select1.options[select1.selectedIndex].value;
        const value2 =  select2.options[select2.selectedIndex].value;
        const value3 =  select3.options[select3.selectedIndex].value;
        const value4 =  select4.options[select4.selectedIndex].value;
        const value5 =  select5.options[select5.selectedIndex].value;
        const sumTd = document.querySelector("#sum");
        
        if(value5 === "N"){
            sumTd.innerText = value1*1 + value2*1 + value3*1 + value4*1;
        }else if(value5 === "Y"){
            sumTd.innerText = 0;
        }
   }

</script>

<div class="w-full h-screen flex items-center justify-center flex-col px-10">
    
    <h1 class="font-semibold text-3xl font-sans">TEST 심사표</h1>
    <div class="mt-10 w-6/12">
        <table class="border border-solid w-full">
            <tr class="border border-solid">
                <td class="border border-solid py-2 px-4" colspan="3">심사위원정보</td>
            </tr>
            <tr>
                <td class="border border-solid py-2 px-4">파트구분</td>
                <td class="border border-solid py-2 px-4">성함</td>
                <td class="border border-solid py-2 px-4">소속</td>
            </tr>
            <tr>
                <td class="border border-solid py-2 px-4"> <div class="text_box">Diabetes/Obesity/Lipid (clinical)</div> </td>
                <td class="border border-solid py-2 px-4">홍길동</td>
                <td class="border border-solid py-2 px-4">대한내분비학회</td>
            </tr>
        </table>
    </div>
    <div class="mt-10 w-full mx-auto">
        <table class="border border-solid w-full">
            <tr class="border border-solid">
                <td class="border border-solid p-2">No.</td>
                <td class="border border-solid p-2">Abstract No.</td>
                <td class="border border-solid p-2">Presenter Name</td>
                <td class="border border-solid p-2">Affiliation</td>
                <td class="border border-solid p-2">Country</td>
                <td class="border border-solid p-2">Abstract Title</td>
                <td class="border border-solid p-2"></td>
            </tr>
            <tr>
                    <td class="border border-solid p-2">1</td>
                    <td class="border border-solid p-2">PP1-1</td>
                    <td class="border border-solid p-2">Ahmad Zamir Che Daud </td>
                    <td class="border border-solid p-2">Universiti Teknologi MARA</td>
                    <td class="border border-solid p-2">Malaysia</td>
                    <td class="border border-solid p-2"><div class="title_box text-blue-700 underline decoration-blue-700" data-id="PP1-1"  data-leng="5">Effectiveness of Integrated Insulin Education (ITEI) on insulin knowledge and injection competency: a randomized control trial study</div></td>
                    <td class="border border-solid p-2"><button class="rating button p-2" id="0" data-id="32">심사하기</button></td>
                </tr> 
                                <tr>
                    <td class="border border-solid p-2">2</td>
                    <td class="border border-solid p-2">PP1-2</td>
                    <td class="border border-solid p-2">Heejun Son</td>
                    <td class="border border-solid p-2">Seoul National University</td>
                    <td class="border border-solid p-2">Korea</td>
                    <td class="border border-solid p-2"><div class="title_box text-blue-700 underline decoration-blue-700" data-id="PP1-2"  data-leng="4">The effect of continuous glucose monitoring on post-operative glucose control in people with type 2 diabetes mellitus undergoing coronary artery bypass grafting: a randomized clinical trial</div></td>
                    <td class="border border-solid p-2"><button class="rating button p-2" id="1" data-id="33">심사하기</button></td>
                </tr> 
                                <tr>
                    <td class="border border-solid p-2">3</td>
                    <td class="border border-solid p-2">PP1-3</td>
                    <td class="border border-solid p-2">Denise Joy Emmanuelle Lopez </td>
                    <td class="border border-solid p-2">Philippine General Hospital</td>
                    <td class="border border-solid p-2">Philippines</td>
                    <td class="border border-solid p-2"><div class="title_box text-blue-700 underline decoration-blue-700" data-id="PP1-3"  data-leng="5">Efficacy of retatrutide for weight reduction and its cardiometabolic effects among adults: a systematic review and meta-analysis</div></td>
                    <td class="border border-solid p-2"><button class="rating button p-2" id="2" data-id="34">심사하기</button></td>
                </tr> 
                                <tr>
                    <td class="border border-solid p-2">4</td>
                    <td class="border border-solid p-2">PP1-4</td>
                    <td class="border border-solid p-2">Javad Alizargar </td>
                    <td class="border border-solid p-2">Kashan University</td>
                    <td class="border border-solid p-2">Iran, Islamic Republic of</td>
                    <td class="border border-solid p-2"><div class="title_box text-blue-700 underline decoration-blue-700" data-id="PP1-4"  data-leng="4">Insulin resistance linked to increased risk of End-Stage Renal Disease in non-diabetic and diabetic individuals: findings from a large-scale study</div></td>
                    <td class="border border-solid p-2"><button class="rating button p-2" id="3" data-id="35">심사하기</button></td>
                </tr>      
        </table>
    </div>

    <div class="modal_background" style="display: none;"></div>
    <div id="modal" style="display: none;" class="p-4">
        <table class="w-full">
            <tr>
                <th class="border border-solid py-2 px-4">연구의 창의성<br/>(1점~10점)</th>
                <th class="border border-solid py-2 px-4">방법의 타당성<br/>(1점~10점)</th>
                <th class="border border-solid py-2 px-4">결과의 영향력<br/>(1점~10점)</th>
                <th class="border border-solid py-2 px-4">발표의 우수성<br/>(1점~10점)</th>
                <th class="border border-solid py-2 px-4">COI</th>
                <th class="border border-solid py-2 px-4">총점<br/>(40점)</th>
                <th class="border border-solid py-2 px-4">심사 완료</th>
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
                <td class="border border-solid py-2 px-4" id="sum">4</td>
                <td class="border border-solid py-2 px-4">
                    <div class="tooltip_box animate-bounce" style="opacity: 0;">
                        <p>심사완료 버튼을 눌러주세요.</p>
                    </div>
                    <button id="completed" class="button bg-blue-500 text-white">확인</button>
                </td>
            </tr>
        </table>
        <div>
            <h6 class="p-2 font-semibold">[현장 심사 안내]</h6>
            <p class="p-2">1. 초록의 발표자 또는 공저자인 경우 COI에 O로 체크하신 후 해당 초록에 대한 심사는 심사에서 제외하여 주십시오.</p>
            <p class="p-2">2. 각 심사 항목은 각각 10점 만점입니다. 각 항목의 중간 점수를 5점으로 고려하시어 심사를 진행하여 주십시오.</p>
            <p class="p-2">3. 동점자 최소화를 위해 변별력 있게 점수를 부여해 주십시오.</p>
            <p class="p-2">4. Poster oral 수상 예정 인원: 30명 (양일 기준, 5개 분야별 8인 발표)</p>
            <p class="p-2">5. 심사를 완료하시면 반드시 <span class="font-semibold">제출하기</span>를 눌러주십시오.</p>
        </div>
    </div>
  
    <div id="pdf_viewer" style="display: none;">
        <button class="close_pdf"><i class="icon-cross2"></i>창닫기</button>
        <div class="carousel"></div>
    </div>
    <input name="etc1" class="etc1" hidden/>
    <button id="submit" class="mt-20 py-2 px-4 bg-neutral-300 font-semibold w-60 h-12">제출하기</button>
    <div class="submit_noti">*심사를 마치시고 제출하기 버튼을 꼭 눌러주세요 <br/>**제출하기 버튼을 누르시면 이후 점수 수정이 불가합니다.</div>
</div>

<script>
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

    //const tooltipBox = document.querySelector(".tooltip_box");

    let data = {};
    let sumList = [];
    let etc1 = 0;
    const btnFlags5 = [false, false, false, false, false];
    const btnFlags4 = [false, false, false, false];

    let btnFlags = [];
    let closeModal = false;
    
    let tooltipTime = "";

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
        const reviewer_idx = 777;

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
            if (window.confirm("제출 후에는 점수 수정이 어렵습니다. 심사를 제출하시겠습니까?")) {
                alert("테스트를 해주셔서 감사합니다.");
            }
        }
   })


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

        const typeNum = 1;
        const typeTxt = getType(typeNum);

        const categolryNum = 1;
        const categoryTxt = getCategory(categolryNum);

        carousel.innerHTML = "";

        modalBackground.style.display = "";
        carouselContainer.style.display = "";
        showPdf = true;
        if(typeTxt === "pp"){
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