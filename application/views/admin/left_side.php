<script type="text/javascript" src="/assets/js/datatables/datatables.min.js"></script>
<link href="/assets/css/admin.css" rel="stylesheet" type="text/css" />

<body>
    <!-- Main navbar -->
    <div class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="/admin"><img src="#" alt=""></a>
        </div>

        <div class="navbar-collapse collapse" id="navbar-mobile">


            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown dropdown-user">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <span>Admin</span>
                        <i class="caret"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">

                        <li><a href="/admin/log_out"><i class="icon-switch2"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->
    <!-- Page container -->
    <div class="page-container" style="min-height: calc(100vh - 46px)">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main sidebar -->
            <div class="sidebar sidebar-main">
                <div class="sidebar-content">
                    <!-- Main navigation -->
                    <div class="sidebar-category sidebar-category-visible">
                        <div class="category-content no-padding">
                            <ul class="navigation navigation-main navigation-accordion">

                                <!-- Main -->
                                <li class="navigation-header"><span>Main</span> <i class="icon-menu"
                                        title="Main pages"></i></li>
                                <li style="margin-bottom: 2rem;"
                                    <?php if ($primary_menu == 'users') echo 'class="active"' ?>>
                                    <a href="/admin">
                                        <i class="icon-list-unordered"></i>
                                        <span> 등록 관리
                                        </span>
                                    </a>
                                </li>

                                <li style="margin-bottom: 2rem;"
                                    <?php if ($primary_menu == 'user_qr') echo 'class="active"' ?>>
                                    <a href="/admin/qr_user">
                                        <i class="icon-list-unordered"></i>
                                        <span>QR 관리
                                        </span>
                                    </a>
                                </li>
                                <li style="margin-bottom: 2rem;"
                                    <?php if ($primary_menu == 'qrcode') echo 'class="active"' ?>>
                                    <a href="/admin/access">
                                        <i class="icon-list-unordered"></i>
                                        <span> QR code
                                        </span>
                                    </a>
                                </li>
                                <li style="margin-bottom: 2rem;">
                                    <a href="/admin/qr_layout_all?type=02" target="_blank">
                                        <i class="icon-printer2"></i>
                                        <span>임원 QR생성
                                        </span>
                                    </a>
                                </li>
                                <li style="margin-bottom: 2rem;">
                                    <a href="/admin/qr_layout_all?type=06" target="_blank">
                                        <i class="icon-printer2"></i>
                                        <span>좌장 QR생성
                                        </span>
                                    </a>
                                </li>

                                <li style="margin-bottom: 2rem;">
                                    <a href="/admin/qr_layout_all?type=05" target="_blank">
                                        <i class="icon-printer2"></i>
                                        <span>연자 QR생성
                                        </span>
                                    </a>
                                </li>
                                <li style="margin-bottom: 2rem;">
                                    <a href="/admin/qr_layout_all?type=04" target="_blank">
                                        <i class="icon-printer2"></i>
                                        <span>패널 QR생성
                                        </span>
                                    </a>
                                </li>
                                <li style="margin-bottom: 2rem;">
                                    <a href="/admin/qr_layout_all?type=01" target="_blank">
                                        <i class="icon-printer2"></i>
                                        <span>일반참가자 QR생성
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/qr_layout_all?type=07" target="_blank">
                                        <i class="icon-printer2"></i>
                                        <span>후원사 QR생성
                                        </span>
                                    </a>
                                </li>
                                <li style="margin-bottom: 2rem;"
                                    <?php if ($primary_menu == 'participant') echo 'class="active"' ?>>
                                    <a href="/admin/participant">
                                        <i class="icon-list-unordered"></i>
                                        <span>참석자 현황
                                        </span>
                                    </a>
                                </li>
                                <li style="margin-bottom: 2rem;"
                                    <?php if ($primary_menu == 'notice') echo 'class="active"' ?>>
                                    <a href="/admin/notice">
                                        <i class="icon-list-unordered"></i>
                                        <span>공지사항
                                        </span>
                                    </a>
                                </li>
                                <!-- <li <?php if ($primary_menu == 'abstracts') echo 'class="active"' ?>>
                                    <a href="/admin/abstracts">
                                        <i class="icon-list-unordered"></i>
                                        <span>초록제출인원
                                        </span>
                                    </a>
                                </li>
                                <li <?php if ($primary_menu == 'new_abstracts') echo 'class="active"' ?>>
                                    <a href="/admin/new_abstracts">
                                        <i class="icon-list-unordered"></i>
                                        <span>(신규)초록제출인원
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/qr_layout_all?type=01" target="_blank">
                                        <i class="icon-printer2"></i>
                                        <span>일반참가자
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/qr_layout_all?type=02" target="_blank">
                                        <i class="icon-printer2"></i>
                                        <span>임원
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/qr_layout_all?type=03" target="_blank">
                                        <i class="icon-printer2"></i>
                                        <span>president
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/qr_layout_all?type=04" target="_blank">
                                        <i class="icon-printer2"></i>
                                        <span>패널
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/qr_layout_all?type=05" target="_blank">
                                        <i class="icon-printer2"></i>
                                        <span>연자
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/qr_layout_all?type=06" target="_blank">
                                        <i class="icon-printer2"></i>
                                        <span>좌장
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/qr_layout_all?type=07" target="_blank">
                                        <i class="icon-printer2"></i>
                                        <span>후원사
                                        </span>
                                    </a>
                                </li>
                              <li> 
                                <a href="/admin/qr_excel_download" target="_blank">
                                    <i class="icon-download4"></i>
                                    <span>QR 기록 다운로드
                                    </span>
                                </a>
                                </li> -->
                                <li>
                                    <a href="/admin/icomes_qr_excel_download" target="_blank">
                                        <i class="icon-download4"></i>
                                        <span>QR 기록 다운로드
                                        </span>
                                    </a>
                                </li>
                                <!-- /main -->
                            </ul>
                        </div>
                    </div>
                    <!-- /main navigation -->

                </div>
            </div>
            <!-- /main sidebar -->