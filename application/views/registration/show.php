<!-- 메인 페이지일 경우 class="main" 추가 -->
<div id="container" class="main">
    <div class="contents">
        <h2 class="subTit exin">온라인 사전등록 및 확인</h2>

        <div class="txtCon" style="min-height:500px;">
            <div class="txtCon regist">
                <ul class="conMenu">
                    <li><a href="/registration/info/">사전등록 안내</a></li>
                    <li><a href="/registration/enroll/">사전등록(현장참석)</a></li>
                    <li class="on"><a href="/registration/search/">사전등록 확인</a></li>
                </ul>

                <dl class="registInfo">

                    <div class="txtCon regist">
                        <h3 class="hidden">사전등록 확인</h3>
                        <fieldset>
                            <legend>온라인 사전등록</legend>

                            <div class="registSearch">

                                <dl>
                                    <!--
                                        <dt class="hidden">타입선택</dt>
                                        <dd>
                                            <input type="radio" name="type" value="P"  id="type1" checked="checked"><label for="type1">개인등록</label>
                                            <input type="radio" name="type" value="G"  id="type2"><label for="type2">단체등록</label>
                                        </dd>
-->


                                    <dd>사전 등록이 <span class="fcPoint fwBold">완료</span> 되었습니다.</dd>
                                    <?php
                                    if ($users['fee'] > 0)
                                        echo '<dd><span class="fcRed" id="info_msg">* 등록 주신 메일주소로 전송된 사전등록 완료 메일을 확인해주시고 카드결제를 진행하시거나,<br> 지정하신 입금 예정일까지 무통장 입금 부탁 드립니다.</span></dd>';
                                    else
                                        echo '<br>';
                                    ?>

                                    <dt class="hidden">면허번호</dt>
                                    <dd>
                                        <?php
                                        echo '<span class="fwBold">소속: </span>';
                                        echo $users['org'];
                                        ?>
                                    </dd>

                                    <dt class="hidden">성명</dt>
                                    <dd>
                                        <?php
                                        echo '<span class="fwBold">이름: </span>';
                                        echo $users['nick_name'];
                                        ?>
                                    </dd>

                                    <dt class="hidden">E-mail</dt>
                                    <dd>
                                        <?php
                                        echo '<span class="fwBold">메일: </span>';
                                        echo $users['email'];
                                        ?>
                                    </dd>

                                    <dt class="hidden">등록비</dt>
                                    <dd>
                                        <?php
                                        echo '<span class="fwBold">등록비: </span>';
                                        echo $users['fee'];
                                        ?>
                                    </dd>

                                    <?php
                                    if ($users['fee'] > 0) {
                                        echo '<dt class="hidden">등록비 결제 여부</dt>';
                                        echo '<dd>';
                                        echo '<span class="fwBold">등록비 결제 여부: </span>';
                                        echo '<span id="deposit_statue">' . $users['deposit'] . '</span>';
                                        echo '</dd>';
                                    }
                                    ?>
                                    <div class="tab_area<?php if ($users['deposit'] == '미결제') echo ' active'; ?>" id="tab_payment">
                                        <div class="tab_inner">
                                            <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                                                <li class="w50"><a href="#tab1">무통장입금</a></li>
                                                <li class="w50"><a class="active" href="#tab2">카드결제</a></li>
                                            </ul>
                                            <section id="first-tab-group" class="tabgroup">
                                                <div id="tab1">
                                                    <ul class="listBl">
                                                        <li>
                                                            <table class="tblDef">
                                                                <colgroup>
                                                                    <col style="width:30%;">
                                                                </colgroup>
                                                                <tbody>
                                                                    <tr>
                                                                        <th><b>은행명</b></th>
                                                                        <td>우리은행</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th><b>계좌</b></th>
                                                                        <td>1005-403-423214</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th><b>예금주</b></th>
                                                                        <td>대한심뇌혈관질환예방학회</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div id="tab2">
                                                    <div class="btn">
                                                        <input onclick="kscp_pay()" type="submit" value="결제" class="btnDef">
                                                    </div>
                                            </section>
                                        </div>
                                    </div>
                                </dl>

                            </div>
                            <!-- //bdArea -->

                        </fieldset>

                    </div>
                </dl>

            </div>
        </div>
    </div>
    <!-- //contents -->

