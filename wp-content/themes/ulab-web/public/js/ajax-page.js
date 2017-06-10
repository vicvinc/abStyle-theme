/*
 * @Author: maxm
 * @Date:   2016-12-14 11:59:01
 * @Last Modified 2017-01-18
 * @Last Modified time: 2017-01-18 14:16:07
 */

'use strict';

var paged = 3,
    curPage = 0,
    totalPage = 0,
    isLastPage = false,
    blogCarousel = '',
    prevBtn = $('.btn-prev.btn-pagenation'),
    nextBtn = $('.btn-next.btn-pagenation');

var loadNodeImg = function(node) {
    var loadIcon = $('<i class="load-icon"/>'),
        loadTip = $('<p class="load-tip">点击重新加载图片</p>'),
        loadWrap = $('<div class="load-wrap" />');

    var loadModal = $('<div class="load-img"/>'),
        _src = $(node).attr('src'),
        newImg = new Image();

    $(node).addClass('hide');
    loadWrap.append(loadIcon).append(loadTip)
    loadModal.append(loadWrap).insertAfter($(node));

    var asyncImg = function() {
        newImg.src = _src;
        newImg.onload = function() {
            node.src = newImg.src;
            $(node).removeClass('hide');
            loadModal.fadeOut().remove();
        };
    }

    asyncImg();

    $(loadModal).on('click', function(ev) {
        ev.preventDefault();
        ev.stopPropagation();
        asyncImg();
    });
};
var loadImg = function(root) {
    if (!root) {
        return; }
    var nodes = root.getElementsByTagName('img');
    for (var i = 0, ii = nodes.length; i < ii; i++) {
        loadNodeImg(nodes[i]);
    }
};
var bindLoadTap = function() {
    var pv = function(ev) {
        var e0 = ev.originalEvent,
            delta = e0.wheelDelta || -e0.detail;
        this.scrollTop += (delta < 0 ? 1 : -1) * 30;
        ev.stopPropagation();
    }

    $('.blog-item').on('click', function(ev) {
        ev.preventDefault();
        ev.stopPropagation();
        var args = {
            postId: $(this).attr('data-post-id') || 1,
            action: 'load_post_ajax'
        };

        $.ajax({
            type: 'POST',
            url: ajax_url.url,
            data: $.param(args),

            success: function(data) {
                $('#blog-show').empty().html(data);
                loadImg($('#blog-show')[0]);
                setTimeout(function() {
                    $('.modal-content').scrollTop(0);
                }, 300);

                $('.blog-modal').fadeIn();
                $('body').addClass('modal-open').scrolling = 'no';

                $('.main-navgation').css({ zIndex: 0 });
                $('.blog-sections').addClass('swiper-no-swiping');
                $('.blog-modal').on('mousewheel DOMMouseScroll wheel', pv);
            },

            error: function(jqXHR, textStatus, errorThrown) {
                console.error(jqXHR + ' :: ' + textStatus + ' :: ' + errorThrown);
            }

        });
    });

    $('.close-btn .i-close').on('click', function(ev) {
        ev.preventDefault();
        $('.blog-modal').fadeOut();
        $('#blog-show').empty();
        $('body').removeClass('modal-open');
        $('.main-navgation').css({ zIndex: 300 });
    });

    $('.article .detail').textOverflow();
};
var calSize = function() {
    var viewHeigh = document.body.clientHeight;
    $('.blog-carousel').css({
        height: viewHeigh - 60
    });
    $('.btn-pagenation').css({
        top: (viewHeigh + 60) / 2
    });
};
var loadPosts = function(curPage) {
    if (isLastPage) {
        return;
    }

    var args = {
        pageNumber: curPage || 3,
        action: 'more_page_ajax'
    };

    $.ajax({
        type: 'POST',
        url: ajax_url.url,
        data: $.param(args),
        success: function(data) {
            if (!data || data == 0) {
                // nextBtn.hide();
                return;
            }
            nextBtn.show();
            //从html添加到dom节点，jquery-1.9.1直接转换有问题
            blogCarousel.appendSlide($.parseHTML(data)[1]);
            bindLoadTap();
            /*
                博客轮播页悬停效果
            */
            $('.blog-item').hover(function() {
                var bgDiv = $(this).children('.bg-img');
                var src = $(bgDiv).attr('data-src');
                if (src) {
                    $(bgDiv).css({
                        backgroundImage: 'url(' + src + ')'
                    }).addClass('bg-zoom');
                }
            }, function() {
                var bgDiv = $(this).children('.bg-img');
                $(bgDiv).removeAttr('style').removeClass('bg-zoom');
            });
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error(jqXHR + ' :: ' + textStatus + ' :: ' + errorThrown);
        }
    });
    return false;
};
$(document).on('ready', function() {
    calSize();
    blogCarousel = new Swiper('.blog-carousel', {
        initialSlide: 0,
        loop: false,
        height: 'auto',
        mode: 'horizontal',
        preventLinks: true,
        simulateTouch: false,
        onFirstInit: function() {
            prevBtn.hide();
            $('.blog-list').children().length < 6 ? nextBtn.hide() : nextBtn.show();
        },
        onSlideChangeEnd: function(swiper) {

            var curIndex = swiper.activeIndex || 0,
                slideLength = swiper.slides.length;

            if (curIndex > 0) {
                prevBtn.show();
            } else {
                prevBtn.hide();
            }

            if (curIndex < slideLength - 1) {
                nextBtn.show();
            } else {
                nextBtn.hide();
            }

        },
        onSlideNext: function(swiper) {
            curPage = swiper.activeIndex || 0;
            totalPage = swiper.slides.length;
            if (curPage < totalPage - 1) {
                loadPosts(++paged);
            }
        }
    });
    bindLoadTap();
    $('.btn-pagenation').on('click', function(ev) {
        ev.preventDefault();
        ev.stopPropagation();
        var direction = $(this).attr('data-page-label');
        direction === 'next' ? blogCarousel.swipeNext() : blogCarousel.swipePrev();
    });
    $(window).on('resize', calSize);
});
