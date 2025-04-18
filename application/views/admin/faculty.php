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
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">학회등록인원</span></h4>
            </div>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">

        <!-- Basic datatable -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">등록 인원</h5>
            </div>

            <table class="table datatable-basic">
                <thead>
                    <tr>
                        <th></th>
                        <th>접수번호</th>
                        <th>참가 유형</th>
                        <th>이름</th>
                        <th>소속</th>
                        <th>전화번호</th>
                        <th>Day 1 출결</th>
                        <th>Day 1 출결시간</th>
                        <th>Day 2 출결</th>
                        <th>Day 2 출결시간</th>
                        <th>Day 3 출결</th>
                        <th>Day 3 출결시간</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        function getAttendanceStatus($item) {
                            $chk_day_1 = ($item['qr_chk_day_1'] === 'Y') ? 'day1출결' : 'day1미출결';
                            $chk_day_2 = ($item['qr_chk_day_2'] === 'Y') ? 'day2출결' : 'day2미출결';
                            $chk_day_3 = ($item['qr_chk_day_3'] === 'Y') ? 'day3출결' : 'day3미출결';
                        
                            return [
                                'chk_day_1' => $chk_day_1,
                                'chk_day_2' => $chk_day_2,
                                'chk_day_3' => $chk_day_3,
                            ];
                        }
                    foreach ($users as $item) {
                    
                        $result = getAttendanceStatus($item);

                        echo '<tr>';
                        echo '<td style="text-align: center;"><input type="checkbox" name="depositChk" class="depositChk" value="' .  $item['registration_no'] . '"></td>';
                        echo '<td class="reg_num pointer">' . $item['registration_no'] . '</td>';
                        echo '<td>' . $item['attendance_type'] . '</td>';
                        // echo '<td>' . $item['member_type'] . '</td>';
                        // echo '<td>' . $item['type1'] . '</td>';
                        echo '<td class="user_d"> <a href="/admin/user_detail?n=' . $item['registration_no'] . '"target="_top">' . $item['first_name']  . " " . $item['last_name'] . '</a> </td>';
                        echo '<td>' . $item['org_nametag'] . '</td>';
                        echo '<td>' . $item['phone'] . '</td>';
                        echo '<td style="text-align: center;">' . $result['chk_day_1'] . '</td>';
                        echo '<td style="text-align: center;">' . $item['mintime_day_1'] . '</td>';
                        echo '<td style="text-align: center;">' . $result['chk_day_2']. '</td>';
                        echo '<td style="text-align: center;">' . $item['mintime_day_2'] . '</td>';
                        echo '<td style="text-align: center;">' . $result['chk_day_3'] . '</td>';
                        echo '<td style="text-align: center;">' . $item['mintime_day_3'] . '</td>';
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

document.addEventListener("DOMContentLoaded", function() {
const searchBar = document.querySelector(".dataTables_filter");
const userNum = <?php echo count($users); ?>;
const nonUserNum = <?php echo $non_user; ?>;

    if (searchBar) {
        const newElement = document.createElement("div");
        newElement.classList.add("header_txt")
        newElement.textContent = `총원 : ${userNum}명 / 미출결 : ${nonUserNum}명`;
        searchBar.insertAdjacentElement("afterend", newElement);
    } else {
        console.warn(".dataTables_filter 요소를 찾을 수 없습니다.");
    }
});


</script>