function flagDropdownsWithMultipleItems(parent) {
  parent.find('ul').each(function() {
    if($(this).children().length > 1) {
      $(this).addClass('multi');
    }
  });
}


function resizeForSmallWindow() {
  // $('.wrap').css({'padding-left':'24px'});
  $('html, body').css({'overflow-x':'hidden'});
  $('.sidebar-content').prependTo('footer');
  $('#searchwrap').appendTo('.navbar-inner');
  $('#searchform').hide();
  $('.page-header-border').remove();
  $('<div class="page-header-border"></div>').prependTo('.page-header');
  $('.more-listing').insertAfter('.page-header-border');
  $('.other-categories').hide();
  $('.more-text').hide();
}

function resizeForLargeWindow() {
  // $('.wrap').css({'padding-left':'100px'});
  $('html, body').css({'overflow-x':'visible'});
  $('.sidebar-content').insertAfter('.main-content');
  $('#searchwrap').appendTo('#topbar .span3');
  $('#searchform').show();
  $('.more-listing').insertAfter('.main-content');
}

function checkWindowSize() {
  if($(window).width() < 1080)
    resizeForSmallWindow();
  else
    resizeForLargeWindow();

  if($(window).width() < 480)
    mobileWindowSize();
}

//Display for subpage expandable menus
$('.more-title').click(function() {
  $('.other-categories').slideToggle(100);
  $('.more-title').toggleClass('on');
  $('.more-listing').toggleClass('on');
});


function menuscroll() {
  $('.btn-navbar').click(function() {
      $('html, body').scrollTop(0);
    });
}

function mobileWindowSize() {
    if ($(window).width() < 480) {
      menuscroll();
      $('footer .mobile').insertAfter('#menu-primary-navigation-2');
    }
    else {
      $('footer .mobile').insertAfter('#footer .nav-collapse');
    }
  }

$(window).resize(checkWindowSize);
$(window).resize(mobileWindowSize);

$(document).ready(function() {
  
  checkWindowSize();
  mobileWindowSize();

  // Remove dropdowns from main nav in footer
  $('footer .sub-menu .sub-menu').remove();

  // Back to top functionality
 /* $(window).scroll(function() {
    if($(this).scrollTop() > 500) {
      $('#toTop').fadeIn();	
    } else {
      $('#toTop').fadeOut();
    }
  });
 
  $('#toTop').click(function() {
    $('body,html').animate({scrollTop:0},800);
    return false;
  });
  */

  var lastlist = $('.on li.last').width();
  function onlastlist() {
    $('.other-categories li.last').width(lastlist + 1);
  }

  onlastlist();

  // Main Navigation Tweaks
  var nav = $('#menu-primary-navigation');

  nav.affix({ offset: 170 });

  nav.wrap("<div>");

  nav.append(
    "<li>" + $('<div>').append($('header .get-started').clone()).html() + "</li>"
  );

  flagDropdownsWithMultipleItems(nav);

  function checkNavAffix() {
    if (nav.hasClass('affix')) {
      nav.parent().addClass('affix-container');
      nav.children('li:last-child').show();  
    } else {
      nav.children('li:last-child').hide();
      nav.parent().removeClass('affix-container');
    }
  }

  checkNavAffix();
  $(window).scroll(checkNavAffix);

  // Excerpts
  $('.post-more').append("<a href='#' class='read-less'>Read Less</a>");

  $('.main-content a.read-more').click(function() {
    $('.main-content .post-more').slideDown();
    $('.main-content .read-more').hide();
    return false;
  });

  $('.main-content a.read-less').click(function() {
    $('html, body').animate({
         scrollTop: $("#topbar").offset().top
     }, 1000, 'swing', 
     function() {
      $('.main-content .post-more').hide(); 
      $('.main-content .read-more').show();       
    }
    );
    return false;
  });

  $('.pod-listing a.read-more').click(function() {
    $(this).next('.post-more').slideDown();
    $(this).hide();
    return false;
  }); 

  $('.pod-listing a.read-less').click(function() {
    var readLess = $(this);
//    readLess.parent().slideUp(500, function() {
 //     readLess.parent().prev('a.read-more').fadeIn('fast');
 //   });
 //   return false;

     $('html, body').animate({
         scrollTop: readLess.parent().parent().offset().top - 100
     }, 1000, 'swing', 
     function() {
       readLess.parent().hide();
       readLess.parent().parent().find('.read-more').show();
    }
    );
    return false;


  });


  // Other Category Border Removal
  var pos = $('.other-categories li:first-child').position();
  $('.other-categories li').each(function() {
    if(pos.top != $(this).position().top) {
      $(this).prev().addClass('no-border');
    }
    pos = $(this).position();  
  });

  // Append breadcrumb separator
  $('.breadcrumbs').append("<span class='separator'>></span>");

  //Add last class on each li item for IE8
  $("ul li:last-child").addClass("last");

  // Alteva Communications Top Nav Treatment
  var altevaComm = $('#menu-top-navigation .menu-alteva-communications');
  altevaComm.find('.dropdown-toggle').removeClass('dropdown-toggle');
  altevaComm.find('.dropdown-menu').show();
  altevaComm.find('.caret').remove();
  
  // Team Members Empty Images
  $('img.hide-empty').each(function() {
    if($(this).attr('src') != "") $(this).show();
  });

  // Search Result Pagination Labels
  $('.search-results .pager .previous a').text("More Results");
  $('.search-results .pager .next a').text("Previous Results");
  	
});

  //Disable dropdowns on smaller screens
  function checkWidth() {
        var windowSize = $(window).width();
        if (windowSize > 1080) {
            $('.dropdown-off').removeClass('dropdown-off').addClass('dropdown');
        } else if (windowSize <= 1079) {
            $('.dropdown').removeClass('dropdown').addClass('dropdown-off');
        } 
    }
    // Execute on load
    checkWidth();
    // Bind event listener
    $(window).resize(checkWidth);

  //Toggle for mobile search
    $('.searchmobile').click(function () {

      var $element = $(this);

      $element.toggleClass('open');
      $('#searchform').toggle(100);
      $('.in').toggle(100);
});

  //Status Update Function
  $('.network-status-problem').append('<div class="closewrap"><div class="close-alert"></div></div>');
  $('.close-alert').click(function(){
      $('.network-status-problem').hide(100);
  });

    //Swipe support for the slideshow
    // $(document).ready(function() {  
 
    //       //Enable swiping...
    //       $(".carousel-inner").swipe( {
    //         //Generic swipe handler for all directions
    //         swipeLeft:function(event, direction, distance, duration, fingerCount) {
    //           $(this).parent().carousel('prev'); 
    //         },
    //         swipeRight: function() {
    //           $(this).parent().carousel('next'); 
    //         },
    //         //Default is 75px, set to 0 for demo so any distance triggers swipe
    //         threshold:0
    //       });
    //     }); 

  //Equal heights for li tags on subpage dropdowns (table/mobile)
  var tallest = 0;
  $('.other-categories > li').each(function() {
      var thisHeight = $(this).height();
      if(thisHeight > tallest) {
          tallest = thisHeight;
      }
  });
  $('.other-categories li').height(tallest);







