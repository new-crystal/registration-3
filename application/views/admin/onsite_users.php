<script type="text/javascript" src="/assets/js/admin/lecture_history.js"></script>
<style>
    table th {
        padding: 0;
        font-size: 12px !important;
        padding: 8px !important;
    }

    table {
        font-size: 13px !important;
    }

    table td {
        padding: 4px !important;
    }

    .loading_box {
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        transform: translateX(-200px);
        z-index: 9999;
    }

    .loading {
        position: absolute;
        top: 20%;
        left: 52%;
        transform: translate(-50%, -50%);
    }

    select {
        padding: 8px;
    }
    .p-8{
        padding: 8px 16px;   
    }
</style>

<!-- Main content -->
<div class="content-wrapper">
    <!-- Page header -->
    <div style="display: none;" class="loading_box" onclick="alert('진행중입니다.')">

        <svg class="loading" version="1.1" id="L5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve" width="70px" height="70px">
            <circle fill="#fff" stroke="none" cx="6" cy="50" r="6">
                <animateTransform attributeName="transform" dur="1s" type="translate" values="0 15 ; 0 -15; 0 15" repeatCount="indefinite" begin="0.1" />
            </circle>
            <circle fill="#fff" stroke="none" cx="30" cy="50" r="6">
                <animateTransform attributeName="transform" dur="1s" type="translate" values="0 10 ; 0 -10; 0 10" repeatCount="indefinite" begin="0.2" />
            </circle>
            <circle fill="#fff" stroke="none" cx="54" cy="50" r="6">
                <animateTransform attributeName="transform" dur="1s" type="translate" values="0 5 ; 0 -5; 0 5" repeatCount="indefinite" begin="0.3" />
            </circle>
        </svg>
    </div>
    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">현장 등록 인원</span>(<span class="date"></span>)</h4>
            </div>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">

        <!-- Basic datatable -->
        <div class="panel panel-flat">

            <div class="panel-heading">
                <h5 class="panel-title">현장 등록 인원(<?php echo count($users) ?>명)</h5>
                <div class="heading-elements">
                    <form class="excel_form" method="post">
                        <button class="btn btn-primary pull-right"><i class="icon-download4"></i> &nbspExcel Download</button>
                    </form>
                    <!-- <a class="btn btn-primary pull-right" href="/admin/onsite_users?day=day3"><i class="icon-checkmark"></i> &nbspday 3</a>
                    <a class="btn btn-primary pull-right" href="/admin/onsite_users?day=day2"><i class="icon-checkmark"></i> &nbspday 2</a>
                    <a class="btn btn-primary pull-right" href="/admin/onsite_users?day=day1"><i class="icon-checkmark"></i> &nbspday 1</a>
                    <a class="btn btn-primary pull-right" href="/admin/onsite_users?day=all"><i class="icon-checkmark"></i> &nbspAll days</a> -->
                </div>
            </div>

            <table class="table datatable-basic">
                <thead>
                    <tr>
                        <th style="width: 30px;"></th>
                        <th>Registration No.</th>
                        <th>결제상태</th>
                        <th>등록비</th>
                        <th>결제수단</th>
                        <th>프린트</th>
                        <th>하단띠지</th>
                        <th>Special Food</th>
                        <th>Type of Participation</th>
                        <th>Full Name</th>
                        <th>성함</th>
                        <th>네임택용 Affiliation </th>
                        <th>ID(E-mail)</th>
                        <th>메모</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $index = 1;
                    foreach ($users as $item) {
                        $index++;
                        if ($index % 2 === 0) {
                            echo '<tr style="background-color:#eee">';
                        } else {
                            echo '<tr>';
                        }
                        echo '<td style="text-align: center;"><input type="checkbox" name="depositChk" class="depositChk" value="' .  $item['registration_no'] . '"></td>';
                        echo '<td class="user_d" onclick="copy(\'' . $item['registration_no'] . '\')">' . $item['registration_no'] . '</td>';
                        if ($item['deposit'] != "결제완료") {
                            echo '<td style="color:red;">';
                        } else {
                            echo '<td style="color:black;">';
                        }
                   
                        echo '' . $item['deposit'] . '</td>';
                        echo '</td>';
                        echo '<td>' . $item['fee']  . '</td>';
                        echo "<td>
                                <select name=\"deposit_method\" data-id=\"".$item["registration_no"]."\">
                                    <option value=\"\" ".(empty($item["deposit_method"]) ? "selected" : "").">선택</option>
                                    <option value=\"Credit card\" ".($item["deposit_method"] == "Credit card" ? "selected" : "").">카드</option>
                                    <option value=\"Remittance without bank book\" ".($item["deposit_method"] == "Remittance without bank book" ? "selected" : "").">계좌이체</option>
                                    <option value=\"Free\" ".($item["deposit_method"] == "Free" ? "selected" : "").">무료</option>
                                    <option value=\"Cash Payment\" ".($item["deposit_method"] == "Cash Payment" ? "selected" : "").">현금결제</option>
                                </select>
                            </td>";
                        echo '<td><button class="bg-indigo-600 p-8" onclick="print(\'' . $item['registration_no'] . '\')">출력</button></td>';
                        // if ($item['member_status'] == "비회원") {
                        //     echo '<td style="color:black;">';
                        // } else {
                        //     echo '<td style="color:red;">';
                        // }
                        // echo '' . $item['member_status'] . '</td>';
                        echo '<td>' . $item['remark1'] . '</td>';
                        echo '<td>' . $item['special_request_food'] . '</td>';
                        echo '<td>' . $item['attendance_type'] . '</td>';
                        echo '<td>' . $item['first_name']  . " " . $item['last_name'] .  '</td>';
                        echo '<td>' . $item['name_kor'] . '</td>';
                        echo '<td>' . $item['org_nametag'] . '</td>';
                        echo '<td class="user_d"><a href="/admin/user_detail?n=' . $item['registration_no'] . '" target="_self">' . $item['email'] . '</a></td>';
                       
                        if ($item['memo'] != "" && $item['memo'] != 'null') {
                            echo '<td>';
                            echo '<button class="btn qr_btn memo bg-indigo-800" onclick="onClickMemo(\'' . $item['registration_no'] . '\')" data-id="' . $item['registration_no'] . '" style="padding:8px;">메모</button>';
                        } else {
                            echo '<td>';
                            echo '<button class="btn qr_btn memo border-indigo-800 text-indigo-800 bg-white" onclick="onClickMemo(\'' . $item['registration_no'] . '\')" data-id="' . $item['registration_no'] . '"style="padding:8px;">메모</button>';
                        }
                        echo '</td>';
                        echo '</tr>';
                    }
                    ?>

                </tbody>
            </table>
        </div>
        <!-- /basic datatable -->
        <div class="footer text-muted">
            © 2023. <a href="#">온라인 학술대회</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">(주)인투온</a>
        </div>
    </div>
    <!-- /content area -->

