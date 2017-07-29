<?php

//URL
function print_1(){
    return "http://gakko-plus.com";
}
function print_2(){
    return "my-settings.php";
}
function print_3(){
    return "my-profile.php";
}
function print_4(){
    return "live-calendar.php";
}

//レフトサイドメニューの実装
function creating_menu($data){
    if ($data == '1'){
        $PlusCode .= '<div class="left side-menu">';
        $PlusCode .= '<div class="sidebar-inner slimscrollleft">';
        $PlusCode .= '<div id="sidebar-menu">';
        $PlusCode .= '<ul>';

        $PlusCode .= '<li class="text-muted menu-title">Navigation</li>';
                                
        $PlusCode .= '<li class="has_sub">';
        $PlusCode .= '<a href="javascript:void(0);" class="waves-effect"><i class="ti-home"></i> <span> ホーム </span> <span class="menu-arrow"></span></a>';
        $PlusCode .= '<ul class="list-unstyled">';
        $PlusCode .= '<li><a href="http://local.gakko.com">トップ</a></li>';
        $PlusCode .= '<li><a href="#">使い方ガイド</a></li>';
        $PlusCode .= '<li><a href="http://corp.gakko-plus.com">ガッコウ＋とは？</a></li> ';
        $PlusCode .= '</ul>';
        $PlusCode .= '</li>';

        $PlusCode .= '<li class="has_sub">';
        $PlusCode .= '<a href="javascript:void(0);" class="waves-effect"><i class="ti-menu-alt"></i> <span> 授業一覧 </span> <span class="menu-arrow"></span> </a>';
        $PlusCode .= '<ul class="list-unstyled">';
        $PlusCode .= '<li><a href="live-calendar.php">生放送カレンダー</a></li>';
        $PlusCode .= '<li><a href="#">TEST</a></li>';
        $PlusCode .= '<li><a href="#">TEST</a></li>';
        $PlusCode .= '<li><a href="#">TEST</a></li>';
        $PlusCode .= '<li><a href="#">TEST</a></li>';
        $PlusCode .= '<li><a href="#">TEST</a></li>';
        $PlusCode .= '<li><a href="#">TEST</a></li>';
        $PlusCode .= '<li><a href="#">TEST</a></li>';
        $PlusCode .= '</ul>';
        $PlusCode .= '</li>';

        $PlusCode .= '<li class="has_sub">';
        $PlusCode .= '<a href="javascript:void(0);" class="waves-effect"><i class="ti-files"></i> <span> その他 </span> <span class="menu-arrow"></span></a>';
        $PlusCode .= '<ul class="list-unstyled">';
        $PlusCode .= '<li><a href="faq.php">よくある質問</a></li>';
        $PlusCode .= '<li><a href="#">Real Campusについて</a></li>';
        $PlusCode .= '<li><a href="#">会社概要</a></li>';
        $PlusCode .= '<li><a href="#">お問い合わせ</a></li>';
        $PlusCode .= '</ul>';
        $PlusCode .= '</li>';

        $PlusCode .= '<li class="has_sub">';
        $PlusCode .= '<a href="javascript:void(0);" class="waves-effect"><i class="icon-emotsmile"></i> <span> マイページ </span> <span class="menu-arrow"></span></a>';
        $PlusCode .= '<ul class="list-unstyled">';
        $PlusCode .= '<li><a href="my-profile.php">プロフィール</a></li>';
        $PlusCode .= '<li><a href="my-settings.php">個人設定</a></li>';
        $PlusCode .= '<li><a href="#">動画投稿</a></li>';
        $PlusCode .= '<li><a href="#">ログアウト</a></li>';
        $PlusCode .= '</ul>';

        $PlusCode .= '</li>';

        $PlusCode .= '</ul>';
        $PlusCode .= '<div class="clearfix"></div>';
        $PlusCode .= '</div>';
        $PlusCode .= '<div class="clearfix"></div>';
        $PlusCode .= '</div>';
        $PlusCode .= '</div>';
        
        return $PlusCode;
    }
}

