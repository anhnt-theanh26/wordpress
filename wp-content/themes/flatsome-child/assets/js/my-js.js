document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('.st5-tab-item');
    tabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            console.log('hehe');
            tabs.forEach(t => t.classList.remove('st5-tab-color-active'));
            tab.classList.add('st5-tab-color-active');
        });
    });
});
document.addEventListener('DOMContentLoaded', function () {
    function fallbackCopyText(text) {
        const textarea = document.createElement("textarea");
        textarea.value = text;
        textarea.setAttribute("readonly", "");
        textarea.style.position = "absolute";
        textarea.style.left = "-9999px";
        document.body.appendChild(textarea);
        textarea.select();

        try {
            const successful = document.execCommand("copy");
            if (successful) {
                alert("Đã sao chép mã: " + text);
            } else {
                alert("Không thể sao chép. Hãy thử thủ công.");
            }
        } catch (err) {
            alert("Lỗi sao chép.");
            console.error(err);
        }

        document.body.removeChild(textarea);
    }

    document.querySelectorAll(".coupon-container").forEach(container => {
        container.addEventListener("click", function () {
            const text = container.querySelector(".coupon-text")?.innerText.trim();
            if (text) {
                fallbackCopyText(text);
            }
        });
    });
});

// owl 
jQuery(document).ready(function ($) {
    $('.owl-carousel.slide-post').owlCarousel({
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
    })
});