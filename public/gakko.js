$(function() {
    $('.center-item').slick({
        infinite: true,
        dots:true,
        slidesToShow: 1,
        variableWidth: true,
        centerMode: true, //要素を中央寄せ
        centerPadding:'200px', //両サイドの見えている部分のサイズ
        autoplay:true, //自動再生
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                centerMode: true,
                centerPadding:'200px', //両サイドの見えている部分のサイズ
            }
        },{
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                centerMode: true,
                centerPadding:'100px', //両サイドの見えている部分のサイズ
            }
        }]
    });

    $('.center-item-content_teacher').slick({
        infinite: true,
        slidesToShow: 5,
        arrows: true,
        prevArrow: '<a class="slick-prev" href="#">前へ</a>',
        nextArrow: '<a class="slick-next" href="#">次へ</a>',
        infinite: false, //スライドループ
        initialSlide: 0, //開始スライド
        centerMode: false, //要素を中央寄せ
        centerPadding:'0px', //両サイドの見えている部分のサイズ
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 3,
                centerMode: false,
                centerPadding:'200px', //両サイドの見えている部分のサイズ
            }
        },{
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                centerMode: false,
                centerPadding:'400px', //両サイドの見えている部分のサイズ
            }
        }]
    });

    $('.center-item-content').slick({
        infinite: true,
        slidesToShow: 4,
        arrows: true,
        prevArrow: '<a class="slick-prev" href="#">前へ</a>',
        nextArrow: '<a class="slick-next" href="#">次へ</a>',
        infinite: false, //スライドループ
        initialSlide: 0, //開始スライド
        centerMode: false, //要素を中央寄せ
        centerPadding:'0px', //両サイドの見えている部分のサイズ
        responsive: [{
            breakpoint: 980,
            settings: {
                slidesToShow: 3,
                centerMode: false,
                centerPadding:'200px', //両サイドの見えている部分のサイズ
            }
        },{
            breakpoint: 768,
            settings: {
                slidesToShow: 3,
                centerMode: false,
                centerPadding:'200px', //両サイドの見えている部分のサイズ
            }
        },{
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                centerMode: false,
                centerPadding:'400px', //両サイドの見えている部分のサイズ
            }
        }]
    });


});