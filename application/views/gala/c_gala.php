<?php
    $non_user = 0;
    foreach($users as $item){
        if($item['qr_chk'] == "N"){
            $non_user++;
        }
    }
?>

<script type="text/javascript" src="/assets/js/admin/lecture_history.js"></script>
<style>
table th {
    padding: 0;
    font-size: 1.2rem;
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
    top: 10%;
    left: 52%;
    transform: translate(-50%, -50%);
}

.header_txt{
    display: flex;
    align-items: center;
    justify-content: flex-start;
    font-size: 20px;
    font-weight: 700;
}

.datatable-header{
    width:100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.datatable-header:after{
    content: none;
}

select{
    padding: 8px;
}
</style>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Page header -->
    <div style="display: none;" class="loading_box" onclick="alert('진행중입니다.')">

        <svg class="loading" version="1.1" id="L5" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100"
            enable-background="new 0 0 0 0" xml:space="preserve" width="70px" height="70px">
            <circle fill="#fff" stroke="none" cx="6" cy="50" r="6">
                <animateTransform attributeName="transform" dur="1s" type="translate" values="0 15 ; 0 -15; 0 15"
                    repeatCount="indefinite" begin="0.1" />
            </circle>
            <circle fill="#fff" stroke="none" cx="30" cy="50" r="6">
                <animateTransform attributeName="transform" dur="1s" type="translate" values="0 10 ; 0 -10; 0 10"
                    repeatCount="indefinite" begin="0.2" />
            </circle>
            <circle fill="#fff" stroke="none" cx="54" cy="50" r="6">
                <animateTransform attributeName="transform" dur="1s" type="translate" values="0 5 ; 0 -5; 0 5"
                    repeatCount="indefinite" begin="0.3" />
            </circle>
        </svg>
    </div>
    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Gala Dinner C table 참석자 등록확인 페이지</span></h4>
            </div>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">

        <!-- Basic datatable -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Gala Dinner C table 참석자(<?php echo count($users); ?>)</h5>
            </div>

            <table class="table datatable-basic">
                <thead>
                    <tr>
                        <th></th>
                        <th>접수번호</th>
                        <th style="min-width: 100px">참석자유형</th>
                        <th>테이블</th>
                        <th>이름</th>
                        <th>한글이름</th>
                        <th>소속</th>
                        <th>현장관리</th>
                        <th>전화번호</th>
                        <th>출결시간</th>
                        <th>메모</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($users as $item) {
                        echo '<tr>';
                        echo '<td style="text-align: center;"><input type="checkbox" name="depositChk" class="depositChk" value="' .  $item['registration_no'] . '"></td>';
                        echo '<td class="reg_num pointer">' . $item['registration_no'] . '</td>';
                        echo '<td>' . $item['attendance_type'] . '</td>';
                        echo "<td>
                                <select name=\"gala_table\" data-id=\"".$item["registration_no"]."\">
                                    <option value=\"\" ".(empty($item["gala_table"]) ? "selected" : "").">선택</option>
                                    <option value=\"R\" ".($item["gala_table"] == "R" ? "selected" : "").">R</option>
                                    <option value=\"C\" ".($item["gala_table"] == "C" ? "selected" : "").">C</option>
                                </select>
                            </td>";
                        echo '<td class="user_d"> <a href="/admin/user_detail?n=' . $item['registration_no'] . '"target="_top">' . $item['first_name']  . " " . $item['last_name'] . '</a> </td>';
                        echo '<td class="user_d">' . $item['name_kor'] .'</td>';
                        echo '<td>' . $item['org_nametag'] . '</td>';
                        echo "<td>
                        <select name=\"gala_status\" data-id=\"".$item["registration_no"]."\">
                            <option value=\"\" ".(empty($item["gala_status"]) ? "selected" : "").">선택</option>
                            <option value=\"Y\" ".($item["gala_status"] == "Y" ? "selected" : "").">Y</option>
                            <option value=\"N\" ".($item["gala_status"] == "N" ? "selected" : "").">N</option>
                            <option value=\"TBC\" ".($item["gala_status"] == "TBC" ? "selected" : "").">TBC</option>
                        </select>
                    </td>";
                        echo '<td>' . $item['phone'] . '</td>';
                        echo '<td style="text-align: center;">' .  'Time!!'  . '</td>';
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
            © 2024. <a href="#">온라인 학술대회</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">(주)인투온</a>
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
const regNumList = document.querySelectorAll(".reg_num");

regNumList.forEach((num)=>{
    num.addEventListener("click", ()=>{
        copy(num.innerText)
    })
})

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

document.addEventListener("DOMContentLoaded", function() {
    const searchBar = document.querySelector(".dataTables_filter");
    const userNum = <?php echo count($users); ?>;
    const chkUserNum = <?php echo count($chk_users); ?>;

        if (searchBar) {
            const newElement = document.createElement("div");
            newElement.classList.add("header_txt")
            newElement.textContent = `총원 : ${userNum}명 / 출결 : ${chkUserNum}명`;
            searchBar.insertAdjacentElement("afterend", newElement);
        } else {
            console.warn(".dataTables_filter 요소를 찾을 수 없습니다.");
        }
    });

 
    $("select[name=gala_table]").on("change",function(){
		const gala_table = $(this).val();
		const idx = $(this).data("id");

		$.ajax({
                url : "/gala/change_gala_table", 
                type : "POST", 
                data: {
                        idx: idx,
                        gala_table: gala_table
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

 
    $("select[name=gala_status]").on("change",function(){
		const gala_status = $(this).val();
		const idx = $(this).data("id");

		$.ajax({
                url : "/gala/change_gala_status", 
                type : "POST", 
                data: {
                        idx: idx,
                        gala_status: gala_status
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