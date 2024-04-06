document.addEventListener("DOMContentLoaded", function () {
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenuCloseBtn = document.getElementById('mobile-menu-close-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuBtn && mobileMenuCloseBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', function () {
            mobileMenu.classList.toggle('hidden');
        });

        mobileMenuCloseBtn.addEventListener('click', function () {
            mobileMenu.classList.add('hidden');
        });
    }
});
