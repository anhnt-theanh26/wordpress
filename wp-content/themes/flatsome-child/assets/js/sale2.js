jQuery(document).ready(function ($) {
    $('.owl-carousel.owl-theme.sale2_st2_owl_carousel_1').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        autoHeight: true,
        responsive: {
            0: {
                items: 1,
                nav: true,
            },
            600: {
                items: 2,
                nav: true,
            },
            900: {
                items: 3,
                nav: true,
            },
            1200: {
                items: 4,
                nav: true,
            }
        }
    });
    const tabs = document.querySelectorAll('.sale2-st3-tab-item');
    tabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            tabs.forEach(t => t.classList.remove('sale2_tab_active'));
            tab.classList.add('sale2_tab_active');
        });
    });
});