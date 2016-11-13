//Скролл вверх
    $(document).ready(function(){   
      $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
          $('#scroller').fadeIn();
        } else {
          $('#scroller').fadeOut();
        }
      });
     
      $('#scroller').click(function () {
        $('body,html').animate({
          scrollTop: 0
        }, 400);
        return false;
      });
    });
//Переход на якорь
    $(document).ready(function(){
            $('a[href*=#]').bind("click", function(e){
            var anchor = $(this);
            $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top
            }, 1000);
            e.preventDefault();
        });
            return false;
        });