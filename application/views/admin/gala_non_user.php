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
    top: 20%;
    left: 52%;
    transform: translate(-50%, -50%);
}
</style>
<?php
$count = 0;
foreach ($users as $item) {
    if ($item['etc5'] !== 'Y') {
        $count++;
    }
}

?>

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
                <h5 class="panel-title">등록 인원(<?php echo $count ?>)</h5>
                <div class="heading-elements">
                    <a class="btn btn-primary pull-right" href="/admin/qr_excel_gala_download"><i
                            class="icon-add"></i>Excel
                        Download</a>
                </div>
            </div>

            <table class="table datatable-basic">
                <thead>
                    <tr>
                        <th></th>
                        <!-- <th>No</th> -->
                        <th style="width: 145px;">접수번호</th>
                        <th>Type of Participation</th>
                        <th>Name</th>
                        <th>이름</th>
                        <th>Affiliation </th>
                        <th>ID(E-mail)</th>
                        <th>Phone Number</th>
                        <th>table number</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $index = 0;
                    foreach ($users as $item) {
                        if ($item['etc5'] !== 'Y') {

                            $index++;
                            if ($index % 2 === 0) {
                                echo '<tr style="background-color:#eee">';
                            } else {
                                echo '<tr>';
                            }
                            echo '<td style="text-align: center;"><input type="checkbox" name="depositChk" class="depositChk" value="' .  $item['registration_no'] . '"></td>';
                            echo '<td class="user_d"><a href="/admin/user_detail?n=' . $item['registration_no'] . '" target="_self">' . $item['registration_no'] . '</a></td>';
                            echo '<td>' . $item['attendance_type'] . '</td>';
                            echo '<td>' . $item['first_name']  . " " .  $item['last_name'] . '</td>';
                            echo '<td>' . $item['name_kor'] . '</td>';
                            echo '<td>' . $item['org_nametag'] . '</td>';
                            echo '<td class="user_d"><a href="/admin/user_detail?n=' . $item['registration_no'] . '" target="_self">' . $item['email'] . '</a></td>';
                            echo '<td>' . $item['phone'] . '</td>';
                            echo '<td style="text-align: center;">' . $item['remark7'] . '</td>';

                            echo '</tr>';
                        }
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

</script>
</body>