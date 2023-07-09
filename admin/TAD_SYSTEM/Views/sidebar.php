<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-fixed main-content-narrow side-trans-enabled page-header-dark">
        <nav id="sidebar" aria-label="Main Navigation">
            <!-- Side Header -->
            <div class="bg-header-dark">
                <div class="content-header bg-white-10">
                    <!-- Logo -->
                    <a class="font-w600 text-white tracking-wide" href="/admin">
                        <span class="smini-visible"> Q<span class="opacity-75">TV</span> </span>
                        <span class="smini-hidden"> QUẢN TRỊ VIÊN </span>
                    </a>
                    <!-- END Logo -->

                    <!-- Options -->
                    <div>
                        <a class="d-lg-none text-white ml-2" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                            <i class="fa fa-times-circle"></i>
                        </a>
                        <!-- END Close Sidebar -->
                    </div>
                    <!-- END Options -->
                </div>
            </div>
            <!-- END Side Header -->

            <!-- Sidebar Scrolling -->
            <div class="js-sidebar-scroll">
                <!-- Side Navigation -->
                <div class="content-side">
                    <ul class="nav-main">
                        <li class="nav-main-heading" style="padding-top: 0;">MENU</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="/admin">
                                <i class="nav-main-link-icon fa fa-tachometer-alt"></i>
                                <span class="nav-main-link-name">Bảng điều khiển</span>
                            </a>
                        </li>
                       
                        <br>
                        <li class="nav-main-heading" style="padding-top: 0;">Danh Mục Free Fire</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="/admin/list/nickff">
                                <i class="nav-main-link-icon fa fa-sim-card"></i>
                                <span class="nav-main-link-name">Acc Free Fire</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="/admin/add/nickff">
                                <i class="nav-main-link-icon fa fa-sim-card"></i>
                                <span class="nav-main-link-name">Thêm Acc Free Fire</span>
                            </a>
                        </li>
                        <li class="nav-main-heading" style="padding-top: 0;">Danh Mục Random Free Fire</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="/admin/list/goirandom">
                                <i class="nav-main-link-icon fa fa-sim-card"></i>
                                <span class="nav-main-link-name">Thêm Gói & List RanDom</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="/admin/add/accrandom">
                                <i class="nav-main-link-icon fa fa-sim-card"></i>
                                <span class="nav-main-link-name">Thêm Acc RanDom</span>
                            </a>
                        </li>
                        <li class="nav-main-heading" style="padding-top: 0;">Danh Mục Kim Cương Free Fire</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="/admin/list/rutkimcuong">
                                <i class="nav-main-link-icon fa fa-diamond"></i>
                                <span class="nav-main-link-name">Đơn Kim Cương Chưa Duyệt</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="/admin/list/rutkimcuong/daduyet">
                                <i class="nav-main-link-icon fa fa-diamond"></i>
                                <span class="nav-main-link-name">Đơn Kim Cương Đã Duyệt</span>
                            </a>
                        </li>
                        <li class="nav-main-heading" style="padding-top: 0;">Danh Mục Vòng Quay</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="/admin/list/vongquaykimcuong">
                                <i class="nav-main-link-icon fa fa-sim-card"></i>
                                <span class="nav-main-link-name">Vòng Quay Kim Cương</span>
                            </a>
                        </li>
                        <li class="nav-main-heading" style="padding-top: 0;">DANH SÁCH</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="/admin/list/member">
                                <i class="nav-main-link-icon fa fa-users"></i>
                                <span class="nav-main-link-name">Thành viên</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="/admin/list/card">
                                <i class="nav-main-link-icon fa fa-sim-card"></i>
                                <span class="nav-main-link-name">Tổng Thẻ Nạp</span>
                            </a>
                        </li>
                       
                         
                       

                        
                        <li class="nav-main-heading">QUẢN TRỊ</li>
                       
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="/admin/administrator/setting-website">
                                <i class="nav-main-link-icon fa fa-cog"></i>
                                <span class="nav-main-link-name">Cài đặt website</span>
                            </a>
                        </li>
                       

                    </ul>
                </div>
                <!-- END Side Navigation -->
            </div>
            <!-- END Sidebar Scrolling -->
        </nav>
        <!-- END Sidebar -->

        <!-- Header -->
        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header">
                <!-- Left Section -->
                <div>
                    <!-- Toggle Sidebar -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                    <button type="button" class="btn btn-dual" data-toggle="layout" data-action="sidebar_toggle">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                    <!-- END Toggle Sidebar -->

                    <!-- Open Search Section -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="btn btn-dual" href="/"><i class="fa fa-fw fa-home"></i> <span class="ml-1 d-none d-sm-inline-block">Trở về website</span></a>
                    
                    <!-- END Open Search Section -->
                </div>
                <!-- END Left Section -->
            </div>
            <!-- END Header Content -->

            <!-- Header Loader -->
            <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
            <div id="page-header-loader" class="overlay-header bg-header-dark">
                <div class="bg-white-10">
                    <div class="content-header">
                        <div class="w-100 text-center">
                            <i class="fa fa-fw fa-sun fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Header Loader -->
        </header>
        <!-- END Header -->
        <main id="main-container">
            <!-- Hero -->
            <!-- <div class="content">
                <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-left">
                    <div>
                        <h1 class="h2 mb-1">
                            Dashboard
                        </h1>
                    </div>
                </div>
            </div> -->
            <!-- END Hero -->

            <!-- Page Content -->
            <div class="content">
