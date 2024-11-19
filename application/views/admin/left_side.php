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
                                <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
                                <li style="margin-bottom: 2rem;" <?php if ($primary_menu == 'users') echo 'class="active"' ?>>
                                    <a href="/admin">
                                        <i class="icon-list-unordered"></i>
                                        <span> 등록 관리
                                        </span>
                                    </a>
                                </li>

                                <li style="margin-bottom: 2rem;" <?php if ($primary_menu == 'user_qr') echo 'class="active"' ?>>
                                    <a href="/admin/qr_user">
                                        <i class="icon-list-unordered"></i>
                                        <span>QR 관리
                                        </span>
                                    </a>
                                </li>
                                  
                                <li style="margin-bottom: 2rem;"
                                    <?php if ($primary_menu == 'faculty') echo 'class="active"' ?>>
                                    <a href="/admin/faculty">
                                        <i class="icon-list-unordered"></i>
                                        <span>faculty 관리</span>
                                    </a>
                                </li>
                              
                                <li style="margin-bottom: 2rem;" <?php if ($primary_menu == 'qrcode') echo 'class="active"' ?>>
                                    <a href="/admin/access">
                                        <i class="icon-list-unordered"></i>
                                        <span> QR code
                                        </span>
                                    </a>
                                </li>
                                <li style="margin-bottom: 2rem;" <?php if ($primary_menu == 'participant') echo 'class="active"' ?>>
                                    <a href="/admin/participant">
                                        <i class="icon-list-unordered"></i>
                                        <span>참석자 현황
                                        </span>
                                    </a>
                                </li>
                                <!-- <li style="margin-bottom: 2rem;" <?php if ($primary_menu == 'notice') echo 'class="active"' ?>>
                                    <a href="/admin/notice">
                                        <i class="icon-list-unordered"></i>
                                        <span>공지사항
                                        </span>
                                    </a>
                                </li> -->
                            

                                <li style="margin-bottom: 2rem;">
                                    <a href="https://imcvp.org/main/onsite_registration.php" target="_blank">
                                        <i class="icon-user-plus"></i>
                                        <span>현장등록페이지
                                        </span>
                                    </a>
                                </li>
                                <li style="margin-bottom: 2rem;">
                                    <a href="/access/scan_qr" target="_blank">
                                        <i class="icon-qrcode"></i>
                                        <span>세로형 출결 페이지
                                        </span>
                                    </a>
                                </li>
                                <li style="margin-bottom: 2rem;">
                                    <a href="/access/row_scan_qr" target="_blank">
                                        <i class="icon-qrcode"></i>
                                        <span>가로형 출결 페이지
                                        </span>
                                    </a>
                                </li>
                                <li style="margin-bottom: 2rem;"
                                    <?php if ($primary_menu == 'day1') echo 'class="active"' ?>>
                                    <a href="/admin/time_day1">
                                        <i class="icon-list-unordered"></i>
                                        <span> Day별 출결
                                        </span>
                                    </a>
                                </li>

                                <li style="margin-bottom: 2rem;">
                                    <a href="/admin/sicem_qr_excel_download" target="_blank">
                                        <i class="icon-download4"></i>
                                        <span>QR 기록 다운로드
                                        </span>
                                    </a>
                                </li>
                                <li style="margin-bottom: 2rem;" >
                                    <a href="/admin/qr_blank_user" target="_blank">
                                        <i class="icon-download4"></i>
                                        <span>QR 프린트용
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