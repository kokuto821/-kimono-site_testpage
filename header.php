<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <title>買取王国 | テスト</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script src="js/jquery.rwdImageMaps.js"></script>
    <script>
        $(function(){
        // #で始まるアンカーをクリックした場合に処理
            $('a[href^=#]').click(function() {
                // スクロールの速度
                var speed = 400; // ミリ秒
                // アンカーの値取得
                var href= $(this).attr("href");
                // 移動先を取得
                var target = $(href == "#" || href == "" ? 'html' : href);
                // 移動先を数値で取得
                var position = target.offset().top;
                // スムーススクロール
                $('body,html').animate({scrollTop:position}, speed, 'swing');
                return false;
            });
        });
    </script>
	<script src="<?php bloginfo('template_url'); ?>/script.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.min.js"></script>
</head>
<body class="body">
    <div class="article">
        <div class="container--main">
        <div class="header-cover"><a href="<?php echo esc_url(home_url('/')); ?>"><h2 class="mid-text">買取王国</h2></a></div>
        <main class="block-sections">