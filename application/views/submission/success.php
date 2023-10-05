	<!-- 메인 페이지일 경우 class="main" 추가 -->
	<div id="container"  class="main"  >

		<div class="contents">


		</div>
		<!-- //contents -->

	</div>
	<!-- //container -->
<script type="text/javascript">

    $(document).ready(function(){
        goback('/registration/enroll');
    })

    function goback(newurl) {
        if (confirm("※ 사전 등록 완료한 후 초록 접수를 진행해 주세요. 사전등록 페이지로 이동합니다.")){
            window.location = newurl;
        }
    }
</script>

