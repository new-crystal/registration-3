<!-- success.php 뷰 파일 내부 -->
<!DOCTYPE html>
<html>

<head>
    <title>Success Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+KR&display=swap" rel="stylesheet">
</head>

<style>
@font-face {
    font-family: NanumSquare;
    src: url("../../../assets/font/NanumSquare.otf");
}

body {
    font-family: NanumSquare;
}
</style>

<body>
    <script src="https://cdn.tailwindcss.com"></script>
    <div class="w-full h-screen flex items-center justify-center">
        <div class="w-5/12 h-5/6 m-auto border border-blue-800 text-center font-medium flex flex-col justify-between">
            <div class="w-full h-80">
                <img src="../../assets/images/access_header.png" class="h-full w-full" />
            </div>
            <div>
                <div class="text-zinc-400 text-xl">
                    <p>Field registration completed.</p>
                    <p>After paying the registration fee of <?php if (isset($fee)) echo $fee; ?></p>
                    <p>at the registration desk</p>
                    <p>Please enter after receiving the pass.</p>
                </div>
                <div class="text-zinc-400 text-xl mt-10">
                    <p>현장 등록이 완료되었습니다</p>
                    <p>등록데스크에서 등록비 <?php if (isset($fee)) echo $fee; ?>원 결제 후</p>
                    <p>출입증을 수령하여 입장해주세요.</p>
                </div>
            </div>
            <div class="text-red-500 font-semibold mb-5">
                <p>※ 현장등록 참석자 분들은 수료증이 필요 하신 경우 학회 운영사무국으로 연락 부탁드립니다.</p>
                <p>(현장 등록 참석자 학회 사이트 내에 다운로드 불가)</p>
            </div>
            <div>
                <button class="py-2 px-3 border mb-3 hover:bg-slate-100" onclick="prev()">이전으로</button>
            </div>
        </div>
    </div>
</body>
<script>
function prev() {
    location.replace("/onSite/mobile")
}
</script>

</html>