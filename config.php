<?php
// 폴더 지정
define('AJAX_DIR', 'ajax');
define('CSS_DIR', 'css');
define('IMG_DIR', 'images');
define('JS_DIR', 'js');
define('REST_DIR', 'rest');
define('청맥병원소개', '01');
define('청맥의료진', '02');
define('진료분야', '03');
define('시설및장비', '04');
define('청맥이야기', '05');
define('병원이용안내', '06');
define('CS센터', '10');
define('GALLERY_DIR', 'gallery');

// 경로 지정
define('URL_청맥', '');
define('AJAX_URL', URL_청맥.'/'.AJAX_DIR);
define('CSS_URL', URL_청맥.'/'.CSS_DIR);
define('IMG_URL', URL_청맥.'/'.IMG_DIR);
define('JS_URL', URL_청맥.'/'.JS_DIR);
define('REST_URL', URL_청맥.'/'.REST_DIR);
define('URL_MENU_01', URL_청맥.'/'.청맥병원소개); // 01
define('URL_MENU_02', URL_청맥.'/'.청맥의료진); // 02
define('URL_MENU_03', URL_청맥.'/'.진료분야); // 03
define('URL_MENU_04', URL_청맥.'/'.시설및장비); // 04
define('URL_MENU_05', URL_청맥.'/'.청맥이야기); // 05
define('URL_MENU_06', URL_청맥.'/'.병원이용안내); // 06
define('URL_MENU_10', URL_청맥.'/'.CS센터); // 10
define('URL_GALLERY', URL_청맥.'/'.GALLERY_DIR);

// 카카오 로그인 정보
define('kakao_id','c387953b3a54b23a6e52935d6a2ec185');

// 네이버 로그인 정보
define('naver_id','MxR5NRcaLwAWgOnaqH_0');
define('naver_pw','Vp4KVqgfJi');

// 스토리지 주소정보
define('STORAGE_URL', 'https://cheongmac.blob.core.windows.net');
define('ST_BTN_URL', STORAGE_URL.'/btn');
define('ST_CONTENTS_URL', STORAGE_URL.'/contents');
define('ST_COMMON_URL', STORAGE_URL.'/common');
define('ST_DOWNLOAD_URL', STORAGE_URL.'/download');
define('ST_MAIN_URL', STORAGE_URL.'/main');
define('ST_UPLOAD_URL', STORAGE_URL.'/upload');
define('ST_VIDEO_URL', STORAGE_URL.'/video');

// 인증 페이지 설정
define('AUTH_PAGE', 'https://yeshazi.com');

// 백앤드 연결 설정
define('BACKEND_PAGE', 'https://cheongmacbackend.azurewebsites.net/v1');
define('BACKEND_PAGE2', 'https://cheongmacbackend.azurewebsites.net/v2');
?>