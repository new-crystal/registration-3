	<!-- 메인 페이지일 경우 class="main" 추가 -->
	<div id="container" class="main" >
        <div style="display:none"><?php echo $user_chk?> / <?php echo $limit_count?></div>
		<div class="contents">
			<h2 class="subTit exin">학술행사 안내</h2>
			
			<div class="txtCon" style="min-height:500px;">
			



<div class="txtCon wsInfo">

    <p><span class="fwBold">2023년 대한심뇌혈관질환예방학회 개원의 연수강좌</span>를 다음과 같이 개최하오니 회원 여러분의 많은 참여 바랍니다.<br></p>
    <p style="margin-top:10px;">※ 본 행사는 <span class="fcRed"><b>offline</b></span>로 진행되며, <b>방역수칙을 철저히 준수</b>하며 진행하고자 하오니, 참석자 분들의 <b>적극적인 협조</b> 부탁드립니다.</p>
	
	<div class="bdArea">
		<dl>
			<dt class="boldTit">주요 일정 안내</dt>
		</dl>
		<dl class="depth_con">
			<dt class="boldTit">⦁ 행사 일정</dt>
			<dd>
                <ul class="listBl">
                    <li><span class="fcPoint">일시:</span> 2023년 7월 2일 (일) 09:00 ~ 17:30</li>
                    <li><span class="fcPoint">장소:</span> 세종대학교 광개토관, 컨벤션홀(B2)</li>
                </ul>
			</dd>
		</dl>
		<!--dl class="depth_con">
			<dt class="boldTit">⦁ 포스터 초록 접수 일정</dt>
			<dd>
                <ul class="listBl">
                    <li>2023년 2월 13일(월) ~<span class="fcRed fwBold"> 2023년 3월 13일(월)</span>까지</li>
                </ul>
			</dd>
		</dl-->
		<dl class="depth_con">
			<dt class="boldTit">⦁ 사전등록 일정</dt>
			<dd>
				<ul class="listBl">
                    <?php
                    if($user_chk < $limit_count){
                        echo '<li class="fcGrey">2023년 5월 8일(월) ~<span class="fcRed fwBold"> 2023년 6월 22일(목)</span>까지</li>';

                    }else{
                        echo '<li><span class="fcRed fwBold">일반 참가자의 사전등록이 마감</span>되었습니다.</li>';

                    }
                    ?>
				</ul>
			</dd>
		</dl>


<!--
		<dl class="depth_con">
		    <dt></dt>
			<dd>
				<ul class="listBl">
					<li class="fcGrey"><span class="fcPoint">점심식사 : </span>도시락 제공</li>
					<li class="fcGrey"><span class="fcPoint">주차장 : </span>무료주차(발렛은 개별지급)</li>
				</ul>
			</dd>
		</dl>
-->

		<dl>
			<dt class="boldTit">평점</dt>
			<dd>
				<ul class="listBl">
					<li class="fcGrey"><span class="fcPoint">대한의사협회 평점 : </span> 6평점</li>
					<li class="fcGrey"><span class="fcPoint">평점이수 방법 : </span>현장참석 - 명찰 내 출력되어 있는 QR코드를 등록데스크에 마련된 리더기에 학술대회 시작 전/후 2회를 필히 태깅하셔야 합니다.</li>
					<!--li class="fcGrey"><span class="fcPoint">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</span>온라인참석 - 각 세션 시작 및 종료시 출석 체크를 하셔야 평점이 인정됩니다.</li-->
				</ul>
			</dd>
		</dl>
		<dl>
			<dt class="boldTit">평점 안내 </dt>
			<dd>
				<ul class="listBl">
					<li class="fcGrey">※ 학술대회 당일 참석 확인은 2회(입,퇴실)진행 되며, 참석 확인이 되지 않으면 평점이 부여되지 않습니다. </li>
					<li class="fcGrey">※ 강의 참석 시간 기준</li>
					<li class="fcGrey">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;체류시간 60분당 1평점 인정 (1시간미만: 평점없음, 최대 6평점까지 인정, 휴식 및 점심시간 제외)</li>
				</ul>
			</dd>
		</dl>

		<dl>
			<dt class="boldTit">공지사항</dt>
			<dd>
				<ul class="listBl">
					<li><span class="fcRed fwBold">※ 사전등록은 온라인으로만</span> 가능합니다.</li>
					<li>※ 등록여부에 대한 확인 메일을 발송하오니 <span class="fwBold">정상적으로 등록이 되었는지</span> 반드시 <span class="fwBold">메일을 확인</span>하여 주시기 바랍니다.</li>
					<!-- li>※ COVID-19로 인하여 현장 등록은 진행하지 않습니다.</li -->
<!--					<li>※ 행사 이후 학회 홈페이지에 동의하신 연자에 한하여 본 연수강좌 강의 영상이 업로드 될 예정이며,<br>　 회원 대상으로 열람 가능하오니 많은 이용 바랍니다.</li-->
				</ul>
			</dd>
		</dl>
	</div>
	
	<div class="bdArea" >
		<!-- <p class="blCircle"><span class="fcPoint">사전등록 마감 : </span>2016년 10월 3일(월)~10월 28일(금) 까지</p> -->
		<ul class="btn" >
			<!--<li class="btnArr"><a href="http://2017spring.allergy.or.kr/abstract/" class="btnPink">온라인 초록등록</a></li>
			<li class="btnArr"><a href="http://2017spring.allergy.or.kr/abstract/search.php" class="btnDef">온라인 초록수정</a></li>-->
			<li class="btnArr"><a href="/registration/enroll" class="btnPoint">온라인 사전등록</a></li>
			<li class="btnArr"><a href="/registration/search" class="btnDRed">사전등록 확인</a></li>
		</ul>
	</div>
</div>

</div>
		</div>
		<!-- //contents -->
	
	</div>
	<!-- //container -->
