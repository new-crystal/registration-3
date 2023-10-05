<!-- 메인 페이지일 경우 class="main" 추가 -->
<div id="container" class="main">
    <div class="contents">
        <h2 class="subTit exin">출입 기록</h2>

        <div class="txtCon" style="min-height:500px;">
            <div class="txtCon regist">

                <dl class="registInfo">

                    <script type="text/javascript">
                    $(function() {
                        $("#accessForm").submit(function() {
                            if (!$.trim($("#qrcode").val())) {
                                alert("QR CODE를 입력하세요.");
                                $("#qrcode").focus();
                                return false;
                            }

                            $("#accessForm").attr("action", "/access");

                            return true;
                        });
                    });
                    </script>
                    <div class="txtCon regist">
                        <h3 class="hidden">QR CODE 입력</h3>
                        <?php echo validation_errors(); ?>
                        <?php echo form_open('/access', 'id="accessForm" name="accessForm"') ?>
                        <fieldset>
                            <legend>QR CODE</legend>

                            <div class="registSearch">

                                <dl class="registInfo">
                                    <dt class="boldTit">
                                        <center>QR CODE 입력</center>
                                    </dt>
                                    <dd>
                                        <ul class="listBl">

                                            <li>
                                                <center>커서를 텍스트박스 안에 놓고 QR 코드 스캐너를 사용하세요.</center>
                                            </li>
                                        </ul>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt class="hidden">QR CODE</dt>
                                    <dd><input type="text" name="qrcode" id="qrcode" class="_placeholder"
                                            placeholder=""></dd>
                                </dl>
                                <dl class="boldTit qr_txt">
                                    <?php
											echo "<dt><h1>$entrance</h1></dt>";
											?>
                                </dl>
                                <dl class="boldTit qr_cont">
                                    <div class="qr_info" id="qr_nick_name">
                                        <center>이　　름 <input type="text"
                                                value="<?php if(isset($name_kor)) echo $name_kor ?>" readonly></center>
                                    </div>
                                    <div class="qr_info" id="qr_org">
                                        <center>소　　속
                                            <input type="text"
                                                value="<?php if(isset($entrance_org)) echo $entrance_org ?>" readonly>
                                        </center>
                                    </div>
                                    <div class="qr_info" id="" style="opacity:0;">
                                        <center>소속
                                            <input type="text" value="hidden" readonly>
                                        </center>
                                    </div>
                                </dl>

                                <dl class="boldTit qr_cont">
                                    <div class="qr_info" id="qr_entrance">
                                        <center>입장시간
                                            <input type="text" value="<?php
                                                        if(isset($enter)){
                                                            $enter = date("Y-m-d H:i",strtotime($enter));
                                                            echo $enter;
                                                        }
                                                    ?>
                                                " readonly>
                                        </center>
                                    </div>
                                    <div class="qr_info" id="qr_exit">
                                        <center>퇴장시간
                                            <input type="text" value="<?php
                                                        if(isset($leave)){
                                                            $leave = date("Y-m-d H:i",strtotime($leave));
                                                            echo $leave;
                                                        }
                                                    ?>
                                                " readonly>
                                        </center>
                                    </div>
                                    <div class="qr_info" id="qr_score">
                                        <center>평　　점
                                            <input class="red" type="text"
                                                value="<?php if(isset($score)) echo $score ?>" readonly>
                                        </center>
                                    </div>
                                </dl>

                                <div class="btn btnSubm">
                                    <input type="submit" value="등록" class="btnPoint">
                                </div>
                            </div>
                            <div class="into_logo"><img src="/assets/images/logo.png"></div>
                            <!-- //bdArea -->
                        </fieldset>
                        </form>
                        <script type="text/javascript">
                        window.scrollTo(0, document.body.scrollHeight);
                        $("#qrcode").focus();
                        $(document).ready(function() {
                            setTimeout(function() {
                                $('.qr_info input').val('');
                                $('.qr_txt').hide();
                            }, 10000);
                        })
                        </script>
                    </div>
                </dl>
            </div>
        </div>
    </div>
    <!-- //contents -->

</div>
<!-- //container -->