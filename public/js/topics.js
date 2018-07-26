$(function () {
   $('.card').on('mouseenter', function(){
       $(this).removeClass('shadow-sm');
       $(this).addClass('shadow');
    });
    
    $('.card').on('mouseleave', function(){
        $(this).addClass('shadow-sm');
       $(this).removeClass('shadow');
   });
});