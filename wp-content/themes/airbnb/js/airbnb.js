jQuery(document).ready(function ($) {

  /* Cover Image Sizing */

  var emailCheck = localStorage.getItem("airbnb_design");
  if (emailCheck == "signedup") {
    jQuery('#signupBlock').css('display', 'none');
  }

  jQuery('.ais-infinite-hits--item article .cover-image').css('height', (jQuery('.ais-infinite-hits--item article .cover-image').width() / 1.618) + 'px');


  if (jQuery(window).width() >= 768) {
    jQuery('.recent-post article .cover-image').css('height', (jQuery('.recent-post article:nth-child(2) .cover-image').width() / 1.618) + 'px');
    jQuery('.article-list article .cover-image').css('height', (jQuery('.article-list article .cover-image').width() / 1.618) + 'px');
    jQuery('.video-list article .cover-image').css('height', (jQuery('.video-list article .cover-image').width() / 1.618) + 'px');
    jQuery('.recent-post article:first-child .cover-image').css('height', (jQuery('.recent-post article:first-child .cover-image').width() / 2.351) + 'px');
    jQuery('.infinite-post-container article .cover-image').css('height', (jQuery('.infinite-post-container article:nth-child(4) .cover-image').width() / 1.618) + 'px');
    jQuery('.events-page .event-list .upcoming-event-card .cover-image').css('height', (jQuery('.events-page .event-list .upcoming-event-card:nth-child(2) .cover-image').width() / 1.618) + 'px');
    jQuery('.events-page .event-list .upcoming-event-card:first-child .cover-image').css('height', (jQuery('.events-page .event-list .upcoming-event-card:first-child .cover-image').width() / 2.351) + 'px');
    jQuery('.single .cover-image').css('height', (jQuery('.single .cover-image').width() / 2.351) + 'px');
  } else {
    jQuery('.cover-image').css('height', (jQuery('.cover-image').width() / 1.618) + 'px');
    jQuery('.single .cover-image').css('height', (jQuery('.single .cover-image').width() / 2.351) + 'px');
  }
  jQuery('.next-post .cover-image').css('height', (jQuery('.next-post .cover-image').width() / 1.618) + 'px');

  /* Ajax functions */
  $(document).on('click', '.infinite-load-more:not(.loading)', function () {

    var that = $(this);
    var page = $(this).data('page');
    var postTypes = $(this).data('posttypes');
    var totalPages = $(this).data('total');
    var taxonomyTerm = $(this).data('term');
    var newPage = page + 1;
    var ajaxurl = that.data('url');

    that.parent().addClass('loading');

    $.ajax({
      url: ajaxurl,
      type: 'post',
      data: {
        page: page,
        postTypes: postTypes,
        taxonomyTerm: taxonomyTerm,
        action: 'infinite_load_more'
      },
      error: function (err) {
        console.log('----response error----', data, err);
      },
      success: function (response) {
        console.log('---get post types succ----', postTypes);
        if (response == 0 || !response) {
          that.parent().addClass('done');
        } else {
          setTimeout(function () {
            that.data('page', newPage);
            $('.infinite-post-container').append(response);
            if (newPage == totalPages) {
              that.parent().addClass('done');
            }
            that.parent().removeClass('loading');
            if (jQuery(window).width() >= 768) {
              jQuery('.infinite-post-container article .cover-image').css('height', (jQuery('.infinite-post-container article:nth-child(4) .cover-image').width() / 1.618) + 'px');
            } else {
              jQuery('.cover-image').css('height', (jQuery('.cover-image').width() / 1.618) + 'px');
            }
          }, 1000);
        }
      }
    });
  });

});
jQuery(window).resize(function () {
  /* Cover Image Sizing */
  jQuery('.ais-infinite-hits--item article .cover-image').css('height', (jQuery('.ais-infinite-hits--item article .cover-image').width() / 1.618) + 'px');
  if (jQuery(window).width() >= 768) {
    jQuery('.recent-post article .cover-image').css('height', (jQuery('.recent-post article:nth-child(2) .cover-image').width() / 1.618) + 'px');
    jQuery('.article-list article .cover-image').css('height', (jQuery('.article-list article .cover-image').width() / 1.618) + 'px');
    jQuery('.video-list article .cover-image').css('height', (jQuery('.video-list article .cover-image').width() / 1.618) + 'px');
    jQuery('.recent-post article:first-child .cover-image').css('height', (jQuery('.recent-post article:first-child .cover-image').width() / 2.351) + 'px');
    jQuery('.infinite-post-container article .cover-image').css('height', (jQuery('.infinite-post-container article:nth-child(4) .cover-image').width() / 1.618) + 'px');
    jQuery('.events-page .event-list .upcoming-event-card .cover-image').css('height', (jQuery('.events-page .event-list .upcoming-event-card:nth-child(2) .cover-image').width() / 1.618) + 'px');
    jQuery('.events-page .event-list .upcoming-event-card:first-child .cover-image').css('height', (jQuery('.events-page .event-list .upcoming-event-card:first-child .cover-image').width() / 2.351) + 'px');
    jQuery('.single .cover-image').css('height', (jQuery('.single .cover-image').width() / 2.351) + 'px');
  } else {
    jQuery('.cover-image').css('height', (jQuery('.cover-image').width() / 1.618) + 'px');
    jQuery('.single .cover-image').css('height', (jQuery('.single .cover-image').width() / 2.351) + 'px');
  }
  jQuery('.next-post .cover-image').css('height', (jQuery('.next-post .cover-image').width() / 1.618) + 'px');
});

/* Facebook Share */
jQuery('.share').click(function (e) {
  e.preventDefault();
  window.open(jQuery(this).attr('href'), 'fbShareWindow', 'height=450, width=600, top=' + ((jQuery(window).height() / 2) - 225) + ', left=' + ((jQuery(window).width() / 2) - 300) + ', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
  return false;
});

jQuery(document).ready(function () {
  jQuery('#hamburger').click(function () {
    jQuery(this).toggleClass('open');
    jQuery('header nav').toggleClass('open');
  });
});

/* Email Check */
function ValidateEmail() {
  emailVal = jQuery('#mce-EMAIL').val();
  var mailformat = /(\w+)\@(\w+)\.[a-zA-Z]/g;
  if (emailVal.match(mailformat)) {
    jQuery('#mce-error-format').css('display', 'none');
    jQuery('#mce-success-response-new').css('display', 'block');
    jQuery('#emailHide').css('display', 'none');
    jQuery('#emailHideHeader').css('display', 'none');
    localStorage.setItem("airbnb_design", "signedup");
    return true;
  } else {
    jQuery('#mce-error-format').css('display', 'block');
    return false;
  }
}