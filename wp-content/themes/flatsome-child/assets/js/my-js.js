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
