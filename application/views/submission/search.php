	<!-- 메인 페이지일 경우 class="main" 추가 -->
	<div id="container"  class="main"  >

		<div class="contents">
			<h2 class="subTit exin">포스터 접수 확인 및 수정</h2>
			
			<div class="txtCon" style="min-height:500px;">
                <div class="txtCon regist">
                    <ul class="conMenu">
                        <li><a href="/submission/info/">포스터 접수 안내</a></li>
                        <li><a href="/submission/enroll/">포스터 접수</a></li>
                        <li class="on" ><a href="/submission/search/">포스터 접수 확인</a></li>
                    </ul>
			
                    <dl class="registInfo">

                        <script type="text/javascript">
                        $(function(){
                            $("#searchForm").submit(function(){
                                if( ! $.trim($("#name").val()) ){
                                    alert("이름을 입력해주세요.");
                                    $("#name").focus();
                                    return false;
                                }
                                if( ! $.trim($("#serial").val()) ){
                                    alert("등록번호를 입력해주세요.");
                                    $("#license").focus();
                                    return false;
                                }
                                $("#searchForm").attr("action", "/submission/search");

                                return true;
                            });
                        });
                        </script>
                        <div class="txtCon regist">
                            <h3 class="hidden">포스터 접수 확인</h3>
                                <?php echo validation_errors(); ?>
                                <?php echo form_open('submission/search', 'id="searchForm" name="searchForm"') ?>
                                <fieldset>
                                    <legend>포스터 접수 확인</legend>
                                    
                                    <div class="registSearch">
                                    
                                        <p>* 본인확인을 위한 절차입니다. <span class="fcPoint fwBold">성명</span>과 <span class="fcPoint fwBold">접수번호</span>를 정확히 입력해 주시기 바랍니다.</p>
                                        
                                        <dl>
                                            <dt class="hidden">타입선택</dt>
                                            
                                            <dt class="hidden">접수번호</dt>
                                            <dd><input type="text" name="serial" id="serial" class="_placeholder" placeholder="접수번호"></dd>
                                            
                                            <dt class="hidden">성명</dt>
                                            <dd><input type="text" name="name" id="name" class="_placeholder" placeholder="성명"></dd>

                                        </dl>

                                        <div class="btn btnArr">
                                            <input type="submit" value="확인" class="btnPoint">
                                            <input type="reset" value="취소" class="btnDef">
                                        </div>
                                    
                                    </div>
                                    
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
