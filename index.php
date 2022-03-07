<?php
include_once ('common.php');
include_once ('config.php');
?>

<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
<meta name="description" content="서면역2번출구, 1:1 전문의진료, 하지정맥류, LAST치료법, 비수술적치료, 의료보험수술, 마취과 전문의 상주"/>
<meta name="keywords" content="서면역2번출구, 1:1 전문의진료, 하지정맥류, LAST치료법, 비수술적치료, 의료보험수술, 마취과 전문의 상주"/>
<meta property="og:title" content="청맥병원"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="https://cheongmac.blob.core.windows.net/common/img_sns_og_img.png"/>
<meta property="og:description" content="서면역2번출구, 1:1 전문의진료, 하지정맥류, LAST치료법, 비수술적치료, 의료보험수술, 마취과 전문의 상주"/>
<title>청맥병원 | 청맥</title>

<link href="<?=ST_MAIN_URL?>/ic_main_favicon.ico" rel="icon">

<link rel="stylesheet" type="text/css" href="<?=CSS_URL?>/index.css">
<script type="text/javascript" src="<?=JS_URL?>/jquery-1.11.3.min.js"></script>

<!-- SECTION -->
<section id="routing_root">
    <!-- PC -->
    <div class="pc_layout">
        <header>
            <a href="https://blog.naver.com/hiphoppoemic">
                <img src="<?=ST_COMMON_URL?>/gif_intro_blog.gif">
            </a>
            <a href="https://www.facebook.com/yeshazi">
                <img src="<?=ST_COMMON_URL?>/gif_intro_facebook.gif">
            </a>
        </header>
        <div class="content">
            <div class="menus">
                <div class="item instagram" sns_type="instagram" onclick="sns_view('instagram')">
                    <img class="thumbnail" src="<?=ST_COMMON_URL?>/img_sns_root_instagram.svg"/>
                    <div class="bg"></div>
                    <img class="bg_icon _1" src="<?=ST_COMMON_URL?>/img_sns_root_instagram_icon1.png" />
                    <img class="bg_icon _2" src="<?=ST_COMMON_URL?>/img_sns_root_instagram_icon2.png" />
                    <img class="bg_icon _3 scale" src="<?=ST_COMMON_URL?>/img_sns_root_instagram_icon3.png" />
                </div>
                <div class="item youtube" sns_type="youtube" onclick="sns_view('youtube')">
                    <img class="thumbnail" src="<?=ST_COMMON_URL?>/img_sns_root_youtube.svg"/>
                    <div class="bg"></div>
                    <img class="bg_icon _1" src="<?=ST_COMMON_URL?>/img_sns_root_youtube_icon1.png" />
                    <img class="bg_icon _2" src="<?=ST_COMMON_URL?>/img_sns_root_youtube_icon2.png" />
                    <img class="bg_icon _3 scale" src="<?=ST_COMMON_URL?>/img_sns_root_youtube_icon3.png" />
                </div>
                <div class="item blog" sns_type="blog" onclick="sns_view('blog')">
                    <img class="thumbnail" src="<?=ST_COMMON_URL?>/img_sns_root_blog.svg"/>
                    <div class="bg"></div>
                    <img class="bg_icon _1" src="<?=ST_COMMON_URL?>/img_sns_root_blog_icon1.png" />
                    <img class="bg_icon _2 scale" src="<?=ST_COMMON_URL?>/img_sns_root_blog_icon2.png" />
                </div>
            </div>
        </div>
    </div>
    <!-- MOBILE -->
    <div class="m_layout">
        <div class="title">
            <h2>스마트한<strong>의료생활</strong></h2>
            <h1 id="setTitle">새롭게 그려내는</h1>
            <h1 id="setSubject">청맥병원 <span class="light red">S</span><span class="light yellow">N</span><span class="light green">S</span></h1>
        </div>
        <div class="content">
            <div class="item youtube" onclick="sns_view('youtube')"><img src="<?=ST_COMMON_URL?>/img_sns_m_thumbnail1.png"></div>
            <div class="item instagram" onclick="sns_view('instagram')"><img src="<?=ST_COMMON_URL?>/img_sns_m_thumbnail2.png"></div>
            <div class="item blog" onclick="sns_view('blog')"><img src="<?=ST_COMMON_URL?>/img_sns_m_thumbnail3.png"></div>
        </div>
        <a href="https://www.yeshazi.com" class="logo"><img src="<?=ST_COMMON_URL?>/ic_header_logo.svg"></a>
    </div>
</section>

<script type="text/javascript" src="<?=JS_URL?>/index.js"></script>
