document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('.st5-img-tab');
    tabs.forEach(tab => {
        tab.addEventListener('click', function () {
            tabs.forEach(t => t.classList.remove('st5-tab-color-active'));
            tab.classList.add('st5-tab-color-active');
        });
    });
});
