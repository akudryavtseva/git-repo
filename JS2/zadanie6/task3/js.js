(function($) {
  $(function() {
    
    var slider = $('.slider');    
    var sliderLength = $('.slider li').length;       
    var itemWidth = 100;
    var containerWidth = parseInt($('.countainer').css('width'));

    var leftValue = 0;    
    var offset = - ((sliderLength - (containerWidth / itemWidth)) * itemWidth);        

    $('.arrow-left').click(function() {
      if (leftValue != 0) {
        leftValue += 100;         
        slider.animate({ left : leftValue + "px"});
      }
    });
    
    $('.arrow-right').click(function() {      
      if (leftValue != offset) {
        leftValue -= 100;
        slider.animate({ left : leftValue + "px"});
      }
    });
  });
})(jQuery);   
