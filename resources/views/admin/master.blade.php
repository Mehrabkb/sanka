<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>داشبرد | کنترل پنل مدیریت</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('adminpanel') }}/dist/css/bootstrap-theme.css">
    <!-- Bootstrap rtl -->
    <link rel="stylesheet" href="{{ asset('adminpanel') }}/dist/css/rtl.css">
    <!-- persian Date Picker -->
    <link rel="stylesheet" href="{{ asset('adminpanel') }}/dist/css/persian-datepicker-0.4.5.min">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminpanel') }}/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('adminpanel') }}/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminpanel') }}/dist/css/AdminLTE.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('adminpanel') }}/dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ asset('adminpanel') }}/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ asset('adminpanel') }}/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('adminpanel') }}/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ asset('adminpanel') }}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">پنل</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>کنترل پنل مدیریت</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>


            <!-- Delete This after download -->
            <a href="https://github.com/hosseinizadeh/AdminLTE_Persian" class="btn hidden-xs" style="margin:6px 100px;padding:9px 50px;background-color:#d61577;border-color:#ad0b5d;font-weight:bold;color:#FFF">دانلود رایگان قالب</a>
            <!-- End Delete-->



            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">۴ پیام خوانده نشده</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-right">
                                                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                علیرضا
                                                <small><i class="fa fa-clock-o"></i> ۵ دقیقه پیش</small>
                                            </h4>
                                            <p>متن پیام</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                    <li>
                                        <a href="#">
                                            <div class="pull-right">
                                                <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                نگین
                                                <small><i class="fa fa-clock-o"></i> ۲ ساعت پیش</small>
                                            </h4>
                                            <p>متن پیام</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-right">
                                                <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                نسترن
                                                <small><i class="fa fa-clock-o"></i> امروز</small>
                                            </h4>
                                            <p>متن پیام</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-right">
                                                <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                نگین
                                                <small><i class="fa fa-clock-o"></i> دیروز</small>
                                            </h4>
                                            <p>متن پیام</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-right">
                                                <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                نسترن
                                                <small><i class="fa fa-clock-o"></i> ۲ روز پیش</small>
                                            </h4>
                                            <p>متن پیام</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">نمایش تمام پیام ها</a></li>
                        </ul>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">۱۰</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">۱۰ اعلان جدید</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> ۵ کاربر جدید ثبت نام کردند
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-warning text-yellow"></i> اخطار دقت کنید
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-red"></i> ۴ کاربر جدید ثبت نام کردند
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart text-green"></i> ۲۵ سفارش جدید
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-red"></i> نام کاربریتان را تغییر دادید
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">نمایش همه</a></li>
                        </ul>
                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger">۹</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">۹ کار برای انجام دارید</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                ساخت دکمه
                                                <small class="pull-left">20%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">20% تکمیل شده</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                ساخت قالب جدید
                                                <small class="pull-left">40%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">40% تکمیل شده</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                تبلیغات
                                                <small class="pull-left">60%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">60% تکمیل شده</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                ساخت صفحه فرود
                                                <small class="pull-left">80%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">80% تکمیل شده</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">نمایش همه</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs">علیرضا حسینی زاده</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                <p>
                                    علیرضا حسینی زاده
                                    <small>مدیریت کل سایت</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">صفحه من</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">فروش</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">دوستان</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">پروفایل</a>
                                </div>
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">خروج</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- right side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-right image">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-right info">
                    <p>علیرضا حسینی زاده</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> آنلاین</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="جستجو">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">منو</li>
                <li class="active treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>داشبرد</span>
                        <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> داشبرد اول</a></li>
                        <li><a href="index2.html"><i class="fa fa-circle-o"></i> داشبرد دوم</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>لایه های صفحه</span>
                        <span class="pull-left-container">
              <span class="label label-primary pull-left">4</span>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> نوار بالا</a></li>
                        <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> باکس ها</a></li>
                        <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> فیکس شده</a></li>
                        <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> سایدبار</a></li>
                    </ul>
                </li>
                <li>
                    <a href="pages/widgets.html">
                        <i class="fa fa-th"></i> <span>ویجت ها</span>
                        <span class="pull-left-container">
              <small class="label pull-left bg-green">جدید</small>
            </span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-pie-chart"></i>
                        <span>نمودارها</span>
                        <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i>نمودار ChartJS</a></li>
                        <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i>نمودار Morris</a></li>
                        <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i>نمودار Flot</a></li>
                        <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i>نمودار Inline charts</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span>اشیای گرافیکی</span>
                        <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> عمومی</a></li>
                        <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> آیکون</a></li>
                        <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> دکمه</a></li>
                        <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> اسلایدر</a></li>
                        <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> تایم لاین</a></li>
                        <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> مدال</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-edit"></i> <span>فرم ها</span>
                        <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> اجزای عمومی</a></li>
                        <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> پیشرفته</a></li>
                        <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> ویرایشگر</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-table"></i> <span>جداول</span>
                        <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> جدول ساده</a></li>
                        <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> جدول داده</a></li>
                    </ul>
                </li>
                <li>
                    <a href="pages/calendar.html">
                        <i class="fa fa-calendar"></i> <span>تقویم</span>
                        <span class="pull-left-container">
              <small class="label pull-left bg-red">۳</small>
              <small class="label pull-left bg-blue">۱۷</small>
            </span>
                    </a>
                </li>
                <li>
                    <a href="pages/mailbox/mailbox.html">
                        <i class="fa fa-envelope"></i> <span>ایمیل ها</span>
                        <span class="pull-left-container">
              <small class="label pull-left bg-yellow">۱۲</small>
              <small class="label pull-left bg-green">۱۶</small>
              <small class="label pull-left bg-red">۵</small>
            </span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-folder"></i> <span>مثال ها</span>
                        <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> سفارش</a></li>
                        <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> پروفایل</a></li>
                        <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> صفحه ورود</a></li>
                        <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> ثبت نام</a></li>
                        <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> قفل صفحه</a></li>
                        <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> ارور ۴۰۴</a></li>
                        <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> ارور ۵۰۰</a></li>
                        <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> صفحه خالی</a></li>
                        <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> صفحه سریع</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-share"></i> <span>چندسطحی</span>
                        <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> سطح اول</a></li>
                        <li class="treeview">
                            <a href="#"><i class="fa fa-circle-o"></i> سطح اول
                                <span class="pull-left-container">
                  <i class="fa fa-angle-right pull-left"></i>
                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-circle-o"></i> سطح دوم</a></li>
                                <li class="treeview">
                                    <a href="#"><i class="fa fa-circle-o"></i> سطح دوم
                                        <span class="pull-left-container">
                      <i class="fa fa-angle-right pull-left"></i>
                    </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="#"><i class="fa fa-circle-o"></i> سطح سوم</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o"></i> سطح سوم</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> سطح اول</a></li>
                    </ul>
                </li>
                <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>مستندات</span></a></li>
                <li class="header">برچسب ها</li>
                <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>مهم</span></a></li>
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>هشدار</span></a></li>
                <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>اطلاعات</span></a></li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    @yield('content')

    <footer class="main-footer text-left">
        <strong>Copyleft &copy; 2014-2017 <a href="https://adminlte.io">Almsaeed Studio</a> & <a href="http://hosseinizadeh.ir/adminlte">Alireza Hosseinizadeh</a></strong>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">فعالیت ها</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">تولد غلوم</h4>

                                <p>۲۴ مرداد</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-user bg-yellow"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">آپدیت پروفایل سجاد</h4>

                                <p>تلفن جدید (800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">نورا به خبرنامه پیوست</h4>

                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-file-code-o bg-green"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">کرون جابز اجرا شد</h4>

                                <p>۵ ثانیه پیش</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">پیشرفت کارها</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                ساخت پوستر های تبلیغاتی
                                <span class="label label-danger pull-left">70%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                آپدیت رزومه
                                <span class="label label-success pull-left">95%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                آپدیت لاراول
                                <span class="label label-warning pull-left">50%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                بخش پشتیبانی سایت
                                <span class="label label-primary pull-left">68%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">وضعیت</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">تنظیمات عمومی</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            گزارش کنترلر پنل
                            <input type="checkbox" class="pull-left" checked>
                        </label>

                        <p>
                            ثبت تمامی فعالیت های مدیران
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            ایمیل مارکتینگ
                            <input type="checkbox" class="pull-left" checked>
                        </label>

                        <p>
                            اجازه به کاربران برای ارسال ایمیل
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            در دست تعمیرات
                            <input type="checkbox" class="pull-left" checked>
                        </label>

                        <p>
                            قرار دادن سایت در حالت در دست تعمیرات
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <h3 class="control-sidebar-heading">تنظیمات گفتگوها</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            آنلاین بودن من را نشان نده
                            <input type="checkbox" class="pull-left" checked>
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            اعلان ها
                            <input type="checkbox" class="pull-left">
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            حذف تاریخته گفتگوهای من
                            <a href="javascript:void(0)" class="text-red pull-left"><i class="fa fa-trash-o"></i></a>
                        </label>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('adminpanel') }}/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('adminpanel') }}/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('adminpanel') }}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="{{ asset('adminpanel') }}/bower_components/raphael/raphael.min.js"></script>
<script src="{{ asset('adminpanel') }}/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="{{ asset('adminpanel') }}/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="{{ asset('adminpanel') }}/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{ asset('adminpanel') }}/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('adminpanel') }}/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ asset('adminpanel') }}/bower_components/moment/min/moment.min.js"></script>
<script src="{{ asset('adminpanel') }}/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="{{ asset('adminpanel') }}/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('adminpanel') }}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="{{ asset('adminpanel') }}/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{ asset('adminpanel') }}/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminpanel') }}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('adminpanel') }}/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('adminpanel') }}/dist/js/demo.js"></script>
</body>
</html>
