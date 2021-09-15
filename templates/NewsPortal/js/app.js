$(document).ready(function(){
    $('.gotopbtn').hide();

    $(window).scroll(function(){
        if ($(this).scrollTop() > 230) {
            $('.gotopbtn').show();
        } else {
            $('.gotopbtn').hide();
        }
      });

      $('.search-icon').click(function(){
        $('.search-wrap').toggle();
      });
 
    $(this).scrollTop(0); 


  });

$(window).scroll(function(){
    if ($(this).scrollTop() > 260) {
        $('.site-header .blue').addClass('fixed');
    } else {
        $('.site-header .blue').removeClass('fixed');
    }
  });
  

  $('img').unveil(200, function() {
    $(this).on(function() {
        this.style.opacity = 1;
    });
});