function flagDropdownsWithMultipleItems(e){e.find("ul").each(function(){$(this).children().length>1&&$(this).addClass("multi")})}function resizeForSmallWindow(){$("html, body").css({"overflow-x":"hidden"});$(".sidebar-content").prependTo("footer");$("#searchwrap").appendTo(".navbar-inner");$("#searchform").hide();$(".page-header-border").remove();$('<div class="page-header-border"></div>').prependTo(".page-header");$(".more-listing").insertAfter(".page-header-border");$(".more-text").hide();$(".other-categories").hide();$(".start").remove();$('<div class="mobile start"><a href="/get-started" class="get-started button-green mobile">Get Started</a></div>').insertAfter("header .top-mobile");$(".sidebar .network-status").appendTo(".page-header");if($(".other-categories").css("display")=="none"){$(".more-listing").removeClass("on");$(".more-title").removeClass("on")}}function resizeForLargeWindow(){$("html, body").css({"overflow-x":"visible"});$("#searchwrap").appendTo("#topbar .span3");$("#searchform").show();$(".more-listing").insertAfter(".main-content");$(".sidebar-content").insertAfter(".main-content");$(".more-text").show();$(".other-categories").show();$(".support .page-header .network-status").appendTo(".sidebar")}function mobileWindowSize(){if($(window).width()<668){$("footer .mobile").insertAfter("#menu-primary-navigation-2");$(".start").remove();$('<div class="mobile start"><a href="/get-started" class="get-started button-green mobile">Get Started</a></div>').prependTo("header .top-mobile")}else $("footer .mobile").insertAfter("#footer .nav-collapse")}function checkWindowSize(){$(window).width()<1080?resizeForSmallWindow():resizeForLargeWindow();$(window).width()<668&&mobileWindowSize()}function checkWidth(){var e=$(window).width();e>1080?$(".dropdown-off").removeClass("dropdown-off").addClass("dropdown"):e<=1079&&$(".dropdown").removeClass("dropdown").addClass("dropdown-off")}$(".more-title").click(function(){$(".other-categories").slideToggle(100,function(){$(".more-title").toggleClass("on");$(".more-listing").toggleClass("on");$(window).width()<668&&$(".other-categories").is(":visible")&&$(".other-categories").css("display","inline-block")})});var tallest=0;$(".other-categories > li").each(function(){var e=$(this).height();e>tallest&&(tallest=e)});$(".other-categories li").height(tallest);checkWidth();$(window).resize(function(){checkWindowSize();mobileWindowSize();checkWidth()});$(document).ready(function(){function e(){$(".btn-navbar").click(function(){$("body,html").scrollTop(0)})}function n(){if(t.hasClass("affix")){t.parent().addClass("affix-container");t.children("li:last-child").show()}else{t.children("li:last-child").hide();t.parent().removeClass("affix-container")}}checkWindowSize();mobileWindowSize();$("footer .sub-menu .sub-menu").remove();e();var t=$("#menu-primary-navigation");t.affix({offset:170});t.wrap("<div>");t.append("<li>"+$("<div>").append($("header .get-started").clone()).html()+"</li>");flagDropdownsWithMultipleItems(t);n();$(window).scroll(n);$(".post-more").append("<a href='#' class='read-less'>Read Less</a>");$(".main-content a.read-more").click(function(){$(".main-content .post-more").slideDown();$(".main-content .read-more").hide();return!1});$(".main-content a.read-less").click(function(){$("html, body").animate({scrollTop:$("#topbar").offset().top},1e3,"swing",function(){$(".main-content .post-more").hide();$(".main-content .read-more").show()});return!1});$(".pod-listing a.read-more").click(function(){$(this).next(".post-more").slideDown();$(this).hide();return!1});$(".pod-listing a.read-less").click(function(){var e=$(this);$("html, body").animate({scrollTop:e.parent().parent().offset().top-100},1e3,"swing",function(){e.parent().hide();e.parent().parent().find(".read-more").show()});return!1});var r=$(".other-categories li:first-child").position();$(".other-categories li").each(function(){r.top!=$(this).position().top&&$(this).prev().addClass("no-border");r=$(this).position()});$(".breadcrumbs").append("<span class='separator'>></span>");$("ul li:last-child").addClass("last");var i=$("#menu-top-navigation .menu-alteva-communications");i.find(".dropdown-toggle").removeClass("dropdown-toggle");i.find(".dropdown-menu").show();i.find(".caret").remove();$("img.hide-empty").each(function(){$(this).attr("src")!=""&&$(this).show()});$(".search-results .pager .previous a").text("More Results");$(".search-results .pager .next a").text("Previous Results");$(".searchmobile").click(function(){var e=$(this);e.toggleClass("open");$("#searchform").toggle(100);$(".in").toggle(100)});$(".network-status-problem").append('<div class="closewrap"><div class="close-alert"></div></div>');$(".close-alert").click(function(){$(".network-status-problem").hide(100);$.post(ajaxurl,{action:"hide_network_status"})});$("p").each(function(){$.trim($(this).html()).length<0&&$(this).hide()})});$(".sidebar-content").hide();($(".sidebar .widget p").length>1||$(".sidebar li a").length>1)&&$(".sidebar-content").show();navigator.userAgent.indexOf("Safari")!=-1&&navigator.userAgent.indexOf("Chrome")==-1&&$("body").addClass("safari");navigator.userAgent.indexOf("Firefox")!=-1&&$("body").addClass("firefox");if(Object.hasOwnProperty.call(window,"ActiveXObject")&&!window.ActiveXObject){$("body").addClass("ie");$(document).ready(function(){$(".affix-container").prependTo("body")})};