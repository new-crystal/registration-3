	<!-- 메인 페이지일 경우 class="main" 추가 -->
	<div id="container"  class="main"  >

		<div class="contents">
			<h2 class="subTit exin">온라인 사전등록 및 확인</h2>
			
			<div class="txtCon" style="min-height:500px;">
                <div class="txtCon regist">
                    <ul class="conMenu">
                        <li><a href="/registration/info/">사전등록 안내</a></li>
                        <li><a href="/registration/enroll/">사전등록(현장참석)</a></li>
                        <li class="on" ><a href="/registration/search/">사전등록 확인</a></li>
                    </ul>
			
                    <dl class="registInfo">

                        <script type="text/javascript">
                        $(function(){
                            $("#searchForm").submit(function(){
                                $gotype = $(':radio[name="type"]:checked').val();
                                if( ! $.trim($("#name").val()) ){
                                    alert("이름을 입력해주세요.");
                                    $("#name").focus();
                                    return false;
                                }
                                if( ! $.trim($("#email").val()) ){
                                    alert("이메일을 입력해주세요.");
                                    $("#license").focus();
                                    return false;
                                }

                        //        if($gotype == "P") $("#searchForm").attr("action", "viewP.php");
                        //        if($gotype == "G") $("#searchForm").attr("action", "viewG.php");

                                $("#searchForm").attr("action", "/registration/search");

                                return true;
                            });
                        });
                        </script>
                        <div class="txtCon regist">
                            <h3 class="hidden">사전등록 확인</h3>
                                <?php echo validation_errors(); ?>
                                <?php echo form_open('registration/search', 'id="searchForm" name="searchForm"') ?>
<!--                            <form id="searchForm" name="searchForm" action="viewP.php" method="post"> -->
                                <fieldset>
                                    <legend>온라인 사전등록</legend>
                                    
                                    <div class="registSearch">
                                    
                                        <p>* 본인확인을 위한 절차입니다. <span class="fcPoint fwBold">성명</span>과 입력하신 <span class="fcPoint fwBold">E-mail</span>을 정확히 입력해 주시기 바랍니다.</p>
                                        
                                        <dl>
                                            <dt class="hidden">타입선택</dt>
                                            
                                            <dt class="hidden">성명</dt>
                                            <dd><input type="text" name="name" id="name" class="_placeholder" placeholder="성명"></dd>
                                            
<!--
                                            <dt class="hidden">면허번호</dt>
                                            <dd><input type="text" name="license" id="license" class="_placeholder" placeholder="면허번호"></dd>
-->

                                            <dt class="hidden">이메일</dt>
                                            <dd><input type="text" name="email" id="email" class="_placeholder" placeholder="이메일"></dd>
                                        </dl>

                                        <div class="btn btnArr">
                                            <input type="submit" value="확인" class="btnPoint">
                                            <input type="reset" value="취소" class="btnDef">
                                        </div>
                                    
                                    </div>
                                    <!-- //bdArea -->
                                    
                                </fieldset>
                            </form>
                        </div>

                    </dl>

                </div>

            </div>
        </div>
		<!-- //contents -->
	
	</div>
	<!-- //container -->
