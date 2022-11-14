$(document).ready(function() {

    $('.color-choose input').on('click', function() {
        var productColor = $(this).attr('data-image');
  
        $('.active').removeClass('active');
        $('.left-column img[data-image = ' + productColor + ']').addClass('active');
        $(this).addClass('active');
    });
  
  });
  