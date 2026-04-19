/**
 * main.js — JavaScript chung cho toàn site
 *
 * Bao gồm:
 * 1. Header scroll effect
 * 2. Search box toggle
 * 3. Mobile menu (hamburger + overlay + accordion)
 *
 * Không dùng jQuery — viết thuần Vanilla JS để nhẹ hơn
 * và không phụ thuộc thư viện ngoài.
 */

// Chờ DOM load xong mới chạy
document.addEventListener('DOMContentLoaded', function () {

    /* ========================================================
       1. HEADER SCROLL EFFECT
       Thêm class .scrolled vào header khi cuộn xuống
       CSS sẽ thêm shadow cho header
       ======================================================== */
    const mainHeader = document.getElementById('mainHeader');

    /**
     * Xử lý sự kiện scroll — thêm/xóa class scrolled
     * @returns {void}
     */
    function handleHeaderScroll() {
        if (window.scrollY > 10) {
            mainHeader.classList.add('scrolled');
        } else {
            mainHeader.classList.remove('scrolled');
        }
    }

    // Gắn sự kiện scroll vào window
    window.addEventListener('scroll', handleHeaderScroll, { passive: true });


    /* ========================================================
       2. SEARCH BOX TOGGLE
       Click vào icon search → mở rộng form search
       Click ra ngoài → đóng lại
       ======================================================== */
    const searchToggle = document.getElementById('searchToggle');
    const searchForm   = document.getElementById('searchForm');
    const searchInput  = document.getElementById('searchInput');

    /**
     * Mở search form và focus vào input
     * @returns {void}
     */
    function openSearch() {
        searchForm.classList.add('active');
        // Delay nhỏ để animation kịp chạy trước khi focus
        setTimeout(() => searchInput.focus(), 200);
    }

    /**
     * Đóng search form
     * @returns {void}
     */
    function closeSearch() {
        searchForm.classList.remove('active');
        searchInput.value = '';
    }

    if (searchToggle) {
        searchToggle.addEventListener('click', function (e) {
            e.stopPropagation(); // Ngăn event bubble lên document
            if (searchForm.classList.contains('active')) {
                closeSearch();
            } else {
                openSearch();
            }
        });
    }

    // Click ra ngoài search form → đóng
    document.addEventListener('click', function (e) {
        if (searchForm && !searchForm.contains(e.target) && e.target !== searchToggle) {
            closeSearch();
        }
    });

    // Nhấn Escape → đóng search
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
            closeSearch();
        }
    });


    /* ========================================================
       3. MOBILE MENU
       - Hamburger button → mở/đóng mobile menu
       - Overlay click → đóng mobile menu
       - Accordion buttons → mở/đóng submenu
       ======================================================== */
    const hamburgerBtn  = document.getElementById('hamburgerBtn');
    const mobileMenu    = document.getElementById('mobileMenu');
    const mobileOverlay = document.getElementById('mobileOverlay');
    const mobileClose   = document.getElementById('mobileClose');

    /**
     * Mở mobile menu
     * Thêm class .active vào menu, overlay và hamburger button
     * Khóa scroll của body để không cuộn trang phía sau
     * @returns {void}
     */
    function openMobileMenu() {
        mobileMenu.classList.add('active');
        mobileOverlay.classList.add('active');
        hamburgerBtn.classList.add('active');
        hamburgerBtn.setAttribute('aria-expanded', 'true');
        document.body.style.overflow = 'hidden'; // Khóa scroll
    }

    /**
     * Đóng mobile menu
     * @returns {void}
     */
    function closeMobileMenu() {
        mobileMenu.classList.remove('active');
        mobileOverlay.classList.remove('active');
        hamburgerBtn.classList.remove('active');
        hamburgerBtn.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = ''; // Mở lại scroll
    }

    if (hamburgerBtn) {
        hamburgerBtn.addEventListener('click', function () {
            if (mobileMenu.classList.contains('active')) {
                closeMobileMenu();
            } else {
                openMobileMenu();
            }
        });
    }

    // Click overlay → đóng menu
    if (mobileOverlay) {
        mobileOverlay.addEventListener('click', closeMobileMenu);
    }

    // Click nút X trong menu → đóng menu
    if (mobileClose) {
        mobileClose.addEventListener('click', closeMobileMenu);
    }

    // Escape key → đóng menu
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
            closeMobileMenu();
        }
    });

    /* ---- ACCORDION trong mobile menu ---- */
    const accordionBtns = document.querySelectorAll('.mobile-accordion');

    /**
     * Xử lý click accordion — mở/đóng submenu
     * Dùng kỹ thuật max-height để animate được
     *
     * @param {Event} e - Click event
     * @returns {void}
     */
    accordionBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            const submenu   = this.nextElementSibling; // <ul class="mobile-submenu">
            const isActive  = this.classList.contains('active');

            // Đóng tất cả submenu khác trước
            accordionBtns.forEach(function (otherBtn) {
                otherBtn.classList.remove('active');
                otherBtn.setAttribute('aria-expanded', 'false');
                if (otherBtn.nextElementSibling) {
                    otherBtn.nextElementSibling.classList.remove('active');
                }
            });

            // Nếu chưa active thì mở cái này
            if (!isActive) {
                this.classList.add('active');
                this.setAttribute('aria-expanded', 'true');
                submenu.classList.add('active');
            }
        });
    });

});