<form role="search" class="navbar-left app-search pull-left hidden-xs">
    <input type="text" placeholder="講座/授業を検索する" class="form-control">
    <a href=""><i class="fa fa-search"></i></a>
</form>
<ul class="nav navbar-nav navbar-right pull-right">
    <li class="dropdown top-menu-item-xs">
        <!--
            <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                <i class="icon-bell"></i> <span class="badge badge-xs badge-danger"></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg">
                <li class="notifi-title"><span class="label label-default pull-right">New</span>新着情報</li>
                <li class="list-group slimscroll-noti notification-list">

                   <a href="javascript:void(0);" class="list-group-item">
                      <div class="media">
                         <div class="pull-left p-r-10">
                            <em class="fa fa-bell-o noti-custom"></em>
                         </div>
                         <div class="media-body">
                            <h5 class="media-heading">アップデート</h5>
                            <p class="m-0">
                                <small>サイトのデザインが変更されました。</small>
                            </p>
                         </div>
                      </div>
                   </a>
                   <a href="javascript:void(0);" class="list-group-item">
                      <div class="media">
                         <div class="pull-left p-r-10">
                            <em class="fa fa-user-plus noti-pink"></em>
                         </div>
                         <div class="media-body">
                            <h5 class="media-heading">ニュース</h5>
                            <p class="m-0">
                                <small>テストのアラート</small>
                            </p>
                         </div>
                      </div>
                   </a>

                   <a href="javascript:void(0);" class="list-group-item">
                      <div class="media">
                         <div class="pull-left p-r-10">
                            <em class="fa fa-user-plus noti-pink"></em>
                         </div>
                         <div class="media-body">
                            <h5 class="media-heading">ニュース</h5>
                            <p class="m-0">
                                <small>テストのアラート</small>
                            </p>
                         </div>
                      </div>
                   </a>
                　
                </li>
            </ul>
             -->
    </li>
    <!-- Full Screen -->
    <li class="hidden-xs">
        <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
    </li>
    <!-- Icon Menu -->
    <li class="dropdown top-menu-item-xs">
        <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
            <img src="{{ asset('images/users/avatar-1.jpg') }}" alt="user-img" class="img-circle"> </a>
        <ul class="dropdown-menu">
            <!-- <li><a href="my-profile.php"><i class="ti-user m-r-10 text-custom"></i> プロフィール</a></li> -->
            <li><a href="my-settings.php"><i class="ti-settings m-r-10 text-custom"></i> 個人設定</a></li>
            <li class="divider"></li>
            <li><a href="class-library/operation.php"><i class="ti-power-off m-r-10 text-danger"></i> ログアウト</a></li>
        </ul>
    </li>
    <!-- -->
</ul>