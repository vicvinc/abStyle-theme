/*
 * @Author: maxm
 * @Date:   2016-12-13 11:48:26
 * @Last Modified 2017-01-18
 * @Last Modified time: 2017-01-22 14:35:08
 */

'use strict';
var init = function() {

    var loadImg = function(node) {
        var tmpImg = new Image(),
            _src = node.getAttribute('data-url');
        tmpImg.src = _src;
        tmpImg.onload = function() {
            node.style.backgroundPosition = 'center';
            node.style.backgroundImage  = 'url(' + _src + ')';
            node.style.backgroundSize = 'cover';
            node.style.backgroundRepeat = 'no-repeat';
        }
    };
/*----------------------------------------播放器初始化设置-------------------------*/
    var viewHeight = document.body.clientHeight;
    videojs.addLanguage('zh-CN', {
        "Play": "播放",
        "Pause": "暂停",
        "Current Time": "当前进度",
        "Duration Time": "持续时间",
        "Remaining Time": "剩余时间",
        "Stream Type": "流类型",
        "LIVE": "直播",
        "Loaded": "加载完成",
        "Progress": "进度",
        "Fullscreen": "全屏",
        "Non-Fullscreen": "退出全屏",
        "Mute": "静音",
        "Unmuted": "关闭静音",
        "Playback Rate": "后退速度",
        "Subtitles": "字幕",
        "subtitles off": "关闭字幕",
        "Captions": "字幕",
        "captions off": "关闭字幕",
        "Chapters": "集",
        "You aborted the video playback": "已终止视频退回",
        "A network error caused the video download to fail part-way.": "网络问题，视频无法被加载",
        "The video could not be loaded, either because the server or network failed or because the format is not supported.": "视频加载失败，可能由于网络原因或者视频格式不支持",
        "The video playback was aborted due to a corruption problem or because the video used features your browser did not support.": "La reproducción de vídeo se ha interrumpido por un problema de corrupción de datos o porque el vídeo precisa funciones que su navegador no ofrece.",
        "No compatible source was found for this video.": "没有可用的视频资源"
    });
    var options = {
        controls: true,
        autoplay: false,
        preload: 'none',
        width: '100%',
        height: '100%',
        language: 'zh-CN'
    };
    var previewOpt = {
        controls: false,
        autoplay: true,
        loop: true,
        preload: 'auto',
        width: '100%',
        height: '100%',
        language: 'zh-CN'
    }

    var played = false,
        paused = false,
        player = videojs('product-intro-video', options),
        previewPlayer = videojs('product-preview-video', previewOpt);
    // 自动播放
    previewPlayer.play()

    //图片加载
    loadImg($('.poster')[0]);
    player.on('ended', function() {
        $('.product-video .btn-play, .product-mask, .poster').removeClass('hide');
        $('#product-intro-video').addClass('hide');
        player.exitFullscreen().reset().initChildren();
        played = false;
    });
    $('.video-js').css({ height: '100%' });

    $('.product-video .btn-play').on('click', function(ev) {
        ev.stopPropagation();
        $('#product-intro-video').removeClass('hide');
        $('#product-preview-video, .btn-play').addClass('hide');
        player.play().enterFullWindow();
        played = true;
    });
    /*----------------------------------------页面滚动初始化-------------------------*/
    var pageSlide = new Swiper('.page-sections', {
        mode: 'vertical',
        mousewheelControl: true,
        speed: 900,
        simulateTouch: false,
        onSlideChangeStart: function(swiper) {
            var curIndex = swiper.activeIndex;
            if (curIndex !== 0) {
                $('.main-navgation').addClass('navgation-trans');
            } else if (curIndex === 0) {
                $('.navgation-trans').removeClass('navgation-trans');
            }
            var url = '/#index',
                activeNav = 0;

            switch (swiper.activeIndex) {
                case 0:
                    url = 'index';
                    activeNav = 0;
                    break;
                case 1:
                case 2:
                    url = 'product';
                    activeNav = 1;
                    break;
                case 3:
                    url = 'blogs';
                    activeNav = 2;
                    break;
                case 4:
                    url = 'recruit';
                    activeNav = 3;
                    break;
                case 5:
                    url = 'contact-us';
                    activeNav = 4;
                    break;
                default:
                    break;
            }
            $('.nav-menu .nav-link.active').removeClass('active');
            var thisNav = $('.nav-menu .nav-tab')[activeNav];
            if (thisNav) {
                $(thisNav).children().addClass('active');
            }
            window.location.hash = url;
        },
        onSlideChangeEnd: function(swiper) {

            var curIndex = swiper.activeIndex;
            if (curIndex !== 1 && played) {
                player.pause();
                paused = true;
            } else if (player.paused() && played) {
                player.play();
                paused = false;
            }

        }
    });
    /*----------------------------------------首页的轮播组初始化--------------------------------------*/
    var indexCarousel = new Swiper('.index-carousel', {
        initialSlide: 0,
        loop: true,
        pagination: '.index-carousel-cursor',
        paginationClickable: true,
        mode: 'horizontal',
        effect: 'fade',
        height: '100%',
        autoplay: 3000,
        autoplayDisableOnInteraction: false,
        onSlideChangeStart: function(s) {
            var activeIndex = s.activeIndex;
            $('.index-carousel-cursor .swiper-pagination-bullet-active')
                .removeClass('swiper-pagination-bullet-active');
            $('.index-carousel-cursor .swiper-pagination-bullet').eq(activeIndex - 1)
                .addClass('swiper-pagination-bullet-active');
        }
    });
    //图片加载
    (function(){
        var carouselImg = $('.carousel-img');
        for (var i = 0, ii = carouselImg.length; i < ii; i++) {
            loadImg(carouselImg[i]);
        }
    })();
    /*----------------------------------------根据页面历史hash url定位页内位置-------------------------*/
    (function() {
        var urlHash = window.location.hash;
        var initSlide = 0;
        urlHash = urlHash.replace('#', '');
        switch (urlHash) {
            case 'index':
                initSlide = 0;
                break;
            case 'product':
                initSlide = 1;
                break;
            case 'blogs':
                initSlide = 3;
                break;
            case 'recruit':
                initSlide = 4;
                break;
            case 'contact-us':
                initSlide = 5;
                break;
            default:
                break;
        }
        pageSlide.swipeTo(initSlide);
    })();
    /*----------------------------------------招聘页的轮播组初始化--------------------------------------*/
    var recruitCarousel = new Swiper('.recruit-carousel', {
        initialSlide: 0,
        loop: true,
        mode: 'horizontal',
        height: 'auto',
        width: 'auto',
        effect: 'fade',
        // autoplay: 3000,
        paginationClickable: true,
    });
    //图片加载
    (function(){
        var recruitImg = $('.recruit-img');
        for (var i = 0, ii = recruitImg.length; i < ii; i++) {
            loadImg(recruitImg[i]);
        }
    })();
    /*----------------------------------------点击导航滚动到指定页面----------------------------------*/
    $('.nav-tab .nav-link').on('click', function(ev) {
        var index = $(this).attr('data-index');
        pageSlide.swipeTo(parseInt(index));
    });
    /*----------------------------------------微博二维码弹出事件--------------------------------------*/
    $('.btn-weibo').off('click').on('click', function(ev) {
        ev.stopPropagation();
        ev.preventDefault();
        var weiboPop = $('<div class="weibo-pop" />'),
            QRContainer = $('<div class="pop-wrapper">\
                                <div class="qr-container">\
                                    <div class="weibo-qr-code"></div>\
                                    <p class="tips">点击进入联合优创微博</p>\
                                </div>\
                            </div>');
        weiboPop.append(QRContainer).appendTo('body');

        $('.qr-container').on('click', function(ev) {
            ev.preventDefault();
            ev.stopPropagation();
            window.open('http://weibo.com/xmunicorn');
        });

        $('.pop-wrapper').on('click', function() {
            $('.weibo-pop').remove();
        });
    });
    /*----------------------------------------联系我们地图高度计算-----------------------------------*/
    var calMapSize = function() {
        var footerHeight = $('.contact-us .contact-info')[0].clientHeight;
        //viewheight - 底部高度 - 导航高度 - 内边距（上下）
        var mapHeight = viewHeight - 266 - 60 - 46;
        $('.contact-us .map-container').css({ height: mapHeight });
    }
    calMapSize();
    $(window).on('resize', calMapSize);
    /*----------------------------------------产品导航点击效果---------------------------------------*/
    var defContent = $('.product-content .content-wrap')[0];
    $(defContent).addClass('content-show').show();

    $('.nav-product .nav-link').off('click').on('click', function(ev) {
        ev.stopPropagation();
        ev.preventDefault();
        $('.nav-product .nav-link').removeClass('active');
        $(this).addClass('active');
        var series = $(this).attr('data-cat');
        var selector = '.product-content .content-wrap[data-series|="' + series + '"]';
        $('.product-content .content-show')
            .removeClass('content-show')
            .hide();
        $(selector)
            .addClass('content-show')
            .fadeIn(150);
    });
};
/*----------------------------------------init--------------------------------------------------*/
$(document).on('ready', function() {
    $('body').removeClass('hide');
    init();
});
