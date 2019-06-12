import AOS from 'aos';
import 'aos/dist/aos.css'; // You can also use <link> for styles

$(document).ready(function () {
    AOS.init();

    let timeoutTimer;

    $('#courseSearchBar').keyup(function () {
        let searchValue = this.value;
        clearTimeout(timeoutTimer);
        timeoutTimer = setTimeout(function () {
            $('.gridItem').each(function (index) {
                let item = $(this);
                if (item.text().toLowerCase().indexOf(searchValue.toLowerCase()) > -1) {
                    item.fadeIn(400, function () {
                        AOS.refresh();
                    });
                } else {
                    item.fadeOut(400, function () {
                        AOS.refresh();
                    });
                }
            });
        }, 250);
    });
});

