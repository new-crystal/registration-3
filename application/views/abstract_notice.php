<script src="https://cdn.tailwindcss.com"></script>
<style>
      .home_btn{
        display: block;
        width: 150px;
        height: 40px;
        background-color: #ddd;
        border: none;
        margin : 20px auto;
        font-weight: 600;
    }

    .home_btn:hover{
        background-color: #8d8c8c;
    }

    .notice{
        text-align: center;
        margin-top: 20px;
        font-size : 16px;
    }
</style>
<div class="w-full h-screen flex items-center justify-center flex-col">
    <form id="reviewer_form" action="/score" method="post" class="w-full h-screen flex items-center justify-center flex-col">
        <div class="w-4/5">
            <h1 class="font-semibold mb-1 font-sans text-4xl text-center">공지사항</h1>
            <p class="notice">• 이미 사용한 코드를 다시 사용하게 되면 기존의 점수가 덮어씌여집니다.</p>
            <p class="notice">• [채점하기]버튼을 누르고 채점창이 나오면 채점완료 버튼을 눌러야 채점창이 닫힙니다.</p>
            <p class="notice">• 반드시 [제출하기]버튼을 눌러야 채점이 완료됩니다.</p>
        </div>
        <button id="home" class="home_btn"><i class="icon-home2"></i>  Home</button>
    </form>
</div>
<script>
  const btn = document.querySelector("#home");

btn.addEventListener("click", ()=>{
    window.location.href = "/score"
})

</script>