

<script type="text/javascript" src="/assets/js/admin/lecture_history.js"></script>
<!-- <script type="text/javascript" src="../../assets/js/admin/lecture_history.js"></script> -->
<script type="text/javascript" src="/assets/js/datatables/datatables.min.js"></script>
<link href="/assets/css/admin.css" rel="stylesheet" type="text/css" />
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

</style>
<script>
    const path = window.location.pathname;
    let type = 0;
    if(path === '/score/admin'){
        type = 0;
    }
    else if(path === '/score/admin_poster1'){
        type = 1;
    }
    else if(path === '/score/admin_poster2'){
        type = 2;
    }

      document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("typeInput").value = type;
    });
</script>
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
                <h4><span class="text-semibold">초록 점수 집계</span></h4>
            </div>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">

        <!-- Basic datatable -->
        <div class="panel panel-flat">

            <div class="panel-heading">
                <h5 class="panel-title">등록 초록</h5>
                <div class="heading-elements">
                    <?php if ($primary_menu == 'poster_1' || $primary_menu == 'poster_2' ) { ?>
                    <form action="/score/abstract_excel_poster_oral" method="post">
                    <input type="hidden" id="typeInput" name="type" value="0"/>
                        <button class="btn btn-primary pull-right"><i class="icon-download4"></i> Poster oral 전체 Excel</button>
                    </form>
                    <?php } ?>
                    <?php if ($primary_menu == 'oral') { ?>
                    <form action="/score/abstract_excel" method="post">
                    <input type="hidden" id="typeInput" name="type" value="0"/>
                        <button class="btn btn-primary pull-right"><i class="icon-download4"></i> Oral Excel
                            Download</button>
                    </form>
                    <?php } ?>
                    <?php if ($primary_menu == 'poster_1') { ?>
                        
                    <!-- <form action="/score/get_abstract_excel_plus" method="post">
                        <input type="hidden" id="typeInput" name="code1" value="PP1"/>
                        <input type="hidden" id="typeInput" name="code2" value="PP2"/>
                        <button class="btn btn-success pull-right"><i class="icon-download4"></i> PP1 + PP2 Excel</button>
                    </form> -->
                    <form action="/score/get_abstract_excel_plus" method="post">
                        <input type="hidden" id="typeInput" name="code1" value="PP2"/>
                        <button class="btn btn-success pull-right"><i class="icon-download4"></i> PP2 Excel</button>
                    </form>
                    <form action="/score/get_abstract_excel_plus" method="post">
                        <input type="hidden" id="typeInput" name="code1" value="PP1"/>
                        <button class="btn btn-success pull-right"><i class="icon-download4"></i> PP1 Excel</button>
                    </form>
                    <form action="/score/abstract_excel" method="post">
                        <input type="hidden" id="typeInput" name="type" value="1"/>
                        <button class="btn btn-success pull-right"><i class="icon-download4"></i> Poster oral 1 Excel</button>
                    </form>
                    <?php } ?>
                    <?php if ($primary_menu == 'poster_2') { ?>
                        <!-- 03.27 hyojun 변경 pp6+pp7 >> pp2+pp7 -->
                    <form action="/score/get_abstract_excel_plus" method="post">
                            <input type="hidden" id="typeInput" name="code1" value="PP7"/>
                            <button class="btn btn-success pull-right"><i class="icon-download4"></i> PP7 Excel</button>
                    </form>
                    <form action="/score/get_abstract_excel_plus" method="post">
                            <input type="hidden" id="typeInput" name="code1" value="PP6"/>
                            <button class="btn btn-success pull-right"><i class="icon-download4"></i> PP6 Excel</button>
                    </form>
                    <form action="/score/get_abstract_excel_plus" method="post">
                            <input type="hidden" id="typeInput" name="code1" value="PP2"/>
                            <input type="hidden" id="typeInput" name="code2" value="PP7"/>
                            <button class="btn btn-success pull-right"><i class="icon-download4"></i> PP2 + PP7 Excel</button>
                    </form>
                    <form action="/score/get_abstract_excel_plus" method="post">
                            <input type="hidden" id="typeInput" name="code1" value="PP3"/>
                            <input type="hidden" id="typeInput" name="code2" value="PP8"/>
                            <button class="btn btn-success pull-right"><i class="icon-download4"></i> PP3 + PP8 Excel</button>
                    </form>
                    <form action="/score/get_abstract_excel_plus" method="post">
                            <input type="hidden" id="typeInput" name="code1" value="PP4"/>
                            <input type="hidden" id="typeInput" name="code2" value="PP9"/>
                            <button class="btn btn-success pull-right"><i class="icon-download4"></i> PP4 + PP9 Excel</button>
                    </form>
                    <form action="/score/get_abstract_excel_plus" method="post">
                            <input type="hidden" id="typeInput" name="code1" value="PP5"/>
                            <input type="hidden" id="typeInput" name="code2" value="PP10"/>
                            <button class="btn btn-success pull-right"><i class="icon-download4"></i> PP5 + PP10 Excel</button>
                    </form>
                    <form action="/score/get_abstract_excel_all" method="post">
                            <button class="btn btn-success pull-right"><i class="icon-download4"></i> PP3 ~ PP10 Excel</button>
                    </form>
                    <form action="/score/abstract_excel" method="post">
                        <input type="hidden" id="typeInput" name="type" value="2"/>
                        <button class="btn btn-success pull-right"><i class="icon-download4"></i> Poster oral 2 Excel</button>
                    </form>
                    <?php } ?>
                </div>
            </div>
            <?php 
            // print_r($abstracts);
            foreach($abstracts_category as $category_num){
                        $category_text = "";
                        $category = $category_num["grouped_category"] ?? "-";
                        switch ($category) {
                            case 'a':
                                    $category_text = "Diabetes/Obesity/Lipid (clinical)";
                                    $category_num = array("1", "6");
                                    break;
                            case 'b':
                                    $category_text = "Diabetes/Obesity/Lipid (basic)";
                                    $category_num = array("2", "7");
                                    break;
                            case 'c':
                                    $category_text = "Thyroid";
                                    $category_num = array("3", "8");
                                    break;
                            case 'd':
                                    $category_text = "Bone/Muscle";
                                    $category_num = array("4", "9");
                                    break;
                            case 'e':
                                    $category_text = "Pituitary/Adrenal/Gonad";
                                    $category_num = array("5", "10");
                                    break;
                        } ?>
                <h1><?php echo $category_text; ?></h1>
            <table class="table datatable-basic">
                <thead>
                    <tr>
                        <th>초록번호</th>
                        <th>성함</th>
                        <th>소속</th>
                        <th>국가</th>
                        <th>제목</th>
                        <th>카테고리</th>
                        <th>총점</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
            
                    foreach($abstracts as $abstract){
                            if(in_array($abstract['category'], $category_num)){
                            echo '<tr>';
                            echo '<td><a href="/score/score_detail?n=' . $abstract['idx'] . '" target="_self">' .$abstract['submission_code'] . '</a></td>';
                            echo '<td>' . $abstract['nick_name'] . '</td>';
                            echo '<td>' . $abstract['org'] . '</td>';
                            echo '<td>' . $abstract['nation'] . '</td>';
                            echo '<td>' . $abstract['title'] . '</td>';
                            echo '<td>' . $category_text . '</td>';
                            echo '<td>' . $abstract['sum'] . '</td>';
                            echo '</tr>';
                    }
                }
                    ?>

                </tbody>
            </table>
            <?php } ?>
        </div>
        <!-- /basic datatable -->
        <!-- <div class="footer text-muted">
             <a href="#">온라인 학술대회</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">(주)인투온</a>
        </div> -->
    </div>
    <!-- /content area -->

</div>
<!-- /main content -->

</div>
<!-- /page content -->

</div>
<!-- /page container -->
<script>
//        $('#allChk').click(function(){
//            if($('input:checkbox[id="allChk"]').prop('checked')){
//                $('input[type=checkbox]').prop('checked',true);
//            }else{
//                $('input[type=checkbox]').prop('checked',false);
//            }
//        })


</script>
