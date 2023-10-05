<?php
if (!$users) {
?>
    <script>
        alert('메일을 발송할 유저가 없습니다.');
        window.location.href = "/admin/qr_user";
    </script>
<?php
}
?>

<script src="https://cdn.tailwindcss.com"></script>
<div class="w-full h-full flex items-center justify-center">
    <div class="w-2/4 h-2/4 bg-lime-500 flex flex-col items-center justify-center">
        <h1 class="text-white font-semibold text-3xl">메일 전체 발송이 성공하셨습니다.</h1>
        <a href="/admin/qr_user"><button class="bg-white text-lime-500 p-3 translate-y-32 font-semibold rounded">뒤로
                가기</button></a>
    </div>
</div>