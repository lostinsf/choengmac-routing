/*
 * File       : index.js
 * Author     : SMART GEO
 * Guideline  : -
 * Update : 2022-03-07
 *
 * SUMMARY:
 * 01) ON LOAD
 * 02) MOUSE EVENT (PC)
 * 03) FUNCTION
 */


/* **************************************** *
 * 01) ON LOAD
 * **************************************** */
let deviceType = ($(window).width() <= '1140') ? "m" : "pc";
let pcInitTimer = 1000;
let mobileInitTimer = 600;
let isFlashStop = false;
let flashEvent = '';
let flashDelay = 7000;

$(window).load(function() {
  if ( deviceType === "pc" ) {
    setTimeout(function () {
      // init
      pc_light_on();
      // interval
      pc_flash_on();
    }, pcInitTimer);
  }
  if ( deviceType === "m" ) {
    // init
    m_light_on();
    // interval
    m_flash_on();
  }
});


/* **************************************** *
 * 02) MOUSE EVENT (PC)
 * **************************************** */

/* mouse hover event */
$('.pc_layout .item').mouseenter(function () {
  let sns_type = $(this).attr('sns_type');
  let setTitle = '';
  let setSubject = '';
  let colorCode = '';

  if ( sns_type === 'instagram' ) {
    setTitle = '한 손에 즐겨보는';
    setSubject = '청맥 인스타';
    colorCode = '#F6BC24'
  } else if ( sns_type === 'youtube' ) {
    setTitle = '한 눈에 확인하는';
    setSubject = '청맥 유튜브';
    colorCode = '#E6291E'
  } else if ( sns_type === 'blog' ) {
    setTitle = '한 번에 이해하는';
    setSubject = '청맥 블로그';
    colorCode = '#09C65B'
  }

  // reset
  $('#setTitle').text('');
  $('#setSubject').text('').css('color', colorCode);
  $('.pc_layout .item').removeClass('active');
  isFlashStop = true;

  // setting
  $('#setTitle').text(setTitle);
  $('#setSubject').text(setSubject);
  $('.pc_layout .item.'+sns_type).addClass('active');
});

/* mouse leave event */
$('.pc_layout .item').mouseleave(function () {
  // reset
  $('#setTitle').text('새롭게 그려내는');
  $('#setSubject').text('').css('color', '#111111');
  $('#setSubject').append('청맥병원 <span class="light red active">S</span><span class="light yellow active">N</span><span class="light green active">S</span>');
  $('.pc_layout .item').addClass('active');
  isFlashStop = false;
});


/* **************************************** *
 * 03) FUNCTION
 * **************************************** */

function pc_light_on() {
  setTimeout(function () {
    if (!isFlashStop) {
      $('.pc_layout .item.youtube').addClass('active');
      $('.pc_layout .light.red').addClass('active');
    }
  }, pcInitTimer);
  setTimeout(function () {
    if (!isFlashStop) {
      $('.pc_layout .item.instagram').addClass('active');
      $('.pc_layout .light.yellow').addClass('active');
    }
  }, pcInitTimer * 2);
  setTimeout(function () {
    if (!isFlashStop) {
      $('.pc_layout .item.blog').addClass('active');
      $('.pc_layout .light.green').addClass('active');
    }
  }, pcInitTimer * 3);
}

function m_light_on() {
  setTimeout(function () {
    if (!isFlashStop) {
      $('.m_layout .item.youtube').addClass('active');
      $('.m_layout .light.red').addClass('active');
    }
  }, mobileInitTimer);
  setTimeout(function () {
    if (!isFlashStop) {
      $('.m_layout .item.instagram').addClass('active');
      $('.m_layout .light.yellow').addClass('active');
    }
  }, mobileInitTimer * 2);
  setTimeout(function () {
    if (!isFlashStop) {
      $('.m_layout .item.blog').addClass('active');
      $('.m_layout .light.green').addClass('active');
    }
  }, mobileInitTimer * 3);
}

function pc_flash_on() {
  flashEvent = setInterval(function () {
    if (!isFlashStop) {
      $('.pc_layout .item').removeClass('active');
      $('.pc_layout .light').removeClass('active');
      pc_light_on();
    }
  }, flashDelay);
}

function m_flash_on() {
  flashEvent = setInterval(function () {
    if (!isFlashStop) {
      $('.m_layout .light').removeClass('active');
      m_light_on();
    }
  }, flashDelay);
}

function sns_view(selectedItem) {
  let sns_link = '';
  if ( selectedItem === 'instagram' ) {
    sns_link = 'https://www.instagram.com/yeshazi_cheongmac/';
  }
  if ( selectedItem === 'youtube' ) {
    sns_link = 'https://www.youtube.com/channel/UCGNtVzTi0VM4T_fOrXstv8w';
  }
  if ( selectedItem === 'blog' ) {
    sns_link = 'https://blog.naver.com/yeshazi';
  }

  location.href = sns_link;
}
