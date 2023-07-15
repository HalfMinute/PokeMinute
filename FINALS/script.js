$(document).ready(function () {
    $('.card4').click(function (event) {
        event.stopPropagation();
        $(this).toggleClass('enlarge').toggleClass('card-hover');
    });
    $('.card4').mouseleave(function (event) {
        event.stopPropagation();
        $(this).removeClass('enlarge').addClass('card-hover');
    });
    $(document).click(function (event) {
        var card4 = $('.card4');
        if (!card4.is(event.target) && card4.has(event.target).length === 0){
            $('.card4').removeClass('enlarge').addClass('card-hover');
        }
    });
    
    var currentPage = window.location.pathname.split('/').pop().split('.')[0];

    if (currentPage === 'shop'){
        $('.container').css('background-image', 'url("")');
    }
    else{
        $('.container').css('background-image', 'url("images/wallpaper.jpg"');
    }
});