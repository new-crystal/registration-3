<script src="https://cdn.tailwindcss.com"></script>

<style>
    option{
        height: 40px;
        font-size: 16px;
        line-height: 2.4;
    }
</style>
<div class="w-full h-screen flex items-center justify-center flex-col">
    <form id="reviewer_form" action="/score" method="post" class="w-full h-screen flex items-center justify-center flex-col">
        <div class="w-2/5">
            <p class="font-semibold mb-10 font-sans text-2xl">발표형식</p>
            <select id="oral"  class="border p-2 border-solid w-full h-14">
                <option value="" selected hidden>Choose</option>
                <option value="Oral">Oral</option>
                <option value="Poster">Poster oral</option>
            </select>
            <input name="email" id="email" class="border p-2 border-solid w-full" hidden/>
        </div>
        <div class="w-2/5" style="display: none;" id="oral_select_box">
            <p class="font-semibold mb-10 font-sans text-2xl">코드 번호</p>
            <select  class="border p-4 border-solid w-full h-14" id="oral_select">
                <option value="" selected hidden>Choose</option>
                <option value="OP1">OP1</option>
                <option value="OP2">OP2</option>
                <option value="OP3">OP3</option>
                <option value="OP4">OP4</option>
                <option value="OP5">OP5</option>
                <option value="OP6">OP6</option>
            </select>
        </div>
        <div class="w-2/5" style="display: none;" id="poster_select_box">
            <p class="font-semibold mb-10 font-sans text-2xl">코드 번호</p>
            <select  class="border p-4 border-solid w-full h-14" id="poster_select">
                <option value="" selected hidden>Choose</option>
                <option value="PP1">PP1</option>
                <option value="PP2">PP2</option>
                <option value="PP3">PP3</option>
                <option value="PP4">PP4</option>
                <option value="PP5">PP5</option>
                <option value="PP6">PP6</option>
                <option value="PP7">PP7</option>
                <option value="PP8">PP8</option>
                <option value="PP9">PP9</option>
                <option value="PP10">PP10</option>
            </select>
            <input name="code" id="code" class="border p-2 border-solid w-full" hidden/>
        </div>
        <div class="mt-20 w-2/5">
            <p class="font-semibold mb-10 font-sans text-2xl">심사자 번호</p>
            <select  class="border p-4 border-solid w-full h-14" id="num_select">
                <option value="" selected hidden>Choose</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
                <option value="G">G</option>
                <option value="H">H</option>
                <option value="I">I</option>
                <option value="J">J</option>
            </select>
            <input name="num" id="num" class="border p-2 border-solid w-full h-14" hidden/>
        </div>
        <div class="mt-20 w-2/5">
            <p class="font-semibold mb-10 font-sans text-2xl">비밀번호</p>
            <input type="password" name="password" id="password" class="border p-4 border-solid w-full h-14" autocomplete="off" placeholder="비밀번호를 입력해주세요."/>
        </div>
        <button id="submit" class="mt-20 py-2 px-4 bg-neutral-300 hover:bg-cyan-400 font-semibold h-16 w-40 text-2xl">로그인</button>
    </form>
</div>
<!-- <button class="hi" onclick="installPWA()">Install PWA</button> -->
<script>
    installPWA();
	function installPWA() {
        if ('serviceWorker' in navigator && 'PushManager' in window) {
            //console.log("hi")

			// 'beforeinstallprompt' 이벤트를 기다립니다.
		window.addEventListener('beforeinstallprompt', (event) => {
        // 'beforeinstallprompt' 이벤트를 캐치하면, 버튼을 활성화하고 설치를 유도합니다.
        //console.log("hello");
        event.preventDefault();
        const installButton = document.querySelector('.hi');
        installButton.style.display = 'block';

        installButton.addEventListener('click', () => {
          // 사용자에게 설치를 요청하고, 이벤트를 완료합니다.
          event.prompt();
          event.userChoice.then((choiceResult) => {
            if (choiceResult.outcome === 'accepted') {
              console.log('User accepted the install prompt');
            } else {
              console.log('User dismissed the install prompt');
            }
          });
        });
      });
    }
  }
</script>
<script>

    const submitBtn = document.querySelector("#submit");

    const oralSelect = document.querySelector("#oral");
    
    const oralBox = document.querySelector("#oral_select_box");
    const posterBox = document.querySelector("#poster_select_box");

    const oralCodeSelect = document.querySelector("#oral_select")
    const posterSelect = document.querySelector("#poster_select")
    const numSelect = document.querySelector("#num_select");

    let firstValue = "";

    window.onload = ()=>{
        showOrlaBox(oralSelect.value)
    }

    oralSelect.addEventListener("change", (e)=>{
        firstValue = e.target.value;
        showOrlaBox(firstValue)
    })

    function showOrlaBox(vlaue){
        if(vlaue === "Oral"){
            oralBox.style.display = "";
            posterBox.style.display = "none";
        }else if(vlaue === "Poster"){
            oralBox.style.display = "none";
            posterBox.style.display = "";
        }
    }

    function getOralCode(){

        let oralCode = "";      

        if(firstValue === "Oral"){
            oralCode = (oralCodeSelect.options[oralCodeSelect.selectedIndex].value);
        }else if(firstValue === "Poster"){
            oralCode = (posterSelect.options[posterSelect.selectedIndex].value);
        }

        if(oralCode){
            return oralCode;
        }else{
            return false
        }
    }

    function getNumCode(){
        let num = "";

        num = numSelect.options[numSelect.selectedIndex].value;

        if(num){
            return num;
        }else{
            return false;
        }
    }

    
    document.querySelector("#reviewer_form").addEventListener("submit", (e)=>{
        e.preventDefault()
        const passwordInput = document.querySelector("#password");
        let submitStatus = true; 

        //비밀번호 확인 // 비밀번호 sicem
        if(passwordInput.value !== "sicem"){
            passwordInput.classList.add("border-rose-600");
            passwordInput.classList.add("border-2");
            alert("비밀번호를 확인해주세요.")
            submitStatus = false;
        }else if(passwordInput.value === "sicem"){
            submitStatus = true;
        }
        const code = getOralCode();
        const num = getNumCode();

        if(code === false){
            alert("코드 번호를 입력해주세요.")
            oralCodeSelect.classList.add("border-rose-600");
            oralCodeSelect.classList.add("border-2");
            submitStatus = false;
        }

        if(num === false){
            alert("심사자 번호를 입력해주세요.")
            numSelect.classList.add("border-rose-600");
            numSelect.classList.add("border-2");
            submitStatus = false;
        }


        if(submitStatus === true){
           
            const n = code+ "-" + num
            const reviewerList = <?php echo json_encode($reviewer); ?>;

            let foundMatch = false; 

            reviewerList.forEach((reviewer) => {
                if (reviewer.code === n) {
                    foundMatch = true; 
                    if (window.confirm("이미 존재하는 코드입니다. \n평가를 수정하시겠습니까?")) {
                        window.location.href = `/score/abstract_reviewer?n=${n}`;
                    } else {
                        return; 
                    }
                }
            });

            // 일치하는 리뷰어가 없을 때만 페이지 이동
            if (!foundMatch) {
                window.location.href = `/score/abstract_reviewer?n=${n}`;
            }
           
        }
    })

</script>