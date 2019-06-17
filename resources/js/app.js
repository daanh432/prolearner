/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

var ua = window.navigator.userAgent;
var msie = ua.indexOf("MSIE ");
if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
    document.write('<script src="https://cdnjs.cloudflare.com/ajax/libs/bluebird/3.3.5/bluebird.min.js"></scr' + 'ipt>');
}

require('./bootstrap');
require('./libraries/jquery.visible');

$(document).ready(function () {
    $('.toast').toast('show');

    $("a.scrollLink").click(function (event) {
        let href = $(this).attr('href');
        let elem = $('[data-scroll-anchor="' + href.substring(href.indexOf('#'), href.length).replace('#', '') + '"]');
        if (elem && elem.visible(true) === false) {
            $([document.documentElement, document.body]).animate({
                scrollTop: elem.offset().top
            }, 2000);
        }
    });

    let elem = $('[data-scroll-anchor="' + window.location.hash.replace('#', '') + '"]'); // Fetch element to scroll to
    if (elem && elem.visible(true) === false) {
        $([document.documentElement, document.body]).animate({
            scrollTop: elem.offset().top
        }, 500);
    }
});

$('.themeSwitch').click(function (e) {
    e.preventDefault();
    let body = $(document.body);
    if (body.hasClass('darkTheme')) {
        body.removeClass('darkTheme');
        body.addClass('lightTheme');
        $(".logoSrc").attr('src', '/assets/img/logo.png');
    } else {
        body.removeClass('lightTheme');
        body.addClass('darkTheme');
        $(".logoSrc").attr('src', '/assets/img/Logo_ProLearner_white.png');
    }
    $.get($(this).attr('href'));
    $('.themeSwitch').removeClass('d-none');
    $(this).addClass('d-none');
});
