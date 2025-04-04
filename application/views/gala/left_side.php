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
                            
                                <li style="margin-bottom: 2rem;" <?php if ($primary_menu == 'all_user') echo 'class="active"' ?>>
                                    <a href="/gala">
                                        <i class="icon-list-unordered"></i>
                                        <span>전체 참석자 관리
                                        </span>
                                    </a>
                                </li>
                                <li style="margin-bottom: 2rem;" <?php if ($primary_menu == 'gala_users') echo 'class="active"' ?>>
                                    <a href="/gala/gala_users">
                                        <i class="icon-list-unordered"></i>
                                        <span>갈라디너 관리
                                        </span>
                                    </a>
                                </li>
                                <li style="margin-bottom: 2rem;" <?php if ($primary_menu == 'gala_r_users') echo 'class="active"' ?>>
                                    <a href="/gala/gala_r_users">
                                        <i class="icon-list-unordered"></i>
                                        <span>갈라 R 테이블 관리
                                        </span>
                                    </a>
                                </li>
                                <li style="margin-bottom: 2rem;" <?php if ($primary_menu == 'gala_c_users') echo 'class="active"' ?>>
                                    <a href="/gala/gala_c_users">
                                        <i class="icon-list-unordered"></i>
                                        <span>갈라 C 테이블 관리
                                        </span>
                                    </a>
                                </li>
                                <li style="margin-bottom: 2rem;" <?php if ($primary_menu == 'gala_non_users') echo 'class="active"' ?>>
                                    <a href="/gala/gala_non_users">
                                        <i class="icon-list-unordered"></i>
                                        <span>갈라디너 미참석 관리
                                        </span>
                                    </a>
                                </li>
                                <li style="margin-bottom: 2rem;" <?php if ($primary_menu == 'gala_participants') echo 'class="active"' ?>>
                                    <a href="/gala/gala_participants">
                                        <i class="icon-list-unordered"></i>
                                        <span>갈라디너 참석자 현황
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