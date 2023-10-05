<!-- 메인 페이지일 경우 class="main" 추가 -->
<div id="container"  class="main"  >
    <div class="contents">
        <h2 class="subTit exin">포스터 접수</h2>

        <div class="txtCon" style="min-height:500px;">
            <div class="txtCon regist">

                <ul class="conMenu">
                    <li><a href="/submission/info/">포스터 접수 안내</a></li>
                    <li class="on"><a href="/submission/enroll/">포스터 접수</a></li>
                    <li><a href="/submission/search/">포스터 접수 확인</a></li>
                </ul>

                <script type="text/javascript">
                $(function(){
                    $("#enrollForm").submit(function(){
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

                //        if($gotype == "P") $("#enrollForm").attr("action", "viewP.php");
                //        if($gotype == "G") $("#enrollForm").attr("action", "viewG.php");

                        $("#enrollForm").attr("action", "/submission/enroll");

                        return true;
                    });
                });
                </script>


                <div class="formAbstract">
                    <!--dl>
                        <h3 class="subTit2">- 포스터 세션 초록 접수 -</h3>
                    </dl-->
                    
                    <?php
                        $timestamp = strtotime("Now");
                        if (date("Y-m-d", $timestamp) <= "2023-03-10"){
                    ?>

                    <div class="txtCon regist">
                        <h3 class="hidden">사전등록 확인</h3>
                        <?php echo validation_errors(); ?>
                        <?php echo form_open('/submission/enroll', 'id="enrollForm" name="enrollForm"'); ?>
                            <fieldset>
                                <legend>온라인 사전등록</legend>
                                
                                <div class="registSearch">
                                
                                    <p>* 본인확인을 위한 절차입니다. <span class="fcPoint fwBold">성명</span>과 입력하신 <span class="fcPoint fwBold">E-mail</span>을 정확히 입력해 주시기 바랍니다.</p>
                                    
                                    <dl>
                                        <dt class="hidden">타입선택</dt>
                                        
                                        <dt class="hidden">성명</dt>
                                        <dd><input type="text" name="name" id="name" class="_placeholder" placeholder="성명"></dd>
                                        
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

                    <?php
                        }else {
                    ?>
                    <dl>
                        <h3 class="subTit2">포스터 세션 초록 접수가 마감되었습니다.</h3>
                    </dl>
                    <?php
                        }
                    ?>

                </div>
            </div>
        </div>
    </div>
    <!-- //contents -->

</div>
<!-- //container -->
