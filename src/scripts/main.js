$(document).ready(function () {
    $('.main__slider-items').slick({
        'prevArrow': '<span class="main__slider-arrow main__slider-arrow-prev"><i class="fas fa-chevron-left"></i></span>',
        'nextArrow': '<span class="main__slider-arrow main__slider-arrow-next"><i class="fas fa-chevron-right"></i></span>',
    });

    $('#mobMenuBars').on('click', function () {
        var html = $('html');
        var body = $('body');
        var mobMenu = $('.menu__wrapper');
        if (!mobMenu.is(':visible')) {
            body.css('overflow', 'hidden');
            html.css('overflow', 'hidden');
            mobMenu.fadeIn()
        }
    });

    $('#closeButton').on('click', function () {
        var html = $('html');
        var body = $('body');
        var mobMenu = $('.menu__wrapper');
        if (mobMenu.is(':visible')) {
            body.css('overflow', '');
            html.css('overflow', '');
            mobMenu.fadeOut()
        }
    });

    $('.consultButton').on('click', function (e) {
        e.preventDefault();
        var formID = $(this).attr('href');
        var currentPage = $(this).data('page');
        $(formID).modal('show');
        $('#form_subject').val(currentPage);
    });

    $('#backCallButton').on('click', function (e) {
        e.preventDefault();
        $('#modalBackCallForm').modal('show');
    });

    function sidebarButtonStick() {
        $(window).on('scroll', function () {
            var scrollTop = $(window).scrollTop();
            var sticky = $('.sidebar-fixed-top');
            var stickyContainer = $('.service__order');
            var stickyContainerTop = stickyContainer.offset().top;
            var stickOffset = 15;
            if (scrollTop > 350) {
                var diff = scrollTop + stickOffset - stickyContainerTop;
                sticky.css({'position': 'absolute', 'top': diff})
            } else {
                sticky.css({'position': 'relative', 'top': 'auto'})
            }
        });
    }

    var windowWidth = $(window).width();
    if (windowWidth > 990) {
        sidebarButtonStick();
    }

    $(window).on('resize', function () {
        var windowWidth = $(window).width();
        var sticky = $('.sidebar-fixed-top');
        if (windowWidth > 990) {
            sidebarButtonStick();
        }
        else {
            sticky.css({'position': 'relative', 'top': 'auto'})
        }
    });

});
