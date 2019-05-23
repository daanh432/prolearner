/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

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
