// Internet Explorer compatibility fixes
let ua = window.navigator.userAgent;
let msie = ua.indexOf("MSIE ");
if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
    document.write('<script src="https://cdnjs.cloudflare.com/ajax/libs/bluebird/3.3.5/bluebird.min.js"></scr' + 'ipt>');
}

require('./bootstrap');
require('./libraries/jquery.visible');

$(document).ready(function () {
    // Auto show toasts
    $('.toast').toast('show');

    // Scroll to based anchor
    $("a.scrollLink").click(function () {
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

    // Theme switch button for light dark theme

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

    // Course page open close animation on the arrow on the side
    let allowCollapse = true;

    $('.openClose').click(function (e) {
        if (allowCollapse === true) {
            this.classList.toggle("active");
            allowCollapse = false;
            setTimeout(function () {
                allowCollapse = true;
            }, 350);
        }
    });
});
