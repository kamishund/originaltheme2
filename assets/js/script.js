
console.log("script")

  $(function(){
    $('#menu').on('click', function () {
        if ($("#menu").hasClass('active')) {
         $("#menuhontai").fadeOut(700);
        } else {
            $("#menuhontai").fadeIn(700);
        }
        $("#menu").toggleClass('active');
      });
  }());

  $(function() {
    // フェードイン
    $('.inviewfadeIn').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
        if (isInView) {
            $(this).stop().addClass('fadeIn');
        } 
    });
});

$(function() {
    // フェードイン
    $('.inviewLeft').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
        if (isInView) {
            $(this).stop().addClass('fadeIn');
        }
    });
});

$(function() {
    // フェードイン
    $('.inviewWork').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
        if (isInView) {
            $(this).stop().addClass('fadeIn');
        } else {
            $(this).stop().removeClass('fadeIn');
        }
    });
});