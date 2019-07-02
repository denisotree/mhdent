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
            body.css('overflow', 'auto');
            html.css('overflow', 'auto');
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

});
