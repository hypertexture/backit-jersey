/* ==================================================
 Mobile Navigation
================================================== */
(function($) {

  $.fn.menumaker = function(options) {
      
      var cssmenu = $(this), settings = $.extend({
        title: "Menu",
        format: "dropdown",
        sticky: false
      }, options);

      return this.each(function() {
        cssmenu.prepend('<div id="menu-button">' + '<div id="mobile-nav-icon">' + '<span>' + '</span>' + '<span>' + '</span>' + '<span>' + '</span>' +'</div>' + settings.title  + '</div>');
        $(this).find("#menu-button").on('click', function(){
          $('#mobile-nav-icon').toggleClass('open-x');
          $(this).toggleClass('menu-opened');
          var mainmenu = $(this).next('ul');
          if (mainmenu.hasClass('open')) { 
            mainmenu.hide().removeClass('open');
          }
          else {
            mainmenu.show().addClass('open');
            if (settings.format === "dropdown") {
              mainmenu.find('ul').show();
            }
          }
        });

        cssmenu.find('li ul').parent().addClass('has-sub');

        multiTg = function() {
          cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
          cssmenu.find('.submenu-button').on('click', function() {
            $(this).toggleClass('submenu-opened');
            if ($(this).siblings('ul').hasClass('open')) {
              $(this).siblings('ul').removeClass('open').hide();
            }
            else {
              $(this).siblings('ul').addClass('open').show();
            }
          });
        };

        if (settings.format === 'multitoggle') multiTg();
        else cssmenu.addClass('dropdown');

        if (settings.sticky === true) cssmenu.css('position', 'fixed');

        resizeFix = function() {
          if ($( window ).width() > 1024) {
            cssmenu.find('ul').show();
          }

          if ($(window).width() <= 768) {
            cssmenu.find('ul').hide().removeClass('open');
          }
        };
        resizeFix();
        return $(window).on('resize', resizeFix);

      });
  };
})(jQuery);



$("#inpt_search").on('focus', function () {
  $(this).parent('label').addClass('active');
});

$("#inpt_search").on('blur', function () {
  if($(this).val().length == 0)
    $(this).parent('label').removeClass('active');
});

// ----------------------------------
// Mega Nav Drop Down menu functions
//-----------------------------------

$(document).ready(function(){

  var userMenu = $('#userMenu');

  $('#user-dropdown').on('mouseenter tap', function(){
      userMenu.addClass('mega-dropper');

          userMenu.on('mouseleave', function(){
              userMenu.removeClass('mega-dropper');
          });

  });


});

$('#log-in').on ('click', function(){
$('#login-tog').addClass('open');

});


//--------------------------------------------------------

//--------------------------------------------------------

