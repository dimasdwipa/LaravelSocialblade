<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from mannatthemes.com/frogetor/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 May 2019 03:18:22 GMT -->

<head>
    <meta charset="utf-8">
    <title>Frogetor - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta content="A premium admin dashboard template by themesbrand" name="description">
    <meta content="Mannatthemes" name="author"><!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"><!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Top Bar Start -->
    <div class="topbar">
        <!-- Navbar -->
        <nav class="navbar-custom">
            <!-- LOGO -->
            <div class="topbar-left"><a href="index.html" class="logo"><span><img src="assets/images/logo-sm.png"
                            alt="logo-small" class="logo-sm"> </span><span><img src="assets/images/logo-dark.png"
                            alt="logo-large" class="logo-lg"></span></a></div>
            <ul class="list-unstyled topbar-nav float-right mb-0">
                <li class="dropdown"><a class="nav-link dropdown-toggle arrow-none waves-light waves-effect"
                        data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><i
                            class="mdi mdi-bell-outline nav-icon"></i> <span
                            class="badge badge-danger badge-pill noti-icon-badge">2</span></a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                        <!-- item-->
                        <h6 class="dropdown-item-text">Notifications (258)</h6>
                        <div class="slimscroll notification-list">
                            <!-- item--> <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of
                                        the printing and typesetting industry.</small></p>
                            </a><!-- item--> <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                <p class="notify-details">New Message received<small class="text-muted">You have 87
                                        unread messages</small></p>
                            </a><!-- item--> <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info"><i class="mdi mdi-martini"></i></div>
                                <p class="notify-details">Your item is shipped<small class="text-muted">It is a long
                                        established fact that a reader will</small></p>
                            </a><!-- item--> <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of
                                        the printing and typesetting industry.</small></p>
                            </a><!-- item--> <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
                                <p class="notify-details">New Message received<small class="text-muted">You have 87
                                        unread messages</small></p>
                            </a></div><!-- All--> <a href="javascript:void(0);"
                            class="dropdown-item text-center text-primary">View all <i class="fi-arrow-right"></i></a>
                    </div>
                </li>
                <li class="dropdown"><a class="nav-link dropdown-toggle waves-effect waves-light nav-user"
                        data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><img
                            src="assets/images/users/user-1.jpg" alt="profile-user" class="rounded-circle"> <span
                            class="ml-1 nav-user-name hidden-sm"><i class="mdi mdi-chevron-down"></i></span></a>
                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i
                                class="dripicons-user text-muted mr-2"></i> Profile</a> <a class="dropdown-item"
                            href="#"><i class="dripicons-wallet text-muted mr-2"></i> My Wallet</a> <a
                            class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i> Settings</a>
                        <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted mr-2"></i> Lock screen</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="{{route('logout')}}"><i
                                class="dripicons-exit text-muted mr-2"></i> Logout</a>
                    </div>
                </li>
            </ul>
            <ul class="list-unstyled topbar-nav mb-0">
                <li><button class="button-menu-mobile nav-link waves-effect waves-light"><i
                            class="mdi mdi-menu nav-icon"></i></button></li>
                <li class="hide-phone app-search">
                    <form role="search" class=""><input type="text" placeholder="Search..." class="form-control"> <a
                            href="#"><i class="fas fa-search"></i></a></form>
                </li>
            </ul>
        </nav><!-- end navbar-->
    </div><!-- Top Bar End -->
    <div class="page-wrapper-img">
        <div class="page-wrapper-img-inner">
            <div class="sidebar-user media"><img src="assets/images/users/user-1.jpg" alt="user"
                    class="rounded-circle img-thumbnail mb-1"> <span class="online-icon"><i
                        class="mdi mdi-record text-success"></i></span>
                <div class="media-body">
                    <h5 class="text-light">{{ Auth::user()->name }}</h5>
                    <ul class="list-unstyled list-inline mb-0 mt-2">
                        <li class="list-inline-item"><a href="javascript: void(0);" class=""><i
                                    class="mdi mdi-account text-light"></i></a></li>
                        <li class="list-inline-item"><a href="javascript: void(0);" class=""><i
                                    class="mdi mdi-settings text-light"></i></a></li>
                        <li class="list-inline-item"><a href="javascript: void(0);" class=""><i
                                    class="mdi mdi-power text-danger"></i></a></li>
                    </ul>
                </div>
            </div><!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-right align-item-center mt-2"><button
                                class="btn btn-info px-4 align-self-center report-btn">Creat Report</button></div>
                        <h4 class="page-title mb-2"><i class="mdi mdi-monitor mr-2"></i>Dashboard</h4>
                        <div class="">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Frogetor</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">Dashboard 1</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div><!-- end page title end breadcrumb -->
        </div>
    </div>
    <div class="page-wrapper">
        <div class="page-wrapper-inner">
            <!-- Left Sidenav -->
            <div class="left-sidenav">
                <ul class="metismenu left-sidenav-menu" id="side-nav">
                    <li class="menu-title">Main</li>
                    <li><a href="javascript: void(0);"><i class="mdi mdi-monitor"></i><span>Dashboards</span><span
                                class="badge badge-danger badge-pill float-right">9+</span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="index.html">Dashboard 1</a></li>
                            <li><a href="index-2.html">Dashboard 2</a></li>
                            <li><a href="index-3.html">Dashboard 3</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript: void(0);"><i class="mdi mdi-apps"></i><span>App</span><span
                                class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="app-chat.html"><span>Chat</span></a></li>
                            <li><a href="app-calendar.html"><span>Calendar</span></a></li>
                            <li><a href="javascript: void(0);">ECommerce <span class="menu-arrow left-has-menu"><i
                                            class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="app-ecommerce-product.html">Product</a></li>
                                    <li><a href="app-ecommerce-product-list.html">Product List</a></li>
                                    <li><a href="app-ecommerce-product-detail.html">Product Detail</a></li>
                                    <li><a href="app-ecommerce-cart.html">Cart</a></li>
                                    <li><a href="app-ecommerce-checkout.html">Checkout</a></li>
                                </ul>
                            </li>
                            <li><a href="app-contact-list.html"><span>Contact List</span></a></li>
                        </ul>
                    </li>
                    <li><a href="javascript: void(0);"><i class="mdi mdi-email-variant"></i><span>Email</span><span
                                class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="email-inbox.html">Inbox</a></li>
                            <li><a href="email-read.html">Read Email</a></li>
                        </ul>
                    </li>
                    <li class="menu-title">Components</li>
                    <li><a href="javascript: void(0);"><i class="mdi mdi-cards-playing-outline"></i><span>UI
                                Elements</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="ui-alerts.html">Alerts</a></li>
                            <li><a href="ui-buttons.html">Buttons</a></li>
                            <li><a href="ui-cards.html">Cards</a></li>
                            <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                            <li><a href="ui-modals.html">Modals</a></li>
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-progress.html">Progress</a></li>
                            <li><a href="ui-tabs-accordions.html">Tabs & Accordions</a></li>
                            <li><a href="ui-tooltips-popovers.html">Tooltips & Popover</a></li>
                            <li><a href="ui-carousel.html">Carousel</a></li>
                            <li><a href="ui-pagination.html">Pagination</a></li>
                            <li><a href="ui-grid.html">Grid System</a></li>
                            <li><a href="ui-scrollspy.html">Scrollspy</a></li>
                            <li><a href="ui-spinners.html">Spinners</a></li>
                            <li><a href="ui-toasts.html">Toasts</a></li>
                            <li><a href="javascript: void(0);">Oter Components <span class="menu-arrow left-has-menu"><i
                                            class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="ui-other-animation.html">Animation</a></li>
                                    <li><a href="ui-other-avatar.html">Avatar</a></li>
                                    <li><a href="ui-other-clipboard.html">Clip Board</a></li>
                                    <li><a href="ui-other-files.html">File Meneger</a></li>
                                    <li><a href="ui-other-ribbons.html">Ribbons</a></li>
                                    <li><a href="ui-other-dragula.html"><span>Dragula</span></a></li>
                                    <li><a href="ui-other-check-radio.html"><span>Check & Radio Buttons</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="javascript: void(0);"><i class="mdi mdi-buffer"></i><span>Advanced UI</span><span
                                class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                            <li><a href="advanced-sweetalerts.html">Sweet Alerts</a></li>
                            <li><a href="advanced-nestable.html">Nestable List</a></li>
                            <li><a href="advanced-ratings.html">Ratings</a></li>
                            <li><a href="advanced-highlight.html">Highlight</a></li>
                            <li><a href="advanced-session.html">Session Timeout</a></li>
                            <li><a href="advanced-idle-timer.html">Idle Timer</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript: void(0);"><i class="mdi mdi-clipboard-outline"></i><span
                                class="badge badge-info float-right">8</span><span>Forms</span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="forms-elements.html">Basic Elements</a></li>
                            <li><a href="forms-advanced.html">Advance Elements</a></li>
                            <li><a href="forms-validation.html">Validation</a></li>
                            <li><a href="forms-wizard.html">Wizard</a></li>
                            <li><a href="forms-editors.html">Editors</a></li>
                            <li><a href="forms-repeater.html">Repeater</a></li>
                            <li><a href="forms-x-editable.html">X Editable</a></li>
                            <li><a href="forms-uploads.html">File Upload</a></li>
                            <li><a href="forms-img-crop.html">Image Crop</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript: void(0);"><i class="mdi mdi-poll"></i><span>Charts</span><span
                                class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="charts-apex.html">Apex</a></li>
                            <li><a href="charts-morris.html">Morris</a></li>
                            <li><a href="charts-chartist.html">Chartist</a></li>
                            <li><a href="charts-flot.html">Flot</a></li>
                            <li><a href="charts-peity.html">Peity</a></li>
                            <li><a href="charts-chartjs.html">Chartjs</a></li>
                            <li><a href="charts-sparkline.html">Sparkline</a></li>
                            <li><a href="charts-knob.html">Jquery Knob</a></li>
                            <li><a href="charts-justgage.html">JustGage</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript: void(0);"><i
                                class="mdi mdi-format-list-bulleted-type"></i><span>Tables</span><span
                                class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="tables-basic.html">Basic</a></li>
                            <li><a href="tables-datatable.html">Datatables</a></li>
                            <li><a href="tables-responsive.html">Responsive</a></li>
                            <li><a href="tables-footable.html">Footable</a></li>
                            <li><a href="tables-jsgrid.html">Jsgrid</a></li>
                            <li><a href="tables-editable.html">Editable</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript: void(0);"><i class="mdi mdi-diamond-stone"></i><span>Icons</span><span
                                class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="icons-materialdesign.html">Material Design</a></li>
                            <li><a href="icons-dripicons.html">Dripicons</a></li>
                            <li><a href="icons-fontawesome.html">Font awesome</a></li>
                            <li><a href="icons-themify.html">Themify</a></li>
                            <li><a href="icons-typicons.html">Typicons</a></li>
                        </ul>
                    </li>
                    <li class="menu-title">More</li>
                    <li><a href="javascript: void(0);"><i class="mdi mdi-map"></i><span>Maps</span><span
                                class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="maps-google.html">Google Maps</a></li>
                            <li><a href="maps-vector.html">Vector Maps</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript: void(0);"><i
                                class="mdi mdi-lock-outline"></i><span>Authentication</span><span class="menu-arrow"><i
                                    class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="auth-login.html">Login</a></li>
                            <li><a href="auth-register.html">Register</a></li>
                            <li><a href="auth-recoverpw.html">Recover Password</a></li>
                            <li><a href="auth-lock-screen.html">Lock Screen</a></li>
                            <li><a href="auth-404.html">Error 404</a></li>
                            <li><a href="auth-500.html">Error 500</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript: void(0);"><i
                                class="mdi mdi-book-open-page-variant"></i><span>Pages</span><span
                                class="badge badge-success float-right">Hot</span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="page-tour.html">Tour</a></li>
                            <li><a href="page-timeline.html">Timeline</a></li>
                            <li><a href="page-invoice.html">Invoice</a></li>
                            <li><a href="page-treeview.html">Treeview</a></li>
                            <li><a href="page-profile.html">Profile</a></li>
                            <li><a href="page-starter.html">Starter Page</a></li>
                            <li><a href="page-pricing.html">Pricing</a></li>
                            <li><a href="page-blogs.html"><span>Blogs</span></a></li>
                            <li><a href="page-faq.html">FAQs</a></li>
                            <li><a href="page-gallery.html">Gallery</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);"><i class="mdi mdi-contact-mail"></i><span>Email
                                Templates</span><span class="menu-arrow"><i
                                    class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="email-templates-basic.html">Basic Action Email</a></li>
                            <li><a href="email-templates-alert.html">Alert Email</a></li>
                            <li><a href="email-templates-billing.html">Billing Email</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- end left-sidenav-->
            <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body mb-0">
                                    <div class="row">
                                        <div class="col-8 align-self-center">
                                            <div class="">
                                                <h4 class="mt-0 header-title">Total Sales</h4>
                                                <h2 class="mt-0 font-weight-bold text-dark">40k</h2>
                                                <p class="mb-0 text-muted"><span class="text-success"><i
                                                            class="mdi mdi-arrow-up"></i>14.5%</span> Up From Last Week
                                                </p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-4 align-self-center">
                                            <div class="icon-info text-right"><i
                                                    class="dripicons-cart bg-soft-warning"></i></div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end card-body-->
                                <div class="card-body overflow-hidden p-0">
                                    <div class="d-flex mb-0 h-100 dash-info-box">
                                        <div class="w-100">
                                            <div class="apexchart-wrapper">
                                                <div id="dash_spark_1" class="chart-gutters"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body mb-0">
                                    <div class="row">
                                        <div class="col-8 align-self-center">
                                            <div class="">
                                                <h4 class="mt-0 header-title">Total Revenue</h4>
                                                <h2 class="mt-0 font-weight-bold text-dark">$9090</h2>
                                                <p class="mb-0 text-muted"><span class="text-success"><i
                                                            class="mdi mdi-arrow-up"></i>14.5%</span> Up from yesterday
                                                </p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-4 align-self-center">
                                            <div class="icon-info text-right"><i
                                                    class="dripicons-wallet bg-soft-success"></i></div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end card-body-->
                                <div class="card-body overflow-hidden p-0">
                                    <div class="d-flex mb-0 h-100 dash-info-box">
                                        <div class="w-100">
                                            <div class="apexchart-wrapper">
                                                <div id="apex_column1" class="chart-gutters"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                        <div class="col-lg-4">
                            <div class="card carousel-bg-img">
                                <div class="card-body dash-info-carousel mb-0">
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="row">
                                                    <div class="col-12 align-self-center">
                                                        <div class="text-center">
                                                            <h4 class="mt-0 header-title text-left">Average Product
                                                                Price</h4>
                                                            <div class="icon-info my-3"><i
                                                                    class="dripicons-jewel bg-soft-pink"></i></div>
                                                            <h2 class="mt-0 font-weight-bold text-dark">$1280.00</h2>
                                                            <p class="mb-1 text-muted"><span class="text-success"><i
                                                                        class="mdi mdi-arrow-up"></i>35.5%</span> Last
                                                                100 Subscriptions</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                            <!--end carousel-item-->
                                            <div class="carousel-item">
                                                <div class="row">
                                                    <div class="col-12 align-self-center">
                                                        <div class="text-center">
                                                            <h4 class="mt-0 header-title text-left">New Orders</h4>
                                                            <div class="icon-info my-3"><i
                                                                    class="dripicons-basket bg-soft-info"></i></div>
                                                            <h2 class="mt-0 font-weight-bold text-dark">1824</h2>
                                                            <p class="mb-1 text-muted"><span class="text-danger"><i
                                                                        class="mdi mdi-arrow-down"></i>1.5%</span> Down
                                                                From Last week</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                            <!--end carousel-item-->
                                            <div class="carousel-item">
                                                <div class="row">
                                                    <div class="col-12 align-self-center">
                                                        <div class="text-center">
                                                            <h4 class="mt-0 header-title text-left">Order Returns</h4>
                                                            <div class="icon-info my-3"><i
                                                                    class="dripicons-swap bg-soft-primary"></i></div>
                                                            <h2 class="mt-0 font-weight-bold text-dark">11.1%</h2>
                                                            <p class="mb-1 text-muted"><span class="text-success"><i
                                                                        class="mdi mdi-arrow-up"></i>11.1%</span> Up
                                                                from Last Month</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                            <!--end carousel-item-->
                                            <div class="carousel-item">
                                                <div class="row">
                                                    <div class="col-12 align-self-center">
                                                        <div class="text-center">
                                                            <h4 class="mt-0 header-title text-left">Total Brands</h4>
                                                            <div class="icon-info my-3"><i
                                                                    class="dripicons-store bg-soft-warning"></i></div>
                                                            <h2 class="mt-0 font-weight-bold text-dark">92</h2>
                                                            <p class="mb-1 text-muted">All International Brands</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                            <!--end carousel-item-->
                                            <div class="carousel-item">
                                                <div class="row">
                                                    <div class="col-12 align-self-center">
                                                        <div class="text-center">
                                                            <h4 class="mt-0 header-title text-left">Total Visits</h4>
                                                            <div class="icon-info my-3"><i
                                                                    class="dripicons-user-group bg-soft-success"></i>
                                                            </div>
                                                            <h2 class="mt-0 font-weight-bold text-dark">35k</h2>
                                                            <p class="mb-1 text-muted"><span class="text-success"><i
                                                                        class="mdi mdi-arrow-up"></i>11.1%</span> Up
                                                                from yesterday</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                            <!--end carousel-item-->
                                        </div><a class="carousel-control-prev" href="#carouselExampleControls"
                                            role="button" data-slide="prev"><span class="carousel-control-prev-icon"
                                                aria-hidden="true"></span> <span class="sr-only">Previous</span> </a><a
                                            class="carousel-control-next" href="#carouselExampleControls" role="button"
                                            data-slide="next"><span class="carousel-control-next-icon"
                                                aria-hidden="true"></span> <span class="sr-only">Next</span></a>
                                    </div>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">World Wide Customers</h4>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mt-2"><img src="assets/images/flags/us_flag.jpg" alt=""
                                                    class="mb-2" height="30">
                                                <h5 class="mb-3">Our most customers in America <span
                                                        class="badge badge-primary">March 2019</span></h5>
                                                <p class="font-13 text-muted mb-0">But who has any right to find fault
                                                    with a man who chooses to enjoy a pleasure that has no.</p>
                                                <div class="apexchart-wrapper">
                                                    <div id="d1-radialBarMap" class="chart-gutters"></div>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-md-6">
                                                    <p class="mb-2 text-muted font-13">Domestic Customers</p>
                                                    <h3 class="mt-0"><img src="assets/images/flags/us_flag.jpg" alt=""
                                                            class="mr-2 thumb-xs rounded-circle">2.8k</h3>
                                                    <div class="progress mt-2 mx-auto" style="height:3px;">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-6">
                                                    <p class="mb-2 text-muted font-13">International Customers</p>
                                                    <h3 class="mt-0"><i
                                                            class="fas fa-globe text-muted mr-2 font-30"></i>1.9k</h3>
                                                    <div class="progress mt-2 mx-auto" style="height:3px;">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 55%;" aria-valuenow="55" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-8">
                                            <div id="world-map-markers" class="dashboard-map"></div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body new-user order-list">
                                    <h4 class="header-title mt-0 mb-3">Order List</h4>
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th class="border-top-0">Product</th>
                                                    <th class="border-top-0">Pro Name</th>
                                                    <th class="border-top-0">Country</th>
                                                    <th class="border-top-0">Order Date/Time</th>
                                                    <th class="border-top-0">Pcs.</th>
                                                    <th class="border-top-0">Amount ($)</th>
                                                    <th class="border-top-0">Status</th>
                                                </tr>
                                                <!--end tr-->
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><img class="" src="assets/images/products/img-1.png" alt="user">
                                                    </td>
                                                    <td>Beg</td>
                                                    <td><img src="assets/images/flags/us_flag.jpg" alt=""
                                                            class="img-flag thumb-xxs rounded-circle"></td>
                                                    <td>3/03/2019 4:29 PM</td>
                                                    <td>200</td>
                                                    <td>$750</td>
                                                    <td><span
                                                            class="badge badge-boxed badge-soft-success">Shipped</span>
                                                    </td>
                                                </tr>
                                                <!--end tr-->
                                                <tr>
                                                    <td><img class="" src="assets/images/products/img-2.png" alt="user">
                                                    </td>
                                                    <td>Watch</td>
                                                    <td><img src="assets/images/flags/french_flag.jpg" alt=""
                                                            class="img-flag thumb-xxs rounded-circle"></td>
                                                    <td>13/03/2019 1:09 PM</td>
                                                    <td>180</td>
                                                    <td>$970</td>
                                                    <td><span
                                                            class="badge badge-boxed badge-soft-danger">Delivered</span>
                                                    </td>
                                                </tr>
                                                <!--end tr-->
                                                <tr>
                                                    <td><img class="" src="assets/images/products/img-3.png" alt="user">
                                                    </td>
                                                    <td>Headphone</td>
                                                    <td><img src="assets/images/flags/spain_flag.jpg" alt=""
                                                            class="img-flag thumb-xxs rounded-circle"></td>
                                                    <td>22/03/2019 12:09 PM</td>
                                                    <td>30</td>
                                                    <td>$2800</td>
                                                    <td><span
                                                            class="badge badge-boxed badge-soft-warning">Pending</span>
                                                    </td>
                                                </tr>
                                                <!--end tr-->
                                                <tr>
                                                    <td><img class="" src="assets/images/products/img-4.png" alt="user">
                                                    </td>
                                                    <td>Purse</td>
                                                    <td><img src="assets/images/flags/russia_flag.jpg" alt=""
                                                            class="img-flag thumb-xxs rounded-circle"></td>
                                                    <td>14/03/2019 8:27 PM</td>
                                                    <td>100</td>
                                                    <td>$520</td>
                                                    <td><span
                                                            class="badge badge-boxed badge-soft-success">Shipped</span>
                                                    </td>
                                                </tr>
                                                <!--end tr-->
                                                <tr>
                                                    <td><img class="" src="assets/images/products/img-5.png" alt="user">
                                                    </td>
                                                    <td>Shoe</td>
                                                    <td><img src="assets/images/flags/italy_flag.jpg" alt=""
                                                            class="img-flag thumb-xxs rounded-circle"></td>
                                                    <td>18/03/2019 5:09 PM</td>
                                                    <td>100</td>
                                                    <td>$1150</td>
                                                    <td><span
                                                            class="badge badge-boxed badge-soft-warning">Pending</span>
                                                    </td>
                                                </tr>
                                                <!--end tr-->
                                                <tr>
                                                    <td><img class="" src="assets/images/products/img-6.png" alt="user">
                                                    </td>
                                                    <td>Boll</td>
                                                    <td><img src="assets/images/flags/us_flag.jpg" alt=""
                                                            class="img-flag thumb-xxs rounded-circle"></td>
                                                    <td>30/03/2019 4:29 PM</td>
                                                    <td>140</td>
                                                    <td>$ 650</td>
                                                    <td><span
                                                            class="badge badge-boxed badge-soft-success">Shipped</span>
                                                    </td>
                                                </tr>
                                                <!--end tr-->
                                            </tbody>
                                        </table>
                                        <!--end table-->
                                    </div>
                                    <!--end /div-->
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card overflow-hidden">
                                <div class="card-body bg-gradient1">
                                    <div class="">
                                        <div class="card-icon"><i class="far fa-user"></i></div>
                                        <h2 class="font-weight-bold text-white">10</h2>
                                        <p class="text-white mb-0 font-16">Top 10 Best Saler This Month</p>
                                    </div>
                                </div>
                                <div class="card-body dash-info-carousel">
                                    <div id="carousel_best_saler" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="text-center"><img src="assets/images/users/user-4.jpg"
                                                        alt="user" class="rounded-circle thumb-xl img-thumbnail mb-1">
                                                    <h5>Nancy Flanary</h5>
                                                    <p class="font-12 text-muted"><i class="fas fa-globe mr-2"></i>USA
                                                        Dealer</p>
                                                    <p class="mb-0 text-muted">Contrary to popular belief, Lorem Ipsum
                                                        is not simply random text. It has roots in a piece of classical
                                                        Latin.</p>
                                                    <div class="mt-2 align-item-center">
                                                        <h5 class="font-20 d-inline-block mb-0 mr-3 align-self-center">
                                                            $34800.00</h5><a
                                                            class="btn btn-sm btn-primary text-light mb-2"><i
                                                                class="mdi mdi-email-outline mr-1"></i>Message</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="text-center"><img src="assets/images/users/user-2.jpg"
                                                        alt="user" class="rounded-circle thumb-xl img-thumbnail mb-1">
                                                    <h5>Donald Gardner</h5>
                                                    <p class="font-12 text-muted"><i
                                                            class="fas fa-globe mr-2"></i>Russia Dealer</p>
                                                    <p class="mb-0 text-muted">Contrary to popular belief, Lorem Ipsum
                                                        is not simply random text. It has roots in a piece of classical
                                                        Latin.</p>
                                                    <div class="mt-2 align-item-center">
                                                        <h5 class="font-20 d-inline-block mb-0 mr-3 align-self-center">
                                                            $31200.00</h5><a
                                                            class="btn btn-sm btn-primary text-light mb-2"><i
                                                                class="mdi mdi-email-outline mr-1"></i>Message</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="text-center"><img src="assets/images/users/user-1.jpg"
                                                        alt="user" class="rounded-circle thumb-xl img-thumbnail mb-1">
                                                    <h5>Matt Rosales</h5>
                                                    <p class="font-12 text-muted"><i class="fas fa-globe mr-2"></i>Spain
                                                        Dealer</p>
                                                    <p class="mb-0 text-muted">Contrary to popular belief, Lorem Ipsum
                                                        is not simply random text. It has roots in a piece of classical
                                                        Latin.</p>
                                                    <div class="mt-2 align-item-center">
                                                        <h5 class="font-20 d-inline-block mb-0 mr-3 align-self-center">
                                                            $29200.00</h5><a
                                                            class="btn btn-sm btn-primary text-light mb-2"><i
                                                                class="mdi mdi-email-outline mr-1"></i>Message</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><a class="carousel-control-prev" href="#carousel_best_saler" role="button"
                                            data-slide="prev"><span class="carousel-control-prev-icon"
                                                aria-hidden="true"></span> <span class="sr-only">Previous</span> </a><a
                                            class="carousel-control-next" href="#carousel_best_saler" role="button"
                                            data-slide="next"><span class="carousel-control-next-icon"
                                                aria-hidden="true"></span> <span class="sr-only">Next</span></a>
                                    </div>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                        <div class="col-lg-4">
                            <div class="card overflow-hidden">
                                <div class="card-body bg-gradient3">
                                    <div class="">
                                        <div class="card-icon"><i class="far fa-smile"></i></div>
                                        <h2 class="font-weight-bold text-white">58</h2>
                                        <p class="text-white mb-0 font-16">Stores Very Good Review</p>
                                    </div>
                                </div>
                                <!--end card-body-->
                                <div class="card-body dash-info-carousel">
                                    <div id="carousel_review" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="media"><img src="assets/images/flags/us_flag.jpg"
                                                        class="mr-2 thumb-xs rounded-circle" alt="...">
                                                    <div class="media-body align-self-center">
                                                        <h6 class="m-0">USA Store</h6>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <p class="review-data mb-0">4.8<span>/ 5.0</span></p>
                                                    <p class="px-4 py-1 bg-soft-success d-inline-block rounded">Very
                                                        Good</p>
                                                    <ul class="list-inline mb-1">
                                                        <li class="list-inline-item mr-0"><i
                                                                class="mdi mdi-star text-warning font-16"></i></li>
                                                        <li class="list-inline-item mr-0"><i
                                                                class="mdi mdi-star text-warning font-16"></i></li>
                                                        <li class="list-inline-item mr-0"><i
                                                                class="mdi mdi-star text-warning font-16"></i></li>
                                                        <li class="list-inline-item mr-0"><i
                                                                class="mdi mdi-star text-warning font-16"></i></li>
                                                        <li class="list-inline-item mr-0"><i
                                                                class="mdi mdi-star text-warning font-16"></i></li>
                                                    </ul>
                                                    <p class="mb-1 text-muted">There are many variations of passages of
                                                        Lorem Ipsum available, but the majority have suffered alteration
                                                        in some form, by injected humour, or randomised.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="media"><img src="assets/images/flags/spain_flag.jpg"
                                                        class="mr-2 thumb-xs rounded-circle" alt="...">
                                                    <div class="media-body align-self-center">
                                                        <h6 class="m-0">Spain Store</h6>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <p class="review-data mb-0">4.6<span>/ 5.0</span></p>
                                                    <p class="px-4 py-1 bg-soft-success d-inline-block rounded">Very
                                                        Good</p>
                                                    <ul class="list-inline mb-1">
                                                        <li class="list-inline-item mr-0"><i
                                                                class="mdi mdi-star text-warning font-16"></i></li>
                                                        <li class="list-inline-item mr-0"><i
                                                                class="mdi mdi-star text-warning font-16"></i></li>
                                                        <li class="list-inline-item mr-0"><i
                                                                class="mdi mdi-star text-warning font-16"></i></li>
                                                        <li class="list-inline-item mr-0"><i
                                                                class="mdi mdi-star text-warning font-16"></i></li>
                                                        <li class="list-inline-item mr-0"><i
                                                                class="mdi mdi-star text-warning font-16"></i></li>
                                                    </ul>
                                                    <p class="mb-1 text-muted">There are many variations of passages of
                                                        Lorem Ipsum available, but the majority have suffered alteration
                                                        in some form, by injected humour, or randomised.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="media"><img src="assets/images/flags/russia_flag.jpg"
                                                        class="mr-2 thumb-xs rounded-circle" alt="...">
                                                    <div class="media-body align-self-center">
                                                        <h6 class="m-0">Russia Store</h6>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <p class="review-data mb-0">5.0<span>/ 5.0</span></p>
                                                    <p class="px-4 py-1 bg-soft-success d-inline-block rounded">Exellent
                                                    </p>
                                                    <ul class="list-inline mb-1">
                                                        <li class="list-inline-item mr-0"><i
                                                                class="mdi mdi-star text-warning font-16"></i></li>
                                                        <li class="list-inline-item mr-0"><i
                                                                class="mdi mdi-star text-warning font-16"></i></li>
                                                        <li class="list-inline-item mr-0"><i
                                                                class="mdi mdi-star text-warning font-16"></i></li>
                                                        <li class="list-inline-item mr-0"><i
                                                                class="mdi mdi-star text-warning font-16"></i></li>
                                                        <li class="list-inline-item mr-0"><i
                                                                class="mdi mdi-star text-warning font-16"></i></li>
                                                    </ul>
                                                    <p class="mb-1 text-muted">There are many variations of passages of
                                                        Lorem Ipsum available, but the majority have suffered alteration
                                                        in some form, by injected humour, or randomised.</p>
                                                </div>
                                            </div>
                                        </div><a class="carousel-control-prev" href="#carousel_review" role="button"
                                            data-slide="prev"><span class="carousel-control-prev-icon"
                                                aria-hidden="true"></span> <span class="sr-only">Previous</span> </a><a
                                            class="carousel-control-next" href="#carousel_review" role="button"
                                            data-slide="next"><span class="carousel-control-next-icon"
                                                aria-hidden="true"></span> <span class="sr-only">Next</span></a>
                                    </div>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                        <div class="col-lg-4">
                            <div class="card overflow-hidden">
                                <div class="card-body bg-gradient2">
                                    <div class="">
                                        <div class="card-icon"><i class="fas fa-coins"></i></div>
                                        <h2 class="font-weight-bold text-white">$85750.00</h2>
                                        <p class="text-white mb-0 font-16">Total payments</p>
                                    </div>
                                </div>
                                <!--end card-body-->
                                <div class="card-body">
                                    <div class="">
                                        <div id="d1_payment" class="apex-charts"></div>
                                    </div>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div><!-- container -->
                <footer class="footer text-center text-sm-left">&copy; 2019 Frogetor <span
                        class="text-muted d-none d-sm-inline-block float-right">Crafted with <i
                            class="mdi mdi-heart text-danger"></i> by Mannatthemes</span></footer>
            </div><!-- end page content -->
        </div>
    </div><!-- end page-wrapper -->
    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/waves.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/plugins/moment/moment.js"></script>
    <script src="assets/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="../../../apexcharts.com/samples/assets/irregular-data-series.js"></script>
    <script src="../../../apexcharts.com/samples/assets/series1000.js"></script>
    <script src="../../../apexcharts.com/samples/assets/ohlc.js"></script>
    <script src="assets/pages/jquery.dashboard.init.js"></script><!-- App js -->
    <script src="assets/js/app.js"></script>
</body>
<!-- Mirrored from mannatthemes.com/frogetor/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 May 2019 03:19:02 GMT -->

</html>