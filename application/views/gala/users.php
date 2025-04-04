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

    select{
        padding:8px 16px;
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
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">전체 등록 인원</span></h4>
            </div>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">

        <!-- Basic datatable -->
        <div class="panel panel-flat">

            <div class="panel-heading">
                <h5 class="panel-title">전체 등록 인원(<?php echo count($users) ?>)</h5>
                <div class="heading-elements">
                

                </div>
            </div>

            <table class="table datatable-basic">
                <thead>
                    <tr>
                        <th style="width: 30px;"></th>
                        <th>Registration No.</th>
                        <th>참가유형</th>
                        <th>Full Name</th>
                        <th>성함</th>
                        <th>네임택용 Affiliation </th>
                        <th>갈라디너 참석여부</th>
                        <th>Phone Number</th>
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
                        echo '<td>' . $item['attendance_type'] . '</td>';
                        echo '<td>' . $item['last_name']  . " " . $item['first_name'] .  '</td>';
                        echo '<td>' . $item['name_kor'] . '</td>';
                        echo '<td>' . $item['org_nametag'] . '</td>';
                        echo "<td>
                                <select name=\"gala\" data-id=\"".$item["registration_no"]."\">
                                    <option value=\"\" ".(empty($item["gala"]) ? "selected" : "").">선택</option>
                                    <option value=\"Gala dinner\" ".($item["gala"] == "Gala dinner" ? "selected" : "").">참석</option>
                                    <option value=\"None\" ".($item["gala"] == "None" ? "selected" : "").">불참석</option>
                                </select>
                            </td>";
                        echo '<td>' . $item['phone'] . '</td>';
                        echo '<td class="user_d"><a href="/admin/user_detail?n=' . $item['registration_no'] . '" target="_self">' . $item['email'] . '</a></td>';
                        if ($item['gala_memo'] != "" && $item['gala_memo'] != 'null') {
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
        const url = `/gala/memo?n=${id}`;
        window.open(url, "Certificate", "width=500, height=300, top=30, left=30");
    }
     
    $("select[name=gala]").on("change",function(){
		const gala_status = $(this).val();
		const idx = $(this).data("id");

		$.ajax({
                url : "/gala/change_gala", 
                type : "POST", 
                data: {
                        regNum: idx,
                        gala: gala_status
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