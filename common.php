<?php

// 공통변수
$MENU_NAME_1_1 = "청맥 소개";
$MENU_NAME_1_2 = "청맥 인사";
$MENU_NAME_1_3 = "청맥 철학";
$MENU_NAME_1_4 = "청맥 연혁";

$MENU_NAME_2_1 = "청맥의료진";
$MENU_NAME_2_2 = "의료진소개";

$MENU_NAME_3_1 = "진료 분야";
$MENU_NAME_3_2 = "하지정맥류";
$MENU_NAME_3_3 = "정맥 질환";
$MENU_NAME_3_4 = "동맥 질환";
$MENU_NAME_3_5 = "투석 질환";
$MENU_NAME_3_6 = "혈관 질환";
$MENU_NAME_3_7 = "자궁 근종 색전술";

$MENU_NAME_4_1 = "시설및장비";
$MENU_NAME_4_2 = "특수장비";
$MENU_NAME_4_3 = "진단장비";
$MENU_NAME_4_4 = "기타장비";
$MENU_NAME_4_5 = "수술장비";
$MENU_NAME_4_6 = "입 원 실";

$MENU_NAME_5_1 = "청맥이야기";
$MENU_NAME_5_2 = "공지 사항";
$MENU_NAME_5_3 = "연구/학회";
$MENU_NAME_5_4 = "청맥 뉴스";
$MENU_NAME_5_5 = "착한 청맥";
$MENU_NAME_5_6 = "치료후기";

$MENU_NAME_6_1 = "병원이용안내";
$MENU_NAME_6_2 = "층별 안내";
$MENU_NAME_6_3 = "진료 안내";
$MENU_NAME_6_4 = "입/퇴원안내";
$MENU_NAME_6_5 = "서류 발급";
$MENU_NAME_6_6 = "비급여항목";

$MENU_NAME_10_1 = "회원가입";
$MENU_NAME_10_1_1 = "약관동의";
$MENU_NAME_10_1_2 = "본인인증";
$MENU_NAME_10_1_3 = "정보입력";
$MENU_NAME_10_1_4 = "가입완료";
$MENU_NAME_10_2 = "로그인";
$MENU_NAME_10_3 = "로그아웃";
$MENU_NAME_10_4 = "아이디찾기";
$MENU_NAME_10_5 = "비밀번호찾기";
$MENU_NAME_10_6 = "개인정보수정";
$MENU_NAME_10_7 = "회원탈퇴";
$MENU_NAME_10_8 = "상담예약";
$MENU_NAME_10_9 = "의료진 상담";

$MENU_NAME_10_10 = "개인정보취급방침";
$MENU_NAME_10_11 = "이메일무단수집거부";

// POST변조 방지
$ext_arr = array ('PHP_SELF', '_ENV', '_GET', '_POST', '_FILES', '_SERVER', '_COOKIE', '_SESSION', '_REQUEST',
    'HTTP_ENV_VARS', 'HTTP_GET_VARS', 'HTTP_POST_VARS', 'HTTP_POST_FILES', 'HTTP_SERVER_VARS',
    'HTTP_COOKIE_VARS', 'HTTP_SESSION_VARS', 'GLOBALS');
$ext_cnt = count($ext_arr);
for ($i=0; $i<$ext_cnt; $i++) {
    // POST, GET 으로 선언된 전역변수가 있다면 unset() 시킴
    if (isset($_GET[$ext_arr[$i]]))  unset($_GET[$ext_arr[$i]]);
    if (isset($_POST[$ext_arr[$i]])) unset($_POST[$ext_arr[$i]]);
}

// 세션 설정
@ini_set("session.use_trans_sid", 0);    // PHPSESSID를 자동으로 넘기지 않음
@ini_set("url_rewriter.tags",""); // 링크에 PHPSESSID가 따라다니는것을 무력화함
if (isset($SESSION_CACHE_LIMITER))
    @session_cache_limiter($SESSION_CACHE_LIMITER);
else
    @session_cache_limiter("no-cache, must-revalidate");
ini_set("session.cache_expire", 60); // 세션 캐쉬 보관시간 (분)
ini_set("session.gc_maxlifetime", 3600); // session data의 garbage collection 존재 기간을 지정 (초)
ini_set("session.gc_probability", 1); // gc(쓰레기 수거) 루틴의 시작 확률을 관리합니다. 기본값은 1
ini_set("session.gc_divisor", 100); // 각 세션 초기화 시에 gc(쓰레기 수거) 프로세스를 시작할 확률을 정의합니다. 기본값은 100
session_set_cookie_params(0, '/');
@session_start();
if( stristr($_SERVER['HTTP_USER_AGENT'],'ipad') ) {
    $device = "ipad";
} else if( stristr($_SERVER['HTTP_USER_AGENT'],'iphone') ||
    strstr($_SERVER['HTTP_USER_AGENT'],'iphone') ) {
    $device = "iphone";
} else if( stristr($_SERVER['HTTP_USER_AGENT'],'blackberry') ) {
    $device = "blackberry";
} else if( stristr($_SERVER['HTTP_USER_AGENT'],'android') ) {
    $device = "android";
} else {
    $device = "etc";
}

?>