//会員登録フォームの実装
function creating_entry($data){
    if ($data == '1'){
        $PlusCode .= '<div id="con-close-modal-r" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">';
        $PlusCode .= '<div class="modal-dialog">';
        $PlusCode .= '<div class="modal-content">';

        $PlusCode .= '<div class="modal-header">';
        $PlusCode .= '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>';
        $PlusCode .= '<h4 class="modal-title">会員登録</h4>';
        $PlusCode .= '</div>';

        $PlusCode .= '<form action="entry.php" method="post" enctype="multipart/form-data" >';
        $PlusCode .= '<div class="modal-body">';

        $PlusCode .= '<div class="row">';
        $PlusCode .= '<div class="col-md-6">';
        $PlusCode .= '<div class="form-group">';
        $PlusCode .= '<label for="field-1" class="control-label">ユーザー名</label>';
        $PlusCode .= '<input id="username_" type="text" name="username" class="form-control" required data-parsley-length="[4,12]" id="field-1" placeholder="4~12文字">';
        $PlusCode .= '</div>';
        $PlusCode .= '</div>';
        $PlusCode .= '</div>';

        $PlusCode .= '<div class="row">';
        $PlusCode .= '<div class="col-md-6">';
        $PlusCode .= '<div class="form-group">';
        $PlusCode .= '<label for="field-2" class="control-label">メールアドレス</label>';
        $PlusCode .= '<input id="email_" type="email" name="email" class="email form-control" required parsley-type="email" id="field-2" placeholder="">';
        $PlusCode .= '</div>';
        $PlusCode .= '</div>';
        $PlusCode .= '</div>';

        $PlusCode .= '<div class="row">';
        $PlusCode .= '<div class="col-md-6">';
        $PlusCode .= '<div class="form-group">';
        $PlusCode .= '<label for="field-3" class="control-label">パスワード</label>';
        $PlusCode .= '<input type="password" id="pass2" name="password" class="form-control" required data-parsley-length="[8,20]" id="field-3" placeholder="8~20字">';
        $PlusCode .= '</div>';
        $PlusCode .= '</div>';
        $PlusCode .= '<div class="col-md-6">';
        $PlusCode .= '<div class="form-group">';
        $PlusCode .= '<label for="field-4" class="control-label">パスワード（確認用）</label>';
        $PlusCode .= '<input type="password" name="password-retry" class="form-control" required data-parsley-length="[8,20]" data-parsley-equalto="#pass2" id="field-4" placeholder="8~20字">';
        $PlusCode .= '</div>';
        $PlusCode .= '</div>';
        $PlusCode .= '</div>';

        $PlusCode .= '<br><hr><br>';

        $PlusCode .= '<div class="row">';
        $PlusCode .= '<div class="col-md-6">';
        $PlusCode .= '<div class="form-group">';
        $PlusCode .= '<label for="field-1" class="control-label">性</label>';
        $PlusCode .= '<input type="text" name="firstname" class="form-control" required data-parsley-length="[1,10]" id="field-5" placeholder="">';
        $PlusCode .= '</div>';
        $PlusCode .= '</div>';
        $PlusCode .= '<div class="col-md-6">';
        $PlusCode .= '<div class="form-group">';
        $PlusCode .= '<label for="field-2" class="control-label">名</label>';
        $PlusCode .= '<input type="text" name="lastname" class="form-control" required data-parsley-length="[1,10]" id="field-6" placeholder="">';
        $PlusCode .= '</div>';
        $PlusCode .= '</div>';
        $PlusCode .= '</div>';

        $PlusCode .= '<div class="row">';
        $PlusCode .= '<div class="col-md-12">';
        $PlusCode .= '<div class="form-group">';
        $PlusCode .= '<label for="field-7" class="control-label">性別</label><br>';
        $PlusCode .= '<div class="radio radio-info radio-inline">';
        $PlusCode .= '<input type="radio" id="inlineRadio1" value="man" name="sex" checked>';
        $PlusCode .= '<label for="inlineRadio1"> 男性 </label>';
        $PlusCode .= '</div>';
        $PlusCode .= '<div class="radio radio-inline">';
        $PlusCode .= '<input type="radio" id="inlineRadio2" value="woman" name="sex">';
        $PlusCode .= '<label for="inlineRadio2"> 女性 </label>';
        $PlusCode .= '</div>';
        $PlusCode .= '</div>';
        $PlusCode .= '</div>';
        $PlusCode .= '</div>';

        $PlusCode .= '<div class="row">';
        $PlusCode .= '<div class="col-md-6">';
        $PlusCode .= '<div class="form-group">';
        $PlusCode .= '<label for="field-7" class="control-label">生年月日</label><br>';
        $PlusCode .= '<div class="input-group">';
        $PlusCode .= '<input type="text" class="form-control" required data-parsley-length="[11,11]" placeholder="1990年01年01日" id="datepicker" name="birthday">';
        $PlusCode .= '<span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>';
        $PlusCode .= '</div>';
        $PlusCode .= '</div>';
        $PlusCode .= '</div>';
        $PlusCode .= '</div>';

        $PlusCode .= '<div class="row">';
        $PlusCode .= '<div class="col-md-12">';
        $PlusCode .= '<div class="form-group">';
        $PlusCode .= '<div class="checkbox checkbox-primary">';
        $PlusCode .= '<input id="checkbox2" type="checkbox" name="mailoption" checked>';
        $PlusCode .= '<label for="checkbox2">配信メールを受け取る（新着講義やキャンペーン等）</label>';
        $PlusCode .= '</div>';
        $PlusCode .= '</div>';
        $PlusCode .= '</div>';
        $PlusCode .= '</div>';
                                        
        $PlusCode .= '<div class="modal-footer">';
        $PlusCode .= '<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">閉じる</button>';
        $PlusCode .= '<button type="button" class="btn btn-info waves-effect waves-light" id="entry">同意して登録</button>';
        $PlusCode .= '</div>';
        $PlusCode .= '</form>';
        $PlusCode .= '</div>';
        $PlusCode .= '</div>';
        $PlusCode .= '</div>';
        $PlusCode .= '</div>';

        return $PlusCode;
    }
}


?>