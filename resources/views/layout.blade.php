@extends('layouts.header')
<body class="widescreen fixed-left-void">
<!-- Begin page -->
<div id="wrapper" class="enlarged forced">
<!-- Top Bar Start -->
<div class="topbar">
    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <a href="https://gakko-plus.com" class="logo">
                <i class="icon-c-logo"><img src="{{ asset('images/logo_sm.png') }}" height="42"/></i>
                <span><img src="{{ asset('images/logo_light.png') }}" width="120"/></span>
            </a>
        </div>
    </div>
    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="pull-left">
                <button class="button-menu-mobile open-left waves-effect waves-light">
                    <i class="md md-menu"></i>
                </button>
                <span class="clearfix"></span>
            </div>
            @extends('layouts.topmenu')
        </div>
    </div>
</div>
    @extends('layouts.nav')
</div>
<!-- Top Bar End -->
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="container content-page">
        <!-- Start content -->
        <div class="content">
            <!-- content -->
            <div class="wraper container">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-header-2">
                            <h4 class="page-title">授業の投稿</h4>
                            <ol class="breadcrumb">
                                <li class="active">
                                    IT、ビジネス、学問、料理...などなど、自分の好きな事や得意を配信してみよう！
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- Display content here -->
                @yield('content')

            </div>
            <!-- container -->
        </div>
    <!-- End content -->
    @extends('layouts.footer')
{{--@extends('Layouts::footer')--}}
</div>
<!-- ============================================================== -->
<!-- End right Content here -->
<!-- ============================================================== -->
</body>
</html>