</div>
<script>
    $(".tabgroup > div").hide();
    $(".tabgroup > div:last-of-type").show();
    $(".tabs a").click(function(e) {
        e.preventDefault();
        var $this = $(this),
            tabgroup = "#" + $this.parents(".tabs").data("tabgroup"),
            others = $this.closest("li").siblings().children("a"),
            target = $this.attr("href");
        others.removeClass("active");
        $this.addClass("active");
        $(tabgroup).children("div").hide();
        $(target).show();
    });

    function goback(newurl) {
        document.location = newurl;
    }

    function kscp_pay() {
        var amount = <?php echo $users['fee'] ?>;
        //            var amount = 100;
        var buyer_email = '<?php echo $users['email'] ?>';
        var buyer_name = '<?php echo $users['nick_name'] ?>';
        var buyer_tel = '<?php echo $users['phone'] ?>';
        var buyer_addr = '<?php echo $users['addr'] ?>';
        var buyer_postcode = '<?php echo $users['postcode'] ?>';
        var userId = <?php echo $users['id'] ?>;
        var base_url = '<?php echo base_url() ?>'
        var IMP = window.IMP; // 생략가능
        IMP.init('imp16319856'); // 'iamport' 대신 부여받은 "가맹점 식별코드"를 사용
        IMP.request_pay({
            pg: 'html5_inicis', // version 1.1.0부터 지원.
            pay_method: 'card',
            merchant_uid: 'merchant_' + new Date().getTime(),
            name: '대한심뇌혈관질환예방학회 개원의 연수강좌',
            amount: amount,
            buyer_email: buyer_email,
            buyer_name: buyer_name,
            buyer_tel: buyer_tel,
            buyer_addr: buyer_addr,
            buyer_postcode: buyer_postcode,
            custom_data: userId,
            m_redirect_url: base_url + 'Iamport_api/m_get_by_impuid'
        }, function(rsp) { // callback
            if (rsp.success) {
                //[1] 서버단에서 결제정보 조회를 위해 jQuery ajax로 imp_uid 전달하기
                var msg = '결제가 완료되었습니다.';
                msg += '고유ID : ' + rsp.imp_uid;
                msg += '상점 거래ID : ' + rsp.merchant_uid;
                msg += '결제 금액 : ' + rsp.paid_amount;
                msg += '카드 승인번호 : ' + rsp.apply_num;
                // jQuery로 HTTP 요청
                $.ajax({
                    url: "/Iamport_api/get_by_impuid", // 가맹점 서버
                    type: "POST",
                    dataType: "json",
                    data: {
                        imp_uid: rsp.imp_uid,
                        merchant_uid: rsp.merchant_uid,
                        kscp_fee: amount,
                        userId: userId
                    }
                }).done(function(data) {
                    alert('결제가 완료되었습니다.');
                    console.log(data);
                    //                      var txt =  
                    //                      $('#deposit_statue').html
                    //                      window.history.back();
                    //                      goback('/registration/show');
                    document.getElementById("deposit_statue").innerHTML = "카드결제 완료";
                    document.getElementById("tab_payment").style.display = "none"
                    document.getElementById("info_msg").innerHTML = "";
                    //[2] 서버에서 REST API로 결제정보확인 및 서비스루틴이 정상적인 경우
                }).fail(function(xhr, status, error) {
                    //                      alert('error');
                }).always(function() {
                    //                      alert('complete');
                });
            } else {
                alert("결제에 실패하였습니다. 에러 내용: " + rsp.error_msg);
                //                    console.log(rsp);
            }
        });
    }
</script>
<!-- //container -->