$('.owl-item').slice(0,5).show();
$('.bttn').on('click', function(){
    $('.font12').toggleClass('font12-rotate');
        setTimeout(function(){
            $('.font12').removeClass('font12-rotate');
        }, 1000);
    $('.owl-item:hidden').slice(0,5).delay(500).slideDown();
    if($('.owl-item:hidden').length == 0){
        $('.page-container:hidden').slideDown();
        $('.bttn').fadeOut('slow');
        }
    })