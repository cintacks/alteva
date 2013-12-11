function flagDropdownsWithMultipleItems(parent) {
  parent.find('ul').each(function() {
    if($(this).children().length > 1) {
      $(this).addClass('multi');
    }
  });
}

function resizeForSmallWindow() {
  $('.wrap').css({'padding-left':'24px'});
  $('html, body').css({'overflow-x':'hidden'});
  $('head').append('<meta name="viewport" content="width=device-width, initial-scale=0.1">');
}

function resizeForLargeWindow() {
  $('.wrap').css({'padding-left':'100px'});
  $('html, body').css({'overflow-x':'visible'});
}

function checkWindowSize() {
  if($(window).width() < 1200) 
    resizeForSmallWindow();
  else
    resizeForLargeWindow();
}

$(window).resize(checkWindowSize);

$(document).ready(function() {
  
  checkWindowSize();

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