</div>
<!-- /main content -->

</div>
<!-- /page content -->

</div>
<!-- /page container -->
<script>
    const urlParams = new URLSearchParams(window.location.search);
    const day = 'all';
    // const day = urlParams.get('day');
    document.querySelector(".excel_form").action = `/admin/excel_download_onsite?day=${day}`;
    document.querySelector(".date").innerText = day;

    function copy(text) {
        if (navigator.clipboard) {
            navigator.clipboard
                .writeText(text)
                .then(() => {
                    alert('클립보드에 복사되었습니다.');
                })
                .catch(() => {
                    alert('복사를 다시 시도해주세요.');
                });
        }
    }

    function onClickMemo(id) {
        const url = `/admin/memo?n=${id}`;
        window.open(url, "Certificate", "width=500, height=300, top=30, left=30");
    }

    function print(reg) {
        const url = `/qrcode/print_file?registration_no=${reg}`
        fetch(url).then((res) => window.open(res.url))
    }
   
    $("select[name=deposit_method]").on("change",function(){
		const deposit_method = $(this).val();
		const idx = $(this).data("id");

		$.ajax({
                url : "/admin/onsite_check", 
                type : "POST", 
                data: {
                        idx: idx,
                        deposit_method: deposit_method
                    },
                dataType : "JSON", 
                success : function(res){
                    if(res.code == 200) {
                        alert("변경이 완료되었습니다.");
                        window.location.reload()
                    } else {
                        alert("문제가 발생했습니다. 잠시 후 다시 시도해주세요.");
                    }
                },
                error: function () {
                    alert("서버 통신 오류입니다.");
                }
            });
	});

</script>
</body>