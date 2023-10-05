    <!-- 메인 페이지일 경우 class="main" 추가 -->
	<div id="container"  class="main"  >
        <div style="display:none"><?php echo $user_chk?> / <?php echo $limit_count?></div>
		<div class="contents">
			<h2 class="subTit exin">온라인 사전등록 및 확인</h2>
			
			<div class="txtCon" style="min-height:500px;">
                <div class="txtCon regist">
                    <ul class="conMenu">
                        <li  class="on"><a href="/registration/info/">사전등록 안내</a></li>
                        <li ><a href="/registration/enroll/">사전등록(현장참석)</a></li>
                        <li ><a href="/registration/search/">사전등록 확인</a></li>
                    </ul>
                
                    <dl class="registInfo">
                        <dt class="boldTit">사전등록기간</dt>
                        <dd class="eventStart">
                            <ul class="listBl">
                                <?php
                                if($user_chk < $limit_count){
                                    echo '<li><b class="fcRed">2023년 6월 22일(목)</b>까지</li>';
                                }else{
                                    echo '<li><span class="fcRed fwBold">일반 참가자의 사전등록이 마감</span>되었습니다.</li>';
                                }
                                ?>
                            </ul>
                        </dd>
                        
                        <dt class="boldTit">등록비 안내</dt>
                        <dd>
                            <ul class="listBl">
                                <li>&nbsp;
                                    <table class="tblDef">
                                        <colgroup>
                                            <col style="width:33.33%;">
                                            <col style="width:33.33%;">
                                            <col style="width:33.33%;">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th>구분</th>
                                                <th>사전등록(현장참석)</th>
                                                <th>현장등록</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th><b>비회원</b></th>
                                                <td>의사 50,000원<br>의사 외 40,000원</td>
                                                <td>의사 60,000원<br>의사 외 50,000원</td>
                                            </tr>
                                            <tr>
                                                <th><b>회원</b></th>
                                                <td>의사 30,000원<br>의사 외 20,000원</td>
                                                <td>의사 40,000원<br>의사 외 30,000원</td>
                                            </tr>
                                            <tr>
                                                <th><b>전공의, 학생</b></th>
                                                <td>무료</td>
                                                <td>무료</td>
                                            </tr>
                                    
                                        </tbody>
                                    </table>
                                </li>
                            </ul>

                            <dd>
                            <ul class="listBl">
<!--
                                <li>점심식사 : 도시락제공</li>
                                <li>주차 : 무료주차(발렛은 개별지급)</li>
                                <li><font color="red">*현장등록 진행예정 </font></li>
-->
                                <!-- <li><font color="red">*코로나 19로 인해 사전등록이 조기마감 될 수 있습니다.</font></li> -->
                            </ul>
                            </dd>
                            <BR/>
                            <dt class="boldTit">입회안내</dt>
                            <dl class="blCircle">
                                <dd>
                                    <ul class="listBl">
                                        <li><strong>* 입회비</strong> : 10,000원 (회원여부는 사무국으로 문의 주시면 안내 드리겠습니다.)</li>
                                        <li>회원가입을 원하시는 분은 입회원서를 다운로드 받으신 후, 학회 이메일<a href="mailto:kscpmd@kscpmd.or.kr">(kscpmd@kscpmd.or.kr)</a>로 보내주시기 바랍니다</li>
                                        <li><font color="black">* 비회원일경우 사전등록 진행시 회원 가입을 함께 진행하시는 경우 회원가입비 면제혜택을 드립니다.</font></li>
                                    </ul>
                                </dd>
                            </dl>
                            <dt class="boldTit">
                                <ul class="btn" >
                                    <li class="btnArr"><a href="/assets/download/regist_form.hwp" class="btnPoint">입회원서 다운로드</a></li>
                                </ul>
                            </dt>
                            <dt class="boldTit">결제방법</dt>
                            <dl class="blCircle">
                                <dd>
                                    <ul class="listBl">
                                        <li>온라인 사전등록 후 <strong>신용카드 결제</strong> 또는 <strong>무통장 입금</strong> 가능합니다.</li>
                                        <li><strong>1. 신용카드</strong></li>
                                        <li><strong>2. 무통장입금</strong></li>
                                        <li>- 입금계좌 : 우리은행 1005-403-423214 ( 예금주:대한심뇌혈관질환예방학회 )</li>
