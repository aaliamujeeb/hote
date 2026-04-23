// ================= STATUS =================
function checkStatus() {
    const statusEl = document.getElementById("openStatus");
    if (!statusEl) return;

    const hour = new Date().getHours();

    if (hour >= 11 && hour < 23) {
        statusEl.innerText = "OPEN NOW";
        statusEl.classList.add("open");
        statusEl.classList.remove("closed");
    } else {
        statusEl.innerText = "CLOSED NOW";
        statusEl.classList.add("closed");
        statusEl.classList.remove("open");
    }
}
checkStatus();

// ================= WHATSAPP ORDER =================
document.addEventListener("DOMContentLoaded", function () {

    const phone = "916238276832"; // 🔥 CHANGE NUMBER

    // ================= QUANTITY CONTROL =================
    document.querySelectorAll('.qty-box').forEach(box => {

        let valueEl = box.querySelector('.qty-value');
        let plus = box.querySelector('.plus');
        let minus = box.querySelector('.minus');

        plus.addEventListener('click', () => {
            valueEl.innerText = parseInt(valueEl.innerText) + 1;
        });

        minus.addEventListener('click', () => {
            let current = parseInt(valueEl.innerText);
            if (current > 0) {
                valueEl.innerText = current - 1;
            }
        });

    });

    // ================= MENU ITEM ORDER =================
    document.querySelectorAll('.order-btn').forEach(btn => {

        btn.addEventListener('click', function () {

            let message = "🍽 *HOTE RESTAURANT ORDER*\n\n";

            const box = this.closest('.menu-card').querySelector('.qty-box');

            let qty = parseInt(box.querySelector('.qty-value').innerText);

            if (qty === 0) {
                alert("Please select quantity ❌");
                return;
            }

            let name = box.dataset.name;
            let price = parseInt(box.dataset.price);

            let itemTotal = qty * price;

            message += `• ${name} x${qty} - ₹${itemTotal}\n`;

            message += `\n💰 Total: ₹${itemTotal}`;
            message += `\n\n👤 Name: `;
            message += `\n📞 Contact: `;
            message += `\n📍 Address: `;
            message += `\n\nPlease confirm 🙌`;

            let url = `https://wa.me/${phone}?text=${encodeURIComponent(message)}`;

            window.open(url, '_blank');
        });

    });

}); // ✅ IMPORTANT: closing DOMContentLoaded here


// ================= OFFERS WHATSAPP ORDER =================
document.querySelectorAll('.offer-order-btn').forEach(btn => {

    btn.addEventListener('click', function () {

        let name = this.dataset.name;
        let price = this.dataset.price;

        let phone = "916238276832"; // 🔴 YOUR NUMBER

        let message = `🔥 *HOTE SPECIAL OFFER* 🍽️\n\n`;
        message += `Item: ${name}\n`;
        message += `Price: ₹${price}\n\n`;
        message += `👤 Name: \n`;
        message += `📞 Contact: \n`;
        message += `📍 Address: \n\n`;
        message += `Please confirm 🙌`;

        let url = `https://wa.me/${phone}?text=${encodeURIComponent(message)}`;

        window.open(url, '_blank');
    });

});


// ================= SINGLE ITEM ORDER =================
document.querySelectorAll('.order-single').forEach(btn => {

    btn.addEventListener('click', function () {

        const box = this.closest('.offer-card').querySelector('.qty-box');

        let qty = parseInt(box.querySelector('.qty-value').innerText);

        if (qty === 0) {
            alert("Please select quantity ❌");
            return;
        }

        let name = box.dataset.name;
        let price = parseInt(box.dataset.price);
        let total = qty * price;

        let phone = "916238276832";

        let message = `🍽 *HOTE ORDER*\n\n`;
        message += `Item: ${name}\n`;
        message += `Quantity: ${qty}\n`;
        message += `Total: ₹${total}\n\n`;
        message += `👤 Name:\n📞 Contact:\n📍 Address:\n\nConfirm order 🙌`;

        let url = `https://wa.me/${phone}?text=${encodeURIComponent(message)}`;

        window.open(url, '_blank');

    });

});


// ================= SCROLL ANIMATION =================
function scrollCategories(amount) {
    const container = document.querySelector('.category-scroll');

    if (container) {
        container.scrollBy({
            left: amount,
            behavior: 'smooth'
        });
    }
}
function toggleForm() {
    let form = document.getElementById("addFoodForm");
    form.style.display = form.style.display === "none" ? "block" : "none";
}
function openLightbox(src) {
    document.getElementById("lightbox").style.display = "flex";
    document.getElementById("lightbox-img").src = src;
}

function closeLightbox() {
    document.getElementById("lightbox").style.display = "none";
}