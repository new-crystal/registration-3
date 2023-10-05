<script src="https://cdn.tailwindcss.com"></script>

<div class="w-full h-screen flex flex-col items-center justify-center">
    <div>
        <div> <?php if (isset($users['nick_name'])) echo $users['nick_name'] ?> </div>
        <p>교수님 환영합니다.</p>
    </div>
    <div>
        <p>소속</p>
        <div> <?php if (isset($users['org'])) echo $users['org'] ?></div>
    </div>
</div>

<script>
function childFunction() {
    window.location.href = `/qrcode/open${window.opener.location.search}`
    window.opener.postMessage('childFunctionExecuted', '*');
}

// 자식 창이 로드되면 자식 함수 실행
window.addEventListener('message', function(event) {
    childFunction();
});
</script>