<!--                                        <li><font color="red">*신용카드 결제는 불가한 점 양해 부탁 드립니다. </font></li>-->
                                    </ul>
                                    <ul class="listBl">
                                        <li>현장결제</li>
                                        <li><strong>1. 무통장입금</strong></li>
                                        <li>- 입금계좌 : 우리은행 1005-403-423214 ( 예금주:대한심뇌혈관질환예방학회 )</li>
                                        <li><strong>2. 현금결제</strong></li>
                                        <li>-현금영수증 발행 불가</li>
<!--                                        <li><font color="red">*신용카드 결제는 불가한 점 양해 부탁 드립니다. </font></li>-->
                                    </ul>
                                </dd>
                            </dl>

                            <dt class="boldTit" style="margin-top:25px">문의</dt>
                            <dl class="blCircle">
                                <dd>
                                    <ul class="listBl">
                                        <li>대한심뇌혈관질환예방학회 사무국 <a href="tel:02-6408-1505">T. 02)6408-1505</a>   E-mail. <a href="mailto:kscpmd@kscpmd.or.kr">kscpmd@kscpmd.or.kr</a></li>
                                        <!--li>개원의 연수강좌 운영사무국 (주)인투온 <a href="tel:02-2285-2584">T. 02)2285-2584</a>  E-mail. <a href="mailto:kscp@into-on.com">kscp@into-on.com</a></li-->
                                    </ul>
                                </dd>
                                </dl>
                            
                        </dd>
                    </dl>
                    
                    <dl class="bdArea">
                        <dt class="boldTit">사전등록방법 안내</dt>
                        <dd>
                            <p class="bp20">메뉴에서 '온라인 사전등록' 란을 마우스로 클릭합니다. 접수하시기 전에 개인정보를 확인하시고 수정사항이 있을 경우 먼저 수정해 주시기 바랍니다. 사전등록 작성요령에 따라 입력하여 주십시오.</p>
                            <ul class="listBl">
                                <li>ⓐ 사전등록 작성 방법에 의거하여 작성하여 주시기 바랍니다.</li>
                                <li>ⓑ 사전등록 후에 입력하신 E-mail로 등록 확인 메일이 발송됩니다.</li>
                                <li>ⓒ 사전등록 접수 이전에 개인정보를 다시 확인하시고 잘못 입력한 부분은 수정하여 주시기 바랍니다. </li>
                                <li>ⓓ 사전등록 후 결제 및 입금이 완료되어야 최종 등록됩니다.<br></li>
                            </ul>
                        </dd>
                    </dl>
                    
                    <dl class="registInfo">
                        <dt class="boldTit">사전등록시 유의사항</dt>
                        <dd>
                            <ul class="listBl">
                                <li>ⓐ 신청서 작성 후 등록비 결제 및 입금은 당일에 이루어질 수 있도록 협조하여 주시기 바랍니다.</li>
                                <li>ⓑ 등록비 계좌이체 시, 입금자명과 등록자 성함이 동일해야 확인 가능하며, 입금자명이 다를 경우 사무국으로 연락 주시기 바랍니다.</li>

                            </ul>
                        </dd>

                        <dt class="boldTit">환불규정</dt>
                        <dd>
                            <ul class="listBl">
                                <li> 사전등록 취소 및 환불 신청은 양식을 다운 받아 작성 후 학회사무국 이메일<a href="mailto:kscpmd@kscpmd.or.kr" style="text-indent:0;">(kscpmd@kscpmd.or.kr)</a>로 보내주시기 바랍니다.</li>
<!--                                <li>성함, 면허번호, 연락처, 결제 수단 (카드, 입금 등)</li>-->
<!--                                <li>입금 진행 시, 환불받을 계좌 정보(계좌번호, 예금주명) 표기</li>-->
                                <li> 사전등록기간(~2023년 6월 22일까지)동안만 환불이 가능하며 사전등록 기간 이후 환불 신청 건은 환불이 불가능합니다.</li>
                            </ul>
                        </dd>
                        
                    
                    </dl>
                    <ul class="btn" >
                        <li class="btnArr"><a href="/assets/download/refund_form.docx" class="btnPoint">환불신청서 다운로드</a></li>
                    </ul>
	
                </div>

            </div>
		</div>
		<!-- //contents -->
	
	</div>
	<!-- //container -->
